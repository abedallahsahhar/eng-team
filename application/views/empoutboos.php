<style>
    .carda {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 111%;
        padding: 93px;
        height: 77%;

    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .container {
        padding: 2px 16px;
    }

    .zoom {

        transition: transform .2s; /* Animation */
        width: 200px;

        margin: 0 auto;
    }

    .zoom:hover {
        transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }
</style>

<style>

    .toast-center-center {
        top: 20%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .button {
        border-radius: 4px;
        background-color: #f4511e;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 19px;
        padding: 11px;
        width: 173px;
        transition: all 0.5s;
        cursor: pointer;
        margin-top: 17px;

    }


    .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }

    .button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
    }

    .button:hover span {
        padding-right: 25px;
    }

    .button:hover span:after {
        opacity: 1;
        right: 0;
    }
    th {
        text-align: center !important;
    }
    .headerq {
        background-color: #327a81;
        color: white;
        font-size: 1.5em;
        padding: 1rem;
        text-transform: uppercase;
    }



    .table-users {
        border: 1px solid #327a81;
        border-radius: 10px;
        box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
        max-width: calc(100% - 2em);
        margin: 1em auto;
        overflow: hidden;
        width: 800px;
    }

    table {
        width: 100%;
        background-color: white !important;
        border: 1px solid #6cbec6;
        border-radius: 10px;
        box-shadow: 2px 2px 0 rgba(0, 0, 0, 0.1);
    }
    table td, table th {
        color: #2b686e;
        padding: 10px;
    }
    table td {
        text-align: center;
        vertical-align: middle;
    }
    table td:last-child {
        font-size: 0.95em;
        line-height: 1.4;
    }
    table th {
        background-color: #daeff1;
        font-weight: 300;
    }
    table tr:nth-child(2n) {
        background-color: white;
    }
    table tr:nth-child(2n+1) {
        background-color: #edf7f8;
    }

    @media screen and (max-width: 700px) {
        table, tr, td {
            display: block;
        }

        td:first-child {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 100px;
        }
        td:not(:first-child) {
            clear: both;
            margin-left: 100px;
            padding: 4px 20px 4px 90px;
            position: relative;
            text-align: left;
        }
        td:not(:first-child):before {
            color: #91ced4;
            content: "";
            display: block;
            left: 0;
            position: absolute;
        }
        td:nth-child(2):before {
            content: "Name:";
        }
        td:nth-child(3):before {
            content: "Email:";
        }
        td:nth-child(4):before {
            content: "Phone:";
        }
        td:nth-child(5):before {
            content: "Comments:";
        }

        tr {
            padding: 10px 0;
            position: relative;
        }
        tr:first-child {
            display: none;
        }
    }
    @media screen and (max-width: 500px) {
        .header {
            background-color: transparent;
            color: white;
            font-size: 2em;
            font-weight: 700;
            padding: 0;
            text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.1);
        }


        td:first-child {
            background-color: #c8e7ea;
            border-bottom: 1px solid #91ced4;
            border-radius: 10px 10px 0 0;
            position: relative;
            top: 0;
            transform: translateY(0);
            width: 100%;
        }
        td:not(:first-child) {
            margin: 0;
            padding: 5px 1em;
            width: 100%;
        }
        td:not(:first-child):before {
            font-size: 0.8em;
            padding-top: 0.3em;
            position: relative;
        }
        td:last-child {
            padding-bottom: 1rem !important;
        }

        tr {
            background-color: white !important;
            border: 1px solid #6cbec6;
            border-radius: 10px;
            box-shadow: 2px 2px 0 rgba(0, 0, 0, 0.1);
            margin: 0.5rem 0;
            padding: 0;
        }

        .table-users {
            border: none;
            box-shadow: none;
            overflow: visible;
        }
    }

</style>

<script src= '<?php echo base_url()."jquery/empoutboos.js"?>' type="text/javascript" ></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="main-content">
                <div class="content-overlay"></div>
                <div class="content-wrapper">
<div class="container" ng-app="myModule">
    <input type="hidden" id="JOBTITLE" value="1">
    <input type="hidden" id="JOBTITLE3" value="0">

    <div ng-controller="myController">
        <br>


                    <div class="card card-custom gutter-b">
                        <!--begin::Body-->
                        <div class="card-body d-flex align-items-center justify-content-between flex-wrap py-3">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center mr-2 py-2">
                                <!--begin::Title
                                <h3 class="font-weight-bold mb-0 mr-10">الموظفين</h3>-->

                                <ul class="nav nav-pills ml-2 mt-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" >
                                        <a class="nav-link active btn btn-outline-success mr-1 mb-1" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="ft-layers" style="    padding: inherit;"> ادونات الموظفين</i></a>
                                    </li>
<!--                                    <li class="nav-item" style="    margin-right: 35px;">-->
<!--                                        <a class="nav-link btn btn-outline-success mr-1 mb-1" id="pills-profile-tab " data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="ft-link"> الادونات 2</i></a>-->
<!--                                    </li>-->
                                    <li class="nav-item" style="    margin-right: 35px;">
                                        <a class="nav-link btn btn btn-outline-success mr-1 mb-1" id="pills-profile1-tab " data-toggle="pill" href="#pills-profile1" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="ft-pocket">ادونات رؤساء الاقسام</i></a>
                                    </li>
                                </ul>

                            </div>





                            <!--end::Users-->
                        </div>
                        <!--end::Body-->
                    </div>








        <div class="row">


            <div class="col-md-12">
                <div id="noti-box">
                </div>
                <br>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="card card-custom">
                            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                <div class="card-title">
                                    <h4 class="card-label" style="    margin-right: 18px;">ادونات الموظفين
                                    </h4>
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

                                        <!--end::Modal-->


                                    </div>
                                    <!--end::Button-->
                                </div>
                            </div>
                            <!--begin: Datatable-->

                                <div class="card-body">
                            <table class="table table-striped table-bordered dom-jQuery-events dataTable" id="get_OUTTIMEBOSS3">

                            </table>
                            <!--end: Datatable-->
                        </div>

                    </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">


                        <div class="card card-custom">
                            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                <div class="card-title">
                                    <h4 class="card-label" style="    margin-right: 18px;">الادونات
                                    </h4>
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

                                        <!--end::Modal-->


                                    </div>
                                    <!--end::Button-->
                                </div>
                            </div>
                                <div class="card-body">
                                <table ID="get_OUTTIMEBOSS1" class="table table-striped table-bordered dom-jQuery-events dataTable"  role="grid">
                                </table>
                            </div> </div>

                    </div>
                    <div class="tab-pane fade" id="pills-profile1" role="tabpanel" aria-labelledby="pills-profile1-tab">


                        <div class="card card-custom">
                            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                <div class="card-title">
                                    <h4 class="card-label" style="    margin-right: 18px;">ادونات رؤساء الاقسام
                                    </h4>
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

                                        <!--end::Modal-->


                                    </div>
                                    <!--end::Button-->
                                </div>
                            </div>
                            <div class="card-body">
                                <table ID="get_OUTTIMEBOSS2" class="table table-striped table-bordered dom-jQuery-events dataTable"  role="grid">
                                </table>
                            </div> </div>

                    </div>


                </div>
        </div>

        <!-- Modal Add-->

        <form ng-submit="addEmployee()">
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addModalLabel">Add Employee</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group row">
                                <label for="inputname" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" ng-model="name" placeholder="John Doe" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" ng-model="email" placeholder="eample@abc.com" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputDate" class="col-sm-2 col-form-label">DOB</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" ng-model="dob" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">Gender</div>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" ng-model="gender" value="Male" ng-required="!gender">
                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" ng-model="gender" value="Female" ng-required="!gender">
                                        <label class="form-check-label" for="inlineRadio2">Female</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPosition" class="col-sm-2 col-form-label">Position</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" ng-model="position" placeholder="e.g: Receptionist" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputSal" class="col-sm-2 col-form-label">Salary</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" ng-model="salary" placeholder="000" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputPhoto" class="col-sm-2 col-form-label">Photo URL</label>
                                <div class="col-sm-10">
                                    <input type="url" class="form-control" ng-model="photo" placeholder="http://www.abc.com/uploads/photo.jpg" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputQuote" class="col-sm-2 col-form-label">Quote</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" ng-model="quote" placeholder="Lorem ipsum..." required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            <input type="submit" class="btn btn-primary" value="Add">
                        </div>
                    </div>
                </div>
            </div>
        </form>


        <!-- Modal Edit-->

        <form ng-submit="updateEmployee()">
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="EditModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addModalLabel">Edit Employee</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="inputname" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" ng-model="name2" placeholder="John Doe" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" ng-model="email2" placeholder="eample@abc.com" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputDate" class="col-sm-2 col-form-label">DOB</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" ng-model="dob2" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">Gender</div>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" ng-model="gender2" value="Male" ng-required="!gender2">
                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" ng-model="gender2" value="Female" ng-required="!gender2">
                                        <label class="form-check-label" for="inlineRadio2">Female</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPosition" class="col-sm-2 col-form-label">Position</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" ng-model="position2" placeholder="e.g: Receptionist" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputSal" class="col-sm-2 col-form-label">Salary</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" ng-model="salary2" placeholder="000" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPhoto" class="col-sm-2 col-form-label">Photo URL</label>
                                <div class="col-sm-10">
                                    <input type="url" class="form-control"  ng-model="photo2" placeholder="http://www.abc.com/uploads/photo.jpg" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputQuote" class="col-sm-2 col-form-label">Quote</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" ng-model="quote2" placeholder="Lorem ipsum..." required></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Modal -->
        <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content text-center">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="cover">
                                <div class="c-overlay"></div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position:absolute; color:#fff; top: 10px; right:10px;">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h1 class="h1">{{name3}}</h1>

                                <h3 class="h3">{{position3}}</h3>

                            </div>
                            <div class="detail">
                                <img class="rounded-circle mx-auto mb-3" ng-src="{{photo3}}" alt="Photo" height="100" width="100" style="margin-top:-50px;">


                                <dl class="row">
                                    <dt class="col-6 text-right">Email ID :</dt>
                                    <dd class="col-6 text-left">{{email3}}</dd>

                                    <dt class="col-6 text-right">Date  of Birth :</dt>
                                    <dd class="col-6 text-left">{{dob3 | date:'dd/MM/yyyy'}}</dd>

                                    <dt class="col-6 text-right">Gender :</dt>
                                    <dd class="col-6 text-left">{{gender3}}</dd>

                                    <dt class="col-6 text-right">Salary :</dt>
                                    <dd class="col-6 text-left">{{salary3 | currency:'£'}}</dd>
                                    <dt class="col-6 text-right">Quote :</dt>
                                    <dd class="col-6 text-left">{{quote3}}</dd>

                                </dl>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                        <div class="">
                                            <!--begin::Pic-->


                                                <div class="card-content" id="getpiccard">

<!--                                                    <img src="data:image/jpeg;base64" ></div>-->

                                            </div>
                                            <!--end::Pic-->
                                            <!--begin::Title-->
                                            <!--end::Title-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::Desc-->
<!--                                        <p class="mb-7">Contrary to popular belief, Lorem Ipsum is not-->
                                            <br>
<!--                                            <a href="#" class="text-primary pr-1">#XRS-54PQ</a>simply random text</p>-->
                                        <!--end::Desc-->
                                        <!--begin::Info-->
                                        <div class="mb-7">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="text-dark-75 font-weight-bolder mr-2">الاسم:</span>
                                                <span id="q" class="text-muted font-weight-bold" style="   position: absolute;
                                                      right: 156px;
                                                      color: #f7330a !important;" ></span>
                                            </div>

                                            <div class="d-flex justify-content-between align-items-cente my-1">
                                                <span class="text-dark-75 font-weight-bolder mr-2">رقم الهوية:</span>
                                                <span id="qq" class="text-muted font-weight-bold" style="   position: absolute;
                                                      right: 182px;
                                                      color: #f7330a !important;"></span>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="text-dark-75 font-weight-bolder mr-2">القسم:</span>
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
                                                <span id="qqqqqq"  class="text-muted font-weight-bold" style="   position: absolute;
                                                      right: 261px;
                                                      color: #f7330a !important;"></span>
                                            </div> <div class="d-flex justify-content-between align-items-center">
                                                <span class="text-dark-75 font-weight-bolder mr-2"> المسمى الوظيفي:</span>
                                                <span id="qqqqqqq"  class="text-muted font-weight-bold" style="   position: absolute;
                                                      right: 261px;
                                                      color: #f7330a !important;"></span>
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
</div>