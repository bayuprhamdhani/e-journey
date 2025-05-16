@extends('layout')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&amp;display=swap" rel="stylesheet"/>
  <style>
    body {
        font-family: 'Nunito', sans-serif;
        background-color: #f8f9fa;
    }

    body, h1, h2, h3, h4, h5, h6, p, a, span, strong {
        color: #23486A;
    }

    .main-content {
        text-align: center;
        padding: 2rem 1rem;
        position: relative;
        background-color: #e2e8f0;
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

    /* pengecualian: warna putih untuk teks di dream-user */
    .dream-user,
    .dream-user span {
        color: white !important;
    }
    .dream-user a {
        color:  #23486A !important;
    }
</style>

@guest
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body rounded shadow">
                            <h1 class="logo-text" style="font-weight: bold; font-size: 40px;">Welcome To e-journey</h1>
                            <h5 class="">Lets make your dream come true with us !</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="main-content">
    <div class="container d-flex justify-content-start align-items-start">
        <img src="{{ asset('images/robot1.png') }}" alt="" style="width: 250px; height: 300px; margin-right: 5px;">
        <div class="text-start">
            <h1 style="font-size: 55px;">
                Haaai, Selamat datang yaaa kakak...
            </h1>
            <h1 style="font-size: 60px;">
                Ayo wujudkan mimpinya bareng kami !
            </h1>
        </div>
    </div>
    <div class="dream-user">        
        <div class="d-flex justify-content-center align-items-center px-5" style="width: 950px; background-color: #23486A; color: white; font-size: 60px; border-radius: 50px;">
            <span>
                {{ Auth::user()->student?->dream ? 'Target: ' . Auth::user()->student->dream : 'Konsultasikan jurusan-mu' }}
            </span>
        </div>
    </div>
</div>
<div class="container card-container ">
    <div class="row text-center justify-content-center">
        <div class="col-md-3 col-sm-6 mb-5">
            <a href="{{ route('advice') }}" class="text-decoration-none text-dark">
                <div class="card d-flex align-items-center justify-content-center text-center" style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; border: none;">
                    <img src="{{ asset('images/advice.png') }}" alt="" style="width: 85px; height: 85px;">
                    <h1 class="">ADVICE</h1>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 mb-5">
            <a href="{{ route('trophy') }}" class="text-decoration-none text-dark">
                <div class="card d-flex align-items-center justify-content-center text-center" style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; border: none;">
                    <img src="{{ asset('images/trophy.png') }}" alt="" style="width: 85px; height: 85px;">
                    <h1>TROPHY</h1>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="container info-section">
    <div class="row">
        <h3>PRIORITY ADVICE</h3>
        @php
            $maxCards = 3;
            $actualCount = $advices->count();
        @endphp

        @foreach($advices as $advice)
            <div class="col-md-4 mb-5">
                <div class="card p-3 text-center d-flex align-items-center justify-content-center" style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; height: 100%; min-height: 150px;">
                    <h3>{{ $advice->advice }}</h3>
                </div>
            </div>
        @endforeach

        @for ($i = 0; $i < $maxCards - $actualCount; $i++)
            <div class="col-md-4 mb-5">
                <div class="card p-3 text-center d-flex align-items-center justify-content-center" style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; height: 100%; min-height: 150px;">
                    <h2 class="m-0 fw-bold text-muted">Advicenya pin ya kak biar muncul disini...</h2>
                </div>
            </div>
        @endfor
    </div>
    <div class="row">
    <h3>UPDATED MARK</h3>

    @php
        $maxDisplay = 3;
        $displayed = count($semesterMarks);
    @endphp

    @foreach($semesterMarks as $data)
        <div class="col-md-4 mb-5">
            <div class="card p-3" style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; border: none;">
                <div class="d-flex">
                    <img 
                        alt="Trophy" 
                        class="me-3" 
                        src="{{ asset('images/' . ($data['average'] >= 90 ? 'gold' : ($data['average'] >= 75 ? 'silver' : 'bronze')) . '.png') }}" 
                        style="width: 150px; height: 150px; object-fit: cover;" 
                    />
                    <div>
                        <p><strong>
                            @if($data['average'] >= 90)
                                AMAZING !
                            @elseif($data['average'] >= 75)
                                GOOD JOB !
                            @else
                                FIGHTING !
                            @endif
                        </strong></p>
                        <p><strong>MARK:</strong> {{ $data['total'] }} / {{ $data['count'] }} Lesson</p>
                        <p><strong>LEVEL:</strong> 
                            @if($data['average'] >= 90)
                                GOLD
                            @elseif($data['average'] >= 75)
                                SILVER
                            @else
                                BRONZE
                            @endif
                        </p>
                        <p><strong>SEMESTER:</strong> {{ $data['semester'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{-- Tambahkan kartu kosong jika kurang dari 3 --}}
    @for($i = $displayed + 1; $i <= $maxDisplay; $i++)
        <div class="col-md-4 mb-5">
            <div class="card p-3 text-center d-flex align-items-center justify-content-center" style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; height: 100%; min-height: 150px;">
                <h2 class="m-0 fw-bold text-muted">Yahhh semester {{ $i }} belum di input Marknya</h2>
            </div>
        </div>
    @endfor
    </div>
    <div class="row">
        <h3>POPULAR GENERAL TROPHY</h3>
        @php
            $maxCards = 3;
            $actualCount = $general_trophies->count();
        @endphp

        @foreach($general_trophies as $general_trophy)
            <div class="col-md-4 mb-5">
                <div class="card p-3" style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; border: none; height: 100%; min-height: 150px;">
                    <div class="d-flex">
                    <img alt="{{ $general_trophy->name }}" class="me-3"
                        src="{{ asset($general_trophy->logo) }}"
                        style="width: 200px; height: 250px; object-fit: cover;" />
                        <div>
                            <p><strong>Name:</strong> {{ $general_trophy->name }}</p>
                            <p><strong>Reward:</strong> {{ $general_trophy->reward }}</p>
                            <p><strong>Date:</strong> {{ $general_trophy->date ?? '-' }}</p>
                            <p><strong>Committee:</strong> {{ $general_trophy->committeeRelation->name ?? '-' }}</p>
                            <p><strong>Score:</strong> {{ $general_trophy->score }}</p>

                            <p><strong>Link:</strong>
                                <a class="text-primary" href="{{ $general_trophy->link }}" target="_blank">
                                    {{ $general_trophy->link }}
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
                    <h2 class="m-0 fw-bold text-muted">Maaf banget nih kak... kalo sekarang tuh Popular General Trophy gak ada lagi</h2>
                </div>
            </div>
        @endfor
    </div>
    <div class="row">
    <h3>POPULAR {{ strtoupper($major) }} TROPHY</h3>
        @php
            $maxCards = 3;
            $actualCount = $major_trophies->count();
        @endphp

        @foreach($major_trophies as $major_trophy)
            <div class="col-md-4 mb-5">
                <div class="card p-3" style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; border: none; height: 100%; min-height: 150px;">
                    <div class="d-flex">
                    <img alt="{{ $major_trophy->name }}" class="me-3"
                        src="{{ asset($major_trophy->logo) }}"
                        style="width: 200px; height: 250px; object-fit: cover;" />
                        <div>
                            <p><strong>Name:</strong> {{ $major_trophy->name }}</p>
                            <p><strong>Reward:</strong> {{ $major_trophy->reward }}</p>
                            <p><strong>Date:</strong> {{ $major_trophy->date ?? '-' }}</p>
                            <p><strong>Committee:</strong> {{ $major_trophy->committeeRelation2->name ?? '-' }}</p>
                            <p><strong>Score:</strong> {{ $major_trophy->score }}</p>

                            <p><strong>Link:</strong>
                                <a class="text-primary" href="{{ $major_trophy->link }}" target="_blank">
                                    {{ $major_trophy->link }}
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
                    <h2 class="m-0 fw-bold text-muted">Maaf banget nih kak... kalo sekarang tuh Popular {{ strtoupper($major) }} Trophy gak ada lagi</h2>
                </div>
            </div>
        @endfor
    </div>
</div>
  <script>
    function changeNavbarColor(color) {
    document.documentElement.style.setProperty('--navbar-color', color);
}
const itemColor = '#e2e8f0'; // Misalnya warna merah
changeNavbarColor(itemColor);
  </script>
  @endguest

@endsection