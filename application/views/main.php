<style>
    @import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
    .snip1494 {
        position: relative;
        overflow: hidden;
        margin: 10px;
        min-width: 230px;
        max-width: 315px;
        width: 100%;
        color: #ffffff;
        font-size: 16px;
        background-color: #000000;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    .snip1494 *,
    .snip1494 *:before,
    .snip1494 *:after {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    .snip1494 img {
        max-width: 100%;
        backface-visibility: hidden;
        vertical-align: top;
    }
    .snip1494 figcaption {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }
    .snip1494 figcaption:before,
    .snip1494 figcaption:after,
    .snip1494 figcaption div:before,
    .snip1494 figcaption div:after {
        opacity: 0;
        -webkit-transform: scale(0.05);
        transform: scale(0.05);
    }
    .snip1494 figcaption:before,
    .snip1494 figcaption:after {
        height: 50%;
        width: 50%;
        position: absolute;
        content: '';
        background-color: #080808;
    }
    .snip1494 figcaption:before {
        top: 0;
        left: 0;
    }
    .snip1494 figcaption:after {
        bottom: 0;
        right: 0;
    }
    .snip1494 figcaption div:before,
    .snip1494 figcaption div:after {
        width: 50%;
        height: 50%;
        position: absolute;
        content: '';
        background-color: #000000;
    }
    .snip1494 figcaption div:before {
        top: 0;
        right: 0;
    }
    .snip1494 figcaption div:after {
        bottom: 0;
        left: 0;
    }
    .snip1494 i {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        font-size: 4em;
        z-index: 1;
        opacity: 0;
    }
    .snip1494 a {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1;
    }
    .snip1494:hover img,
    .snip1494.hover img {
        zoom: 1;
        filter: alpha(opacity=50);
        -webkit-opacity: 0.5;
        opacity: 0.5;
    }
    .snip1494:hover i,
    .snip1494.hover i {
        opacity: 0.7;
        -webkit-transition-delay: 0.2s;
        transition-delay: 0.2s;
    }
    .snip1494:hover figcaption:before,
    .snip1494.hover figcaption:before,
    .snip1494:hover figcaption:after,
    .snip1494.hover figcaption:after,
    .snip1494:hover figcaption div:before,
    .snip1494.hover figcaption div:before,
    .snip1494:hover figcaption div:after,
    .snip1494.hover figcaption div:after {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 0.8;
    }
    .snip1494:hover figcaption:before,
    .snip1494.hover figcaption:before {
        -webkit-transition-delay: 0;
        transition-delay: 0;
    }
    .snip1494:hover figcaption:after,
    .snip1494.hover figcaption:after {
        -webkit-transition-delay: 0.3s;
        transition-delay: 0.3s;
    }
    .snip1494:hover figcaption div:before,
    .snip1494.hover figcaption div:before {
        -webkit-transition-delay: 0.1s;
        transition-delay: 0.1s;
    }
    .snip1494:hover figcaption div:after,
    .snip1494.hover figcaption div:after {
        -webkit-transition-delay: 0.2s;
        transition-delay: 0.2s;
    }
</style>
<br>
<br>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-4">
    <figure class="snip1494 hover">
        <img src="https://cdn.pixabay.com/photo/2017/06/29/01/02/home-office-2452806_960_720.jpg" alt="sample15" />
        <figcaption>
            <div><i class="flaticon-user-add text-primary"></i></div>
        </figcaption>
        <a href="<?php echo base_url().'main_ctr/emp1' ?>"></a>
    </figure>
        <center>    <span style="color: blue  ; font-size: 20px ;     font-weight: bold;">اضافة موظف</span> </center>
        </div>

        <div class="col-md-4">

            <figure class="snip1494 hover "><img style="height: 211px; width: 325px" src="https://cdn.pixabay.com/photo/2018/06/12/15/06/trophy-3470782_960_720.jpg" alt="sample17" />
        <figcaption>
            <div><i class="flaticon-medal text-primary"></i></div>
        </figcaption>
                <a href="<?php echo base_url().'main_ctr/emp2' ?>"></a>
    </figure>
            <center>    <span style="color: blue  ; font-size: 20px ;     font-weight: bold;"> المكافئات</span> </center>

        </div>

        <div class="col-md-4">

                <figure class="snip1494 hover"><img src="https://cdn.pixabay.com/photo/2020/03/26/08/41/administrate-4969572_960_720.jpg" alt="sample20" />
        <figcaption>
            <div><i class="flaticon-information text-primary"></i></div>
        </figcaption>
                    <a href="<?php echo base_url().'main_ctr/emp3' ?>"></a>
    </figure>
            <center>    <span style="color: blue  ; font-size: 20px ;     font-weight: bold;">   الاذونات و الاجازات</span> </center>

        </div>

    </div>
</div>
<script>
    /* Demo purposes only */
    $(".hover").mouseleave(
        function () {
            $(this).removeClass("hover");
        }
    );
</script>