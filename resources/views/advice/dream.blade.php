@extends('layout')

@section('content')
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Chat AI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap");
    body {
      font-family: "Inter", sans-serif;
      background-color: white;
      color: black;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    #chatBox {
      overflow-y: auto;
      padding: 2rem 1rem;
      flex: 1;
      max-width: 768px;
      width: 100%;
      margin: 0 auto;
      padding-bottom: 140px; /* ruang untuk form input agar tidak nutupin */
    }

    #chatFormWrapper {
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      background-color: white;
      border-top: 1px solid #dee2e6;
      padding: 1rem;
      z-index: 1030;
      box-shadow: 0 -2px 10px rgba(0,0,0,0.15);
    }

    .chat-bubble {
      border-radius: 1.25rem;
      padding: 0.75rem 1rem;
      max-width: 75%;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    #gptForm {
      max-width: 768px;
      width: 100%;
      margin: 0 auto;
      background-color: white;
      border: 1px solid #dee2e6;
      box-shadow: 10px 10px 10px rgba(0,0,0,0.3);
    }

    textarea {
      resize: none;
    }

    .btn-send {
      width: 45px;
      height: 45px;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #23486A;
      border: none;
      color: white;
    }

    .btn-send:hover {
      background-color: #1c3a56;
    }
  </style>
</head>
<body>

<main id="chatBox" class="mb-4"></main>

<div id="chatFormWrapper">
<!-- Ubah form menjadi container kosong, tombol akan diisi lewat JS -->
<form id="gptForm" class="rounded-4 mx-auto">
  @csrf
  <div id="optionButtons" class="d-flex flex-wrap gap-2 justify-content-center"></div>
</form>

</div>

<!-- Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center">
      <div class="modal-body p-4">
        <h5 class="text-success mb-3"><i class="fas fa-check-circle"></i> Dimasukkan ke Advice!</h5>
      </div>
    </div>
  </div>
</div>
<script>
  function scrollToBottom() {
    setTimeout(() => {
      window.scrollTo(0, document.body.scrollHeight);
    }, 100);
  }

  let currentQuestionIndex = 0;

  function loadQuestion(index) {
    $.ajax({
      url: "{{ route('gpt.generate2') }}",
      type: "POST",
      data: {
        _token: "{{ csrf_token() }}",
        auto_greet: true,
        index: index
      },
      success: function(response) {
        if (response.done) {
  const type = response.intelligence_type || "Tidak diketahui";
  const majors = response.recommended_majors || [];

  let majorList = '';
  if (majors.length > 0) {
    majorList = `
  <ul class="mt-2">
    ${majors.map(major => `
      <li class="d-flex justify-content-between align-items-center mb-2">
        <span>🎓 ${major}</span>
        <button class="btn btn-sm btn-success add-to-dream" data-major="${major}">
          Jadikan Impian
        </button>
      </li>
    `).join('')}
  </ul>
`;
  } else {
    majorList = `<div class="mt-2">Belum ada rekomendasi jurusan.</div>`;
  }

  $('#chatBox').append(`
    <div class="d-flex justify-content-start mb-3">
      <div class="chat-bubble" style="background-color: #23486A; color: white;">
        Selesai! 🎉 Tipe Kecerdasan kamu adalah ${type}
        <div class="mt-2">
          Rekomendasi Jurusan:
          ${majorList}
        </div>
      </div>
    </div>
  `);

  $('#optionButtons').empty();
  scrollToBottom();
  return;
}




        const questionText = $('<div>').text(response.question).html();
        $('#chatBox').append(`
          <div class="d-flex justify-content-start mb-3">
            <div class="chat-bubble" style="background-color: #23486A; color: white;">
              ${questionText}
            </div>
          </div>
        `);

        $('#optionButtons').empty();
        response.options.forEach(option => {
  const button = `
  <button type="button" class="btn btn-outline-primary rounded-3 option-button" style="min-width: 150px;"
          data-score="${option.score}" data-question-id="${response.id}" data-answer-id="${option.id}">
    ${option.text}
  </button>`;

  $('#optionButtons').append(button);
});


        scrollToBottom();
      }
    });
  }

  $(document).ready(function() {
    // Load pertanyaan pertama
    loadQuestion(currentQuestionIndex);

    // Event klik tombol pilihan jawaban
    $(document).on('click', '.option-button', function() {
  $('.option-button').prop('disabled', true);

  const selectedText = $(this).text().trim();
  const selectedScore = $(this).data('score');
  const questionId = $(this).data('question-id');
  const answerId = $(this).data('answer-id');
  const token = $('input[name="_token"]').val();

  // Tampilkan jawaban user
  $('#chatBox').append(`
    <div class="d-flex justify-content-end mb-3">
      <div class="chat-bubble" style="color: #23486A; background-color: white; border: 1px solid #dee2e6;">
        ${selectedText}
      </div>
    </div>
  `);

  // Kirim ke backend
  $.post("{{ route('gpt.saveAnswer') }}", {
    _token: token,
    question_id: questionId,
    answer_id: answerId
  });

  currentQuestionIndex++;
  setTimeout(() => {
    loadQuestion(currentQuestionIndex);
  }, 500);
  
  scrollToBottom();
});



    // Form submit: kirim prompt manual
    $('#gptForm').submit(function(e) {
      e.preventDefault();

      let prompt = $('#prompt').val().trim();
      if (!prompt) return;

      let token = $('input[name="_token"]').val();

      $('#chatBox').append(`
        <div class="d-flex justify-content-end mb-3">
          <div class="chat-bubble" style="color: #23486A; background-color: white; border: 1px solid #dee2e6;">
            ${prompt}
          </div>
        </div>
      `);
      $('#prompt').val('');

      let loadingId = 'loading-' + Date.now();
      $('#chatBox').append(`
        <div id="${loadingId}" class="d-flex justify-content-start mb-3">
          <div class="chat-bubble fst-italic" style="background-color: #23486A; color: white;">Mengetik...</div>
        </div>
      `);

      scrollToBottom();

      $.ajax({
        url: "{{ route('gpt.generate2') }}",
        type: "POST",
        data: {
          _token: token,
          prompt: prompt
        },
        success: function(response) {
          const escapedOutput = $('<div>').text(response.output).html().replace(/\n/g, '<br>');
          const adviceBubble = `
            <div class="d-flex justify-content-start mb-3">
              <div class="chat-bubble" style="background-color: #23486A; color: white;">
                <div>${escapedOutput}</div>
              </div>
            </div>
          `;
          $('#' + loadingId).replaceWith(adviceBubble);
          scrollToBottom();
        },
        error: function() {
          $('#' + loadingId).replaceWith(`
            <div class="d-flex justify-content-start mb-3">
              <div class="chat-bubble bg-danger text-white">Terjadi kesalahan saat memproses.</div>
            </div>
          `);
          scrollToBottom();
        }
      });
    });

    // Klik "add to advice"
    $(document).on('click', '.add-to-advice', function() {
      const adviceText = $(this).data('advice');
      const token = $('input[name="_token"]').val();

      $.post("{{ route('advice.store') }}", {
        _token: token,
        advice: adviceText
      }, function(response) {
        if (response.message) {
          $('#successModal').modal('show');
        }
      }).fail(function() {
        alert("Gagal menambahkan ke Advice.");
      });
    });
  });

  $(document).on('click', '.add-to-dream', function() {
  const major = $(this).data('major');
  const token = $('input[name="_token"]').val();

  $.post("{{ route('student.setDream') }}", {
    _token: token,
    dream: major
  }, function(response) {
    alert(response.message || "Berhasil disimpan!");
  }).fail(function() {
    alert("Gagal menyimpan impian.");
  });
});

</script>


</body>
@endsection
