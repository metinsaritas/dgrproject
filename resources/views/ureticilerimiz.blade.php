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
            <a :href="'/ureticilerdetay/'+x.id"><div class="uretici-logo" :style="{backgroundImage: 'url(img/ureticiler/bilisim/'+x.image+')'}"></div></a>
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
            <a :href="'/ureticilerdetay/'+x.id"><div class="uretici-logo" :style="{backgroundImage: 'url(img/ureticiler/enerji/'+x.image+')'}"></div></a>
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
            <a :href="'/ureticilerdetay/'+x.id"><div class="uretici-logo" :style="{backgroundImage: 'url(img/ureticiler/otomasyon/'+x.image+')'}"></div></a>
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
                    "image": "1.png",
                    "id": 1
                },
                {
                    "name": "catbird",
                    "image": "2.png",
                    "id": 2
                },
                {
                    "name": "mojo",
                    "image": "3.png",
                    "id": 3
                },
                {
                    "name": "accellion",
                    "image": "4.png",
                    "id": 4
                },
                {
                    "name": "8man",
                    "image": "5.png",
                    "id" : 5
                },
                {
                    "name": "workspad",
                    "image": "6.png",
                    "id" : 6
                },
                {
                    "name": "mobileiron",
                    "image": "7.png",
                    "id" : 7
                },
                {
                    "name": "logpoint",
                    "image": "8.png",
                    "id" : 8
                },
                {
                    "name": "veriato",
                    "image": "9.png",
                    "id" : 9
                },
                {
                    "name": "bn",
                    "image": "10.png",
                    "id" : 10
                },
                {
                    "name": "encase",
                    "image": "11.png",
                    "id" : 11
                },
                {
                    "name": "paloalto",
                    "image": "12.png",
                    "id" : 12
                }],
                enerji: [
                    {
                        "name": "sommer",
                        "image": "1.png",
                        "id" : 13
                    },
                    {
                        "name": "2g",
                        "image": "2.png",
                        "id" : 14
                    },
                    {
                        "name": "lichtline",
                        "image": "3.png",
                        "id" : 15
                    },
                    {
                        "name": "gleenshoop",
                        "image": "4.png",
                        "id" : 16
                    }
                ],
                otomasyon: [
                    {
                        "name": "financialinformation",
                        "image": "1.png",
                        "id" : 17
                    },
                    {
                        "name": "tomra",
                        "image": "2.png",
                        "id" : 18
                    },
                    {
                        "name": "faun",
                        "image": "3.png",
                        "id" : 19
                    },
                    {
                        "name": "control",
                        "image": "4.png",
                        "id" : 20
                    },
                    {
                        "name": "icu",
                        "image": "5.png",
                        "id" : 21
                    },
                    {
                        "name": "germanecotec",
                        "image": "6.png",
                        "id" : 22
                    }
                ]
            }
        }
    })
</script>
@endsection



