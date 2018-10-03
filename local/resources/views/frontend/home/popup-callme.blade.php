<style>
    #popup-callme {
        width: 100%;
        height: 100%;
        background-color: rgba(00, 00, 00, 0.8);
        position: fixed;
        top: 0;
        left: 0;
        z-index: 100;
        overflow: hidden;
        text-align: center;
        display: none;
    }

    #popup-callme .popup-content{
        width: 100%;
        height: 100%;
        /*background-color: #fff;*/
        position: relative;
    }

    #popup-callme .popup-content .pop-center{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 40%;
        background-color: white;
        border-radius: 3px;
        padding: 22px 16px;
    }

    #popup-callme .popup-content .pop-center input{
        border: none;
        border-bottom: 1px solid #007bff;
        text-align: center;
    }

    #popup-callme .popup-content .pop-center p{
        line-height: 22px;
    }

    .btn-close-callme{
        position: absolute;
        height: 28px;
        width: 28px;
        border-radius: 50%;
        border: none;
        top: -16px;
        right: -16px;
        cursor: pointer;
        font-weight: bold;
        font-size: 15px;
        transition: .3s;
        background-color: #fff;
    }

    .btn-close-callme i{
        transition: .3s;
    }

    .btn-close-callme:hover i{
        transform: rotate(360deg);
    }

    .btn-send{
        margin-top: 20px;
        padding: 10px 16px;
        border-radius: 20px;
        border: none;
        background-color: #007bff;
        color: white;
    }

    @media only screen and (max-width: 800px) {
        #popup-callme .popup-content .pop-center{
            width: 90%;
        }
    }


</style>

<div class="animated fadeIn" id="popup-callme">

    <div class="popup-content animated bounceIn delay-1s">
        <div class="pop-center">
            {{--<img src="{{URL::asset('http://heracenter.com/wp-content/uploads/2018/09/Popup-Mua-Dong-Yeu-Thuong.png')}}" alt="">--}}
            <p class="mb-3">NHẬP SỐ ĐIỆN THOẠI BẠN, CHÚNG TÔI SẼ GỌI LẠI NGAY!</p>
            <input type="text" placeholder="099-99999-9999">
            <br>
            <button class="btn-send">Gửi đi</button>
            <p class="mt-3">BẠN CẦN TƯ VẤN CHO BỮA TIỆC CỦA MÍNH</p>
            <p>HÃY ĐỂ LẠI THÔNG TIN</p>
            <p>CHÚNG TÔI SẼ GỌI CHO BẠN</p>
            HOTLINE : 036-399-7777
            <button class="btn-close-callme animated fadeInDown delay-1s"><i class="fas fa-times"></i></button>
        </div>
    </div>

</div>

