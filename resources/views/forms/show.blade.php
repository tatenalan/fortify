<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form {{$form->code}}</title>
</head>
<body>

    formularios asociados al usuario {{auth()->user()->first_name}} {{auth()->user()->last_name}} con rol {{auth()->user()->role}}: 
    @foreach ($myForms as $myForm)
        {{$myForm}} 
    @endforeach

    <h1>Formulario: {{$form->code}} <span style="font-size: 12px">V{{$version}}</span></h1>
    <h3>Dimension: {{$form->dimension->name}}</h3>
    <h4>{{$form->dimension->description}}</h3>
    <h3>Programa: {{$form->program->name}}</h3>
    <h4>{{$form->program->description}}</h3>

    <hr>

    @if (session('success'))
        <br>
       <h1 style="text-align:center; color:green;">Resultado obtenido: {{session('success')}}</h1> 
    @endif
    
    @error('answer')
        <span>
            <strong style="text-align:center; color:red;">{{ $message }}</strong>
        </span>
    @enderror

    QUESTIONARIO de {{$questions->count()}} Preguntas 
    <br><br>
    <form action="{{route('forms.store', $form)}}" method="POST">
        {{-- <input type="hidden" name="form_id" value="{{$form->id}}"> --}}
        @csrf
        @foreach ($questions as $key => $question)
            <div>
                {{$loop->iteration}})&nbsp<strong>{{$question->description}}</strong>
            @foreach ($answers as $answer)
                <br>
                <label>
                    <input type="radio" id="{{$answer->id}}" name="answer[{{$key}}]" value="{{$answer->value}}">{{$answer->description}} ({{$answer->value}})
                </label>
            @endforeach
            <br><br>
            </div>
        @endforeach
        <input type="submit">
    </form>

</body>
</html>