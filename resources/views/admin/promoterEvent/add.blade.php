@extends('admin/layout')

@section('title')
    All Event of Promoter
    @parent
@stop
@section('header_style')

    <style>

        .btn-file {
            position: relative;
            overflow: hidden;
        }
        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: green;
            cursor: inherit;
            display: block;
        }



    </style>
    @endsection
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Event
                <small>Add Event of Promoter</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Event</li>
            </ol>
        </section>

        @include('admin.alerts.alert')

        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add New Event</h3>
                        </div>
                        <form method="post" action="{{route('promoterEvents.create')}}">
                        <div>
                            <div class="box-body">
                                {{csrf_field()}}




                                <div class="form-group">
                                    <label for="tittle">Event Title</label>
                                   <input name="name" placeholder="Give it a short distinct name" class="form-control"  required type="text">
                                </div>

                                <div class="form-group">
                                    <label for="tittle">Location</label>
                                    <input name="location" placeholder="Spicify where it's held" class="form-control"  required type="text">
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="tittle">Starts</label>

                                        <input name="starts_date" placeholder="Start Date" class="form-control"  required type="date">

                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="tittle">Time</label>
                                        <input name="ends_time" placeholder="Ends Time" class="form-control"  required type="time">
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="tittle">Ends</label>

                                        <input name="starts_date" placeholder="Start Date" class="form-control"  required type="date">
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="tittle">Time</label>
                                        <input name="ends_time" placeholder="Ends Time" class="form-control"  required type="time">
                                    </div>
                                </div>


                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <span style="background-color: #00AA88" class="btn btn-default btn-file" onclick="HandleBrowseClick('input-image-hidden');">Add Event Image</span>
                                            <input style="display:none" name="image" id="input-image-hidden" onchange="document.getElementById('image-preview').src = window.URL.createObjectURL(this.files[0])" type="file" accept="image/jpeg, image/png">
                                            <img id="image-preview" align="middle" style="height:100px; width:100px;"  src=""/>

                                        </div>
                                    </div>

                        </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Add New</button>
                            </div>
                        </div>
                        </form>
                </div>
            </div>
            </div>

        </section>

    </div>
@endsection

@section('footer_scripts')

    <script type="text/javascript">
        function HandleBrowseClick(input_image)
        {
            var fileinput = document.getElementById(input_image);
            fileinput.click();
        }
    </script>

@endsection

