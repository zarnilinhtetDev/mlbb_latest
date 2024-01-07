@include('master.header')

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
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <li>
                    {{-- <form method="POST" action="{{ route('user.logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form> --}}
                </li>
                </li>
            </ul>
        </nav>
        @include('master.sidebar')

        <div class="content-wrapper" style="background-color: #162858">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-12">
                            <!-- Content Header (Page header) -->
                            <section class="content-header text-white">
                                <div class="container-fluid">
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <h1>Reseller</h1>
                                        </div>
                                        <div class="col-sm-6">
                                            <ol class="breadcrumb float-sm-right">
                                                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a>
                                                </li>
                                                <li class="breadcrumb-item"><a
                                                        href="{{ url('/Car_Detail') }}">Reseller</a>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div><!-- /.container-fluid -->
                            </section>
                            <?php
                            $id = 1; ?>
                            <a href="{{ url('resellerHistory', $id) }}" class="btn btn-success">History</a>

                            <section class="content " style="">
                                <div class="container ">
                                    <div class="row justify-content-center ml-5">
                                        <div class="col-md-6" style="height: 900px">
                                            <div class="card" style="background-color: white">
                                                <div class="card-header">
                                                    <h3 class="text-center">Reseller</h3>
                                                </div>
                                                <div class="justify-content-center d-flex">
                                                    {{-- <textarea id="messageTextArea" name="message" rows="19" cols="60"
                                                        style="color: red; font-size: 11px; font-family: 'Courier New', Courier, monospace;">
    @if (isset($responses))
@foreach ($responses as $response)
User Id {{ $response[0]->message }}  User Id {{ $response[1] }} Zone Id {{ $response[2] }}
@endforeach
@endif


</textarea> --}}

                                                    <div id="messageTextArea" name="message"
                                                        style="color: red;font-size: 11px;font-family: 'Courier New', Courier, monospace;border:solid green 1px;padding: 10px;">
                                                        {{-- @if (session('responses'))
@foreach (session('responses') as $response)
User Id {{ $response[0]->message }}  User Id {{ $response[1] }} Zone Id {{ $response[2] }}
@endforeach
@endif --}}

                                                        <?php if (Session::has('val')) {
                                                            // echo Session::get('val');
                                                        
                                                            $sec_value = explode(',', Session::get('val'));
                                                            //  echo gettype($sec_value);
                                                            foreach ($sec_value as $dat) {
                                                                echo $dat . '<br>';
                                                            }
                                                        }
                                                        ?>

                                                    </div>

                                                </div>
                                                <form action="{{ url('reseller_store') }}" method="post">
                                                    @csrf
                                                    <div class="card-body ml-3">
                                                        <input type="text" id="code" name="code"
                                                            class="form-control">
                                                        <input type="submit" value="Submit"
                                                            class="btn btn-primary mt-3">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @include('master.footer')


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var textarea = document.getElementById("messageTextArea");
            textarea.focus();
            textarea.setSelectionRange(0, 0); // Set the selection range from start to start (i.e., the beginning)
        });
    </script>
