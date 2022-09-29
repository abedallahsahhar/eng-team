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

<script src= '<?php echo base_url()."jquery/emp_active.js"?>' type="text/javascript" ></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="container" ng-app="myModule">

            <div ng-controller="myController">
                <br>




<br>
                <br>

                <div class="content-header" style="    color: red;
    text-align: center;     margin-top: -17px;     margin-bottom: 35px;">            <i class="ft-copy"></i>
                     ادارة المستخدمين</div>


                <div class="row">


                    <div class="col-md-12">
                        <div id="noti-box">
                        </div>
                        <br>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="headerq" style="border-top-left-radius: 11px; border-top-right-radius: 11px;"> الحسابات


                                </div>
                                <table class="table-hover" cellspacing="0" >
                                    <thead>
                                    <tr>

                                        <th> <b> رقم الهوية </b>   </th>
                                        <th> <b>  الاسم </b>   </th>
                                        <th> <b>  كلمة المرور </b>   </th>

                                        <th> <b>  الحالة </b>   </th>
                                        <th> <b>  الاجراء </b>   </th>




                                    </tr>
                                    </thead>


                                    <tbody  id="get_data_active">
                                    </tbody>
                                </table>
                                <br>
                                <br>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>