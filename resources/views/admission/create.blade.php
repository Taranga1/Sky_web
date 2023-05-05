<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky Admission</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../home_assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../home_assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Sky-Home</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="../home_assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../home_assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <link href="../home_assets/css/demo.css" rel="stylesheet" />
    <style>
        @import url('https://fonts.googleapis.com/css?family=Heebo:800');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .parent {
            width: 681px;
            height: 384px;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto auto;
            overflow: hidden;
            position: absolute;
            border-radius: 16px;
            -webkit-box-shadow: 0 0 88px 5px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0 0 88px 5px rgba(0, 0, 0, 0.75);
            box-shadow: 0 0 88px 5px rgba(0, 0, 0, 0.75);
        }

        svg {
            position: absolute;
            z-index: 1;
            width: 681px;
            height: 384px;
        }

        button {
            position: absolute;
            z-index: 50;
            right: 20px;
            width: 40px;
            overflow: hidden;
            height: 40px;
            border: none;
            background: #fff;
            cursor: pointer;
            
        }

        button:focus {
            outline-width: 0;
        }

        circle {
            stroke: #fff;
            fill: none;
            transition: 0.3s;
        }

        #svg1 circle {
            transition-timing-function: linear;
        }

        #svg2 circle {
            transition-timing-function: linear;
        }

        #Capa_1 {
            position: absolute;
            width: 16px;
            height: 16px;
            transform: translate(-7px, -8px);
        }

        #Capa_2 {
            position: absolute;
            width: 16px;
            height: 16px;
            transform: translate(-9px, -8px);
        }

        .right {
            margin-left: 628px;
            margin-top: 168px;
            border: 1px solid #849494;
            background-color: transparent;
            transition: 0.5s;
        }

        .right:hover {
            background-color: #fff;
        }

        .left {
            margin-left: 0.5%;
            margin-top: 168px;
            border: 1px solid #849494;
            background-color: transparent;
            transition: 0.5s;
        }

        .left:hover {
            background-color: #fff;
        }

        .circle1 {
            transition-delay: 0.05s;
        }

        .circle2 {
            transition-delay: 0.1s;
        }

        .circle3 {
            transition-delay: 0.15s;
        }

        .circle4 {
            transition-delay: 0.2s;
        }

        .circle5 {
            transition-delay: 0.25s;
        }

        .circle6 {
            transition-delay: 0.3s;
        }

        .circle7 {
            transition-delay: 0.35s;
        }

        .circle8 {
            transition-delay: 0.4s;
        }

        .circle9 {
            transition-delay: 0.45s;
        }

        .circle10 {
            transition-delay: 0.05s;
        }

        .circle11 {
            transition-delay: 0.1s;
        }

        .circle12 {
            transition-delay: 0.15s;
        }

        .circle13 {
            transition-delay: 0.2s;
        }

        .circle14 {
            transition-delay: 0.25s;
        }

        .circle15 {
            transition-delay: 0.3s;
        }

        .circle16 {
            transition-delay: 0.35s;
        }

        .circle17 {
            transition-delay: 0.4s;
        }

        .circle18 {
            transition-delay: 0.45s;
        }

        .slide1 {
            background-image: url('https://imgs.search.brave.com/lWqbDW1WwIMbVH0GrhbeHnsp4D1NzTwkzEaUqfWfzEs/rs:fit:1090:630:1/g:ce/aHR0cHM6Ly93d3cu/c2t5cmlkZXIuZWR1/Lm5wL21lZGlhL2dh/bGxlcnlfaW1hZ2Uv/UHJpbWFyeV9CdWls/ZGluZ19CbG9ja19B/LnBuZw');
        }

        .slide2 {
            background-image: url('https://imgs.search.brave.com/czKWh-6Pk9TFo91Znj9LXwY0J_-W-0-20ltCrCZvM4I/rs:fit:1087:432:1/g:ce/aHR0cHM6Ly93d3cu/c2t5cmlkZXIuZWR1/Lm5wL21lZGlhL2dh/bGxlcnlfaW1hZ2Uv/UGx1c18yX0Jsb2Nr/X0FfQi5wbmc');
        }

        .slide3 {
            background-image: url('https://imgs.search.brave.com/fp5MTZ6qWbpCPs8GicALzRHck4_T2fywFZPakxYEyd8/rs:fit:960:720:1/g:ce/aHR0cHM6Ly93d3cu/c2t5cmlkZXIuZWR1/Lm5wL3N0YXRpYy9p/bWcvc2s0LmpwZw');
        }

        .slide4 {
            background-image: url('https://imgs.search.brave.com/vk-SczzXaQ1rBqO4b4fJqkMs1t1LrKqNnx6pXaflRNc/rs:fit:964:634:1/g:ce/aHR0cHM6Ly93d3cu/c2t5cmlkZXIuZWR1/Lm5wL21lZGlhL2dh/bGxlcnlfaW1hZ2Uv/RXh0cmFfQWN0aXZp/dGllc18zLnBuZw');
        }

        .slider {
            position: absolute;
            width: 400%;
            height: 100%;
            background: #000;
            display: inline-flex;
            overflow: hidden;
        }

        .slide1,
        .slide2,
        .slide3,
        .slide4 {
            position: absolute;
            background-position: center;
            background-size: cover;
            color: #00d0ff;
            font-size: 62px;
            padding-top: 138px;
            font-weight: 800;
            font-family: 'Heebo', sans-serif;
            text-align: center;
            width: 25%;
            height: 100%;
            z-index: 10;
            transition: 1.4s;
        }

        .tran {
            transform: scale(1.3);
        }

        .up1 {
            z-index: 20;
        }

        .up2 {
            z-index: 40;
        }

        .steap {
            stroke-width: 0;
        }

        .streak {
            stroke-width: 82px;
        }

        @media (max-width: 700px) {
            .parent {
                margin-left: 1%;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../home_assets/img/sidebar-5.jpg">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="/" class="simple-text">
                        SKYRIDER
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="/home">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/user/result">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Student Results</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/admission/create">
                            <i class="nc-icon nc-notes"></i>
                            <p>Admissions</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/gallery">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Gallery</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/brochure" target="_blank">
                            <i class="nc-icon nc-atom"></i>
                            <p>Brochure</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/sky_location">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Location</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/user/notice">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notice</p>
                        </a>
                    </li>

                    <li>
                        <a class="nav-link" href="https://www.facebook.com/skyrider.edu.np" target="_BLANK">
                          <i class="material-icons">facebook</i>
                            <p>Facebook Page</p>
                        </a>
                    </li>
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>LOG-OUT</p>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>



                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href=""> Admission </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button"
                        data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>

                </div>
            </nav>
            <!-- End Navbar -->



            @yield('user')





            {{-- HTML BODY STARTS HERE --}}



            <div>

            </div>

            <section id="section-wrapper">
                <div class="box-wrapper">

                    <div class="form-wrap">
                        <form action="/admission/create" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h2 class="form-title">Admission Form</h2>
                            <div class="form-fields">
                                <div class="form-group">
                                    <input type="text" required class="fname" name="fullname" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" required class="fname" name="fathername"  placeholder="Father's Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" required class="fname" name="mothername"  placeholder="Mother's Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" required class="fname"  name="address1" placeholder="Address">
                                </div>



                                <div class="form-group">
                                    <input type="text" required class="lname"  name="nextclass" placeholder="Next Class">
                                </div>
                                <div class="form-group">
                                    <input type="email" required class="email" name="gmail"  placeholder="Gmail">
                                </div>
                                <div class="form-group">
                                    <input type="number" required class="phone" name="phone1"  placeholder="Phone 1">
                                </div>

                                <div class="form-group">
                                    <input type="number" required class="phone"  name="phone2" placeholder="Phone 2">
                                </div>

                                <div class="form-group">
                                    <input type="text" required class="phone" name="gpa"  placeholder="GPA">
                                </div>





                                <div class="form-group">
                                    <input type="date" required class="phone" name="dob"  placeholder="DOB">
                                </div>
                                <div class="form-group">
                                    <textarea name="description"  required placeholder="Add Your Description"></textarea>
                                </div>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h6>     Your Profile</h6><br>
                            <input type="file" name="image" id="" accept="image/*" required id="image" required>
                            
                            <br><br>
                            <input type="submit" value="Post Form" class="submit-button">
                        </form>
                    </div>
                </div>
            </section>




            {{-- HTML ENDS HERE BODY PART --}}







            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="/home">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="/user/result">
                                    Results
                                </a>
                            </li>
                            <li>
                                <a href="/admission/create">
                                    Admission
                                </a>
                            </li>
                            <li>
                                <a href="/user/notice">
                                    Notice
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="https://www.facebook.com/profile.php?id=100081127939222">Taranga Baral</a>
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    <!--   -->
    <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
   <li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../home_assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../home_assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="..//home_assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../home_assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                </div>
            </li>

            <li class="header-title pro-title text-center">Want more components?</li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
    <button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
    </div>
</div>
 -->
</body>

<script src="../home_assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../home_assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../home_assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="../home_assets/js/plugins/bootstrap-switch.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="../home_assets/js/plugins/chartist.min.js"></script>
<script src="../home_assets/js/plugins/bootstrap-notify.js"></script>
<script src="../home_assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<script src="../home_assets/js/demo.js"></script>

<script>
    var curpage = 1;
    var sliding = false;
    var click = true;
    var left = document.getElementById("left");
    var right = document.getElementById("right");
    var pagePrefix = "slide";
    var pageShift = 500;
    var transitionPrefix = "circle";
    var svg = true;

    function leftSlide() {
        if (click) {
            if (curpage == 1) curpage = 5;
            console.log("woek");
            sliding = true;
            curpage--;
            svg = true;
            click = false;
            for (k = 1; k <= 4; k++) {
                var a1 = document.getElementById(pagePrefix + k);
                a1.className += " tran";
            }
            setTimeout(() => {
                move();
            }, 200);
            setTimeout(() => {
                for (k = 1; k <= 4; k++) {
                    var a1 = document.getElementById(pagePrefix + k);
                    a1.classList.remove("tran");
                }
            }, 1400);
        }
    }

    function rightSlide() {
        if (click) {
            if (curpage == 4) curpage = 0;
            console.log("woek");
            sliding = true;
            curpage++;
            svg = false;
            click = false;
            for (k = 1; k <= 4; k++) {
                var a1 = document.getElementById(pagePrefix + k);
                a1.className += " tran";
            }
            setTimeout(() => {
                move();
            }, 200);
            setTimeout(() => {
                for (k = 1; k <= 4; k++) {
                    var a1 = document.getElementById(pagePrefix + k);
                    a1.classList.remove("tran");
                }
            }, 1400);
        }
    }

    function move() {
        if (sliding) {
            sliding = false;
            if (svg) {
                for (j = 1; j <= 9; j++) {
                    var c = document.getElementById(transitionPrefix + j);
                    c.classList.remove("steap");
                    c.setAttribute("class", transitionPrefix + j + " streak");
                    console.log("streak");
                }
            } else {
                for (j = 10; j <= 18; j++) {
                    var c = document.getElementById(transitionPrefix + j);
                    c.classList.remove("steap");
                    c.setAttribute("class", transitionPrefix + j + " streak");
                    console.log("streak");
                }
            }
            setTimeout(() => {
                for (i = 1; i <= 4; i++) {
                    if (i == curpage) {
                        var a = document.getElementById(pagePrefix + i);
                        a.className += " up1";
                    } else {
                        var b = document.getElementById(pagePrefix + i);
                        b.classList.remove("up1");
                    }
                }
                sliding = true;
            }, 600);
            setTimeout(() => {
                click = true;
            }, 1700);

            setTimeout(() => {
                if (svg) {
                    for (j = 1; j <= 9; j++) {
                        var c = document.getElementById(transitionPrefix + j);
                        c.classList.remove("streak");
                        c.setAttribute("class", transitionPrefix + j + " steap");
                    }
                } else {
                    for (j = 10; j <= 18; j++) {
                        var c = document.getElementById(transitionPrefix + j);
                        c.classList.remove("streak");
                        c.setAttribute("class", transitionPrefix + j + " steap");
                    }
                    sliding = true;
                }
            }, 850);
            setTimeout(() => {
                click = true;
            }, 1700);
        }
    }

    left.onmousedown = () => {
        leftSlide();
    };

    right.onmousedown = () => {
        rightSlide();
    };

    document.onkeydown = e => {
        if (e.keyCode == 37) {
            leftSlide();
        } else if (e.keyCode == 39) {
            rightSlide();
        }
    };
</script>
<script type="text/javascript" src="js/main.js"></script>

</html>
