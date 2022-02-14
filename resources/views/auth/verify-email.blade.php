<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>
</head>
<body>
    Verificá tu email

    <form action="{{route('verification.send')}}" method="post">
        @csrf
        <button type="submit">Enviarme otro link para verificar</button>
    </form>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            A new email verification link has been emailed to you!
        </div>
    @endif
</body>
</html>