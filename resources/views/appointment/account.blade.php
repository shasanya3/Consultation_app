@extends('layouts.app')

@section('content')

<div class="container" style="margin-top:100px;">

    <div class="row">
        <div class="col-md-8 offset-md-2">
        <h5>{{$User->name}}</h5>

        <table class="table">
            <tr>
                <th>Topic of Discussion</th>
                <th>Appointment Time</th>
                <th> Remove Appointment</th>
            </tr>

            @foreach($BookingInfo as $info)
            <tr>
            <td>{{$info->topic}}</td>
            <td>{{$info->appointmenttime}}</td>
            <td>
            <form action="{{'/Account/Delete/'. Auth::user()->slug .'/'. $info->id}}   " method="post">
                 {{ csrf_field() }} {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger">Cancel Appointment</button>
            </form>
            </td>
            </tr>
            @endforeach
        </table>

        </div>

    </div>

</div>
@endsection