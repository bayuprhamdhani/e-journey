<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        // Auth & Registrasi
        'post-login',
        'post-registrationStudent',

        // GPT AI
        'gpt',
        'gpt2',
        'gpt3',
        'gpt/save-answer',
        'gpt/generate2',
        'student/set-dream',
        'answer-dream/store',
        'advice/store',

        // Trophy
        'trophies/*/pin',
        'trophies/*/unpin',
        'trophy/register/*',
        'search-trophies',
        'search-trophies2',

        // AJAX data untuk form
        'get-majors',
        'get-typeschools',
        'get-provinces',
        'get-cities',
        'get-subdistricts',
        'get-schools',
    ];
}
