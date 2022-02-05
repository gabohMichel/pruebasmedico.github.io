<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje para Easy Classroom</title>
</head>
<body>
    <p>
        <strong>Recibiste un mensaje de:</strong>&nbsp;&nbsp;{{ $mailBody["Nombre"] }} - {{ $mailBody["Email"] }} - {{ $mailBody["Telefono"] }}
    </p>
    <p><strong>Asunto:&nbsp;&nbsp;</strong>{{ $mailBody["Asunto"] }}</p>
    <p><strong>Mensaje:</strong></p>
    <br/>
    <p>{{ $mailBody["Info"] }}</p>
</body>
</html>