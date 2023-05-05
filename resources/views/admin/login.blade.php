





































<style>








    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');
    
    input {
      caret-color: red;
    }
    
    body {
      margin: 0;
      width: 100vw;
      height: 100vh;
      background: #ecf0f3;
      display: flex;
      align-items: center;
      text-align: center;
      justify-content: center;
      place-items: center;
      overflow: hidden;
      font-family: poppins;
    }
    
    .container {
      position: relative;
      width: 350px;
      height: 525px;
      border-radius: 20px;
      padding: 40px;
      box-sizing: border-box;
      background: #ecf0f3;
      box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
    }
    
    .brand-logo {
      height: 100px;
      width: 100px;
      background: url("assets/images/schl_icon.png");
      margin: auto;
      border-radius: 50%;
      box-sizing: border-box;
      box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px white;
    }
    
    .brand-title {
      margin-top: 10px;
      font-weight: 900;
      font-size: 1.8rem;
      color: #1DA1F2;
      letter-spacing: 1px;
    }
    
    .inputs {
      text-align: left;
      margin-top: 30px;
    }
    
    label, input, button {
      display: block;
      width: 100%;
      padding: 0;
      border: none;
      outline: none;
      box-sizing: border-box;
    }
    
    label {
      margin-bottom: 4px;
    }
    
    label:nth-of-type(2) {
      margin-top: 12px;
    }
    
    input::placeholder {
      color: gray;
    }
    
    input {
      background: #ecf0f3;
      padding: 10px;
      padding-left: 20px;
      height: 50px;
      font-size: 14px;
      border-radius: 50px;
      box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
    }
    
    button {
      color: white;
      margin-top: 20px;
      background: #1DA1F2;
      height: 40px;
      border-radius: 20px;
      cursor: pointer;
      font-weight: 900;
      box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
      transition: 0.5s;
    }
    
    button:hover {
      box-shadow: none;
    }
    
    a {
      position: absolute;
      font-size: 8px;
      bottom: 4px;
      right: 4px;
      text-decoration: none;
      color: black;
      background: yellow;
      border-radius: 10px;
      padding: 2px;
    }
    
    h1 {
      position: absolute;
      top: 0;
      left: 0;
    }
    
    
    
    
    
    
        
        /* * {
            box-sizing: border-box;
        }
    
        body {
            font-family: 'Rubik', sans-serif;
            margin: 0;
            padding: 0;
        }
    
        .container {
            display: flex;
            height: 100vh;
        }
    
        .left-section {
            overflow: hidden;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            justify-content: center;
            -webkit-animation-name: left-section;
            animation-name: left-section;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-delay: 1s;
            animation-delay: 1s;
        }
    
        .right-section {
            flex: 1;
            background: linear-gradient(to right, #f50629 0%, #fd9d08 100%);
            transition: 1s;
            background-image: url(https://imgs.search.brave.com/lWqbDW1WwIMbVH0GrhbeHnsp4D1NzTwkzEaUqfWfzEs/rs:fit:1090:630:1/g:ce/aHR0cHM6Ly93d3cu/c2t5cmlkZXIuZWR1/Lm5wL21lZGlhL2dh/bGxlcnlfaW1hZ2Uv/UHJpbWFyeV9CdWls/ZGluZ19CbG9ja19B/LnBuZw);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    
        .header>h1 {
            margin: 0;
            color: #f50629;
        }
    
        .header>h4 {
            margin-top: 10px;
            font-weight: normal;
            font-size: 15px;
            color: rgba(0, 0, 0, 0.4);
        }
    
        .form {
            max-width: 80%;
            display: flex;
            flex-direction: column;
        }
    
        .form>p {
            text-align: right;
        }
    
        .form>p>a {
            color: #000;
            font-size: 14px;
        }
    
        .form-field {
            height: 46px;
            padding: 0 16px;
            border: 2px solid #ddd;
            border-radius: 38px;
            font-family: 'Rubik', sans-serif;
            outline: 0;
            transition: .2s;
            margin-top: 20px;
        }
    
        .form-field:focus {
            border-color: #0f7ef1;
        }
    
        .form>button:hover{
            cursor: pointer;
            border-color: aqua
        }
    
        .form>button {
            
            padding: 12px 10px;
            border: 0;
            background: linear-gradient(to right, #f50629 0%, #fd9d08 100%);
            border-radius: 38px;
            margin-top: 10px;
            color: #fff;
            letter-spacing: 1px;
            font-family: 'Rubik', sans-serif;
        }
    
        .animation {
            -webkit-animation-name: move;
            animation-name: move;
            -webkit-animation-duration: .4s;
            animation-duration: .4s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-delay: 2s;
            animation-delay: 2s;
        }
    
        .a1 {
            -webkit-animation-delay: 2s;
            animation-delay: 2s;
        }
    
        .a2 {
            -webkit-animation-delay: 2.1s;
            animation-delay: 2.1s;
        }
    
        .a3 {
            -webkit-animation-delay: 2.2s;
            animation-delay: 2.2s;
        }
    
        .a4 {
            -webkit-animation-delay: 2.3s;
            animation-delay: 2.3s;
        }
    
        .a5 {
            -webkit-animation-delay: 2.4s;
            animation-delay: 2.4s;
        }
    
        .a6 {
            -webkit-animation-delay: 2.5s;
            animation-delay: 2.5s;
        }
    
        @keyframes move {
            0% {
                opacity: 0;
                visibility: hidden;
                -webkit-transform: translateY(-40px);
                transform: translateY(-40px);
            }
    
            100% {
                opacity: 1;
                visibility: visible;
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }
    
        @keyframes left-section {
            0% {
                opacity: 0;
                width: 0;
            }
    
            100% {
                opacity: 1;
                padding: 20px 40px;
                width: 440px;
            }
        } */
    </style>
    
    
    
        {{-- <div class="left-section">
            <div class="header">
                <h1 class="animation a1">Welcome Back!</h1>
                <h4 class="animation a2">Log in to enter dashboard.</h4>
            </div>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form">
    
    
    
                    <input placeholder="Email" id="email" type="email" class="form-field animation a4" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                    
        
        
        
                    <input placeholder="Password" id="password" type="password" class="form-field animation a4" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">
        
                        
                        @error('email')
                        <div class="col-md-6">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        </div>
                    @enderror
    
    
                    @error('password')
                    <div class="col-md-6">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
        
        
                    
                    <p class="animation a5"><a href="#">Forgot Password ?</a></p>
                    <button type="submit" class="animation a6">LOGIN</button>
                </div>
    
            </form>
        </div>
        <div class="right-section"></div> --}}
    
    
        <div class="container">
            <div class="brand-logo"></div>
            <div class="brand-title">Admin Login</div>
            <div class="inputs">
                <form action="{{ route('admin.login') }}" method="post">
                    @csrf
                    <div class="form">
        
        
        
                        <input placeholder="Email" id="email" type="email" class="form-field animation a4" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
            <br>
                        
            
            
            
                        <input placeholder="Password" id="password" type="password" class="form-field animation a4" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">
            
                            
                            @error('email')
                            <div class="col-md-6">
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            </div>
                        @enderror
        <br>
        
                        @error('password')
                        <div class="col-md-6">
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        </div>
                        @enderror
            
            
                        
                        <br>
                        <button type="submit" class="animation a6">LOGIN</button>
                    </div>
        
                </form>
            </div>
            <a href="https://www.facebook.com/profile.php?id=100087074499186"></a>
          </div>
    
    
    
    
    