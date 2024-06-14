<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        // Verifică dacă utilizatorul este autentificat și este admin
        if (Auth::check() && Auth::user()->role === 'admin') {
            return view('admin.dashboard');
        }

        return redirect('/');
    }
}
