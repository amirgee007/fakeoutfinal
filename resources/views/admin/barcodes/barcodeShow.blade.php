@extends('admin/layout')
@section('title')
    All Event of Promoter
    @parent
@stop
@section('header_style')

    <style type="text/css">
        img{
            padding-left: 20px;
        }
    </style>

@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Barcode
                <small>Show Barcode</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Barcode</li>
            </ol>
        </section>

        @include('admin.alerts.alert')

        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">All Barcodes</h3>


                        @foreach($allCodes as $code)
                        <div class="container text-center" style="border: 1px solid #a1a1a1;padding: 15px;width: 60%;">
                            <label for="comments" style="padding-right: 50px">{{$code}}</label>
                            <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($code, 'C39')}}" alt="barcode" />
                        </div>
                        @endforeach

                            <a  href="{{route('promoterEvents.index')}}" class="pull-right btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
@endsection

@section('footer_scripts')

@endsection



