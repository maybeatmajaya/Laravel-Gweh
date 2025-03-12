<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class CekUmur
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if ($request->user()->role !== $role) {
            return response()->json(['message' => 'akses ditolak, role anda bukan admin'], 403);
        }
        return $next($request);
    }

    // public function terminate($request, $response)
    // {
    //     Log::info('Request selesai', ['url' => $request->fullUrl()]);
    //     // Store the session data...
    // }
}
