

<script src= '<?php echo base_url()."jquery/timeemp.js"?>' type="text/javascript" ></script>

<br>
<br>

<div class="main-content">
                <div class="content-overlay"></div>
                <div class="content-wrapper">
<div class="container">

<div class="row">



    <div class="col-md-12">
        <input type="hidden" id="user_id" value='<?php $name = $this->session->userdata('CARDID'); echo $name; ?>'>

        <!--begin::Card-->
        <div class="card card-custom gutter-b ">
            <div class="card-header bg-light-light">
                <div class="card-title ">
                    <h3 class="card-label labal-color-light">  سجل الحضور</h3>

                </div>
            </div>

            <div class="card-body ">

                <div class="row">
                    <div class="col-md-3">
                            <label for="" class="form__label control-label " style="    left: 11rem !important;
"> تاريخ اليوم</label>

                            <input type="text" id="DATE_DAY" class="form-control " placeholder=" "  data-date-format="dd-mm-yyyy" readonly>



                    </div>






                    <input type="hidden" id="CARDID" value='<?php $name = $this->session->userdata('CARDID'); echo $name; ?>'>


                    <div class="col-md-3">
                            <label for="">اسم الموظف </label>
<!--                        <select class="form-control  select2 "  value='--><?php //$name = $this->session->userdata('CARDID'); echo $name; ?><!--'>   </select>-->
                        <input id="NAME" type="text" class="form__input center form-control"  value='<?php $name = $this->session->userdata('FULLNAME'); echo $name; ?>' readonly>


<!--                            <select id="CARDID"  value='--><?php //$name = $this->session->userdata('CARDID'); echo $name; ?><!--' class="form-control  select2 "  name="param" data-placeholder="اسم الموظف " >-->
<!---->
<!--                            </select>-->







                    </div>
                    <div class="col-md-3">
                        <label for="" class="form__label control-label " style="    left: 11rem !important;">
                            وقت الدخول</label>
                        <input id="TIME_COM" type="text" class="form__input center form-control" placeholder=" " readonly>


                    </div>        <div class="col-md-3">
                        <label for="" >
                            وقت الخروج</label>
                        <input id="TIME_GO" type="text" class=" form-control" placeholder=" وقت الخروج">


                    </div>
                </div>

            </div>



            <div class="card-footer bg-light-light text-center">
                <button class="btn gradient-mint " onclick="insert_timeemp();"> إضافة <i class="fa fa-plus fa-1x">
                    </i></button>

            </div>

        </div>
        <!--end::Card-->

    </div>

</div>


<div class="card card-custom gutter-b">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">  جدول الحضور
            </h3>
        </div>
        <div class="card-toolbar">
            <!--begin::Dropdown-->
            <div class="dropdown dropdown-inline mr-2">
                <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
															<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
														</g>
													</svg>
                                                    <!--end::Svg Icon-->
												</span>Export</button>
                <!--begin::Dropdown Menu-->
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                    <!--begin::Navigation-->
                    <ul class="navi flex-column navi-hover py-2">
                        <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-print"></i>
																</span>
                                <span class="navi-text">Print</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-copy"></i>
																</span>
                                <span class="navi-text">Copy</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-excel-o"></i>
																</span>
                                <span class="navi-text">Excel</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-text-o"></i>
																</span>
                                <span class="navi-text">CSV</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-pdf-o"></i>
																</span>
                                <span class="navi-text">PDF</span>
                            </a>
                        </li>
                    </ul>
                    <!--end::Navigation-->
                </div>
                <!--end::Dropdown Menu-->
            </div>
            <!--end::Dropdown-->
            <!--begin::Button-->
            <!--end::Button-->
        </div>
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <table class="table table-striped table-bordered dom-jQuery-events dataTable" id="get_timeemp">
        </table>
        <!--end: Datatable-->
    </div>
</div>

   </div>
</div>
</div>
<script>
    var today = new Date();
    var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
    document.getElementById("DATE_DAY").value = date;
</script>

<script>
    var today = new Date();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    document.getElementById("TIME_COM").value = time;
</script>


<script>
    var base_url="<?php echo base_url(); ?>"
</script>

