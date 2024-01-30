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
        background: #BD0394;
        /* Fallback color if gradients are not supported */
        background: linear-gradient(295deg, #BD0394 0%, #3A89EB 80%);
        background: -webkit-linear-gradient(295deg, #BD0394 0%, #3A89EB 80%);
        /* For Safari and Chrome */
        background: -moz-linear-gradient(295deg, #BD0394 0%, #3A89EB 80%);
        /* For Firefox */
        font-family: 'Nexa', sans-serif; /* Specify the font family */
  font-weight: 800;
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
        background: linear-gradient(45deg, #BD0394, #3A89EB);
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
        background-color: #F8F9FA;
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
    /* Define the styles for the button */
    .custom-btn {
        position: relative;
        overflow: hidden;
        border: none;
        padding: 10px;
        font-size: 15px;
        cursor: pointer;
        background: linear-gradient(45deg, #3A89EB, #BD0394);
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
        background: #BD0394;
        /* Fallback color if gradients are not supported */
        background: linear-gradient(295deg, #BD0394 0%, #3A89EB 80%);
        background: -webkit-linear-gradient(295deg, #BD0394 0%, #3A89EB 80%);
        /* For Safari and Chrome */
        background: -moz-linear-gradient(295deg, #BD0394 0%, #3A89EB 80%);
        /* For Firefox */
        font-family: 'Nexa', sans-serif; /* Specify the font family */
  font-weight: 800;
    }
    .btn-lg {
        position: relative;
        overflow: hidden;
        border: none;
        padding: 10px;
        font-size: 15px;
        cursor: pointer;
        background: linear-gradient(45deg, #3A89EB, #BD0394);
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
@media (min-width: 1500px) {
.custom-col {
    /* Three columns on larger screens */
    width: 50%;
    min-height: 130px;
    margin-top: 5px;
}
}
@media (min-width: 2000px) {
.custom-col {
    /* Three columns on larger screens */
    width: 50%;
    min-height: 180px;
    margin-top: 5px;
}
}
@media (width: 2560px) {
.custom-col {
    /* Three columns on larger screens */
    width: 50%;
    min-height: 200px;
    margin-top: 5px;
}
}
</style>


<body>
    <!-- Nav start -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #103a5a">
        <div class="container-fluid">
            <a class="navbar-brand custom-font col" href="#" style="background: linear-gradient(45deg, #bd0394, #3a89eb); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                <img style="width: 25%;" src="{{ asset('frontend/photo/m2nseven.png') }}" alt=""
                    class="m-1">M2NSEVEN
            </a>

            <a class="nav-link text-white btn btn-primary mx-3 custom-login" href="{{ url('login') }}">Login</a>
        </div>
    </nav>

    <!-- Nav End -->

    <!-- slide -->
    <div class="container mt-5">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('frontend/photo/Artboard banner.jpg') }}"
                        class="custom-png d-block w-100 rounded-images img-fluid" alt="...">
                </div>
            </div>
        </div>

        <div id="carouselExampleControl" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('frontend/photo/m2n-mobile.jpg') }}"
                        class="custom-png d-block w-100 rounded-images img-fluid" alt="..." style="height: 30vh;">
                </div>
            </div>
        </div>
    </div>

    <!-- slide End -->

    <!--Trand Card -->



    <div class="container-fluid mt-3">
        <div class="d-flex justify-content-center">
            <form class="col-md-8" id="creditForm" action="{{ route('purchase') }}" method="post">
                @csrf <!-- Add this line to include CSRF token in your form -->
                <div class="card" style="background-color: #162858">
                    <div class="custom-font card-header text-center text-white " style="font-size: 150%">
                        Buy Credit
                    </div>


                    <div class="card-body my-2">
                        <h2 class="text-white">Enter Your Id</h2>
                        <div class="row">
                            <form action="">
                                <div class="col">
                                    <label for="credit_amount"
                                        class="custom-font col-form-label text-white">User
                                        Id</label>
                                    <input type="text" class="custom-font form-control animated-input"
                                        id="credit_amount" value="{{ old('user_id') }}" name="user_id"
                                        style="border-radius: 20px" required />
                                </div>
                                <div class="col">
                                    <label for="kyats" class="custom-font col-form-label text-white">Zone
                                        ID</label>
                                    <input type="text" class="custom-font form-control animated-input"
                                        id="kyats" name="zone_id" value="{{ old('zone_id') }}"
                                        style="border-radius: 20px" onkeyup="submitForm()" required />
                                </div>
                                <div class="col-md-5">

                                </div>
                                <div class="col-md-12 mt-3">
                                    <span class="text-white" id="zarni" name="username"> </span>&nbsp;<span
                                        id="iconContainer"></span>
                                </div>
                                @if (isset($response))
                                    <?php
                                    ?>
                                    <div class="col-md-12 mt-3" id="">
                                        <p class="text-success">User Name - {{ $response->username }} | Zone -
                                            {{ $response->zone }} | Price - {{ $response->change_price }}</p>
                                    </div>
                                @else

                                @endif
                            </form>

                            <p id="totalshow" class="col-md-4 text-white"></p>
                            <div id="buttonContainer" class="row"></div>
                            <input type="text" name="total" id="total" style="display: none" >


                            <form id="orderForm" action="{{ route('order-form') }}" method="post"
                                class="col-md-12">
                                @csrf
                                <div class="mt-4">
                                    <h2 class="text-white">Select Package</h2>
                                    {{-- <div id="buttonContainer"></div>
                                    <input type="text" id="inputBox" readonly> --}}

{{-- <input type="text" id="inputBox" readonly> --}}
{{-- <div id="weeklypass"></div> --}}
                                    <input type="text" id="productid" name="productid"
                                        class="form-control  mt-3" required style="display: none">

                                    <input type="text" id="productid" name="productid" class="form-control"
                                        required style="display: none">
                                    @if (isset($userid))
                                        <input type="text" id="userid" name="userid"
                                            class="form-control" value="{{ $userid }}" required
                                            style="display: none">
                                        <input type="text" id="zoneid" name="zoneid"
                                            class="form-control" value="{{ $zoneid }}" required
                                            style="display: none"> @endif


                                    <div class="
        mt-5">
    <ul class="PcDiamant-ul commonDiamant-ul d-flex  align-items-center   justify-content-around  flex-wrap ">

        <li class="custom-col" style="width: 30%;height:100px" ga-data="1726" id="16642">
            <span ga-data="1726">
                <em class="" ga-data="1726"> <img style="width: 20%"
                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                </em>
                <em ga-data="1726" style="font-size: 80%" id="1" id="itemPrice">

                    KS 5,800
                </em>


            </span>
            <span ga-data="1726">
                <div style="font-weight: 400;" ga-data="1726">
                    <p type="button" id="button1"><span
                            style="color: rgb(51, 153, 153);font-size:13px">WeekelyPass</span>
                    </p>

                </div>
            </span>
            <div class="Pcright-icon commonright-icon" ga-data="1702" style="display: block;"></div>
        </li>



        <li class="custom-col" style="width: 30%;height:100px" ga-data="1702" id="13">
            <span ga-data="1702">
                <em class="" ga-data="1702"> <img style="width: 20%"
                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                </em>
                <em ga-data="1726" style="font-size: 80%" id="2" id="itemPrice">

                    KS 4,700
                </em>


            </span>
            <span ga-data="1702">
                <div style="font-weight: 400;" ga-data="1702">
                    <p type="button" id="button1"><span
                            style="color: rgb(51, 153, 153);font-size:13px">Diamond×86</span>
                    </p>
                    {{-- <p class="custom-font" style="font-size:13px;"><strong style="color: rgb(51, 153, 153);">Diamond×86
                </strong><strong style="color: rgb(255, 0, 0);">+8</strong></p> --}}
                </div>
            </span>
            <div class="Pcright-icon commonright-icon" ga-data="1702" style="display: block;"></div>
        </li>

        <li class="custom-col" style="width: 30%;height:100px" ga-data="1703" id="23">
            <span ga-data="1703">
                <em class="" ga-data="1703"> <img style="width: 20%"
                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                </em>
                <em ga-data="1703" style="font-size: 80%" id="3">
                    KS 9,400</em>
                <em ga-data="1703">
                </em>

            </span>
            <span ga-data="1703">
                <div style="font-weight: 400;" ga-data="1703">

                    <p type="button" id="button1"><span
                            style="color: rgb(51, 153, 153);font-size:13px">Diamond×172</span>
                    </p>
                    {{-- <p class="custom-font" style="font-size: 13px"><strong style="color: rgb(51, 153, 153);"
                    id="button1">Diamond×172</strong><strong style="color: rgb(255, 0, 0);">+16</strong></p> --}}
                </div>
            </span>
            <div class="Pcright-icon commonright-icon" ga-data="1703"></div>
        </li>

        <li style="width: 30%;height:100px" class="custom-col" ga-data="1704" id="25">
            <span ga-data="1704">
                <em class="" ga-data="1704"> <img style="width: 20%"
                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                </em>
                <em ga-data="1704" style="font-size: 80%" id="4">
                    KS 14,000</em>
                <em ga-data="1704">
                </em>

            </span>
            <span ga-data="1704">
                <div style="font-weight: 400;" ga-data="1704">
                    <p type="button" id="button1"><span
                            style="color: rgb(51, 153, 153);font-size:13px">Diamond×257</span>
                    </p>

                </div>
            </span>
            <div class="Pcright-icon commonright-icon" ga-data="1704" style="display: none;">
            </div>
        </li>



        <li style="width: 30%;height:100px" class="custom-col" ga-data="1705" id="26">
            <span ga-data="1705">
                <em class="PcliFo-em2" ga-data="1702"> <img style="width: 20%"
                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                </em>
                <em ga-data="1705" style="font-size: 80%" id="5">
                    KS 37,500</em>
                <em ga-data="1705">
                </em>

            </span>
            <span ga-data="1705">
                <div style="font-weight: 400;" ga-data="1705">
                    <p type="button" id="button1"><span
                            style="color: rgb(51, 153, 153);font-size:13px">Diamond×706</span>
                    </p>

                </div>
            </span>
            <div class="Pcright-icon commonright-icon" ga-data="1705">
            </div>
        </li>



        <li style="width: 30%;height:100px" class="custom-col" ga-data="1706" id="27">
            <span ga-data="1706">
                <em class="PcliFo-em2" ga-data="1706"> <img style="width: 20%"
                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                </em>
                <em ga-data="1706" style="font-size: 80%" id="6">
                    KS 113,000</em>
                <em ga-data="1706">
                </em>

            </span>
            <span ga-data="1706">
                <div style="font-weight: 400;" ga-data="1706">
                    <p type="button" id="button1"><span
                            style="color: rgb(51, 153, 153);font-size:13px">Diamond×2195</span>
                    </p>

                </div>
            </span>
            <div class="Pcright-icon commonright-icon" ga-data="1706">
            </div>
        </li>

        <li style="width: 30%;height:100px" class="custom-col" ga-data="1706" id="28">
            <span ga-data="1706">
                <em class="PcliFo-em2" ga-data="1706"> <img style="width: 20%"
                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                </em>
                <em ga-data="1706" style="font-size: 80%" id="7">
                    KS 188,000</em>
                <em ga-data="1706">
                </em>

            </span>
            <span ga-data="1706">
                <div style="font-weight: 400;" ga-data="1706">
                    <p type="button" id="button1"><span
                            style="color: rgb(51, 153, 153);font-size:13px">Diamond×3688</span>
                    </p>

                </div>
            </span>
            <div class="Pcright-icon commonright-icon" ga-data="1706">
            </div>
        </li>

        <li style="width: 30%;height:100px" class="custom-col" ga-data="1706" id="29">
            <span ga-data="1706">
                <em class="PcliFo-em2" ga-data="1706"> <img style="width: 20%"
                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                </em>
                <em ga-data="1706" style="font-size: 80%" id="8">
                    KS 299,500</em>
                <em ga-data="1706">
                </em>

            </span>
            <span ga-data="1706">
                <div style="font-weight: 400;" ga-data="1706">
                    <p type="button" id="button1"><span
                            style="color: rgb(51, 153, 153);font-size:13px">Diamond×5532</span>
                    </p>

                </div>
            </span>
            <div class="Pcright-icon commonright-icon" ga-data="1706">
            </div>
        </li>


        <li style="width: 30%;height:100px" class="custom-col" ga-data="1706" id="30">
            <span ga-data="1706">
                <em class="PcliFo-em2" ga-data="1706"> <img style="width: 20%"
                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                </em>
                <em ga-data="1706" style="font-size: 80%" id="9">
                    KS 469,000</em>
                <em ga-data="1706">
                </em>

            </span>
            <span ga-data="1706">
                <div style="font-weight: 400;" ga-data="1706">
                    <p type="button" id="button1"><span
                            style="color: rgb(51, 153, 153);font-size:13px">Diamond×9288</span>
                    </p>

                </div>
            </span>
            <div class="Pcright-icon commonright-icon" ga-data="1706">
            </div>
        </li>
    </ul>
    </div>


    </div>
    </form>
    <div class="text-center">
        <button type="submit" class="btn btn-outline-primary btn-lg">Submit</button>
    </div>
    </div>
    </div>
    </div>
    </form>
    </div>


    </div>







    </body>

</html>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
    integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function submitForm() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var formData = $('#creditForm').serialize();

        $.ajax({
            type: 'POST',
            url: "{{ route('user-submit-forms') }}",
            data: formData,
            success: function(response) {
                // var textContent = response.username;
                $('#zarni').text("UserName - " + response.username);
                console.log(response);
                if (response.zone === 1) {
                    if (response.change_price === 1.25) {
                        // Assuming response.zone is 1, we add the icon to the container
                        const iconContainer = document.getElementById('iconContainer');
                        const package1 = document.getElementById('1');
                        const package2 = document.getElementById('2');
                        const package3 = document.getElementById('3');
                        const package4 = document.getElementById('4');
                        const package5 = document.getElementById('5');
                        const package6 = document.getElementById('6');
                        const package7 = document.getElementById('7');
                        const package8 = document.getElementById('8');
                        const package9 = document.getElementById('9');


                        if (iconContainer) {
                            iconContainer.innerHTML =
                                '<img src="{{ asset('frontend/photo/global.png') }}" alt="Flag" style="width: 30px;">';
                            package1.innerHTML = 'KS 5,800';
                            package2.innerHTML = 'KS 4,700';
                            package3.innerHTML = 'KS 9,400';
                            package4.innerHTML = 'KS 14,000';
                            package5.innerHTML = 'KS 37,500';
                            package6.innerHTML = 'KS 113,000';
                            package7.innerHTML = 'KS 188,000';
                            package8.innerHTML = 'KS 299,500';
                            package9.innerHTML = 'KS 469,000';

                        }


                    }
                    if (response.change_price === 1.3) {
                        const iconContainer = document.getElementById('iconContainer');
                        const package1 = document.getElementById('1');
                        const package2 = document.getElementById('2');
                        const package3 = document.getElementById('3');
                        const package4 = document.getElementById('4');
                        const package5 = document.getElementById('5');
                        const package6 = document.getElementById('6');
                        const package7 = document.getElementById('7');
                        const package8 = document.getElementById('8');
                        const package9 = document.getElementById('9');
                        if (iconContainer) {
                            iconContainer.innerHTML =
                                '<img src="{{ asset('frontend/photo/indo.png') }}" alt="Flag" style="width: 20px;">';
                            package1.innerHTML = 'KS 7,100';
                            package2.innerHTML = 'KS 5,900';
                            package3.innerHTML = 'KS 11,300';
                            package4.innerHTML = 'KS 16,600';
                            package5.innerHTML = 'KS 43,750';
                            package6.innerHTML = 'KS 131,700';
                            package7.innerHTML = 'KS 219,000';
                            package8.innerHTML = 'KS 348,600';
                            package9.innerHTML = 'KS 546,200';
                        }


                    }
                }
                if (response.zone === 0) {
                    const iconContainer = document.getElementById('iconContainer');
                    const package1 = document.getElementById('1');
                    const package2 = document.getElementById('2');
                    const package3 = document.getElementById('3');
                    const package4 = document.getElementById('4');
                    const package5 = document.getElementById('5');
                    const package6 = document.getElementById('6');
                    const package7 = document.getElementById('7');
                    const package8 = document.getElementById('8');
                    const package9 = document.getElementById('9');
                    if (iconContainer) {
                        iconContainer.innerHTML =
                            '<img src="{{ asset('frontend/photo/brazil.png') }}" alt="Flag" style="width: 30px;">';;
                        package1.innerHTML = 'KS 4,600';
                        package2.innerHTML = 'KS 3,800';
                        package3.innerHTML = 'KS 7,500';
                        package4.innerHTML = 'KS 11,000';
                        package5.innerHTML = 'KS 29,700';
                        package6.innerHTML = 'KS 89,700';
                        package7.innerHTML = 'KS 149,200';
                        package8.innerHTML = 'KS 238,200';
                        package9.innerHTML = 'KS 376,600';
                    }
                }


                // $('#zarni').text(textContent);
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>

{{-- main code --}}
{{-- <script>
    $(document).ready(function() {
        var selectedOptions = [];
        var clickCounter = 0;
        var maxClicks = 4;

        $(".custom-col").click(function() {
            if (clickCounter < maxClicks) {
                var buttonText = $(this).find("span div p span").text();



                var itemPrice = parseInt($(this).find(
                        "span em#1,em#2,em#3,em#4,em#5,em#6,em#7,em#8,em#9").text()
                    .replace("KS ",
                        "").replace(",", ""));




                var cs = selectedOptions.length + 1;
                selectedOptions.push({
                    index: cs,
                    text: buttonText,
                    price: itemPrice
                });


                updateInputBox();


                var button = $("<button>").text(buttonText).addClass("btn btn-primary btn-sm mx-2 mt-1")
                    .css(
                        "background-color",
                        "#5969D6");


                var cancelIcon = $("<i>").addClass("fa-solid fa-delete-left mx-2");
                button.append(cancelIcon);

                $("#buttonContainer").append(button);


                cancelIcon.click(function() {
                    var index = $(this).parent().index();
                    selectedOptions.splice(index, 1);
                    $(this).parent().remove();
                    updateInputBox();
                    clickCounter--;
                    calculateTotal();
                });

                clickCounter++;
                calculateTotal();
            }
        });


        function calculateTotal() {
            var total = 0;
            for (var i = 0; i < selectedOptions.length; i++) {
                total += selectedOptions[i].price;
            }
            var formattedTotal = total.toLocaleString();
            $("#totalshow").text("Total - " + formattedTotal + " Ks");
        }


        function updateInputBox() {
            var dataToShow = selectedOptions.map(option => option.index + ". " + option.text).join("\n");
            $("#inputBox").val(dataToShow);
        }
    });
</script> --}}

{{-- main code --}}





<script>
    $(document).ready(function() {
        var selectedOptions = [];
        var clickCounter = 0;
        var maxClicks = 4;
        var i = 0;
        $(".custom-col").click(function() {
            if (clickCounter < maxClicks) {
                var buttonText = $(this).find("span div p span").text();
                var itemPrice = parseInt($(this).find(
                    "span em#1,em#2,em#3,em#4,em#5,em#6,em#7,em#8,em#9").text().replace("KS ",
                    "").replace(",", ""));

                var cs = selectedOptions.length + 1;
                selectedOptions.push({
                    index: cs,
                    text: buttonText,
                    price: itemPrice
                });

                updateInputBox();
                // Create a container for the input group
                // var inputGroup = $("<div>").addClass("input-group");
                var inputGroup = $("<div>")
                    .addClass("input-group")
                    .css({
                        "width": "250px",

                        // Example: Set width to 300 pixels
                        // Add more CSS properties as needed
                    });
                // Create the input element
                var inputElement = $("<input>").val(buttonText + " - " + itemPrice.toLocaleString() +
                        " Ks")
                    .addClass("btn-sm disabled mt-2")
                    .attr("name", "package" + i)
                    .prop("readonly", true)
                    .css({
                        "border-color": "#FFFFFF",
                        "font-weight": "bold",
                        "border-radius": "15px", // Set border radius to 15px
                        "background-color": "#843eba" // Set background color to a specific color code
                    }); // Set input as read-only

                // Append the input element to the input group
                inputGroup.append(inputElement);

                // Create the remove button
                var removeButton = $("<i>").addClass("fa-solid fa-xmark red")
                    //  $("<button>")
                    // .addClass("btn btn-sm")
                    // .attr("type", "button")
                    // .html(
                    //     '<i class="fa-solid fa-xmark "style="color:red"></i>'
                    // ).css({
                    //     "border-radius": "15px",
                    //     "background-color": "#FFFFFF",
                    //     "font-size": "12px",

                    // }) // Add the remove icon (Bootstrap 5 icon used here)
                    .on("click", function() {
                        // Handle remove button click event
                        var index = $(this).parent().index();
                        selectedOptions.splice(index, 1);
                        $(this).closest(".input-group").remove();
                        updateInputBox();
                        clickCounter--;
                        calculateTotal();
                        // Add any additional logic here after removing the input group
                    });
                removeButton.css("color", "red");
                // Append the remove button to the input group
                inputGroup.append(removeButton);

                // Append the input group to a target element in the DOM
                $("#buttonContainer").append(inputGroup);

                // var inputElement = $("<input>").val(buttonText + " - " + itemPrice.toLocaleString() +
                //         " Ks")
                //     .addClass("btn btn-primary btn-sm mx-2 mt-1 disabled")
                //     .css("background-color", "#5969D6")
                //     .attr("name", "package" + i);

                // var cancelIcon = $("<i>").addClass("fa-solid fa-delete-left mx-2");
                // inputElement.append(cancelIcon);

                // $("#buttonContainer").append(inputElement);

                // cancelIcon.click(function() {
                //     var index = $(this).parent().index();
                //     selectedOptions.splice(index, 1);
                //     $(this).parent().remove();
                //     updateInputBox();
                //     clickCounter--;
                //     calculateTotal();
                // });

                clickCounter++;
                i++;
                calculateTotal();
            }
        });

        function calculateTotal() {
            var total = 0;
            for (var i = 0; i < selectedOptions.length; i++) {
                total += selectedOptions[i].price;
            }
            var formattedTotal = total.toLocaleString();
            $("#totalshow").text("Total - " + formattedTotal + " Ks");
            $('#total').val(formattedTotal);

        }

        function updateInputBox() {
            var dataToShow = selectedOptions.map(option => option.text + " - " + option.price
                .toLocaleString() +
                " Ks").join("\n");
            $("#inputBox").val(dataToShow);
        }
    });
</script>
