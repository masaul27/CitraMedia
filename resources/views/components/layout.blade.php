<html>
<head>
    <title>{{ $title ?? 'Citra Media' }}</title>
    <link href="{{ \Illuminate\Support\Facades\URL::asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ \Illuminate\Support\Facades\URL::asset('/fontawesome5/css/all.css') }}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;600&family=Hind+Siliguri:wght@300;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ \Illuminate\Support\Facades\URL::asset('/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ \Illuminate\Support\Facades\URL::asset('/images/favicon.ico') }}" type="image/x-icon">
    <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</head>

<body>
    <header>
        <ul class="left">
            <li>
                <img src="img/laravel-1-logo-png-transparent.png" width="50px">
            </li>
            <li><a href="{{ route('site.index') }}" class="text">Home</a></li>
            <li>
                <div class="drop">
                    <a href="{{ route('site.index') }}" class="text">Portofolio</a>
                    <div class="drop-content">
                        <a href="#">Neon Box</a>
                        <a href="#">Huruf Timbul</a>
                        <a href="#">Folding Gate</a>
                        <a href="#">Kusen & Partisi Alumunium</a>
                    </div>
                </div>
            </li>
            <li><a href="{{ route('site.index') }}" class="text">Partnership</a></li>
        </ul>
        <ul class="right">
            <li><a href="#" class="contact-button">Contact</a></li>
        </ul>
    </header>
    <main id="content">
        {{ $slot }}
    </main>
    <footer>
        <div class="footer-l2">
            <div class="tentang-kami">
                <h2>Tentang Kami</h2>    
            </div>
            <ul class="sosmed">
                <li><a href="#"><i class="fab fa-spotify"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
            </ul>
            <ul class="alamat">
                <h3>Jl. Pulau Damar, Way Dadi, Kec. Sukarame</br>Kota Bandar Lampung, Indonesia</br></br>Telp: 0853 6613 7700</h3>
            </ul>
            <div class="copyrights">© 2022 All rights reserved.</div>
        </div>
    </footer>
</body>
</html>