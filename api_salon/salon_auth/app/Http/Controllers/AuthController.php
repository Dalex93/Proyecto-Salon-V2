<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    
    public function register(RegisterUserRequest $request)
    {
        $user = User::create([
            'name'     => $request->input('name'),
            'username' => $request->input('username'),
            'gender'   => $request->input('gender'),
            'birthday' => $request->input('birthday'),
            'email'    => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'is_admin' => $request->path() === 'api/admin/register' ? 1 : 0
        ]);

        return response($user, Response::HTTP_CREATED);
    }

    public function login(Request $request)
    {
        if(!Auth::attempt($request->only('email', 'password'))){
            return response([
                'error' => 'Credenciales invalidas'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $user = User::where('email', $request->input('email'))->firstOrFail();

        $adminLogin = $request->path() == 'api/admin/login'; 

        if($adminLogin && !$user->is_admin){
            return response([
                'error' => 'Acceso denegado'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $scope = $adminLogin ? 'admin' : 'client';

        $jwt = $user->createToken('token', [$scope])->plainTextToken;

        $cookie = cookie('jwt', $jwt, 60*24);

        return response([
            'message' => 'Usuario autenticado satisfactoriamente'
        ])->withCookie($cookie);

    }

    public function logout()
    {
        $cookie = Cookie::forget('jwt');

        return response([
            'message' => 'Cerro sesion exitosamente'
        ])->withCookie($cookie);
    }

}
