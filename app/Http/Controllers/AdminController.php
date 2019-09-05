<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;

class AdminController extends Controller
{
    public function index(){
        $appointments = Appointment::join('users', 'users.id', 'user_id')->get();
        return view('admin.index', compact('appointments'));
    }
}
