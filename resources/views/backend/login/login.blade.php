<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<style>
    body {
        background-color: black
    }

    .btn-color {
        background-color: #59B4D8;
        color: #fff;

    }

    .profile-image-pic {
        height: 100px;
        width: 100px;
        object-fit: cover;
    }



    .cardbody-color {
        background-color: #ebf2fa;
    }

    a {
        text-decoration: none;
    }
</style>

<body>


    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5 ">


                <div class="card  ">
                    <h3 class="text-center text-dark my-2">Login Form</h3>
                    <form class="card-body cardbody-color p-lg-5 " method="POST" action="{{ route('admin. login') }}">
                        @csrf


                        <div class="mb-3">
                            <input type="email" class="form-control" id="Username" aria-describedby="emailHelp"
                                placeholder="email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" placeholder="password"
                                name="password" value="{{ old('password') }}">
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="text-center"><button type="submit"
                                class="btn btn-color px-5 mb-5 w-100">Login</button></div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    </form>
</body>

</html>
