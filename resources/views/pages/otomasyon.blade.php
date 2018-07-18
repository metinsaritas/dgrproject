@extends("sayfa")

@section("icerik")
<section>
    Merhaba burası {{ Request::url() }}
</section>
@endsection
