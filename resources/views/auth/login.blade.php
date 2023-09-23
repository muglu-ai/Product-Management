<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Login</title>
    <!-- Custom fonts for this template-->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
<div class="container">
    <!-- Outer Row -->
    <div class="flex justify-center items-center min-h-screen">
        <div class="w-full lg:w-2/3 xl:w-1/2">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <!-- Nested Row within Card Body -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 lg:gap-8">
                    <div class="hidden lg:block bg-login-image bg-cover bg-center"></div>
                    <div class="lg:px-8">
                        <div class="text-center">
                            <h1 class="text-2xl font-semibold text-gray-900 mb-4">Welcome Back!</h1>
                        </div>
                        <form action="{{ route('login.action') }}" method="POST" class="user">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="mb-4">
                                <input name="email" type="email" class="w-full p-2 border border-gray-300 rounded" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                            </div>
                            <div class="mb-4">
                                <input name="password" type="password" class="w-full p-2 border border-gray-300 rounded" id="exampleInputPassword" placeholder="Password">
                            </div>
                            <div class="mb-4">
                                <label class="inline-flex items-center">
                                    <input name="remember" type="checkbox" class="h-4 w-4 text-blue-600 rounded border-gray-300 focus:ring-0">
                                    <span class="ml-2 text-gray-700">Remember Me</span>
                                </label>
                            </div>
                            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-full font-semibold hover:bg-blue-600 transition duration-300 ease-in-out">Login</button>
                        </form>
                        <hr class="my-4">
                        <div class="text-center">
                            <a class="text-sm text-blue-500 hover:underline" href="{{ route('register') }}">Create an Account!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="{{ asset('admin_assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Core plugin JavaScript-->
<script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<!-- Custom scripts for all pages-->
<script src="{{ asset('admin_assets/js/sb-admin-2.min.js') }}"></script>
</body>
</html>
