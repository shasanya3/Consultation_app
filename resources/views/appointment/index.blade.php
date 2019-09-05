@extends('layouts.app')

@section('content')

    <section style="background-color:white; padding:10% 10% 5% 10%; margin-top:-2%;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3> <b> Welcome to Consult Firm</b></h3>
                    <p style="font-size:24px;">Here we answer questions about the everyday life. Speak to one of our many
                    representatives where they can answer your question that you may have</p>

                </div>
                <div class="col-md-6">
                    <img src="/consulting.png" alt="consulting" style="margin-left: 30%;margin-top: -5%;">

                </div>

            </div>

        </div>
    </section>

<section style="padding:6% 10% 5% 10%;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3> <center> <b>Schedule your own meeting today?</b> </center></h3>
                <p style="font-size:24px;"> This meeting will contain a vip treatment and a holding views spot that can be secured after payment.
                You will get vip treatment and counseling from one of our top representatives in the field and will help you and get yourself aboard
                with our top representatives.</p>

            <center>    <a href="{{ route('app.create') }}" class="btn btn-light">Make Appointment</a></center>
            </div>

        </div>

    </div>
</section>

<section style="padding:6% 10% 5% 10%; background-color:white;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="/calendar.png" alt="calendar">

            </div>
            <div class="col-md-6">
                <h5> <b>Sign up For Free Demo?</b> </h5>
                <p style="font-size:24px;">We are open 365/days a year and offer round about assistance! </p>
                <a href="#" class="btn btn-light">Recent Testimonies</a>


            </div>

        </div>


    </div>
</section>

@endsection
