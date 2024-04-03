<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{
    protected $login;

    public function __construct(Login $login)
    {
        $this->login = $login;
    }

    public function index()
    {
        return $this->login->all();
    }

    public function store(Request $request)
    {
        return $this->login->create($request->all());
    }

    public function show($id)
    {
        $login = $this->login->find($id);
        if (!$login) {
            return response()->json(['message' => 'Login not found'], 404);
        }
        return $login;
    }

    public function update(Request $request, $id)
    {
        $login = $this->login->find($id);
        if (!$login) {
            return response()->json(['message' => 'Login not found'], 404);
        }
        $login->update($request->all());
        return $login;
    }

    public function destroy($id)
    {
        $login = $this->login->find($id);
        if (!$login) {
            return response()->json(['message' => 'Login not found'], 404);
        }
        $login->delete();
        return response()->json(['message' => 'Login deleted successfully'], 200);
    }
}
