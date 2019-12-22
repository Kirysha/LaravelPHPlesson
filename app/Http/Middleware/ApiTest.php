<?php


namespace App\Http\Middleware;


use Closure;

class ApiTest
{
    public function handle($request, Closure $next)
    {
        if ($request->header('x-api-key') == env('API_KEY')) {
            return $next($request);
        }
        return response("Ошибка", 401);

    }
}
