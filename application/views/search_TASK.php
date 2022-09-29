

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
                                <h3 class="card-label labal-color-light" style="color: #F64E60 !important;"> بحث المهام</h3>

                            </div>

                        </div>

                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-3">

                                    <label for="" class="form__label control-label ">
                                        رقم الهوية </label>
                                    <input type="text"
                                           class="form__input center form-control"  ID="CARDID"
                                           placeholder=" ">

                                </div>
                                <div class="col-md-6">
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
                                <div class="col-md-3">
                                    <label for="" class="form__label control-label  "
                                           style="left: 20rem !important;">  اسم المهمة </label>

                                    <input type="text"
                                           class="form__input center form-control" id="TASK_NAME"
                                           placeholder=" ">

                                </div>







                            </div>
                            <div class="row" style="    margin-top: 12px;">
                                <div class="col-md-3">
                                    <label for="" class="form__label control-label" style="    left: 11rem !important;">
                                        تاريخ  </label>
                                    <input type="text"
                                           class=" form-control pickadate-selectors" id="TASK_DATESTAR"
                                           placeholder=" " />



                                </div>
                                <div class="col-md-3">
                                    <label for=""> نوع المهمة  </label>

                                    <select class="form-control   select2" id="TASK_TYPE"
                                            name="param" data-placeholder=" نوع المهمة">
                                        <option value="1">هامة</option>
                                        <option value="2">عاجلة</option>
                                        <option value="3">اخرى</option>

                                    </select>


                                </div>
                                <div class="col-md-3">
                                    <label for="" >    المسمى الوظيفي
                                    </label>
                                    <select class="form-control   select2" ID="JOBTITLE"
                                            name="pa21rsam" data-placeholder="   المسمى الوظيفي ">
                                        <option value="0">موظف</option>
                                        <option value="1">رئيس قسم</option>
                                        <option value="2">مدير</option>
                                    </select>


                                </div>

                                <div class="col-md-3">
                                    <label for="" >  القسم
                                    </label>
                                    <select class="form-control   select2" ID="SECTION1122"
                                            name="par2am" data-placeholder="   القسم ">
                                        <option value="0">شبكات الحاسوب</option>
                                        <option value="1">البرمجة</option>
                                        <option value="2">الاتصالات</option>
                                        <option value="3">صيانة</option>
                                    </select>


                                </div>
                                <div class="col-md-3">
                                    <label for=""
                                           class="form__label control-label "
                                           style="    left: 8rem  !important;">
                                        حالة الادن</label>
                                    <select class="form-control select2 " id="STATUS_NO"
                                            name="param" data-placeholder="   حالة الاجازة   ">

                                        <option value="المهمة متاخرة">المهمة متاخرة</option>
                                        <option value="تم الانجاز">تم الانجاز </option>
                                        <option value="قيد الإنتظار">قيد الإنتظار </option>
                                        <option value="قيد العمل ">قيد العمل </option>

                                    </select>



                                </div>
                            </div>



                        </div>




                        <div class="row">






                        </div>

                        <br>





                        <div class="alert bg-light-success mb-2" role="alert">

                            <div class="card-footer bg-light-light text-center">
                                <button type="submit" class="btn gradient-mint " onclick="search_TASK();">بحث <i class="ft-search"> </i></button>

                                <button class="btn gradient-pomegranate" onclick="clear_inputs_TASK();">
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
        <table class="table table-striped table-bordered dom-jQuery-events dataTable" id="search_TASK">

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
<div class="modal fade text-left" id="update_emp_modalaz"  tabindex="-1" role="dialog" aria-labelledby="exampleModalSizelg" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title" id="myModalLabel8"> مهمة </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="ft-x font-medium-2 text-bold-700"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
<!--                    <div class="col-md-4">-->
<!--                        <label for=""> الموظف  </label>-->
<!---->
<!---->
<!---->
<!--                        <input type="text"-->
<!--                               class=" form-control " id="CARDID55"-->
<!--                               placeholder=" " readonly  />-->
<!---->
<!---->
<!---->
<!--                    </div>-->

                    <div class="col-md-6">
                        <label for="" class="form__label control-label  "
                               style="left: 20rem !important;" >  اسم المهمة </label>

                        <input type="text"
                               class="form__input center form-control" id="TASK_NAME55"
                               placeholder=" " readonly >

                    </div>

                    <div class="col-md-6">
                        <label for=""> نوع المهمة  </label>


                        <input type="text"
                               class=" form-control " id="TASK_TYPE55"
                               placeholder=" " readonly  />



                    </div>

                    </div>







                <div class="row" style="    margin-top: 12px;">
                    <div class="col-md-6">
                        <label for="" class="form__label control-label" style="    left: 11rem !important;" >
                            تاريخ بدء المهمة</label>
                        <input type="text"
                               class=" form-control " id="TASK_DATESTAR55"
                               placeholder=" " readonly  />



                    </div>
                    <div class="col-md-6">
                        <label for="" >
                            تاريخ انتهاء المهمة</label>
                        <input type="text"
                               class=" form-control " id="TASK_DATEEND55"
                               placeholder=" "readonly  />


                    </div>
                    <!--                                                        <div class="col-md-4">-->
                    <!--                                                            <label for="" class="form__label control-label  "-->
                    <!--                                                                   style="left: 2rem !important;">  وقت الانتهاء  </label>-->
                    <!---->
                    <!--                                                            <input type="text"-->
                    <!--                                                                   class="form__input center form-control"-->
                    <!--                                                                   placeholder=" ">-->
                    <!---->
                    <!--                                                        </div>-->

                </div>
                <div class="col-md-12 ">
                    <label for="" class=" control-label " style="    left: 60.8rem !important;
">  تفاضيل المهمة</label>
                    <textarea class=" form-control " rows="2" style="width:100% ; " id="TASK_DETAILES55" readonly > </textarea>

                </div></div>

<!--            <div class=" card-footer bg-light-light text-center">-->
<!---->
<!--                <button  id="insert_btn" class="btn btn-success mr-1 mb-1 " onclick="insert_task();"> إضافة <i class="fa fa-plus fa-1x">-->
<!---->
<!--                    </i></button>                                                    <button id="UPDATE_btn"  class="btn btn-info mr-1 mb-1" onclick="update_task();"> تعديل <i class="fa fa-edit fa-1x"> </i>-->
<!--                </button>-->
<!--                <button type="button" class="btn btn-danger mr-1 mb-1" data-dismiss="modal">اغلاق-->
<!--                    <i class="fa fa-window-close fa-1x"> </i></button>-->
<!--            </div>-->
        </div>
    </div>
</div>

<script type="text/javascript">

    function submitForm(event){
        event.preventDefault();


    }
</script>