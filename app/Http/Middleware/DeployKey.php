<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Guards the maintenance/deployment URLs (/run-migrations, /fresh-database, ...).
 * They only run when the request carries ?key=<DEPLOY_KEY from .env>; otherwise they look like a 404.
 * With no DEPLOY_KEY configured they are disabled entirely.
 */
class DeployKey
{
    public function handle(Request $request, Closure $next): Response
    {
        $expected = (string) config('app.deploy_key');
        $given = (string) $request->query('key', '');

        if ($expected === '' || ! hash_equals($expected, $given)) {
            abort(404);
        }

        return $next($request);
    }
}
