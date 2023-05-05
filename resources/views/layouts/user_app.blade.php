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
        @import url('https://fonts.googleapis.com/css?family=Heebo:800');








#container {
  position: absolute;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

#slides {
  position: relative;
  width: 100%;
  height: 100%;
}
#slides .slide {
  position: absolute;
  display: flex;
  width: 100%;
  height: 55%;
}
#slides .slide .title {
  position: absolute;
  top: calc(50% - 0.5em);
  left: 20px;
  z-index: 2;
  padding-top: 5px;
  font-family: "Reem Kufi", sans-serif;
  font-size: 5em;
  color: white;
  overflow: hidden;
}
#slides .slide .title .title-text {
  display: block;
  transform: translateY(1.2em);
  transition: transform 1s ease-in-out;
}
#slides .slide .slide-partial {
  position: absolute;
  width: 100%;
  height: 100%;
  overflow: hidden;
  transition: transform 1s ease-in-out;
}
#slides .slide .slide-partial img {
  position: absolute;
  z-index: 1;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  transition: transform 1s ease-in-out;
}
#slides .slide .slide-left {
  top: 0;
  left: 0;
  transform: translateX(-100%);
}
#slides .slide .slide-left img {
  top: 0;
  right: 0;
  -o-object-position: 100% 50%;
     object-position: 100% 50%;
  transform: translateX(50%);
}
#slides .slide .slide-right {
  top: 0;
  right: 0;
  transform: translateX(100%);
  transition-delay: 0.2s;
}
#slides .slide .slide-right img {
  top: 0;
  left: 0;
  -o-object-position: 0% 50%;
     object-position: 0% 50%;
  transition-delay: 0.2s;
  transform: translateX(-50%);
}
#slides .slide.active .title .title-text {
  transform: translate(0);
  transition-delay: 0.3s;
}
#slides .slide.active .slide-partial, #slides .slide.active .slide-partial img {
  transform: translateX(0);
}

#slide-select {
  position: absolute;
  bottom: 45%;
  left: 0%;
  z-index: 100;
  display: flex;
  align-items: center;
  justify-content: space-around;
  font-family: "Reem Kufi", sans-serif;
  font-size: 1.5em;
  font-weight: lighter;
  color: white;
}
#slide-select li {
  position: relative;
  cursor: pointer;
  margin: 0 5px;
}
#slide-select li.prev:hover {
  transform: translateX(-2px);
}
#slide-select li.next:hover {
  transform: translateX(2px);
}
#slide-select .selector {
  height: 14px;
  width: 14px;
  border: 2px solid white;
  background-color: transparent;
  transition: background-color 0.5s ease-in-out;
}
#slide-select .selector.current {
  background-color: white;
}







        :root {
  --surface-color: #fff;
  --curve: 40;
}

* {
  box-sizing: border-box;
}

body {
  font-family: 'Noto Sans JP', sans-serif;
  background-color: #fef8f8;
}

.cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin: 4rem 5vw;
  padding: 0;
  list-style-type: none;
}

.card {
  position: relative;
  display: block;
  height: 100%;  
  border-radius: calc(var(--curve) * 1px);
  overflow: hidden;
  text-decoration: none;
}

.card__image {      
  width: 100%;
  height: auto;
}

.card__overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;      
  border-radius: calc(var(--curve) * 1px);    
  background-color: var(--surface-color);      
  transform: translateY(100%);
  transition: .2s ease-in-out;
}

.card:hover .card__overlay {
  transform: translateY(0);
}

.card__header {
  position: relative;
  display: flex;
  align-items: center;
  gap: 2em;
  padding: 2em;
  border-radius: calc(var(--curve) * 1px) 0 0 0;    
  background-color: var(--surface-color);
  transform: translateY(-100%);
  transition: .2s ease-in-out;
}

.card__arc {
  width: 80px;
  height: 80px;
  position: absolute;
  bottom: 100%;
  right: 0;      
  z-index: 1;
}

.card__arc path {
  fill: var(--surface-color);
  d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
}       

.card:hover .card__header {
  transform: translateY(0);
}

.card__thumb {
  flex-shrink: 0;
  width: 50px;
  height: 50px;      
  border-radius: 50%;      
}

.card__title {
  font-size: 1em;
  margin: 0 0 .3em;
  color: #6A515E;
}

.card__tagline {
  display: block;
  margin: 1em 0;
  font-family: "MockFlowFont";  
  font-size: .8em; 
  color: #D7BDCA;  
}

.card__status {
  font-size: .8em;
  color: #D7BDCA;
}

.card__description {
  padding: 0 2em 2em;
  margin: 0;
  color: #D7BDCA;
  font-family: "MockFlowFont";   
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
}    















/* GG part ended here */
/*Hi There i am taranga Baral hehehehehehe 😉*/





        h2 {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #fff;
            margin: 20px;
            opacity: 0;
            transition: opacity 1s;
        }

        .fa {
            opacity: 0;
            transition: opacity 1s;
        }

        .icons {
            position: absolute;
            fill: #fff;
            color: #fff;
            height: 130px;
            top: 226px;
            width: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
        }







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
                    <a class="navbar-brand" href="">Dashboard</a>
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

            <div id="container">
                <ul id="slides">
                  <li class="slide">
                    <div class="slide-partial slide-left"><img src="https://www.skyrider.edu.np/media/slider_img/second.png"/></div>
                    <div class="slide-partial slide-right"><img src="https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/339360245_1274398169823536_5270993922244408876_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=2fMAu-i0_hMAX8kYpdT&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfCtTJNouF4SkQauqGrcDa6HoQoNoQDPzd8Aju1XQVGwYA&oe=64571EE4"/></div>
                    <h1 class="title"><span class="title-text"></span></h1>
                  </li>
                  <li class="slide">
                    <div class="slide-partial slide-left"><img src="https://www.skyrider.edu.np/static/img/sk4.jpg"/></div>
                    <div class="slide-partial slide-right"><img src="https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/337870476_605010951680507_3856025104711266275_n.jpg?stp=dst-jpg_s600x600&_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=HR00qWvP_TkAX-C_ON5&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfDfLGjinzf-aQCcaJCd4XrdWtid1c-P_sbkHOB-NLa0tQ&oe=6457AFBB"/></div>
                    <h1 class="title"><span class="title-text"></span></h1>
                  </li>
                  <li class="slide">
                    <div class="slide-partial slide-right"><img src="https://skyrider.edu.np/static/img/log.png"/></div>
                    <div class="slide-partial slide-left"><img src="https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/311877172_102976459281504_1672528335168855506_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=R7nSrMCDk0wAX_wNq2h&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfBB058tnRFsqMPV2yV_e2bwC4dUUrUKWRNQIV7m1lpYcw&oe=6457749D"/></div>
                    
                    <h1 class="title"><span class="title-text"></span></h1>
                  </li>
                  <li class="slide">
                    <div class="slide-partial slide-left"><img src="https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/342781089_585441730204518_105413597396410806_n.jpg?stp=dst-jpg_s600x600&_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=ywMjEHa6o0QAX-blQI-&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfDt1nvwwJK6B7TBJHd6bpH3yUtOkvHemCp_L5LyoSrKcw&oe=6458A3C9"/></div>
                    <div class="slide-partial slide-right"><img src="https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/326409932_713695380326640_5816006625209458817_n.jpg?stp=cp6_dst-jpg&_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=c8E9XDC7H84AX9AvIsr&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfDDnMo53KWIqdLwTCwk6oQ59AuTIRbR_iLT9lfq5a1ecw&oe=64577F89"/></div>
                    <h1 class="title"><span class="title-text"></span></h1>
                  </li>
                  <li class="slide">
                    <div class="slide-partial slide-left"><img src="https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/311877172_102976459281504_1672528335168855506_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=R7nSrMCDk0wAX_wNq2h&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfBB058tnRFsqMPV2yV_e2bwC4dUUrUKWRNQIV7m1lpYcw&oe=6457749D"/></div>
                    <div class="slide-partial slide-right"><img src="https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/343996434_1731487517254026_6778638098709158521_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=RheDauGqOA8AX_jtwkV&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfBIcWwZT1Me3H2laLQ7VPokXGgRbbAoiNeFnST58E7zow&oe=6457D831"/></div>
                    <h1 class="title"><span class="title-text"></span></h1>
                  </li>
                </ul>
                <ul id="slide-select">
                  <li class="btn prev"><</li>
                  <li class="selector"></li>
                  <li class="selector"></li>
                  <li class="selector"></li>
                  <li class="selector"></li>
                  <li class="selector"></li>
                  <li class="btn next">></li>
                </ul>
              </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


              {{-- Teacher's Info Starts Here --}}
            <ul class="cards">
                <li>
                  <a href="https://www.facebook.com/madan.puri.10" target="_blank" class="card">
                    <img src="https://i.imgur.com/QI6aNqG.jpeg" class="card__image" alt="" />
                    <div class="card__overlay">
                      <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                        <img class="card__thumb" src="https://i.imgur.com/LR5UEio.jpg" alt="" />
                        <div class="card__header-text">
                          <h3 class="card__title">Madan Puri</h3>            
                          <span class="card__status">Principal</span>
                        </div>
                      </div>
                      <p class="card__description">Welcome Here All the dear Students </p>
                    </div>
                  </a>      
                </li>
                <li>


                  <a href="https://www.facebook.com/durga.puri.3386" target="_blank" class="card">
                    <img src="https://i.imgur.com/ZtaQp16.jpg" class="card__image" alt="" />
                    <div class="card__overlay">        
                      <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
                        <img class="card__thumb" src="https://i.imgur.com/guj8xWc.jpg" alt="" />
                        <div class="card__header-text">
                          <h3 class="card__title">Durga Puri</h3>
                          <span class="card__status">Chair Person</span>
                        </div>
                      </div>
                      <p class="card__description">Welcome Here All the dear Students .</p>
                    </div>
                  </a>
                </li>


                <li>
                    <a href="https://www.facebook.com/narayan.shrestha.549668"  target="_blank" class="card">
                      <img src="https://i.imgur.com/HDGRASJ.jpg" class="card__image" alt="" />
                      <div class="card__overlay">
                        <div class="card__header">
                          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
                          <img class="card__thumb" src="https://i.imgur.com/BGCltZK.jpg" alt="" />
                          <div class="card__header-text">
                            <h3 class="card__title">Narayan Shrestha</h3>
                            <span class="card__status">Vice Principal</span>
                          </div>          
                        </div>
                        <p class="card__description">Welcome Dear Students .</p>
                      </div>
                    </a>
                  </li> 


                <li>
                  <a href="https://www.facebook.com/selfish.prakash" target="_blank" class="card">
                    <img src="https://i.imgur.com/y16J5jQ.jpg" class="card__image" alt="" />
                    <div class="card__overlay">
                      <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
                        <img class="card__thumb" src="https://i.imgur.com/hjrw2Y1.jpg" alt="" />
                        <div class="card__header-text">
                          <h3 class="card__title">Keshav Raj Pathak</h3>
                          <span class="card__status">Vice Principal</span>
                        </div>          
                      </div>
                      <p class="card__description">A Warm Welcome To You all .</p>
                    </div>
                  </a>
                </li>   

                <li>
                    <a href="https://www.facebook.com/rabinjee" target="_blank" class="card">
                      <img src="https://i.imgur.com/XBfCS6N.jpg" class="card__image" alt="" />
                      <div class="card__overlay">
                        <div class="card__header">
                          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
                          <img class="card__thumb" src="https://i.imgur.com/mZvh3IN.jpg" alt="" />
                          <div class="card__header-text">
                            <h3 class="card__title">Rabin Ghimire</h3>
                            <span class="card__status">Head Of IT</span>
                          </div>          
                        </div>
                        <p class="card__description">A Warm Welcome To You all .</p>
                      </div>
                    </a>
                  </li>  






                  <li>
                    <a href="https://www.facebook.com/sharad.adhikari.5439" target="_blank" class="card">
                      <img src="https://i.imgur.com/VU6qwWW.jpg" class="card__image" alt="" />
                      <div class="card__overlay">
                        <div class="card__header">
                          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
                          <img class="card__thumb" src="https://i.imgur.com/msbu5BI.jpg" alt="" />
                          <div class="card__header-text">
                            <h3 class="card__title">Sarad Raj Adhikari</h3>
                            <span class="card__status">+2 Coordinator</span>
                          </div>          
                        </div>
                        <p class="card__description">A Warm Welcome To You all .</p>
                      </div>
                    </a>
                  </li>  







                  <li>
                    <a href="https://www.facebook.com/sharad.adhikari.5439" target="_blank" class="card">
                      <img src="https://i.ibb.co/7YFmMpp/govinda.jpg" class="card__image" alt="" />
                      <div class="card__overlay">
                        <div class="card__header">
                          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
                          <img class="card__thumb" src="https://i.ibb.co/7YFmMpp/govinda.jpg" alt="" />
                          <div class="card__header-text">
                            <h3 class="card__title">Govinda Ghimire</h3>
                            <span class="card__status">Collage Founder</span>
                          </div>          
                        </div>
                        <p class="card__description">A Warm Welcome To You all .</p>
                      </div>
                    </a>
                  </li> 







                  <li>
                    <a href="https://www.facebook.com/sharad.adhikari.5439" target="_blank" class="card">
                      <img src="https://i.ibb.co/Bw5jgzx/rajesh.jpg" class="card__image" alt="" />
                      <div class="card__overlay">
                        <div class="card__header">
                          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
                          <img class="card__thumb" src="https://i.ibb.co/12QxgDS/rajesh1.jpg" alt="" />
                          <div class="card__header-text">
                            <h3 class="card__title">Rajesh Bharati</h3>
                            <span class="card__status">Hostel Warden</span>
                          </div>          
                        </div>
                        <p class="card__description">A Warm Welcome To You all .</p>
                      </div>
                    </a>
                  </li> 



                
                
              </ul>

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
    
<script>
let $slides, interval, $selectors, $btns, currentIndex, nextIndex;

let cycle = index => {
  let $currentSlide, $nextSlide, $currentSelector, $nextSelector;

  nextIndex = index !== undefined ? index : nextIndex;

  $currentSlide = $($slides.get(currentIndex));
  $currentSelector = $($selectors.get(currentIndex));

  $nextSlide = $($slides.get(nextIndex));
  $nextSelector = $($selectors.get(nextIndex));

  $currentSlide.removeClass("active").css("z-index", "0");

  $nextSlide.addClass("active").css("z-index", "1");

  $currentSelector.removeClass("current");
  $nextSelector.addClass("current");

  currentIndex = index !== undefined ?
  nextIndex :
  currentIndex < $slides.length - 1 ?
  currentIndex + 1 :
  0;

  nextIndex = currentIndex + 1 < $slides.length ? currentIndex + 1 : 0;
};

$(() => {
  currentIndex = 0;
  nextIndex = 1;

  $slides = $(".slide");
  $selectors = $(".selector");
  $btns = $(".btn");

  $slides.first().addClass("active");
  $selectors.first().addClass("current");

  interval = window.setInterval(cycle, 6000);

  $selectors.on("click", e => {
    let target = $selectors.index(e.target);
    if (target !== currentIndex) {
      window.clearInterval(interval);
      cycle(target);
      interval = window.setInterval(cycle, 6000);
    }
  });

  $btns.on("click", e => {
    window.clearInterval(interval);
    if ($(e.target).hasClass("prev")) {
      let target = currentIndex > 0 ? currentIndex - 1 : $slides.length - 1;
      cycle(target);
    } else if ($(e.target).hasClass("next")) {
      cycle();
    }
    interval = window.setInterval(cycle, 6000);
  });
});
</script>

</html>
