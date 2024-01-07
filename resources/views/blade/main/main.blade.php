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
        background-color: greenyellow
            /* Apply the "touch light" effect on hover */
    }

    @media only screen and (max-width: 1024px) {
        .custom-btn {
            margin-top: 1%
        }

        .custom-col {
            /* Three columns on larger screens */
            min-width: 50%;
        }

        .custom-col-1 {
            min-width: 100%;
        }
    }

    @media (min-width: 2560px) {
        .custom {
            margin-top: -10px;
            /* Adjust this value to fit your layout */
            position: relative;
            top: -5px;
            /* Adjust this value to fit your layout */
        }
    }
</style>

<div class="container-fluid ">
    <div class="d-flex justify-content-center">
        <form id="creditForm" action="{{ route('submit-form') }}" method="post">
            @csrf <!-- Add this line to include CSRF token in your form -->
            <div class="card" style="background-color: #162858">
                <div class="custom-font card-header text-center text-white " style="font-size: 150%">
                    Buy Credit
                </div>


                <div class="card-body my-2">
                    <h2 class="text-white">Enter Your Id</h2>
                    <div class="row">
                        <form action="">
                            {{-- <div class="col-md-4">
                                <label for="credit_amount" class="custom-font col-form-label text-white">User Id</label>
                                <input type="text" class="custom-font form-control" id="credit_amount" name="user_id"
                                    required />
                            </div>
                            <div class="col-md-4">
                                <label for="kyats" class="custom-font col-form-label text-white">Zone ID</label>
                                <input type="text" class="custom-font form-control" id="kyats" name="zone_id"
                                    required />
                            </div>
                            <div class="col-md-4" style="margin-top: 3%;">
                                <button type="submit" class="btn btn-outline-primary custom-btn btn-lg"
                                    onclick="submitForm()">
                                    Submit
                                </button>
                            </div> --}}
                            <div class="col-md-3">
                                <label for="credit_amount" class="custom-font col-form-label text-white">User Id</label>
                                <input type="text" class="custom-font form-control" id="credit_amount" name="user_id"
                                    required />
                            </div>
                            <div class="col-md-2">
                                <label for="kyats" class="custom-font col-form-label text-white">Zone ID</label>
                                <input type="text" class="custom-font form-control" id="kyats" name="zone_id"
                                    required />
                            </div>
                            <div class="col-md-4" style="margin-top: 38px;">
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

                        <form id="orderForm" action="{{ route('order-form') }}" method="post">
                            @csrf
                            <div class="container mt-4">
                                <h2 class="text-white">Select Amount</h2>
                                <input type="text" id="selectedData" name="productName" class="form-control"
                                    required>
                                <input type="text" id="productid" name="productid" class="form-control" required
                                    style="display: none">
                                @if (isset($userid))
                                    <input type="text" id="userid" name="userid" class="form-control"
                                        value="{{ $userid }}" required style="display: none">
                                    <input type="text" id="zoneid" name="zoneid" class="form-control"
                                        value="{{ $zoneid }}" required style="display: none">
                                @endif
                                <div class="row mt-3">
                                    <div class="col-md-4 custom-col">
                                        <ul class="PcDiamant-ul commonDiamant-ul">
                                            <li class="fr fs" ga-data="1702" id="13" value="13">
                                                <span ga-data="1702" style="font-size: 130%">
                                                    <em ga-data="1702">
                                                        R$ 5,00 </em>
                                                    <em ga-data="1702">
                                                    </em>
                                                    <em class="PcliFo-em2 mx-5" ga-data="1702"> <img style="width: 10%"
                                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6F5mRzN_MRgJB7lAHxQ_NgoNekYTy0FPh6g&usqp=CAU"
                                                            alt="">
                                                    </em>
                                                </span>
                                                <span ga-data="1702">
                                                    <h3 style="font-weight: 400;" ga-data="1702">
                                                        <p><strong
                                                                style="color: rgb(51, 153, 153);">Diamond×78</strong><strong
                                                                style="color: rgb(255, 0, 0);">+8</strong></p>
                                                    </h3>
                                                </span>
                                                <div class="Pcright-icon commonright-icon" ga-data="1702"
                                                    style="display: block;"></div>
                                            </li>
                                            <li class="fr fs " ga-data="1705" id="26">
                                                <span ga-data="1703" style="font-size: 130%">
                                                    <em ga-data="1703">
                                                        R$ 10,00 </em>
                                                    <em ga-data="1703">
                                                    </em>
                                                    <em class="PcliFo-em2 mx-5" ga-data="1702"> <img style="width: 10%"
                                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6F5mRzN_MRgJB7lAHxQ_NgoNekYTy0FPh6g&usqp=CAU"
                                                            alt="">
                                                    </em>
                                                </span>
                                                <span ga-data="1703">
                                                    <h3 style="font-weight: 400;" ga-data="1703">
                                                        <p><strong
                                                                style="color: rgb(51, 153, 153);">Diamond×156</strong><strong
                                                                style="color: rgb(255, 0, 0);">+16</strong></p>
                                                    </h3>
                                                </span>
                                                <div class="Pcright-icon commonright-icon" ga-data="1703"></div>
                                            </li>
                                            <li class="fr fs" ga-data="1704" id="25">
                                                <span ga-data="1704" style="font-size: 130%">
                                                    <em ga-data="1704">
                                                        R$ 15,00 </em>
                                                    <em ga-data="1704">
                                                    </em>
                                                    <em class="PcliFo-em2 mx-5" ga-data="1702"> <img
                                                            style="width: 10%"
                                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6F5mRzN_MRgJB7lAHxQ_NgoNekYTy0FPh6g&usqp=CAU"
                                                            alt="">
                                                    </em>
                                                </span>
                                                <span ga-data="1704">
                                                    <h3 style="font-weight: 400;" ga-data="1704">
                                                        <p><strong
                                                                style="color: rgb(51, 153, 153);">Diamond×234</strong><strong
                                                                style="color: rgb(255, 0, 0);">+23</strong></p>
                                                    </h3>
                                                </span>
                                                <div class="Pcright-icon commonright-icon" ga-data="1704"
                                                    style="display: none;"></div>
                                            </li>
                                            <!-- Add more list items as needed -->
                                        </ul>
                                    </div>
                                    <div class="col-md-4 custom-col">
                                        <ul class="PcDiamant-ul commonDiamant-ul">
                                            <li class="fr fs" ga-data="1704" id="25">
                                                <span ga-data="1705" style="font-size: 130%">
                                                    <em ga-data="1705">
                                                        R$ 40,00 </em>
                                                    <em ga-data="1705">
                                                    </em>
                                                    <em class="PcliFo-em2 mx-5" ga-data="1702"> <img
                                                            style="width: 10%"
                                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6F5mRzN_MRgJB7lAHxQ_NgoNekYTy0FPh6g&usqp=CAU"
                                                            alt="">
                                                    </em>
                                                </span>
                                                <span ga-data="1705">
                                                    <h3 style="font-weight: 400;" ga-data="1705">
                                                        <p><strong
                                                                style="color: rgb(51, 153, 153);">Diamond×625</strong><strong
                                                                style="color: rgb(255, 0, 0);">+81</strong></p>
                                                    </h3>
                                                </span>
                                                <div class="Pcright-icon commonright-icon" ga-data="1705"></div>
                                            </li>
                                            <li class="fr fs" ga-data="1705" id="26">
                                                <span ga-data="1706" style="font-size: 130%">
                                                    <em ga-data="1706">
                                                        R$ 120,00 </em>
                                                    <em ga-data="1706">
                                                    </em>
                                                    <em class="PcliFo-em2 mx-5" ga-data="1702"> <img
                                                            style="width: 10%"
                                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6F5mRzN_MRgJB7lAHxQ_NgoNekYTy0FPh6g&usqp=CAU"
                                                            alt="">
                                                    </em>
                                                </span>
                                                <span ga-data="1706">
                                                    <h3 style="font-weight: 400;" ga-data="1706">
                                                        <p><strong
                                                                style="color: rgb(51, 153, 153);">Diamond×1860</strong><strong
                                                                style="color: rgb(255, 0, 0);">+335</strong></p>
                                                    </h3>
                                                </span>
                                                <div class="Pcright-icon commonright-icon" ga-data="1706"></div>
                                            </li>
                                            <li class="fr fs" ga-data="1705" id="26">
                                                <span ga-data="1707" style="font-size: 130%">
                                                    <em ga-data="1707">
                                                        R$ 200,00 </em>
                                                    <em ga-data="1707">
                                                    </em>
                                                    <em class="PcliFo-em2 mx-5" ga-data="1702"> <img
                                                            style="width: 10%"
                                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6F5mRzN_MRgJB7lAHxQ_NgoNekYTy0FPh6g&usqp=CAU"
                                                            alt="">
                                                    </em>
                                                </span>
                                                <span ga-data="1707">
                                                    <h3 style="font-weight: 400;" ga-data="1707">
                                                        <p><strong
                                                                style="color: rgb(51, 153, 153);">Diamond×3099</strong><strong
                                                                style="color: rgb(255, 0, 0);">+589</strong></p>
                                                    </h3>
                                                </span>
                                                <div class="Pcright-icon commonright-icon" ga-data="1707"></div>
                                            </li>
                                            <!-- Add more list items as needed -->
                                        </ul>
                                    </div>
                                    <div class="col-md-4 custom-col-1">
                                        <ul class="PcDiamant-ul commonDiamant-ul">
                                            <li class="fr fs" ga-data="1704" id="25">
                                                <span ga-data="1708" style="font-size: 130%">
                                                    <em ga-data="1708">
                                                        R$ 300,00 </em>
                                                    <em ga-data="1708">
                                                    </em>
                                                    <em class="PcliFo-em2 mx-5" ga-data="1702"> <img
                                                            style="width: 10%"
                                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6F5mRzN_MRgJB7lAHxQ_NgoNekYTy0FPh6g&usqp=CAU"
                                                            alt="">
                                                    </em>
                                                </span>
                                                <span ga-data="1708">
                                                    <h3 style="font-weight: 400;" ga-data="1708">
                                                        <p><strong
                                                                style="color: rgb(51, 153, 153);">Diamond×4649</strong><strong
                                                                style="color: rgb(255, 0, 0);">+883</strong></p>
                                                    </h3>
                                                </span>
                                                <div class="Pcright-icon commonright-icon" ga-data="1708"></div>
                                            </li>
                                            <li class="fr fs" ga-data="1705" id="26">
                                                <span ga-data="1709" style="font-size: 130%">
                                                    <em ga-data="1709">
                                                        R$ 500,00 </em>
                                                    <em ga-data="1709">
                                                    </em>
                                                    <em class="PcliFo-em2 mx-5" ga-data="1702"> <img
                                                            style="width: 10%"
                                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6F5mRzN_MRgJB7lAHxQ_NgoNekYTy0FPh6g&usqp=CAU"
                                                            alt="">
                                                    </em>
                                                </span>
                                                <span ga-data="1709">
                                                    <h3 style="font-weight: 400;" ga-data="1709">
                                                        <p><strong
                                                                style="color: rgb(51, 153, 153);">Diamond×7740</strong><strong
                                                                style="color: rgb(255, 0, 0);">+1548</strong></p>
                                                    </h3>
                                                </span>
                                                <div class="Pcright-icon commonright-icon" ga-data="1709"></div>
                                            </li>
                                            <li class="fr fs" ga-data="1705" id="26">
                                                <span ga-data="1712" style="font-size: 130%">
                                                    <em ga-data="1712">
                                                        R$ 33,00 </em>
                                                    <em ga-data="1712">
                                                    </em>
                                                    <em class="PcliFo-em2 mx-5" ga-data="1702"> <img
                                                            style="width: 10%"
                                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6F5mRzN_MRgJB7lAHxQ_NgoNekYTy0FPh6g&usqp=CAU"
                                                            alt="">
                                                    </em>
                                                </span>
                                                <span ga-data="1712">
                                                    <h3 style="font-weight: 400;" ga-data="1712">
                                                        <p><strong style="color: rgb(51, 153, 153);">Passagem do
                                                                crepúsculo</strong>
                                                        </p>
                                                    </h3>
                                                </span>
                                                <div class="Pcright-icon commonright-icon" ga-data="1712"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-outline-primary btn-lg">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>


        </form>
    </div>
</div>
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
