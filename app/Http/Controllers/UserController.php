<?php

namespace App\Http\Controllers;

use App\User;
use App\Appointment;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function Account($slug){

        $User = User::where('slug', $slug)->firstOrFail();

        $BookingInfo = Appointment::join('users', 'users.id', 'user_id')
                        ->where('slug', $slug)
                        ->get();

        return view('appointment.account', compact('User', 'BookingInfo'));
    }

    public function destroy($slug, $id){
        $appointment = Appointment::find($id);
        $appointment->delete();
        return back();
    }
}
