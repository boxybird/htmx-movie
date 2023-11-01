<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="htmx-config" content='{"useTemplateFragments":"true"}'>
    <meta name="description" content="A demo of HTMX" />
    <title>HTMX Movie</title>
    <link rel="icon" href="/favicon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/app.css?v=d22822432jd">
    <script src="https://unpkg.com/htmx.org@1.9.6" integrity="sha384-FhXw7b6AlE/jyjlZH5iHa/tTe9EpJ1Y55RjcgPbjeWMskSxZt1v9qkxLJWNJaGni" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/htmx.org/dist/ext/class-tools.js"></script>
    <script src="https://unpkg.com/htmx.org/dist/ext/sse.js"></script>
</head>

<body hx-ext="class-tools" class="min-h-screen bg-gradient-to-tr font-sans from-zinc-800 overflow-y-scroll to-zinc-900 text-zinc-100">
    <div class="max-w-[120rem] mx-auto overflow-x-clip relative z-10">
        @include('partials.header')
        <main>
            @yield('content')
        </main>
        @include('partials.footer')
    </div>
</body>

</html>
