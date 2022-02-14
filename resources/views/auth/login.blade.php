<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="{{route('login')}}" method="post">
        @csrf
        <input type="email" name="email" value="{{old('email')}}" placeholder="Email...">
        @error('email')
            <div>{{$message}}</div>
        @enderror
        <input type="password" name="password" placeholder="Password...">
        @error('password')
            <div>{{$message}}</div>
        @enderror
        <label for="">Remember me</label>
        <input type="checkbox" name="remember">
        <input type="submit" value="Login">
    </form>

    {{-- al volver de la vista de reset password luego de haber recuperado y cambiado la pass --}}
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <a href="{{route('password.request')}}">Olvidaste tu password?</a>
</body>
</html>