<?php

namespace Solar\Http\Controllers;

use Solar\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;
    protected $fillable = ['name', 'cpf', 'email', 'permission_id'];

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function edit($userId)
    {
        $user = $this->user->findOrFail($userId);

        return view('users.edit', ['user' => $user, ]);
    }

    public function update(Request $request, $userId)
    {
        $inputs = $request->all();

        $user = $this->user->findOrFail($userId);
        $user->fill($inputs)->save();

        return redirect('/dashboard')->with('success', 'A postagem foi alterada com sucesso');
    }
}