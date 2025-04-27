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
  <form id="gptForm" class="rounded-4 mx-auto">
    @csrf
    <div class="d-flex align-items-start gap-3">
      <textarea id="prompt" name="prompt" rows="1" class="form-control" placeholder="Tulis pertanyaan..."></textarea>
      <button type="submit" class="btn-send rounded-circle" title="Kirim">
        <i class="fas fa-paper-plane"></i>
      </button>
    </div>
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
  // Function to scroll the entire page down
  function scrollToBottom() {
    setTimeout(() => {
      window.scrollTo(0, document.body.scrollHeight);
    }, 100); // Delay to ensure content is fully updated
  }

  // Form submission for user input
  $('#gptForm').submit(function(e) {
    e.preventDefault();

    let prompt = $('#prompt').val().trim();
    if (!prompt) return;

    let token = $('input[name="_token"]').val();

    // Append user input to the chat box
    $('#chatBox').append(`
      <div class="d-flex justify-content-end mb-3">
        <div class="chat-bubble" style="color: #23486A; background-color: white; border: 1px solid #dee2e6; box-shadow: 10px 10px 10px rgba(0,0,0,0.3);">${prompt}</div>
      </div>
    `);
    $('#prompt').val(''); // Clear the input

    let loadingId = 'loading-' + Date.now();
    $('#chatBox').append(`
      <div id="${loadingId}" class="d-flex justify-content-start mb-3">
        <div class="chat-bubble fst-italic" style="background-color: #23486A; color: white; box-shadow: 10px 10px 10px rgba(0,0,0,0.3);">Mengetik...</div>
      </div>
    `);

    // Scroll to bottom after showing loading message
    scrollToBottom();

    // Send AJAX request to get AI response
    $.ajax({
      url: "{{ route('gpt.generate3') }}",
      type: "POST",
      data: {
        _token: token,
        prompt: prompt
      },
      success: function(response) {
        const escapedOutput = $('<div>').text(response.output).html();
        const formattedOutput = escapedOutput.replace(/\n/g, '<br>');

        const adviceBubble = `
          <div class="d-flex justify-content-start mb-3">
            <div class="chat-bubble" style="background-color: #23486A; color: white; box-shadow: 10px 10px 10px rgba(0,0,0,0.3); position: relative;">
              <div>${formattedOutput}</div>
              <div class="mt-3">
                <button class="btn btn-sm btn-warning add-to-advice" data-advice="${escapedOutput}">
                  Masukan ke Advice
                </button>
              </div>
            </div>
          </div>
        `;

        $('#' + loadingId).replaceWith(adviceBubble); // Replace loading with AI answer
        scrollToBottom(); // Scroll to bottom after AI response
      },
      error: function() {
        $('#' + loadingId).replaceWith(`
          <div class="d-flex justify-content-start mb-3">
            <div class="chat-bubble bg-danger text-white">Terjadi kesalahan saat memproses.</div>
          </div>
        `);
        scrollToBottom(); // Scroll to bottom even on error
      }
    });
  });

  // Handling the "add to advice" button click
  $(document).on('click', '.add-to-advice', function() {
    const adviceText = $(this).data('advice');
    const token = $('input[name="_token"]').val();

    $.post("{{ route('advice.store') }}", {
      _token: token,
      advice: adviceText
    }, function(response) {
      if (response.message) {
        $('#successModal').modal('show'); // Show success modal
      }
    }).fail(function() {
      alert("Gagal menambahkan ke Advice.");
    });
  });

  // Initial greeting and AI response when the page loads
  $(document).ready(function() {
    $.ajax({
      url: "{{ route('gpt.generate3') }}",
      type: "POST",
      data: {
        _token: "{{ csrf_token() }}",
        auto_greet: true
      },
      success: function(response) {
        const escapedOutput = $('<div>').text(response.output).html();
        const formattedOutput = escapedOutput.replace(/\n/g, '<br>');

        const adviceBubble = `
          <div class="d-flex justify-content-start mb-3 position-relative">
            <div class="chat-bubble" style="background-color: #23486A; color: white; box-shadow: 10px 10px 10px rgba(0,0,0,0.3);">
              ${formattedOutput}
            </div>
          </div>
        `;

        $('#chatBox').append(adviceBubble);
        scrollToBottom(); // Scroll to bottom after initial AI message
      }
    });
  });
</script>

</body>
@endsection
