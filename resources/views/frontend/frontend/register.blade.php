<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

    <title>Register</title>



    <style>
        body {

            font-family: 'Nunito', sans-serif;

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

            background-color: #2DCE89;

            color: #fff;

            border: thin solid #2dce89;





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



        .icons i.fab.fa-twitter:hover {



            color: #00aced;



        }



        .icons i.fab.fa-facebook:hover {



            color: #3b5598;



        }



        .icons i.fab.fa-instagram:hover {



            color: #ed3833;



        }



        /* Style for Footer Ends */

        /* Body Style */



        .banner {

            background-color: #E5EBFF;

        }
    </style>

</head>



<body>

    <nav class="navbar navbar-expand-lg navbar-custom bg-custom">

        <div class="container">
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

    <div class="container">

        <div id="main-container"></div>

    </div>

    <div class="container-fluid banner">

        <div class="container">

            <div class="row align-items-center pt-5">

                <div class="col-md-6 pb-5">

                    <h4 class=""
                        style="font-style: normal; font-weight: bold; font-size: 40px; letter-spacing: 0.655606px;">

                        Welcome to the <br>Start.ng application!</h4>

                    <p style="font-style: normal; font-weight: normal; font-size: 20px; line-height: 24px;">Sign up below <br> to Register For our Courses</p>

                </div>

                <div class="col-md-6">

                    <img class="img-fluid"
                        src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570906539/startng/Group_410_uqg7d0.png">

                </div>

            </div>

        </div>

    </div>

    <div class="container pt-4 pb-5">
  
  <form  action="{{ route('register') }}" method="post">

            @csrf

            <div class="row pt-5">

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="usr" style="font-weight: bold;">Full Name:</label>

                        <input type="text" name="name" class="form-control" id="firstName" placeholder="Jane" required>

                    </div>

                </div>

                {{--<div class="col-md-6">--}}

                    {{--<div class="form-group">--}}

                        {{--<label for="usr" style="font-weight: bold;">Second Name:</label>--}}

                        {{--<input type="text" class="form-control" id="secondName" required>--}}

                    {{--</div>--}}

                {{--</div>--}}

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="usr" style="font-weight: bold;">Email Address:</label>

                        <input type="text" @error('email') is-invalid @enderror  name="email" class="form-control" id="email" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="usr" style="font-weight: bold;">Password:</label>

                        <input type="password" name="password" class="form-control" id="password" required>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="usr" style="font-weight: bold;">Confirm Password:</label>

                        <input type="password" name="password_confirmation" class="form-control" id="confirm_password" required>

                        {{--<small id="passwordHelpBlock" class="form-text text-muted">--}}

                        {{--e.g. Nigeria--}}

                        {{--</small>--}}

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="usr" style="font-weight: bold;">Mobile Number:</label>

                        <input type="text" name="phone" class="form-control" id="mobileNumber" required>

                        <small id="passwordHelpBlock" class="form-text text-muted">

                            e.g. +2348101234567

                        </small>

                    </div>

                </div>

            </div>


            <button type="submit" class="btn btn-success d-block mx-auto pl-5 pr-5 mb-4">Continue</button>

            <div>
                <p>Already have an Account? <a href="{{route('signin')}}"> Sign In</a> </p>
            </div>

        </form>

</div>
    </div>

    </div>



    <!-- Footer -->


    <div class="container-fluid text-white deep mt-5">



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

    <script>

        const mainContainer = document.querySelector('#main-container');

        const formSubmit = document.querySelector('#formSubmit');

        let error = [];



        formSubmit.addEventListener('submit', (e) => {

            e.preventDefault();



            const firstName = document.querySelector('#firstName').value;

            const secondName = document.querySelector('#secondName').value;

            const email = document.querySelector('#email').value;

            const mobileNumber = document.querySelector('#mobileNumber').value;

            const course = document.querySelector('#course').value;

            const experience = document.querySelector('#experience').value;

            const state = document.querySelector('#state').value;

            const country = document.querySelector('#country').value;



            if (!firstName || firstName.length < 5) {

                error.push('FirstName should not be less than 5')

            }



            if (!secondName || secondName.length < 5) {

                error.push('SecondName should not be less than 5')

            }



            if (!email || email.length < 5) {

                error.push('Email field cannot be less than 5 characters')

            }



            if (!mobileNumber || mobileNumber.length < 5) {

                error.push('Mobile Number should not be less than 5 numbers')

            }



            if (!course) {

                error.push('Course field cannot be blank')

            }



            if (!experience) {

                error.push('Experience cannot be blank')

            }



            if (!state) {

                error.push('State of Residence cannot be blank')

            }



            if (!country) {

                error.push('Country cannot be blank')

            }



            if (error.length > 0) {

                error.forEach(err => {

                    const div = document.createElement('div');

                    div.style.width = '100%';

                    div.style.padding = '10px 8px';

                    div.style.backgroundColor = 'green';

                    div.style.color = '#fff';

                    div.style.marginBottom = '10px';

                    div.style.borderRadius = '4px';

                    div.textContent = err;

                    mainContainer.append(div);

                    setTimeout(() => div.remove(), 5000);

                });

                error.length = 0;

                return

            }

            console.log(true);

        });



    </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>















</body>

</html>


</html>

