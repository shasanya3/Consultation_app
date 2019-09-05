<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Appointment extends Model
{
    protected $fillable= ['topic', 'description', 'appointmenttime','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
