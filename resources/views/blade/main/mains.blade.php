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
        /* font-family: "Times New Roman", Times, serif; */
        font-family: 'Nexa', sans-serif;
        /* Specify the font family */
        font-weight: 800;
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

    @media (min-width: 599px) {

        #carouselExampleControls {
            display: block;
        }
    }
</style>
<div class="container-fluid mt-3">
    <div class="d-flex justify-content-center">
        <form id="creditForm" action="{{ route('submit-form') }}" method="post">
            @csrf <!-- Add this line to include CSRF token in your form -->
            <div class="card" style="background-color: #162858">
                <div class="custom-font card-header text-center text-white " style="font-size: 150%">
                    Buy Credit
                </div>

                <div class="container mt-5">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('frontend/photo/Artboard banner.jpg') }}"
                                    class="custom-png d-block w-100 rounded-images img-fluid" alt="..."
                                    style="height: 35vh;">
                            </div>
                        </div>
                    </div>

                    <div id="carouselExampleControl" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('frontend/photo/m2n-mobile.jpg') }}"
                                    class="custom-png d-block w-100 rounded-images img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card-body my-2">
                    <h2 class="text-white">Enter Your Id</h2>
                    <div class="row">
                        <form action="">

                            <div class="col">
                                <label for="credit_amount" class="custom-font col-form-label text-white">User
                                    Id</label>
                                <input type="text" class="custom-font form-control animated-input" id="credit_amount"
                                    value="{{ old('user_id') }}" name="user_id" style="border-radius: 20px" required />
                            </div>
                            <div class="col">
                                <label for="kyats" class="custom-font col-form-label text-white">Zone
                                    ID</label>
                                <input type="text" class="custom-font form-control animated-input" id="kyats"
                                    name="zone_id" value="{{ old('zone_id') }}" style="border-radius: 20px"
                                    onkeyup="submitForm()" required />
                            </div>
                            <div class="col-md-5">
                                {{-- <button type="submit" class="btn btn-outline-primary custom-btn"
                                    onclick="submitForm()">
                                    Submit
                                </button> --}}
                            </div>
                            <div class="col-md-12 mt-3">

                                <p class="text-success" id="zarni" name="username"> </p>
                            </div>
                            @if (isset($response))
                                <?php //dd($response);
                                ?>
                                <div class="col-md-12 mt-3" id="">
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
                                <input type="text" id="selectedData" name="productName"
                                    class="form-control col-md-3 animated-input" style="border-radius: 20px" required>
                                <input type="text" id="productid" name="productid" class="form-control" required
                                    style="display: none">
                                @if (isset($userid))
                                    <input type="text" id="userid" name="userid" class="form-control"
                                        value="{{ $userid }}" required style="display: none">
                                    <input type="text" id="zoneid" name="zoneid" class="form-control"
                                        value="{{ $zoneid }}" required style="display: none">
                                @endif

                                {{-- <div class="row mt-5">
                                    <div class="col-md-4 custom-col">
                                        <ul class="PcDiamant-ul commonDiamant-ul">
                                            <li class="fr fs" ga-data="1726" id="16642">
                                                <span ga-data="1726" style="font-size: 130%">
                                                    <em ga-data="1726">
                                                        R$ 6,40 </em>
                                                    <em ga-data="1726">
                                                    </em>
                                                    <em class="PcliFo-em2 mx-5" ga-data="1726"> <img style="width: 20%"
                                                            src="{{ asset('frontend/photo/diamond.png') }}"
                                                            alt="">
                                                    </em>
                                                </span>
                                                <span ga-data="1726">

                                                    <p><strong style="color: rgb(51, 153, 153);" ga-data="1726">Passe
                                                            Semanal de
                                                            Diamante</strong>
                                                    </p>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div> --}}
                                <div class=" mt-5">
                                    <ul
                                        class="PcDiamant-ul commonDiamant-ul d-flex  align-items-center   justify-content-around  flex-wrap ">
                                        <li class="custom-col" ga-data="1726" id="16642"
                                            style="width: 30%;height:100px">

                                            <span ga-data="1726">
                                                <em class="" ga-data="1726"> <img style="width: 20%"
                                                        src="{{ asset('frontend/photo/m2nseven.png') }}"
                                                        alt="">
                                                </em>
                                                <em ga-data="1726" style="font-size: 80%">
                                                    KS 5,800
                                                </em>
                                                {{-- <img style="width: 20%;margin-left: 20%;" src="{{ asset('frontend/photo/m2nseven.png') }}"
                                                        alt=""> --}}
                                            </span>

                                            {{-- <em style="" class="PcliFo-em2" ga-data="1726">
                                                </em> --}}

                                            <span ga-data="1726">
                                                <div style="font-weight: 400;" ga-data="1726">
                                                    <p class="custom-font" style="font-size:13px;"><strong
                                                            style="color: rgb(51, 153, 153);">Weekely
                                                            Pass
                                                        </strong>&nbsp; &nbsp; &nbsp;
                                                        &nbsp;&nbsp;&nbsp;<strong
                                                            style="color: rgb(255, 0, 0);"></strong></p>
                                                </div>
                                            </span>
                                            <div class="Pcright-icon commonright-icon" ga-data="1726"
                                                style="display: block;"></div>
                                        </li>

                                        <li class="custom-col" style="width: 30%;height:100px" ga-data="1702"
                                            id="13">
                                            <span ga-data="1702">
                                                <em class="" ga-data="1702"> <img style="width: 20%"
                                                        src="{{ asset('frontend/photo/m2nseven.png') }}"
                                                        alt="">
                                                </em>
                                                <em ga-data="1702" style="font-size: 80%">
                                                    KS 4,700</em>

                                            </span>
                                            <span ga-data="1702">
                                                <div style="font-weight: 400;" ga-data="1702">
                                                    <p class="custom-font" style="font-size:13px;"><strong
                                                            style="color: rgb(51, 153, 153);">Diamond×78
                                                        </strong><strong
                                                            style="color: rgb(255, 0, 0);">+8</strong>&nbsp; &nbsp;
                                                        &nbsp;
                                                        &nbsp;</p>
                                                </div>
                                            </span>
                                            <div class="Pcright-icon commonright-icon" ga-data="1702"
                                                style="display: block;"></div>
                                        </li>

                                        <li class="custom-col" style="width: 30%;height:100px" ga-data="1703"
                                            id="23">
                                            <span ga-data="1703">
                                                <em class="" ga-data="1703"> <img style="width: 20%"
                                                        src="{{ asset('frontend/photo/m2nseven.png') }}"
                                                        alt="">
                                                </em>
                                                <em ga-data="1703" style="font-size: 80%">
                                                    KS 9,400</em>
                                                <em ga-data="1703">
                                                </em>
                                                {{-- <em class="PcliFo-em2 mx-5" ga-data="1702"> <img style="width: 20%"
                                                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                                                </em> --}}
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

                                        <li style="width: 30%;height:100px" class="custom-col" ga-data="1704"
                                            id="25">
                                            <span ga-data="1704">
                                                <em class="" ga-data="1704"> <img style="width: 20%"
                                                        src="{{ asset('frontend/photo/m2nseven.png') }}"
                                                        alt="">
                                                </em>
                                                <em ga-data="1704" style="font-size: 80%">
                                                    KS 14,000</em>
                                                <em ga-data="1704">
                                                </em>
                                                {{-- <em class="PcliFo-em2 mx-5" ga-data="1704"> <img style="width: 20%"
                                                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                                                </em> --}}
                                            </span>
                                            <span ga-data="1704">
                                                <div style="font-weight: 400;" ga-data="1704">
                                                    <p class="custom-font" style="font-size: 13px"><strong
                                                            style="color: rgb(51, 153, 153);">Diamond×234</strong><strong
                                                            style="color: rgb(255, 0, 0);">+23</strong></p>
                                                </div>
                                            </span>
                                            <div class="Pcright-icon commonright-icon" ga-data="1704"
                                                style="display: none;">
                                            </div>
                                        </li>

                                        <li style="width: 30%;height:100px" class="custom-col" ga-data=""
                                            id="">
                                            <span ga-data="">
                                                <em class="PcliFo-em2" ga-data=""> <img style="width: 20%"
                                                        src="{{ asset('frontend/photo/m2nseven.png') }}"
                                                        alt="">
                                                </em>
                                                <em ga-data="" style="font-size: 80%">
                                                    KS 18,700</em>
                                                <em ga-data="">
                                                </em>

                                            </span>
                                            <span ga-data="">
                                                <div style="font-weight: 400;" ga-data="">
                                                    <p class="custom-font" style="font-size: 13px"><strong
                                                            style="color: rgb(51, 153, 153);">Diamond×343</strong><strong
                                                            style="color: rgb(255, 0, 0);"></strong>&nbsp; &nbsp;
                                                        &nbsp;
                                                        &nbsp;</p>
                                                </div>
                                            </span>
                                            <div class="Pcright-icon commonright-icon" ga-data=""
                                                style="display: none;">
                                            </div>
                                        </li>

                                        <li style="width: 30%;height:100px" class="custom-col" ga-data=""
                                            id="">
                                            <span ga-data="">
                                                <em class="PcliFo-em2" ga-data=""> <img style="width: 20%"
                                                        src="{{ asset('frontend/photo/m2nseven.png') }}"
                                                        alt="">
                                                </em>
                                                <em ga-data="" style="font-size: 80%">
                                                    KS 28,000</em>
                                                <em ga-data="">
                                                </em>
                                                {{-- <em class="PcliFo-em2 mx-5" ga-data="1704"> <img style="width: 20%"
                                                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                                                </em> --}}
                                            </span>
                                            <span ga-data="">
                                                <div style="font-weight: 400;" ga-data="">
                                                    <p class="custom-font" style="font-size: 13px"><strong
                                                            style="color: rgb(51, 153, 153);">Diamond×514</strong><strong
                                                            style="color: rgb(255, 0, 0);"></strong>&nbsp; &nbsp;
                                                        &nbsp;
                                                        &nbsp;</p>
                                                </div>
                                            </span>
                                            <div class="Pcright-icon commonright-icon" ga-data=""
                                                style="display: none;">
                                            </div>
                                        </li>

                                        <li style="width: 30%;height:100px" class="custom-col" ga-data="1705"
                                            id="26">
                                            <span ga-data="1705">
                                                <em class="PcliFo-em2" ga-data="1702"> <img style="width: 20%"
                                                        src="{{ asset('frontend/photo/m2nseven.png') }}"
                                                        alt="">
                                                </em>
                                                <em ga-data="1705" style="font-size: 80%">
                                                    KS 37,500</em>
                                                <em ga-data="1705">
                                                </em>
                                                {{-- <em class="PcliFo-em2 mx-5" ga-data="1702"> <img style="width: 20%"
                                                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                                                </em> --}}
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

                                        <li style="width: 30%;height:100px" class="custom-col" ga-data=""
                                            id="">
                                            <span ga-data="">
                                                <em class="PcliFo-em2" ga-data=""> <img style="width: 20%"
                                                        src="{{ asset('frontend/photo/m2nseven.png') }}"
                                                        alt="">
                                                </em>
                                                <em ga-data="" style="font-size: 80%">
                                                    KS 56,000</em>
                                                <em ga-data="">
                                                </em>
                                                {{-- <em class="PcliFo-em2 mx-5" ga-data="1702"> <img style="width: 20%"
                                                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                                                </em> --}}
                                            </span>
                                            <span ga-data="">
                                                <div style="font-weight: 400;" ga-data="">
                                                    <p class="custom-font" style="font-size: 13px"><strong
                                                            style="color: rgb(51, 153, 153);">Diamond×1049</strong><strong
                                                            style="color: rgb(255, 0, 0);">&nbsp; &nbsp; &nbsp;
                                                            &nbsp;</strong></p>
                                                </div>
                                            </span>
                                            <div class="Pcright-icon commonright-icon" ga-data="">
                                            </div>
                                        </li>

                                        <li style="width: 30%;height:100px" class="custom-col" ga-data="1706"
                                            id="27">
                                            <span ga-data="1706">
                                                <em class="PcliFo-em2" ga-data="1706"> <img style="width: 20%"
                                                        src="{{ asset('frontend/photo/m2nseven.png') }}"
                                                        alt="">
                                                </em>
                                                <em ga-data="1706" style="font-size: 80%">
                                                    KS 113,000</em>
                                                <em ga-data="1706">
                                                </em>
                                                {{-- <em class="PcliFo-em2 mx-5" ga-data="1706"> <img style="width: 20%"
                                                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                                                </em> --}}
                                            </span>
                                            <span ga-data="1706">
                                                <div style="font-weight: 400;" ga-data="1706">
                                                    <p class="custom-font" style="font-size: 13px"><strong
                                                            style="color: rgb(51, 153, 153);">Diamond×1860</strong><strong
                                                            style="color: rgb(255, 0, 0);">+335</strong>&nbsp;&nbsp;
                                                    </p>
                                                </div>
                                            </span>
                                            <div class="Pcright-icon commonright-icon" ga-data="1706">
                                            </div>
                                        </li>

                                        <li style="width: 30%;height:100px" class="fr fs custom-col" ga-data="1707"
                                            id="28">
                                            <span ga-data="1707">
                                                <em class="PcliFo-em2" ga-data="1707"> <img style="width: 20%"
                                                        src="{{ asset('frontend/photo/m2nseven.png') }}"
                                                        alt="">
                                                </em>
                                                <em ga-data="1707" style="font-size: 80%">
                                                    KS 188,000</em>
                                                <em ga-data="1707">
                                                </em>
                                                {{-- <em class="PcliFo-em2 mx-5" ga-data="1707"> <img style="width: 20%"
                                                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                                                </em> --}}
                                            </span>
                                            <span ga-data="1707">
                                                <div style="font-weight: 400;" ga-data="1707">
                                                    <p style="font-size: 13px"><strong
                                                            style="color: rgb(51, 153, 153);">Diamond×3099</strong><strong
                                                            style="color: rgb(255, 0, 0);">+589</strong>
                                                    </p>
                                                </div>
                                            </span>
                                            <div class="Pcright-icon commonright-icon" ga-data="1707">
                                            </div>
                                        </li>

                                        <li style="width: 30%;height:100px" class="fr fs custom-col" ga-data="1708"
                                            id="29">
                                            <span ga-data="1708">
                                                <em class="PcliFo-em2" ga-data="1708"> <img style="width: 20%"
                                                        src="{{ asset('frontend/photo/m2nseven.png') }}"
                                                        alt="">
                                                </em>
                                                <em ga-data="1708" style="font-size: 80%">
                                                    KS 299,500</em>
                                                <em ga-data="1708">
                                                </em>
                                                {{-- <em class="PcliFo-em2 mx-5" ga-data="1708"> <img style="width: 20%"
                                                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                                                </em> --}}
                                            </span>
                                            <span ga-data="1708">
                                                <div style="font-weight: 400;" ga-data="1708">
                                                    <p style="font-size: 13px"><strong
                                                            style="color: rgb(51, 153, 153);">Diamond×4649</strong><strong
                                                            style="color: rgb(255, 0, 0);">+883</strong>
                                                    </p>
                                                </div>
                                            </span>
                                            <div class="Pcright-icon commonright-icon" ga-data="1708">
                                            </div>
                                        </li>

                                        <li style="width: 30%;height:100px;" class="fr fs custom-col" ga-data="1709"
                                            id="30">
                                            <span ga-data="1709">
                                                <em class="PcliFo-em2" ga-data="1709"> <img style="width: 20%"
                                                        src="{{ asset('frontend/photo/m2nseven.png') }}"
                                                        alt="">
                                                </em>
                                                <em ga-data="1709" style="font-size: 80%">
                                                    KS 469,000</em>
                                                <em ga-data="1709">
                                                </em>
                                                {{-- <em class="PcliFo-em2 mx-5" ga-data="1709"> <img style="width: 20%"
                                                        src="{{ asset('frontend/photo/m2nseven.png') }}" alt="">
                                                </em> --}}
                                            </span>
                                            <span ga-data="1709">
                                                <div style="font-weight: 400;" ga-data="1709">
                                                    <p style="font-size: 13px"><strong
                                                            style="color: rgb(51, 153, 153);">Diamond×7740</strong><strong
                                                            style="color: rgb(255, 0, 0);">+1548</strong>
                                                    </p>
                                                </div>
                                            </span>
                                            <div class="Pcright-icon commonright-icon" ga-data="1709">
                                            </div>
                                        </li>
                                        {{-- <li style="width: 30%" class="fr fs" ga-data="1712" id="33">
                                            <span ga-data="1712">
                                                <em class="PcliFo-em2" ga-data="1712"> <img style="width: 20%"
                                                        src="{{ asset('frontend/photo/m2nseven.png') }}"
                                                        alt="">
                                                </em>
                                                <em ga-data="1712" style="font-size: 80%">
                                                    R$ 33,00 </em>
                                                <em ga-data="1712">
                                                </em>

                                            </span>
                                            <span ga-data="1712">
                                                <div style="font-weight: 400;" ga-data="1712">
                                                    <p style="font-size: 13px"><strong
                                                            style="color: rgb(51, 153, 153);">Passagem do
                                                            crepúsculo</strong>
                                                    </p>
                                                </div>
                                            </span>
                                            <div class="Pcright-icon commonright-icon" ga-data="1712">
                                            </div>
                                        </li> --}}
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

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    // function submitForm() {
    //     var formData = $('#creditForm').serialize();
    //     $.ajax({
    //         type: 'POST',
    //         url: "{{ route('submit-form') }}", // Use the same route as in the form action
    //         data: formData,
    //         success: function(response) {
    //             // Display the response data where you want
    //             console.log(response);
    //         },
    //         error: function(error) {
    //             console.log(error);
    //         }
    //     });
    // }

    function submitForm() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var formData = $('#creditForm').serialize();
        //    var uid=$('#user_id').val();
        //    var zid=$('#zone_id').val();
        //    info = [];
        //     info[0] = uid;
        //     info[1] = zid;

        $.ajax({
            type: 'POST',
            url: "{{ route('submit-form') }}", // Use the same route as in the form action
            // data: {info:info},
            data: formData,
            success: function(response) {
                // Display the response data where you want
                //alert(response.username)
                $('#zarni').text("User ID :: " + response.username + '|' + "Zone :: " + response.zone +
                    '|' + "price :: " + response.change_price);
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
