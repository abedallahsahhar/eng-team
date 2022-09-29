var oTable;
var oTable1;
var oTable2;
var oTable3;
var oTable4;
var oTable9;

var icount="";
let userid;

/*******************document***************************/
$(document).ready(function(){
    search_HOLIDAY();

    search_TASK();
    search_REWARDS();
    select_emp();
    search_TIMEEMP();

    search_data();
    clear_input();
    clear_inputs_h();

    search_OUTTIME();

});
/*******************empoyee***************************/

function search_data(){
    oTable = $('#search_data').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'excel'

        ],
        scrollY: '50vh',
        scrollX: true,
        scrollCollapse: true,
        destroy:true,
        "language": {
            url: base_url+'jquery/Arabic.json'
        },
        responsive: false,
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
            url:base_url+'eng_ctr/search_data',
            dataSrc: 'items',
            data: {

                CARDID: $('#CARDID').val() ,
                FIRSTNAME: $('#FIRSTNAME').val()  ,
                FATHERNAME: $('#FATHERNAME').val() ,
                GRANDFATHERNAME: $('#GRANDFATHERNAME').val()  ,
                FAMILYNAME: $('#FAMILYNAME').val()  ,
                GENDER: $('#GENDER').val()  ,
                BIRTHDATE: $('#BIRTHDATE').val()  ,
                MOBILE: $('#MOBILE').val()  ,
                EMAIL: $('#EMAIL').val()  ,
                STATUS: $('#STATUS').val()  ,
                NATIONALITY: $('#NATIONALITY').val()  ,
                DATESTARTCONTRACT: $('#DATESTARTCONTRACT').val()  ,
                STATUSJOB: $('#STATUSJOB').val()  ,
                JOBTITLE: $('#JOBTITLE').val()  ,
                SECION: $('#SECION').val()  ,
                SPECIALIZATION: $('#SPECIALIZATION').val()  ,
                DEGREE: $('#DEGREE').val()  ,
                ACHIEVEMENTS: $('#ACHIEVEMENTS').val()  ,
                p_dateendcontract_from: $('#p_dateendcontract_from').val()  ,
                p_dateendcontract_to: $('#p_dateendcontract_to').val()  ,


            },

        },


        'columns': [

            { "data": null, sWidth: '1',"sTitle":" #","className": ""},

            {title: 'رقم الهوية  ', "data": "CARDID"},

            {title: 'الاسم  ', "data": "FULLNAME"},
            {title: 'القسم  ', "data": "SECIONNAME"},
            {title: 'المسمى الوظيفي  ', "data": "JOBTITLENAME"},
          //  {title: 'الحالة  ', "data": "STATUSJOBNAME"},


            {title: 'تاريخ  البدء بالعمل   ', "data": "DATESTARTCONTRACT"},





    {title: '   تعديل   ',
        "data": null, sWidth: '5px', Sortable: false,
        "mRender": function (data, type, full) {

       //  return  ' <button type="button" class="btn btn-primary btn-outline btn-circle sbold "  onclick="get_item_personal( ' + full.CARDID + ','+'\'' + full.FIRSTNAME + '\','+'\'' + full.FATHERNAME + '\','+'\'' + full.GRANDFATHERNAME + '\','+'\'' + full.FAMILYNAME + '\', ' + full.GENDERID + ','+'\'' + full.DOB + '\','+'\'' + full.DOBPLACE + '\','+'\'' + full.MOTHERNAME + '\',' + full.SOCIALSTATEID + ',' + full.CHILDNO + ','+'\'' + full.WIFENAME + '\','+'\'' + full.FAMOUSNAME + '\','+'\'' + full.AGNOMEN + '\',' + full.NATIONALITYID + ',' + full.CITYID + ',' + full.COUNTRYID + ',' + full.REGIONID + ',' + full.MOSQUEID + ','+'\'' + full.MOREDETAILSPLACE + '\',' + full.ISDEATH + ','+'\'' + full.DATEOFDEATH + '\',' + full.FILENO + ',' + full.CLASSIFICATIONPERSONTYPEID + ',' + full.JOBID + ','+'\'' + full.JOBPLACE + '\' ,' + full.MATERIALLEVEL + ',' + full.QUALIFICATIONID + ','+'\'' + full.NOTE + '\' )">'+'تعديل '+'</button>' ;

        return  ' <a href="'+ base_url+'main_ctr/emp1?CARDID='+full.CARDID +'"> <button class="btn btn-info bg-light-info mb-1  "> <i class="fa fa-edit"></i></button></a>' ;                 },
    },
            {title: '   عرض   ',
                "data": null, sWidth: '5px', Sortable: false,
                "mRender": function (data, type, full) {

                    //  return  ' <button type="button" class="btn btn-primary btn-outline btn-circle sbold "  onclick="get_item_personal( ' + full.CARDID + ','+'\'' + full.FIRSTNAME + '\','+'\'' + full.FATHERNAME + '\','+'\'' + full.GRANDFATHERNAME + '\','+'\'' + full.FAMILYNAME + '\', ' + full.GENDERID + ','+'\'' + full.DOB + '\','+'\'' + full.DOBPLACE + '\','+'\'' + full.MOTHERNAME + '\',' + full.SOCIALSTATEID + ',' + full.CHILDNO + ','+'\'' + full.WIFENAME + '\','+'\'' + full.FAMOUSNAME + '\','+'\'' + full.AGNOMEN + '\',' + full.NATIONALITYID + ',' + full.CITYID + ',' + full.COUNTRYID + ',' + full.REGIONID + ',' + full.MOSQUEID + ','+'\'' + full.MOREDETAILSPLACE + '\',' + full.ISDEATH + ','+'\'' + full.DATEOFDEATH + '\',' + full.FILENO + ',' + full.CLASSIFICATIONPERSONTYPEID + ',' + full.JOBID + ','+'\'' + full.JOBPLACE + '\' ,' + full.MATERIALLEVEL + ',' + full.QUALIFICATIONID + ','+'\'' + full.NOTE + '\' )">'+'تعديل '+'</button>' ;

                    return  '<button  onclick="model_parm(' + full.CARDID +')" class="btn btn-success bg-light-success mr-3 mb-1">'+
                    '<i class="fa fa-eye"></i>'+
                    '</button>';


                    },
            },
        ],

        "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {

            icount++;
            var index = iDisplayIndex +1;
            $('td:eq(0)',nRow).html(index);
            $('.display').addClass('display-block');

            $('.dt-buttons').addClass('btn-group-f-left');
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mb-2 btn-sm');

        }


    });



}
function clear_input() {
    toastr.options = {
        "positionClass": "toast-center-center",
    }
     $('#CARDID').val('');
     $('#FIRSTNAME').val('');
     $('#FATHERNAME').val('');
     $('#GRANDFATHERNAME').val('');
     $('#FAMILYNAME').val('');

     $('#GENDER').val('').trigger('change');
     $('#BIRTHDATE').val('');
     $('#MOBILE').val('');
     $('#EMAIL').val('');

     $('#STATUS').val('').trigger('change');
     $('#NATIONALITY').val('').trigger('change');
     $('#SECION').val('').trigger('change');

     $('#SPECIALIZATION').val('').trigger('change');
     $('#DEGREE').val('').trigger('change');
     $('#ACHIEVEMENTS').val('');
     $('#DATESTARTCONTRACT').val('');
     $('#STATUSJOB').val('').trigger('change');
     $('#JOBTITLE').val('').trigger('change');
    $('#SECTION11').val('').trigger('change');
    $('#SECTION1122').val('').trigger('change');
    $('#STATUS_NO').val('').trigger('change');
    $('#TASK_TYPE').val('').trigger('change');
    $('#DATE_REWARDS').val('').trigger('change');
    $('#TYPPE_REWARDS').val('').trigger('change');
    $('#SECTION667').val('').trigger('change');
    $('#DATE_DAY').val('');


    get_picture();

    toastr.warning('تم تفريغ البيانات !', 'تم ');

}

function search_HOLIDAY(){

    oTable1 = $('#search_HOLIDAY').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'excel'

        ],
        scrollY: '50vh',
        scrollX: true,
        scrollCollapse: true,
        destroy:true,
        "language": {
            url: base_url+'jquery/Arabic.json'
        },
        responsive: false,
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
            url:base_url+'eng_ctr/search_HOLIDAY',
            dataSrc: 'items',
            data: {

                CARDID: $('#CARDID').val() ,
                FIRSTNAME: $('#FIRSTNAME').val()  ,
                FATHERNAME: $('#FATHERNAME').val() ,
                GRANDFATHERNAME: $('#GRANDFATHERNAME').val()  ,
                FAMILYNAME: $('#FAMILYNAME').val()  ,
                DATE_HOLIDAY_S: $('#DATE_HOLIDAY_S').val()  ,
                DATE_HOLIDAY_E: $('#DATE_HOLIDAY_E').val() ,
                HOLIDAY_TYPE: $('#HOLIDAY_TYPE').val()  ,
                JOBTITLE: $('#JOBTITLE').val()  ,
                STATUS_NO: $('#STATUS_NO').val()  ,
                SECTION: $('#SECTION1').val()  ,



            },

        },


        'columns': [
            {title: '#  ', "data": "ID"},
            {title: 'الاسم  ', "data": "FULLNAME"},

            // {title: 'القسم  ', "data": "SECIONNAME"},

            {title: 'تاريخ بداية الإجازة   ', "data": "DATE_HOLIDAY_S"},
            {title: 'تاريخ انتهاء الإجازة  ', "data": "DATE_HOLIDAY_E"},
            {title: 'نوع الإجازة  ', "data": "HOLIDAY_TYPENAME"},
            {title: 'سبب الإجازة  ', "data": "HOLIDAY_RESON"},
            {title: ' حالة الطلب  ', "data": "STATUS_NO"},




            {title: '   تعديل   ',
                "data": null, sWidth: '5px', Sortable: false,
                "mRender": function (data, type, full) {

                    //  return  ' <button type="button" class="btn btn-primary btn-outline btn-circle sbold "  onclick="get_item_personal( ' + full.CARDID + ','+'\'' + full.FIRSTNAME + '\','+'\'' + full.FATHERNAME + '\','+'\'' + full.GRANDFATHERNAME + '\','+'\'' + full.FAMILYNAME + '\', ' + full.GENDERID + ','+'\'' + full.DOB + '\','+'\'' + full.DOBPLACE + '\','+'\'' + full.MOTHERNAME + '\',' + full.SOCIALSTATEID + ',' + full.CHILDNO + ','+'\'' + full.WIFENAME + '\','+'\'' + full.FAMOUSNAME + '\','+'\'' + full.AGNOMEN + '\',' + full.NATIONALITYID + ',' + full.CITYID + ',' + full.COUNTRYID + ',' + full.REGIONID + ',' + full.MOSQUEID + ','+'\'' + full.MOREDETAILSPLACE + '\',' + full.ISDEATH + ','+'\'' + full.DATEOFDEATH + '\',' + full.FILENO + ',' + full.CLASSIFICATIONPERSONTYPEID + ',' + full.JOBID + ','+'\'' + full.JOBPLACE + '\' ,' + full.MATERIALLEVEL + ',' + full.QUALIFICATIONID + ','+'\'' + full.NOTE + '\' )">'+'تعديل '+'</button>' ;

                    return  ' <a href="'+ base_url+'main_ctr/emp1?CARDID='+full.CARDID +'"> <button class="btn btn-info bg-light-info mb-1  "> <i class="fa fa-edit"></i></button></a>' ;                 },
            },
            {title: '   عرض   ',
                "data": null, sWidth: '5px', Sortable: false,
                "mRender": function (data, type, full) {

                    //  return  ' <button type="button" class="btn btn-primary btn-outline btn-circle sbold "  onclick="get_item_personal( ' + full.CARDID + ','+'\'' + full.FIRSTNAME + '\','+'\'' + full.FATHERNAME + '\','+'\'' + full.GRANDFATHERNAME + '\','+'\'' + full.FAMILYNAME + '\', ' + full.GENDERID + ','+'\'' + full.DOB + '\','+'\'' + full.DOBPLACE + '\','+'\'' + full.MOTHERNAME + '\',' + full.SOCIALSTATEID + ',' + full.CHILDNO + ','+'\'' + full.WIFENAME + '\','+'\'' + full.FAMOUSNAME + '\','+'\'' + full.AGNOMEN + '\',' + full.NATIONALITYID + ',' + full.CITYID + ',' + full.COUNTRYID + ',' + full.REGIONID + ',' + full.MOSQUEID + ','+'\'' + full.MOREDETAILSPLACE + '\',' + full.ISDEATH + ','+'\'' + full.DATEOFDEATH + '\',' + full.FILENO + ',' + full.CLASSIFICATIONPERSONTYPEID + ',' + full.JOBID + ','+'\'' + full.JOBPLACE + '\' ,' + full.MATERIALLEVEL + ',' + full.QUALIFICATIONID + ','+'\'' + full.NOTE + '\' )">'+'تعديل '+'</button>' ;

                    return  '<button  onclick="model_parm(' + full.CARDID +')" class="btn btn-success bg-light-success mr-3 mb-1">'+
                        '<i class="fa fa-eye"></i>'+
                        '</button>';


                },
            },
        ],

        "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {

            icount++;
            var index = iDisplayIndex +1;
            $('td:eq(0)',nRow).html(index);

            $('.display').addClass('display-block');

            $('.dt-buttons').addClass('btn-group-f-left');
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mb-2 btn-sm');

        }


    });



}
function clear_inputs_h() {
    $('#SECTION1').val('').trigger('change');
    $('#DATE_OUT').val('');

    $('#CARDID').val('');
    $('#FIRSTNAME').val('');
    $('#FATHERNAME').val('');
    $('#GRANDFATHERNAME').val('');
    $('#FAMILYNAME').val('');

    $('#DATE_HOLIDAY_S').val('');
 //   $('#DATE_HOLIDAY_E').val('');
    $('#HOLIDAY_TYPE').val('').trigger('change');
    $('#JOBTITLE').val('').trigger('change');

    $('#STATUS_NO').val('').trigger('change');
    $('#DATE_REWARDS').val('').trigger('change');
    $('#TYPPE_REWARDS').val('').trigger('change');
    $('#SECTION667').val('').trigger('change');
    $('#DATE_DAY').val('');


    toastr.warning('تم تفريغ البيانات !', 'تم ');

}

/**********************************************/

function search_OUTTIME(){
    oTable2 = $('#search_OUTTIME').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'excel'

        ],
        scrollY: '50vh',
        scrollX: true,
        scrollCollapse: true,
        destroy:true,
        "language": {
            url: base_url+'jquery/Arabic.json'
        },
        responsive: false,
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
            url:base_url+'eng_ctr/search_OUTTIME',
            dataSrc: 'items',
            data: {

                CARDID: $('#CARDID').val() ,
                FIRSTNAME: $('#FIRSTNAME').val()  ,
                FATHERNAME: $('#FATHERNAME').val() ,
                GRANDFATHERNAME: $('#GRANDFATHERNAME').val()  ,
                FAMILYNAME: $('#FAMILYNAME').val()  ,
                DATE_OUT: $('#DATE_OUT').val()  ,

                JOBTITLE: $('#JOBTITLE').val()  ,
                STATUS_NO: $('#STATUS_NO').val()  ,
                SECTION: $('#SECTION11').val()  ,



            },

        },


        'columns': [

            { "data": null, sWidth: '1',"sTitle":" #","className": ""},
            {title: 'الاسم  ', "data": "FULLNAME"},

            // {title: 'القسم  ', "data": "SECION"},

            {title: 'تاريخ  الإذن   ', "data": "DATE_OUT"},
            {title: 'وقت بداية  الإذن  ', "data": "PERIOD_TIMES"},
            {title: 'وقت نهاية الإذن  ', "data": "PERIOD_TIMEE"},
            {title: 'سبب الإذن  ', "data": "REASON_OUT"},
            {title: ' حالة الطلب  ', "data": "STATUS_NO"},




            {title: '   تعديل   ',
                "data": null, sWidth: '5px', Sortable: false,
                "mRender": function (data, type, full) {

                    //  return  ' <button type="button" class="btn btn-primary btn-outline btn-circle sbold "  onclick="get_item_personal( ' + full.CARDID + ','+'\'' + full.FIRSTNAME + '\','+'\'' + full.FATHERNAME + '\','+'\'' + full.GRANDFATHERNAME + '\','+'\'' + full.FAMILYNAME + '\', ' + full.GENDERID + ','+'\'' + full.DOB + '\','+'\'' + full.DOBPLACE + '\','+'\'' + full.MOTHERNAME + '\',' + full.SOCIALSTATEID + ',' + full.CHILDNO + ','+'\'' + full.WIFENAME + '\','+'\'' + full.FAMOUSNAME + '\','+'\'' + full.AGNOMEN + '\',' + full.NATIONALITYID + ',' + full.CITYID + ',' + full.COUNTRYID + ',' + full.REGIONID + ',' + full.MOSQUEID + ','+'\'' + full.MOREDETAILSPLACE + '\',' + full.ISDEATH + ','+'\'' + full.DATEOFDEATH + '\',' + full.FILENO + ',' + full.CLASSIFICATIONPERSONTYPEID + ',' + full.JOBID + ','+'\'' + full.JOBPLACE + '\' ,' + full.MATERIALLEVEL + ',' + full.QUALIFICATIONID + ','+'\'' + full.NOTE + '\' )">'+'تعديل '+'</button>' ;

                    return  ' <a href="'+ base_url+'main_ctr/emp1?CARDID='+full.CARDID +'"> <button class="btn btn-info bg-light-info mb-1  "> <i class="fa fa-edit"></i></button></a>' ;                 },
            },
            {title: '   عرض   ',
                "data": null, sWidth: '5px', Sortable: false,
                "mRender": function (data, type, full) {

                    //  return  ' <button type="button" class="btn btn-primary btn-outline btn-circle sbold "  onclick="get_item_personal( ' + full.CARDID + ','+'\'' + full.FIRSTNAME + '\','+'\'' + full.FATHERNAME + '\','+'\'' + full.GRANDFATHERNAME + '\','+'\'' + full.FAMILYNAME + '\', ' + full.GENDERID + ','+'\'' + full.DOB + '\','+'\'' + full.DOBPLACE + '\','+'\'' + full.MOTHERNAME + '\',' + full.SOCIALSTATEID + ',' + full.CHILDNO + ','+'\'' + full.WIFENAME + '\','+'\'' + full.FAMOUSNAME + '\','+'\'' + full.AGNOMEN + '\',' + full.NATIONALITYID + ',' + full.CITYID + ',' + full.COUNTRYID + ',' + full.REGIONID + ',' + full.MOSQUEID + ','+'\'' + full.MOREDETAILSPLACE + '\',' + full.ISDEATH + ','+'\'' + full.DATEOFDEATH + '\',' + full.FILENO + ',' + full.CLASSIFICATIONPERSONTYPEID + ',' + full.JOBID + ','+'\'' + full.JOBPLACE + '\' ,' + full.MATERIALLEVEL + ',' + full.QUALIFICATIONID + ','+'\'' + full.NOTE + '\' )">'+'تعديل '+'</button>' ;

                    return  '<button  onclick="model_parm(' + full.CARDID +')" class="btn btn-success bg-light-success mr-3 mb-1">'+
                        '<i class="fa fa-eye"></i>'+
                        '</button>';


                },
            },
        ],

        "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {

            icount++;
            var index = iDisplayIndex +1;
            $('td:eq(0)',nRow).html(index);

            $('.display').addClass('display-block');

            $('.dt-buttons').addClass('btn-group-f-left');
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mb-2 btn-sm');

        }


    });



}

/**********************************************/
function search_TASK(){
    oTable3 = $('#search_TASK').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'excel'

        ],
        scrollY: '50vh',
        scrollX: true,
        scrollCollapse: true,
        destroy:true,
        "language": {
            url: base_url+'jquery/Arabic.json'
        },
        responsive: false,
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
            url:base_url+'eng_ctr/search_TASK',
            dataSrc: 'items',
            data: {

                CARDID: $('#CARDID').val() ,
                FIRSTNAME: $('#FIRSTNAME').val()  ,
                FATHERNAME: $('#FATHERNAME').val() ,
                GRANDFATHERNAME: $('#GRANDFATHERNAME').val()  ,
                FAMILYNAME: $('#FAMILYNAME').val()  ,
                JOBTITLE: $('#JOBTITLE').val()  ,

                TASK_NAME: $('#TASK_NAME').val()  ,
                TASK_TYPE: $('#TASK_TYPE').val()  ,
                TASK_DATESTAR: $('#TASK_DATESTAR').val()  ,

                STATUS_NO: $('#STATUS_NO').val()  ,
                SECTION: $('#SECTION1122').val()  ,



            },

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

            icount++;
            var index = iDisplayIndex +1;
            $('td:eq(0)',nRow).html(index);


            $('.display').addClass('display-block');

            $('.dt-buttons').addClass('btn-group-f-left');
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mb-2 btn-sm');

        }


    });



}
function get_task_detail(p_id, CARDID55, TASK_NAME, TASK_TYPE, TASK_DATESTAR, TASK_DATEEND,TASK_DETAILES) {


    $('#p_id').val(p_id);
    $('#CARDID55').val(CARDID55).trigger('change');
    $('#TASK_NAME55').val(TASK_NAME);
    $('#TASK_TYPE55').val(TASK_TYPE).trigger('change');
    $('#TASK_DATESTAR55').val(TASK_DATESTAR);
    $('#TASK_DATEEND55').val(TASK_DATEEND);
    $('#TASK_DETAILES55').val(TASK_DETAILES);
    $('#update_emp_modalaz').modal('show');


}
function clear_inputs_TASK() {
    $('#SECTION1').val('').trigger('change');

    $('#CARDID').val('');
    $('#FIRSTNAME').val('');
    $('#FATHERNAME').val('');
    $('#GRANDFATHERNAME').val('');
    $('#FAMILYNAME').val('');

    $('#TASK_NAME').val('');
     $('#TASK_DATESTAR').val('');
    $('#HOLIDAY_TYPE').val('').trigger('change');
    $('#JOBTITLE').val('').trigger('change');

    $('#STATUS_NO').val('').trigger('change');
    $('#TASK_TYPE').val('').trigger('change');
    $('#SECTION').val('').trigger('change');
    $('#SECTION667').val('').trigger('change');
    $('#DATE_DAY').val('');


    toastr.warning('تم تفريغ البيانات !', 'تم ');

}


/**********************************************/
function search_REWARDS(){
    oTable4 = $('#search_REWARDS').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'excel'

        ],
        scrollY: '50vh',
        scrollX: true,
        scrollCollapse: true,
        destroy:true,
        "language": {
            url: base_url+'jquery/Arabic.json'
        },
        responsive: false,
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
            url:base_url+'eng_ctr/search_REWARDS',
            dataSrc: 'items',
            data: {

                CARDID: $('#CARDID').val() ,
                FIRSTNAME: $('#FIRSTNAME').val()  ,
                FATHERNAME: $('#FATHERNAME').val() ,
                GRANDFATHERNAME: $('#GRANDFATHERNAME').val()  ,
                FAMILYNAME: $('#FAMILYNAME').val()  ,
                JOBTITLE: $('#JOBTITLE').val()  ,

                DATE_REWARDS: $('#DATE_REWARDS').val()  ,
                TYPPE_REWARDS: $('#TYPPE_REWARDS').val()  ,

                SECTION: $('#SECTION').val()  ,


            },

        },


        'columns': [

            { "data": null, sWidth: '1',"sTitle":" #","className": ""},

            {title: 'الاسم  ', "data": "FULLNAME"},
            {title: 'القسم  ', "data": "SECIONNAME"},
            {title: 'تاريخ  المكافئة   ', "data": "DATE_REWARDS"},
            {title: '  نوع المكافئة  ', "data": "TYPPE_REWARDSNAME"},
            {title: ' تفاصيل المكافئة  ', "data": "REASON_REWARDS"},




        ],

        "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {

            icount++;
            var index = iDisplayIndex +1;
            $('td:eq(0)',nRow).html(index);

            $('.display').addClass('display-block');

            $('.dt-buttons').addClass('btn-group-f-left');
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mb-2 btn-sm');

        }


    });



}


/**********************************************/
/**********************************************/
function search_TIMEEMP(){
    oTable9 = $('#search_TIMEEMP').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'excel'

        ],
        scrollY: '50vh',
        scrollX: true,
        scrollCollapse: true,
        destroy:true,
        "language": {
            url: base_url+'jquery/Arabic.json'
        },
        responsive: false,
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
            url:base_url+'eng_ctr/search_TIMEEMP',
            dataSrc: 'items',
            data: {

                CARDID: $('#CARDID').val() ,
                FIRSTNAME: $('#FIRSTNAME').val()  ,
                FATHERNAME: $('#FATHERNAME').val() ,
                GRANDFATHERNAME: $('#GRANDFATHERNAME').val()  ,
                FAMILYNAME: $('#FAMILYNAME').val()  ,
                JOBTITLE: $('#JOBTITLE').val()  ,

                DATE_DAY: $('#DATE_DAY').val()  ,

                SECTION: $('#SECTION667').val()  ,


            },

        },


        'columns': [

            { "data": null, sWidth: '1',"sTitle":" #","className": ""},

            {title: 'الاسم  ', "data": "FULLNAME"},
            {title: 'القسم  ', "data": "SECIONNAME"},
            {title: 'تاريح اليوم  ', "data": "DATE_DAY"},
            {title: 'الاسم  ', "data": "FULLNAME"},
            {title: 'القسم  ', "data": "SECIONNAME"},
            {title: 'وقت الحضور  ', "data": "TIME_COM"},
            {title: 'وقت الانصراف  ', "data": "TIME_GO"},




        ],

        "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {

            icount++;
            var index = iDisplayIndex +1;
            $('td:eq(0)',nRow).html(index);

            $('.display').addClass('display-block');

            $('.dt-buttons').addClass('btn-group-f-left');
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mb-2 btn-sm');

        }


    });



}


/**********************************************/
function select_emp(){
    //alert('ssaa');

    $.ajax({
        type: 'post',
        url: base_url+"eng_ctr/get_data",
        dataType: "json",




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

function model_parm(puser){

    userid=puser;
    $('#modal_permission1').modal('show');

    $.ajax({
        type: 'post',
        url: base_url + "eng_ctr/getdata_cardid",
        dataType: "json",
        data: {
            CARDID: userid,
        },

        success: function (data) { //alert(data.items[0].CARDID);
            $('#q').text( data.items[0].FULLNAME);
            $('#q1').text( data.items[0].FULLNAME);
            $('#q2').text( data.items[0].FULLNAME);

            $('#aaqq').val( data.items[0].CARDID);

            $('#qq').text( data.items[0].CARDID);
            $('#qqq').text( data.items[0].MOBILE);
            $('#qqq1').text( data.items[0].SECIONNAME);

            $('#qqqq').text( data.items[0].BIRTHDATE);
            $('#qqqqq').text( data.items[0].EMAIL);
            $('#qqqqqq').text( data.items[0].DEGREENAME);
            $('#qqqqqqq').text( data.items[0].JOBTITLENAME);
            $('#getpiccard').html(  '<img  src="data:image/jpeg;base64,' + data.items[0].PICTURE + ' ">');
            emp_accept();
            emp_accept1();
            emp_allreward();
        }


    });





}

/**********************************************/

function emp_accept() {

    $.ajax({
        type: 'post',
        url: base_url + "Eng_ctr/emp_accept",
        dataType: "json",
        data: {
            CARDID: $('#aaqq').val() ,
        },
        success: function(data) {




            $('#count2').text(data.P_OUT);

        }
    })
}
function emp_accept1() {

    $.ajax({
        type: 'post',
        url: base_url + "Eng_ctr/emp_accept1",
        dataType: "json",
        data: {
            CARDID: $('#aaqq').val() ,
        },
        success: function(data) {




            $('#count21').text(data.P_OUT);

        }
    })
}
function emp_allreward() {

    $.ajax({
        type: 'post',
        url: base_url + "Eng_ctr/emp_allreward",
        dataType: "json",
        data: {
            CARDID: $('#aaqq').val() ,
        },
        success: function(data) {




            $('#emp_allreward').text(data.P_OUT);

        }
    })
}





