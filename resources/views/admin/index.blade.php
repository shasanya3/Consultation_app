@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h4> Admin</h4>

            <table class="table">
            <tr>
                <th>Name</th>
                <th>Topic</th>
                <th>Schedule Day</th>
                <th>completed</th>
            </tr>

            @foreach($appointments as $appoint)
                <tr>
                    <td>{{ $appoint->name }}</td>
                    <td>{{ $appoint->topic }}</td>
                    <td>{{ $appoint->appointmenttime }}</td>
                    <td> <button type="button" name="button" class="btn btn-primary">completed</button> </td>
                </tr>
            @endforeach
            </table>
        </div>

    </div>

</div>
@endsection
