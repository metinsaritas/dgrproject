@extends("sayfa")

@section("title") Hakkımızda | DGR Project @endsection

<div style="background: #f3f1f1;">
<div class="page">
    <div class="banner" style="background-image:url({{ asset('img/page/hakkimizda.jpg')}}); border-radius:0px;height:170px !important;"></div>

    <div class="container" style="position: relative;">
        <span class="title" style="text-align: left; left: 0px;margin-left:10px;"><i class="fa fa-question-circle"></i> Hakkımızda</span>
    </div>
</div>
</div>

@section("icerik")
<div class="hakkimizda-menu">
    <div class="container">
        <div class="row">
            <div class="col-sm"><a href="#vizyonmisyon" class="js-scroll-trigger">Vizyon&Misyon</a></div>
            <div class="col-sm"><a href="#hedefler" class="js-scroll-trigger">Hedefler</a></div>
            <div class="col-sm"><a href="#degerlerimiz" class="js-scroll-trigger">Değerlerimiz</a></div>
            <div class="col-sm"><a href="#ceomesaj" class="js-scroll-trigger">Ceo Mesaj</a></div>
        </div>
    </div>
</div>

<div class="container" id="hakkimizda">
    <div class="icyazi">
        <p style="text-indent: 40px;">DGR Project, 2013 yılında Dış Kaynak Eleman ihtiyaçları, BT Eğitimleri, BT ve Enerji verimliliği ve yazılım çözümleri geliştirmek amacı ile kurulmuştur. Müşteri memnuniyetini her zaman odağında tutan DGR Project; başta Dış Kaynak Eleman ihtiyaçları, BT Eğitimleri, BT ve Enerji verimliliği alanında olmak üzere, uygulama geliştirme, test / test otomasyon hizmetleri, proje yönetimi, anahtar teslim yazılım çözümleri, danışmanlık,yönetilen hizmetler ( managed services ) , dış kaynak kullanımı hizmetleri yanı sıra veri analizi, veri madenciliği ve veri arşivleme hizmetlerini de sunmaktadır.
        </p>
        <p>
            DGR Project, kuruluşundan günümüze her yıl büyümeye devam etmiş, yetkinliklerini her sene daha da artırmıştır. Faaliyetlerini kalite standartları ve metodolojilerine bağlı kalarak sürdürmektedir.
        </p>
        <p>
            Türkiye’nin en büyük telekom firmaları, sigorta şirketleri, bankalar, uluslararası perakende ve üretim firmaları hizmet sunduğumuz kuruluşlar arasında yer almaktadır. Yakın zamanda DGR Project, mobil ödeme sistemleri, e-ticaret, telekomünikasyon ve mobil uygulamalar endüstrilerinde yatırımlar yapmış olup Almanya Bremen sehrinde kurmus oldugu Teknolojik yatirimlar ile ilgili inovasyon sirketi ile yoluna devam etmektedir.
        </p>

        <p>
        <b>HEDEFLER</b><br/>
            Müşterilerimize değer katarak müşterilerimizle birlikte büyümek.
        </p>

        <p>
        <b>MÜŞTERİ MEMNUNİYETİ</b><br/>
            Varlık sebebimiz ve iş amacımız olan müşterilerimiz başarımızın, sürekliliğimizin ve büyümemizin odak noktasıdır
        </p>

        <p>
        <b>DÜRÜSTLÜK VE ŞEFFAFLIK</b><br/>
            İlkeli ve dürüst çalışır; tüm ilişkilerimizde adil yaklaşım ve karşılıklı güveni esas alarak , açık ve şeffaf iletişim kurarız.
        </p>    
</div>
</div>

<section id="vizyonmisyon" class="bg-dark text-white info-area parallax" style="background-attachment:unset; padding: 3rem; background-image:url({{ asset('img/page/vizyon.jpg')}})">
    <div class="container text-center">
            <h2 class="mb-4" style="
            font-family: Raleway;
            font-size: 50px;
            text-shadow: 2px 3px 7px #333;"><b>Vizyon</b>&Misyon</h2>
    </div>
</section>

<div class="container">
    <div class="icyazi">
        <p>
            <b>VİZYON</b><br/>
            Telekom, Enerji ve finans sektörlerinde çeşitli alanlarda hizmet ve ürün sağlayıcı firma olarak en önde yer almak ve sektörlerindeki lider firmaların tercih listelerinde ilk sırada bulunmak.
        </p>
        <p>
            <b>MİSYON</b><br/>
            Kurumsal firmalara SLA bazlı yüksek nitelikli hizmetler ve anahtar teslimi çözümler ve ürünler sunarak sektörün gelişimine katkıda bulunmak.
        </p>
    </div>
</div>

<section id="hedefler" class="bg-dark text-white info-area parallax" style="background-attachment:unset; padding: 3rem; background-image:url({{ asset('img/page/hedef.jpg')}})">
    <div class="container text-center">
            <h2 class="mb-4" style="
            font-family: Raleway;
            font-size: 50px;
            text-shadow: 2px 3px 7px #333;"><b>Hedef</b>lerimiz</h2>
    </div>
</section>

<div class="container">
    <div class="icyazi">
        <p>
            Müşterilerimize değer katarak müşterilerimizle birlikte büyümek.
        </p>
    </div>
</div>


<section id="degerlerimiz" class="bg-dark text-white info-area parallax" style="background-attachment:unset; padding: 3rem; background-image:url({{ asset('img/page/degerler.jpg')}})">
    <div class="container text-center">
            <h2 class="mb-4" style="
            font-family: Raleway;
            font-size: 50px;
            text-shadow: 2px 3px 7px #333;"><b>Değer</b>lerimiz</h2>
    </div>
</section>

<div class="container">
    <div class="icyazi">
        <p>
            <b>Müşteri Memnuniyeti</b><br/>
            Varlık sebebimiz ve iş amacımız olan müşterilerimiz başarımızın, sürekliliğimizin ve büyümemizin odak noktasıdır
        </p>
        <p>
            <b>Dürüstlük ve Şeffaflık</b><br/>
            İlkeli ve dürüst çalışır; tüm ilişkilerimizde adil yaklaşım ve karşılıklı güveni esas alarak , açık ve şeffaf iletişim kurarız.
        </p>

        <p>
            <b>İnsan Mutluluğuna Verilen Değer</b><br/>
            Başarının mutlu insanlar ile elde edildiğine olan inancımızdan çalışanlarımızın mutluluğunu önemser; iş ve yaşam dengelerine saygı gösteririz.
        </p>

        <p>
            <b>Yenilikçilik / Çeviklik</b><br/>
            Yaşam boyu öğrenmeye ve sürekli gelişime inanır hep daha iyi olanı hedefleriz.Çevik ve esnek yaklaşımlarla sadece bugün için değil gelecek için de çalışırız.
        </p>

        <p>
            <b>Sosyal Sorumluluk / Çevreye Saygılı Olmak</b><br/>
            Sahip olduğumuz doğal kaynakların sınırsız olmadığı bilinci ile, tüm faaliyetlerimizde çevresel sürdürülebilirliği ön planda tutarız. İnsana değer katan sosyal projelerin içinde yer almaktan gurur duyarız.
        </p>

        <p>
            <b>Kazanımlarımız</b><br/>
            Uzun Süreli Dış Kaynak Eleman ihtiyaçları, BT Eğitimleri, BT ve Enerji verimliliği Kanıtlanmış Ulusal ve Uluslararası Projeler Uzun Süreli Ortaklıklar ve Partnerlikler
        </p>
    </div>
</div>

<section id="ceomesaj" class="bg-dark text-white info-area parallax" style="background-attachment:unset; padding: 3rem; background-image:url({{ asset('img/page/ceo.jpg')}})">
    <div class="container text-center">
            <h2 class="mb-4" style="
            font-family: Raleway;
            font-size: 50px;
            text-shadow: 2px 3px 7px #333;"><b>CEO</b> Mesaj</h2>
    </div>
</section>

<div class="container">
    <div class="icyazi">
        <p>
            Ülkemizde son yıllarda siyasal, ekonomik, kültürel ve toplumsal açıdan pek çok gelişme ve atılım gerçekleştirildiğini görebiliyoruz. Hemen her alanda birçok değişimin yaşandığı Türkiye, dünyanın lider ülkeleri arasında yer alma hedefiyle yoluna emin adımlarla devam ediyor. Yakın geçmişte ekonomik krizlerle boğuşan ülkemizin, önüne koyduğu bu vizyon ve hedef dahilinde gösterdiği büyüme süreci, genç ve dinamik nüfusun da katkısıyla, yükselerek devam edecektir.
        </p>
        <p>    
            Küçük bir Ofis olarak faaliyete başlayan DGR Project, bugün 3 kıtada faaliyet gösteren, sektörde dünyanın en büyük firmaları arasında yer alan bir konuma geldi. Elbette ki bu başarıya ulaşmak kolay iş değil. Asıl zor olan nokta ise; bu başarıyı daim kılmak.
        </p>
            
        <p>
            19 yıllık bir geçmişe sahip olan DGR Sirketler Grubu açısından ele aldığımızda; mevcut hedeflerimize paralel, yurt içi ve yurt dışında oldukça verimli ve başarılı bir yıl geçirdiğimizi söyleyebilirim. 2023 yılına kadar, yılında Dış Kaynak Eleman ihtiyaçları, BT Eğitimleri, BT ve Enerji verimliliği ve yazılım çözümleri pazarında Türkiye ve Bölge ülkeler lideri olma hedefimize doğru, sağlam adımlarla, kendimizden emin bir şekilde ilerlemeye devam etmekteyiz.
        </p>
            
        <p>
            Hedeflerimize doğru adım adım yürürken; değerlerimizden, ilkelerimizden ve prensiplerimizden de asla ödün vermeyeceğiz. İnsan odaklı, kalite öncelikli misyonumuz doğrultusunda; müşterilerimizle, çalışanlarımızla, paydaşlarımızla güçlü bir bağ kurmaya gayret gösteriyoruz.
        </p>
            
        <p>
            Çünkü şunu çok iyi biliyoruz ki, başarıya ulaşmanın asıl sırrı; bizi oluşturan, bizi bir arada tutan, bizi geliştiren, bizi büyüten tüm unsurların memnuniyetini ve gülümsemesini sağlamaktır.
        </p>
            
        <p>
            Başarılı ve yetenekli yönetim kadromuzla, donanımlı çalışanlarımızla, müşteri memnuniyeti odaklı hizmet anlayışımızla hedef kitlemize ulaşıp, DGR Project'in kurumsal değerini hep birlikte zirveye taşıyacağımıza inancım tam...
        </p>
        <p>
            <h2 class="blockquote-footer" style="font-size:17px;">Bülent DOĞRU <cite title="Source Title">CEO</cite></h2>
        </p>
    </div>
</div>

@endsection
