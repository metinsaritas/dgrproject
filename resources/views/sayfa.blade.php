<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include("helper.head")
    </head>

    <body id="page-top">
        @include("helper.navbar")
            @yield("icerik")
        @include("helper.grupsirketleri")
        @include("helper.footer")
    </body>
</html>