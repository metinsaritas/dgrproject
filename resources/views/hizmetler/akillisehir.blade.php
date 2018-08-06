@extends("sayfa")

@section("title") Akıllı Şehir Sistemleri | DGR Project @endsection

<div class="page">
    <div class="banner" style="background-image:url({{ asset('img/page/akilli-sehir-sistemleri.jpg')}});"></div>

    <div class="container" style="position: relative;">
        <i class="fa fa-cogs service-logo" style="color: red; box-shadow: 0px -20px 70px -10px red"></i>
        <span class="title">Akıllı Şehir Sistemleri</span>
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

                <div data-to="tarim" class="col-sm list" style="background-image:url(../img/hizmetler/traktor.png)">
                    <span>Akıllı Tarım Sistemleri</span>
                    <div class="arrow"></div>
                </div>

                <div data-to="saglik" class="col-sm list" style="background-image:url(../img/hizmetler/saglik.png)">
                    <span>E-Sağlık Sistemleri</span>
                    <div class="arrow"></div>
                </div>
                
                <div data-to="yakittakip" class="col-sm list" style="background-image:url(../img/hizmetler/detail.png)">
                    <span>Araç Yakıt Takip Sistemleri</span>
                    <div class="arrow"></div>
                </div>

                <div data-to="havagurultu" class="col-sm list" style="background-image:url(../img/hizmetler/kirli.png)">
                    <span>Hava Kirliliği ve Gürültü Takip Sistemleri</span>
                    <div class="arrow"></div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="container-area">
        <div class="container" style="padding-bottom:70px;">
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
                <div class="row">
                    <div class="col-sm">
                        <p>
                            Günümüzde akıllı şehirlerin bir parçası olan Akıllı Sulama Sistemleri ile dünyamızın en büyük problemlerinden birine çözüm sunuyoruz.Suyuetkin kullanabilmek için suyun verimli bir şekilde kullanılabiliyor olması gerekmektedir.
                        </p>
                        <p>
                            Günümüzde park, bahçe, yeşil alan ve refüjlerin sulamasında kullanılan suyun orantısız ve ölçülebilir olmamasından kaynaklı su tüketiminin fazla olması su kaynaklarımızıtüketmemize neden olmaktadır.
                        </p>
                        <p>
                            Akıllı sulama çözümümüzle birlikte toprak nemini toprakta dikili olan bitkinin ihtiyacı doğrultusunda hesaplayarak bu verileri günlük, haftalık ve aylık olarak bölgenin hava durumunu ölçümleyerek toprağın ihtiyacı doğrultusundaotomatikyapan bir sistemdir.
                        </p>
                        <p>
                            Merkezi kontrol ünitemizle sisteme entegre olan sensör ve vanaları uzaktan takip ederek tek bir merkezden yönetmemize olanak tanımaktadır.
                        </p>
                    </div>

                    <div class="col-sm">
                        <img src="{{ asset('img/icerik/sulama1.png') }}"/>
                    </div>
                </div>
                
                <p>
                    <b>Akıllı Sulama Sistemi Parçaları</b><br/>
                    <ul>
                        <li>Nem Sensörleri</li>
                        <li>Debi Ölçer</li>
                        <li>Su Pompası Kontrolöri</li>
                        <li>Akıllı Vana</li>
                        <li>Gateway</li>
                        <li>Secure Wifi A</li>
                    </ul>
                </p>

                <p>
                    <ul style="list-style-type: none;padding-left:0px;">
                        <li><i class="fa fa-angle-double-right"></i> Akıllı sulama sistemleri, su kaynaklarının etkin ve tasarruflu kullanımı ve kaynakların optimize ve etkin kullanımı için benzersiz bir çözümdür.</li>
                        <li><i class="fa fa-angle-double-right"></i> Su sıkıntısı yaşayan ülkelerde su tasarrufu ve ekilen bitkilere göre sulama sistemi yapılması sayesinde hem tarım, hem park ve bahçeler hem sudan hem de tarımın daha az kaynak kullanarak gelişmesini sağlar. </li>
                        <li><i class="fa fa-angle-double-right"></i> Tarım arazilerinin akıllı sulama ile donatıldığında %55, park/bahçe gibi halka açık alanlardaki yerlerin akıllı sulama ile donatılmasında ise %60’a yakın su ve kaynak <i>(elektrik, bitki, çim gibi)</i> tasarrufu sağlayacağı ön görülmektedir. </li>
                        <li><i class="fa fa-angle-double-right"></i> Sistemin çalışması için kullanılacak enerjinin güneş ışınlarından alınan kaynak ile yapılması halinde ise bu verimlilik ve kaynak kullanımının %75 üzerinde olacağı tahmin edilmektedir.</li>     
                    </ul>
                </p>

                <div class="hr" style="text-align:center; border-bottom-color: #03a9f4;">
                    <span style="font-size:20px; color: #03a9f4;">Su Kaçağı Tespit Sistemi</span>
                    <div class="triangle" style="margin-left: -20px; left: 50%;border-top-color: #03a9f4;"></div>
                </div>

                <p>
                    <div class="row">
                        <div class="col-sm">Su dağıtım şebekelerinin en büyük problemlerinden biri arızalanan boruların tespitinin zorluğudur. Geleneksel olarak deneme yanılma veya tahmin etme yoluyla arızanın çözümüne ulaşılmaktadır. Bu süreç de arızadan etkilenen bölgenin uzun süre susuz kalma sonucunu doğurmaktadır. Aynı zamanda arıza tespiti için harcanan zaman,iş ve para gücü ülkemiz kaynaklarından her geçen gün eksilmektedir. Bunun önüne geçmek için akıllı sistem entegrasyonlarından yararlanmak kaçınılmaz olmuştur.</div>
                        <div class="col-sm">
                            <img src="{{ asset('img/icerik/sulama2.png')}}"/>
                        </div>
                    </div>
                    
                </p>
                
                <p>
                    Akıllı su kaçağı tespit sistemleri kısa sürede arıza tespiti için etkin bir çözümdür. Böylece arızadan etkilenen hat kolay bir şekilde tespit edilip revize etme işlemleri hemen başlayabilmektedir. Bunun sonucu olarak da arızadan etkilenen bölge uzun süreli kesintilere maruz kalmamaktadır. Arızanın kısa sürede ve pratik bir şekilde bulunmasıyla ise iş gücü, zaman ve maddi kayıplar minimuma indirilmektedir.
                </p>
                
                <div style="text-align:center;">
                    <img src="{{ asset('img/icerik/sulama3.png')}}"/>
                </div>

            </div>

            <div data-name="tarim" class="tab">
                <p>
                    <b>Akıllı Tarım Nedir?</b><br/>
                    <span>
                        Akıllı tarım, modern bilişim yöntemlerinin tarım üretimlerinde verimliliği arttırması amacıyla kullanılmaktadır. Bu yönteme birçok yerde <i style="color:green;">“Yeşil Devrim”</i> de denilmektedir. Nesnelerin interneti dediğimiz kavram içerisinde anabileceğimiz akıllı tarım sayesinde, üreticinin işleri kolaylaşmakta aynı zamanda da üründe verim ve kalite artmaktadır. Akıllı tarım yöntemi ile çiftçiler, tarlalarını tablet ya da telefondan kolay bir şekilde kontrol edebilecek ve sulamaya kadar birçok işlemi uzaktan halledebilecektir.
                    </span>
                </p>

                
                <div class="hr" style="text-align:center; border-bottom-color: #03a9f4;">
                    <span style="font-size:20px; color: #03a9f4;">Tarımdaki Yeri</span>
                    <div class="triangle" style="margin-left: -20px; left: 50%;border-top-color: #03a9f4;"></div>
                </div>

                <p>
                        Tarım sektöründe yeni yeni kullanılmaya başlanan nesnelerin interneti kavramı sayesinde, verimliliğin en üst düzeye çıkarılması amaçlanmaktadır. Tarım için üretilen birçok akıllı sistem sayesinde doğal kaynaklar da gereğinden fazla kullanılmayarak maliyeti düşürmektedir. Hal böyle olunca üretilen ürünlerden daha fazla kazanç sağlanmakta ayrıca çevreye de zarar verilmemektedir. Akıllı tarım ile birlikte özellikle son yıllarda yavaş yavaş bütün ülkelerin etkisi altına girdiği su kıtlığı riskini de azaltmak hedeflenmektedir. Çünkü bu yöntem sayesinde çiftçiler nerede ne kadar su kullanması gerektiğini bilecek ve israf yapmayacaklardır.
                </p>

                <div class="row">
                    <div class="col-sm">
                        <p>
                            <b>Etkileri</b><br/>
                            <ul>
                                <li>Tarımda kimyasalların kullanımının azalması ve buna bağlı olarak ürünlerin daha sağlıklı ve kaliteli olarak üretilmesi. Öte yandan bu kimyasalların yarattığı maliyetin de bitirilmesi.</li>
                                <li>Akıllı tarımın kullanılmasıyla beraber çevre kirliliğinin de azaltılması hedeflenmektedir. Hatta kirliliğe bağlı olarak gün geçtikçe daha tehlikeli hale gelen küresel ısınma da bu yolla azaltılabilir.</li>
                                <li>Nesnelerin internetinin tarım sektöründe kullanılmasının bir diğer avantajı da maliyetlerin düşürülmesidir. Her doğal kaynağın yeterli miktarda kullanılmasını sağlayan bu sistemler sayesinde, boşa kullanım olmamaktadır.</li>
                            </ul>
                        </p>
                    </div>

                    <div class="col-sm">
                        <img style="width:540px; border-radius: 8px;" src="{{ asset('img/icerik/tarim1.png')}}"/>
                    </div>
                </div>
            </div>

            <div data-name="saglik" class="tab">
                <div class="hr" style="text-align:center; border-bottom-color: #03a9f4;">
                    <span style="font-size:20px; color: #03a9f4;">Mobil Sağlık Çözümleri</span>
                    <div class="triangle" style="margin-left: -20px; left: 50%;border-top-color: #03a9f4;"></div>
                </div>

                <p>
                    <b>NoMED-AFProjesi</b><br/>
                    <span>
                        Erken tespitte invaziv olmayan izleme sessiz atriyal fibrilasyon (AF) algılama. 
                        <br/>
                        Amaç, 65 yaş üstü hastalarda erken evre sessiz Atriyal Fibrilasyonu (AF) saptamak için bir çözümdür. Proje,  bozukluğun sıklığı hakkında veri sağlamak ve yeni tedavi yöntemlerinin geliştirilmesi için temel oluşturacak.
                        <br/><br/>
                        Sessiz atriyal fibrilasyon (AF), serebral inme riskini beş kat artıran en sık görülen kalp hızı bozukluklarından biridir.  Araştırmalar AF yaşantı sıklığı ile yaş arasında sık görülen güçlü bir korelasyona işaret eder ve yaşlıların çoğu risk  altındadır.
                    </span>
                </p>

                <div class="row">
                    <div class="col-sm-4">
                        <b>EKG Yelek</b>
                        <ul>
                            <li>Sinyali 30 gün boyunca kaydetmek için gelişmiş bir çözüm</li>
                            <li>Rahatlık (ışık, vücuda uyarlanmış)</li>
                            <li>Biyouyumlu materyal</li>
                            <li>Cildin tahriş olmasına neden olmayan, ancak çok kaliteli kayıtlar sunan özel tekstil elektroları</li>
                        </ul>
                    </div>
                    <div class="col-sm">
                        <img src="{{ asset('img/icerik/saglik1.png') }}"/>
                    </div>
                    <div class="col-sm-4">
                        <b>NoMED-AF Sensör Yelek için Kayıt Cihazı</b>
                        <ul>
                            <li>Sensör Kayıt Cihazından Uzaktan Tıbbi Bakım Merkezine veri aktarım istasyonu</li>
                            <li>İzleme Merkezi'nden (3G, WiFi veLAN) geniş iletişim seçenekleri</li>
                            <li>Bakım gerektirmeyen</li>
                            <li>24 Saatten uzun süren pil</li>
                            <li>Küçük Boy, minimum ağırlı</li>
                        </ul>
                    </div>
                    <div class="col-sm">
                        <img src="{{ asset('img/icerik/saglik2.png') }}"/>
                    </div>
                </div>

                <p>
                    <div class="row">
                        <div class="col-sm-9">
                            <b>Yaşam Bileziği</b><br/>
                            <span>
                                Hastalar arasında güvenlik hissini artırır ve onlara daha fazla bağımsızlık verir . Acil bir SOS düğmesi vardır, bu da hastaların Uzak Tıbbi Bakım Merkeziyle iletişime geçmesine ve yardım çağırmasına izin verir. Bilezik içine yerleştirilen sensör otomatik olarak bir düşüş tespit eder ve Uzaktan Tıbbi Bakım Merkezi'ne acil arama yapar . Dahili Yaşam Kartı sayesinde, tıbbi personel, kişisel ayrıntılar, yaş, kan grubu, alerji, teşhis edilen hastalıklar, öngörülen ilaçlar ve yakın akrabalık iletişim bilgileri gibi hastanın acil durum bilgilerini okuyabilir.
                            </span>
                        </div>
                        <div class="col-sm">
                            <img src="{{ asset('img/icerik/saglik3.png') }}"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-9">
                            <b>Cardio Dial</b><br/>
                            <span>
                                Kullanımı kolay taşınabilir dijital Holter olay izleme cihazı, EKG testlerinin rahatlıkla yapılmasına olanak tanır. Kaydedici, hastanın spesifik semptomlarını hissettiği anda doğrudan göğüs üzerine yerleştirilir. Sinyal kaydedilir ve Uzak Madikal Bakım Merkezi'ne iletilir. Sinyal kaydedilirken, mevcut kalp aktivitesini izlemek mümkündür. Cihaz 30 saniyelik EKG sinyallerini tek kablolu bir modda kaydeder.
                            </span>
                        </div>
                        <div class="col-sm">
                            <img src="{{ asset('img/icerik/saglik4.png') }}"/>
                        </div>
                    </div>

                </p>

                <p>
                    <i>Akıllı Şehirleri, Akıllı ve Sağlıklı Şehirlere çevirecek olan çözümlerimiz.</i>
                </p>

                <p>
                    <b>Analitik ve RaporlamaPlatformu</b><br/>
                    <span>
                        Bu çözüm nüfus sağlığı verileri analizi için bir araçtır. Toplanan  ve analiz edilen veriler sağlık bakımı ve önleme tedbirleri için  bilgi sağlar
                    </span>
                </p>

                <p>
                    <b>Sağlıklı Şehir Konseptinin Sundukları</b><br/>
                    <ul>
                        <li>Kapsamlı sağlık hizmetleri</li>
                        <li>Hastalara Holistik yaklaşım</li>
                        <li>Gelişmiş tıbbi analitik</li>
                        <li>Tüm sosyal grupları kapsayan bakım</li>
                        <li>Tıbbi verilere daha kolay erişim</li>
                        <li>Sağlık hizmetlerinin delokalizasyonu</li>
                    </ul>
                </p>
            </div>

            <div data-name="yakittakip" class="tab">
                <img src="{{ asset('img/icerik/enerjitakip1.png') }}"/>
                <img src="{{ asset('img/icerik/enerjitakip2.png') }}"/>
                <img src="{{ asset('img/icerik/enerjitakip3.png') }}"/>
                <img src="{{ asset('img/icerik/enerjitakip4.png') }}"/>
            </div>

            <div data-name="havagurultu" class="tab">
                <p>
                    <b>Product-Plus-Service Akıllı Sehir</b> çözümü şehirlerin hava ve gürültü kirliligi ölçümü için gerekli çeşitli sensörler ile donatılmış olup; Partikül Madde (PM), gaz, ultraviyole (UV), gürültü ve iklim ölçümü yapabilmektedir.
                </p>

                <p>
                    <b>Temel Faydalar</b><br/>
                    <ul>
                        <li>İhtiyacı olan enerjiyi güneşten alır</li>
                        <li>Hızlı ve Kolay Entegrasyon</li>
                        <li>Day onecloud connectivity</li>
                        <li>End-to-end enterprise grade security</li>
                    </ul>
                </p>

                <p>
                    <i>Tarihi Yarımada’da Hava/Gürültü Kirliliği Ölçümü</i>
                    <img src="{{ asset('img/icerik/havagurultu1.png')}}"/>
                </p>

                <p>
                    <b>Sonraki Adım</b><br/>
                    <ul>
                        <li>Veri Toplama ve Analizi</li>
                        <li>Analiz ve raporlama sonucunda Belediye’nin alacağı aksiyonlara katkı sağlama</li>
                        <li>Sağlıklı Şehir Planlaması</li>
                        <li>Ulaşım–Yayalaştırma Projesi</li>
                        <li>Isınma Yönteminin değiştirilmesi</li>
                        <li>Isınma Yönteminin değiştirilmesi -Kömür->Doğal Gaz</li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('vendor/jquery/jquery.js')}}"></script>
<script>
    $(function() {
        let hash = window.location.hash;
        if (hash && hash.length >= 2) {
            hash = hash.slice(1);
            $("[data-to="+hash+"]").click();
            if ("history" in window) {
                history.replaceState("", document.title, 
                    window.location.pathname + window.location.search);
            }
        }
    })

    $(document).on("click", ".hizmet-menu .list[data-to]:not(.active), footer ul.links li[data-to]", function() {
        $(".hizmet-menu .list.active[data-to]").removeClass("active");
        let to = $(this).data("to");
        $(".hizmet-menu .list[data-to="+to+"]").addClass("active");
        $(".container-area .tab").hide();
        $(".container-area .tab").filter("[data-name='"+to+"']").show();

        let s = $("body").width() > 768 ?  280 : 220;
        $("body").animate({scrollTop: s}, 300);
    });
</script>
@endsection
