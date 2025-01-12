<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Profiler\Profile;

class AuthController extends Controller
{
    public function register() {

        return view('auth.register');

    }

    public function registerPost(RegisterRequest $request) {

        $validated = $request->validated();

        if($request->hasFile('avatar')){
            $validated['avatar'] = Storage::putFile('uploads/users/avatars', $request->file('avatar'));
        }

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect()->route('app.login')->with('success', 'Registration completed successfully.');


    }





    public function login() {

        return view('auth.login');

    }


    public function loginPost(LoginRequest $request) {

        $validated = $request->validated();


        if(Auth::attempt([
            'email' => $validated['email'],
            'password' => $validated['password']
        ], $request->remember)) {

            $request->session()->regenerate();

            if(Auth::user()->role == 'admin'){
                return redirect()->route('admin.dashboard');
            }

            return redirect()->route('app.profile');

        }


        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');


    }




    public function profile(){

        $user = Auth::user();

        return view('front.profile', compact('user'));

    }


    public function profileUpdate(ProfileUpdateRequest $request){

        $user = Auth::user();
        $data = $request->validated();

        if($request->hasFile('avatar')){
            if($user->avatar) Storage::delete($user->avatar);
            $data['avatar'] = Storage::putFile('uploads/avatars/images', $request->file('avatar'));
        }

        if (!empty($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);

        return redirect()->back()->with('success', 'Profile updated successfully!');


    }






    public function logout() {

        session()->flush();

        return redirect()->route('app.login');

    }
}
