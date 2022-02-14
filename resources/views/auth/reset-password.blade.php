<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset password</title>
</head>
<body>
    Cambia tu clave

    <form action="{{route('password.update')}}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{request()->route('token')}}">
        <input type="password" name="password" placeholder="Password...">
        <input type="email" name="email" value="{{$request->email}}" readonly>
        @error('password')
            <div>{{$message}}</div>
        @enderror
        <input type="password" name="password_confirmation" placeholder="Confirm password...">
        @error('password_confirmation')
            <div>{{$message}}</div>
        @enderror
        <input type="submit">Cambiar password</button>
    </form>

</body>
</html>