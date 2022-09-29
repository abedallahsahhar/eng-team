var oTable;
var oTable1;
var oTable2;
var icount="";


/*******************document***************************/
$(document).ready(function(){
    select_emp();
    $('#AZBTN').on('click',function (){
        $('#update_emp_modalaz').modal('show');

        $('#UPDATE_btn').hide();
        $('#insert_btn').show();
        $('#CARDID').val('').trigger('change');

        $('#TASK_NAME').val('')  ;
        $('#TASK_TYPE').val('').trigger('change');

        $('#TASK_DATESTAR').val('')  ;
        $('#TASK_DATEEND').val('')  ;
        $('#TASK_DETAILES').val('')  ;

    })



    get_task();
    latetask();
    get_tasks();
    alltasks();
    get_task1();
    donetasks();
    inworktasks();
    arrivetasks();
    donetasks1();
    inworktasks1();
    arrivetasks1()
    alltasks1();
    clear_inputs_TASK();
   // $('#kt_tab_pane_5_1').click();

});
/*********************************************/
function get_task1(){
    oTable = $('#get_task1').DataTable({
        // //
        destroy:true,
        "language": {
            url: base_url+'jquery/Arabic.json'
        },
        responsive: true,
        //"order":[0, 'asc'],
        //	"aaSorting" : [],
        //	"bAutoWidth": false,
        "lengthMenu": [
            [5, 10, 15, 20, -1],
            [5, 10, 15, 20, "All"] // change per page values here
        ],
        // set the initial value
        "pageLength": 5,
        "Processing": true,
        "ServerSide": true,
        "Paginate": true,
        "ajax":{
            dataType:'json',
            type: 'POST',
            url:base_url+'eng_ctr/get_task1',
            dataSrc: 'items',
            data: function (d) {
                d.SECTION = $('#SECTION').val()
            }
        },


        'columns': [

            { "data": null, sWidth: '1',"sTitle":" #","className": ""},

            {title: 'رقم الهوية  ', "data": "CARDID"},
       //     {title: 'الاسم الموظف  ', "data": "TASK_NAME"},
           {title: ' الاسم  ', "data": "FULLNAME"},

            {title: 'الاسم المهمة  ', "data": "TASK_NAME"},
            {title: 'نوع المهمة  ', "data": "TASK_TYPENAME"},
            {title: ' تاريخ بدء المهمة  ', "data": "TASK_DATESTAR"},
            {title: ' تاريخ انتهاء المهمة  ', "data": "TASK_DATEEND"},
            {title: ' التفاصيل  ', "data": "TASK_DETAILES", width: 20,},
            {title: ' التفاصيل  ', "data": "STATUS_NO"},

            {               title: '  الاجراء  ',

                "data": null,
                sWidth: '5px',
                Sortable: false,
                "mRender": function (data, type, full) {
                    return '<button type="button" class="btn btn-danger bg-light-danger"  onclick="DELETE_task(' + full.ID + ')">' + '<i class="ft-trash"></i> ' + '</button>';
                },
            },

            {
                "data": null,
                sWidth: '5px',
                Sortable: false,
                "mRender": function (data, type, full) {
                    return ' <button  type="button" class="btn btn-info bg-light-info mb-1 "  onclick="get_task_detail( ' + full.ID + ',' + full.CARDID + ',' + '\'' + full.TASK_NAME + '\',' + full.TASK_TYPE + ',' + '\'' + full.TASK_DATESTAR + '\',' + '\'' + full.TASK_DATEEND + '\',' + '\'' + full.TASK_DETAILES + '\')">' + '<i class="fa fa-edit"></i> ' + '</button>';
                },
            },




        ],

        "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
            var index = iDisplayIndex + 1;
            $('td:eq(0)',nRow).html(index);
            if(aData.STATUS_NO=='قيد الإنتظار'){
                $('td', nRow).css('color', 'blue');
              //  $('td', nRow).css('class', 'img1');

            }

            if(aData.STATUS_NO=='تم الانجاز'){

                $('td', nRow).css('color', 'green');

            }

            if(aData.STATUS_NO=='قيد العمل '){

                $('td', nRow).css('color', '#d1d117');

            }

            if(aData.STATUS_NO=='المهمة متاخرة'){

                $('td', nRow).css('color', 'red');

            }

        }


    });


}
function insert_task() {

 //alert('DATEBAY');

     $.ajax({
          type: 'post',
          url: base_url + "eng_ctr/insert_task",
          dataType: "json",
          data: {
               CARDID: $('#CARDID').val() ,
              TASK_NAME: $('#TASK_NAME').val()  ,
              TASK_TYPE: $('#TASK_TYPE').val() ,
              TASK_DATESTAR: $('#TASK_DATESTAR').val()  ,
              TASK_DATEEND: $('#TASK_DATEEND').val()  ,
              TASK_DETAILES: $('#TASK_DETAILES').val()  ,
              SECTION: $('#SECTION').val()  ,


          },


         success: function (data) {
             get_task1();

             if (data.p_errcod == 1) {


                 toastr.success('تم اضافة الموظف بنجاح', 'تم ');

             }
             else  if (data.p_errcod == 2) {
                 toastr.error('قمت بادخال البيانات بشكل خطا  ', 'خطأ   ');
             }
             else   {
                 toastr.warning('ضضضض');
             }


             $('#update_emp_modalaz').modal('hide');




         }
     });
}
function   DELETE_task(p1) {

    Swal.fire({
        title: 'هل  تريد حذف هذا المهمة؟',
        icon: 'question',
        iconHtml: '؟',
        confirmButtonText: 'نعم',
        cancelButtonText: 'لا',
        showCancelButton: true,
        showCloseButton: true
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            // delete_REWARD(p1)
            $.ajax({
                type: 'post',
                url: base_url+"eng_ctr/DELETE_task",
                dataType: "json",
                data: {
                    p_id: p1
                },


                success: function (data) {
                    if (data.P_ERRCOD == 1) {
                        oTable.ajax.reload(null, false);

                        toastr.success('تم حدف المهمة بنجاح', 'تم ');



                    }

                    else  if (data.P_ERRCOD == 2) {
                        toastr.error(' لم تم حدف المهمة ', 'خطا ');

                    }
                    else   {
                        toastr.warning('ضضضض');
                    }






                }

            })
        }
    });

}
function get_task_detail(p_id, CARDID, TASK_NAME, TASK_TYPE, TASK_DATESTAR, TASK_DATEEND,TASK_DETAILES) {

    $('#insert_btn').hide();
    $('#UPDATE_btn').show();
    $('#p_id').val(p_id);
    $('#CARDID').val(CARDID).trigger('change');
    $('#TASK_NAME').val(TASK_NAME);
    $('#TASK_TYPE').val(TASK_TYPE).trigger('change');
    $('#TASK_DATESTAR').val(TASK_DATESTAR);
    $('#TASK_DATEEND').val(TASK_DATEEND);
    $('#TASK_DETAILES').val(TASK_DETAILES);
    $('#update_emp_modalaz').modal('show');


}
function update_task() {



    $.ajax({
        type: 'post',
        url: base_url + "eng_ctr/update_task",
        dataType: "json",
        data: {
            p_id: $('#p_id').val() ,

            CARDID: $('#CARDID').val() ,
            TASK_NAME: $('#TASK_NAME').val()  ,
            TASK_TYPE: $('#TASK_TYPE').val() ,
            TASK_DATESTAR: $('#TASK_DATESTAR').val()  ,
            TASK_DATEEND: $('#TASK_DATEEND').val()  ,
            TASK_DETAILES: $('#TASK_DETAILES').val()  ,
            SECTION: $('#SECTION').val()  ,


        },


        success: function (data) {
            get_task1();

            if (data.p_errcod == 1) {


                toastr.success('تم اضافة الموظف بنجاح', 'تم ');

            }
            else  if (data.p_errcod == 2) {
                toastr.error('قمت بادخال البيانات بشكل خطا  ', 'خطأ   ');
            }
            else   {
                toastr.warning('ضضضض');
            }


            $('#update_emp_modalaz').modal('hide');




        }
    });
}



/**********************************************/
function select_emp(){
 // alert('ssaa');

    $.ajax({
        async :false ,
        type: 'post',
        url: base_url+"eng_ctr/get_data_section",
        dataType: "json",

        data: {
            SECTION11: $('#SECTION').val() ,
        },


        success: function (data) {


            $('#CARDID').html('');

            $('#CARDID').append('<option value=""></option>');


            $.each(data.items, function(REC_NO, obj)
            {

                $('#CARDID').append('<option value="' + obj.CARDID + '">' +obj.FULLNAME + '</option>');
            });

        }
    })
}
/**********************************************/
function get_tasks(){

    oTable1 = $('#get_tasks').DataTable({
        // //
        destroy:true,
        "language": {
            url: base_url+'jquery/Arabic.json'
        },
        responsive: true,
        //"order":[0, 'asc'],
        //	"aaSorting" : [],
        //	"bAutoWidth": false,
        "lengthMenu": [
            [5, 10, 15, 20, -1],
            [5, 10, 15, 20, "All"] // change per page values here
        ],
        // set the initial value
        "pageLength": 5,
        "Processing": true,
        "ServerSide": true,
        "Paginate": true,
        "ajax":{
            dataType:'json',
            type: 'POST',
            url:base_url+'boss_ctr/get_task',
            dataSrc: 'items',
            data: function (d) {
                d.user_id = $('#user_id').val()
            }

        },

        'columns': [
            {title: 'م  ', "data": null},

          //  {title: 'رقم الهوية  ', "data": "CARDID"},
           {title: ' الاسم  ', "data": "FULLNAME"},
            {title: 'الاسم المهمة  ', "data": "TASK_NAME"},
            {title: 'نوع المهمة  ', "data": "TASK_TYPENAME"},
            {title: ' تاريخ بدء المهمة  ', "data": "TASK_DATESTAR"},
            {title: ' تاريخ انتهاء المهمة  ', "data": "TASK_DATEEND"},

            {title: ' التفاصيل  ', "data": "TASK_DETAILES", width: 20,},


            { title: 'الاجراء',"data": "STATUS_NO"},

            // {"data": null,"sTitle":"الاجراء","sClass": "td",
            //     "mRender": function(data, type, full) {
            //
            //         return '<button id="btn_accept_holydayBOSS" type="button" class="btn btn-success py-2 px-4 col-4  ml-4" onclick="accept_task('+data.ID+')" ><i class="fa fa-save"></i>  قبول </button>' +
            //             '<button id="btn_cancel_holydayBOSS" type="button" class="btn btn-danger py-2 px-4  col-4   mr-4" onclick="done_task('+data.ID+')" ><i class="fa fa-save"></i> رفض</button>'
            //
            //
            //     }
            // },

            {"data": null,"sTitle":"الاجراء","sClass": "td",
                "mRender": function(data, type, full) {

                    return  '    <div class="btn-group dropdown mr-2 mb-1 "> '+
                    ' <button type="button" class="btn btn-primary bg-light-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">الاجراء <i class="ft-alert-circle ml-2"></i></button> '+
                    '  <div class="dropdown-menu "style="position: absolute; transform: translate3d(0px, -132px, 0px); top: 0px; left: 0px; will-change: transform;"x-placement="top-start"> '+
                    '  <a style="    color: rgb(209, 209, 23);"  class="dropdown-item" onclick="accept_task(' + full.ID + ')"><i class="ft-pocket float-right"></i>قيد العمل</a> '+
                    '  <a style="color: green"  class="dropdown-item"  onclick="done_task( ' + full.ID + ')"><i class="ft-check-circle float-right"></i>تم الانجاز</a> '+
                    '  </div> '+
                    '  </div> ' ;


                    // return  ' <div class="btn-group dropdown mr-1 mb-1 ">'+
                    //         ' <button type="button" class="btn btn-primary bg-light-success  dropdown-toggle" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">الاجراء</button>'+
                    //         '<div class="dropdown-menu " x-placement="top-start"style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -175px, 0px);">'+
                    //         '<a class="dropdown-item btn btn-danger bg-light-danger"  onclick="accept_task(' + full.ID + ')"><i class="ft-trash"></i>قيد العمل</a>'+
                    //
                    //
                    //
                    //
                    //         '<a class="dropdown-item btn btn-info bg-light-info mb-1 "   onclick="done_task( ' + full.ID + ')"><i class="fa fa-edit"></i>تم الانجاز</a>'+
                    //
                    //
                    //         '  </div>';



                }
            },

        ],
        "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
            var index = iDisplayIndex + 1;
            $('td:eq(0)',nRow).html(index);

            if(aData.STATUS_NO=='قيد الإنتظار'){
                $('td', nRow).css('color', 'red');

            }
            if(aData.STATUS_NO=='قيد العمل '){

                $('td', nRow).css('color', '#d1d117');

            }

            $('th', nRow).css('fontsize', '30px');

        }



    });


}
function accept_task(p) {
    $.ajax({
        type: 'post',
        url: base_url + "Boss_ctr/accept_task",
        dataType: "json",
        data: {
            ID: p ,
        },

        success: function (data) {
            get_tasks();
            if (data.p_errcod == 1) {


                toastr.success('تم اضافة الموظف بنجاح', 'تم ');

            }

            else  if (data.p_errcod == 2) {
                toastr.error('قمت بادخال البيانات بشكل خطا  ', 'خطأ   ');
            }
            else   {
                toastr.warning('ضضضض');
            }






        }


    });
}
function done_task(p) {
    $.ajax({
        type: 'post',
        url: base_url + "boss_ctr/done_task",
        dataType: "json",
        data: {
            ID: p ,
        },

        success: function (data) {
            get_tasks();

            if (data.p_errcod == 1) {


                toastr.success('تم اضافة الموظف بنجاح', 'تم ');

            }

            else  if (data.p_errcod == 2) {
                toastr.error('قمت بادخال البيانات بشكل خطا  ', 'خطأ   ');
            }
            else   {
                toastr.warning('ضضضض');
            }






        }


    });
}
function get_task(){
    oTable2 = $('#get_task').DataTable({
        // //
        destroy:true,
        "language": {
            url: base_url+'jquery/Arabic.json'
        },
        responsive: true,
        //"order":[0, 'asc'],
        //	"aaSorting" : [],
        //	"bAutoWidth": false,
        "lengthMenu": [
            [5, 10, 15, 20, -1],
            [5, 10, 15, 20, "All"] // change per page values here
        ],
        // set the initial value
        "pageLength": -1,
        "Processing": true,
        "ServerSide": true,
        "Paginate": true,
        "ajax":{
            dataType:'json',
            type: 'POST',
            url:base_url+'eng_ctr/get_task',
            dataSrc: 'items',

        },


        'columns': [

            { "data": null, sWidth: '1',"sTitle":" #","className": ""},

            {title: 'رقم الهوية  ', "data": "CARDID"},
            //     {title: 'الاسم الموظف  ', "data": "TASK_NAME"},

            {title: 'الاسم المهمة  ', "data": "TASK_NAME"},
            {title: 'نوع المهمة  ', "data": "TASK_TYPE"},
            {title: ' التفاصيل  ', "data": "TASK_DETAILES"},
            {title: ' التفاصيل  ', "data": "STATUS_NO"},


            {
                "data": null,
                sWidth: '5px',
                Sortable: false,
                "mRender": function (data, type, full) {
                    return '<button type="button" class="btn btn-danger btn-outline btn-circle sbold green"  onclick="DELETE_task(' + full.ID + ')">' + 'حذف ' + '</button>';
                },
            },




        ],

        "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
            var index = iDisplayIndex + 1;
            $('td:eq(0)',nRow).html(index);
            if(aData.STATUS_NO=='قيد الإنتظار'){
                $('td', nRow).css('color', 'blue');
                //  $('td', nRow).css('class', 'img1');

            }

            if(aData.STATUS_NO=='تم الانجاز'){

                $('td', nRow).css('color', 'green');

            }

            if(aData.STATUS_NO=='قيد العمل '){

                $('td', nRow).css('color', '#d1d117');

            }


        }


    });


}
/**********************************************/

function arrivetasks() {

    $.ajax({
        dataType: "json",
        type: 'POST',
        url: base_url + "Eng_ctr/arrivetasks",

        success: function(data) {



            $('#count2').text(data.P_OUT);

        }
    })
}
function donetasks() {

    $.ajax({
        dataType: "json",
        type: 'POST',
        url: base_url + "Eng_ctr/donetasks",

        success: function(data) {



            $('#count3').text(data.P_OUT);

        }
    })
}
function inworktasks() {

    $.ajax({
        dataType: "json",
        type: 'POST',
        url: base_url + "Eng_ctr/inworktasks",

        success: function(data) {



            $('#count4').text(data.P_OUT);

        }
    })
}
function alltasks() {

    $.ajax({
        dataType: "json",
        type: 'POST',
        url: base_url + "Eng_ctr/alltasks",

        success: function(data) {



            $('#count1').text(data.P_OUT);

        }
    })
}

/**********************************************/
function latetask() {

    $.ajax({
        dataType: "json",
        type: 'POST',
        url: base_url + "Eng_ctr/latetask",
        data: {
            SECTION: $('#SECTION').val() ,
        },
        success: function(data) {



            $('#count66').text(data.P_OUT);

        }
    })
}


function arrivetasks1() {

    $.ajax({
        dataType: "json",
        type: 'POST',
        url: base_url + "Eng_ctr/arrivetasks1",
        data: {
            SECTION: $('#SECTION').val() ,
        },
        success: function(data) {



            $('#count22').text(data.P_OUT);

        }
    })
}
function donetasks1() {

    $.ajax({
        dataType: "json",
        type: 'POST',
        url: base_url + "Eng_ctr/donetasks1",
        data: {
            SECTION: $('#SECTION').val() ,
        },
        success: function(data) {



            $('#count33').text(data.P_OUT);

        }
    })
}
function inworktasks1() {

    $.ajax({
        dataType: "json",
        type: 'POST',
        url: base_url + "Eng_ctr/inworktasks1",
        data: {
            SECTION: $('#SECTION').val() ,
        },
        success: function(data) {



            $('#count44').text(data.P_OUT);

        }
    })
}
function alltasks1() {

    $.ajax({
        dataType: "json",
        type: 'POST',
        url: base_url + "Eng_ctr/alltasks1",
        data: {
            SECTION: $('#SECTION').val() ,
        },
        success: function(data) {



            $('#count11').text(data.P_OUT);

        }
    })
}


