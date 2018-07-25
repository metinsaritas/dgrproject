@extends("sayfa")

@section("title") Otomasyon Sistemleri | DGR Project @endsection

<div class="page">
    <div class="banner" style="background-image:url({{ asset('img/page/otomasyon-sistemleri.jpg')}});"></div>

    <div class="container" style="position: relative;">
        <i class="fa fa-cogs service-logo" style="color: red; box-shadow: 0px -20px 70px -10px red"></i>
        <span class="title">Otomasyon Sistemleri</span>
    </div>
</div>

@section("icerik")
<div>
    <div class="hizmet-after">
        <div class="cont">
        <div class="container">
            <div class="row hizmet-menu">
                <div data-to="atikizleme" class="col-sm list active" style="background-image:url(../img/hizmetler/trash.png)">
                    <span>Akıllı Atık İzleme Sistemleri</span>
                    <div class="arrow"></div>
                </div>
                
                <div data-to="atiktoplama" class="col-sm list" style="background-image:url(../img/hizmetler/track.png)">
                    <span>Akıllı Atık Toplama Sistemleri</span>
                    <div class="arrow"></div>
                </div>

                <div data-to="aydinlatma" class="col-sm list" style="background-image:url(../img/hizmetler/lamp.png)">
                    <span>Akıllı Aydınlatma Sistemleri</span>
                    <div class="arrow"></div>
                </div>

                <div data-to="sulama" class="col-sm list" style="background-image:url(../img/hizmetler/sulama.png)">
                    <span>Akıllı Sulama Sistemleri</span>
                    <div class="arrow"></div>
                </div>

                <div data-to="saglik" class="col-sm list" style="background-image:url(../img/hizmetler/saglik.png)">
                    <span>E-Sağlık Sistemleri</span>
                    <div class="arrow"></div>
                </div>
                
                <div data-to="yakittakip" class="col-sm list" style="background-image:url(../img/hizmetler/yakit.png)">
                    <span>Araç Yakıt Takip Sistemleri</span>
                    <div class="arrow"></div>
                </div>

                <div data-to="havagurultu" class="col-sm list" style="background-image:url(../img/hizmetler/kirli.png)">
                    <span>Hava Kirliliği ve Gürültü Takip Sistemleri</span>
                    <div class="arrow"></div>
                </div>

                <div data-to="elektrik" class="col-sm list" style="background-image:url(../img/hizmetler/battery.png)">
                    <span>Elektrik Şarj Üniteleri</span>
                    <div class="arrow"></div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="container-area">
        <div class="container">
            <div data-name="atikizleme" class="tab active">
                <p>
                    Şimdiye kadar atık toplama sabit sistemlerle manuel olarak planlama ve toplama takvimine uygun yapılmaktadır. Konteynerler bir dizi programla toplanır. Fakat bu konteynerlerin tam dolu olup – olmadığı bilinememektedir. Bu nedenle konteyner boşaltma maliyeti, konteynerlerin aşınması, kötü ekipman kullanımı, çöp araçlarının yollarda aşınma ve yıpranması, aşırı emisyon miktarları ve personel giderleri ekonomiye ciddi şekilde zarar vermektedir.
                </p>

                <p>
                    Atık toplama ve planlama ile ilgili komple bir çözüm olan ürünümüz entegre otomasyon yapısı ile öne çıkmaktadır
                    <br/>Kablosuz ve ultrasonik senesörlerin kullanılması ile uzaktan konteyner içerisindeki atıkların doluluk seviyesini ölçerek verileri bulut tabanlı sistemimize atarak konteynerlerin doluluk oranlarını tam olarak ölçümlemektedir.
                    <br/>Akıllı planlama yazılımımız ile birlikte konteynerlerin doluluk oranlarına uygun otomatik rota oluşturulmasını sağlayarak sürücülerin tabletlerine bu rota otomatik olarak eklenmekte ve çöp toplama araçlarının anlık izlenmesini sağlar. Ayrıca rota üzerinde optimize edilmiş rota planı ile hem zaman hem yakıt tasarrufu sağlamaktadır.
                    <br/>İnteraktif harita üzerinden konteyner dolum seviyeleri, tarihlere göre tahmini dolum seviyeleri, araç takip ve izleme
                    <br/>Tamamlanan dolumlar, yaklaşan dolumlar, uyarılar ve konteyner dolum seviyeleri, konteyner içi ani değişikliklere ilişkin ayrıntılı raporlar.
                    <br/>Konteyner kısmen doluluk oranı veya aşırı sıcaklık artışlarının tespit edilmesi, konteynerin hareketi esnasında e-posta veya SMS yoluyla uyarı alınmas
                </p>

                <p>
                    <b>Atık Analiz Çözümü DGR</b><br/>
                    <span>
                        Atık analiz çözümü, verimliliği ve şeffaflığı artırmanıza yardımcı olan bilgiler sağlar. Atık sözleşmeleriyle uğraşan bir şehir, bir işletme veya bir aracı kurumunuz olsanız da, atık yönetimi işlemlerinizi daha da düzene sokmanıza yardımcı olabiliriz.
                    </span>
                </p>

                <p>
                    <b>Monitör</b><br/>
                    <span>
                        Temel bilgilerinizi belirleyin, atık üretiminizi yönetin ve aşağıdakileri öğrenin:
                    </span>
                    <ul>
                        <li>Konteyner ortalama dolgunluk</li>
                        <li>Ne kadar atık üretiyorsun?</li>
                        <li>Geri dönüşüm yoluyla çöp sahasından atılan atık yüzdesi</li>
                        <li>Konteynerlar ne kadar hızlı doluyor</li>
                    </ul>
                </p>
            </div>

            <div data-name="atiktoplama" class="tab">
                <p>
                    <b>Akıllı İçecek Ambalaj Geri Dönüşüm Otomatı</b><br/>
                    <span>Geri Dönüşüm Otomatı yada diğer Adıyla Ters Satış Otomatı</span>

                <ul>
                    <li>Tomra geri dönüşüm otomatları cam, PET ve alüminyum atıkları haznesinde toplayabilir</li>
                    <li>Kolay kullanılabilir.</li>
                    <li>LAN üzerinden uzaktan müdahele edilebilir.</li>
                    <li>UNO Promo 0,48 m² yer kaplar.</li>
                    <li>Makine üzerine reklam alınabilir ve farklı reklam filmleri LCD ekranda gösterilebilir.</li>
                    <li>Atıklar barkodla veya ağırlık ve şekilleriyle yazılıma tanımlandırılabilir.</li>
                    <li>Tomra SureTechnology özel yazılımı sayesinde atıkları tanımlama konusunda rakip tanımaz</li>
                </ul>
                </p>

                <p>
                    <b>Nasıl Çalışır</b><br/>
                    <span>Tomra geri dönüşüm otomatlarının içinde çok gelişmiş bir yazılım bulunmaktadır. Bu yazılım Otomata atılan atığı barkoda veya şeklinden tanımlayabilir.</span>

                    <p>UNO Promo markanıza ve pazarlama araç kutunuza katkı sağlayan güçlü araçtır. Kullanıcı katkısını tetikler, bağlantıyı oluşturur ve tekrar kullanımı teşvik eder.</p>

                    <p>Kullanıcının CRS mesajlarına, bağış programlarına, satış promosyonlarına, marka çalışmasına erişmesini sağlayın ... tümü mal sahibine bağlıdır!</p>

                    <ul>
                        <li>Büyük dokunmatik ekran, kullanıcı oturumu öncesinde, sırasında ve sonrasında kullanıcı iletişimi için idealdir</li>
                        <li>İletişim TOMRAPlus yoluyla müşteri tarafından yönetilir</li>
                        <li>İsteğe bağlı kart okuyucu ile eşsiz kullanıcı tanımlaması mümkündür</li>
                        <li>Özel dekor ve markalama için uygun olan düz yüzeyle reklam için ideal bir makine</li>
                    </ul>
                </p>
            </div>
            
            <div data-name="aydinlatma" class="tab">
                <p>
                    <b>Amaç</b><br/>
                    <span>
                        Belediyelerin sokak aydınlatmasını sürdürmek için maliyet / performans oranlarını azaltması veya bunu uzun dönem için mümkün olduğunca düşük tutması gerekmektedir. Bu yüzden teknik olarak mükemmel bir durumda, bu hizmetler olmadan sokak aydınlatması sağlamak mümkündür. Fakat bu durumda belediyeler karşılamaları gereken katı ekonomik taleplerin öngörüsünü kaybeder.
                    </span>
                </p>

                <p>
                    <b>Gereklilik</b><br/>
                    <span>
                        Yükselen enerji maliyetleri ve CO2 emisyonları dikkati özellikle sokak aydınlatmasının üzerine çekmiştir. Bu yüzden sokak aydınlatmasının yönetimi üzerine talepler giderek artmış ve bu işin ve teknik gerekliliklerin daha karmaşık ve önemli hale gelmesine yol açmıştır. Bu yüzden kararlar en yüksek güvenilirlik seviyesini temel almalı, anlamlı olmalı ve hemen bilgi sağlayabilmelidir. Aşağıdaki grafik sokak aydınlatmasının yönetimiyle ilgilenenlerin karşılaştıkları temel görevleri ve yaşadıkları zorlukları göstermektedir.
                    </span>
                </p>

                <p>
                    <b>Yapı</b><br/>
                    <span>
                        Sokak aydınlatması yönetimiyle ilişkilendirilen görevler için dört ana bölüme ayrılmıştır.
                    </span>

                    <ul>
                        <li>Ana ve katalog verisi</li>
                        <li>Aydınlatma ağı</li>
                        <li>Bakım / Ağır Bakım</li>
                        <li>Analiz / Optimizasyon</li>
                    </ul>

                    <span>Bunların hepsi opsiyonel modüllerin ve farklı arayüzlerin yardımıyla genişletilebilir. Böylece luxData.licht'in yardımıyla karmaşık talepleri bile kolaylıkla karşılamak mümkündür.</span>
                </p>
            </div>

            <div data-name="sulama" class="tab">
                Burası sulama hizmetler kısmı
            </div>

            <div data-name="saglik" class="tab">
                Burası saglik hizmetler kısmı
            </div>

            <div data-name="yakittakip" class="tab">
                Burası yakittakip hizmetler kısmı
            </div>

            <div data-name="havagurultu" class="tab">
                Burası havagurultu hizmetler kısmı
            </div>
            
            <div data-name="elektrik" class="tab">
                <p>
                    <b>Elektrikli Araç Şarj İstasyonu</b> <br/>
                    <span> 
                        Elektrikli araçlar teknolojik, ekonomik ve çevresel nedenlerden dolayı günümüzün gerçeklerinden biri haline gelmiştir. Hızla artan dünya nüfusu ile birlikte artış gösteren enerji talebi ve bunun yanında azalan doğal kaynaklar, petrol fiyatlarının her sene katlanarak yükselmesine neden olmaktadır. Bunun yanında içten yanmalı motorların yarattığı yüksek oranda karbon salınımı ve sonucunda oluşan çevresel sorunlar, elektrikli araçların kullanımını zorunlu hale getirmiştir.
                    </span>
                </p>

                <p>
                    <b>Neden Elektrikli Araçlar?</b> <br/>
                    <span> 
                        Elektrikli enerjisi ile çalışan araçların yaygınlaşmasının önündeki en büyük engel ise elektrikli araç şarj istasyonlarının ve bu üniteleri verimli şekilde kullanacak altyapı sistemlerinin gelişmemiş olmasıdır. Bu nedenle elektrikli araçların tüketicilere sunulmasından önce birçok farklı noktada konumlandırılan şarj istasyonlarına ve altyapı sistemlerine yatırım yapılması gerekmektedir
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('vendor/jquery/jquery.js')}}"></script>
<script>
    $(function() {
        //$("[data-to=aydinlatma]").click();
    })

    $(document).on("click", ".hizmet-menu .list[data-to]:not(.active)", function() {
        $(".hizmet-menu .list.active[data-to]").removeClass("active");
        $(this).addClass("active");
        let to = $(this).data("to");
        $(".container-area .tab").hide();
        $(".container-area .tab").filter("[data-name='"+to+"']").show();

        let s = $("body").width() > 768 ?  280 : 220;
        $("body").animate({scrollTop: s}, 300);
    });
</script>
@endsection
