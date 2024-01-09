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

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>

                </li>
            </ul>
        </nav>
        @include('master.sidebar')
        <div class="content-wrapper">


            <!-- Main content -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>User Edit</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active"><a href="{{ url('user') }}">User</a></li>
                                <li class="breadcrumb-item active">User Edit</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <div class="container my-5">
                <div class="row mt-6">
                    <div class="col-md-6 mx-auto">

                        <div class="card  p-4 mb-4">
                            <form action="{{ url('update_user', $userShow->id) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="name" value="{{ $userShow->name }}"
                                        required>


                                </div>
                                <div class="form-group mt-3">
                                    <label for="exampleInputEmail1">Email address <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        value="{{ $userShow->email }} " aria-describedby="emailHelp" name="email"
                                        required>

                                </div>
                                {{-- <div class="form-group mt-3">
                                    <label for="exampleInputPassword1">New Password<span
                                            class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        name="new_password" value="{{ $userShow }}" required>
                                    @error('new_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div> --}}
                                <div class="form-group mt-3"><label for="userRole"> User Role <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select form-control" aria-label="Default select example"
                                        name="userRole" id="userRole" required>
                                        @if ($userShow->is_admin == 2)
                                            {
                                            <option selected disabled value="{{ $userShow->is_admin }}">Admin</option>
                                            }
                                        @elseif($userShow->is_admin == 1)
                                            {
                                            <option selected disabled value="{{ $userShow->is_admin }}">Reseller
                                            </option>
                                        }@else{
                                            <option selected disabled value="{{ $userShow->is_admin }}">User</option>
                                            }
                                        @endif
                                        <option value="2">Admin</option>
                                        <option value="1">Reseller</option>
                                        <option value="0">User</option>
                                    </select>
                                    @error('userRole')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary mt-3"
                                    style="background-color: #0069D9">Update</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid ">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; SSE Web Solutions</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>







    </div>
    @include('master.footer')
