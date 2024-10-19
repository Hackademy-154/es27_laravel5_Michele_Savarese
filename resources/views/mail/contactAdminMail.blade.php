<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendario LudoDelta</title>
</head>
<body>

    {{-- usare stile embedeed --}}


    <h1>Ciao, {{$name}}</h1>
    <h2>Grazie, di averci contattato, sarai ricontattato al più presto da un nostro amministratore</h2>
    <h3>Ecco i tuoi dati:</h3>
    <ul>
        <li>Nome: {{$name}}</li>
        <li>Tua email: {{$email}}</li>
        <li>Messaggio: {{$userMessage}}</li>

    </ul>
</body>
</html>
