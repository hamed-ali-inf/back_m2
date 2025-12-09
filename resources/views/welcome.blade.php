<!DOCTYPE html>
<html lang="{{ str_replace('_', '-',app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
     @vite('resources/css/app.css')
</head>
<body class="text-center px-8 py-12">
    <h1>Welcome to the CRUD in laravel</h1>
    <p>Click the button below to view the list of users </p>

    <a href="/users" class="btn">
        Find users
    </a>
</body>
</html>