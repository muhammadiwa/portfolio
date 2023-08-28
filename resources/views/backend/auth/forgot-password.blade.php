<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio | Forgot password</title>
    <!-- Icon Microwlights -->
    <link rel="shortcut icon" href="{{ url('public/template/assets/img/brand/icon.svg') }}" type="image/x-icon">
    <!-- Custom CSS Files -->
    <link rel="stylesheet" href="{{ url('public/template/main.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ url('public/template/assets/css/auth.css') }}">

    <!-- CSS Libraries -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ url('public/template/node_modules/bootstrap-icons/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto my-4 pt-5">
                <div class="card my-5">
                    <div class="card-body p-5">
                        <h4 class="fw-bold">Forgot Password? 🔑</h4>
                        <p class="text-secondary-500 lg-text-rg mb-5">We will send a link to reset your password</p>
                        @include('message')
                        <form action="{{ url('prosesforgot') }}" method="post" class="needs-validation" novalidate>
                            @csrf
                            <div class="form-group mb-4">
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control-md" id="validationEmail"
                                    placeholder="Email" required>
                                <div class="invalid-feedback animate__animated animate__headShake">
                                    <i class="bi bi-exclamation-circle-fill pe-1 pt-2"></i>Please input your email
                                </div>
                                <div class="valid-feedback animate__animated animate__bounceIn">
                                    <i class="bi bi-check-circle-fill pe-1 pt-2"></i>
                                    Looks good!
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <button class="w-100 btn btn-lg btn-primary lg-text-md" type="submit">Forgot
                                    Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ url('public/template/node_modules/bootstrap/dist/js/bootstrap.bundle.js') }}"></script>

    <!-- Template JS FIle -->
    <script src="{{ url('public/template/node_modules/bootstrap/dist/js/main.js') }}"></script>

    <!-- Js Libraries -->
    <script src="{{ url('public/template/assets/js/jquery.min.js') }}"></script>


</body>

</html>