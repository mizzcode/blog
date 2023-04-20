<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register Page',
            'active' => 'register',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:50',
            'username' => 'required|max:50|min:4|unique:users',
            'email' => 'required|max:50|email:dns',
            'password' => 'required|max:50|min:8',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        try {
            User::create($validated);

            return redirect('/login')->with('success', 'Register Berhasil');
        } catch (Exception $e) {
            return back();
        }

        // jika ingin pake sweetalert
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|max:50',
        //     'username' => 'required|max:50|min:4|unique:user',
        //     'email' => 'required|max:50|email:dns',
        //     'password' => 'required|max:50|min:8',
        // ]);

        // if ($validator->fails()) {
        //     return redirect('/register')
        //         ->with('errorForm', $validator->errors()->getMessages())
        //         ->withInput();
        // }


    }
}
