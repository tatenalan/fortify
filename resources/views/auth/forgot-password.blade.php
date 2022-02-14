<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password</title>
</head>
<body>
    Olvidaste tu clave?

    <form action="{{route('password.email')}}" method="post">
        @csrf
        <input type="email" name="email" placeholder="Email...">
        @error('email')
            <div>{{$message}}</div>
        @enderror
        <input type="submit">Recuperar password</button>
    </form>

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
</body>
</html>