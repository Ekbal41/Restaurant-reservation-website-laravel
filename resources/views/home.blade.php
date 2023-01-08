<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>Meat Master</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

    <!-- css -->


    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">








    <!-- google font -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Kreon:300,400,700'>
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- js -->
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <script>
        $('.alert').alert()
    </script>


</head>

<body data-spy="scroll" data-target="#navbar" data-offset="120">

    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div id="menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header visible-xs">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <h2>Meat Master</h2>
                </a>
            </div><!-- navbar-header -->
            <div id="navbar" class="navbar-collapse collapse">
                <div class="hidden-xs" id="logo"><a href="#header">
                        <img src="img/logo.png" alt="">
                    </a></div>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Home</a></li>

                    <li> <a href="#reservation">Reservation</a></li>
                    <li> <a href="#chefs">Our Chefs</a></li>

                    <li> <a href="#special-offser">Food Menu</a></li>



                    <li> <a href="#food-menu"> Food Categories</a></li>
                    <?php if (Auth::user()) { ?>
                    <li><a href="{{ route('dashboard') }}"><i class="bi bi-bag-dash-fill"></i></i></a></li>
                    <?php } ?>
                    <?php if (!Auth::user()) { ?>
                    <li><a href="/register"><i class="bi bi-person-circle"></i></a></li>
                    <?php } ?>



                    <!--fix for scroll spy active menu element-->
                    <li style="display:none;"><a href="#header"></a></li>

                </ul>
            </div>
            <!--/.navbar-collapse -->
        </div><!-- container -->
    </div><!-- menu -->

    <div id="header">
        <div class="bg-overlay"></div>
        <div class="center text-center">

           
            <div class="banner">
                <h1 class=""style="margin-top: 270px">Meat Master</i></h1>
            </div>
            <div class="subtitle">
                <h4> AN AWSOME RESTAURENT</h4>
            </div>
            @if (session('msg'))
            <h4 style="color: rgb(238, 255, 0);">{{ session('msg') }}</h4>
        @endif



        </div>

        <div class="bottom text-center">
            <a id="scrollDownArrow" href="#special-offser"><i class="fa fa-chevron-down"></i></a>
        </div>
    </div>
    <!-- /#header -->

    <div id="story" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Our Story</h2>
            <p class="lead main text-center">We're cooking delecious foods since 1879</p>
            <div class="row text-center story">
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper"> <i class="fa fa-anchor"></i> </div>
                        <h3>EST. 1879</h3>
                        <p>Vivamus sagittis lacuson augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur
                            purus sit amet fermentum ultricies vehicula.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper"> <i class="fa  fa-cutlery"></i> </div>
                        <h3>Cooking Traditions</h3>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis
                            dis parturient monte nascetur ultricies vehicula. </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper"> <i class="fa fa-coffee"></i> </div>
                        <h3>Food Quality</h3>
                        <p>Curabitur blandit matti tempus porttitor. Donec id elit non mi porta ut gravida at eget
                            metus. Consectetur adipiscing elit ultricies vehicula.</p>
                    </div>
                </div>
            </div>
            <!-- /.services -->
        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!-- #story -->


    <div id="facts" class="parallax parallax2 facts">

        <div class="container inner">
            <div class="row text-center services-3">
                <div class="col-sm-3">
                    <div class="col-wrapper">
                        <div class="icon-border bm10"> <i class="fa fa-beer"></i> </div>
                        <h4>796518</h4>
                        <p>Mug of Beer Sold</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="col-wrapper">
                        <div class="icon-border bm10"> <i class="fa fa-play-circle-o"></i> </div>
                        <h4>39472</h4>
                        <p>Movies Watched</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="col-wrapper">
                        <div class="icon-border bm10"> <i class="fa fa-truck"></i> </div>
                        <h4>2188764</h4>
                        <p>Pizza Deleverd</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="col-wrapper">
                        <div class="icon-border bm10"> <i class="fa fa-users"></i> </div>
                        <h4>480523</h4>
                        <p>Customers Worldwide</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div><!-- #facts -->




    <div id="food-menu" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Food Categories</h2>
            <p class="lead main text-center">There is no sincerer love than the love of food!</p>

            <div class="row">
                @foreach ($cats as $cat)
                    <div class="col-sm-3 col-md-3">
                        <div class="menu-images "><img src="{{ Storage::url($cat->image) }}" alt="Hot Drinks"></div>
                        <div class="menu-titles">
                            <h1 class=""> {{ $cat->name }}</h1>
                        </div>
                        <div>
                            <p class="menu-descriptions"> {{ $cat->description }}</p>
                        </div>


                    </div>
                @endforeach

            </div>







        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div>
    <!--/#food-menu-->




    <div id="special-offser" class="parallax pricing">
        <div class="container inner">

            <h2 class="section-title text-center"> Our Menus</h2>
            <p class="lead main text-center">There is no sincerer love than the love of food!</p>

            <div class="row">
                @foreach ($menus as $menu)
                    <div class="col-md-6 col-sm-6">

                        <div class="pricing-item">

                            <a href="#"><img class="img-responsive img-thumbnail"
                                    src="{{ Storage::url($menu->image) }}" alt=""></a>

                            <div class="pricing-item-details">

                                <h3><a href="#">{{ $menu->name }}</a></h3>

                                <p>{{ $menu->description }}</p>

                                <a class="btn btn-danger" href="#">Order now</a>
                                <div class="clearfix"></div>
                            </div>
                            <!--price tag-->
                            <span class="hot-tag br-red">{{ $menu->price }}</span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                @endforeach

                <div class="clearfix visible-md"></div>


            </div>

        </div>
        <!-- /.container -->
    </div><!-- /#special-offser -->




    <div id="reservation" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Reservation</h2>
            <p class="lead main text-center">Reserve your table &amp; enjoy lorem Ipsum</p>
            <div class="row">
                <div class="col-md-6">
                    <form class="form form-table" method="POST" action="{{ route('reserve') }}">
                        @csrf
                        <div class="form-group">
                            <h4>Fill the form for table reservation (all fields required).</h4>
                            <h4>Please choose (5pm to 11pm) of next 7 days</h4>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 form-group">
                                <label class="sr-only" for="first_name1">first name</label>
                                <input class="form-control hint" type="text" id="first_name1" name="first_name"
                                    placeholder="First name" required="">
                            </div>
                            @error('first_name')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                            <div class="col-lg-6 col-md-6 form-group">
                                <label class="sr-only" for="last_name1">last name</label>
                                <input class="form-control hint" type="text" id="last_name1" name="last_name"
                                    placeholder="Last name" required="">
                            </div>
                            @error('last_name')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <?php if (Auth::user()) { ?>
                            <div class="col-lg-6 col-md-6 form-group">
                                <label class="sr-only" for="email1">email</label>
                                <input class="form-control hint" type="email" id="email1" name="email"
                                    value="{{ Auth::user()->email }}" placeholder="Email@domain.com" required="">
                            </div>
                            @error('email')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                            <?php } ?>


                            <?php if (!Auth::user()) { ?>
                            <div class="col-lg-6 col-md-6 form-group">
                                <label class="sr-only" for="email1">email</label>
                                <input class="form-control hint" type="email" id="email1" name="email"
                                    disabled placeholder="Please log in First" required="">
                            </div>
                            @error('email')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                            <?php } ?>
                            <div class="col-lg-6 col-md-6 form-group">
                                <label class="sr-only" for="phone1">phone</label>
                                <input class="form-control hint" type="text" id="phone1" name="tel_number"
                                    placeholder="Phone" required="">
                            </div>
                            @error('tel_number')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 form-group">
                                <label class="sr-only" for="reserv_date1"> </label>
                                <input class="form-control hint" type="datetime-local" id="reserv_date1"
                                    name="res_date">

                            </div>



                            @error('res_date')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                            <div class="col-lg-6 col-md-6 form-group">
                                <label class="sr-only" for="numb_guests1">number of guests</label>
                                <input class="form-control hint" type="text" id="numb_guests1"
                                    name="guest_number" placeholder="Number of guests" required="">
                            </div>
                            @error('guest_number')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">

                            <div class="mt-1 col-lg-6 col-md-6 form-group ">
                                <select id="table_id" name="table_id" class="form-control hint ">
                                    @foreach ($tables as $table)
                                        <option value="{{ $table->id }}">{{ $table->name }}
                                            ({{ $table->guest_number }} Guests)
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('table_id')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">

                                <p>We will be happy to reserve a table for you. Please fill in the form up and press
                                    "Reserve". We will
                                    contact you shortly.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <?php if (Auth::user()) { ?>
                                <button type="submit" class="btn btn-danger btn-lg">Reserve!</button>
                                <?php } ?>
                                <?php if (!Auth::user()) { ?>
                                <button type="submit" class="btn btn-danger btn-lg" disabled>Log in to
                                    Reserve!</button>
                                <?php } ?>
                            </div>
                        </div>
                    </form>
                </div><!-- col-md-6 -->


                <div class="col-md-5 col-md-offset-1">

                    <h3><i class="fa fa-clock-o fa-fw"></i>Hours</h3>
                    <h4>Breakfast</h4>
                    <p>Mon to Fri: 7:30 AM - 11:30 AM<br>Sat &amp; Sun: 8:00 AM - 9:00 AM</p>
                    <h4>Lunch</h4>
                    <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                    <h4>Dinner</h4>
                    <p>Mon to Sat: 6:00 PM - 1:00 AM<br>Sun: 5:30 PM - 12:00 AM</p>

                    <h3><i class="fa fa-map-marker fa-fw"></i>Directions</h3>
                    <p>4120 Lenox Avenue, New York, NY, 10035 76 Saint Nicholas Avenue</p>

                    <h3><i class="fa fa-mobile fa-fw"></i>Contacts</h3>
                    <p>Email: <a href="mailto:yourname@meatking.com">yourname@meatking.com</a></p>
                    <p>Phone: +234 3456 678</p>

                </div><!-- col-md-6 -->
            </div>
            <!-- /.services -->
        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!-- #reservation -->



    <div id="chefs" class="parallax pricing">
        <div class="container inner">

            <h2 class="section-title text-center">Our Chefs</h2>
            <p class="lead main text-center">There is no sincerer love than the love of food!</p>

            <div class="row text-center chefs">
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper">
                            <img src="img/chefs/1.jpg">
                        </div>
                        <h3>Saransh Goila</h3>
                        <p>Vivamus sagittis lacuson augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur
                            purus sit amet fermentum ultricies vehicula.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper">
                            <img src="img/chefs/3.jpg">
                        </div>
                        <h3>Jane Doe</h3>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis
                            dis parturient monte nascetur ultricies vehicula. </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper">
                            <img src="img/chefs/2.jpg">
                        </div>
                        <h3>Anton Mosimann</h3>
                        <p>Curabitur blandit matti tempus porttitor. Donec id elit non mi porta ut gravida at eget
                            metus. Consectetur adipiscing elit ultricies vehicula.</p>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->
    </div><!-- /#chefs -->


    <footer id="footer" class="dark-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <div class="row">
                <div class="col-sm-6">
                    &copy; Copyright Meat Master 2022

                </div>
                <div class="col-sm-6">
                    <div class="social-bar">
                        <a href="#" class="fa fa-instagram tooltipped" title=""></a>
                        <a href="#" class="fa fa-youtube-square tooltipped" title=""></a>
                        <a href="#" class="fa fa-facebook-square tooltipped" title=""></a>


                    </div>
                    <div class="social-bar align-center">
                        <a href="#"><i class="bi bi-arrow-up-square "></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript-->

    <script src="{{ asset('js/jquery-2.1.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.actual.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.scrollTo.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/mxain.js') }}" type="text/javascript"></script>



</body>

</html>
