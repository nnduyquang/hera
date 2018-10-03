
<div id="footer">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="footer_content">
                    <h5>
                        THEO DÕI CHÚNG TÔI
                    </h5>

                    <div id="sc_network" class="pb-5">
                        <a href="https://www.facebook.com/TrungTamTiecCuoiHera"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/hera_center"><i class="fab fa-instagram" style="background-image:url({{URL::asset('images/bg/bg-insta.jpg')}});"></i></a>
                        <a href="https://www.youtube.com/channel/UCMWdeTYUOrgjhPYJadEUwTA"><i class="fab fa-youtube"></i></a>
                    </div>

                    {!! $listFrontEndInfo['contact'] !!}
                    <p>ĐIỆN THOẠI : (028) 62784 7939 Email: {{$listFrontEndInfo['email']}}</p>
                    <p>HOTLINE : <span style="font-weight: bolder">{{$listFrontEndInfo['hotline']}}</span></p>

                    <p>
                        Copyright © All Rights Reserved By Hera Center
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>