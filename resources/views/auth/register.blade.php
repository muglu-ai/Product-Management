<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register</title>
    <!-- Custom fonts for this template-->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
<div class="min-h-screen flex items-center justify-center">
    <div class="w-full sm:w-96 px-4 py-8 bg-white shadow-lg rounded-lg">
        <div class="text-center">
            <h1 class="text-2xl font-semibold text-gray-900 mb-4">Create an Account!</h1>
        </div>
        <form action="{{ route('register.save') }}" method="POST" class="user">
            @csrf
            <div class="mb-4">
                <input name="name" type="text" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 @error('name') is-invalid @enderror" id="exampleInputName" placeholder="Name" value="{{ old('name') }}">
                @error('name')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <input name="email" type="email" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 @error('email') is-invalid @enderror" id="exampleInputEmail" placeholder="Email Address" value="{{ old('email') }}">
                @error('email')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <input name="password" type="password" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Password">
                @error('password')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <input name="password_confirmation" type="password" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 @error('password_confirmation') is-invalid @enderror" id="exampleRepeatPassword" placeholder="Repeat Password">
                @error('password_confirmation')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-full font-semibold hover:bg-blue-600 transition duration-300 ease-in-out">Register Account</button>
        </form>
        <hr class="my-4">
        <div class="text-center">
            <a class="text-sm text-blue-500 hover:underline" href="{{ route('login') }}">Already have an account? Login!</a>
        </div>
    </div>
</div>
<!-- Core plugin JavaScript-->
<script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<!-- Custom scripts for all pages-->
<script src="{{ asset('admin_assets/js/sb-admin-2.min.js') }}"></script>
</body>
</html>
