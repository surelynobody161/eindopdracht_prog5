<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout()
    {
        Auth::logout(); // Log the user out

        // Redirect to the arts index page
        return redirect()->route('arts.index');
    }
}
