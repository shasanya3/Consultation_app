<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Appointment;
class AppointmentController extends Controller
{
    public function index(){
        return view('appointment.index');
    }

    public function create(){
        return view('appointment.create');
    }



    public function store(request $request){

        $appointment = new Appointment;
        $appointment->topic = $request->topic;
        $appointment->description = $request->description;
        $appointment->appointmenttime = $request->appointmenttime;
        $appointment->user_id = Auth::user()->id;
        $appointment->save();

        return redirect('/');
    }
}
