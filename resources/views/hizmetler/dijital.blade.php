@extends("sayfa")

@section("title") Dijital Dönüşüm | DGR Project @endsection

<div class="page">
    <div class="banner" style="background-image:url({{ asset('img/page/dijital-donusum.jpg')}});"></div>

    <div class="container" style="position: relative;">
        <i class="fa fa-exchange service-logo" style="color: orange; box-shadow: 0px -20px 70px -10px orange"></i>
        <span class="title">Dijital Dönüşüm</span>
    </div>
</div>


@section("icerik")
<div>
    <div class="hizmet-after">
        <div class="cont">
        <div class="container">
            <div class="row hizmet-menu">
                <div data-to="kojenerasyon" class="col-sm list active" style="background-image:url(../img/hizmetler/tub.png)">
                    <span>Örnek Yazı 1</span>
                    <div class="arrow"></div>
                </div>
                
                <div data-to="solar" class="col-sm list" style="background-image:url(../img/hizmetler/sun.png)">
                    <span>Örnek Yazı 2</span>
                    <div class="arrow"></div>
                </div>
                <div data-to="ruzgar" class="col-sm list" style="background-image:url(../img/hizmetler/turbine.png)">
                    <span>Örnek Yazı 3</span>
                    <div class="arrow"></div>
                </div>
                <div data-to="karbon" class="col-sm list" style="background-image:url(../img/hizmetler/c.png)">
                    <span>Örnek Yazı 4</span>
                    <div class="arrow"></div>
                </div>

                        
            </div>
        </div>
        </div>
    </div>

    <div class="container-area">
        <div class="container">
            <div data-name="kojenerasyon" class="tab active">
                <p>
                    <b>Kojenerasyon Nedir?</b><br/>
                    <span>
                        Kojenerasyon, enerjinin hem elektrik hem de ısı formlarında aynı sistemden beraberce üretilmesidir. Bu birliktelik, iki enerji formunun tek tek kendi başlarına ayrı yerlerde üretilmesinden daha ekonomik neticeler oluşturmaktadır.
                    </span>
                </p>
                    
                <div class="hr" style="text-align:center; border-bottom-color: #03a9f4;">
                    <span style="font-size:20px; color: #03a9f4;">Ülkemizde Kojenerasyonun Gelişmesi</span>
                    <div class="triangle" style="margin-left: -20px; left: 50%;border-top-color: #03a9f4;"></div>
                </div>

                <p>
                    <i>Uygulama koşulları ve üretimler dikkate alındığında üç farklı Kojenerasyon tipi mevcuttur:</i>
                </p>
                
                <ol>
                    <li>Endüstriyel Kojenerasyon</li>
                    <li>Isıtma-Soğutma Amaçlı Kojenerasyon (Trijenerasyon)</li>
                    <li>Tarımsal Kojenerasyon</li>
                </ol>

                <p><b>Endüstriyel Kojenerasyon</b>, daha çok sanayi tesislerinin prosesleri için gerekli olan elektrik ve ısı enerjisinin karşılanmasında;
                   <b>Isıtma Soğutma Amaçlı Kojenerasyon</b> toplu yaşam alanlarında (kampüs, hastane, toplu konutlar, oteller, havaalanları vb.); 
                   <b>Tarımsal Kojenerasyon</b> ise seracılık ve balık üretim çiftliklerinde yaygın şekilde uygulanmaktadır.
                </p>
                    
                <ul style="width:600px;">
                    <li><div class="row"> <div class="col-sm-8">Çimento Sanayi</div> <div class="col-sm">% 45</div></div></li>
                    <li><div class="row"> <div class="col-sm-8">Porselen ve Seramik Sanayi</div> <div class="col-sm">% 40</div></div></li>
                    <li><div class="row"> <div class="col-sm-8">Demir-Çelik Metal Ana Sanayii</div> <div class="col-sm">% 35</div></div></li>
                    <li><div class="row"> <div class="col-sm-8">Demir-Çelik Dışı Metal Ana Sanayi</div> <div class="col-sm">% 35</div></div></li>
                    <li><div class="row"> <div class="col-sm-8">Dokuma, Giyim Eşyası ve Deri Sanayii</div> <div class="col-sm">% 25</div></div></li>
                    <li><div class="row"> <div class="col-sm-8">Kimya-Petrol, Kauçuk ve Petrol Ürünleri Sanayii</div> <div class="col-sm">% 25</div></div></li>
                    <li><div class="row"> <div class="col-sm-8">Gıda Sanayii</div> <div class="col-sm">% 20</div></div></li>
                    <li><div class="row"> <div class="col-sm-8">Kağıt, Kağıt Ürünleri ve Basım Sanayii</div> <div class="col-sm">% 20</div></div></li>
                    <li><div class="row"> <div class="col-sm-8">Metal Eşya ve Makine -Teçhizat Sanayii</div> <div class="col-sm">% 10</div></div></li>
                </ul>

                <div class="hr" style="text-align:center; border-bottom-color: #03a9f4;">
                    <span style="font-size:20px; color: #03a9f4;">Neden Kojenerasyon</span>
                    <div class="triangle" style="margin-left: -20px; left: 50%;border-top-color: #03a9f4;"></div>
                </div>

                <p>
                    <span>Dünyanın en gelişmiş birleşik ısı ve güç üretim teknolojisi olan Kojenerasyon, ısı ve elektriğin birlikte üretilebilmesi sayesinde yüksek verimi ve CO2 salınımını azaltmasıyla bir temiz enerji teknolojisidir.
                    Dünyada etkisini kaybetse de Kyoto Protokolüne imza konulmasıyla birlikte, bu yıl da Paris’te alınacak yeni bir ilgili kararla Türkiye, 2018 itibarı ile Karbon salınımı konusunda kısıtlamaya gidilebilecektir. Daha az karbon salınımıyla enerji üretim teknolojisi Kojenerasyon’un önemi daha da artmaktadır.
                    Buhar ve elektiriğin ayrı ayrı üretim tesislerinde; <b><i>1 kWhe üretimi için= 500 gr CO2 / kWhe</i></b> salınımı gerçekleşmektedir.
                    Kojenerasyon tesisleri ürettiği 1kWh elektrik enerjisi karşılığı olmak üzere en az aynı miktarda ısı enerjisi üretmektedir
                    Bu ısı enerjisinin ayrı üretilmesi sonucunda yaklaşık olarak 250 gr CO2 / kWh salınılmaktadır.
                    </span>

                    <p><b style="color:green;"><i class="fa fa-tint"></i> Sonuç: 250 gr CO2 / kWh tasarruf</b></p>

                </p>

            </div>

            <div data-name="solar" class="tab">
                <p>
                    <b>Neden Solar Enerji?</b><br/>
                    <span>                    
                        Güneş enerjisi temiz bir kaynaktır. Günümüzde dünyadaki en önemli çevre sorunu, atmosferdeki karbondioksit oranının artışından ve sera etkisinden kaynaklanan küresel ısınmadır.
                    </span>
                </p>

                <p>
                    <b>Güneş Enerjisi</b><br/>
                    <span>                    
                        Bu nedenle Güneş Enerjisi <b>SÜRDÜRÜLEBİLİR</b> bir özelliğe sahiptir. Elektrik kullanımın olduğu her alanda güneş enerjisi kullanılabilir.
                    </span>

                    <ul>
                        <li>Tükenmeyen ve temiz enerji kaynağıdır</li>
                        <li>Bol miktarda bulunur</li>
                        <li>Dışa bağımlılığı yoktur</li>
                        <li>Kurulum maliyeti hariç ucuz bir kaynaktır</li>
                        <li>Nakliye problemi yoktur</li>
                        <li>Bedava bir kaynak olması</li>
                    </ul>
                </p>

                <p>
                    <div class="hr" style="text-align:center; border-bottom-color: #03a9f4;">
                        <span style="font-size:20px; color: #03a9f4;">Nasıl Çalışır?</span>
                        <div class="triangle" style="margin-left: -20px; left: 50%;border-top-color: #03a9f4;"></div>
                    </div>
                    <span>
                        Fotovoltaik sistemler olarak adlandırılan güneşten elektrik üreten bu sistemler, güneşten gelen ve foton ismini taşıyan tanecikler ile elektrik üretimini gerçekleştirir. Fotonlar üzerilerinde belirli bir enerji taşımaktadır. Taşınan bu enerji güneş panellerinde elektrik üretmek amacıyla kullanılmaktadır. Güneşten gelen enerji paneller tarafından soğurularak sistem içerisinde ki diğer elemanlara iletilmekte ve en sonunda günlük hayatta kullandığımı elektrik enerjisi ortaya çıkmaktadır.
                    </span>
                </p>

                <p>
                    <b>Türkiye’de Güneş Enerjisi</b> <br/>
                    <span>
                        Ülkemiz yenilenebilir enerji kaynakları açısından dünyanın en zengin ülkelerinden biridir. Bu konum ülkemizin enerji açısından kendi kendine yetebilen bir ülke olma yolundaki en yakın çözümüdür. Ülkemiz Güneş Enerjisinde 380 milyar kwh/yıl elektrik üretebilecek bir potansiyele sahiptir.
                    </span>
                </p>
            </div>

            <div data-name="ruzgar" class="tab">
                <p>
                    <b>Neden Rüzgar Enerjisi?</b><br/>
                    <span>
                        Yenilenebilir enerji kaynaklarının en önemlilerinden olan rüzgar enerjisi; temiz, sistem verimi yüksek, miktarı bol ve ücretsizdir. Bilinenin tersine, rüzgar türbinlerinde, gürültü seviyesi oldukça düşüktür.
                    </span>
                </p>

                <p>
                    <b>Rüzgar Enerjisi Kullanım Alanları</b>
                    <ul>
                        <li>Evler</li>
                        <li>İşletmeler</li>
                        <li>Park, bahçe ve cadde aydınlatmaları</li>
                        <li>Sinyalizasyon</li>
                        <li>Sulama sistemleri</li>
                        <li>Karavan, tekne ve mobil istasyonlar</li>
                        <li>Elektrik enerjisi ihtiyacı olabilecek her yer <i>(Rüzgar ölçümleri uygun rapor edilmeyen yerlerde tavsiye edilmez)</i></li>
                    </ul>
                </p>


                <p>
                    <b>Pervane Boyu ve Maksimum Güç Çıkışı</b><br/>
                    <ul style="width:500px;list-style-type:none;padding:0px;">
                        <b style="color: #555"><li><div class="row"> <div class="col-sm-8">Pervane Çapı (Metre)</div> <div class="col-sm">Güç Çıkışı (Kw)</div></div></li></b>
                        <li><div class="row"> <div class="col-sm-8">10</div> <div class="col-sm">25</div></div></li>
                        <li><div class="row"> <div class="col-sm-8">17</div> <div class="col-sm">100</div></div></li>
                        <li><div class="row"> <div class="col-sm-8">27</div> <div class="col-sm">225</div></div></li>
                        <li><div class="row"> <div class="col-sm-8">33</div> <div class="col-sm">300</div></div></li>
                        <li><div class="row"> <div class="col-sm-8">40</div> <div class="col-sm">500</div></div></li>
                        <li><div class="row"> <div class="col-sm-8">44</div> <div class="col-sm">600</div></div></li>
                        <li><div class="row"> <div class="col-sm-8">48</div> <div class="col-sm">750</div></div></li>
                        <li><div class="row"> <div class="col-sm-8">54</div> <div class="col-sm">1000</div></div></li>
                        <li><div class="row"> <div class="col-sm-8">64</div> <div class="col-sm">1500</div></div></li>
                        <li><div class="row"> <div class="col-sm-8">72</div> <div class="col-sm">2000</div></div></li>
                        <li><div class="row"> <div class="col-sm-8">80</div> <div class="col-sm">2500</div></div></li>
                    </ul>
                </p>

                <div class="hr" style="text-align:center; border-bottom-color: #03a9f4;">
                    <span style="font-size:20px; color: #03a9f4;">Avantaj ve Dezavantaj</span>
                    <div class="triangle" style="margin-left: -20px; left: 50%;border-top-color: #03a9f4;"></div>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <ol>
                            <li>Temiz çevreyi kirletmeyen, yakıt gideri olmayan bir enerjidir.</li>
                            <li>Dışa bağımlılık yoktur, sadece yerel imkanlarla enerji elde edilebilir.</li>
                            <li>İşletme masrafları diğer enerji kaynakları içinde en az olanıdır</li>
                            <li>Karmaşık makineler değillerdir, operatöre ihtiyaç duyulmadan enerji sağlanabilir</li>
                            <li>Hava kirliliği yaratacak emisyon ve atık ısı oluşturmazlar, doğaya en az tahribat bırakan enerji türüdür.</li>
                            <li>Çok yer kaplamaz, patlama ihtimali yoktur, radyasyon yayılması olmaz.</li>
                            <li>Rüzgar türbinlerinin işletmeye alınması, inşaatına başlanmasından sonra 3ay gibi kısa bir süre alır.</li>
                            <li>Rüzgar türbinleri istenilen boyutlarda imal edilip istenilen miktarda enerji elde edilebilir.</li>
                            <li>Birim kWh başına düşen istihdam oranı diğer enerji kaynaklarından yüksektir(kömür santrallerinden %27,doğalgaz çevrimli enerjilerden %66 fazla)</li>
                            <li>Aniden ortaya çıkan başka maliyetleri yoktur. Bu sebepten gereksiz vergi artışlarıyla vatandaşa yük olmaz.</li>
                        </ol>
                    </div>

                    <div class="col-sm">
                        <ol>
                            <li>Rüzgara bağımlı olduğumuzdan rüzgarın mevsimsel olarak azalması söz konusudur</li>
                            <li>Rüzgar miktarına bağımlıdır.Rüzgar yoğunluğunun belirlenmesi uzun süreçler gerektirir.</li>
                            <li>Türbinin ilk yatırım maliyetlerinin yüksek olması söz konusudur.Ancak bu giderek azalma göstermektedir.</li>
                            <li>Türbin kanatlarının dönüşü sırasında kopması gibi bir durum çevreye zarar verebilir.</li>
                            <li>Elektromanyetik dalgaları etkileyebilir.</li>
                        </ol>
                    </div>
                </div>
                
            </div>

            <div data-name="karbon" class="tab">
                <p>
                    <span>
                        Ticari alan kullanıcıları <i>( okullar, belediyeler, fabrikalar, oteller vb. )</i> için sıfır ve tek atık çözümümüz ile atık geri dönüşümü etkin hale getiriyoruz. Geri dönüşümün küçültülmesi Karbon modelimizle artık çok daha kolay. Atık kolay idare edilerek atık çıktısı olmadan tüm atık faydalı kullanılabilir karbona çevrilmektedir.
                    </span>
                </p>
                
                <p>
                    <span>
                    Firmaların yüksek atık problemlerini emisyon ve atık olmadan etkili ucuz bir şekilde çözmektedir.
                    Mevcut sistemimiz hammaddelerin% 95'ini geri kazanır ve kapalı bir sistemde enerji üretir. Böylece enerji ve net ham maddelerin gelirini kazanırsınız.
                    </span>
                </p>

                <p>    
                    <b>Başla</b></br>
                    Yaptığınız gibi atıkları toplayın. Tek akış! Neden? Çünkü ürünlerin çoğu hidrokarbon bazlıdır.
                </p>
                
                <p>
                    <b>Local Provider</b></br>
                    Yerel geri dönüşüm sağlayıcınız sistemimizi çalıştırıyor. Her yere taşınabilir <i>(3x5x4 metre)</i>
                </p>    
                    
                <p>
                    <b>Geri Dönüşüm</b><br/>
                    Atık hammaddelere ve enerjiye dönüştürülür. Bu etkili bir piroliz işlemine dayanmaktadır. Bu malzemeleri piyasada satmanın yollarını sizlere sunuyoruz.
                </p>    
                    
                <p>
                    <b style="color: green">Kazandınız!</b><br/>
                    Sistem kapalı devre. Geri dönüşüm teklifi nerlyto% 93 ve 0-Atık.
                </p>

                <p>
                    Atıklarınızı hava geçirmez konteynırda toplayın ve Çözümümüz olan sistemimize itin. Kolay kullanım ve küçük boyutlu <i>(3x6metre)</i>
                </p>
                
                <p>
                    İşlemi başlatın ve atıkların% 99'una kadar tekrar kullanın ve mevcut her yerde emisyon olmadan% 90 CO² tasarruf edin. Atıklarınızı yerinde azaltın ve yeşil enerji üretin.
                </p>
            </div>

            <div data-name="bio" class="tab">
                <p>
                    <b>Biyogaz tesisi</b><br/>
                    <span>
                        Kontrollü mikrobiyolojik fermantasyon ile otomasyon sisteminin entegre edildiği inşaat ve teknolojik ekipmanların oluşturduğu bir komplekstir. Bir biyogaz tesisinde İnşaat yapıları, tesis ekipmanları ve tasarım , hammadde ve projenin özelliklerine bağlı olarak farklıdır. Iki kademeli ve tek kademeli biyogaz kompleksleri vardır. Tek aşamalı teknoloji hammaddelerin çoğu için kullanılır ve bu teknoloji, bir baz olarak kabul edilebilir. İki kademeli teknolojide ilave hidroliz reaktörü mevcuttur. Baz biyogaz tesisi, aşağıdaki bileşen ve yapılar gibidir:
                    </span>
                </p>
                
                <div class="hr" style="text-align:center; border-bottom-color: #03a9f4;">
                    <span style="font-size:20px; color: #03a9f4;">Verimlilik Tablosu</span>
                    <div class="triangle" style="margin-left: -20px; left: 50%;border-top-color: #03a9f4;"></div>
                </div>

                <table style="width:100%">
                        <tbody>
                            <tr>
                                <th><b>Ham Maddeler</b></th>
                                <th><b>Km</b></th>
                                <th><b>Organik kuru madde</b></th>
                                <th><b>Biyogaz verimi m<sup>3</sup> / Ton</b></th>
                                <th><b>Metan CH 4 %</b></th>
                            </tr>
                            <tr>
                                <td>Çöp</td>
                                <td>22.5</td>
                                <td>82.5</td>
                                <td>74.3</td>
                                <td>60.0</td>
                            </tr>
                            <tr>
                                <td>Koyun gübresi</td>
                                <td>30.0</td>
                                <td>80.0</td>
                                <td>108.0</td>
                                <td>55.0</td>
                            </tr>
                            <tr>
                                <td>Sığır sıvı gübre</td>
                                <td>10,0</td>
                                <td>85.0</td>
                                <td>34.0</td>
                                <td>55.0</td>
                            </tr>
                            <tr>
                                <td>Taze inek gübresi</td>
                                <td>25.0</td>
                                <td>80.0</td>
                                <td>90.0</td>
                                <td>50.0</td>
                            </tr>
                            <tr>
                                <td>Süt sığır gübresi</td>
                                <td>8.5</td>
                                <td>85</td>
                                <td>20.2</td>
                                <td>55.0</td>
                            </tr>
                            <tr>
                                <td>At gübresi</td>
                                <td>28.0</td>
                                <td>75.0</td>
                                <td>63.0</td>
                                <td>55.0</td>
                            </tr>
                            <tr>
                                <td>Kuru tavuk gübresi</td>
                                <td>40.0</td>
                                <td>75.0</td>
                                <td>80.0</td>
                                <td>55.0</td>
                            </tr>
                            <tr>
                                <td>Taze tavuk gübresi</td>
                                <td>15.0</td>
                                <td>75.0</td>
                                <td>100.0</td>
                                <td>65</td>
                            </tr>
                        </tbody>
                    </table>
            </div>                
        </div>
    </div>
</div>
<script src="{{ asset('vendor/jquery/jquery.js')}}"></script>
<script>
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
