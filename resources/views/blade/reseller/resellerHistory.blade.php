@include('master.header')

<style>
    .content-wrapper {
        background: #bd0394;
        /* Fallback color if gradients are not supported */
        background: linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        background: -webkit-linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        /* For Safari and Chrome */
        background: -moz-linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        /* For Firefox */
    }

    .card {
        border-radius: 32px 33px 33px 30px;
        -webkit-border-radius: 32px 33px 33px 30px;
        -moz-border-radius: 32px 33px 33px 30px;
        /* font-family: "Times New Roman", Times, serif; */
        font-family: 'Nexa', sans-serif;
        /* Specify the font family */
        font-weight: 800;
    }

    .gaming-card {
        background-color: #FFFFFF;
        color: black;
        border: 2px solid #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .gaming-card .card-header {

        color: white;
        border-bottom: 2px solid #0056b3;
        background: #bd0394;
        /* Fallback color if gradients are not supported */
        background: linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        background: -webkit-linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        /* For Safari and Chrome */
        background: -moz-linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        /* For Firefox */
    }

    .gaming-card .card-body {
        padding: 0;
    }

    th {

        color: white;
        border-bottom: 2px solid #0056b3;
        background: #bd0394;
        /* Fallback color if gradients are not supported */
        background: linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        background: -webkit-linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        /* For Safari and Chrome */
        background: -moz-linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        /* For Firefox */
    }

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

    // site specific

    .container-fluid {
        max-width: 960px;
    }

    // utility

    [data-toggle="collapse"] {
        cursor: pointer;
    }

    .align-center {
        text-align: center;
    }

    .align-right {
        text-align: right;
    }

    .valign-middle {
        vertical-align: middle !important;
    }

    // responsive table override

    // wrap responsive table in media query
    @media screen and (max-width: 767px) {

        .table-responsive {

            thead,
            tbody,
            tfoot,
            tr,
            th,
            td {
                display: block;
            }

            thead {
                display: none;
            }

            .align-center,
            .align-right {
                text-align: inherit;
            }

            tr {
                border-top: 1px solid #ddd;

                &:first-child {
                    border: 0;
                }
            }

            // override bootstrap's styling
            >tbody>tr>td {
                padding-left: 50%;
                border-top-color: rgba(221, 221, 221, 0.5);

                &:first-child {
                    border: 0;
                }
            }

            [data-label] {
                position: relative;

                &:before {
                    position: absolute;
                    top: 0;
                    left: 0;
                    padding: 8px;
                    content: attr(data-label);
                    font-weight: bold;
                }
            }

        }

        // a little tweaking

        .navbar-fixed-top.visible-xs+.row {
            padding-top: 60px; // height plus padding
        }

        .btn .visible-xs {
            display: inline-block !important;
        }

        .sliding-sidebar {
            position: absolute;
            z-index: 1;
            background: #fff;
            min-height: 100%;
            border-right: 1px solid #ccc;

            &.collapse,
            &.collapsing {
                display: block !important;
                transform: translate3D(-100%, 0, 0);
                transition: all 200ms;
            }

            &.collapse.in {
                transform: translate3D(0, 0, 0);
                box-shadow:
                    1px 0 0 rgba(0, 0, 0, 0.05),
                    2px 0 0 rgba(0, 0, 0, 0.05),
                    3px 0 0 rgba(0, 0, 0, 0.05);
            }
        }
    }

    .parent-expanded {}

    .parent-collapsed {
        display: none;
    }

    .collapsed {
        .parent-expanded {
            display: none;
        }

        .parent-collapsed {
            display: inline-block;
        }
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
            <section class="content-header text-white">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6 ">
                            {{-- <h1>History</h1> --}}
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                {{-- <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item">History
                                </li> --}}
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->

            <div class="navbar navbar-default visible-xs"
                style=" font-family: 'Nexa', sans-serif;
            font-weight: 800;">
                <div class="container-fluid">
                    <button class="btn custom-logout navbar-btn" data-toggle="collapse" data-target="#filter-sidebar">
                        <i class="fa fa-tasks"></i> My Account
                    </button>
                </div>
            </div>

            <div class="container-fluid">

                <div style=" font-family: 'Nexa', sans-serif;
                font-weight: 800;" class="row">

                    <!-- filter sidebar -->
                    <div id="filter-sidebar"
                        class="col-xs-6 col-sm-3 visible-sm visible-md visible-lg collapse sliding-sidebar">

                        <div>
                            <h5 class="nav-item">
                                <a href="" class="text-white nav-link"><i
                                        class="fa-solid fa-fw fa-file-medical"></i>
                                    History</a>
                            </h5>
                        </div>

                        <div>
                            <h5 class="nav-item">

                                <a href="" class="text-white nav-link"><i
                                        class=" fa-fw fa-solid fa-file-invoice-dollar"></i>
                                    Recharge</a>
                            </h5>

                        </div>

                        <div>
                            <h5 class="nav-item">
                                <a href="" class="text-white nav-link"><i class="fa-fw fa-solid fa-coins"></i>
                                    Daily Use Coins</a>
                            </h5>
                        </div>

                        {{-- <div>
                            <h4 data-toggle="collapse" data-target="#group-4">
                                <i class="fa fa-fw fa-caret-down parent-expanded"></i>
                                <i class="fa fa-fw fa-caret-right parent-collapsed"></i>
                                Artist
                            </h4>
                            <div id="group-4" class="list-group collapse in">
                                <a class="list-group-item" href="#">
                                    <span class="badge">3</span> John Lennon
                                </a>
                                <a class="list-group-item" href="#">
                                    <span class="badge">3</span> John Lennon
                                </a>
                                <a class="list-group-item" href="#">
                                    <span class="badge">3</span> John Lennon
                                </a>
                                <a class="list-group-item" href="#">
                                    <span class="badge">3</span> John Lennon
                                </a>
                            </div>
                        </div> --}}

                    </div>

                    <!-- table container -->
                    <div class="col-sm-12 ">

                        <div class="card gaming-card mt-3">
                            <div class="card-header mb-2">
                                <h3 class="card-title">Transaction History List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Message</th>
                                                <th>User Id</th>
                                                <th>Zone Id</th>
                                                <th>Product Id</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = '1';
                                            @endphp
                                            @foreach ($transactions as $transaction)
                                                <tr>
                                                    <td>{{ $no }}</td>
                                                    <td>{{ $transaction->message }}</td>
                                                    <td>{{ $transaction->uid }}</td>
                                                    <td>{{ $transaction->zid }}</td>
                                                    <td>{{ $transaction->pid }}</td>
                                                </tr>
                                                @php
                                                    $no++;
                                                @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>

                </div>
            </div>



            {{-- <section class="content">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-md-10 mt-5">
                            <div class="card gaming-card mt-3">
                                <div class="card-header mb-2">
                                    <h3 class="card-title">Transaction History List</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Message</th>
                                                    <th>User Id</th>
                                                    <th>Zone Id</th>
                                                    <th>Product Id</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = '1';
                                                @endphp
                                                @foreach ($transactions as $transaction)
                                                    <tr>
                                                        <td>{{ $no }}</td>
                                                        <td>{{ $transaction->message }}</td>
                                                        <td>{{ $transaction->uid }}</td>
                                                        <td>{{ $transaction->zid }}</td>
                                                        <td>{{ $transaction->pid }}</td>
                                                    </tr>
                                                    @php
                                                        $no++;
                                                    @endphp
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </div>






            </section> --}}

        </div>



    </div>


    {{-- @include('master.footer') --}}
    <script src="{{ asset('plugins/jquery/jquery.min.js ') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js ') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js ') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js ') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="../../dist/js/demo.js"></script> --}}
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                // "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
        });


        if (!isTouchDevice()) {
            $('[data-toggle*="tooltip"]').tooltip();
        }

        // utility

        function isTouchDevice() {
            return !!('ontouchstart' in window || navigator.msMaxTouchPoints);
        }
    </script>
</body>

</html>
