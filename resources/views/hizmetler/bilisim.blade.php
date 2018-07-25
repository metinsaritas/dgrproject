@extends("sayfa")

@section("title") Bilişim Sistemleri | DGR Project @endsection

<div class="page">
    <div class="banner" style="background-image:url({{ asset('img/page/bilisim-sistemleri.jpg')}});"></div>

    <div class="container" style="position: relative;">
        <i class="fa fa-desktop service-logo" style="color: #03a9f4; box-shadow: 0px -20px 70px -10px #03a9f4"></i>
        <span class="title">Bilişim Sistemleri</span>
    </div>
</div>
@section("icerik")
<div>
    <div class="hizmet-after">
        <div class="cont">
        <div class="container">
            <div class="row hizmet-menu">
                <div data-to="kurumsal" class="col-sm list active" style="background-image:url(../img/hizmetler/briefcase.png)">
                    <span>Kurumsal Sistem Çözümleri</span>
                    <div class="arrow"></div>
                </div>
                
                <div data-to="servis" class="col-sm list" style="background-image:url(../img/hizmetler/api.png)">
                    <span>Servis Destek Hizmetleri</span>
                    <div class="arrow"></div>
                </div>
                <div data-to="danismanlik" class="col-sm list" style="background-image:url(../img/hizmetler/online-support.png)">
                    <span>Danışmanlık ve Dışkaynak Hizmetleri</span>
                    <div class="arrow"></div>
                </div>
                <div data-to="network" class="col-sm list" style="background-image:url(../img/hizmetler/wifi.png)">
                    <span>Network ve Güvenlik Çözümleri</span>
                    <div class="arrow"></div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="container-area">
        <div class="container">
            <div data-name="kurumsal" class="tab active">
                <div class="row">
                    <div class="col-sm">
                        <div><b>Donanım Çözümleri</b></div>
                        <ul>
                            <li>Server Çözümleri</li>
                            <li>Depolama Çözümleri</li>
                            <li>Network Çözümleri</li>
                        </ul>
                    </div>

                    <div class="col-sm">
                        <div><b>Uygulama Çözümleri</b></div>
                        <ul>
                            <li>Microsoft AC Directory Altyapıları</li>
                            <li>Microsoft Mesajlaşma Altyapıları </li>
                            <li>Microsoft Lisanslama Çözümleri </li>
                            <li>EBA Süreç Yönetmi Çözümleri </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                        <div class="col-sm">
                            <div><b>Yazılım Çözümleri </b></div>
                            <ul>
                                <li>Firmanın kullanmak istediği çözümün analizi, </li>
                                <li>Çözüm ile ilgili açık kaynak ürün ve lisans analizleri</li>
                                <li>Firma ile birlikte ürün seçimi, </li>
                                <li>Seçilen ürün ile ilgili uzun dönem stratejilerininbelirlenmesi, </li>
                            </ul>
                        </div>
    
                        <div class="col-sm">
                            <div><b>Sanallaştırma Çözümleri</b></div>
                            <ul>
                                <li>Sunucu Sanallaştırma </li>
                                <li>Masaüstü Sanallaştırma</li>
                                <li>Uygulama Sanallaştırma</li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <b>Alt Yapı Hizmetleri</b><br/> 
                        DGR  teknoloji  hizmetleri  sertifikalı  ve uzman  sistemlerine kadrosunun network bütünsel bakışı ve tecrübesi ile müşterilerine sorunsuz ve yıllarca kullanabilecekleri yapısal kablolama sistemleri kurmaktayız. 
                        
                        <br/><br/>
                        <ul>
                            <li>
                                <b>Alt yapı Yenileme Hizmetleri</b>
                                <ul>
                                    <li>DüzenlemeHizmetleri</li>
                                    <li>Alt Yapı Bakım-Onarım Hizmetleri</li>    
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <b>Periyodik Bakımlar</b><br/>

                        Tüm BT Sistemlerinizin kesintisiz çalışmasını için koruyucu önlemlerinin alınmasını sağlayabilmekte, sizler ile birlikte belirlediğimiz düzenli periyotlarda ve zaman dilimlerinde, ürünlerinize tüm bakım marka bağımsız hizmetlerini verebilmekteyiz. Bunun neticesinde, anlaşma süresince ürünlerinizin arıza adetlerini azaltmakta, donanım risklerinizi minimuma idirmekte ve yaşayabileceğiniz kesinti sürelerinizi ortadan kaldırabilmekteyiz.
                    </div>
             </div>

            <div data-name="servis" class="tab">                    
                <ul>
                    <li>Donanım Bakım ve Tamir Hizmetleri</li>
                    <li>Sistem Destek Hizmetleri (7x24 Raporlanabilir, Müdahale ve Çözüm)</li>
                    <li>Network Destek Hizmetleri</li>
                    <li>Danışmanlık Hizmetleri</li>
                    <li>Yerinde Destek ve Eleman Kiralama Hizmetleri</li>
                </ul>

                <div class="hr" style="text-align:center; border-bottom-color: #03a9f4;">
                    <span style="font-size:20px; color: #03a9f4;">Bölgesel 7X24 Teknik Destek Hizmetlerinin Avantajları</span>
                    <div class="triangle" style="margin-left: -20px; left: 50%;border-top-color: #03a9f4;"></div>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <div class="title">
                            <i class="fa fa-angle-double-right"></i> Önceliklendirme
                        </div>
                        <span class="text">
                            Teknik Hizmetlerimizin Destek anlaşmasıyla sunulma amaçlarından birisi, firmaların talep edeceği servislerde öncelikli destek alabilecek olmasıdır.
                        </span>
                    </div>
                    <div class="col-sm">
                        <div class="title">
                            <i class="fa fa-angle-double-right"></i> Maliyetlerin düşürülmesi
                        </div>
                        <span class="text">
                            Anlaşma kapsamı dışında kalan farklı destek taleplerinde firmalara yansıyacak olası maliyetlerin düşürülmesi.
                        </span>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="title">
                            <i class="fa fa-angle-double-right"></i> Müşteri Memnuniyetinin Arttırılması
                        </div>
                        <span class="text">
                            Şirketler arası iletişimin arttırılarak müşteri hassasiyetlerinin göz önünde bulundurulabilmesi ve müşteri memnuniyetinin arttırılması. Bu sayede DGR’yi tercih edenler sadece ürünü ya da insan kaynağını değil, DGR’nin tüm yetkinliklerini ve kusursuz desteğini de arkalarına alarak geleceğe daha güvenle bakabilmektedirler.
                        </span>
                    </div>

                    <div class="col-sm">
                        <div class="title">
                            <i class="fa fa-angle-double-right"></i> SLA Yönetimi
                        </div>
                        <span class="text">
                            Verilecek hizmetin servis seviyelerinin yazılı olarak tanımlanabilmesi ve çağrı açıldıktan sonra çözüm sağlama süresinin anlaşma kapsamında belirlenmiş olması. Bu sayede, verilen hizmetlerin aylık düzenli periyotlarda raporlanıp müşterilerimize sunulabilmesi.
                        </span>
                    </div>
                </div>
            </div>

            <div data-name="danismanlik" class="tab">
                <div>
                    <b>Uzmanlık Dışı Yüksek Nitelikli Kaynak Eksikliklerinizi Giderelim</b>
                    <p>Dış Kaynak Hizmeti tercih nedenlerinin en önemlisi, kritik ve yüksek yetkinlikleri olan insan kaynağı eksiklerinin giderilmesidir. Yüksek fiyatlı alternatiflerin maliyetini telafi edecek özellikle Bilişim Sistemleri alanında bilgi, sertifika ve tecrübeye sahip, kendi ihtiyaçlarına uygun uzman çalışanlar, örneğin mühendisler tercih edilmektedir. Bu sebeple şirketler kendi uzmanlık alanları dışında özellikle Bilişim Teknolojileri sektöründe uzmanlıkları yüksek olan insan kaynağı eksiklerini, belirli sürelerle sözleşmeli olarak DGR’den BT uzmanı ya da yöneticileri kiralayarak giderebilmektedirler.</p>
                </div>

                <div>
                    <b>Sürekliliğinizi Arttırıp Risklerinizi Düşürelim</b>
                    <p>Yüksek oranda personel değişikliği, yeni personellerin işe alımı ve bordrolama maliyetleri, oryantasyon eğitimleri ve adaptasyon süreleri, iş devirleri ve benzeri süreçler, firmalara ağır mali yükümlülükler getirmektedir. DGR ile yapılacak Dış Kaynak Hizmetleri sözleşmeleri sayesinde bu olumsuz süreçler ile karşılaşılmamakta, hızlı ve yüksek kalitede hizmet temin edilmekte, operasyonların belirsizlik ve tutarsızlık yaratabilecek yönleri ortadan kaldırılmakta, sürekliliği arttırılmakta ve yaşanabilecek riskler minimize edilmektedir.</p>
                </div>

                <div>
                    <b>Kendi Uzmanlık Alanlarınıza Konsantre Olmanızı Sağlayalım</b>
                    <p>Gerekli çevresel ve birbirine bağlı IT operasyonlarını Dış Kaynak Hizmetleri olarak kiralamak en sık karşılaşılan çözüm seçeneklerindendir. Bu konuda sağlanan hizmetler yöneticilere, kendi uzmanlık alanlarında tanımlanamayan sistem yönetimi gibi kritik ve hayati önem taşıyan konular ile uğraşmak zorunda kalmadan, kendilerine Rekabet avantajı sağlayan yeteneklere odaklanmak ve temel iş konularına konsantre olabilme imkânı sunabilmektedir. Temel yeteneklerin dışında kalan BT faaliyetlerde ise, bu konularda uzmanlaşmış olan DGR aracılığıyla gerekli kalite standartlarına uygun bir biçimde malzeme yâda hizmet girdisi sağlayın. Kullanıcı (pc, printer, monitör, notebook, thinclient) ve yönetim (Server, Storage, Autoloader, Network, Firewall) tarafındaki tüm ürünlerinizi 19 yıldır sektör tecrübesi olan ve bu hizmetleri yöneten DGR tarafından uzmanlar ile yönetin, güncel teknoloji avantajlarından faydalanın. </p>
                </div>

                <div>
                    <b>Maliyetlerin Azaltılması Konusunda Verimliliğinizi</b>
                    <p>BT alanında işçilik hizmeti ve maliyetlerinizin artmasını engelleyerek, güncel teknolojinin sağladığı tüm avantajları sizlere özel çözümler üreterek en uygun maliyetler ile tarafınıza hizmet olarak sunulmasına ve konforuna sahip olun. Bunun bir sonucu olarak, piyasada düşük rakamlarla çalışarak karlılığınızı ve rekabetinizi arttırın. Zaten kendi uzmanlık alanı olarak BT kullanımı ve yönetimi olan DGR uzmanları ile çalışarak doğru insan kaynağına sahip olun, uygun maliyetli çözüm ve projelere imza atın, maliyetlerinizi azaltıp verimliliğiniz arttırın ve geleceğe güvenle bakın.</p>
                </div>

                <div>
                    <b>Operasyonel iş Akışlarınızı Kontrol Altına Alalım</b>
                    <p>Günümüzde şirketler tarafından kendi kaynakları ile bir yandan yürütülmekte olan, diğer yandan operasyonel maliyetleri kontrol altına alınmakta zorlanılan BT hizmetleri için dış kaynak kullanımı önemli ve ön plana çıkan bir çözüm haline gelmiştir. Kurumların BT departmanlarının kontrolsüz ve kötü yönetilmesinden dolayı dış kaynak hizmeti üreten firmalara karşı duyulan ihtiyaç, verilen önem ve tercih edilmesi, bu yöndeki motivasyonu arttırmıştır. Buna örnek olarak, DGR sizlere mevcut BT altyapınız için daha iyi yönetim becerileri sunabilir, doğru ürünlerin kullanılmasını sağlayabilir.</p>
                </div>
            </div>

            <div data-name="network" class="tab">

                <div class="row">
                        <div class="col-sm">
                            <div><b>Yerel Alan Ağı Çözümleri (LAN)</b>
                                <ul style="background-image:url(../img/icon/lan.png)">
                                </ul>
                            </div>
                        </div>
    
                        <div class="col-sm">
                            <div><b>Kablosuz Alan Ağı Çözümleri (WLAN)</b>
                                <ul style="background-image:url(../img/icon/kablosuz.png)">
                                </ul>
                            </div>
                        </div>
    
                        <div class="col-sm">
                            <div><b>Yapısal Kablolama ve Altyapı Çözümleri</b>
                                <ul style="background-image:url(../img/icon/kablo.png)">
                                </ul>
                            </div>
                        </div>
                    </div>



                <div class="row">
                    <div class="col-sm">
                        <div><b>Ağ Güvenliği Çözümleri</b>
                            <ul style="background-image:url(../img/icon/ag-guvenligi.png)">
                                <li><i class="fa fa-angle-double-right"></i> Geniş Alan Ağı Güvenliği</li>
                                <li><i class="fa fa-angle-double-right"></i> Kablosuz Alan Ağı Güvenliği</li>
                                <li><i class="fa fa-angle-double-right"></i> Ağ Erişim Kontrolü (NAC)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm">
                        <div><b>Veri Güvenliği Çözümleri</b>
                            <ul style="background-image:url(../img/icon/veri-guvenligi.png)">
                                <li><i class="fa fa-angle-double-right"></i> Bilgi Sızıntısı Engelleme (DLP)</li>
                                <li><i class="fa fa-angle-double-right"></i> Şifreleme Çözümleri</li>
                                <li><i class="fa fa-angle-double-right"></i> Veri Tabanı Güvenliği</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm">
                        <div><b>Log Yönetimi Çözümleri</b>
                            <ul style="background-image:url(../img/icon/log.png)">
                                <li><i class="fa fa-angle-double-right"></i> 5651 Sayılı Yasa Çözümleri</li>
                                <li><i class="fa fa-angle-double-right"></i> Olay İzleme ve Yönetim Sistemi (SIEM) Çözümler</li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm">
                        <div><b>İnternet Güvenliği Çözümleri</b>
                            <ul style="background-image:url(../img/icon/internet.png)">
                                <li><i class="fa fa-angle-double-right"></i> Güvenlik Duvarı (Firewall)</li>
                                <li><i class="fa fa-angle-double-right"></i> Web Güvenliği</li>
                                <li><i class="fa fa-angle-double-right"></i> Sunucu Güvenliği</li>
                                <li><i class="fa fa-angle-double-right"></i> Saldırı Algılama ve Önleme Sistemleri</span></li>
                                <li><i class="fa fa-angle-double-right"></i> Uzaktan Güvenli Erişim (VPN)</li>
                                <li><i class="fa fa-angle-double-right"></i> Web Sunucu Güvenliği (WAF)</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-sm">
                        <div><b>Geniş Alan Ağı Çözümleri (WAN)</b>
                            <ul style="background-image:url(../img/icon/genis.png)">
                                <li><i class="fa fa-angle-double-right"></i> Veri/ses/görüntü iletişimi</li>
                                <li><i class="fa fa-angle-double-right"></i> Uygulama paylaşımı</li>
                                <li><i class="fa fa-angle-double-right"></i> Çoklu uygulama desteği</li>
                                <li><i class="fa fa-angle-double-right"></i> Yeni uygulama entegrasyonu</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm">
                        <div><b>Son Kullanıcı Güvenliği Çözümleri</b>
                            <ul style="background-image:url(../img/icon/kullanici.png)">
                                <li><i class="fa fa-angle-double-right"></i> Kullanıcı tabanlı güvenlik duvarları</li>
                                <li><i class="fa fa-angle-double-right"></i> Uygulama güvenlik duvarları,</li>
                                <li><i class="fa fa-angle-double-right"></i> Anti-virüs, anti-spyware yazılımları</li>
                                <li><i class="fa fa-angle-double-right"></i> Fiziksel port (usb vb.) kısıtlamaları</li>
                                <li><i class="fa fa-angle-double-right"></i> Disk şifreleme çözümleri</li>
                            </ul>
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-sm-8">
                        <div><b>İçerik Optimizasyon Çözümleri (Load Balancing)</b>
                            <ul style="background-image:url(../img/icon/icerik.png)">
                                <li><i class="fa fa-angle-double-right"></i> Bant genişliğini daha verimli kullanabilirsiniz</li>
                                <li><i class="fa fa-angle-double-right"></i> Sunucu kullanım oranlarını yükseltebilirsiniz</li>
                                <li><i class="fa fa-angle-double-right"></i> Yeni donanım ihtiyacını minimize edebilirsiniz</li>
                                <li><i class="fa fa-angle-double-right"></i> Uygulama ve kullanıcı performansını artırabilirsiniz</li>
                                <li><i class="fa fa-angle-double-right"></i> Otomatik yedekleme ile sunucu kaynaklı kesintileri ortadan kaldırabilirsiniz.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm">
                        <div><b>Mobil Güvenlik Çözümleri</b>
                            <ul style="background-image:url(../img/icon/mobil-guvenlik.png)">
                                <li><i class="fa fa-angle-double-right"></i> Mobil Cihaz Yönetimi (MDM)</li>
                                <li><i class="fa fa-angle-double-right"></i> Mobil Güvenlik</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('vendor/jquery/jquery.js')}}"></script>
<script>
    $(function() {
        $("[data-to=network]").click(); //Delete those lines
    });
    
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
