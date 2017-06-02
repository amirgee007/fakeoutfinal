@extends('layouts.base')

@section('title')
    About
    @parent
@stop

@section('content')

    <section id="content1" class="home-section">

        <div class="container">
            <div class="row text-center heading">
                <h3>Awesome features</h3>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="wow fadeInLeft" data-wow-delay="0.2s">
                        <img src="img/img-1.png" alt="" class="img-responsive" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInRight" data-wow-delay="0.3s">
                        <div class="features">
                            <i class="fa fa-check fa-2x circled bg-skin float-left"></i>
                            <h5>Modern interface</h5>
                            <p>
                                Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
                            </p>
                        </div>
                        <div class="features">
                            <i class="fa fa-check fa-2x circled bg-skin float-left"></i>
                            <h5>Easy to use</h5>
                            <p>
                                Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
                            </p>
                        </div>
                        <div class="features">
                            <i class="fa fa-check fa-2x circled bg-skin float-left"></i>
                            <h5>Free updates</h5>
                            <p>
                                Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /Section: content -->

@endsection