<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display registration page.
     *
     * @return \Illuminate\Http\Response
     */
    public function new()
    {

        return view('auth.register');
    }

    /**
     * Display main route or redirect to login page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            // if ($user->level == '1') {
            //     return redirect()->intended('en-page');
            // } elseif ($user->level == '2') {
            //     return redirect()->intended('admin-page');
            // } elseif ($user->level == '3') {
            //     return redirect()->intended('support-page');
            // } elseif ($user->level == '4') {
            //     return redirect()->intended('user-page');
            // }
            return redirect()->intended('home');
        }

        return view('auth.login');
    }

    /**
     * Process the form to authenticate membership.
     *
     * @return \Illuminate\Http\Response
     */
    public function process(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ],
        [
            'username.required' => 'Username tidak boleh kosong',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            // if ($user->level == '1') {
            //     return redirect()->intended('en-page');
            // } elseif ($user->level == '2') {
            //     return redirect()->intended('admin-page');
            // } elseif ($user->level == '3') {
            //     return redirect()->intended('support-page');
            // } elseif ($user->level == '4') {
            //     return redirect()->intended('user-page');
            // }
            if ($user) {
                return redirect()->intended('home');
            }
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => 'Maaf username atau password tidak sesuai',
        ])->onlyInput('username');
    }

    /**
     * Process the form for creating a new membership.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // registration rules
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Logging out user from session.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }
}
