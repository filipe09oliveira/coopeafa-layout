<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = new User();
        $user->name        = $request->name;
        $user->email = $request->email;
        $user->password    = bcrypt($request->password);
        $user->save();
        return response()->json([
            'res' => 'Criado com sucesso'
        ], 201);

    }

    public function index()
    {
        return view('welcome');
    }
}
