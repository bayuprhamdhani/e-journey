@extends('layout')

@section('content')
<main class="d-flex justify-content-center align-items-center">
    <div class="d-flex flex-column flex-md-row gap-3 mt-5">
        <a href="{{ route('register') }}" class="btn btn-white shadow d-flex justify-content-center align-items-center" style="width: 250px; height: 250px; border: 1px solid #ccc; text-decoration: none; color: inherit;">
            STUDENT
        </a>
        <a href="{{ route('register') }}" class="btn btn-white shadow d-flex justify-content-center align-items-center" style="width: 250px; height: 250px; border: 1px solid #ccc; text-decoration: none; color: inherit;">
            SCHOOL
        </a>
        <a href="{{ route('register') }}" class="btn btn-white shadow d-flex justify-content-center align-items-center" style="width: 250px; height: 250px; border: 1px solid #ccc; text-decoration: none; color: inherit;">
            TEACHER
        </a>
    </div>
</main>

<style>

</style>
@endsection
