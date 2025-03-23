<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Closure;

class Authenticate extends Middleware
{
    /**
     * Handle an incoming request.
     */
    public function handle($request, Closure $next, ...$guards)
    {
        if (!$this->authenticate($request, $guards)) {
            return response()->json([
                'message' => 'Unauthorized',
                'error' => 'Invalid or missing token'
            ], 401);
        }

        return $next($request);
    }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if (!$request->expectsJson()) {
            return route('login'); // Sesuaikan jika ada halaman login di frontend
        }

        return null;
    }

    /**
     * Authenticate the user for the request.
     */
    protected function authenticate($request, array $guards)
    {
        try {
            $this->authenticateWithToken($request);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Authenticate user using Bearer Token.
     */
    private function authenticateWithToken($request)
    {
        $token = $request->bearerToken();
        if (!$token) {
            throw new \Exception('Token is missing');
        }

        // Validasi token menggunakan Passport atau Sanctum (sesuaikan dengan proyek)
        $user = \App\Models\User::where('api_token', $token)->first();
        if (!$user) {
            throw new \Exception('Invalid token');
        }

        auth()->setUser($user);
    }
}
