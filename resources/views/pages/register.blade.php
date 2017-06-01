@extends('layouts.base')

@section('title')
    Register
    @parent
@stop

@section('content')
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">

            <form class="form-signin">
                <h2 class="form-signin-heading">Register</h2>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <input type="hidden" value="{{csrf_token()}}" name="_token">
                {!! csrf_token() !!}
                <input type="hidden" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
            </form>

        </div>
        <div class="col-lg-3"></div>
    </div>
    <br/>
@endsection