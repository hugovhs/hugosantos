<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje de contacto</title>
</head>
<body>
    <h1>Nuevo mensaje de contacto desde hugovhs.dev</h1>
    <p><strong>Nombre:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Mensaje:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>