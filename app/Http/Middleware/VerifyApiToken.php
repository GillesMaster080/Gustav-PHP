<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class VerifyApiToken
{
    public function handle(Request $request, Closure $next)
    {
        // Log the request for debugging purposes
        Log::debug('Request:', [
            'headers' => $request->header(),
            'data' => $request->all()
        ]);

        $token = $request->header('Authorization');

        if ($token && $this->isValidToken($token)) {
            return $next($request);
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }

    private function isValidToken($token)
    {
        // Perform token validation logic here
        // You can check if the token exists in the database or perform any other validation

        // Remove the "Bearer " prefix from the token
        $token = str_replace('Bearer ', '', $token);
        Log::debug('Received Token: ' . $token);

        // For example, assuming you have a User model with an 'api_token' field
        return User::where('api_token', $token)->exists();
    }
}
