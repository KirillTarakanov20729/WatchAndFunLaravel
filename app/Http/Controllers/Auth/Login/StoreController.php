<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\LoginRequest;
use App\Services\Users\CheckLoginService;

class StoreController extends Controller
{
    protected $CheckLoginService;

    public function __construct(CheckLoginService $CheckLoginService)
    {
        $this->CheckLoginService = $CheckLoginService;
    }

    public function __invoke(LoginRequest $request)
    {
        if ($this->CheckLoginService->check($request)) {
            return redirect(route('films.index'));
        } else {
            return redirect()->back()->withErrors(['email' => 'Неверный пароль'])->withInput();
        }
    }
}
