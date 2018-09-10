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
    }

    .btn-close:hover{
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
            <img src="{{URL::asset('images/popup-KM.png')}}" alt="">
            <button class="btn-close animated fadeInDown delay-1s">X</button>
        </div>
    </div>

</div>

