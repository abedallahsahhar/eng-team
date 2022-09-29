

<script src= '<?php echo base_url()."jquery/search.js"?>' type="text/javascript" ></script>


<style>

    .btn-group-f-left{
        float: left !important;
    }
    .modal-content1
    {
        position: relative;

        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display:         flex;
        flex-direction: column;

        width: 100%;

        pointer-events: auto;

        border: 1px solid transparent;
        border-radius: .35rem;
        outline: 0;
        /*background-color: #fff;*/
        background-clip: padding-box;

        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
    }

    .center1 {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
    }

    .card1 {
        width: 450px;
        height: 250px;
        background-color: #fff;
        background: linear-gradient(#f8f8f8, #fff);
        box-shadow: 0 8px 16px -8px rgba(0,0,0,0.4);
        border-radius: 6px;
        overflow: hidden;
        position: relative;
        margin: 1.5rem;
    }

    .card1 h1 {
        text-align: center;
    }

    .card1 .additional {
        position: absolute;
        width: 150px;
        height: 100%;
        background: linear-gradient(#dE685E, #EE786E);
        transition: width 0.4s;
        overflow: hidden;
        z-index: 2;
    }

    .card1.green .additional {
        background: linear-gradient(#92bCa6, #A2CCB6);
    }


    .card1:hover .additional {
        width: 100%;
        border-radius: 0 5px 5px 0;
    }

    .card1 .additional .user-card {
        width: 150px;
        height: 100%;
        position: relative;
        float: left;
    }

    .card1 .additional .user-card::after {
        content: "";
        display: block;
        position: absolute;
        top: 10%;
        right: -2px;
        height: 80%;
        border-left: 2px solid rgba(0,0,0,0.025);*/
    }

    .card1 .additional .user-card .level,
    .card1 .additional .user-card .points {
        top: 15%;
        color: #fff;
        text-transform: uppercase;
        font-size: 0.75em;
        font-weight: bold;
        background: rgba(0,0,0,0.15);
        padding: 0.125rem 0.75rem;
        border-radius: 100px;
        white-space: nowrap;
    }

    .card1 .additional .user-card .points {
        top: 85%;
    }

    .card1 .additional .user-card svg {
        top: 50%;
    }

    .card1 .additional .more-info {
        width: 300px;
        float: left;
        position: absolute;
        left: 150px;
        height: 100%;
    }

    .card1 .additional .more-info h1 {
        color: #fff;
        margin-bottom: 0;
    }

    .card1.green .additional .more-info h1 {
        color: #224C36;
    }

    .card1 .additional .coords {
        margin: 0 1rem;
        color: #fff;
        font-size: 1rem;
    }

    .card1.green .additional .coords {
        color: #325C46;
    }

    .card1 .additional .coords span + span {
        float: right;
    }

    .card1 .additional .stats {
        font-size: 2rem;
        display: flex;
        position: absolute;
        bottom: 1rem;
        left: 1rem;
        right: 1rem;
        top: auto;
        color: #fff;
    }

    .card1.green .additional .stats {
        color: #325C46;
    }

    .card1 .additional .stats > div {
        flex: 1;
        text-align: center;
    }

    .card1 .additional .stats i {
        display: block;
    }

    .card1 .additional .stats div.title {
        font-size: 0.75rem;
        font-weight: bold;
        text-transform: uppercase;
    }

    .card1 .additional .stats div.value {
        font-size: 1.5rem;
        font-weight: bold;
        line-height: 1.5rem;
    }

    .card1 .additional .stats div.value.infinity {
        font-size: 2.5rem;
    }

    .card1 .general {
        width: 300px;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
        box-sizing: border-box;
        padding: 1rem;
        padding-top: 0;
    }

    .card1 .general .more {
        position: absolute;
        bottom: 1rem;
        right: 1rem;
        font-size: 0.9em;
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
                                <h3 class="card-label labal-color-light">بحث الادن</h3>
                            </div>
                        </div>

                        <div class="card-body ">
                            <!--begin::Row-->
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
                                    <label for=""
                                           class="form__label control-label "
                                           style="    left: 10rem  !important;">
                                        تاريخ الادن</label>

                                    <input type="text"
                                           class=" form-control pickadate-selectors" data-date-format="dd-mm-yyyy"
                                           placeholder=" " id="DATE_OUT">


                                </div>

                            </div>

                            <div class="row">




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
                                    <select class="form-control   select2" ID="SECTION11"
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

                                        <option value="تم الرفض">تم الرفض</option>
                                        <option value="تم القبول">تم القبول </option>
                                        <option value="قيد الإنتظار">قيد الإنتظار </option>
                                    </select>



                                </div>

                                </div>


                            </div>







                            <!--end::Row-->

                        <div class="alert bg-light-success mb-2" role="alert">

                            <div class="card-footer bg-light-light text-center">
                                <button type="submit" class="btn gradient-mint " id="btn_insert_data" onclick="search_OUTTIME();">بحث <i class="ft-search"> </i></button>

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
        <table class="table table-striped table-bordered dom-jQuery-events dataTable" id="search_OUTTIME">

        </table>
        <!--end: Datatable-->
    </div>
</div>
</div>
                    <div class="modal fade" id="modal_permission1" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                            <div class="modal-content1">
                                <div class="modal-body">
                                    <div class="card1 green">
                                        <div class="additional">
                                            <div class="user-card">
                                                <!--                                        <div class="level center">-->
                                                <!--                                            Level 13-->
                                                <!--                                        </div>-->
                                                <div class="points center1" id="qqq1">
                                                    5,312 Points
                                                </div>
                                                <svg width="110" height="110" viewBox="0 0 250 250" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="title desc" class="center1">
                                                    <title id="title">Teacher</title>
                                                    <desc id="desc">Cartoon of a Caucasian woman smiling, and wearing black glasses and a purple shirt with white collar drawn by Alvaro Montoro.</desc>
                                                    <style>
                                                        .skin { fill: #eab38f; }
                                                        .eyes { fill: #1f1f1f; }
                                                        .hair { fill: #2f1b0d; }
                                                        .line { fill: none; stroke: #2f1b0d; stroke-width:2px; }
                                                    </style>


                                                    <div class="avatar avatar-xl" id="getpiccard" style="    margin-top: 87px; margin-right: 37px;">

                                                        <!--                                                    <img src="data:image/jpeg;base64" ></div>-->

                                                    </div>
                                                    <g stroke="none" stroke-width="0" clip-path="url(#scene)">
                                                        <rect x="0" y="0" width="250" height="250" fill="#b0d2e5" />

                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="more-info">
                                                <h1 id="q1">Jane Doe</h1>

                                                <div class="stats">

                                                    <div>
                                                        <div class="title">مكافئات</div>
                                                        <i class="ft-award"></i>
                                                        <span class="value infinity" id="emp_allreward"></span>
                                                    </div>
                                                    <div>
                                                        <div class="title">اجازات</div>
                                                        <i class="ft-minus-square"></i>
                                                        <span class="value infinity" id="count21"></span>
                                                    </div>
                                                    <div>
                                                        <input type="hidden" id="aaqq" >

                                                        <div class="title">ادونات</div>
                                                        <i class="ft-clock"></i>
                                                        <span class="value infinity" id="count2"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="general">
                                            <div class="mb-7">
                                                <div class="d-flex justify-content-between align-items-center" style="    margin-top: 57px;">
                                                    <span class="text-dark-75 font-weight-bolder mr-2"></span>
                                                    <h4 id="q" class="text-muted font-weight-bold" style="   position: absolute;
    right: 83px;
    color: #71f000 !important;
    margin-bottom: 47px;
                                                 " ></h4>
                                                </div>

                                                <div class="d-flex justify-content-between align-items-cente my-1">
                                                    <span class="text-dark-75 font-weight-bolder mr-2">رقم الهوية:</span>
                                                    <span id="qq" class="text-muted font-weight-bold" style="   position: absolute;
                                                      right: 182px;
                                                      color: #f7330a !important;"></span>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="text-dark-75 font-weight-bolder mr-2">رقم الجوال:</span>
                                                    <span id="qqq"  class="text-muted font-weight-bold" style="   position: absolute;
                                                      right: 182px;
                                                      color: #f7330a !important;"></span>
                                                </div> <div class="d-flex justify-content-between align-items-center">
                                                    <span class="text-dark-75 font-weight-bolder mr-2">تاريخ الميلاد:</span>
                                                    <span id="qqqq"  class="text-muted font-weight-bold" style="   position: absolute;
                                                      right: 182px;
                                                      color: #f7330a !important;"></span>
                                                </div> <div class="d-flex justify-content-between align-items-center">
                                                    <span class="text-dark-75 font-weight-bolder mr-2">الايميل:</span>
                                                    <span id="qqqqq"  class="text-muted font-weight-bold" style="   position: absolute;
                                                      right: 182px;
                                                      color: #f7330a !important;"></span>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="text-dark-75 font-weight-bolder mr-2" >المؤهل العلمي:</span>
                                                    <span id="qqqqqq"  class="text-muted font-weight-bold" style="
 position: absolute;
                                                      right: 182px;
                                                      color: #f7330a !important;"></span>
                                                </div> <div class="d-flex justify-content-between align-items-center">
                                                    <span class="text-dark-75 font-weight-bolder mr-2"> المسمى الوظيفي:</span>
                                                    <span id="qqqqqqq"  class="text-muted font-weight-bold" style="
                                                     position: absolute;
                                                      right: 182px;
                                                      color: #f7330a !important;"></span>
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
<script type="text/javascript">

    function submitForm(event){
        event.preventDefault();


    }
</script>