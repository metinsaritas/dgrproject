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
                <div data-to="sehirler" class="col-sm list" style="background-image:url(../img/hizmetler/home.png)">
                    <span>Akıllı Şehirler</span>
                    <div class="arrow"></div>
                </div>
                <div data-to="aydinlatma" class="col-sm list" style="background-image:url(../img/hizmetler/lamp.png)">
                    <span>Akıllı Aydınlatma Sistemleri</span>
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
                Burası atikizleme hizmetler kısmı
            </div>

            <div data-name="atiktoplama" class="tab">
                Burası atiktoplama hizmetler kısmı
            </div>

            <div data-name="sehirler" class="tab">
                Burası sehirler hizmetler kısmı
            </div>

            <div data-name="aydinlatma" class="tab">
                Burası aydinlatma hizmetler kısmı
            </div>

            <div data-name="elektrik" class="tab">
                Burası elektrik hizmetler kısmı
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
