@extends('layouts.base')

@section('title')
    Index
    @parent
@stop


@section('header_styles')
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('/css/slidermain.css') }}" rel="stylesheet">

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
@endsection


@section('content')
    @include('layouts.slider')
    <!-- Section: intro -->
    <section id="intro" class="intro">
        <div class="intro-content">
            <div class="container">

                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                            <img src="img/iphone.png" class="img-responsive" alt="" />

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 slogan">
                        <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                            <h2>App landing page template</h2>
                            <p>
                                Ticket duplication and fraud tickets can be the bane of any event organisers Fake out help you to protect your attendees and keep them save from counterfeit tickets

                            </p>
                            <p>
                                Don't allow yourself to lose thousands in a ticket scam anymore Fake Out check instantly if the ticket you are buying is original or fake
                            </p>
                        </div>
                        <div class="buttons">
                            <a href="#" class="btn btn-success btn-lg wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s"><i class="fa fa-android fa-2x"></i> Download<br /> <small>Android version 1.4</small></a>
                            <a href="#" class="btn btn-info btn-lg wow fadeInRight" data-wow-duration="3s" data-wow-delay="0.3s"><i class="fa fa-apple fa-2x"></i> Download <br /> <small>iOs version 1.4</small></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /Section: intro -->
    <div class="divider-short"></div>

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

    <div class="divider-short"></div>

    <section id="content2" class="home-section">

        <div class="container">
            <div class="row text-center heading">
                <h3>More features</h3>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="wow fadeInLeft" data-wow-delay="0.2s">
                        <p>
                            Lorem ipsum dolor sit amet, ipsum vocent reprimique ad eos, ludus option signiferumque an pro. Id case quaestio mei, an ipsum offendit vel, ex ius quis comprehensam. Eu per illud modus fabellas, eam an brute gubergren repudiandae.
                        </p>
                        <p>
                            Eam voluptua assentior ea, an eirmod sensibus scribentur vel. Elit nonumy indoctum per eu. Feugait omittantur ne qui, commodo invidunt ea nam
                        </p>
                        <div class="divider-short marginbot-30 margintop-30"></div>
                        <div class="features">
                            <i class="fa fa-android fa-2x circled bg-skin float-left"></i>
                            <h5>Android application</h5>
                        </div>
                        <div class="features">
                            <i class="fa fa-apple fa-2x circled bg-skin float-left"></i>
                            <h5>For Apple iOs</h5>
                        </div>
                        <div class="features">
                            <i class="fa fa-windows fa-2x circled bg-skin float-left"></i>
                            <h5>Windows version</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInRight" data-wow-delay="0.3s">
                        <img src="img/img-2.png" alt="" class="img-responsive" />
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- /Section: content -->

    <div class="divider-short"></div>
    <section id="works" class="home-section text-center">
        <div class="container">
            <div class="row text-center heading">
                <h3>Screenshots</h3>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" >

                    <div class="row gallery-item">
                        <div class="col-md-3">
                            <a href="img/works/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
                                <img src="img/works/1.jpg" class="img-responsive" alt="img">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="img/works/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
                                <img src="img/works/2.jpg" class="img-responsive" alt="img">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="img/works/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
                                <img src="img/works/3.jpg" class="img-responsive" alt="img">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="img/works/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
                                <img src="img/works/4.jpg" class="img-responsive" alt="img">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section id="callaction" class="home-section paddingtop-40">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="callaction">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="cta-text">
                                        <h3>Need more advanced features?</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit uisque interdum ante eget faucibus. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                                    <div class="cta-btn">
                                        <a href="#" class="btn btn-skin btn-lg">Contact us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('footer_script')
    <script type="text/javascript">

    </script>
@endsection