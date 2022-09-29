
<script src= '<?php echo base_url()."jquery/empcompany.js"?>' type="text/javascript" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0-beta.5/lightgallery.es5.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css" integrity="sha512-kwJUhJJaTDzGp6VTPBbMQWBFUof6+pv0SM3s8fo+E6XnPmVmtfwENK0vHYup3tsYnqHgRDoBDTJWoq7rnQw2+g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .toast-center-center {
        top: 20%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>
<div class="main-content">
                <div class="content-overlay"></div>
                <div class="content-wrapper">


                    <br>
                    <br>
                    <br>
<div class="container">

        <div calss="col-md-12">

<!--            <div class="card card-custom card-stretch">-->


            <div class="card-body">
                <h2 class="text-center py-4"></h2>
                <div class="content-header" style="    color: red;
    text-align: center;     margin-top: -17px;     margin-bottom: 35px;">            <i class="ft-command"></i>
                    مجريات الشركة  </div>
                <section id="vertical-timeline-right" class="timeline-right timeline-wrapper col-sm-10 col-12 offset-sm-1">
                    <div class="demo-gallery">

                        <ul class="timeline list-unstyled row" id="lightgallery">

                        </ul>
                        <ul id="viewvideo" class="timeline list-unstyled row">
                        </ul>


                    </div>
                    <!-- Last Week -->

                </section>


                    <!--                    <div class="demo-gallery">-->
<!--                        <ul id="lightgallery" class="list-unstyled row">-->
<!--                        </ul>-->
<!--                        <ul id="lightgallery1" class="list-unstyled row">-->
<!--                        </ul>-->
<!--                        <ul id="viewvideo" class="list-unstyled row">-->
<!--                        </ul>-->
<!---->
<!--                        <ul id="pdf" class="list-unstyled row">-->
<!--                        </ul>-->
<!--                    </div>-->


                    <center>

                        <button type="button" id="more" class="btn btn-outline-danger mr-3 justify-content-center"
                                onclick="get_file();">المزيد</button>
<!---->
<!--                        <button type="button" id="more" class="btn btn-outline-danger mr-3 justify-content-center"-->
<!--                                onclick="downloadAllfile();">تحميل</button>-->
                    </center>

                </div>




        </div>
</div>

</div>
</div>

<script>
    $(".img-fluid").addClass("wow fadeIn z-depth-1-half");

    new WOW().init();
</script>

<script src='<?php echo base_url()."jquery/download2.js"?>' type="text/javascript"></script>

