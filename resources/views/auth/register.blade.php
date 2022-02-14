<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="{{route('register')}}" method="post">
        @csrf
        <input type="name" name="first_name" value="{{old('first_name')}}" placeholder="First name...">
        @error('first_name')
            <div>{{$message}}</div>
        @enderror
        <input type="last_name" name="last_name" value="{{old('last_name')}}" placeholder="Last name...">
        @error('last_name')
            <div>{{$message}}</div>
        @enderror
        <input type="email" name="email" value="{{old('email')}}" placeholder="Email...">
        @error('email')
            <div>{{$message}}</div>
        @enderror
        <input type="hidden" name="password" placeholder="Password..." value='12345678'>
        @error('password')
            <div>{{$message}}</div>
        @enderror
        <input type="hidden" name="password_confirmation" value='12345678' placeholder="Confirm password...">
        @error('password_confirmation')
            <div>{{$message}}</div>
        @enderror
        <input type="submit" value="Register">
    </form>
</body>
</html>