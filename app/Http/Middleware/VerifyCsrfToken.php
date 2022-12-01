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
        '/outf2kaOy1QeNKzdCbYvV4X3F397p1o96v2lt4PFg2EbOSqG33JKh8BmnmLhKQfR/webhook/',
    ];
}
