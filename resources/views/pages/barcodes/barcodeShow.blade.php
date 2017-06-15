@extends('layouts.base')

@section('title')
    Barcodes
    @parent
@stop

<style type="text/css">
    img{
        padding-left: 20px;
    }
</style>
@section('content')

    <section id="content" class="home-section">
        @include('admin.alerts.alert')
        <div class="container">
            <div class="row text-center heading">
                <h3>Barcodes</h3>
            </div>

            <br class="box-header with-border">

                <div class="container text-center" style="border: 1px solid #a1a1a1;padding: 15px;width: 100%;">
                    <div class="form-group">
                        @foreach($allCodes as $code)
                            <div class="col-md-3" style="padding-bottom:20px">
                                {{$code}}
                                <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($code, 'C39')}}" alt="barcode" /></div>
                        @endforeach
                    </div>

                </div>

            <br/>
                <a  href="{{route('app')}}" class="pull-right btn btn-danger">Go Back</a>
            </div>

    </section>

@endsection



