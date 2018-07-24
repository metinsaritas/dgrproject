@extends("sayfa")

@section("title") İletişim | DGR Project @endsection

<div style="background: #f3f1f1;">
    <div class="page">
        <div class="banner" style="background-image:url({{ asset('img/page/iletisim.jpg')}}); border-radius:0px;height:170px !important;"></div>

        <div class="container" style="position: relative;">
            <span class="title" style="text-align: left; left: 0px;margin-left:10px;"><i class="fa fa-globe"></i> İletişim</span>
        </div>
    </div>
</div>
@section("icerik")

<div class="contact-message">
<div class="container">
    <div>DGR PROJECT ile ilgili merak ettiğiniz herşey için iletişim formumuzu kullanabilirsiniz.</div>
</div>
</div>

<div style="background-color: white;
background: linear-gradient(to left, white,#f7eaea);">
    <div class="container contact-form">
        <form action="api/message">
                <div class="row">
                    <div class="col-sm">
                        
                        <div class="col-sm">
                            <label for="name">Ad Soyad</label>
                            <input name="name" type="text"/>
                        </div>

                        <div class="col-sm">
                            <label for="email">E-Posta</label>
                            <input name="email" type="text"/>
                        </div>

                        <div class="col-sm">
                            <label for="phone">Telefon</label>
                            <input name="phone" type="text"/>
                        </div>

                    </div>

                    <div class="col-sm">
                            <div class="col-sm">
                                    <label for="message">Mesaj</label>
                                    <textarea name="message"></textarea>
                            </div>
                    </div>

                    <div class="col-sm">

                            <div class="col-sm" style="margin-bottom:28px;">
                                <label for="about">Konu</label>
                                <input name="about" type="text"/>
                            </div>
                            
                            <div class="col-sm">
                                <div class="bot">
                                <div class="g-recaptcha" data-sitekey="6LfLFGUUAAAAAHcN8JRCEiVROo3R_hxwsf9E_U2l">
                                </div>
                                </div>
                            </div>
            
                            <div class="col-sm" style="margin-top:28px;">
                                <button class="send" type="submit">
                                    <i class="fa fa-send"></i> Gönder
                                </button>
                            </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>







<div id="map" style="height: 430px;"></div>


<script>
function initMap () {
    let uluru = {lat: 40.9868521, lng: 29.1326849};
    let map = new google.maps.Map(document.getElementById('map'), {
        center: uluru,
        zoom: 16,
        disableDefaultUI: true
        });
    let icon = "{{ asset('/img/favicon.png') }}";
    let marker = new google.maps.Marker({position: uluru, map: map, icon: icon});
}
</script>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQaBpxj1_1noq-Te2jCPoG7SqjBgMd-R4&callback=initMap">
</script>

<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

