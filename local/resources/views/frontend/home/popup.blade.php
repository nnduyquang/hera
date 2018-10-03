<style>
    #popup-hera {
        width: 100%;
        height: 100%;
        background-color: rgba(00, 00, 00, 0.8);
        position: fixed;
        top: 0;
        left: 0;
        z-index: 100;
        overflow: hidden;
        text-align: center;
    }

    #popup-hera .popup-content{
        width: 100%;
        height: 100%;
        /*background-color: #fff;*/
        position: relative;
    }

    #popup-hera .popup-content .pop-center{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 60%;

    }

    .btn-close{
        position: absolute;
        border: none;
        top: -14px;
        right: -22px;
        cursor: pointer;
        font-weight: bold;
        font-size: 15px;
        transition: .3s;
        text-align: center;
        background-color: transparent;
    }

    .btn-close i{
        transition: .3s;
        /*line-height: 28px;*/
        text-align: center;
        margin-right: 3px;
        width: 100%;
        height: 28px!important;
        width: 28px!important;
        border-radius: 50%;
        background-color: #fff;
        line-height: 27px;
    }

    .btn-close:hover i{
        transform: rotate(360deg);
    }

    @media only screen and (max-width: 800px) {
        #popup-hera .popup-content .pop-center{
            width: 90%;
        }
    }


</style>

<div class="animated fadeIn" id="popup-hera">

    <div class="popup-content animated bounceIn delay-1s">
        <div class="pop-center">
            <img src="{{URL::asset('http://heracenter.com/wp-content/uploads/2018/09/Popup-Mua-Dong-Yeu-Thuong.png')}}" alt="">
            <button class="btn-close animated fadeInDown delay-1s text-center"><i class="fas fa-times"></i></button>
        </div>
    </div>

</div>

