<html>
<head>
    <title>{{ $title ?? 'Citra Media' }}</title>
    <link href="{{ \Illuminate\Support\Facades\URL::asset('/css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;600&family=Hind+Siliguri:wght@300;600&display=swap" rel="stylesheet">
</head>

<body>
<main>
    <header>
        <ul class="left">
            <li>
                <img src="img/laravel-1-logo-png-transparent.png" width="50px">
            </li>
            <li><a href="{{ route('site.index') }}">Home</a></li>
            <li><a href="{{ route('site.index') }}">Portofolio</a></li>
            <li><a href="{{ route('site.index') }}">Partnership</a></li>
        </ul>
        <ul class="right">
            <li><a href="#">Contact</a></li>
        </ul>
    </header>
    {{ $slot }}
</main>
</body>
</html>