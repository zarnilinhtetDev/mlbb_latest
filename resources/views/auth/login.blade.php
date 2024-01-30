<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900');

    body {
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
        font-size: 15px;
        line-height: 1.7;
        color: #c4c3ca;
        background: -webkit-linear-gradient(left, #a445b2, #fa4299);
        overflow-x: hidden;
    }

    a {
        cursor: pointer;
        transition: all 200ms linear;
    }

    a:hover {
        text-decoration: none;
    }

    .link {
        color: #c4c3ca;
    }

    .link:hover {
        color: #ffeba7;
    }

    p {
        font-weight: 500;
        font-size: 14px;
        line-height: 1.7;
    }

    h4 {
        font-weight: 600;
    }

    h6 span {
        padding: 0 20px;
        text-transform: uppercase;
        font-weight: 700;
    }

    .section {
        position: relative;
        width: 100%;
        display: block;

    }

    .full-height {
        min-height: 70vh;
    }

    [type="checkbox"]:checked,
    [type="checkbox"]:not(:checked) {
        position: absolute;
        left: -9999px;
    }

    .checkbox:checked+label,
    .checkbox:not(:checked)+label {
        position: relative;
        display: block;
        text-align: center;
        width: 60px;
        height: 16px;
        border-radius: 8px;
        padding: 0;
        margin: 10px auto;
        cursor: pointer;
        background-color: #ffeba7;
    }

    .checkbox:checked+label:before,
    .checkbox:not(:checked)+label:before {
        position: absolute;
        display: block;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        color: #ffeba7;
        background-color: #70105a;
        font-family: 'unicons' !important;
        content: '♺';
        z-index: 20;
        top: -10px;
        left: -10px;
        line-height: 36px;
        text-align: center;
        font-size: 24px;
        transition: all 0.5s ease;
    }

    .checkbox:checked+label:before {
        transform: translateX(44px) rotate(-270deg);
    }


    .card-3d-wrap {
        position: relative;
        width: 440px;
        max-width: 100%;
        height: 400px;
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
        perspective: 800px;
        margin-top: 60px;
    }

    .card-3d-wrapper {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
        transition: all 600ms ease-out;
    }

    .card-front,
    .card-back {
        width: 100%;
        height: 28rem;
        background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS82mL0lCjn8cUhnzzoE1oYnjPkobX4USGFXw&usqp=CAU) no-repeat center center;
        background-size: cover;
        background-position: bottom center;
        background-repeat: no-repeat;
        background-size: 300%;
        position: absolute;
        border-radius: 6px;
        left: 0;
        top: 0;
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -o-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .card-back {
        transform: rotateY(180deg);
    }

    .checkbox:checked~.card-3d-wrap .card-3d-wrapper {
        transform: rotateY(180deg);
    }

    .center-wrap {
        position: absolute;
        width: 100%;

        padding: 0 35px;
        top: 50%;
        left: 0;
        transform: translate3d(0, -50%, 35px) perspective(100px);
        z-index: 20;
        display: block;
    }


    .form-group {
        position: relative;
        display: block;
        margin: 0;
        padding: 0;
    }

    .form-style {
        padding: 13px 20px;
        padding-left: 55px;
        height: 48px;
        width: 100%;
        font-weight: 500;
        border-radius: 15px;
        font-size: 14px;
        line-height: 22px;
        letter-spacing: 0.5px;
        outline: none;
        color: #070707;
        background-color: #fff;

        border: none;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear;
        box-shadow: 0 4px 8px 0 rgba(21, 21, 21, .2);
    }

    .form-style:focus,
    .form-style:active {
        border: none;
        outline: none;
        box-shadow: 0 4px 8px 0 rgba(21, 21, 21, .2);
    }

    .input-icon {
        position: absolute;
        top: 0;
        left: 18px;
        height: 48px;
        font-size: 24px;
        line-height: 48px;
        text-align: left;
        color: #070707;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear;
    }

    .form-group input:-ms-input-placeholder {
        color: #c4c3ca;
        opacity: 0.7;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear;
    }

    .form-group input::-moz-placeholder {
        color: #c4c3ca;
        opacity: 0.7;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear;
    }

    .form-group input:-moz-placeholder {
        color: #c4c3ca;
        opacity: 0.7;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear;
    }

    .form-group input::-webkit-input-placeholder {
        color: #c4c3ca;
        opacity: 0.7;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear;
    }

    .form-group input:focus:-ms-input-placeholder {
        opacity: 0;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear;
    }

    .form-group input:focus::-moz-placeholder {
        opacity: 0;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear;
    }

    .form-group input:focus:-moz-placeholder {
        opacity: 0;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear;
    }

    .form-group input:focus::-webkit-input-placeholder {
        opacity: 0;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear;
    }

    .btn {
        border-radius: 4px;
        height: 44px;
        font-size: 13px;
        font-weight: 600;
        text-transform: uppercase;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear;
        padding: 0 30px;
        letter-spacing: 1px;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-align-items: center;
        -moz-align-items: center;
        -ms-align-items: center;
        align-items: center;
        -webkit-justify-content: center;
        -moz-justify-content: center;
        -ms-justify-content: center;
        justify-content: center;
        -ms-flex-pack: center;
        text-align: center;
        border: none;
        background: -webkit-linear-gradient(right, #a445b2, #fa4299, #a445b2, #fa4299);
        color: #fff !important;
        box-shadow: 0 8px 24px 0 rgba(255, 235, 167, .2);
    }

    .btn:active,
    .btn:focus {
        background-color: #484a4f;
        color: #ffeba7;
        box-shadow: 0 8px 24px 0 rgba(16, 39, 112, .2);
    }

    .btn:hover {
        background-color: #102770;
        color: #ffeba7;
        box-shadow: 0 8px 24px 0 rgba(16, 39, 112, .2);
    }




    .logo {
        position: absolute;
        top: 30px;
        right: 30px;
        display: block;
        z-index: 100;
        transition: all 250ms linear;
    }

    .logo img {
        height: 26px;
        width: auto;
        display: block;
    }
</style>
<style>
    .loading-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(68, 34, 34, 0.7);
        /* Semi-transparent white background */
        z-index: 999;
    }

    .loading-spinner {
        position: fixed;
        top: 50%;
        display: none;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1000;
        animation: rotateSpinner 5s linear infinite;
        /* Rotate for 5 seconds */
    }

    @keyframes rotateSpinner {
        to {
            transform: translate(-50%, -50%) rotate(360deg);
        }
    }

    /* Style for the spinner image */
    .loading-spinner img {
        width: 50px;
        /* Adjust the size as needed */
        height: 50px;
        /* Adjust the size as needed */
    }
</style>


<body>
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3 text-white"><span>Log In </span><span>Sign Up</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log">
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-2 pb-3 text-white">LogIn Form</h4>
                                            <style>
                                                img.centered {
                                                    display: block;
                                                    margin-left: auto;
                                                    margin-right: auto;
                                                }
                                            </style>

                                            <img src="{{ asset('frontend/photo/m2nseven.png') }}" alt=""
                                                class="centered my-3" width="15%" height="12%">
                                            <form method="post" action="{{ route('login') }}">
                                                @csrf
                                                <div class="form-group">

                                                    <input type="email" name="email" class="form-style"
                                                        placeholder="Your Email" id="logemail" autocomplete="off">

                                                </div> @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                @if (session('error'))
                                                    <span class="text-white" style="font-size: 70%;">
                                                        {{ session('error') }}</span>
                                                @endif
                                                <div class="form-group mt-3">
                                                    <input type="password" name="password" class="form-style"
                                                        placeholder="Your Password" id="logpass" autocomplete="off">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    {{-- <i class="input-icon uil uil-lock-alt"></i> --}}
                                                </div>
                                                <div class="loading-spinner" id="loadingImage">
                                                    <img src="{{ asset('frontend/photo/m2nseven.png') }}"
                                                        alt="Loading...">
                                                </div>

                                                <button type="submit" name="login-submit" class="btn mt-4"
                                                    onclick="showSpinner()">Login</button>
                                            </form>
                                            <p class="mb-0 mt-4 text-center"><a href="fogot_password.php"
                                                    class="link">Forgot your password?</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="my-3 pb-1 text-white">SignUp Form</h4>
                                            <style>
                                                img.centered {
                                                    display: block;
                                                    margin-left: auto;
                                                    margin-right: auto;
                                                }
                                            </style>

                                            <img src="{{ asset('frontend/photo/m2nseven.png') }}" alt=""
                                                class="centered my-3" width="15%" height="12%">

                                            <form method="post" action="{{ route('register') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-style"
                                                        placeholder="Enter Name" id="logname" autocomplete="off"
                                                        required=""> @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    {{-- <i class="input-icon uil uil-user"></i> --}}
                                                </div>
                                                <div class="form-group mt-3">
                                                    <input type="email" name="email" class="form-style"
                                                        placeholder="Enter Email" id="logemail" autocomplete="off"
                                                        required="">
                                                    {{-- <i class="input-icon uil uil-at"></i> --}}
                                                </div> @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror


                                                <div class="form-group mt-3">
                                                    <input type="password" name="password" class="form-style"
                                                        placeholder="Enter Password" id="logpass"
                                                        autocomplete="off" required=""> @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    {{-- <i class="input-icon uil uil-lock-alt"></i> --}}
                                                </div>
                                                <div class="form-group mt-3">
                                                    <input type="password" name="password_confirmation"
                                                        class="form-style" placeholder="Re-Enter Password"
                                                        id="logpass" autocomplete="off" required="">
                                                    {{-- <i class="input-icon uil uil-lock-alt"></i> --}}
                                                </div>
                                                <div class="loading-spinner" id="loadingImage">
                                                    <img src="{{ asset('frontend/photo/m2nseven.png') }}"
                                                        alt="Loading...">
                                                </div>
                                                <button type="submit" name="register-submit" class="btn my-4"
                                                    onclick="showSpinner()">Register</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const loadingSpinner = document.getElementById("loadingImage");

        function showSpinner() {
            loadingSpinner.style.display = "block";
            loadingOverlay.style.display = "block";

        }
    </script>
</body>

</html>
