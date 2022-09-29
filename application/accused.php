<div class="card card-custom gutter-b">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">المتهمين
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
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"></path>
                                                <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"></path>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>Export</button>
                <!--begin::Dropdown Menu-->
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                    <!--begin::Navigation-->
                    <ul class="navi flex-column navi-hover py-2">
                        <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
                            Choose an option:</li>
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
                <!-- Button trigger modal-->
              <a href="http://127.0.0.1/anti_drug/main_ctr/accusedtab"> <button type="button" class="btn btn-primary mr-2" data-toggle="modal" > اضافة </button></a>

            <!--end::Modal-->
            <!--end::Button-->
        </div>
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <div id="kt_datatable1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="kt_datatable1_length"><label>Show <select name="kt_datatable1_length" aria-controls="kt_datatable1" class="custom-select custom-select-sm form-control form-control-sm">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select> entries</label></div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div id="kt_datatable1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="kt_datatable1"></label></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="dataTables_scroll">
                        <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                            <div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1128.5px; padding-right: 17px;">
                                <table class="table table-separate table-head-custom table-checkable dataTable no-footer" role="grid" style="margin-left: 0px; width: 1128.5px;">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 55.2344px;" aria-sort="ascending" aria-label="Record ID: activate to sort column descending">
                                            الرقم</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 44.8906px;" aria-label="Order ID: activate to sort column ascending">
                                            الاسم الاول</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 64.9062px;" aria-label="Country: activate to sort column ascending">
                                          اسم الاب</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 74.875px;" aria-label="Ship City: activate to sort column ascending">
                                           اسم الجد</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 61.5156px;" aria-label="Ship Address: activate to sort column ascending">
                                           اسم العائلة</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 68.2812px;" aria-label="Company Agent: activate to sort column ascending">
                                            الجنس</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 68.2812px;" aria-label="Company Name: activate to sort column ascending">
                                            تاريخ الميلاد</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 51.4062px;" aria-label="Ship Date: activate to sort column ascending">
                                           مكان الميلاد</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 59.5625px;" aria-label="Status: activate to sort column ascending">
                                            اسم الام</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 31.9844px;" aria-label="Type: activate to sort column ascending">
                                            الحالة الاجتماعية</th>
                                        <th class="sorting_disabled" tabindex="0" aria-controls="kt_datatable1" rowspan="1"  colspan="1" style="width: 51.4062px;" aria-label="Ship Date: activate to sort column ascending">عدد الابناء
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 51.4062px;" aria-label="Ship Date: activate to sort column ascending">
                                             اسم الزوجة</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 51.4062px;" aria-label="Ship Date: activate to sort column ascending">
                                            اسم الشهرة</th>

                                        <th class="sorting" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 51.4062px;" aria-label="Ship Date: activate to sort column ascending">
                                            اسم الكنية</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 51.4062px;" aria-label="Ship Date: activate to sort column ascending">
                                            الجنسية </th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 51.4062px;" aria-label="Ship Date: activate to sort column ascending">
                                             المدينة</th>
                                        <th class="sorting"  rowspan="1" colspan="1" style="width: 51.4062px;" aria-label="Ship Date: activate to sort column ascending">
                                            التفاصيل</th>


                                    </tr>
                                    </thead>

                                    <tbody>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td><button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#exampleModalSizeX3"> تفاصيل </button></td>


                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="kt_datatable1_info" role="status" aria-live="polite">Showing 1 to 10 of 50 entries</div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="kt_datatable1_paginate">
                        <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="kt_datatable1_previous"><a href="#" aria-controls="kt_datatable1" data-dt-idx="0" tabindex="0" class="page-link"><i class="ki ki-arrow-back"></i></a></li>
                            <li class="paginate_button page-item active"><a href="#" aria-controls="kt_datatable1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="kt_datatable1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="kt_datatable1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="kt_datatable1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="kt_datatable1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                            <li class="paginate_button page-item next" id="kt_datatable1_next"><a href="#" aria-controls="kt_datatable1" data-dt-idx="6" tabindex="0" class="page-link"><i class="ki ki-arrow-next"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--end: Datatable-->
    </div>
</div>




<div class="modal fade" id="exampleModalSizeX3" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeXl" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">   البيانات الاساسية</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="  ">
                                                    <div class="">
                                                    
                                                    </div>
                                                    <div class="card-body ">
                                                    <div class="card card-custom gutter-b">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">Scrollable Table
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
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"></path>
                                                <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"></path>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>Export</button>
                <!--begin::Dropdown Menu-->
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                    <!--begin::Navigation-->
                    <ul class="navi flex-column navi-hover py-2">
                        <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
                            Choose an option:</li>
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
                <!-- Button trigger modal-->

            <!--end::Modal-->
            <!--end::Button-->
        </div>
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <div id="kt_datatable1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="kt_datatable1_length"><label>Show <select name="kt_datatable1_length" aria-controls="kt_datatable1" class="custom-select custom-select-sm form-control form-control-sm">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select> entries</label></div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div id="kt_datatable1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="kt_datatable1"></label></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="dataTables_scroll">
                        <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                            <div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1128.5px; padding-right: 17px;">
                                <table class="table table-separate table-head-custom table-checkable dataTable no-footer" role="grid" style="margin-left: 0px; width: 1128.5px;">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 55.2344px;" aria-sort="ascending" aria-label="Record ID: activate to sort column descending">
                                            المنطقة</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 44.8906px;" aria-label="Order ID: activate to sort column ascending">
                                           الحي</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 64.9062px;" aria-label="Country: activate to sort column ascending">
                                          المسجد </th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 74.875px;" aria-label="Ship City: activate to sort column ascending">
                                            متوفي</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 61.5156px;" aria-label="Ship Address: activate to sort column ascending">
                                           تاريخ الوفاة </th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 68.2812px;" aria-label="Company Agent: activate to sort column ascending">
                                            رقم الملف</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 68.2812px;" aria-label="Company Name: activate to sort column ascending">
                                             المهنة</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 51.4062px;" aria-label="Ship Date: activate to sort column ascending">
                                            مكان العمل</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 59.5625px;" aria-label="Status: activate to sort column ascending">
                                            المستوى المادي</th>
                                        <th class="sorting" tabindex="0" aria-controls="kt_datatable1" rowspan="1" colspan="1" style="width: 31.9844px;" aria-label="Type: activate to sort column ascending">
                                            المؤهل العلمي</th>
                                        <th class="sorting_disabled" tabindex="0" aria-controls="kt_datatable1" rowspan="1"  colspan="1" style="width: 51.4062px;" aria-label="Ship Date: activate to sort column ascending"> الملاحظات
                                        </th>

                                     
                                        


                                    </tr>
                                    </thead>

                                    <tbody>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td>aa</td>
                                   <td>aa</td>
                                
                                 


                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="kt_datatable1_info" role="status" aria-live="polite">Showing 1 to 10 of 50 entries</div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="kt_datatable1_paginate">
                        <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="kt_datatable1_previous"><a href="#" aria-controls="kt_datatable1" data-dt-idx="0" tabindex="0" class="page-link"><i class="ki ki-arrow-back"></i></a></li>
                            <li class="paginate_button page-item active"><a href="#" aria-controls="kt_datatable1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="kt_datatable1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="kt_datatable1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="kt_datatable1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="kt_datatable1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                            <li class="paginate_button page-item next" id="kt_datatable1_next"><a href="#" aria-controls="kt_datatable1" data-dt-idx="6" tabindex="0" class="page-link"><i class="ki ki-arrow-next"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--end: Datatable-->
    </div>
</div>


                                                       

                                                    </div>





                                                   

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                            </div>
                                        </div>
                                    </div>
                                </div>