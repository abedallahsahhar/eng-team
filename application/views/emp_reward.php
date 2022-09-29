
<script src= '<?php echo base_url()."jquery/REWARDS.js"?>' type="text/javascript" ></script>

<br>
<br>
<br>

<div class="main-content">
                <div class="content-overlay"></div>
                <div class="content-wrapper">
<div class="container">
    <div class="content-header" style="    color: red;
    text-align: center;     margin-top: -17px;     margin-bottom: 35px;">            <i class="ft-copy"></i>
        المكافئات</div>
</div>
                    <div class="card card-custom gutter-b">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">

                                <h3 class="card-label" style="    margin-right: 18px;">
<!--                                    <button type="button" class="btn btn-success bg-light-success btn-icon round mr-1 mb-1"><i class="fa fa-heart"></i></button>-->
                                    المكافئات
                                </h3>
                            </div>
                            <div class="card-toolbar">
                                <!--begin::Dropdown-->
                                <!--end::Dropdown-->
                                <!--begin::Button-->
                                <div class="">
                                    <!-- Button trigger modal-->
<!--                                    <button type="button" class="btn btn-success bg-light-success" data-toggle="modal"-->
<!--                                            data-target="#exampleModalSizeXl2"  id="AZBTN"> إضافة-->
<!--                                        <i class="fa fa-plus fa-1x">-->
<!--                                        </i>-->
<!--                                    </button>-->
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
                                                    <h4 class="modal-title" id="myModalLabel8">المكافئات </h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true"><i class="ft-x font-medium-2 text-bold-700"></i></span>
                                                    </button>

                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <input type="hidden"  id="ID_REWARDS">
                                                            <label for="" >    اسم الموظف
                                                            </label>
                                                            <select class="form-control  select2 " id="CARDID"
                                                                    name="param" data-placeholder=" اسم الموظف   ">
                                                            </select>



                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for=""
                                                                   class="form__label control-label "
                                                                   style="    left: 10rem  !important;">
                                                                تاريخ المكافئة</label>

                                                            <input type="text"
                                                                   class=" form-control pickadate-selectors" data-date-format="dd-mm-yyyy"
                                                                   placeholder=" " id="DATE_REWARDS">

                                                        </div>

                                                        <div class="col-md-4">
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

                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <label for="">
                                                                 تفاصيل المكافئة</label>
                                                            <textarea class=" form-control" rows="2"

                                                                      id="REASON_REWARDS"> </textarea>

                                                        </div>

                                                    </div>
                                                </div>

                                                <div class=" card-footer bg-light-light text-center">

                                                    <button  id="insert_btn" class="btn btn-success mr-1 mb-1" onclick="insert_REWARDS();"> إضافة <i class="fa fa-plus fa-1x">

                                                        </i></button>
                                                    <button id="UPDATE_btn"  class="btn btn-info mr-1 mb-1s" onclick="UPDATE_REWARDS();"> تعديل <i class="fa fa-edit fa-1x"> </i>
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
                            <table class="table table-striped table-bordered dom-jQuery-events dataTable" id="get_REWARDS">

                            </table>
                            <!--end: Datatable-->
                        </div>
                    </div>



        </div>
    </div>

</div>


