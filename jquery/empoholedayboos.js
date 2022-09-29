var oTable0;
var oTable;
var oTable2;
var oTable3;

$(document).ready(function(){


     get_holyday1();

     get_holydayBOSS1();
     get_holydayBOSS2();
     get_holydayBOSS3();




});



/*******************get_OUTTIME***************************/
function get_holyday1(){

     oTable = $('#get_holyday1').DataTable({
          destroy:true,
          "language": {
               url: base_url+'jquery/Arabic.json'
          },
          responsive: true,
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
               url:base_url+'eng_ctr/get_holyday1',
               dataSrc: 'items',


          },

          'columns': [
               {title: '#  ', "data": "ID"},
               {title: 'الاسم  ', "data": "FULLNAME"},

              {title: 'القسم  ', "data": "SECIONNAME"},

               {title: 'تاريخ بداية الاجازة   ', "data": "DATE_HOLIDAY_S"},
               {title: 'تاريخ انتهاء الاجازة  ', "data": "DATE_HOLIDAY_E"},
               {title: 'نوع الاجازة  ', "data": "HOLIDAY_TYPE"},
               {title: 'سبب الاجازة  ', "data": "HOLIDAY_RESON"},
               {title: ' الاجراء  ', "data": "STATUS_NO"},

               {"data": null,"sTitle":"الاجراء","sClass": "td",
                    "mRender": function(data, type, full) {
                         if(data.STATUS_NO=='قيد الإنتظار'){


                              return  ' <div class="btn-group dropdown mr-1 mb-1 ">'+
                                  ' <button type="button" class="btn btn-primary bg-light-primary dropdown-toggle" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">الاجراء</button>'+
                                  '<div class="dropdown-menu " x-placement="top-start"style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -175px, 0px);">'+
                                  '<a class="dropdown-item btn btn-danger bg-light-danger"  onclick="DELETE_holyday(' + full.ID + ')"><i class="ft-trash"></i>حدف</a>'+
                                  '<a class="dropdown-item btn btn-info bg-light-info mb-1 "   onclick="get_holyday_detail( ' + full.ID + ',' + full.CARDID + ',' + '\'' + full.DATE_HOLIDAY_S + '\',' + '\'' + full.DATE_HOLIDAY_E + '\',' + '\'' + full.HOLIDAY_TYPE + '\',' + '\'' + full.HOLIDAY_RESON + '\')"><i class="fa fa-edit"></i>تعديل</a>'+


                                  '  </div>';
                         }else{
                              return null;
                         }


                    }
               },

          ],

          "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
               var index = iDisplayIndex + 1;
               $('td:eq(0)',nRow).html(index);
               if(aData.STATUS_NO=='قيد الإنتظار'){
                    $('td', nRow).css('color', 'blue');

               }

               if(aData.STATUS_NO=='تم الرفض'){

                    $('td', nRow).css('color', 'red');

               }

               if(aData.STATUS_NO=='تم القبول'){

                    $('td', nRow).css('color', 'green');

               }


          }



     });


}


/*******************select_emp***************************/

function get_holydayBOSS1(){

     oTable1 = $('#get_holydayBOSS1').DataTable({
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
               url:base_url+'boss_ctr/get_holydayBOSS1',
               dataSrc: 'items',

          },

          'columns': [
               {title: 'م  ', "data": null},
               {title: 'الاسم  ', "data": "FULLNAME"},

             // {title: 'القسم  ', "data": "SECIONNAME"},

               {title: 'تاريخ بداية الاجازة   ', "data": "DATE_HOLIDAY_S"},
               {title: 'تاريخ انتهاء الاجازة  ', "data": "DATE_HOLIDAY_E"},
               {title: 'نوع الاجازة  ', "data": "HOLIDAY_TYPE"},
               {title: 'سبب الاجازة  ', "data": "HOLIDAY_RESON"},
               { title: 'الاجراء',"data": "STATUS_NO"},
               {"data": null,"sTitle":"الاجراء","sClass": "td",
                    "mRender": function(data, type, full) {

                         return '<button id="btn_accept_holydayBOSS" type="button" class="btn btn-outline-success round mr-1 mb-1" onclick="accept_holydayBOSS('+data.ID+')" ><i class="ft-check">قبول</i>   </button>' ;


                    }
               },
               {"data": null,"sTitle":"الاجراء","sClass": "td",
                    "mRender": function(data, type, full) {

                         return  '<button id="btn_cancel_holydayBOSS" type="button" class="btn btn-outline-danger  round mr-1 mb-1" onclick="cancel_holydayBOSS('+data.ID+')" ><i class="ft-x-circle">رفض</i> </button>'


                    }
               },


          ],
          "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
               var index = iDisplayIndex + 1;
               $('td:eq(0)',nRow).html(index);

               if(aData.STATUS_NO=='قيد الإنتظار'){
                    $('td', nRow).css('color', 'red');

               }

               $('th', nRow).css('fontsize', '30px');

          }



     });


}

function accept_holydayBOSS(p) {


     Swal.fire({
          title: 'هل  تريد رفض الطلب؟',
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
                    url: base_url + "Boss_ctr/accept_holydayBOSS",
                    dataType: "json",
                    data: {
                         ID: p ,
                    },


                    success: function (data) {
                         if (data.p_errcod == 1) {

                              toastr.success('تم قبول الطلب بنجاح', 'تم ');




                         }

                         else  if (data.p_errcod == 2) {
                              toastr.error(' لم يتم قبول الطلب ', 'خطا ');

                         }
                         else   {
                              toastr.warning('ضضضض');
                         }




                         get_holydayBOSS2();
                         get_holydayBOSS3();

                    }

               })
          }
     });
}
function cancel_holydayBOSS(p) {


     Swal.fire({
          title: 'هل  تريد رفض الطلب؟',
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
                    url: base_url + "boss_ctr/cancel_holydayBOSS",
                    dataType: "json",
                    data: {
                         ID: p ,
                    },


                    success: function (data) {
                         if (data.p_errcod == 1) {

                              toastr.success('تم رفض الطلب بنجاح', 'تم ');



                         }

                         else  if (data.p_errcod == 2) {
                              toastr.error(' لم يتم رفض الطلب ', 'خطا ');

                         }
                         else   {
                              toastr.warning('ضضضض');
                         }




                         get_holydayBOSS2();
                         get_holydayBOSS3();



                    }

               })
          }
     });
}


/*******************select_emp***************************/

function get_holydayBOSS2(){

     oTable1 = $('#get_holydayBOSS2').DataTable({
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
               url:base_url+'boss_ctr/get_holydayBOSS2',
               dataSrc: 'items',
               data: function (d) {
                    d.JOBTITLE = $('#JOBTITLE').val()
               }
          },

          'columns': [
               {title: 'م  ', "data": null},
               {title: 'الاسم  ', "data": "FULLNAME"},

               // {title: 'القسم  ', "data": "SECIONNAME"},

               {title: 'تاريخ بداية الاجازة   ', "data": "DATE_HOLIDAY_S"},
               {title: 'تاريخ انتهاء الاجازة  ', "data": "DATE_HOLIDAY_E"},
               {title: 'نوع الإجازة  ', "data": "HOLIDAY_TYPENAME"},
               {title: 'سبب الاجازة  ', "data": "HOLIDAY_RESON"},
               { title: 'الاجراء',"data": "STATUS_NO"},
               {"data": null,"sTitle":"قبول","sClass": "td",
                    "mRender": function(data, type, full) {

                         return '<button id="btn_accept_holydayBOSS" type="button" class="btn btn-outline-success round mr-1 mb-1" onclick="accept_holydayBOSS('+data.ID+')" ><i class="ft-check">قبول</i>   </button>' ;


                    }
               },
               {"data": null,"sTitle":"رفض","sClass": "td",
                    "mRender": function(data, type, full) {

                         return  '<button id="btn_cancel_holydayBOSS" type="button" class="btn btn-outline-danger  round mr-1 mb-1" onclick="cancel_holydayBOSS('+data.ID+')" ><i class="ft-x-circle">رفض</i> </button>'


                    }
               },


          ],
          "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
               var index = iDisplayIndex + 1;
               $('td:eq(0)',nRow).html(index);

               if(aData.STATUS_NO=='قيد الإنتظار'){
                    $('td', nRow).css('color', 'red');

               }

               $('th', nRow).css('fontsize', '30px');

          }



     });


}
function get_holydayBOSS3(){

     oTable3 = $('#get_holydayBOSS3').DataTable({
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
               url:base_url+'boss_ctr/get_holydayBOSS2',
               dataSrc: 'items',
               data: function (d) {
                    d.JOBTITLE = $('#JOBTITLE3').val()
               }
          },

          'columns': [
               {title: 'م  ', "data": null},
               {title: 'الاسم  ', "data": "FULLNAME"},

               // {title: 'القسم  ', "data": "SECIONNAME"},

               {title: 'تاريخ بداية الاجازة   ', "data": "DATE_HOLIDAY_S"},
               {title: 'تاريخ انتهاء الاجازة  ', "data": "DATE_HOLIDAY_E"},
               {title: 'نوع الإجازة  ', "data": "HOLIDAY_TYPENAME"},
               {title: 'سبب الاجازة  ', "data": "HOLIDAY_RESON"},
               { title: 'الاجراء',"data": "STATUS_NO"},
               {"data": null,"sTitle":"قبول","sClass": "td",
                    "mRender": function(data, type, full) {

                         return '<button id="btn_accept_holydayBOSS" type="button" class="btn btn-outline-success round mr-1 mb-1" onclick="accept_holydayBOSS('+data.ID+')" ><i class="ft-check">قبول</i>   </button>' ;


                    }
               },
               {"data": null,"sTitle":"رفض","sClass": "td",
                    "mRender": function(data, type, full) {

                         return  '<button id="btn_cancel_holydayBOSS" type="button" class="btn btn-outline-danger  round mr-1 mb-1" onclick="cancel_holydayBOSS('+data.ID+')" ><i class="ft-x-circle">رفض</i> </button>'


                    }
               },


          ],
          "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
               var index = iDisplayIndex + 1;
               $('td:eq(0)',nRow).html(index);

               if(aData.STATUS_NO=='قيد الإنتظار'){
                    $('td', nRow).css('color', 'red');

               }

               $('th', nRow).css('fontsize', '30px');

          }



     });


}

