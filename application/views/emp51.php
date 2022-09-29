
<script src= '<?php echo base_url()."jquery/TASKS.js"?>' type="text/javascript" ></script>

<div class="main-content">
                <div class="content-overlay"></div>
                <div class="content-wrapper">
<div class="container">
    <br>
    <br>
    <input type="hidden" id="SECTION" value='<?php $name = $this->session->userdata('SECION'); echo $name; ?>'>
<input type="hidden" id="p_id">
    <div class="row">
<!--    <div class=" col-md-3">-->
<!--        <div class="card card-custom wave wave-animate-fast wave-dark ">-->
<!--            <div class="card-body">-->
<!--                <div class="mr-20"  >-->
<!--															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
<!--																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
<!--																	<rect x="0" y="0" width="24" height="24"></rect>-->
<!--																	<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"></path>-->
<!--																	<path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000"></path>-->
<!--																	<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"></path>-->
<!--																</g>-->
<!--															</svg>-->
<!--														</span>                </div>-->
<!---->
<!--                <div class="d-flex align-items-center ">-->
<!---->
<!--                    <div class="flex-grow-1 card-spacer-x pt-5">-->
<!--                        <div class="text-inverse-info font-weight-bolder font-size-h3" style="color: black !important;">المهام الكلية  </div>-->
<!--                        <div class="text-inverse-info font-weight-bold font-size-h6 " style="color: black !important; margin-right: 47px;"><span id="count11"></span></div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--     -->
<!--    </div>-->
    <div class=" col-md-3">
        <!--begin::Iconbox-->
        <div class="card card-custom wave wave-animate-fast wave-success">
            <div class="card-body">
                <div class="mr-20"  >
<span class="svg-icon svg-icon-danger svg-icon-4x">
															<!--begin::Svg Icon | path:assets/media/svg/icons/General/Half-star.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24"></polygon>
																	<path d="M12,4.25932872 C12.1488635,4.25921584 12.3000368,4.29247316 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 L12,4.25932872 Z" fill="#000000" opacity="0.3"></path>
																	<path d="M12,4.25932872 L12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.277344,4.464261 11.6315987,4.25960807 12,4.25932872 Z" fill="#000000"></path>
																</g>
															</svg>
    <!--end::Svg Icon-->
														</span>
                </div>

                <div class="d-flex align-items-center ">

                    <div class="flex-grow-1 card-spacer-x pt-5">
                        <div class="text-inverse-info font-weight-bolder font-size-h3" style="color: green !important;     margin-right: 12px;
">المهام المنجزة </div>
                        <div class="text-inverse-info font-weight-bold font-size-h6 " id="count33" style="color: green!important; margin-right: 47px;">23</div>
                    </div>
                </div>

            </div>
        </div>
        <!--end::Iconbox-->
        <!--begin::Code example-->
        <!--end::Code example-->
    </div>
    <div class=" col-md-3">
        <!--begin::Iconbox-->
        <div class="card card-custom wave wave-animate-fast wave-warning">
            <div class="card-body">
                <div class="mr-20"  >
														<span class="svg-icon svg-icon-success svg-icon-4x">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Sketch.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"></rect>
																	<polygon fill="#000000" opacity="0.3" points="5 3 19 3 23 8 1 8"></polygon>
																	<polygon fill="#000000" points="23 8 12 20 1 8"></polygon>
																</g>
															</svg>
                                                            <!--end::Svg Icon-->
														</span>
                </div>

                <div class="d-flex align-items-center ">

                    <div class="flex-grow-1 card-spacer-x pt-5">
                        <div class="text-inverse-info font-weight-bolder font-size-h3" style="color: #11c3f9  !important;     margin-right: 12px;">المهام قيد الانتظار </div>
                        <div class="text-inverse-info font-weight-bold font-size-h6 " id="count22" style="color: #11c3f9 !important; margin-right: 47px;">23</div>
                    </div>
                </div>

            </div>
        </div>
        <!--end::Iconbox-->
        <!--begin::Code example-->
        <!--end::Code example-->
    </div>
    <div class=" col-md-3">
        <!--begin::Iconbox-->

        <div class="card card-custom wave wave-animate-fast wave-success">
            <div class="card-body">
                <div class="mr-20"  >
<span class="svg-icon svg-icon-warning svg-icon-4x">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Chart-bar1.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"></rect>
																	<rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5"></rect>
																	<rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5"></rect>
																	<path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero"></path>
																	<rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5"></rect>
																</g>
															</svg>
    <!--end::Svg Icon-->
														</span>                </div>

                <div class="d-flex align-items-center ">

                    <div class="flex-grow-1 card-spacer-x pt-5">
                        <div class="text-inverse-info font-weight-bolder font-size-h3" style="color: #fddf0a  !important;     margin-right: 12px;"> المهام قيد العمل </div>
                        <div class="text-inverse-info font-weight-bold font-size-h6 "  id="count44" style="color: #fddf0a !important; margin-right: 47px;">23</div>
                    </div>
                </div>

            </div>
        </div>
        <!--end::Iconbox-->
        <!--begin::Code example-->
        <!--end::Code example-->
    </div>
        <div class=" col-md-3">
            <!--begin::Iconbox-->

            <div class="card card-custom wave wave-animate-fast wave-warning">
                <div class="card-body">
                    <div class="mr-20"  >
<span class="svg-icon svg-icon-warning svg-icon-4x">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Chart-bar1.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"></rect>
																	<rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5"></rect>
																	<rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5"></rect>
																	<path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero"></path>
																	<rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5"></rect>
																</g>
															</svg>
    <!--end::Svg Icon-->
														</span>                </div>

                    <div class="d-flex align-items-center ">

                        <div class="flex-grow-1 card-spacer-x pt-5">
                            <div class="text-inverse-info font-weight-bolder font-size-h3" style="color: red  !important;     margin-right: 12px;"> المهام  المتاخرة </div>
                            <div class="text-inverse-info font-weight-bold font-size-h6 "  id="count66" style="color: red !important; margin-right: 47px;">23</div>
                        </div>
                    </div>

                </div>
            </div>
            <!--end::Iconbox-->
            <!--begin::Code example-->
            <!--end::Code example-->
        </div>



</div>

<br>

</div>
                    <div class="card card-custom gutter-b">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h4 class="card-label" style="    margin-right: 18px;">المهام
                                </h4>
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


                                    <div class="modal fade text-left" id="update_emp_modalaz"  tabindex="-1" role="dialog" aria-labelledby="exampleModalSizelg" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-success">
                                                    <h4 class="modal-title" id="myModalLabel8">اضافة مهمة </h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true"><i class="ft-x font-medium-2 text-bold-700"></i></span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for=""> الموظف  </label>

                                                            <select class="form-control select2" id="CARDID"
                                                                    name="param" data-placeholder="  الموظف    ">

                                                            </select>


                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for="" class="form__label control-label  "
                                                                   style="left: 20rem !important;">  اسم المهمة </label>

                                                            <input type="text"
                                                                   class="form__input center form-control" id="TASK_NAME"
                                                                   placeholder=" ">

                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for=""> نوع المهمة  </label>

                                                            <select class="form-control   select2" id="TASK_TYPE"
                                                                    name="param" data-placeholder=" نوع المهمة">
                                                                <option value="1">هامة</option>
                                                                <option value="2">عاجلة</option>
                                                                <option value="3">اخرى</option>

                                                            </select>


                                                        </div>






                                                    </div>
                                                    <div class="row" style="    margin-top: 12px;">
                                                        <div class="col-md-4">
                                                            <label for="" class="form__label control-label" style="    left: 11rem !important;">
                                                                تاريخ بدء المهمة</label>
                                                            <input type="text"
                                                                   class=" form-control pickadate-selectors" id="TASK_DATESTAR"
                                                                   placeholder=" " />



                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="" >
                                                                تاريخ انتهاء المهمة</label>
                                                            <input type="text"
                                                                   class=" form-control pickadate-selectors" id="TASK_DATEEND"
                                                                   placeholder=" " />


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
                                                        <textarea class=" form-control " rows="2" style="width:100% ; " id="TASK_DETAILES"> </textarea>

                                                    </div></div>

                                                <div class=" card-footer bg-light-light text-center">

                                                    <button  id="insert_btn" class="btn btn-success mr-1 mb-1 " onclick="insert_task();"> إضافة <i class="fa fa-plus fa-1x">

                                                        </i></button>                                                    <button id="UPDATE_btn"  class="btn btn-info mr-1 mb-1" onclick="update_task();"> تعديل <i class="fa fa-edit fa-1x"> </i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger mr-1 mb-1" data-dismiss="modal">اغلاق
                                                        <i class="fa fa-window-close fa-1x"> </i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Modal-->
                                </div>
                                <!--end::Button-->
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin: Datatable-->
                            <table style="    font-weight: bold;" class="table table-striped table-bordered dom-jQuery-events dataTable" ID="get_task1">

                            </table>
                            <!--end: Datatable-->
                        </div>
                    </div>
</div>
</div>
<!---->
<!--<script>-->
<!--    import { TimePicker } from 'antd';-->
<!---->
<!--    function onChange(time, timeString) {-->
<!--        console.log(time, timeString);-->
<!--    }-->
<!---->
<!--    ReactDOM.render(-->
<!--        <>-->
<!--            <TimePicker use12Hours onChange={onChange} />-->
<!--            <TimePicker use12Hours format="h:mm:ss A" onChange={onChange} style={{ width: 140 }} />-->
<!--            <TimePicker use12Hours format="h:mm a" onChange={onChange} />-->
<!--        </>,-->
<!--        mountNode,-->
<!--    );-->
<!--</script>-->