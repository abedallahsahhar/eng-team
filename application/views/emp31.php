
<script src= '<?php echo base_url()."jquery/emp21.js"?>' type="text/javascript" ></script>

<br>
<br>
<br>

<div class="main-content">
                <div class="content-overlay"></div>
                <div class="content-wrapper">
<div class="container">
    <div class="container">
        <div class="content-header" style="    color: red;
    text-align: center;     margin-top: -17px;     margin-bottom: 35px;">            <i class="ft-copy"></i>
              الإجازات</div>
    </div>
                  <input type="hidden" id="JOBTITLE" value='<?php $name = $this->session->userdata('JOBTITLE'); echo $name; ?>'>

                    <input type="hidden" id="CARDID" value='<?php $name = $this->session->userdata('CARDID'); echo $name; ?>'>

    <div class="row">
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h3 class="mb-1 warning" id="count4">278</h3>
                                <span>الطلبات الكلية</span>
                            </div>
                            <div class="media-right align-self-center">
                                <i class="ft-briefcase warning font-large-2 float-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h3 class="mb-1 primary"  id="count1"></h3>
                                <span>الطلبات قيد النتظار</span>
                            </div>
                            <div class="media-right align-self-center">
                                <i class="ft-user primary font-large-2 float-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h3 class="mb-1 success" id="count2"></h3>
                                <span>الطلبات المقبولة</span>
                            </div>
                            <div class="media-right align-self-center">
                                <i class="ft-pie-chart success font-large-2 float-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h3 class="mb-1 danger" id="count3"></h3>
                                <span>الطلبات المرفوضة</span>
                            </div>
                            <div class="media-right align-self-center">
                                <i class="ft-life-buoy danger font-large-2 float-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" id="user_id" value='<?php $name = $this->session->userdata('CARDID'); echo $name; ?>'>
                    <div class="card card-custom gutter-b">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label" style="    margin-right: 18px;">الإجازات
                                </h3>
                            </div>
                            <div class="card-toolbar">
                                <!--begin::Dropdown-->
                                <!--end::Dropdown-->
                                <!--begin::Button-->
                                <div class="">
                                    <!-- Button trigger modal-->

                                    <button style="       background-color: #40c057 !important;     background-color: #40c057;     color: #fff !important; margin-top: 2px; margin-left: 20px;" type="button" class="btn btn-success bg-light-success" data-toggle="modal"
                                            data-target="#exampleModalSizeXl2"  id="AZBTN"> إضافة
                                        <i class="fa fa-plus fa-1x">
                                        </i>
                                    </button>
                                    <!--end::Modal-->
                                    <div class="modal fade text-left" id="update_emp_modalaz"  tabindex="-1" role="dialog" aria-labelledby="exampleModalSizelg" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-success">
                                                    <h4 class="modal-title" id="myModalLabel8">الإجازات </h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true"><i class="ft-x font-medium-2 text-bold-700"></i></span>
                                                    </button>

                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <input type="hidden"  id="ID_HOLIDAY">
                                                        <input type="hidden" id="CARDID" value='<?php echo $this->session->userdata('CARDID');  ?>'>
                                                        <!---->
                                                        <!--                                                                        <div class="col-md-3">-->
                                                        <!--                                                                                -->
                                                        <!--                                                                            <label for="" >     نوع الاجازة-->
                                                        <!--                                                                            </label>-->
                                                        <!--                                                                                <select class="form-control select2" id="CARDID"-->
                                                        <!--                                                                                        name="param" data-placeholder=" اسم الموظف   ">-->
                                                        <!--                                                                                </select>-->
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!--                                                                        </div>-->

                                                        <div class="col-md-4">
                                                            <label for=""
                                                                   class="form__label control-label "
                                                                   style="    left: 10rem  !important;">
                                                                تاريخ بدء الإجازة</label>

                                                            <input type="text"
                                                                   class=" form-control pickadate-selectors" data-date-format="dd-mm-yyyy"
                                                                   placeholder=" " id="DATE_HOLIDAY_S">


                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for=""
                                                                   class="form__label control-label "
                                                                   style="    left: 8rem  !important;">
                                                                تاريخ انتهاء الإجازة</label>

                                                            <input type="text"
                                                                   class=" form-control pickadate-selectors"
                                                                   placeholder=" " id="DATE_HOLIDAY_E">


                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for=""
                                                                   class="form__label control-label "
                                                                   style="    left: 8rem  !important;">
                                                                نوع الإجازة</label>
                                                            <select class="form-control select2 " id="HOLIDAY_TYPE"
                                                                    name="param" data-placeholder="  نوع الإجازة   ">

                                                                <option value="1">إجازة مرضية </option>
                                                                <option value="2">إجازة سنوية </option>
                                                                <option value="3">إجازة عرس </option>
                                                                <option value="4"> إجازة عارضة </option>
                                                                <option value="5"> اخرى </option>

                                                            </select>



                                                        </div>


                                                        <div class="row" style="    margin-top: 19px;     margin-right: -2px;
">

                                                            <div class="col-md-8">
                                                                <label for="">
                                                                    سبب الإجازة</label>
                                                                <textarea rows="2" class=" form-control" style="        width: 685%;"

                                                                          id="HOLIDAY_RESON"> </textarea>

                                                            </div>

                                                        </div>
                                                        <input type="hidden" id="SECTION" value='<?php echo $this->session->userdata('SECION');  ?>'>

                                                        <!--                                                                        <div class="col-md-4">-->
                                                        <!--                                                                            <label for=""> القسم  </label>-->
                                                        <!---->
                                                        <!--                                                                            <select class="form-control   select2" ID="SECTION" onclick="get_DEPARTMENT();"-->
                                                        <!--                                                                                    name="par2am" data-placeholder="   القسم ">-->
                                                        <!--                                                                                                                   <option value="0">شبكات الحاسوب</option>-->
                                                        <!--                                                                                                                   <option value="1">البرمجة</option>-->
                                                        <!--                                                                                                                   <option value="2">الاتصالات</option>-->
                                                        <!--                                                                                                                   <option value="3">صيانة</option>-->
                                                        <!--                                                                            </select>-->
                                                        <!--                                                                        </div>-->

                                                    </div>

                                                </div>

                                                <div class=" card-footer bg-light-light text-center">

                                                    <button  id="insert_btn" class="btn btn-success mr-1 mb-1" onclick="insert_holyday();"> إضافة <i class="fa fa-plus fa-1x">

                                                        </i></button>
                                                    <button id="UPDATE_btn"  class="btn btn-info mr-1 mb-1s" onclick="UPDATE_holyday();"> تعديل <i class="fa fa-edit fa-1x"> </i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger mr-1 mb-1" data-dismiss="modal">اغلاق
                                                        <i class="fa fa-window-close fa-1x"> </i></button>








                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--end::Button-->
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin: Datatable-->
                            <table class="table table-striped table-bordered dom-jQuery-events dataTable" id="get_holyday">

                            </table>
                            <!--end: Datatable-->
                        </div>
                    </div>

                </div>


</div>

</div>