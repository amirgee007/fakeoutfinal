@extends('layouts.base')

@section('title')
    User Info
    @parent
@stop

<style type="text/css">

    img {
        /*padding-left: 20px;*/
        border: 1px solid #ddd;
        border-radius: 4px;
        width: 150px;
        padding: 5px;
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
    }

    img:hover {
        box-shadow: 0 0 3px 2px rgba(0, 142, 187, 0.5);
    }

</style>
@section('content')

    <section id="intro" class="intro">
        <div class="intro-content">
            <div class="container" style="padding-right: 20%;padding-left:20%">
                @include('admin.alerts.alert')

                <form class="well form-horizontal" action="{{ route('front.user.profile.store') }}" method="post" enctype="multipart/form-data" id="contact_form">

                    {{ csrf_field() }}
                    <fieldset>

                        <legend><center><h3><b>Profile Information Form</b></h3></center></legend><br>

                        {{--<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>--}}


                        <div class="form-group">
                            <label for="business_company" class="col-md-4 control-label">Business Company</label>
                            <div class="col-md-6">
                                <input name="business_company" value="{{$userProfile->business_company or ''}}" placeholder="Specify a Business Company" class="form-control"  required type="text">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="eventName" style="margin-top:31px" class="col-md-4 control-label">Photo/Cover</label>
                            <div class="col-md-6 text-center">
                                <input style="display:none" name="image" id="input-image-hidden" onchange="document.getElementById('image-preview').src = window.URL.createObjectURL(this.files[0])" type="file" accept="image/jpeg, image/png">

                                @if(!is_null($userProfile) && $userProfile->hasImage())
                                    <img id="image-preview" align="middle"  style="height:100px; width:150px;"  src="{{$userProfile->getImageUrl()}}"/>

                                @else
                                    <img id="image-preview" align="middle"  style="height:100px; width:150px;"  src=""/>
                                @endif

                                <span style="background-color: #00AA88" class="btn btn-default btn-file" onclick="HandleBrowseClick('input-image-hidden');">+</span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="id_number" class="col-md-4 control-label">ID Number</label>
                            <div class="col-md-6">
                                <input name="id_number" value="{{$userProfile->id_number or ''}}" placeholder="Specify a Id Number" class="form-control"  required type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="user_name" class="col-md-4 control-label">User Name</label>
                            <div class="col-md-6">
                                <input name="user_name"  placeholder="Specify a user Name" class="form-control" value="{{$user->user_name or ''}}" required type="text" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                <input name="email"  placeholder="Specify a email" class="form-control"  value="{{$user->email or ''}}" required type="email" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address_code" class="col-md-4 control-label">Address Code</label>
                            <div class="col-md-6">
                                <input name="address_code" value="{{$userProfile->address_code or ''}}" placeholder="Specify a Address Code" class="form-control"  required type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="city" class="col-md-4 control-label">City</label>
                            <div class="col-md-6">
                                <input name="city" value="{{$userProfile->city or ''}}" placeholder="Specify a city" class="form-control"  required type="text">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="country" class="col-md-4 control-label">Country</label>
                            <div class="col-md-6">
                                <input name="country" value="{{$userProfile->country or ''}}" placeholder="Specify a country" class="form-control"  required type="text">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="subscriptions" class="col-md-4 control-label">Subscriptions</label>
                            <div class="col-md-6">
                                <input name="subscriptions" value="{{$userProfile->subscriptions or ''}}" placeholder="Specify a subscriptions" class="form-control"  required type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4"><br>
                                <button type="submit" class="btn btn-success" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </section>

@endsection

<script type="text/javascript">
    function HandleBrowseClick(input_image)
    {
        var fileinput = document.getElementById(input_image);
        fileinput.click();
    }


</script>



