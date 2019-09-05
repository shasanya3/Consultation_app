@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h4> <center> Schedule A Task <center></h4>
            <form method="post"  action="{{ route('app.store') }}" >
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="dateselector">Select A Date</label>
                    <input type="text"  id="datepicker"  class="datepicker form-control" name="appointmenttime" autocomplete="off">

                </div>

                <div class="form-group">
                    <label for="topic">Topic</label>
                    <input type="text" name="topic" class="form-control" placeholder="Enter the topic of Discussion?">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" rows="8" cols="80" placeholder="Go into a bit more detail about the Discussion?"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" name="button">Book Appointment</button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection

@section('javascripts')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    var j = jQuery.noConflict();
    j( function() {
        j( "#datepicker" ).datepicker({
            dateFormat: 'yy-mm-dd'
        }).val();
    } );
</script>
@endsection
