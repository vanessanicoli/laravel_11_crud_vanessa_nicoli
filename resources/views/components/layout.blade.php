<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
    @vite(['resources/css/app.css'])
</head>
<body class="d-flex flex-column min-vh-100 m-0 p-0">
    
    <x-navbar/>

    <div class="container-fluid wrapper d-flex flex-column justify-content-center align-items-center flex-grow-1 m-0 p-0">
        {{ $slot }}
    </div>

    @vite(['resources/js/app.js'])
</body>
</html>