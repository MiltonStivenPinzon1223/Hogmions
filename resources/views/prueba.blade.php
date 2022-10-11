<!DOCTYPE html>
<html>
    <head>
        <title>QR code Generator</title>
    </head>
<body>
<div class="visible-print text-center">
{!! \QrCode::generate('Make me into a QrCode!'); !!}
    <p>Scan me to return to the original page.</p>
</div>
</body>
</html>