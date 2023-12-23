<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fallback Page</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="fallback-container">
        <h1>Wah kamu nyasar, turn back!</h1>
        <a href="{{ route('home') }}" class="back-button">Kembali</a>
    </div>
</body>
</html>
