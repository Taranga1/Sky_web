<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    
    <link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="apple-touch-icon" sizes="76x76" href="../home_assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../home_assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Sky-Home</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
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
    right: 20px;
	 position: absolute;
	 z-index: 50;
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
 .slide1, .slide2, .slide3, .slide4 {
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
                        <a class="nav-link" href="/home" >
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
                        <a class="nav-link active" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" >
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
                    <a class="navbar-brand" href=""> Result </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    
                </div>
            </nav>
            <!-- End Navbar -->
            
                






            
{{-- HTML BODY STARTS HERE --}}

<br>



<div class="row">
    <div class="col-sm-12">
        <form action="" method="get">
            <input value="{{$search}}" type="search" name="search" class="form-control rounded" placeholder="🔍 Search Symbol Number :)" aria-label="Search" aria-describedby="search-addon" />
            <br>
        </form>
    </div>

    
</div>





 


<main class="table">
    
    <section class="table__body">
        <table>
            <thead>
                <tr>
                    <th> Id </th>
                    <th> S.N</th>
                    <th> GPA </th>
                    <th> Term </th>
                </tr>
            </thead>
            <tbody>
@foreach ($result as $key =>$results)

                <tr>
                    <td> {{$results->id}}</td>
                    <td> {{$results->symbolnumber}}</td>
                    <td> {{$results->gpa}} </td>
                    <td> {{$results->term}}</td>
                    
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        
            {{-- <div class="row">
                {{$result->links()}}
            </div> --}}
        
        
    </section>
</main>



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

<style>
    * {
    margin: 0;
    padding: 0;

    box-sizing: border-box;
    font-family: sans-serif;
}



main.table {
    width: 99%;
    height: 70%;
    background-color: #fff5;

    backdrop-filter: blur(7px);
    box-shadow: 0 .4rem .8rem #0005;
    border-radius: .8rem;

    overflow: hidden;
}

.table__header {
    width: 100%;
    height: 10%;
    background-color: #fff4;
    padding: .8rem 1rem;

    display: flex;
    justify-content: space-between;
    align-items: center;
}

.table__header .input-group {
    width: 35%;
    height: 100%;
    background-color: #fff5;
    padding: 0 .8rem;
    border-radius: 2rem;

    display: flex;
    justify-content: center;
    align-items: center;

    transition: .2s;
}

.table__header .input-group:hover {
    width: 45%;
    background-color: #fff8;
    box-shadow: 0 .1rem .4rem #0002;
}

.table__header .input-group img {
    width: 1.2rem;
    height: 1.2rem;
}

.table__header .input-group input {
    width: 100%;
    padding: 0 .5rem 0 .3rem;
    background-color: transparent;
    border: none;
    outline: none;
}

.table__body {
    width: 95%;
    max-height: calc(89% - 1.6rem);
    background-color: #fffb;

    margin: .8rem auto;
    border-radius: .6rem;

    overflow: auto;
    overflow: overlay;
}

.table__body::-webkit-scrollbar{
    width: 0.5rem;
    height: 0.5rem;
}

.table__body::-webkit-scrollbar-thumb{
    border-radius: .5rem;
    background-color: #0004;
    visibility: hidden;
}

.table__body:hover::-webkit-scrollbar-thumb{ 
    visibility: visible;
}

table {
    width: 100%;
}

td img {
    width: 36px;
    height: 36px;
    margin-right: .5rem;
    border-radius: 50%;

    vertical-align: middle;
}

table, th, td {
    border-collapse: collapse;
    padding: 1rem;
    text-align: left;
}

thead th {
    position: sticky;
    top: 0;
    left: 0;
    background-color: #d5d1defe;
    cursor: pointer;
    text-transform: capitalize;
}

tbody tr:nth-child(even) {
    background-color: #0000000b;
}

tbody tr {
    --delay: .1s;
    transition: .5s ease-in-out var(--delay), background-color 0s;
}

tbody tr.hide {
    opacity: 0;
    transform: translateX(100%);
}

tbody tr:hover {
    background-color: #fff6 !important;
}

tbody tr td,
tbody tr td p,
tbody tr td img {
    transition: .2s ease-in-out;
}

tbody tr.hide td,
tbody tr.hide td p {
    padding: 0;
    font: 0 / 0 sans-serif;
    transition: .2s ease-in-out .5s;
}

tbody tr.hide td img {
    width: 0;
    height: 0;
    transition: .2s ease-in-out .5s;
}

.status {
    padding: .4rem 0;
    border-radius: 2rem;
    text-align: center;
}

.status.delivered {
    background-color: #86e49d;
    color: #006b21;
}

.status.cancelled {
    background-color: #d893a3;
    color: #b30021;
}

.status.pending {
    background-color: #ebc474;
}

.status.shipped {
    background-color: #6fcaea;
}


@media (max-width: 1000px) {
    td:not(:first-of-type) {
        min-width: 12.1rem;
    }
}

thead th span.icon-arrow {
    display: inline-block;
    width: 1.3rem;
    height: 1.3rem;
    border-radius: 50%;
    border: 1.4px solid transparent;
    
    text-align: center;
    font-size: 1rem;
    
    margin-left: .5rem;
    transition: .2s ease-in-out;
}

thead th:hover span.icon-arrow{
    border: 1.4px solid #6c00bd;
}

thead th:hover {
    color: #6c00bd;
}

thead th.active span.icon-arrow{
    background-color: #6c00bd;
    color: #fff;
}

thead th.asc span.icon-arrow{
    transform: rotate(180deg);
}

thead th.active,tbody td.active {
    color: #6c00bd;
}

.export__file {
    position: relative;
}

.export__file .export__file-btn {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    background: #fff6 url(images/export.png) center / 80% no-repeat;
    border-radius: 50%;
    transition: .2s ease-in-out;
}

.export__file .export__file-btn:hover { 
    background-color: #fff;
    transform: scale(1.15);
    cursor: pointer;
}

.export__file input {
    display: none;
}

.export__file .export__file-options {
    position: absolute;
    right: 0;
    
    width: 12rem;
    border-radius: .5rem;
    overflow: hidden;
    text-align: center;

    opacity: 0;
    transform: scale(.8);
    transform-origin: top right;
    
    box-shadow: 0 .2rem .5rem #0004;
    
    transition: .2s;
}

.export__file input:checked + .export__file-options {
    opacity: 1;
    transform: scale(1);
    z-index: 100;
}

.export__file .export__file-options label{
    display: block;
    width: 100%;
    padding: .6rem 0;
    background-color: #f2f2f2;
    
    display: flex;
    justify-content: space-around;
    align-items: center;

    transition: .2s ease-in-out;
}

.export__file .export__file-options label:first-of-type{
    padding: 1rem 0;
    background-color: #86e49d !important;
}

.export__file .export__file-options label:hover{
    transform: scale(1.05);
    background-color: #fff;
    cursor: pointer;
}

.export__file .export__file-options img{
    width: 2rem;
    height: auto;
}
</style>
<script type="text/javascript">
    alert("Hope for your Better Result 😉");
    </script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</html>