@extends("sayfa")

@section("icerik")
    Merhaba burası {{ Request::url() }}
@endsection
