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

<!--<script src= '--><?php //echo base_url()."jquery/emp1.js"?><!--' type="text/javascript" ></script>-->

<div class="main-content ">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <input type="hidden" id="CARDID" value='<?php $name = $this->session->userdata('CARDID'); echo $name; ?>'>

        <!--        <input id="CARDID">-->
        <!---->
        <!--        <input id="OLD_PASS">-->
        <!--<input id="NEW_PASS">-->
        <!--<input id="CONF_PASS">-->
        <br>
        <br>
        <br>
        <div class="content-wrapper" >
            <div class="row">
                <div class="col-12">
                    <div class="container">
                        <div class="content-header" style="    color: red;
    text-align: center;     margin-top: -17px;     margin-bottom: 35px;">            <i class="ft-settings"></i>
                            الاعدادات</div>
                    </div><!--                    <p class="content-sub-header mb-1">Configure account settings to your needs.</p>-->
                </div>
            </div>
            <!-- Account Settings starts -->
            <div class="row">
                <div class="col-md-3 mt-3">
                    <!-- Nav tabs -->
                    <ul class="nav flex-column nav-pills card card-custom gutter-b" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="false">
                                <i class="ft-settings mr-1 align-middle"></i>
                                <span class="align-middle">تغير الصورة الشخصية</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="change-password-tab" data-toggle="tab" href="#change-password" role="tab" aria-controls="change-password" aria-selected="true">
                                <i class="ft-lock mr-1 align-middle"></i>
                                <span class="align-middle">تغيير كلمة المرور </span>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="col-md-9">
                    <!-- Tab panes -->
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="tab-content">
                                    <!-- General Tab -->
                                    <div class="tab-pane" id="general" role="tabpanel" aria-labelledby="general-tab">
                                        <div class="col-md-4 col-xxl-7" >
                                            <div class="text-center text-info" >
                                                <label>الصورة الشخصية</label>


                                                <div style="background: darkgrey; padding: 3px;position: center" id="kt_image_4" >
                                                    <div class="grid-hover">
                                                        <figure class="effect-chico">
                                                            <img  id="personomg" class="round-sm" alt="Logo" src='<?php echo base_url()."app-assets/img/blank.png"?>'
                                                                  style="width:189px; height:166px">
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

                                    <!-- Change Password Tab -->
                                    <div class="tab-pane active" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">

                                        <div class="form-group">
                                            <!--                                            <label for="old-password">رقم الهوية</label>-->
                                            <div class="controls">
                                                <input type="hidden" id="CARDID" value='<?php $name = $this->session->userdata('CARDID'); echo $name; ?>'>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="old-password">كلمة المرور القديمة </label>
                                            <div class="controls">
                                                <input type="password" id="OLD_PASS" class="form-control" placeholder="كلمة المرور القديمة" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="new-password">كلمة المرور الجديدة </label>
                                            <div class="controls">
                                                <input type="password" id="NEW_PASS" class="form-control" placeholder="كلمة المرور الجديدة" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="retype-new-password">تاكيد كلمة المرور الجديدة  </label>
                                            <div class="controls">
                                                <input type="password" id="CONF_PASS" class="form-control" placeholder="تاكيد كلمة المرور الجديدة  " >
                                            </div>
                                        </div>
                                        <div class="d-flex flex-sm-row flex-column justify-content-end">
                                            <button onclick="channge_password();" class="btn btn-primary mr-sm-2 mb-1">حفظ </button>
                                        </div>
                                    </div>

                                    <!-- Info Tab -->

                                    <!-- Social Links Tab -->

                                    <!-- Connections Tab -->

                                    <!-- Notifications Tab -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Account Settings ends -->

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