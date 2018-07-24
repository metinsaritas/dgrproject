@extends("sayfa")

@section("title") Enerji Sistemleri | DGR Project @endsection

<div class="page">
    <div class="banner" style="background-image:url({{ asset('img/page/enerji-sistemleri.jpg')}});"></div>

    <div class="container" style="position: relative;">
        <i class="fa fa-bolt service-logo" style="color: orange; box-shadow: 0px -20px 70px -10px orange"></i>
        <span class="title">Enerji Sistemleri</span>
    </div>
</div>


@section("icerik")
<div>
    <div class="hizmet-after">
        <div class="cont">
        <div class="container">
            <div class="row hizmet-menu">
                <div data-to="kojenerasyon" class="col-sm list active" style="background-image:url(../img/hizmetler/tub.png)">
                    <span>Kojenerasyon Sistemleri</span>
                    <div class="arrow"></div>
                </div>
                
                <div data-to="solar" class="col-sm list" style="background-image:url(../img/hizmetler/sun.png)">
                    <span>Solar Enerji Sistemleri</span>
                    <div class="arrow"></div>
                </div>
                <div data-to="ruzgar" class="col-sm list" style="background-image:url(../img/hizmetler/turbine.png)">
                    <span>Rüzgar Enerjisi</span>
                    <div class="arrow"></div>
                </div>
                <div data-to="karbon" class="col-sm list" style="background-image:url(../img/hizmetler/c.png)">
                    <span>Karbon Üretim Tesisi</span>
                    <div class="arrow"></div>
                </div>
                <div data-to="bio" class="col-sm list" style="background-image:url(../img/hizmetler/human.png)">
                    <span>Bio Enerji Sistemleri</span>
                    <div class="arrow"></div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="container-area">
        <div class="container">
            <div data-name="kojenerasyon" class="tab active">
                Burası kojenerasyon hizmetler kısmı
            </div>

            <div data-name="solar" class="tab">
                Burası solar hizmetler kısmı
            </div>

            <div data-name="ruzgar" class="tab">
                Burası ruzgar hizmetler kısmı
            </div>

            <div data-name="karbon" class="tab">
                Burası karbon hizmetler kısmı
            </div>

            <div data-name="bio" class="tab">
                Burası bio hizmetler kısmı
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
