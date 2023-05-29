<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon"  href="{{ asset('/images/icons/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/utillogin.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/mainloginreg.css') }}">
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="/images/img-01.png" alt="IMG">
                </div>

                 @if (session('message'))
        <p>{{ session('message') }}</p>
    @endif

    @if (session('error'))
        <p>{{ session('error') }}</p>
    @endif

    <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
                    <span class="login100-form-title">
                        Registration
                    </span>
                    @csrf

                    <div class="wrap-input100 validate-input">
					<input class="input100" type="text" id="name" name="name" placeholder="Nama Lengkap" value="{{ old('name') }}" required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        </span>
                        @error('name')
                <span>{{ $message }}</span>
            @enderror
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="email" id="email" name="email" placeholder="Email"value="{{ old('email') }}" required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        </span>
                        @error('email')
                <span>{{ $message }}</span>
            @enderror
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" id="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        </span>
                        @error('password')
                <span>{{ $message }}</span>
            @enderror
                    </div>
                    
                    <div class="wrap-input100 validate-input">
    <input class="input100" id="gender" name="gender" placeholder="Jenis Kelamin" required>
    <span class="focus-input100"></span>
    <span class="symbol-input100"></span>
    @error('gender')
        <span>{{ $message }}</span>
    @enderror
</div>


                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" id="no_telp" name="no_telp" placeholder="No Telpon">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        </span>
                        @error('no_telp')
                <span>{{ $message }}</span>
            @enderror
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="date" id="date_of_birth" name="date_of_birth">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        </span>
                        @error('date_of_birth')
                <span>{{ $message }}</span>
            @enderror
                    </div>


                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn" id="login-btn">
                            Daftar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('/vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        });
    </script>
    <script src="{{ asset('/js/mainlogin.js') }}"></script>
</body>
</html>
