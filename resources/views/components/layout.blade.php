<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> {{ $title ?? "Mo Space" }} </title>
    </head>
    <body class="font-sans antialiased dark:bg-black dark::text-white/50">
        <h1>Job Board</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">contact</a>
        </nav>

      {{ $slot }}
</body>
</html>
