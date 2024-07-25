<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />
    <meta name="author" content="Zoyothemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Log In | Kadso - Responsive Admin Dashboard Template</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App CSS -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- Custom Styles -->
    <style>
        .auth-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
        }
        .account-page-bg {
            background: url('assets/images/background.jpg') no-repeat center center;
            background-size: cover;
        }
    </style>
</head>
<body class="bg-color">

    <!-- Begin page -->
    <div class="container-fluid">
        <div class="row vh-100">
            <!-- Left Side: Login Form -->
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="auth-container">
                    <div class="text-center mb-4">
                        <a href="index.html" class="auth-logo">
                            <img src="assets/images/logo-dark.png" alt="logo-dark" class="mx-auto" height="28" />
                        </a>
                    </div>
                    <div class="text-center mb-3">
                        <h3 class="text-dark fs-20 fw-medium mb-2">Welcome back</h3>
                        <p class="text-dark text-capitalize fs-14 mb-0">Please enter your details.</p>
                    </div>

                    <div class="card">
                        <div class="card-header">{{ __('Login') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email Address -->
                                <div class="form-group mb-3">
                                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="form-group mb-3">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Remember Me -->
                                <div class="form-group d-flex mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                                    </div>
                                </div>

                                <!-- Password Reset Link -->
                                @if (Route::has('password.request'))
                                    <div class="form-group mb-3 text-end">
                                        <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                    </div>
                                @endif

                                <!-- Submit Button -->
                                <div class="form-group mb-0 text-end">
                                    <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="text-center text-muted mt-3">
                        <p class="mb-0">Don't have an account? <a class="text-primary ms-2 fw-medium" href="auth-register.html">Sign Up</a></p>
                    </div>
                </div>
            </div>

            <!-- Right Side: Background Image -->
            <div class="col-md-6 p-0 vh-100 d-none d-md-flex account-page-bg">
                <!-- Background image or decorative content -->
            </div>
        </div>
    </div>
    <!-- END wrapper -->

    <!-- Vendor JS -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>

    <!-- App JS -->
    <script src="assets/js/app.js"></script>

</body>
</html>
