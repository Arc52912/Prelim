@extends('index')

@section('form')
<div class="container" style="margin-top: 5%">

    <form action="{{ url('/logout') }}" method="get">

        {{ csrf_field() }}

        <button class="btn btn-success" style="margin-left: 90%" type="submit">Logout</button>

        <div class="row">

            <div class="col-md-4 col-offset-4" style="align-content: center">

                <h4 style="text-align: center">Welcome to my Dashboard</h4>
                <hr>
                <h3 style="text-align: center">What is Lorem Ipsum?</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

            </div>

            <div class="col-md-5 col-offset-5">
                <h4 style="text-align: center">Alyssa Mae Arcayos BSIT-4</h4>
                <hr>
                <h3 style="text-align: center">About</h3>
                <p style="margin-left: 10%">Address: <strong>Buacao, Clarin, Bohol</strong></a></p>
                <p style="margin-left: 10%">Email: <a href="{{ url('mulamae321@gmail.com') }}" target="ne blank"><strong>mulamae321@gmail.com</strong></a></p>
                <p style="margin-left: 10%">School: <a href="{{ url('https://www.facebook.com/mdctubigon/') }}" target="new blank"><strong>Mater Dei College</strong></a></p>
                <p style="margin-left: 10%">School ID: <strong>10291-1T18</strong></p>
                <p style="margin-left: 10%"><a href="{{ url('https://web.facebook.com/alyssamae.arcayos') }}" target="new blank"><strong>Facebook Account Click To Visit me</strong></a></p>

            </div>

        </div>
    </form>

</div>
@endsection
