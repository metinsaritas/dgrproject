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
                Burası kurumsal hizmetler kısmı
            </div>

            <div data-name="servis" class="tab">
                Burası servis hizmetler kısmı
            </div>

            <div data-name="danismanlik" class="tab">
                Burası danismanlik hizmetler kısmı
            </div>

            <div data-name="network" class="tab">
                Burası network hizmetler kısmı
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
