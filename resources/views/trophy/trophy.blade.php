@extends('layout')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&amp;display=swap" rel="stylesheet"/>
  <style>

* {
}
body, h1, h2, h3, h4, h5, h6, p, a, span, strong {
        color: #23486A;
    }

    body {
        font-family: 'Nunito', sans-serif;
        background-color: #f8f9fa;
    }
    .main-content {
        text-align: center;
        padding: 2rem 1rem;
        position: relative;
        border-radius: 0px 0px 150px 0px;
        background-color: white;
        box-shadow: 0 12px 0 0 #23486A;
        
    }
    .main-content .dream-user {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: -2.5rem;
    }
    .card-container {
        margin-top: 4rem;
    }
    .card-container .card,
    .info-section .card {
        padding: 1.5rem;
        border-radius: 0.5rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    }
</style>
<div class="main-content">
    <div class="container d-flex justify-content-end align-items-start">
        <div class="text-start">
            <h1 style="font-size: 65px;">
                Halo halo... Kakaknya lagi nyari Trophy apa nihhh ?
            </h1>
            <h1 style="font-size: 45px; margin-bottom: 40px;">
                Forum ? Competition ? saya bantu cariin yahhh                 
            </h1>
            <div class="row text-center">
        <div class="col-md-6 col-sm-6">
            <a href="{{ route('competition') }}" class="text-decoration-none text-dark">
                <div class="card d-flex flex-row align-items-center justify-content-center text-start gap-3 px-3 py-4" 
                    style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; border: none;">
                    <img src="{{ asset('images/competition.png') }}" alt="" style="width: 120px; height: 120px;">
                    <h1 class="m-0">COMPETITION</h1>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-sm-6">
            <a href="{{ route('forum') }}" class="text-decoration-none text-dark">
                <div class="card d-flex flex-row align-items-center justify-content-center text-start gap-3 px-3 py-4" 
                    style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; border: none;">
                    <img src="{{ asset('images/forum.png') }}" alt="" style="width: 120px; height: 120px;">
                    <h1 class="m-0">FORUM</h1>
                </div>
            </a>
        </div>
    </div>
        </div>
        <img src="{{ asset('images/robot2.png') }}" alt="" style="width: 250px; height: 300px; margin-right: 5px;">
    </div>
</div>
<div class="container card-container">

</div>
<div class="container info-section">
    <div class="row">
        @php
            $maxCards = 3;
            $actualCount = $pinned_trophies->count();
        @endphp
        <h3>PINNED TROPHIES</h3>
        @foreach($pinned_trophies as $trophy)
            <div class="col-md-4 mb-5">
                <div class="card p-3" style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; border: none; height: 100%; min-height: 150px;">
                    <div class="d-flex">
                        <img alt="{{ $trophy->name }}" class="me-3"
                            src="{{ asset($trophy->logo) }}"
                            style="width: 200px; height: 250px; object-fit: cover;" />
                        <div>
                            <p><strong>Name:</strong> {{ $trophy->name }}</p>
                            <p><strong>Reward:</strong> {{ $trophy->reward }}</p>
                            <p><strong>Date:</strong> {{ $trophy->date ?? '-' }}</p>
                            <p><strong>Committee:</strong>
                            {{ $trophy->committee }}
                            </p>
                            <p><strong>Score:</strong> {{ $trophy->score }}</p>
                            <p><strong>Link:</strong>
                                <a class="text-primary" href="{{ $trophy->link }}" target="_blank">
                                    {{ $trophy->link }}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @for ($i = 0; $i < $maxCards - $actualCount; $i++)
            <div class="col-md-4 mb-5">
                <div class="card p-3 text-center d-flex align-items-center justify-content-center" style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; height: 100%; min-height: 150px;">
                    <h2 class="m-0 fw-bold text-muted">Trophynya pin ya kak biar muncul disini...</h2>
                </div>
            </div>
        @endfor
    </div>
    <div class="row">
        @php
            $maxCards = 3;
            $actualCount = $nearest_trophies->count();
        @endphp
        <h3>NEAREST TROPHIES</h3>
        @foreach($nearest_trophies as $trophy)
            <div class="col-md-4 mb-5">
                <div class="card p-3" style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; border: none; height: 100%; min-height: 150px;">
                    <div class="d-flex">
                        <img alt="{{ $trophy->name }}" class="me-3"
                            src="{{ asset($trophy->logo) }}"
                            style="width: 200px; height: 250px; object-fit: cover;" />
                        <div>
                            <p><strong>Name:</strong> {{ $trophy->name }}</p>
                            <p><strong>Reward:</strong> {{ $trophy->reward }}</p>
                            <p><strong>Date:</strong> {{ $trophy->date ?? '-' }}</p>
                            <p><strong>Committee:</strong> 
                                {{ $trophy->committee }}
                            </p>
                            <p><strong>Score:</strong> {{ $trophy->score }}</p>

                            <p><strong>Link:</strong>
                                <a class="text-primary" href="{{ $trophy->link }}" target="_blank">
                                    {{ $trophy->link }}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @for ($i = 0; $i < $maxCards - $actualCount; $i++)
            <div class="col-md-4 mb-5">
                <div class="card p-3 text-center d-flex align-items-center justify-content-center" style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; height: 100%; min-height: 150px;">
                    <h2 class="m-0 fw-bold text-muted">Aduh sekarang lagi gak ada Trophy terdekat</h2>
                </div>
            </div>
        @endfor
    </div>
    <div class="row">
        @php
            $maxCards = 3;
            $actualCount = $popular_trophies->count();
        @endphp
        <h3>MOST POPULAR TROPHY</h3>
        @foreach($popular_trophies as $popularl_trophy)
            <div class="col-md-4 mb-5">
                <div class="card p-3" style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; border: none; height: 100%; min-height: 150px;">
                    <div class="d-flex">
                    <img alt="{{ $popularl_trophy->name }}" class="me-3"
                        src="{{ asset($popularl_trophy->logo) }}"
                        style="width: 200px; height: 250px; object-fit: cover;" />
                        <div>
                            <p><strong>Name:</strong> {{ $popularl_trophy->name }}</p>
                            <p><strong>Reward:</strong> {{ $popularl_trophy->reward }}</p>
                            <p><strong>Date:</strong> {{ $popularl_trophy->date ?? '-' }}</p>
                            <p><strong>Committee:</strong>
                            {{ $trophy->committee }}
                            </p>
                            <p><strong>Score:</strong> {{ $popularl_trophy->score }}</p>

                            <p><strong>Link:</strong>
                                <a class="text-primary" href="{{ $popularl_trophy->link }}" target="_blank">
                                    {{ $popularl_trophy->link }}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @for ($i = 0; $i < $maxCards - $actualCount; $i++)
            <div class="col-md-4 mb-5">
                <div class="card p-3 text-center d-flex align-items-center justify-content-center" style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; height: 100%; min-height: 150px;">
                    <h2 class="m-0 fw-bold text-muted">Maaf banget nih kak... kalo sekarang tuh Popular Trophy lagi gak ada</h2>
                </div>
            </div>
        @endfor
    </div>
</div>
  <script>
    function changeNavbarColor(color) {
    document.documentElement.style.setProperty('--navbar-color', color);
}
const itemColor = 'white'; // Misalnya warna merah
changeNavbarColor(itemColor);
  </script>
@endsection