<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Correo eviado por:</h1>
    <p>Esto ha enviado el cliente:</p>
    
    <p><strong>Nombre:</strong>{{($contacto['name'])}}</p>
    <p><strong>Asunto:</strong>{{($contacto['subject'])}}</p>
    <p><strong>Corrreo:</strong>{{($contacto['email'])}}</p>
    <p><strong>Mensaje:</strong>{{($contacto['message'])}}</p>
</body>
</html>