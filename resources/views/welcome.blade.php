<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    
        @include("helper.head")
    
    </head>

    <body id="page-top">

    <!-- Navigation -->
    @include("helper.navbar")
    
    <div class="modal fade" id="youtubeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" style="height: 90%; max-width: 960px">
                <div class="modal-content" style="height: 90%;overflow: hidden;border-radius: 20px;border:none;">
                    <iframe width="100%" id="youtubeIframe" height="100%" src="https://www.youtube.com/embed/IvBfRWO1yXw?rel=0&fs=0&color=white&controls=0&modestbranding=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    
                </div>
            </div>
        </div>

    <header>
    
    <div style="position: relative;">
    <div id="jssor_1" class="masthead text-center text-white d-flex" style="position:relative;margin:0 auto;top:0px;left:0px;width:1366px;height:662px;overflow:hidden;visibility:hidden;">
               
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1366px;height:768px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/slider/slider1.jpg" />
                <div data-ts="flat" data-p="150" style="position:absolute;top:184px;left:283px;width:800px;height:400px;overflow:hidden;">
                    <div data-u="caption" data-t="0" style="position:absolute;top:54px;left:155px;width:487px;height:28px;font-size:23px;font-weight:500;color:#ffffff;line-height:1;letter-spacing:0.05em;text-align:center;">
                        <div style="text-decoration: underline;">En doğru seçim</div>
                    </div>
                    <div data-u="caption" data-t="2" style="position:absolute;top:97px;left:71px;width:658px;height:92px;font-size:73px;font-weight:900;color:#ffffff;line-height:1.1;letter-spacing:0.05em;text-align:center;">
                        <div style="text-shadow: 0px 0px 70px #333;">DGR Project</div>
                    </div>
                    <a href="#" data-play="53" data-rollback="48" style="display:block; position:absolute;top:190px;left:302px;width:220px;height:60px;border-radius:7px;background-clip:padding-box;">
                        <div>
                            <div class="play" data-toggle="modal" data-target="#youtubeModal"></div>
                        </div>
                    </a>
                </div>
                <!--<div data-ts="flat" data-p="150" style="position:absolute;top:184px;left:283px;width:800px;height:400px;overflow:hidden;">
                    <div data-u="caption" data-t="0" style="position:absolute;top:54px;left:155px;width:487px;height:28px;font-size:23px;font-weight:500;color:#ffffff;line-height:1;letter-spacing:0.05em;text-align:center;">
                        <div>The description of the template title</div>
                    </div>
                    <div data-u="caption" data-t="1" style="position:absolute;top:214px;left:164px;width:461px;height:28px;font-size:23px;font-weight:500;color:#ffffff;line-height:1;letter-spacing:0.05em;text-align:center;">
                        <div>Content Describe</div>
                    </div>
                    <div data-u="caption" data-t="2" style="position:absolute;top:97px;left:71px;width:658px;height:92px;font-size:73px;font-weight:900;color:#ffffff;line-height:1.1;letter-spacing:0.05em;text-align:center;">
                        <div>Template Title</div>
                    </div>
                    <a href="#" data-play="53" data-rollback="48" style="display:block; position:absolute;top:292px;left:302px;width:220px;height:60px;border-radius:7px;background-clip:padding-box;">
                        <div data-u="caption" data-t="3" style="position:absolute;top:0px;left:0px;width:220px;height:60px;border-radius:7px;background-clip:padding-box;font-size:30px;color:#ffffff;line-height:2;text-align:center;background-color:#ff5700;">BUTTON<br />
                        </div>
                        <div data-u="caption" data-t="4" style="position:absolute;top:0px;left:0px;width:220px;height:60px;border-radius:7px;background-clip:padding-box;font-size:30px;font-weight:500;color:#ffffff;line-height:2;letter-spacing:0em;text-align:center;background-color:#ff8d00;">BUTTON</div>
                    </a>
                </div>-->
            </div>

            <div>
                <a href="{{ route("link3") }}" title="Akıllı Şehir Sistemleri"><img data-u="image" src="img/slider/slider2.jpg" /></a>
            </div>

            <div>
                <a href="{{ route("link3")."#tarim" }}" title="Akıllı Tarım"><img data-u="image" src="img/slider/slider3.jpg" /></a>
            </div>

            <div>
                <a href="{{ route("link3")."#atiktoplama" }}" title="Akıllı Atık Toplama"><img data-u="image" src="img/slider/slider4.jpg" /></a>
            </div>

            <div>
                <a href="{{ route("link3")."#saglik" }}" title="E-Sağlık"><img data-u="image" src="img/slider/slider6.jpg" /></a>
            </div>

            <div>
                <a href="{{ route("link3")."#yakittakip" }}" title="Araç Yakıt Takip"><img data-u="image" src="img/slider/slider7.jpg" /></a>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb064" style="position:absolute;bottom:12px;right:12px;" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator 
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
        -->
    </div>
    

    <div class="social-media">
            <div style="position:relative;">
                <div class="logo"></div>
            </div>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
    </div>
</header>

    <!--<header class="masthead text-center text-white d-flex">-->

    

    <section id="about">
        <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading"><b>DGR</b> Hakkında</h2>
            <hr class="my-4">
            <p class="mb-4" style="font-family: Raleway;">
                    DGR PROJECT 19 yıllık bir tecrübe ve birikimin sonucu olarak 2013 yılında kurulmuş olup çeşitli sektör ve ülkelerde hizmet vermektedir. DGR PORJECT projelerinde uzman kadrosu, global iş ortakları ve teknik deneyimi ile müşterilerin ihtiyaçlarına en uygun ve hızlı çözümü sunmaktadır.
                    <br/><br/>DGR PROJECT olarak Türkiye, Azerbaycan, Ukrayna, Belarus ve Almanya olmak üzere bu ülkelerde de hizmet vermektedir. Akıllı Şehirler, IOT, Danışmanlık Hizmetleri, Dış Kaynak Eleman ihtiyaçları, BT Eğitimleri, BT ve Enerji verimliliği konuları gibi bir çok alanda faaliyet göstermektedir .
                    <br/><br/>DGR PROJECT, bünyesinde Almanya’da 1, Belarusta 1, Türkiye’de biri Ar-Ge ve diğeri Merkez ofis olmak üzere 4 ofisi ile faaliyet göstermektedir. Bunun yanı sıra Ukrayna,Azerbaycan, Rusya gibi ülkelerde de iş paylaşımlı ofisleri bulunmaktadır        
            </p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services" style="text-transform: unset !important;">Hizmetlerimiz</a>
            </div>
        </div>
        </div>
    </section>

    <section class="bg-dark text-white info-area parallax">
        <div class="container text-center">
                <h2 class="mb-4" style="
                font-family: Raleway;
                font-size: 50px;
                text-shadow: 2px 3px 7px #333;"><b>DGR</b> İle Tanışın</h2>
        </div>
    </section>

    <section id="services" style="padding: 4em 0;">
        <!--<div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">At Your ss</h2>
                <hr class="my-4">
            </div>
        </div>
    </div>-->
        <div class="container hizmetler">
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
                <i class="fa fa-4x fa-desktop text-primary mb-3 sr-icons" style="color: #03a9f4 !important;"></i>
            <h3 class="mb-3"><a href="{{ route("link1") }}" style="color:#03a9f4;">Bilişim Sistemleri</a></h3>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;border-color: #03a9f4;">
                <p class="text-muted mb-0">
                    <ul class="liste">
                        <li>DGR PROJECT olarak her şirketin ihtiyaçlarının farklı olduğunu ve herhangi bir hizmetin buna göre şekillendirilmesini sağlamaktadır. </li>
                        <li>Standart IT hizmetlerinin şirket ihtiyaçlarına cevap vermediği durumlarda DGR PROJECT olarak problemli ve riskli yapıları birebir ve uzman ekibiyle sağlıklı ve işleyen profesyonel yapılar haline getirmeye odaklanmıştır.</li>
                        <li>Bu modelle tamamen şirketlerin IT altyapılarının iyileştirilmesi ve profesyonel IT yapıları haline getirmesi ile IT yönetimine farklı bir bakış açısı getirmiştir.</li>
                    </ul>
                </p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
                <i class="fa fa-4x fa-exchange text-primary mb-3 sr-icons"></i>
                <h3 class="mb-3"><a href="{{ route("link2") }}" style="color:orange;">Dijital Dönüşüm</a></h3>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p class="text-muted mb-0">
                    <ul class="liste">
                        <li>Dijital dönüşümü birkaç teknolojiye indirgemek mümkün değildir ancak web 2.0, mobil, genişbant internet, bulut bilişim, dijital medya, büyük veri, yapay zeka, artırılmış gerçeklik, nesnelerin interneti ve 3B yazıcıların çığır açan etkisi yeni bir dönem başlatmıştır.</li>
                        <li>Dijital teknolojiler ile ilk olarak anolog kayıtlar dijital ortamda işlenir hale getirilmiş (otomasyon) ve süreçler dijital ortama aktarılmıştır (e-hizmet). Gelinen noktada ise tüm kurumsal varlıklar ve paydaş ilişkileri dijital ortamda yeniden tanımlanmaktadır (dijital dönüşüm). Dijitalleşme süreci tek yönlü olmayıp, organizasyonlar yeni teknolojiler ile her zaman otomasyonlarını daha verimli kılabilmekte ve hizmetlerindeki dijital teknoloji deneyimini iyileştirebilmektedir. </li>
                    </ul>
                </p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
                <i class="fa fa-4x fa-cogs text-primary mb-3 sr-icons" style="color: red !important;"></i>
                <h3 class="mb-3"><a href="{{ route("link3") }}" style="color:red;">Akıllı Şehir Sistemleri</a></h3>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; border-color:red;">
                <p class="text-muted mb-0">
                    <ul class="liste">
                        <li>İnsanların daha rahat, güvenli ve verimli calışmalarını sağlayan otomasyon sistemleri tasarlıyor, kuruyor ve yönetiyoruz.</li>
                        <li>Şimdiye kadar atık toplama sabit sistemlerle manuel olarak planlama ve toplama takvimine uygun yapılmaktadır. Konteynerler bir dizi programla toplanır.</li>
                        <li>Şehrin nüfusu arttıkça enerji, su, sağlık, barınma, ulaşım, haberleşme, güvenlik gibi yaşamsal ihtiyaçların artması; bu ihtiyaçları karşılayan kaynakların daha verimli kullanılması için akılcı stratejiler geliştirmeyi zorunlu kılmaktadır.</li>
                    </ul>
                </p>
            </div>
            </div>
        </div>
        </div>
    </section>
    @include("helper.footer")

    

    <script src="{{ asset('js/jssor.slider-27.4.0.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/slidercode.js') }}" type="text/javascript"></script>
    </body>

</html>

