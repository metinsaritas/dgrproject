@extends("sayfa")

@section("title") Üreticiler Detay | DGR Project @endsection

<div class="page">
    <div class="banner" style="background-image:url({{ asset('img/page/ureticilerimiz.jpg')}}); border-radius:0px;height:170px !important;"></div>

    <div class="container" style="position: relative;">
        <span class="title" style="text-align: left; left: 0px;margin-left:10px;"><i class="fa fa-user"></i> Üreticilerimiz</span>
    </div>
</div>

@section("icerik")
<section class="content" style="padding: 2rem 0px;">
Merhaba id: {{ $id }}
</section>

@endsection



