@extends('layout')

@section('content')
  <title>Pinned Advice</title>

  <!-- Fonts & Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet" />

  <!-- Custom Styles -->
  <style>

    .btn-full {
        flex: 1;
        width: 100%;
        text-align: center;
    }
    body {
      font-family: 'Merriweather', serif;
      background: linear-gradient(to bottom, #cbd5e1, #23486A);
      min-height: 100vh;
      margin: 0;
    }

    .main-wrapper {
      max-width: 1200px;
      margin: 0 auto;
      padding: 4rem 1rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 2rem;
    }

    @media (min-width: 992px) {
      .main-wrapper {
        flex-direction: row;
        align-items: flex-start;
      }
    }

    .robot-img {
      width: 100%;
      max-width: 400px;
      height: auto;
      flex-shrink: 0;
    }

    .content-box {
      width: 100%;
      flex: 1;
      padding-left: 2rem;
    }

    h2, h3 {
      color: #1e293b;
      font-weight: 700;
    }

    .advice-box {
      background-color: white;
      border-radius: 1rem;
      padding: 1.5rem 2rem;
      font-family: Arial, sans-serif;
      font-size: 1.125rem;
      line-height: 1.6;
      color: black;
      margin-bottom: 2rem;
    }

    .btn-yellow {
      background-color: #facc15;
      color: black;
      font-weight: 800;
      border-radius: 0.5rem;
      padding: 0.75rem 2rem;
      font-size: 1.25rem;
      border: none;
      transition: background-color 0.2s ease-in-out;
    }

    .btn-yellow:hover,
    .btn-yellow:focus {
      background-color: #eab308;
    }

    .btn-darkblue {
      background-color: #23486A;
      color: white;
      font-weight: 800;
      border-radius: 0.5rem;
      padding: 0.75rem 2rem;
      font-size: 1rem;
      border: none;
      transition: background-color 0.2s ease-in-out;
    }

    .btn-darkblue:hover,
    .btn-darkblue:focus {
      background-color: #334155;
    }
  </style>

    <!-- Main Content -->
    <div class="main-wrapper">
        <!-- Robot Image -->
        <img src="{{ asset('images/robot1.png') }}" alt="Robot" class="robot-img">

        <!-- Textual Content -->
        <div class="content-box text-center text-lg-start">
            <h1>PRIORITY ADVICE</h1>
                @php
                    $maxCards = 1;
                $actualCount = $advices->count();
                @endphp

            @foreach($advices as $advice)
            <div class="mb-4">
                <div class="card p-3 text-center d-flex align-items-center justify-content-center"
                    style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; height: 100%; min-height: 150px;">
                    <h1>{{ $advice->advice }}</h1>
                </div>
            </div>
            @endforeach

            @for ($i = 0; $i < $maxCards - $actualCount; $i++)
            <div class="mb-4">
                <div class="card p-3 text-center d-flex align-items-center justify-content-center"
                   style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; height: 100%; min-height: 150px;">
                <h2 class="m-0 fw-bold text-muted">Advicenya pin ya kak biar muncul disini...</h2>
                </div>
            </div>
            @endfor

            <div class="d-flex flex-column flex-md-row gap-3">
                <a href="{{ route('dream') }}" class="btn btn-warning shadow d-flex justify-content-center align-items-center" style="width: 290px; height: 50px; text-decoration: none; color: black box-shadow: 0 4px 8px #23486A;;">
                    KONSULTASI MIMPI
                </a>
                <a href="{{ route('consultation') }}" class="btn btn-warning shadow d-flex justify-content-center align-items-center" style="width: 290px; height: 50px; text-decoration: none; color: black box-shadow: 0 4px 8px #23486A;;">
                    BINCANG SANTAI
                </a>
                <a href="{{ route('motivation') }}" class="btn btn-darkblue shadow d-flex justify-content-center align-items-center" style="width: 290px; height: 50px; text-decoration: none; color: white; box-shadow: 0 4px 8px #23486A;;">
                    NASIHAT DAN MOTIVASI
                </a>
            </div>
        </div>
    </div>

  <!-- Optional JS -->
  <script>
    function changeNavbarColor(color) {
      document.documentElement.style.setProperty('--navbar-color', color);
    }
    changeNavbarColor('transparent');
  </script>
@endsection
