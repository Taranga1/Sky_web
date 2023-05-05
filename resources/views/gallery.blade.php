<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
       

       





















       * {
  box-sizing: border-box;
}

.image-container {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-template-rows: repeat(2, 1fr);
  width: 100%;
  grid-gap: 0.5rem;
}
.image-container .image {
  position: relative;
  padding-bottom: 100%;
}
.image-container .image img {
  height: 100%;
  width: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  left: 0;
  position: absolute;
  top: 0;
}
.image-container .image img:nth-of-type(1) {
  filter: grayscale(1) brightness(40%);
}
.image-container .image img:nth-of-type(2) {
  -webkit-clip-path: var(--clip-start);
          clip-path: var(--clip-start);
  transition: -webkit-clip-path 0.5s;
  transition: clip-path 0.5s;
  transition: clip-path 0.5s, -webkit-clip-path 0.5s;
}
.image-container .image:hover img:nth-of-type(2) {
  -webkit-clip-path: var(--clip-end);
          clip-path: var(--clip-end);
}













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
            right: 26px;
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
                        <a class="nav-link" href="gallery">
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
                    <a class="navbar-brand" href=""> Gallery </a>
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









            {{-- HTML BODY STARTS HERE --}}



            


            <br>
                
            {{-- <div class="gallery">
                <div class="img-w">
                  <img src="https://scontent.fbhr1-1.fna.fbcdn.net/v/t31.18172-8/22538988_1507630625985888_9190710994922876043_o.jpg?_nc_cat=106&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=4pGdjgP1qAwAX9oti-n&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfDRtRu1qLVBje5OULVLxFjrKFMpCSiBrl_mTd3FCXmQbg&oe=6466AD60" alt="" /></div>
                <div class="img-w"><img src="https://imgs.search.brave.com/lWqbDW1WwIMbVH0GrhbeHnsp4D1NzTwkzEaUqfWfzEs/rs:fit:1090:630:1/g:ce/aHR0cHM6Ly93d3cu/c2t5cmlkZXIuZWR1/Lm5wL21lZGlhL2dh/bGxlcnlfaW1hZ2Uv/UHJpbWFyeV9CdWls/ZGluZ19CbG9ja19B/LnBuZw" alt="" /></div>
                <div class="img-w"><img src="https://imgs.search.brave.com/3W4-sFdYytD523qSBC72BZF848LKQsVN6HcvlJq9Hys/rs:fit:1200:955:1/g:ce/aHR0cHM6Ly93d3cu/c2t5cmlkZXIuZWR1/Lm5wL21lZGlhL3Ns/aWRlcl9pbWcvc2sx/MF8xLmpwZw" alt="" /></div>
                <div class="img-w"><img src="https://imgs.search.brave.com/czKWh-6Pk9TFo91Znj9LXwY0J_-W-0-20ltCrCZvM4I/rs:fit:1087:432:1/g:ce/aHR0cHM6Ly93d3cu/c2t5cmlkZXIuZWR1/Lm5wL21lZGlhL2dh/bGxlcnlfaW1hZ2Uv/UGx1c18yX0Jsb2Nr/X0FfQi5wbmc" alt="" /></div>
                <div class="img-w"><img src="https://imgs.search.brave.com/b-2jSSmPGpPxMbdQT45Hw2Hq4TOa719Jp9T6Cb0st1w/rs:fit:1090:712:1/g:ce/aHR0cHM6Ly93d3cu/c2t5cmlkZXIuZWR1/Lm5wL21lZGlhL2dh/bGxlcnlfaW1hZ2Uv/RXh0cmFfQWN0aXZp/dGllc18yLnBuZw" alt="" /></div>
                <div class="img-w"><img src="https://imgs.search.brave.com/vk-SczzXaQ1rBqO4b4fJqkMs1t1LrKqNnx6pXaflRNc/rs:fit:964:634:1/g:ce/aHR0cHM6Ly93d3cu/c2t5cmlkZXIuZWR1/Lm5wL21lZGlhL2dh/bGxlcnlfaW1hZ2Uv/RXh0cmFfQWN0aXZp/dGllc18zLnBuZw" alt="" /></div>
                <div class="img-w"><img src="https://imgs.search.brave.com/wU86qsCETACbLVtSx_60wifJ346dXoBFbYnmKdVRWzA/rs:fit:1093:325:1/g:ce/aHR0cHM6Ly93d3cu/c2t5cmlkZXIuZWR1/Lm5wL21lZGlhL2dh/bGxlcnlfaW1hZ2Uv/U2Vjb25kYXJ5X0Js/b2NrX0IucG5n" alt="" /></div>
                <div class="img-w"><img src="https://imgs.search.brave.com/ogysQ5ROnm1RDBMdAayMwcQWhmxh2ejLOdM9a7WcPYs/rs:fit:690:829:1/g:ce/aHR0cHM6Ly93d3cu/c2t5cmlkZXIuZWR1/Lm5wL21lZGlhL3Vz/ZXJfaW1hZ2VzL3Nr/MTdfR2tMaDZvMi5q/cGc" alt="" /></div>
                <div class="img-w"><img src="https://imgs.search.brave.com/u46kWaP9qmZ-5muindE6nrSck95fjYjGCIWDvP-2FuE/rs:fit:350:350:1/g:ce/aHR0cHM6Ly9za3ly/aWRlci5lZHUubnAv/c3RhdGljL2ltZy9s/b2cucG5n" alt="" /></div>
              </div> --}}

              
              
<div class="image-container">
    <div class="image" style="--clip-start: ellipse(0 0 at 0 0); --clip-end: ellipse(150% 150% at 0 0);"><img src="https://www.skyrider.edu.np/media/slider_img/sk10_1.jpg"/><img src="https://www.skyrider.edu.np/media/slider_img/sk10_1.jpg"/></div>
    <div class="image" style="--clip-start: inset(100% 0 0 0); --clip-end: inset(0 0 0 0);"><img src="https://www.skyrider.edu.np/media/gallery_image/Primary_Building_Block_A.png"/><img src="https://www.skyrider.edu.np/media/gallery_image/Primary_Building_Block_A.png"/></div>
    <div class="image" style="--clip-start: ellipse(0 0 at 100% 0); --clip-end: ellipse(150% 150% at 100% 0);"><img src="https://i.ytimg.com/vi/F6diHhV_27U/maxresdefault.jpg"/><img src="https://i.ytimg.com/vi/F6diHhV_27U/maxresdefault.jpg"/></div>
    <div class="image" style="--clip-start: polygon(50% 50%,  50% 50%,  50% 50%, 50% 50%); --clip-end: polygon(-50% 50%, 50% -50%, 150% 50%, 50% 150%);"><img src="https://www.skyrider.edu.np/media/gallery_image/Plus_2_Block_A_B.png"/><img src="https://www.skyrider.edu.np/media/gallery_image/Plus_2_Block_A_B.png"/></div>
    <div class="image" style="--clip-start: circle(0); --clip-end: circle(125%);"><img src="https://www.skyrider.edu.np/static/img/sk4.jpg"/><img src="https://www.skyrider.edu.np/static/img/sk4.jpg"/></div>
    <div class="image" style="--clip-start: inset(100% 100% 100% 100%); --clip-end: inset(0 0 0 0);"><img src="https://th.bing.com/th/id/R.f0c61b1f3d2ac803d4f6d6e7ad9905d9?rik=9Dkk14CQUaooow&pid=ImgRaw&r=0"/><img src="https://th.bing.com/th/id/R.f0c61b1f3d2ac803d4f6d6e7ad9905d9?rik=9Dkk14CQUaooow&pid=ImgRaw&r=0"/></div>
    <div class="image" style="--clip-start: ellipse(0 0 at 0 100%); --clip-end: ellipse(150% 150% at 0 100%);"><img src="https://skyrider.edu.np/static/img/log.png"/><img src="https://skyrider.edu.np/static/img/log.png"/></div>
    <div class="image" style="--clip-start: inset(0 0 100% 0); --clip-end: inset(0 0 0 0);"><img src="https://www.skyrider.edu.np/media/gallery_image/Secondary_Block_B.png"/><img src="https://www.skyrider.edu.np/media/gallery_image/Secondary_Block_B.png"/></div>
    <div class="image" style="--clip-start: ellipse(0 0 at 100% 100%); --clip-end: ellipse(150% 150% at 100% 100%);"><img src="https://www.skyrider.edu.np/media/slider_img/second.png"/><img src="https://www.skyrider.edu.np/media/slider_img/second.png"/></div>
    <div class="image" style="--clip-start: ellipse(0 0 at 0 0); --clip-end: ellipse(150% 150% at 0 0);"><img src="https://www.skyrider.edu.np/media/slider_img/fourth.png"/><img src="https://www.skyrider.edu.np/media/slider_img/fourth.png"/></div>
    
</div>

            {{-- HTML ENDS HERE BODY PART --}}
        </div>
    </div>
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
    const track = document.getElementById("image-track");

    const handleOnDown = e => track.dataset.mouseDownAt = e.clientX;

    const handleOnUp = () => {
        track.dataset.mouseDownAt = "0";
        track.dataset.prevPercentage = track.dataset.percentage;
    }

    const handleOnMove = e => {
        if (track.dataset.mouseDownAt === "0") return;

        const mouseDelta = parseFloat(track.dataset.mouseDownAt) - e.clientX,
            maxDelta = window.innerWidth / 2;

        const percentage = (mouseDelta / maxDelta) * -100,
            nextPercentageUnconstrained = parseFloat(track.dataset.prevPercentage) + percentage,
            nextPercentage = Math.max(Math.min(nextPercentageUnconstrained, 0), -100);

        track.dataset.percentage = nextPercentage;

        track.animate({
            transform: `translate(${nextPercentage}%, -50%)`
        }, {
            duration: 1200,
            fill: "forwards"
        });

        for (const image of track.getElementsByClassName("image")) {
            image.animate({
                objectPosition: `${100 + nextPercentage}% center`
            }, {
                duration: 1200,
                fill: "forwards"
            });
        }
    }

    /* -- Had to add extra lines for touch events -- */

    window.onmousedown = e => handleOnDown(e);

    window.ontouchstart = e => handleOnDown(e.touches[0]);

    window.onmouseup = e => handleOnUp(e);

    window.ontouchend = e => handleOnUp(e.touches[0]);

    window.onmousemove = e => handleOnMove(e);

    window.ontouchmove = e => handleOnMove(e.touches[0]);
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

  
<script>
$(function () {
    $(".img-w").each(function () {
      $(this).wrap("<div class='img-c'></div>");
      let imgSrc = $(this).find("img").attr("src");
      $(this).css("background-image", "url(" + imgSrc + ")");
    });
  
    $(".img-c").click(function () {
      let w = $(this).outerWidth();
      let h = $(this).outerHeight();
      let x = $(this).offset().left;
      let y = $(this).offset().top;
  
      $(".active").not($(this)).remove();
      let copy = $(this).clone();
      copy.insertAfter($(this)).height(h).width(w).delay(500).addClass("active");
      $(".active").css("top", y - 8);
      $(".active").css("left", x - 8);
  
      setTimeout(function () {
        copy.addClass("positioned");
      }, 0);
    });
  });
  
  $(document).on("click", ".img-c.active", function () {
    let copy = $(this);
    copy.removeClass("positioned active").addClass("postactive");
    setTimeout(function () {
      copy.remove();
    }, 500);
  });
</script>


</html>
