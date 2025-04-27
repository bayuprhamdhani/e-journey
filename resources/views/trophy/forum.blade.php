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
#search {
	display: grid;
	grid-template:
		"search" 60px
		/ 420px;
}

#search input {
	display: block;
	grid-area: search;
	-webkit-appearance: none;
	appearance: none;
	width: 100%;
	height: 100%;
	background: none;
	padding: 0 30px 0 60px;
	border: none;
	border-radius: 100px;
	font: 24px/1 system-ui, sans-serif;
	outline-offset: -8px;
}


#search svg {
	grid-area: search;
	overflow: visible;
	color:  #23486A;
	fill: none;
	stroke: currentColor;
}

.spark {
	fill: currentColor;
	stroke: none;
	r: 15;
}

.spark:nth-child(1) {
	animation:
		spark-radius 2.03s 1s both,
		spark-one-motion 2s 1s both;
}

@keyframes spark-radius {
	0% { r: 0; animation-timing-function: cubic-bezier(0, 0.3, 0, 1.57) }
	30% { r: 15; animation-timing-function: cubic-bezier(1, -0.39, 0.68, 1.04) }
	95% { r: 8 }
	99% { r: 10 }
	99.99% { r: 7 }
	100% { r: 0 }
}

@keyframes spark-one-motion {
	0% { transform: translate(-20%, 50%); animation-timing-function: cubic-bezier(0.63, 0.88, 0, 1.25) }
	20% { transform: rotate(-0deg) translate(0%, -50%); animation-timing-function: ease-in }
	80% { transform: rotate(-230deg) translateX(-20%) rotate(-100deg) translateX(15%); animation-timing-function: linear }
	100% { transform: rotate(-360deg) translate(30px, 100%); animation-timing-function: cubic-bezier(.64,.66,0,.51) }
}

.spark:nth-child(2) {
	animation:
		spark-radius 2.03s 1s both,
		spark-two-motion 2.03s 1s both;
}

@keyframes spark-two-motion {
	0% { transform: translate(120%, 50%) rotate(-70deg) translateY(0%); animation-timing-function: cubic-bezier(0.36, 0.18, 0.94, 0.55) }
	20% { transform: translate(90%, -80%) rotate(60deg) translateY(-80%); animation-timing-function: cubic-bezier(0.16, 0.77, 1, 0.4) }
	40% { transform: translate(110%, -50%) rotate(-30deg) translateY(-120%); animation-timing-function: linear }
	70% { transform: translate(100%, -50%) rotate(120deg) translateY(-100%); animation-timing-function: linear }
	80% { transform: translate(95%, 50%) rotate(80deg) translateY(-150%); animation-timing-function: cubic-bezier(.64,.66,0,.51) }
	100% { transform: translate(100%, 50%) rotate(120deg) translateY(0%) }
}

.spark:nth-child(3) {
	animation:
		spark-radius 2.05s 1s both,
		spark-three-motion 2.03s 1s both;
}

@keyframes spark-three-motion {
	0% { transform: translate(50%, 100%) rotate(-40deg) translateX(0%); animation-timing-function: cubic-bezier(0.62, 0.56, 1, 0.54) }
	30% { transform: translate(40%, 70%) rotate(20deg) translateX(20%); animation-timing-function: cubic-bezier(0, 0.21, 0.88, 0.46) }
	40% { transform: translate(65%, 20%) rotate(-50deg) translateX(15%); animation-timing-function: cubic-bezier(0, 0.24, 1, 0.62) }
	60% { transform: translate(60%, -40%) rotate(-50deg) translateX(20%); animation-timing-function: cubic-bezier(0, 0.24, 1, 0.62) }
	70% { transform: translate(70%, -0%) rotate(-180deg) translateX(20%); animation-timing-function: cubic-bezier(0.15, 0.48, 0.76, 0.26) }
	100% { transform: translate(70%, -0%) rotate(-360deg) translateX(0%) rotate(180deg) translateX(20%); }
}




.burst {
	stroke-width: 3;
}

.burst :nth-child(2n) { color: #ff783e }
.burst :nth-child(3n) { color: #ffab00 }
.burst :nth-child(4n) { color: #55e214 }
.burst :nth-child(5n) { color: #82d9f5 }

.circle {
	r: 6;
}

.rect {
	width: 10px;
	height: 10px;
}

.triangle {
	d: path("M0,-6 L7,6 L-7,6 Z");
	stroke-linejoin: round;
}

.plus {
	d: path("M0,-5 L0,5 M-5,0L 5,0");
	stroke-linecap: round;
}




.burst:nth-child(4) {
	transform: translate(30px, 100%) rotate(150deg);
}

.burst:nth-child(5) {
	transform: translate(50%, 0%) rotate(-20deg);
}

.burst:nth-child(6) {
	transform: translate(100%, 50%) rotate(75deg);
}

.burst * {}

@keyframes particle-fade {
	0%, 100% { opacity: 0 }
	5%, 80% { opacity: 1 }
}

.burst :nth-child(1) { animation: particle-fade 600ms 2.95s both, particle-one-move 600ms 2.95s both; }
.burst :nth-child(2) { animation: particle-fade 600ms 2.95s both, particle-two-move 600ms 2.95s both; }
.burst :nth-child(3) { animation: particle-fade 600ms 2.95s both, particle-three-move 600ms 2.95s both; }
.burst :nth-child(4) { animation: particle-fade 600ms 2.95s both, particle-four-move 600ms 2.95s both; }
.burst :nth-child(5) { animation: particle-fade 600ms 2.95s both, particle-five-move 600ms 2.95s both; }
.burst :nth-child(6) { animation: particle-fade 600ms 2.95s both, particle-six-move 600ms 2.95s both; }

@keyframes particle-one-move { 0% { transform: rotate(0deg) translate(-5%) scale(0.0001, 0.0001) } 100% { transform: rotate(-20deg) translateX(8%) scale(0.5, 0.5) } }
@keyframes particle-two-move { 0% { transform: rotate(0deg) translate(-5%) scale(0.0001, 0.0001) } 100% { transform: rotate(0deg) translateX(8%) scale(0.5, 0.5) } }
@keyframes particle-three-move { 0% { transform: rotate(0deg) translate(-5%) scale(0.0001, 0.0001) } 100% { transform: rotate(20deg) translateX(8%) scale(0.5, 0.5) } }
@keyframes particle-four-move { 0% { transform: rotate(0deg) translate(-5%) scale(0.0001, 0.0001) } 100% { transform: rotate(-35deg) translateX(12%) } }
@keyframes particle-five-move { 0% { transform: rotate(0deg) translate(-5%) scale(0.0001, 0.0001) } 100% { transform: rotate(0deg) translateX(12%) } }
@keyframes particle-six-move { 0% { transform: rotate(0deg) translate(-5%) scale(0.0001, 0.0001) } 100% { transform: rotate(35deg) translateX(12%) } }



.bar {
	width: 100%;
	height: 100%;
	ry: 50%;
	stroke-width: 10;
	animation: bar-in 900ms 3s both;
}

@keyframes bar-in {
	0% { stroke-dasharray: 0 180 0 226 0 405 0 0 }
	100% { stroke-dasharray: 0 0 181 0 227 0 405 0 }
}

.magnifier {
	animation: magnifier-in 600ms 3.6s both;
	transform-box: fill-box;
}

@keyframes magnifier-in {
	0% { transform: translate(20px, 8px) rotate(-45deg) scale(0.01, 0.01); }
	50% { transform: translate(-4px, 8px) rotate(-45deg); }
	100% { transform: translate(0px, 0px) rotate(0deg); }
}

.magnifier .glass {
	cx: 27;
	cy: 27;
	r: 8;
	stroke-width: 3;
}
.magnifier .handle {
	x1: 32;
	y1: 32;
	x2: 44;
	y2: 44;
	stroke-width: 3;
}

#results {
	grid-area: results;
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
            <h1 style="font-size: 60px;">
                Semangat kak, Competition itu seru ! 
            </h1>
            <h1 style="font-size: 60px; margin-bottom: 40px;">
                Kakaknya pasti akan semakin berkembang...
            </h1>
            <div id="searchBox">
                <div id="search">
	                <svg viewBox="0 0 420 60" xmlns="http://www.w3.org/2000/svg">
        		        <rect class="bar"/>
            		    <g class="magnifier">
	            		    <circle class="glass"/>
		            	    <line class="handle" x1="32" y1="32" x2="44" y2="44"></line>
    		            </g>
        	    	    <g class="sparks">
            			    <circle class="spark"/>
    	            		<circle class="spark"/>
	    	            	<circle class="spark"/>
            		    </g>
                		<g class="burst pattern-one">
	                		<circle class="particle circle"/>
		                	<path class="particle triangle"/>
			                <circle class="particle circle"/>
            		    	<path class="particle plus"/>
	            		    <rect class="particle rect"/>
    	    	        	<path class="particle triangle"/>
        	    	    </g>
    	            	<g class="burst pattern-two">
	    	            	<path class="particle plus"/>
		    	            <circle class="particle circle"/>
        		    	    <path class="particle triangle"/>
        	    		    <rect class="particle rect"/>
            		    	<circle class="particle circle"/>
	            		    <path class="particle plus"/>
    	            	</g>
	    	            <g class="burst pattern-three">
    		    	        <circle class="particle circle"/>
            			    <rect class="particle rect"/>
                			<path class="particle plus"/>
	            	    	<path class="particle triangle"/>
		                	<rect class="particle rect"/>
			                <path class="particle plus"/>
            		    </g>
    	            </svg>
                    <input type="text" name="q" class="form-control">
                </div>
            </div>
        </div>
        <img src="{{ asset('images/robot2.png') }}" alt="" style="width: 250px; height: 300px; margin-right: 5px;">
    </div>
</div>
<div class="container card-container">

</div>
<div class="container info-section">
<div id="loader" class="text-center my-4" style="display: none;">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>
<div class="row" id="results"></div>

    <div class="row" id="results">
    
    </div>
    <div class="row">
        <h3>PINNED COMPETITIONS</h3>
        @php
            $maxCards = 3;
            $actualCount = $pinned_trophies->count();
        @endphp
        @foreach($pinned_trophies as $trophy)
        <div class="col-md-4 mb-5">
            <div class="card p-3" style="background-color:  #e2e8f0; box-shadow: 0 4px 8px #23486A; border: none; height: 100%; min-height: 150px;">
                <div class="d-flex">
                    <div>
                        <img alt="{{ $trophy->name }}" class="me-3"
                            src="{{ asset($trophy->logo) }}"
                            style="width: 190px; height: 235px; object-fit: cover; margin-bottom: 7px;" />
                        <div class="d-flex">
                            @php
                                $isPinned = false;
                                if (isset($trophy->type) && $trophy->type === 'major') {
                                $isPinned = \App\Models\PinnedMajorTrophy::where('user', auth()->id())
                                    ->where('trophy', $trophy->id)
                                    ->exists();
                                } elseif (isset($trophy->type) && $trophy->type === 'general') {
                                $isPinned = \App\Models\PinnedGeneralTrophy::where('user', auth()->id())
                                    ->where('trophy', $trophy->id)
                                    ->exists();
                                }
                            @endphp
                            @if ($isPinned)
                                <form action="{{ route('trophy.unpin', ['type' => $trophy->type, 'id' => $trophy->id]) }}" method="POST" style="margin-right: 7px;">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger rounded-start">Unpin</button>
                                </form>
                            @else
                                <form action="{{ route('trophy.pin', ['type' => $trophy->type, 'id' => $trophy->id]) }}" method="POST" style="margin-right: 7px;">
                                @csrf
                                    <button type="submit" class="btn btn-primary rounded-start">PIN!</button>
                                </form>
                            @endif
                            @if(in_array($trophy->id, $registeredTrophies))
                                <button class="btn btn-success rounded-start" disabled>Registered</button>
                            @else
                            <form action="{{ route('trophy.register', ['type' => $trophy->type, 'id' => $trophy->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-warning rounded-start" style="color: black;">REGISTER   !</button>
                            </form>
                            @endif
                        </div>
                    </div>
                    <div>
                        <p><strong>Name:</strong> {{ $trophy->name }}</p>
                        <p><strong>Reward: Rp</strong> {{ number_format($trophy->reward, 0, ',', '.') }}</p>
                        <p><strong>Date:</strong> {{ $trophy->date ?? '-' }}</p>
                        <p><strong>Fee: Rp</strong> {{ number_format($trophy->fee, 0, ',', '.') }}</p>
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
                <h2 class="m-0 fw-bold text-muted">Competitionnya pin ya kak biar muncul disini...</h2>
            </div>
        </div>
        @endfor
    </div>
    <div class="row">
        @php
            $maxCards = 3;
            $actualCount = $nearest_trophies->count();
        @endphp
        <h3>NEAREST COMPETITIONS</h3>
            @foreach($nearest_trophies as $trophy)
        <div class="col-md-4 mb-5">
            <div class="card p-3" style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; border: none; height: 100%; min-height: 150px;">
                <div class="d-flex">
                    <div>
                        <img alt="{{ $trophy->name }}" class="me-3"
                            src="{{ asset($trophy->logo) }}"
                            style="width: 190px; height: 235px; object-fit: cover; margin-bottom: 7px;" />
                        <div class="d-flex">
                        @php
                            $type = $trophy->type; // 'general' atau 'major'
                            $trophyId = $trophy->id;
                            $isPinned = $type === 'major'
                                ? \App\Models\PinnedMajorTrophy::where('user', auth()->id())->where('trophy', $trophyId)->exists()
                                : \App\Models\PinnedGeneralTrophy::where('user', auth()->id())->where('trophy', $trophyId)->exists();
                        @endphp
                        @if($isPinned)
                            <form action="{{ route('trophy.unpin', ['type' => $type, 'id' => $trophyId]) }}" method="POST" style="margin-right: 7px;">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-danger rounded-start">Unpin</button>
                            </form>
                        @else
                            <form action="{{ route('trophy.pin', ['type' => $type, 'id' => $trophyId]) }}" method="POST" style="margin-right: 7px;">
                            @csrf
                                <button type="submit" class="btn btn-primary rounded-start">PIN !</button>
                            </form>
                        @endif
                        @if(in_array($trophy->id, $registeredTrophies))
                            <button class="btn btn-success rounded-start" disabled>Registered</button>
                        @else
                        <form action="{{ route('trophy.register', ['type' => $trophy->type, 'id' => $trophy->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-warning rounded-start" style="color: black;">REGISTER   !</button>
                        </form>
                        @endif
                        </div>
                    </div>
                    <div>
                        <p><strong>Name:</strong> {{ $trophy->name }}</p>
                        <p><strong>Reward: Rp</strong> {{ number_format($trophy->reward, 0, ',', '.') }}</p>
                        <p><strong>Date:</strong> {{ $trophy->date ?? '-' }}</p>
                        <p><strong>Fee: Rp</strong> {{ number_format($trophy->fee, 0, ',', '.') }}</p>
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
        <h3>MOST POPULAR COMPETITION</h3>
        @foreach($popular_trophies as $popularl_trophy)
        <div class="col-md-4 mb-5">
            <div class="card p-3" style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; border: none; height: 100%; min-height: 150px;">
                <div class="d-flex">
                    <div>
                        <img alt="{{ $popularl_trophy->name }}" class="me-3"
                            src="{{ asset($popularl_trophy->logo) }}"
                            style="width: 190px; height: 235px; object-fit: cover; margin-bottom: 7px;" />
                        <div class="d-flex">
                            @php
                                $isPinned = false;
                                if ($popularl_trophy->type === 'major') {
                                $isPinned = \App\Models\PinnedMajorTrophy::where('user', auth()->id())
                                ->where('trophy', $popularl_trophy->id)
                                ->exists();
                                } 
                                elseif ($popularl_trophy->type === 'general') {
                                    $isPinned = \App\Models\PinnedGeneralTrophy::where('user', auth()->id())
                                    ->where('trophy', $popularl_trophy->id)
                                    ->exists();
                                }
                            @endphp
                            @if($isPinned)
                                <form action="{{ route('trophy.unpin', ['type' => $popularl_trophy->type, 'id' => $popularl_trophy->id]) }}" method="POST" style="margin-right: 7px;">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger rounded-start">Unpin</button>
                                </form>
                                @else
                                <form action="{{ route('trophy.pin', ['type' => $popularl_trophy->type, 'id' => $popularl_trophy->id]) }}" method="POST" style="margin-right: 7px;">
                                    @csrf
                                    <button type="submit" class="btn btn-primary rounded-start">PIN   !</button>
                                </form>
                            @endif
                            @if(in_array($popularl_trophy->id, $registeredTrophies))
                                <button class="btn btn-success rounded-start" disabled>Registered</button>
                            @else
                            <form action="{{ route('trophy.register', ['type' => $popularl_trophy->type, 'id' => $popularl_trophy->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-warning rounded-start" style="color: black;">REGISTER   !</button>
                            </form>
                            @endif
                        </div>
                    </div>
                    <div>
                        <p><strong>Name:</strong> {{ $popularl_trophy->name }}</p>
                        <p><strong>Reward: Rp</strong> {{ number_format($popularl_trophy->reward, 0, ',', '.') }}</p>
                        <p><strong>Date:</strong> {{ $popularl_trophy->date ?? '-' }}</p>
                        <p><strong>Committee:</strong> {{ $popularl_trophy->committee }}</p>
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
            <div class="card p-3 text-center d-flex align-items-center justify-content-center"
                style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; height: 100%; min-height: 150px;">
                <h2 class="m-0 fw-bold text-muted">Maaf banget nih kak... kalo sekarang tuh Popular Competition lagi gak ada</h2>
            </div>
        </div>
        @endfor
    </div>
    <div class="row">
        <h3>ALL COMPETITION</h3>
        @foreach($all_competitions as $all_competition)
        <div class="col-md-4 mb-5">
            <div class="card p-3" style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; border: none; height: 100%; min-height: 150px;">
                <div class="d-flex">
                    <div>
                        <img alt="{{ $all_competition->name }}" class="me-3"
                            src="{{ asset($all_competition->logo) }}"
                            style="width: 190px; height: 235px; object-fit: cover; margin-bottom: 7px;" />
                        {{-- Tombol PIN/UNPIN + REGISTER --}}
                        <div class="d-flex">
                        @php
                            $isPinned = false;
                            if ($all_competition->type === 'major') {
                            $isPinned = \App\Models\PinnedMajorTrophy::where('user', auth()->id())
                            ->where('trophy', $all_competition->id)
                            ->exists();
                            } 
                            elseif ($all_competition->type === 'general') {
                                $isPinned = \App\Models\PinnedGeneralTrophy::where('user', auth()->id())
                                ->where('trophy', $all_competition->id)
                                ->exists();
                            }
                        @endphp
                        @if($isPinned)
                            <form action="{{ route('trophy.unpin', ['type' => $all_competition->type, 'id' => $all_competition->id]) }}" method="POST" style="margin-right: 7px;">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-danger rounded-start">Unpin</button>
                            </form>
                        @else
                            <form action="{{ route('trophy.pin', ['type' => $all_competition->type, 'id' => $all_competition->id]) }}" method="POST" style="margin-right: 7px;">
                            @csrf
                                <button type="submit" class="btn btn-primary rounded-start">PIN   !</button>
                            </form>
                        @endif
                        @if(in_array($all_competition->id, $registeredTrophies))
                            <button class="btn btn-success rounded-start" disabled>Registered</button>
                        @else
                        <form action="{{ route('trophy.register', ['type' => $all_competition->type, 'id' => $all_competition->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-warning rounded-start" style="color: black;">REGISTER   !</button>
                        </form>
                        @endif
                        </div>
                    </div>
                    <div>
                        <p><strong>Name:</strong> {{ $all_competition->name }}</p>
                        <p><strong>Reward: Rp</strong> {{ number_format($all_competition->reward, 0, ',', '.') }}</p>
                        <p><strong>Date:</strong> {{ $all_competition->date ?? '-' }}</p>
                        <p><strong>Committee:</strong> {{ $all_competition->committee }}</p>
                        <p><strong>Score:</strong> {{ $all_competition->score }}</p>
                        <p><strong>Link:</strong>
                            <a class="text-primary" href="{{ $all_competition->link }}" target="_blank">
                                {{ $all_competition->link }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

  <script>
    function changeNavbarColor(color) {
    document.documentElement.style.setProperty('--navbar-color', color);
}
const itemColor = 'white'; // Misalnya warna merah
changeNavbarColor(itemColor);
  </script>

<script>
$(document).ready(function () {
    // CSRF Setup
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let timer;
    $('input[name="q"]').on('input', function () {
        clearTimeout(timer);
        const query = $(this).val();

        timer = setTimeout(function () {
            if (query.length > 1) {
                $('#loader').show(); // Tampilkan loading

                $.ajax({
                    url: '/search-trophies2',
                    type: 'GET',
                    data: { q: query },
                    success: function (data) {
                        let html = '';
                        html += `<h3>RESULT SEARCH</h3>`;

                        if (data.length > 0) {
                            data.forEach(function (item) {
                                html += `
<div class="col-md-4 mb-5">
    <div class="card p-3" style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; border: none; height: 100%; min-height: 150px;">
        <div class="d-flex">
            <div>
                <img alt="${item.name}" class="me-3"
                    src="${item.logo}"
                    style="width: 190px; height: 235px; object-fit: cover; margin-bottom: 7px;" />
                <div class="d-flex">
${item.isPinned
    ? `<button class="btn btn-danger rounded-start unpin-btn" data-type="${item.type}" data-id="${item.id}" style="margin-right: 7px;">Unpin</button>`
    : `<button class="btn btn-primary rounded-start pin-btn" data-type="${item.type}" data-id="${item.id}" style="margin-right: 7px;">PIN !</button>`
}
                ${item.isRegistered
    ? `<span class="btn btn-success rounded-start" disabled>Registered</span>`
    : `<form method="POST" action="/trophy/register/${item.type}/${item.id}" style="margin-right: 7px;">
            <input type="hidden" name="_token" value="${$('meta[name="csrf-token"]').attr('content')}">
            <button type="submit" class="btn btn-warning rounded-start" style="color: black;">REGISTER !</button>
       </form>`
}


                </div>
            </div>
            <div>
                <p><strong>Name:</strong> ${item.name}</p>
                <p><strong>Reward: Rp </strong>${Number(item.reward).toLocaleString('id-ID')}</p>
                <p><strong>Date:</strong> ${item.date}</p>
                <p><strong>Fee: Rp </strong>${Number(item.fee).toLocaleString('id-ID')}</p>
                <p><strong>Committee:</strong> ${item.committee}</p>
                <p><strong>Score:</strong> ${item.score}</p>
                <p><strong>Link:</strong> <a class="text-primary" href="${item.link}" target="_blank">${item.link}</a></p>
            </div>
        </div>
    </div>
</div>
`;

                            });
                        } else {
                            html += `
                                <div class="col-md-4 mb-5">
                                    <div class="card p-3 text-center d-flex align-items-center justify-content-center" style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; height: 100%; min-height: 150px;">
                                        <h2 class="m-0 fw-bold text-muted">Maaf banget nih kak... gak ada Competition yang sesuai dengan itu</h2>
                                    </div>
                                </div>
                            `;
                        }

                        $('#results').html(html);
                    },
                    complete: function () {
                        $('#loader').hide();
                    }
                });
            } else {
                $('#results').empty();
                $('#loader').hide();
            }
        }, 300);
    });

    // 🎯 Handler tombol Pin/Unpin dinamis
    $(document).on('submit', '.pin-form', function (e) {
        e.preventDefault();

        const form = $(this);
        const url = form.attr('action');
        const method = form.find('input[name="_method"]').val() === 'DELETE' ? 'POST' : 'POST';

        $.ajax({
            url: url,
            type: method,
            data: form.serialize(),
            success: function () {
                // Refresh hasil pencarian
                $('input[name="q"]').trigger('input');
            },
            error: function () {
                alert('Gagal melakukan Pin/Unpin.');
            }
        });
    });

    // Handle PIN
$(document).on('click', '.pin-btn', function () {
    const type = $(this).data('type');
    const id = $(this).data('id');

    $.post(`/trophies/${type}/${id}/pin`, {
        _token: $('meta[name="csrf-token"]').attr('content')
    }).done(function () {
        location.reload(); // Refresh halaman biar section "PINNED COMPETITIONS" ke-update
    });
});

// Handle UNPIN
$(document).on('click', '.unpin-btn', function () {
    const type = $(this).data('type');
    const id = $(this).data('id');

    $.ajax({
        url: `/trophies/${type}/${id}/unpin`,
        type: 'POST',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            _method: 'DELETE'
        },
        success: function () {
            location.reload(); // Refresh halaman
        }
    });
});

});
</script>




@endsection