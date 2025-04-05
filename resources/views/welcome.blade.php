<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Tailwind CSS を適用 -->
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100 text-gray-900">
        <h1 class="text-3xl font-bold text-blue-500 text-center mt-10">
            Tailwind CSS is working in welcome.blade.php! 🎉
        </h1>
    </body>
</html>

