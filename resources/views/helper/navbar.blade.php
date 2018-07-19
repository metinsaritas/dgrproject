<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
       <!-- <a class="navbar-brand js-scroll-trigger" href="#page-top">
           
        </a>-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item home">
                <a class="nav-link js-scroll-trigger" href="{{ Request::is('/') ? '#page-top' : asset('/')}}">
                    <i class="fa fa-home" style="font-size:20px;"></i>
                </a>
            </li>
            
            <li class="nav-item home-text">
                <a class="nav-link js-scroll-trigger" href="{{ Request::is('/') ? '#page-top' : asset('/')}}">
                    Anasayfa
                </a>
            </li>

            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Hizmetlerimiz
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ asset('hizmetler/bilisim-sistemleri') }}">Bilişim Sistemleri</a>
                        <a class="dropdown-item" href="{{ asset('hizmetler/enerji-sistemleri') }}">Enerji Sistemleri</a>
                        <a class="dropdown-item" href="{{ asset('hizmetler/otomasyon-sistemleri') }}">Otomasyon Sistemleri</a>
                    </div>
            </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ route('ureticilerimiz') }}">Üreticilerimiz</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ route('hakkimizda') }}">Hakkımızda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ route('iletisim') }}">İletişim</a>
            </li>


            
        </div>
        </div>
    </nav>