<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PQRS</title>
    <style>
        h1{
            color: blue;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>PQRS recibida de la pagina web www.coodescor.org.co</h1>
    <p><strong>Nombres:</strong> {{ $contact['firstname'] }}</p>
    <p><strong>Apellidos:</strong> {{ $contact['lastname'] }}</p>
    <p><strong>Email:</strong> {{ $contact['email'] }}</p>
    <p><strong>Asunto:</strong> {{ $contact['subject'] }}</p>
    <p><strong>Mensaje:</strong> {{ $contact['message'] }}</p>
    <p><strong>Terminos y Condicones:</strong> {{ $contact['terminosycondiciones'] }}</p>
</body>
</html>