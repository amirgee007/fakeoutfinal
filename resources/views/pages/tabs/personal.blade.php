<div class="tab-pane fade active in" id="personal" role="tabpanel">
    <br>

    <div class="row">
        <div class="col-sm-3 text-center" style="">
            @if(!is_null($userProfile) && $userProfile->hasImage())
                <img src="{{$userProfile->getImageUrl()}}" alt="User Image" height="120px" width="190px">
            @else
            <img src="uploads/default.png" alt="Smiley face" height="120px" width="190px">
            @endif
                <br/>
            <br/>
            <a  href="{{route('front.user.profile.show', \Auth::id())}}" class="btn-xs btn-success">Update info</a>
        </div>
        <div class="col-sm-9" style="">

                <div class="panel panel-primary ">
                    <div class="panel-heading clearfix" style="padding: 10px;">
                        <h4 class="panel-title pull-left"><i class="fa fa-fw fa-book"></i>
                            User Profile Information
                        </h4>
                    </div>
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-md-4">
                                Business Company
                            </div>
                            <div class="col-md-8">
                                <p class="capitalize">{{$userProfile->business_company or 'n/a'}} </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                ID Number
                            </div>
                            <div class="col-md-8">
                                <p class="capitalize">{{$userProfile->id_number or 'n/a'}} </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                Address Code
                            </div>
                            <div class="col-md-8">
                                <p class="capitalize">{{$userProfile->address_code or 'n/a'}} </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                City
                            </div>
                            <div class="col-md-8">
                                <p class="capitalize">{{$userProfile->city or 'n/a'}} </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                Country
                            </div>
                            <div class="col-md-8">
                                <p class="capitalize">{{$userProfile->country or 'n/a'}} </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                Subscriptions
                            </div>
                            <div class="col-md-8">
                                <p class="capitalize">{{$userProfile->subscriptions or 'n/a'}} </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

</div>