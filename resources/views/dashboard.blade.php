@include('master.header')

<style>
    .custom-logout {
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



    /* Add the neon light effect on hover */
    .custom-logout:hover {
        box-shadow: 0 0 20px rgba(14, 221, 248, 0.8);
    }
</style>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>


            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="text-center">
                    <div class="brand-text font-weight-bold">
                        {{-- <img style="width: 10%" src="{{ asset('frontend/photo/m2nseven.png') }}" alt=""
                            class="img-fluid"> --}}
                        <span
                            style="background:black; -webkit-background-clip: text; -webkit-text-fill-color: transparent;  font-family: 'Nexa', sans-serif;
                            font-weight: 800;">M2N7
                            GAME SHOP</span>

                    </div>
                </li>
            </ul>

            <!-- Right navbar links -->


            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary custom-logout">Logout</button>
                    </form>

                </li>
            </ul>
        </nav>

        @include('master.sidebar')
        <div class="content-wrapper">


            <!-- Main content -->
            <section class="content">

                <section class="content-header text-white">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                {{-- <h1>Buy Credit</h1> --}}
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    {{-- <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">Buy Credit
                                    </li> --}}
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                @include('blade.main.main')
                <div class="text-center">



                </div>

            </section>

        </div>



    </div>


    @include('master.footer')
