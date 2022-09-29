

<script src= '<?php echo base_url()."jquery/search.js"?>' type="text/javascript" ></script>


<style>
    .btn-group-f-left{
        float: left !important;
    }
    .toast-center-center {
        top: 20%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>
<div class="main-content">
                <div class="content-overlay"></div>
                <div class="content-wrapper">
<div class="container">
<div class="modal-body">
    <form onsubmit="submitForm(event)">
        <div class="modal-body">
            <div class="row">


                <div class="col-md-12">

                    <!--begin::Card-->
                    <div class="card card-custom gutter-b ">
                        <div class="card-header bg-light-light">
                            <div class="card-title ">
                                <h3 class="card-label labal-color-light"></h3>
                                <h5 class="modal-title" id="exampleModalLabel">بحث المكافئات</h5>

                            </div>
                        </div>

                        <div class="card-body ">
                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-md-4">

                                    <label for="" class="form__label control-label ">
                                        رقم الهوية </label>
                                    <input type="text"
                                           class="form__input center form-control"  ID="CARDID"
                                           placeholder=" ">

                                </div>
                                <div class="col-md-8">
                                    <label for="" > الاسم كامل
                                    </label>

                                    <div class="input-group ">

                                        <input type="text" class=" center form-control" ID="FIRSTNAME"
                                               placeholder="اسم الاول  ">
                                        <input type="text" class="center form-control"  ID="FATHERNAME"
                                               placeholder="اسم الاب ">
                                        <input type="text" class="center form-control"  ID="GRANDFATHERNAME"
                                               placeholder=" اسم الجد ">
                                        <input type="text" class="center form-control"  ID="FAMILYNAME"
                                               placeholder=" اسم العائلة">




                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for=""
                                           class="form__label control-label "
                                           style="    left: 10rem  !important;">
                                        تاريخ المكافئة</label>

                                    <input type="text"
                                           class=" form-control pickadate-selectors" data-date-format="dd-mm-yyyy"
                                           placeholder=" " id="DATE_REWARDS">

                                </div>

                                <div class="col-md-6">
                                    <label for="" >     نوع المكافئة
                                    </label>
                                    <select class="form-control  select2 " id="TYPPE_REWARDS"
                                            name="param" data-placeholder="  نوع الاجازة   ">

                                        <option value="1">مالية</option>
                                        <option value="2">اجازة </option>
                                        <option value="3">اخرى </option>
                                    </select>




                                </div>

                            </div>

<!--                            <div class="row">-->
<!---->
<!--                                <div class="col-md-12">-->
<!--                                    <label for="">-->
<!--                                        سبب المكافئة</label>-->
<!--                                    <textarea class=" form-control" rows="2"-->
<!---->
<!--                                              id="REASON_REWARDS"> </textarea>-->
<!---->
<!--                                </div>-->
<!---->
<!--                            </div>-->


                        </div>







                        <!--end::Row-->
                        <div class="alert bg-light-success mb-2" role="alert">

                            <div class="card-footer bg-light-light text-center">
                                <button type="submit" class="btn gradient-mint "  onclick="search_REWARDS();">بحث <i class="ft-search"> </i></button>

                                <button class="btn gradient-pomegranate" onclick="clear_inputs_h();">
                                    تفريغ <i class="ft-x"> </i> </button>
                            </div>




                        </div>


                    </div>



                </div>
                <!--end::Card-->

            </div>
        </div>
    </form>
   </div>
       </div>

<div class="container">


<div class="card card-custom gutter-b">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">البحث
            </h3>
        </div>
        <div class="card-toolbar">
            <!--begin::Dropdown-->
            <!--end::Dropdown-->
            <!--begin::Button-->
            <!--end::Button-->
        </div>
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <table class="table table-striped table-bordered dom-jQuery-events dataTable" id="search_REWARDS">

        </table>
        <!--end: Datatable-->
    </div>
</div>
</div>
<div class="modal fade" id="modal_permission1" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div id="view_mpdel" style="    font-size: 155%;
">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <!--begin::Card-->
                            <div class="">
                                <!--begin::Body-->
                                <div class="card-body pt-4">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close"></i>
                                        </button>                                        </div>
                                    <!--end::Toolbar-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Pic-->
                                        <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                            <div class="symbol symbol-circle symbol-lg-75">

                                                <img src="<?php echo base_url().'assets7/media/users/300_10.jpg'?>" ></div>
                                            <div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
                                                <span class="font-size-h3 font-weight-boldest">JM</span>
                                            </div>
                                        </div>
                                        <!--end::Pic-->
                                        <!--begin::Title-->
                                        <!--end::Title-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Desc-->
                                    <p class="mb-7">Contrary to popular belief, Lorem Ipsum is not
                                        <br>
                                        <a href="#" class="text-primary pr-1">#XRS-54PQ</a>simply random text</p>
                                    <!--end::Desc-->
                                    <!--begin::Info-->
                                    <div class="mb-7">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="text-dark-75 font-weight-bolder mr-2">الاسم:</span>
                                            <span id="q" class="text-muted text-hover-primary"></span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-cente my-1">
                                            <span class="text-dark-75 font-weight-bolder mr-2">رقم الهوية:</span>
                                            <span id="qq" class="text-muted text-hover-primary"></span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="text-dark-75 font-weight-bolder mr-2">الفسم:</span>
                                            <span id="qqq"  class="text-muted font-weight-bold"></span>
                                        </div> <div class="d-flex justify-content-between align-items-center">
                                            <span class="text-dark-75 font-weight-bolder mr-2">تاريخ الميلاد:</span>
                                            <span id="qqqq"  class="text-muted font-weight-bold"></span>
                                        </div> <div class="d-flex justify-content-between align-items-center">
                                            <span class="text-dark-75 font-weight-bolder mr-2">الايميل:</span>
                                            <span id="qqqqq"  class="text-muted font-weight-bold"></span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="text-dark-75 font-weight-bolder mr-2">المؤهل العلمي:</span>
                                            <span id="qqqqqq"  class="text-muted font-weight-bold"></span>
                                        </div> <div class="d-flex justify-content-between align-items-center">
                                            <span class="text-dark-75 font-weight-bolder mr-2"> المسمى الوظيفي:</span>
                                            <span id="qqqqqq"  class="text-muted font-weight-bold"></span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                    <a href="#" class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4">write message</a>
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
<script type="text/javascript">

    function submitForm(event){
        event.preventDefault();


    }
</script>