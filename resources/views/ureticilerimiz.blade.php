@extends("sayfa")

@section("title") Üreticilerimiz | DGR Project @endsection

<div class="page">
    <div class="banner" style="background-image:url({{ asset('img/page/ureticilerimiz.jpg')}}); border-radius:0px;height:170px !important;"></div>

    <div class="container" style="position: relative;">
        <span class="title" style="text-align: left; left: 0px;margin-left:10px;"><i class="fa fa-user"></i> Üreticilerimiz</span>
    </div>
</div>

@section("icerik")
<section class="content" style="padding: 2rem 0px;">
<div class="container bilisim">
    <div class="hr">
        <div class="triangle"></div>
        <span>Bilişim Sistemleri</span>
    </div>

    <div class="logo-holder" style="text-align: center;">
        <div class="uretici-logo-holder" v-for="x in ureticiler.bilisim">
            <div class="uretici-logo" :style="{backgroundImage: 'url(img/ureticiler/bilisim/'+x.image+')'}"></div>
        </div>
    </div>
</div>

<div class="container enerji">
    <div class="hr">
        <div class="triangle"></div>
        <span>Enerji Sistemleri</span>
    </div>

    <div class="logo-holder" style="text-align: center;">
        <div class="uretici-logo-holder" v-for="x in ureticiler.enerji">
            <div class="uretici-logo" :style="{backgroundImage: 'url(img/ureticiler/enerji/'+x.image+')'}"></div>
        </div>
    </div>
</div>

<div class="container otomasyon">
    <div class="hr">
        <div class="triangle"></div>
        <span>Otomasyon Sistemleri</span>
    </div>

    <div class="logo-holder" style="text-align: center;">
        <div class="uretici-logo-holder" v-for="x in ureticiler.otomasyon">
            <div class="uretici-logo" :style="{backgroundImage: 'url(img/ureticiler/otomasyon/'+x.image+')'}"></div>
        </div>
    </div>
</div>
</section>

<script src="js/vue.min.js"></script>
<script>
    new Vue ({
        el: "section.content",
        data: {
            ureticiler: {
                bilisim: [{
                    "name": "flowmon",
                    "image": "1.png"
                },
                {
                    "name": "catbird",
                    "image": "2.png"
                },
                {
                    "name": "mojo",
                    "image": "3.png"
                },
                {
                    "name": "accellion",
                    "image": "4.png"
                },
                {
                    "name": "8man",
                    "image": "5.png"
                },
                {
                    "name": "workspad",
                    "image": "6.png"
                },
                {
                    "name": "mobileiron",
                    "image": "7.png"
                },
                {
                    "name": "logpoint",
                    "image": "8.png"
                },
                {
                    "name": "veriato",
                    "image": "9.png"
                },
                {
                    "name": "bn",
                    "image": "10.png"
                },
                {
                    "name": "encase",
                    "image": "11.png"
                },
                {
                    "name": "paloalto",
                    "image": "12.png"
                }],
                enerji: [
                    {
                        "name": "sommer",
                        "image": "1.png"
                    },
                    {
                        "name": "2g",
                        "image": "2.png"
                    },
                    {
                        "name": "lichtline",
                        "image": "3.png"
                    },
                    {
                        "name": "gleenshoop",
                        "image": "4.png"
                    }
                ],
                otomasyon: [
                    {
                        "name": "financialinformation",
                        "image": "1.png"
                    },
                    {
                        "name": "tomra",
                        "image": "2.png"
                    },
                    {
                        "name": "faun",
                        "image": "3.png"
                    },
                    {
                        "name": "control",
                        "image": "4.png"
                    },
                    {
                        "name": "icu",
                        "image": "5.png"
                    },
                    {
                        "name": "germanecotec",
                        "image": "6.png"
                    }
                ]
            }
        }
    })
</script>
@endsection



