<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M2nGameShop</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/photo/m2nseven.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"
        integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<style>
    body {
        background: #bd0394;
        /* Fallback color if gradients are not supported */
        background: linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        background: -webkit-linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        /* For Safari and Chrome */
        background: -moz-linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        /* For Firefox */
        font-family: "Times New Roman", Times, serif;
    }

    .navbar-brand {
        max-width:
            140px;
    }

    .custom-login {
        position: relative;
        overflow: hidden;
        border: none;
        padding: 10px;
        font-size: 15px;
        cursor: pointer;
        background: linear-gradient(45deg, #bd0394, #3a89eb);
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: bold;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        transition: box-shadow 0.3s ease;
    }

    img {
        border-radius: 10px;
        /* Adjust the value as needed */
    }

    @keyframes slideInFromRight {
        0% {
            transform: translateX(100%);
            opacity: 0;
        }

        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .carousel-inner .carousel-item {
        animation: slideInFromRight 1s ease-in-out;
    }

    .custom-btn {
        position: relative;
        overflow: hidden;
        border: none;
        padding: 10px;
        font-size: 15px;
        cursor: pointer;
        background: linear-gradient(45deg, #162858, #0069D9);
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: bold;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        transition: box-shadow 0.1s ease;
    }

    .custom-btn:hover {
        box-shadow: 0 0 20px rgba(14, 221, 248, 0.8);
    }
</style>

<style>
    .custom-btn {
        width: 50%;
    }

    .PcDiamant-ul {
        list-style: none;
        padding-left: 0;
    }

    .PcDiamant-ul li {
        border: 1px solid #ddd;
        border-radius: 15px;
        margin-bottom: 10px;
        padding: 10px;
        background-color: #f8f9fa;
        /* Add background color for better visibility */
        transition: box-shadow 0.3s ease-in-out;
        /* Add transition for smooth effect */
    }

    .PcDiamant-ul {
        list-style: none;
        padding-left: 0;
    }

    .PcDiamant-ul li {
        transition: transform 0.3s ease-in-out;
        /* Add transition for smooth effect */
    }

    .PcDiamant-ul li:hover {
        transform: scale(1.1);
        background-color: rgb(223, 223, 223);
        /* Apply the "touch light" effect on hover */
    }




    @media (min-width: 320px) {

        .custom-btn {
            margin-top: 1%
        }

        .custom-col {
            /* Three columns on larger screens */
            width: 50%;
        }

        .custom-col-1 {
            min-width: 100%;
        }

        ul>li {
            min-width: 45%;
        }

        #carouselExampleControls {
            display: none;
        }



    }

    @media (min-width: 599px) {

        #carouselExampleControls {
            display: block;
        }
    }

    /* Default styles for the image */


    @media (min-width: 280px) {

    ul>li {
         min-width: 45%;
    }
}

    @media (min-width: 600px) {
        ul>li {
            min-width: 30%;
        }
        #carouselExampleControl {
            display: none;
        }

    }



    /* Define the styles for the button */
    .custom-btn {
        position: relative;
        overflow: hidden;
        border: none;
        padding: 10px;
        font-size: 15px;
        cursor: pointer;
        background: linear-gradient(45deg, #3a89eb, #bd0394);
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: bold;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        transition: box-shadow 0.3s ease;
    }

    /* Add the neon light effect on hover */
    .custom-btn:hover {
        box-shadow: 0 0 20px rgba(14, 221, 248, 0.8);
    }



    /* Define the styles for the input fields */
    .animated-input {
        border: 2px solid #ccc;
        padding: 10px;
        transition: transform 0.3s ease;
    }

    /* Add the animation effect on hover */
    .animated-input:hover {
        transform: scale(1.1);
        /* Change the scale value to adjust the animation effect */
    }

    /* Define the keyframes animation */
    @keyframes inputHoverEffect {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-5px);
        }

        100% {
            transform: translateY(0);
        }
    }

    /* Apply the keyframes animation on hover */
    .animated-input:hover {
        animation: inputHoverEffect 0.3s ease;
    }

    .card {
        border-radius: 32px 33px 33px 30px;
        -webkit-border-radius: 32px 33px 33px 30px;
        -moz-border-radius: 32px 33px 33px 30px;



        background: #bd0394;
        /* Fallback color if gradients are not supported */
        background: linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        background: -webkit-linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        /* For Safari and Chrome */
        background: -moz-linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        /* For Firefox */
        font-family: "Times New Roman", Times, serif;
    }



    .btn-lg {
        position: relative;
        overflow: hidden;
        border: none;
        padding: 10px;
        font-size: 15px;
        cursor: pointer;
        background: linear-gradient(45deg, #3a89eb, #bd0394);
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: bold;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        transition: box-shadow 0.3s ease;
    }

    /* Add the neon light effect on hover */
    .btn-lg:hover {
        box-shadow: 0 0 20px rgba(14, 221, 248, 0.8);
    }

    /* Default styles for both images */
.navbar-brand img {
    width: 20%;
}

/* Media query for screens 345px or less */
@media (width: 345px) {
    /* Hide the second image */
    .navbar-brand img:nth-of-type(2) {
        display: none;
    }

    /* Show the first image */
    .navbar-brand img:first-of-type {
        display: inline-block;
    }
}


</style>

<body>
    <!-- Nav start -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #103a5a">
        <div class="container-fluid">
            <a class="navbar-brand custom-font col" href="#">
                <img style="width: 20%" src="{{ asset('frontend/photo/m2nseven.png') }}" alt=""
                    class="m-1">M2NSEVEN
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active custom-font" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-font" href="#">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-font" href="#">Buy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-font" href="#">Reseller</a>
                    </li>
                </ul>
                {{-- <form class="d-flex">
                    <input class="form-control me-2 custom-font" type="search" placeholder="Search"
                        aria-label="Search" />
                    <button class="btn btn-outline-primary custom-font" type="submit">Search</button>
                </form> --}}
                <a class="nav-link text-white btn btn-primary mx-3 custom-login" href="{{ url('login') }}">Login</a>
            </div>
        </div>
    </nav>

    <!-- Nav End -->

    <!-- slide -->
    <div class="container mt-5">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('frontend/photo/Artboard banner.jpg') }}"
                        class="custom-png d-block w-100 rounded-images img-fluid" alt="..." style="height: 35vh;">
                </div>
            </div>
        </div>

        <div id="carouselExampleControl" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('frontend/photo/mlbb-profile-crop.jpg') }}"
                        class="custom-png d-block w-100 rounded-images img-fluid" alt="..." style="height: 40vh;">
                </div>
            </div>
        </div>
    </div>

    <!-- slide End -->

    <!--Trand Card -->



    <div class="container mt-3">
        <div class="d-flex justify-content-center">
            <form class="col-md-10" id="creditForm" action="{{ route('submit-form') }}" method="post">
                @csrf <!-- Add this line to include CSRF token in your form -->
                <div class="card" style="background-color: #162858">
                    <div class="custom-font card-header text-center text-white " style="font-size: 150%">
                        Buy Credit
                    </div>


                    <div class="card-body my-2">
                        <h2 class="text-white">Enter Your Id</h2>
                        <div class="row">
                            <form action="" class=" ">

                                <div class="col">
                                    <label for="credit_amount" class="custom-font col-form-label text-white">User
                                        Id</label>
                                    <input type="text" class="custom-font form-control animated-input" id="credit_amount"
                                        value="{{ old('user_id') }}" name="user_id" style="border-radius: 20px" required/>
                                </div>
                                <div class="col">
                                    <label for="kyats" class="custom-font col-form-label text-white">Zone
                                        ID</label>
                                    <input type="text" class="custom-font form-control animated-input" id="kyats"
                                        name="zone_id" value="{{ old('zone_id') }}" style="border-radius: 20px" required />
                                </div>
                                <div class="col-md-5 flex  align-content-end " style="margin-top: 35px;">
                                    <button type="submit" class="btn btn-outline-primary custom-btn"
                                        onclick="submitForm()">
                                        Submit
                                    </button>
                                </div>

                                @if (isset($response))
                                    <div class="col-md-12 mt-3">
                                        <p class="text-success">User Name - {{ $response->username }} | Zone -
                                            {{ $response->zone }} | Price - {{ $response->change_price }}</p>
                                    </div>
                                @else
                                    {{-- <div class="col-md-12 mt-3 text-danger">
                                        <p>Response is undefined.</p>
                                    </div> --}}
                                @endif
                            </form>

                            <form id="orderForm" action="{{ route('order-form') }}" method="post" class="col-md-12">
                                @csrf
                                <div class="mt-4">
                                    <h2 class="text-white">Select Amount</h2>
                                    <input  type="text" id="selectedData" name="productName"
                                        class="col-md-4 animated-input" style="border-radius: 20px" required>
                                    <input type="text" id="productid" name="productid" class="form-control" required
                                        style="display: none">
                                    @if (isset($userid))
                                        <input type="text" id="userid" name="userid" class="form-control"
                                            value="{{ $userid }}" required style="display: none">
                                        <input type="text" id="zoneid" name="zoneid" class="form-control"
                                            value="{{ $zoneid }}" required style="display: none"> @endif


    <div class="
        mt-5">
    <ul class="PcDiamant-ul commonDiamant-ul d-flex  align-items-center   justify-content-around  flex-wrap ">
        <li class="custom-col" ga-data="1726" id="16642" style="width: 30%">
            <div ga-data="1726" style="font-size: 60%">
                <div ga-data="1726">

                    Weekely Pass
                    <img style="width: 20%;margin-left: 20%;" src="{{ asset('frontend/photo/m2nseven.png') }}"
                        alt="">
                </div>
                {{-- <em ga-data="1726">
                </em> --}}
                {{-- <em style="" class="PcliFo-em2" ga-data="1726">
                </em> --}}
            </div>
            <span ga-data="1726">
                <p class="custom-font" style="font-size: 13px"><strong style="color: rgb(51, 153, 153);" ga-data="1726">
                        R$ 6,40</strong>
                </p>

            </span>
        </li>

        <li class="custom-col" style="width: 30%" ga-data="1702" id="13">
            <span ga-data="1702" style="font-size: 100%">
                <em ga-data="1702">
                    R$ 5,00 </em>
                <em class="mx-5" ga-data="1702"> <img style="width: 20%"
                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                </em>
            </span>
            <span ga-data="1702">
                <div style="font-weight: 400;" ga-data="1702">
                    <p class="custom-font" style="font-size:13px;"><strong style="color: rgb(51, 153, 153);">Diamond×78
                        </strong><strong style="color: rgb(255, 0, 0);">+8</strong></p>
                </div>
            </span>
            <div class="Pcright-icon commonright-icon" ga-data="1702" style="display: block;"></div>
        </li>

        <li class="custom-col" style="width: 30%" ga-data="1703" id="23">
            <span ga-data="1703" style="font-size: 100%">
                <em ga-data="1703">
                    R$ 10,00 </em>
                <em ga-data="1703">
                </em>
                <em class="PcliFo-em2 mx-5" ga-data="1702"> <img style="width: 20%"
                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                </em>
            </span>
            <span ga-data="1703">
                <div style="font-weight: 400;" ga-data="1703">
                    <p class="custom-font" style="font-size: 13px"><strong
                            style="color: rgb(51, 153, 153);">Diamond×156</strong><strong
                            style="color: rgb(255, 0, 0);">+16</strong></p>
                </div>
            </span>
            <div class="Pcright-icon commonright-icon" ga-data="1703"></div>
        </li>

        <li style="width: 30%" class="custom-col" ga-data="1704" id="25">
            <span ga-data="1704" style="font-size: 100%">
                <em ga-data="1704">
                    R$ 15,00 </em>
                <em ga-data="1704">
                </em>
                <em class="PcliFo-em2 mx-5" ga-data="1704"> <img style="width: 20%"
                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                </em>
            </span>
            <span ga-data="1704">
                <div style="font-weight: 400;" ga-data="1704">
                    <p class="custom-font" style="font-size: 13px"><strong
                            style="color: rgb(51, 153, 153);">Diamond×234</strong><strong
                            style="color: rgb(255, 0, 0);">+23</strong></p>
                </div>
            </span>
            <div class="Pcright-icon commonright-icon" ga-data="1704" style="display: none;">
            </div>
        </li>

        <li style="width: 30%" class="custom-col" ga-data="1704" id="25">
            <span ga-data="1704" style="font-size: 100%">
                <em ga-data="1704">
                    R$15+R$10 </em>
                <em ga-data="1704">
                </em>
                <em class="PcliFo-em2 mx-5" ga-data="1704"> <img style="width: 20%"
                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                </em>
            </span>
            <span ga-data="1704">
                <div style="font-weight: 400;" ga-data="1704">
                    <p class="custom-font" style="font-size: 13px"><strong
                            style="color: rgb(51, 153, 153);">Diamond×343</strong><strong
                            style="color: rgb(255, 0, 0);"></strong></p>
                </div>
            </span>
            <div class="Pcright-icon commonright-icon" ga-data="1704" style="display: none;">
            </div>
        </li>

        <li style="width: 30%" class="custom-col" ga-data="1704" id="25">
            <span ga-data="1704" style="font-size: 100%">
                <em ga-data="1704">
                    R$15*2 </em>
                <em ga-data="1704">
                </em>
                <em class="PcliFo-em2 mx-5" ga-data="1704"> <img style="width: 20%"
                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                </em>
            </span>
            <span ga-data="1704">
                <div style="font-weight: 400;" ga-data="1704">
                    <p class="custom-font" style="font-size: 13px"><strong
                            style="color: rgb(51, 153, 153);">Diamond×514</strong><strong
                            style="color: rgb(255, 0, 0);"></strong></p>
                </div>
            </span>
            <div class="Pcright-icon commonright-icon" ga-data="1704" style="display: none;">
            </div>
        </li>

        <li style="width: 30%" class="custom-col" ga-data="1705" id="26">
            <span ga-data="1705" style="font-size: 100%">
                <em ga-data="1705">
                    R$ 40,00 </em>
                <em ga-data="1705">
                </em>
                <em class="PcliFo-em2 mx-5" ga-data="1702"> <img style="width: 20%"
                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                </em>
            </span>
            <span ga-data="1705">
                <div style="font-weight: 400;" ga-data="1705">
                    <p class="custom-font" style="font-size: 13px"><strong
                            style="color: rgb(51, 153, 153);">Diamond×625</strong><strong
                            style="color: rgb(255, 0, 0);">+81</strong></p>
                </div>
            </span>
            <div class="Pcright-icon commonright-icon" ga-data="1705">
            </div>
        </li>

        <li style="width: 30%" class="custom-col" ga-data="1705" id="26">
            <span ga-data="1705" style="font-size: 100%">
                <em ga-data="1705">
                    R$40+R$15+R$5 </em>
                <em ga-data="1705">
                </em>
                <em class="PcliFo-em2 mx-5" ga-data="1702"> <img style="width: 20%"
                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                </em>
            </span>
            <span ga-data="1705">
                <div style="font-weight: 400;" ga-data="1705">
                    <p class="custom-font" style="font-size: 13px"><strong
                            style="color: rgb(51, 153, 153);">Diamond×1049</strong><strong
                            style="color: rgb(255, 0, 0);"></strong></p>
                </div>
            </span>
            <div class="Pcright-icon commonright-icon" ga-data="1705">
            </div>
        </li>

        <li style="width: 30%" class="custom-col" ga-data="1706" id="27">
            <span ga-data="1706" style="font-size: 100%">
                <em ga-data="1706">
                    R$ 120,00 </em>
                <em ga-data="1706">
                </em>
                <em class="PcliFo-em2 mx-5" ga-data="1706"> <img style="width: 20%"
                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                </em>
            </span>
            <span ga-data="1706">
                <div style="font-weight: 400;" ga-data="1706">
                    <p class="custom-font" style="font-size: 13px"><strong
                            style="color: rgb(51, 153, 153);">Diamond×1860</strong><strong
                            style="color: rgb(255, 0, 0);">+335</strong>
                    </p>
                </div>
            </span>
            <div class="Pcright-icon commonright-icon" ga-data="1706">
            </div>
        </li>

        <li style="width: 30%" class="fr fs" ga-data="1707" id="28">
            <span ga-data="1707" style="font-size: 100%">
                <em ga-data="1707">
                    R$ 200,00 </em>
                <em ga-data="1707">
                </em>
                <em class="PcliFo-em2 mx-5" ga-data="1707"> <img style="width: 20%"
                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                </em>
            </span>
            <span ga-data="1707">
                <div style="font-weight: 400;" ga-data="1707">
                    <p style="font-size: 13px"><strong style="color: rgb(51, 153, 153);">Diamond×3099</strong><strong
                            style="color: rgb(255, 0, 0);">+589</strong>
                    </p>
                </div>
            </span>
            <div class="Pcright-icon commonright-icon" ga-data="1707">
            </div>
        </li>

        <li style="width: 30%" class="fr fs" ga-data="1708" id="29">
            <span ga-data="1708" style="font-size: 100%">
                <em ga-data="1708">
                    R$ 300,00 </em>
                <em ga-data="1708">
                </em>
                <em class="PcliFo-em2 mx-5" ga-data="1708"> <img style="width: 20%"
                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                </em>
            </span>
            <span ga-data="1708">
                <div style="font-weight: 400;" ga-data="1708">
                    <p style="font-size: 13px"><strong style="color: rgb(51, 153, 153);">Diamond×4649</strong><strong
                            style="color: rgb(255, 0, 0);">+883</strong>
                    </p>
                </div>
            </span>
            <div class="Pcright-icon commonright-icon" ga-data="1708">
            </div>
        </li>

        <li style="width: 30%" class="fr fs" ga-data="1709" id="30">
            <span ga-data="1709" style="font-size: 100%">
                <em ga-data="1709">
                    R$ 500,00 </em>
                <em ga-data="1709">
                </em>
                <em class="PcliFo-em2 mx-5" ga-data="1709"> <img style="width: 20%"
                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                </em>
            </span>
            <span ga-data="1709">
                <div style="font-weight: 400;" ga-data="1709">
                    <p style="font-size: 13px"><strong style="color: rgb(51, 153, 153);">Diamond×7740</strong><strong
                            style="color: rgb(255, 0, 0);">+1548</strong>
                    </p>
                </div>
            </span>
            <div class="Pcright-icon commonright-icon" ga-data="1709">
            </div>
        </li>

        <li style="width: 30%" class="fr fs" ga-data="1712" id="33">
            <span ga-data="1712" style="font-size: 100%">
                <em ga-data="1712">
                    R$ 33,00 </em>
                <em ga-data="1712">
                </em>
                <em class="PcliFo-em2 mx-5" ga-data="1712"> <img style="width: 20%"
                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                </em>
            </span>
            <span ga-data="1712">
                <div style="font-weight: 400;" ga-data="1712">
                    <p style="font-size: 13px"><strong style="color: rgb(51, 153, 153);">Passagem do
                            crepúsculo</strong>
                    </p>
                </div>
            </span>
            <div class="Pcright-icon commonright-icon" ga-data="1712">
            </div>
        </li>
    </ul>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-outline-primary btn-lg">Submit</button>
    </div>

    </div>
    </form>
    </div>
    </div>
    </div>
    </form>
    </div>

    {{-- <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; SSE Web Solutions</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer> --}}
    </div>

    <!-- Trand Card End-->
    <!-- Footer -->
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="container-fluid mt-5">

        <!-- Footer -->
        <footer class="text-center text-lg-start text-dark" style="background-color: #1c2331">
            <!-- Section: Social media -->
            {{-- <section class="d-flex justify-content-between p-4" style="background-color: #F8930D">
                <!-- Left -->
                <div class="me-5">
                    <span>Get connected with us on social networks:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <!-- Right -->
            </section> --}}
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        {{-- <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold">Company name</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>

                            </p>
                        </div> --}}
                        <!-- Grid column -->

                        <!-- Grid column -->
                        {{-- <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Products</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>
                                <a href="#!" class="text-white">MDBootstrap</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">MDWordPress</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">BrandFlow</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Bootstrap Angular</a>
                            </p>
                        </div> --}}
                        <!-- Grid column -->

                        <!-- Grid column -->
                        {{-- <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Useful links</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>
                                <a href="#!" class="text-white">Your Account</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Become an Affiliate</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Shipping Rates</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Help</a>
                            </p>
                        </div> --}}
                        <!-- Grid column -->

                        <!-- Grid column -->
                        {{-- <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Contact</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                            <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                        </div> --}}
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: #F8930D">
                © 2020 Copyright:
                <a class="text-dark" href="https://mdbootstrap.com/">MLBB</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->

    </div>
    <!-- End of .container -->

    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    </body>

</html>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function submitForm() {
        var formData = $('#creditForm').serialize();
        $.ajax({
            type: 'POST',
            url: "{{ route('submit-form') }}", // Use the same route as in the form action
            data: formData,
            success: function(response) {
                // Display the response data where you want
                console.log(response);
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    // jQuery code to handle the click event on list items
    $(document).ready(function() {

        $('.PcDiamant-ul li').click(function() {

            //alert("as" + $(this).val());

            // Get the text content of the clicked li
            var selectedText = $(this).text().trim();
            var productid = $(this).val();


            // Update the input with the selected text
            $('#selectedData').val(selectedText);
            $('#productid').val(productid);
        });
    });
</script>
