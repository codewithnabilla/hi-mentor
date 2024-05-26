<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Mentor;
use App\Models\Student;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'role' => ['required', 'string', 'in:mentor,student']
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);

        if ($request['role'] === 'mentor') {
            Mentor::create(['user_id' => $user->id]);
        } else if ($request['role'] === 'student') {
            Student::create(['user_id' => $user->id]);
        }

        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
