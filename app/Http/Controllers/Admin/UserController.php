<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function loginPage() {
        if(Auth::check()) {
            return redirect(route('admin_dashboard'));
        }

        return view('admin.user.admin_login');
    }
}
