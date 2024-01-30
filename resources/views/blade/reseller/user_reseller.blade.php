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

<style>
    .chat-container {
        min-width: 1000px;
        margin: 0 auto;
        padding: 20px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    }

    .message {
        background-color: #f2f2f2;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
    }

    .message.sent {
        background-color: #d9edf7;
        text-align: right;
    }

    .chat-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    }

    .message {
        background-color: #f2f2f2;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
    }

    .message.sent {
        background-color: #d9edf7;
        text-align: right;
    }

    .chat-input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        resize: none;
        height: 100px;
    }

    .chat-input-container {
        position: relative;
        margin-top: 20px;
    }

    .chat-input-scroll {
        position: absolute;
        bottom: 10px;
        right: 10px;
        max-height: 200px;
        overflow-y: auto;
    }

    .gaming-textarea {
        border-radius: 2px;
        padding: 10px;
        overflow-y: scroll;
        border: 1px solid white;
    }

    .gaming-textarea::-webkit-scrollbar {
        width: 5px;
        /* Width of the scrollbar */
    }

    textarea::-webkit-scrollbar {
        width: 5px;

    }






    /* Ensure the textarea expands to fit its content */
    textarea {
        resize: none;
        /* Prevent resizing */
        overflow-y: scroll;
        /* Hide vertical scrollbar */
        height: auto;
        /* Set initial height to fit content */
        min-height: 50px;
        /* Set minimum height */
        max-height: 200px;
        /* Set maximum height */
    }

    /* Style the scroll button (you may need to adjust this based on your icon library or custom icons) */
    .btn-dark {
        background-color: #343a40;
        color: #fff;
        border-color: #343a40;
    }

    /* Adjust the button position to align with the textarea */
    .chat-input-scroll {
        display: flex;
        align-items: flex-end;
        margin-left: -38px;
        /* Adjust this value based on your button size */
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
</style>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">
        <!-- Navbar -->
        <nav style="background: linear-gradient(45deg, #bd0394, #3a89eb)"
            class="navbar navbar-expand navbar-light bg-light">

            <!-- Left navbar links -->
            {{-- <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul> --}}

            <ul class="navbar-nav ml-auto">
                <li class="text-center">
                    <div class="brand-text font-weight-bold">
                        {{-- <img style="width: 10%" src="{{ asset('frontend/photo/m2nseven.png') }}" alt=""
                        class="img-fluid"> --}}
                        <span
                            style="background:black; -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-family: 'Nexa', sans-serif;
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
        {{-- @include('master.sidebar') --}}
        {{-- <div class="content-wrapper"> --}}
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">


                <div class="text-white mt-3" style="font-family: 'Nexa', sans-serif;
                font-weight: 800;">
                    <div class="row">
                        <div class="col-md-9">
                            @if (Session::has('val'))
                                <a href="{{ route('session_clears', Session::has('val')) }}" class="ml-3 mt-3">
                                    <i class="fa-solid fa-circle-xmark text-danger"></i> {{-- <button class="btn btn">clear</button> --}}
                                </a>
                            @endif
                        </div>

                        <div class="col-md-3 text-right">
                            <span class="mt-3 text-dark">
                                <img style="width: 25px" src="{{ asset('frontend/photo/coin.jpg') }}" alt="Coin Image">
                                {{ $balance ?? '0' }}
                            </span>
                            <?php
                            $id = Auth::user()->id;
                            ?>
                            <a href="{{ url('resellerHistorys', $id) }}" class="ml-3 mt-3">
                                <img src="{{ asset('frontend/photo/user.png') }}" alt="User Image"
                                    style="width: 30px; margin-right: 10px">
                            </a>
                        </div>


                    </div>
                </div>





                <section class="content">

                    <div class="container mt-2">
                        <?php if (Session::has('error')) {
                            // echo Session::get('val');
                        
                            echo Session::get('error');
                            //  echo gettype($sec_value);
                        }
                        ?>
                        <div class="">
                            <div id="messageTextArea" name="message" rows="19" cols="60"
                                class="form-control gaming-textarea scrollable-textarea"
                                style="color: red; font-size: 11px; font-family: 'Open Sans', sans-serif; height: 300px">
                                @if (session('product_null'))
                                    <div class="alert alert-danger">
                                        {{ session('product_null') }}
                                    </div>
                                @endif
                                @if (session('error_insufficient'))
                                    <div class="alert alert-danger">
                                        {{ session('error_insufficient') }}
                                    </div>
                                @endif
                                @if (session('balance'))
                                    <div class="alert alert-danger">
                                        {{ session('balance') }}
                                    </div>
                                @endif

                                @if (Session::has('val'))
                                    <?php
                                    $sec_value = explode(',', Session::get('val'));
                                    ?>
                                    @foreach ($sec_value as $dat)
                                        ********************************
                                        <div>
                                            <img src="{{ asset('frontend/photo/m2nseven.png') }}" alt="User Image"
                                                style="width: 20px; margin-right: 10px; vertical-align: middle">
                                            <span>{{ $dat }}</span><br>
                                        </div>
                                        *************************************
                                    @endforeach
                                @endif
                            </div>

                            <div id="messageTextArea" name="message" rows="19" cols="60"
                                class="form-control gaming-textarea scrollable-textarea"
                                style="color: red; font-size: 11px; font-family: 'Courier New', Courier, monospace;">

                                @if (Session::has('cart'))
                                    <?php
                                    //$sec_value = explode(',', Session::get('cart'));
                                    echo gettype(Session::has('cart'));
                                    $cc = Session::has('cart');
                                    ?>


                                    <div>

                                        <span>{{ $cc }}</span><br>
                                    </div>
                                @endif
                            </div>


                            <!-- Add more messages here -->
                            <form action="{{ url('reseller_stores') }}" method="post" style="margin-top: 100px">
                                @csrf
                                <div class="chat-input-container">
                                    <div class="chat-input-scroll">
                                        <button id="scroll-to-bottom" class="btn btn-dark btn-sm"><i
                                                class="fa-solid fa-arrow-up"></i></button>

                                    </div>
                                    <textarea id="chat-input" name="code" class="form-control chat-input" placeholder="Type your message..."
                                        style="font-family: 'Nexa', sans-serif;
                                    font-weight: 800;"></textarea>

                                </div>
                            </form>

                        </div>
                    </div>
                </section>




        </section>




        {{-- </div> --}}



    </div>


    @include('master.footer')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            const textarea = document.getElementById('chat-input');
            const scrollButton = document.getElementById('scroll-to-bottom');

            function adjustTextareaHeight() {
                textarea.style.height = 'auto'; /* Reset the height to auto */
                textarea.style.height = (textarea.scrollHeight + 2) + 'px'; /* Set the new height */
            }

            function scrollToBottom() {
                textarea.scrollTop = textarea.scrollHeight;
            }

            window.onload = function() {
                adjustTextareaHeight();
                scrollToBottom();
            };

            textarea.addEventListener('input', function() {
                adjustTextareaHeight();
            });

            scrollButton.addEventListener('click', function() {
                scrollToBottom();
                textarea.focus();
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var textarea = document.getElementById("messageTextArea");
            textarea.focus();
            textarea.setSelectionRange(0, 0); // Set the selection range from start to start (i.e., the beginning)
        });
    </script>
