<?php

namespace App\Services\Users;

use App\Http\Requests\User\LoginRequest;
use Illuminate\Support\Facades\Auth;

class CheckLoginService
{
    public function check(LoginRequest $request): bool
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        if ($user && Auth::attempt($credentials, $remember)) {
            return true;
        }
        return false;
    }
}
