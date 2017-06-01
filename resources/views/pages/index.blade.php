@extends('layouts.base')

@section('title')
    Index
    @parent
@stop

@section('content')
    <div class="jumbotron">
        <h1>FakeOut</h1>
        <p class="lead">FakeOut is a handy app to validate tickets at events. Go ahead and create a account. </p>

    </div>
    <div class="row">
        <div class="col-md-4">
            <h2>Name app</h2>
            <p>The name of this app is <b>FakeOut</b>, which refers to the fact that you can verify event voucher tickets easy at events. After you created an account, you can login on the app.</p>
        </div>
        <div class="col-md-4">
            <h2>Features</h2>
            <p><ul>
                <li>Open source laravel backend: <a href="#"> Live Link</a> </li>
                <li>Multiplatform cordova app</li>
                <li>Online overview</li>
                <li>Free account creation.</li>
            </ul></p>
        </div>
        <div class="col-md-4">
            <h2>Download</h2>
            <p><a href="be.xlw.ticketscanner.apk" class="btn btn-lg btn-success">Download app</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h2>Screenshot 1</h2>
            <p><img src="img/screenshot1.png" class="img-rounded img-responsive pull-left" ></p>
        </div>
        <div class="col-md-4">
            <h2>Screenshot 2</h2>
            <p><img src="img/screenshot2.png" class="img-rounded img-responsive pull-left" ></p>
        </div>
        <div class="col-md-4">
            <h2>Screenshot 3</h2>
            <p><img src="img/screenshot3.png" class="img-rounded img-responsive pull-left" ></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h2>Screenshot 4</h2>
            <p><img src="img/screenshot4.png" class="img-rounded img-responsive pull-left" ></p>
        </div>
        <div class="col-md-4">
            <h2>Screenshot 5</h2>
            <p><img src="img/screenshot5.png" class="img-rounded img-responsive pull-left" ></p>
        </div>
        <div class="col-md-4">
            <h2>Screenshot 6</h2>
            <p><img src="img/screenshot6.png" class="img-rounded img-responsive pull-left" ></p>
        </div>
    </div>

@endsection