


<script src= '<?php echo base_url()."jquery/emp21.js"?>' type="text/javascript" ></script>

<script src= '<?php echo base_url()."jquery/emp1.js"?>' type="text/javascript" ></script>

<style>
    .toast-center-center {
        top: 20%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
     .require{
         border-color: #dc3545;
     }
    .w-20 {
        width: 20%;
    }
    .col-md-2-2 {
        max-width: 20%;
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 20.66667%;
        -ms-flex: 0 0 20.66667%;
        flex: 0 0 20.66667%;
        padding-right: 15px;
        padding-left: 15px;
    }
    .col-md-4-4 {
        max-width: 40%;
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 20.66667%;
        -ms-flex: 0 0 20.66667%;
        flex: 0 0 40.66667%;
        padding-right: 15px;
        padding-left: 15px;
    }
    .col-md-6-6 {
        max-width: 60%;
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 20.66667%;
        -ms-flex: 0 0 20.66667%;
        flex: 0 0 60.66667%;
        padding-right: 15px;
        padding-left: 15px;
    }

    .rounded {

        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;

        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
    }


    .form-input input {
        display:none;

    }

    .form-input img {
        width:100%;
        display:none;

        margin-bottom:30px;
    }
    .grid-hover figure figcaption{
        padding: 2em 0em !important;
    }

    .grid-hover {
        position: relative;
        margin: 0 !important;
        padding-top: 0rem!important;
        list-style: none;
    }
    .grid-hover figure {
        position: relative;
        overflow: hidden;
        min-width: auto;
        margin: 0px 0%;

        background: none;
    }
    figure.effect-chico figcaption::before {
        position: absolute;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;

        border: none;
    }
    figure.effect-chico .form-input{
        opacity: 0;
    }
    figure.effect-chico:hover .form-input{
        opacity: 1;
    }

    figure.effect-chico:hover img {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        opacity: .5;
    }

    figure.effect-chico img {
        -webkit-transition: opacity .35s, -webkit-transform .35s;
        transition: opacity .35s, -webkit-transform .35s;
        transition: opacity .35s, transform .35s;
        transition: opacity .35s, transform .35s, -webkit-transform .35s;
        -webkit-transform: scale(1.02);
        -ms-transform: scale(1.02);
        transform: scale(1.02);
    }
</style>
<div class="main-content">
                <div class="content-overlay"></div>
                <div class="content-wrapper">
<div class="container">
<div class="modal-body">
    <br>
    <br>
    <div class="alert bg-light-danger mb-2" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="ft-x font-medium-2 text-bold-700"></i></span>
        </button>
        <i class="ft-alert-triangle"></i>
        <span>قم بادخال بيانات الموظف ثم قم بادراج صورة له</span>
    </div>    <div class="card card-custom gutter-b ">
        <div class="card-header bg-light-light">
            <div class="card-title ">
                <h4 class="card-label labal-color-light" style="    margin-right: 15px;"><i class="ft-user-plus" style="    margin-left: 11px;"></i>اضافة موظف</h4>
            </div>
        </div>

        <div class="card-body ">
            <div class="row justify-content-center ">

                <div class="col-md-10 col-xxl-7">
                    <div class="alert alert-custom alert-notice alert-light-success fade show mb-5" role="alert">
                        <div class="alert-icon">
                        </div>
                        <div class="alert bg-light-success mb-2" role="alert" style="    margin-right: -21px;">

                            <div class="alert-icon-left">
                                <i class="ft-star"></i>

                                <span style="    margin-right: 13px;">البيانات الاساسية</span>
                            </div>
                        </div>
                     <!--   <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
																	<span aria-hidden="true">
																		<i class="ki ki-close"></i>
																	</span>
                            </button>
                        </div> -->
                    </div>
                    <div class="row" style="    margin-top: -44px;">
                            <input type="hidden" id="p_id">

                            <div class="col-md-4">
                                    <label for="">رقم الهويه
                                    </label>
                                    <input value="<?php if (isset( $_GET['CARDID'])) echo $_GET['CARDID']?>"
                                           type="text" class="form-control  " placeholder=" "
                                           id="CARDID" name="CARDID">










                            </div>
                            <div class="col-md-8">
                                <label for=""> الاسم كامل
                                </label>
                                <div class="input-group ">

                                    <input type="text" class="  form-control" ID="FIRSTNAME"
                                           placeholder="اسم الاول  ">
                                    <input type="text" class=" form-control"  ID="FATHERNAME"
                                           placeholder="اسم الاب ">
                                    <input type="text" class=" form-control"  ID="GRANDFATHERNAME"
                                           placeholder=" اسم الجد ">
                                    <input type="text" class=" form-control"  ID="FAMILYNAME"
                                           placeholder=" اسم العائلة">




                                </div>
                            </div>



                        </div>
                    <div class="row">

                        <div class="col-md-4">
                            <label for=""> الجنس </label>

                            <select class="form-control  select2" ID="GENDER"
                                    name="para4m" data-placeholder="  الجنس">
                                <option value="0">ذكر</option>
                                <option value="1">انثى</option>

                            </select>


                        </div>
                        <div class="col-md-4">
                                <label for="" class=" control-label" style="    left: 11rem !important;">
                                    تاريخ الميلاد</label>

                                <input type="text" data-date-format="dd-mm-yyyy"
                                       class=" form-control pickadate-selectors " ID="BIRTHDATE"
                                       placeholder=" " />


                        </div>


                        <div class="col-md-4">
                            <label for="">الحالة الاجتماعية </label>

                            <select class="form-control   select2" ID="STATUS"
                                    name="para31m" data-placeholder="  الحالة الاجتماعية ">
                                <option value="0">اعزب</option>
                                <option value="1">متزوج</option>

                            </select>


                        </div>


                    </div>

                    <div class="row" >
                        <div class="col-md-4">

                            <label for="" class="form__label control-label ">
                                الايميل </label>
                            <input type="text"
                                   class="form__input center form-control"  ID="EMAIL"
                                   placeholder=" ">

                        </div>

                        <div class="col-md-4">

                        <label for="" class="form__label control-label ">رقم
                            الجوال </label>
                            <input type="text"
                                   class="form__input center form-control" ID="MOBILE"
                                   placeholder=" ">


                        </div>
                        <div class="col-md-4">

                            <label for="" class="form__label control-label ">
                                الهاتف </label>
                            <input type="text"
                                   class="form__input center form-control"  ID="TELEPHON"
                                   placeholder=" ">

                        </div>
                        <div class="row" style="  margin-top: 20px;">

                            <div class="col-md-12 " style=" margin-right: 10px;">
                                <label for="" class="form__label control-label " style="    left: 4.8rem !important;
"> العنوان</label>

                                <textarea class=" form-control form__input" rows="1" style="width:406% ;    " ID="ADDRESS"> </textarea>
                            </div>
                        </div>




                    </div>
                    <hr>
                    <div class="alert alert-custom alert-notice alert-light-success fade show mb-5" role="alert">
                        <div class="alert-icon">
                        </div>
                        <div class="alert bg-light-success mb-2" role="alert" style="    margin-right: -21px;">

                            <div class="alert-icon-left">
                                <i class="ft-star"></i>

                                <span style="    margin-right: 13px;">المؤهلات العلمية</span>
                            </div>
                        </div>
                        <!-- <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
																	<span aria-hidden="true">
																		<i class="ki ki-close"></i>
																	</span>
                            </button>
                        </div> -->
                    </div>
                    <div class="row" style="   margin-top: -49px;">
                        <div class="col-md-6">
                            <label for=""> المؤهل العلمي </label>

                            <select class="form-control   select2" ID="DEGREE"
                                    name="par43am" data-placeholder=" المؤهل العلمي ">
                                <option value="0">دبلوم</option>
                                <option value="1">بكالوريس</option>
                                <option value="2">ماجستير</option>
                                <option value="3">دكتورا</option>
                            </select>


                        </div>

                        <div class="col-md-6">
                            <label for="" class="form__label control-label ">
                                التخصص </label>

                            <input type="text"
                                   class="form__input center form-control" ID="SPECIALIZATION"
                                   placeholder=" ">

                        </div>
                        <div class="row" style="  margin-top: 20px;">

                            <div class="col-md-12 " style=" margin-right: 10px;">
                                <label for="" class="form__label control-label " style="    left: 4.8rem !important;
"> الدورات والخبرات</label>

                                <textarea class=" form-control form__input" rows="2" style="width:406% ;    " ID="ACHIEVEMENTS"> </textarea>
                            </div>
                        </div>

                    </div>

                    <hr>
                    <div class="alert alert-custom alert-notice alert-light-success fade show mb-5" role="alert">
                        <div class="alert-icon">
                        </div>
                        <div class="alert bg-light-success mb-2" role="alert" style="    margin-right: -21px;">

                            <div class="alert-icon-left">
                                <i class="ft-star"></i>

                                <span style="    margin-right: 13px;"> بيانات الوظيفة</span>
                            </div>
                        </div>                    </div>

                    <!--    <div class="alert-close">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                   <span aria-hidden="true">
                                                                       <i class="ki ki-close"></i>
                                                                   </span>
                           </button>
                       </div> -->
                       <div class="row" style="    margin-top: -51px;">
                           <div class="col-md-3">
                                   <label for="" class="form__label control-label" style="    left: 6rem !important;">
                                       تاريخ البدء بالعمل</label>
                                   <input type="text" data-date-format="dd-mm-yyyy"
                                          class="form-control pickadate-selectors" ID="DATESTARTCONTRACT"
                                          placeholder=" " />



                               </div>
                           <div class="col-md-3">
                               <label for=""> المسمى الوظيفي </label>

                               <select class="form-control  select2" ID="JOBTITLE"
                                       name="pa21ram" data-placeholder="   المسمى الوظيفي ">
                                   <option value="0">موظف</option>
                                   <option value="1">رئيس قسم</option>
                                   <option value="2">مدير</option>
                               </select>


                           </div>

                           <div class="col-md-3">
                               <label for=""> القسم  </label>

                               <select class="form-control   select2" ID="SECION" onclick="get_DEPARTMENT();"
                                       name="par2am" data-placeholder="   القسم ">
<!--                                   <option value="0">شبكات الحاسوب</option>-->
<!--                                   <option value="1">البرمجة</option>-->
<!--                                   <option value="2">الاتصالات</option>-->
<!--                                   <option value="3">صيانة</option>-->
                               </select>


                           </div>
                           <div class="col-md-3">
                               <label for=""> حالة الحساب </label>

                               <select class="form-control  select2" ID="ACTIVE_STATE"
                                       name="pa21r4am" data-placeholder="  حالة الحساب ">
                                   <option value="1">مفعل</option>
                                   <option value="2">معطل </option>

                               </select>


                           </div>

                       </div>

                   </div>

                   <div class="col-md-2 col-xxl-7" >
                       <div class="text-center text-info" style="    margin-top: 134px;">
                           <label>الصورة الشخصية</label>


                           <div style="background: darkgrey; padding: 3px;position: center" id="kt_image_4" >
                               <div class="grid-hover">
                                   <figure class="effect-chico">
                                       <img  id="personomg" class="round-sm" alt="Logo" src='<?php echo base_url()."app-assets/img/blank.png"?>'
                                             style="width:139px; height:115px">
                                       <figcaption>


                                           <div class="form-input " >
                                               <div>            <label for="file-ip-1" class="btn btn-sm btn-dark">تحميل</label>
                                                   <input type="file" id="file-ip-1"name="profile_avatar" accept="image/*" onchange="showPreview(event);"></div>


                                               <div class="d-flex justify-content-between mt-1">

                                                   <a href="#" class="btn btn-sm btn-icon btn-circle btn-success  "
                                                      onclick="insert_picture();">
                                                       <i class="fa fa-save"></i>حفظ
                                                   </a>
                                                   <a href="#" class="btn btn-icon btn-circle btn-danger   btn-sm"
                                                      onclick="delete_picture();">
                                                       <i class="fa fa-trash fa-1x"></i>حذف
                                                   </a>
                                               </div>
                                           </div>

                                       </figcaption>
                                   </figure>
                               </div>



                           </div>

                       </div>

                       <!--                       <div class="image-input image-input-outline" id="kt_image_4"-->
<!--                            style="background-image: url(assets/media/users/blank.png)  ;    margin-top: 83px;-->
<!--       margin-right: 34px;">-->
<!--                           <div  class="image-input-wrapper" style="background-image: url(assets/media/users/100_1.jpg)" >-->
<!--                           </div>-->
<!--                           <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"-->
<!--                                  data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">-->
<!--                               <i class="fa fa-pen icon-sm text-muted"></i>-->
<!--                               <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">-->
<!--                               <input type="hidden" name="profile_avatar_remove">-->
<!--                           </label>-->
<!--                           <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"-->
<!--                                 data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">-->
<!--                           <i class="ki ki-bold-close icon-xs text-muted"></i>-->
<!--                       </span>-->
<!--                           <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"-->
<!--                                 data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">-->
<!--                           <i class="ki ki-bold-close icon-xs text-muted"></i>-->
<!--                       </span>-->
<!---->
<!--                       </div>-->
<!---->
<!--                       <div class="mb-10 text-center" style="    margin-right: 22px;margin-top: 20px;">-->
<!--                           <a href="#" class="btn btn-icon btn-circle btn-light-primary mr-2"-->
<!--                              onclick="insert_picture();"   data-action="change" data-toggle="tooltip" title=""-->
<!--                              data-original-title="اضافة صورة">-->
<!--                               <i class="fa fa-plus"></i>-->
<!--                           </a>-->
<!--                           <a href="#" class="btn btn-icon btn-circle btn-light-danger mr-2" data-toggle="tooltip" title="" data-original-title="حدف صورة"-->
<!--                              onclick="delete_picture();">-->
<!--                               <i class="fa fa-trash fa-1x"></i>-->
<!--                           </a>-->
<!---->
<!--                       </div>-->
                   </div>

               </div>

           </div>
        <div class="alert bg-light-success mb-2" role="alert">
            <div class="card-footer bg-light-light text-center">
                <button class="btn btn-success mr-1 mb-1  " id="btn_insert_data"   onclick="insert_data();">إضافة <i class="fa fa-plus fa-1x"> </i></button>
                <button class="btn btn-info mr-1 mb-1" id="btn_update_data"  onclick="update_data();">
                    تعديل <i class="fa fa-edit fa-1x"> </i> </button>
                <button class="btn btn-danger mr-1 mb-1"  onclick="clear_input();">
                    تفريغ <i class="ft-x"> </i> </button>
            </div>
        </div>


       </div>
   </div>
       </div>

       </div>
       </div>

<script type="text/javascript">
    function showPreview(event){
        if(event.target.files.length > 0){
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("personomg");
            preview.src = src;
            preview.style.display = "block";
        }
    }
</script>