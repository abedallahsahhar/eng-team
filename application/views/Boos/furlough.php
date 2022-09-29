
<script src= '<?php echo base_url()."jquery/Boos/furlough.js"?>' type="text/javascript" ></script>
<br>
<br>

<br><style>
    .services-left-dec img {
        width: 523px;
        height: 638px;
        left: -80px;
        top: -140px;
        position: absolute;
    }
</style>
<br>
<br>
<div class="main-content">
                <div class="content-overlay"></div>
                <div class="content-wrapper">
                    <div class="services-left-dec">

                        <img src="<?php echo base_url().'app-assets/images/services-left-dec.png'?>" alt="">
                    </div>
<div class="container">
    <div class="row">
        <div class="col-12">

        <div class="content-header" style="    color: red;
    text-align: center;     margin-top: -17px;     margin-bottom: 35px;">            <i class="ft-copy"></i>
        اجراءات الإجازات</div>
</div>
    </div>

    <input type="hidden" id="p_section_id" value='<?php $name = $this->session->userdata('SECION'); echo $name; ?>'>

                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h4 class="card-label" style="    margin-right: 18px;">الإجازات
                                </h4>
                            </div>
                        </div>
    <div class="card-body">
        <div id="kt_datatable1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

            <div class="row">
                <div class="col-sm-12">
                    <div class="dataTables_scroll">
                        <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                            <div class="dataTables_scrollHeadInner" >
                                <table ID="get_holydayBOSS" class="table table-striped table-bordered dom-jQuery-events dataTable" role="grid" >
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>
</div>

