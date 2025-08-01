<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $role = auth()->user()->role;
        
        return $request->wantsJson()
            ? response()->json(['two_factor' => false])
            : redirect()->route($role === 'admin' ? 'admin.dashboard' : 'dashboard');
    }
}