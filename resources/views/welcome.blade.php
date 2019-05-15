<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>{{config('app.name')}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <meta name="description" content="Biography" />
    <meta name="keywords" content="Biography Ivan Demirovic Demir" />
    <meta name="author" content="Ivan Demirovic ikimj420@gmail.com" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />


    <link rel="shortcut icon" href="{{ asset('storage/pictures/favicon.ico') }}">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fluidbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>
    <body>

        @foreach($users as $user)@endforeach

        <section class="intro-section"
            @if(!empty($pictures_info))
                 style="background-image: url({{asset('/storage/pictures').'/'.$pictures_info->cover_images}});"
            @endif
        >
            <div class="container">

                <div class="heading-wrapper">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="info">
                                <i class="icon ion-ios-location-outline"></i>
                                <div class="right-area">
                                    @if(!empty($user))
                                        <h5>{!! $user->country !!}</h5>
                                        <h5>{!! $user->address !!}</h5>
                                    @endif
                                </div><!-- right-area -->
                            </div><!-- info -->
                        </div><!-- col-sm-4 -->

                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="info">
                                <i class="icon ion-ios-telephone-outline"></i>
                                <div class="right-area">
                                    @if(!empty($user))
                                        <h5>{!! $user->phones !!}</h5>
                                    @endif
                                    <h6>M0N - FRI,9AM - 5PM</h6>
                                </div><!-- right-area -->
                            </div><!-- info -->
                        </div><!-- col-sm-4 -->

                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="info">
                                <i class="icon ion-ios-chatboxes-outline"></i>
                                <div class="right-area">
                                    @if(!empty($user))
                                        <h5><a href="mailto:{!! $user->email !!}">{!! $user->email !!}</a></h5>
                                    @endif
                                    <h6>REPLY IN 24 HOURS</h6>
                                </div><!-- right-area -->
                            </div><!-- info -->
                        </div><!-- col-sm-4 -->
                    </div><!-- row -->
                </div><!-- heading-wrapper -->


                <div class="intro">
                    <div class="row">

                        <div class="col-sm-8 col-md-4 col-lg-3">
                            <div class="profile-img margin-b-30">
                                @if(!empty($pictures_user))
                                    <img src="{{asset('/storage/pictures').'/'.$pictures_user->cover_images}}" alt="{!! $user->fullName !!}">
                                @endif
                            </div>
                        </div><!-- col-sm-8 -->

                        <div class="col-sm-10 col-md-5 col-lg-6">
                            @if(!empty($user))
                                <h2><b>{!! $user->fullName !!}</b></h2>
                                <h4 class="font-blue">{!! $user->areaField !!}</h4>
                                <ul class="information margin-tb-30">
                                    <li><b class="font-blue">BORN</b> : {!! date('M, d Y', strtotime($user->birthDate)) !!}</li>
                                    <li><b class="font-blue">EMAIL</b> : <a href="mailto:{!! $user->email !!}">{!! $user->email !!}</a></li>
                                    <li><b>...</b></li>
                                </ul>
                            @endif
                            <ul class="social-icons">
                                @if(!empty($socials))
                                    @foreach($socials as $social)
                                        <li><a href="https://{!! $social->link !!}" target="_blank"><i class="ion-social-{!! $social->title !!}"></i></a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </div><!-- col-sm-8 -->

                        <div class="col-sm-10 col-md-3 col-lg-3">
                            @if(!empty($user))
                                <a class="downlad-btn" href="/storage/bio/{{ $user->cv }}" download>Download CV</a>
                            @endif
                        </div><!-- col-lg-2 -->

                    </div><!-- row -->

                </div><!-- intro -->
            </div><!-- container -->
        </section><!-- intro-section -->

        <section class="about-section section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 center-text">
                        <div class="heading ">
                            <h3><b>About me</b></h3>
                            <h6 class="font-lite-black"><b>PROFESSIONAL PATH</b></h6>
                        </div>
                    </div><!-- col-sm-3 -->
                    <div class="col-lg-12 center-text">
                        @if(!empty($user))
                            <p class="margin-b-30">{!! $user->aboutMe !!}</p>
                        @endif
                    </div><!-- col-sm-6 -->

                    <div class="col-sm-12" id="counter">
                        <div class="row" >
                            @if(!empty($counters))
                                @foreach($counters as $counter)
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="counter margin-b-50">
                                            <h1 class="title"><b><span class="counter-value" data-duration="400" data-count="{!! $counter->count !!}">0</span></b></h1>
                                            <h5 class="desc"><b>{!! $counter->title !!}</b></h5>
                                        </div><!-- counter -->
                                    </div><!-- col-md-3-->
                                @endforeach
                            @endif
                        </div><!-- row-->
                    </div><!-- col-sm-12 -->

                </div><!-- row -->
            </div><!-- container -->
        </section><!-- about-section -->

        <section class="experience-section section center-text"
            @if(!empty($pictures_expirience))
                 style="background-image: url({{asset('/storage/pictures').'/'.$pictures_expirience->cover_images}});"
            @endif
        >
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading">
                            <h3 class="font-blue"><b>Work Experience</b></h3>
                            <h6 class="font-lite"><b>PREVIOUS JOBS</b></h6>
                        </div>
                    </div><!-- col-sm-3 -->
                    @if(!empty($experiences))
                        @foreach($experiences as $experience)
                            <div class="col-sm-12">
                                <div class="experience margin-b-50">
                                    <h4 class="font-lite"><b>{!! $experience->title !!}</b></h4>
                                    <h5 class="font-blue"><b>{!! $experience->company !!}</b></h5>
                                    <h6 class="font-lite margin-t-10">{!! $experience->start->format('M, d Y') !!} - {!! $experience->end->format('M, d Y') !!}</h6>
                                    <p class="margin-tb-30 font-blue">{!! $experience->desc !!}</p>
                                    <ul class="list margin-b-30 font-lite">
                                        <li><a href="http://{!! $experience->link !!}" target="_blank">{!! $experience->company !!}</a></li>
                                        <li><span>{!! $experience->extra !!}</span></li>
                                    </ul>
                                </div><!-- experience -->
                            </div><!-- col-sm-9 -->
                        @endforeach
                    @endif
                </div><!-- row -->
            </div><!-- container -->
        </section><!-- experience-section -->

        <section class="portfolio-section section center-text">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading">
                            <h3><b>Portfolio</b></h3>
                            <h6 class="font-lite-black"><b>MY WORK</b></h6>
                        </div>
                    </div><!-- col-sm-12 -->

                    <div class="col-sm-12">
                        <div class="portfolioFilter clearfix margin-b-80">
                            <a href="#" data-filter="*" class="current"><b>ALL</b></a>
                            <a href="#" data-filter=".php"><b>PHP</b></a>
                            <a href="#" data-filter=".js"><b>JS</b></a>
                        </div><!-- portfolioFilter -->
                    </div><!-- col-sm-8 -->
                </div><!-- row -->

                <div class="portfolioContainer margin-b-50">
                    @if(!empty($portfolios))
                        @foreach($portfolios as $portfolio)
                            <div class="p-item {!! strtolower($portfolio->dev) !!}">
                                <a href="{{asset('/storage/portfolio').'/'.$portfolio->cover_images}}" data-fluidbox>
                                    <img src="{{asset('/storage/portfolio').'/'.$portfolio->cover_images}}" alt="{!! $portfolio->title !!}">
                                </a>
                                <a href="https://{!! $portfolio->link !!}" target="_blank">{!! $portfolio->title !!}</a>
                            </div><!-- p-item -->
                        @endforeach
                    @endif
                </div><!-- portfolioContainer -->
            </div><!-- container -->
        </section><!-- portfolio-section -->

        <section class="education-section section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 center-text">
                        <div class="heading">
                            <h3><b>Education</b></h3>
                            <h6 class="font-lite-black"><b>ACADEMIC CAREER</b></h6>
                        </div>
                    </div><!-- col-sm-3 -->

                    <div class="col-sm-12">

                        <div class="education-wrapper margin-b-50">
                            @if(!empty($educations))
                                @foreach($educations as $education)
                                    @if($education->id%2 !==0)
                                        <div class="education right">
                                    @else
                                             <div class="education left">
                                        @endif
                                                <h4><b>{!! $education->title !!}</b></h4>
                                                <h6 class="font-lite-black margin-t-10">{!! $education->end->format('Y') !!}</h6>
                                                <p class="margin-t-30"><a href="https://{!! $education->link !!}" target="_blank">{!! $education->link !!}</a></p>
                                                <p class="margin-t-30">{!! $education->desc !!}</p>
                                            </div><!-- education -->
                                @endforeach
                                        </div><!-- education-wrapper -->
                            @endif
                        </div>
                    </div><!-- col-sm-9 -->
                </div><!-- row -->
            </div><!-- container -->

        </section><!-- education-section -->

        <section class="quoto-section center-text"
            @if(!empty($pictures_quoto))
                 style="background-image: url({{asset('/storage/pictures').'/'.$pictures_quoto->cover_images}});"
            @endif
        >
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <i class="icon ion-quote"></i>
                        @if(!empty($quote))
                            <h3>{!! $quote->quote !!}</h3>
                            <h5>
                                {!! $quote->author !!}
                            </h5>
                            <div>
                                <a href="{!! $quote->permalink !!}" target="_blank">Link To Storm</a>
                            </div>
                        @endif
                    </div><!-- col-sm-12 -->
                </div><!-- row -->
            </div><!-- container -->
        </section><!-- quoto-section -->

        <section class="skills-section section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 center-text">
                        <div class="heading">
                            <h3><b>Technical Skills</b></h3>
                            <h6 class="font-lite-black"><b>I'M GOOD AT</b></h6>
                        </div>
                    </div><!-- col-sm-12 -->
                    @if(!empty($skills))
                        @foreach($skills as $skill)
                            <div class="col-sm-12 col-md-4">
                                <h4><b>{!! $skill->title !!}</b></h4>
                                <h6 class="expert">{!! $skill->extra !!}</h6>
                                <p class="margin-tb-30">{!! $skill->desc !!}</p>
                                <div class="line-progress margin-b-20" data-prog-percent=".{!! $skill->count !!}"><div></div>
                                    <p class="progress-title"><b>{!! $skill->title !!}</b></p>
                                </div>
                            </div><!-- col-md-6 -->
                        @endforeach
                    @endif
                </div><!-- row -->
            </div><!-- container -->
        </section><!-- skills-section -->

        <footer>
            <p class="copyright">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </footer>

    <!-- SCIPTS -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/tether.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/progressbar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fluidbox.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>

    </body>
</html>