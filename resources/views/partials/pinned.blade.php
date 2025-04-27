@php
    $maxCards = 3;
    $actualCount = $pinned_trophies->count();
@endphp

<div class="row">
    @foreach($pinned_trophies as $trophy)
    <div class="col-md-4 mb-5">
        <div class="card p-3" style="background-color: #e2e8f0; box-shadow: 0 4px 8px #23486A; border: none; height: 100%; min-height: 150px;">
            <div class="d-flex">
                <div>
                    <img alt="{{ $trophy->name }}" class="me-3"
                         src="{{ asset($trophy->logo) }}"
                         style="width: 190px; height: 235px; object-fit: cover; margin-bottom: 7px;" />
                    <div class="d-flex">
                        @if(in_array($trophy->id, $pinnedIds))
                            <button class="btn btn-danger rounded-start unpin-btn" data-type="{{ $trophy->type }}" data-id="{{ $trophy->id }}" style="margin-right: 7px;">Unpin</button>
                        @else
                            <button class="btn btn-primary rounded-start pin-btn" data-type="{{ $trophy->type }}" data-id="{{ $trophy->id }}" style="margin-right: 7px;">PIN!</button>
                        @endif

                        @if(in_array($trophy->id, $registeredIds))
                            <button class="btn btn-success rounded-start" disabled>Registered</button>
                        @else
                            <form action="{{ route('trophy.register', ['type' => $trophy->type, 'id' => $trophy->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-warning rounded-start" style="color: black;">REGISTER !</button>
                            </form>
                        @endif
                    </div>
                </div>
                <div>
                    <p><strong>Name:</strong> {{ $trophy->name }}</p>
                    <p><strong>Reward: Rp</strong> {{ number_format($trophy->reward, 0, ',', '.') }}</p>
                    <p><strong>Date:</strong> {{ $trophy->date ?? '-' }}</p>
                    <p><strong>Fee: Rp</strong> {{ number_format($trophy->fee, 0, ',', '.') }}</p>
                    <p><strong>Committee:</strong> {{ $trophy->committee }}</p>
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
