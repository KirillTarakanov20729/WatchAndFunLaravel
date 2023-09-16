<?php

namespace App\Services\Users;

use App\Http\Requests\User\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class StoreRegisterService
{
    public function store(RegisterRequest $request): void
    {
        try {
            $data = $request->validated();
            $user = $this->createUser($data);
            $this->loginUser($user);
        } catch (\Exception $exception) {
            abort(500, $exception->getMessage());
        }
    }

    private function createUser($data): User
    {
        return User::create($data);
    }

    private function loginUser($user): void
    {
        Auth::login($user);
    }
}
