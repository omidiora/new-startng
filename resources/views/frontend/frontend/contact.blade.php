<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <title>Contact Us</title>

    <style>
        body {
            font-family: Nunito;
        }

        /* Style for Navbar Starts */

        .navbar-custom li a {
            color: #000;
        }

        .btn-success {
            background-color: #2DCE89;
            color: #fff;
            border: thin solid #2dce89;
        }

        .btn-success:hover {
            background-color: rgb(2, 20, 12);
            color: #fff;
            border: thin solid rgb(2, 20, 12);
        }

        .custom-toggler .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0, 0.7)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }

        .custom-toggler.navbar-toggler {
            border-color: #000;
        }

        /* Style for Navbar Ends */
        /* Style for Footer Starts */

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Nunito', sans-serif;
        }

        a {
            text-decoration: none;
        }

        .deep {
            background: #3A0842;
            color: #fff;
        }

        .deep #slink {
            background: #44CF6C;
            border-radius: 10px;
            color: white;
            padding: 10px 70px;
        }

        .deep li a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            line-height: 30px;
        }

        .deep li {
            list-style: none;
        }

        .deep li a:hover {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }
        

        .icons i {
            font-size: 26px;
            height: 50px;
            width: 50px;
            padding: 10px 20px;
            color: white;
        }

        .icons i.fa.fa-twitter:hover {
            color: #00aced;
        }

        .icons i.fa.fa-facebook:hover {
            color: #3b5598;
        }

        .icons i.fa.fa-instagram:hover {
            color: #ed3833;
        }

        /* Style for Footer Ends */
        /* Body Style */

        .search {
            background-color: #44CF6C;
        }

        .support {
            background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570910454/startng/Rectangle_66_iauqka.png');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .contact {
            width: 1200px;
            margin-left: 25px;
        }
        @media screen and (max-width: 1024px) {
            .contact {
                width: 1200px;
                margin-left: 10px;
            }
        }
        @media screen and (max-width: 768px) {
            .contact {
                width: 1200px;
                margin-left: 10px;
            }
        }
        @media screen and (max-width: 425px) {
            .contact {
                width: 1200px;
                margin-left: -21px;
            }
        }
        @media screen and (max-width: 375px) {
            .contact {
                width: 1200px;
                margin-left: -15px;
            }
        }
        /* Body Style Ends*/
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom bg-custom">
        <div class="container pt-2 pr-2">
            <a href="/" class="navbar-brand"><img
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570873250/startng/Logo_1_ib5bjh.png"
                    class="img-fluid" alt="logo" width="150px"></a>
            <button class="navbar-toggler float-right custom-toggler" type="button" data-toggle="collapse"
                data-target="#navbar9" style="color: #000;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar9">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{route('about')}}">About Us</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{route('courses.index')}}">Courses</a>
                    </li>

                    @if(!Auth::guest())
                        <li class="nav-item mr-5">
                            <a class="btn btn-success nav-link px-5" href="{{route('mycourses',\Illuminate\Support\Facades\Auth::user()->id)}}" style="color: #fff;">My courses</a>
                        </li>
                    @endif
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{route('hire')}}">Hire A Grad</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                    </li>

                    @if(!Auth::guest())

                        {{--<a class="btn btn-success nav-link px-5" href="{{ route('logout') }}" style="color: #fff;">Logout--}}
                        {{--</a>--}}
                        <a class="btn btn-success nav-link px-5" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>


                    @endif

                    @if(Auth::guest())
                        <li class="nav-item mr-5">
                            <a class="btn btn-success nav-link px-5" href="/signup" style="color: #fff;">Start
                                Learning</a>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid banner">
        <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570908542/startng/Group_411_d0xdb8.png" class="img-fluid contact" height="100">
    </div>

    <div class="container-fluid mt-5">
        <div>
            @if(session('failed'))
                <div class="text-center alert alert-danger">
                    {{session('failed')}}
                </div>

            @endif
        </div>
        <div>
            @if(session('success'))
                <div class="text-center alert alert-success">
                    {{session('success')}}
                </div>

            @endif
        </div>
        <form method="post" action="{{route('contact.store')}}">
            @csrf
            <div class="col-md-10 offset-md-1 pt-5 pb-5">
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usr" class="pb-2">First Name</label>
                            <input type="text" name="fname" pattern = "[A-Za-z]{1,32}" title = "Please input your First Name" class="form-control" id="Fname" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usr" class="pb-2">Last Name</label>
                            <input type="text" name="lname" pattern = "[A-Za-z]{1,32}" title = "Please input your Last Name" class="form-control" id="Lname" required>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usr" class="pb-2">Email Address</label>
                            <input type="email"  name="email" class="form-control" id="Eaddr" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usr" class="pb-2">Phone Number</label>
                            <input type="text" name="phone" pattern = "^[0-9\)\(+-]+$" title = "Please input a correct phone number" class="form-control" id="Pnum" required>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="comment" class="pb-2">Write Your Message</label>
                            <textarea name="message" class="form-control" rows="5" id="comment" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 offset-md-3 text-center mb-5">
                    <p class="pb-3">By filling out this form and clicking submit, <br> you acknowledge our <a href="" style="color: #44CF6C">privacy policy</a></p>
                    <button type="submit" class="btn btn-success pl-5 pr-5">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container-fluid support pt-5 pb-5 mb-0" style="padding-left: 15px;">

        <h1 class="pt-5 mt-5 pl-3 pl-sm-5 pr-5 ml-md-5" style="font-family: Nunito; font-style: normal; font-weight: bold; font-size: 50px; ">
            CUSTOMER SUPPORT</h1>
        <p class="pt-3 pb-3 pl-3 pl-sm-5 pr-5 ml-md-5" style="font-family: Open Sans; font-style: normal; font-weight: bold; font-size: 15px; letter-spacing: 0.655606px;">
            Call +23480500000 or send a mail to support@start.ng</p>

    </div>

    <!-- Footer -->
    <div class="container-fluid text-white deep">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-3 mb-4">
                        <img src="https://res.cloudinary.com/juwon-tech/image/upload/v1570818437/Logo_1_oyasky.png"
                             alt="">
                    </div>
                </div>

                <div class="row pb-4">
                    <div class="col-lg-4 col-md-12 mb-3">
                        <h4 class='mb-4'>Ready to take the Leap?</h4>
                        <a href="{{route('signup')}}" class='btn btn-success px-5 py-2 mb-5'>Start!</a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 my-2">
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('courses.index')}}">Our Course</a></li>
                        <li><a href="{{route('hire')}}">Hire a Grad</a></li>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 my-2">
                        <li><a href="{{route('curriculum')}}">Curriculum</a></li>
                        <li><a href="{{route('blog')}}">Blog</a></li>


                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 my-2">
                        <li><a href="{{route(('find-course'))}}">Find a Course</a></li>

                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 my-2">
                        <li><a href="{{route(('faq'))}}">FAQ</a></li>
                        <li><a href="{{route('terms')}}">Terms of Service</a></li>
                        <li><a href="{{route('privacy')}}">Privacy Policy</a></li>
                    </div>
                </div>

            </div>
    </div>
    <div class="container-fluid text-white py-2" style="background: #2E0435; width:100%;">
        <div class="container text-right">
            <div class="row icons">
                <div class="col-md-12 ">
                    <a href=""><i class='fab fa-twitter' aria-hidden="true"></i></a>
                    <a href=""><i class='fab fa-instagram' aria-hidden="true"></i></a>
                    <a href=""><i class="fab fa-facebook" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        </footer>
    </div>

    <!-- End of Footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html> 