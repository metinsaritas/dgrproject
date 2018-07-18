@extends("sayfa")

<div style="background-size: cover;width:100%;height: 300px; background-image:url({{ asset('img/res.jpg')}}); background-repeat:no-repeat;">
        
</div>

<div class="container" style="position: relative;">
        <i class="fa fa-desktop" style="    color: #03a9f4;
        font-size: 4em !important;
        background-color: white;
        padding: 30px;
        width: 2em;
        height: 2em;
        line-height: 75px;
        position: absolute;
        bottom: 0px;
        right: 70px;
        border-radius: 50%;
        box-shadow: 0px -20px 100px 0px #03a9f4;">
        <span style="position: absolute;
        text-align: right;
        font-family: Raleway;
        font-size: 30px;
        line-height: 30px;
        left: -250px;
        top: 70px;">Bilişim Sistemleri</span>
    </i>

       

        Merhaba burası {{ Request::url() }}
    </div>

@section("icerik")
<section>
    
</section>
@endsection
