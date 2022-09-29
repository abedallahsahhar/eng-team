var oTable0;
var oTable;
var oTable2;
var oTable3;

$(document).ready(function(){


     get_OUTTIME1();
     get_OUTTIMEBOSS1();
     get_OUTTIMEBOSS2();
     get_OUTTIMEBOSS3();


     $('#AZBTN').on('click',function (){
          $('#UPDATE_btn').hide();
          $('#insert_btn').show();

          $('#CARDID').val() ;
          $('#DATE_OUT').val('')  ;
          $('#PERIOD_TIMES').val('') ;
          $('#PERIOD_TIMEE').val('')  ;
          $('#REASON_OUT').val('')  ;
          $('#SECTION').val()  ;

          $('#update_emp_modalaz').modal('show');

     })


});



/*******************get_OUTTIME***************************/

function get_OUTTIME1(){

     oTable = $('#get_OUTTIME1').DataTable({
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
               url:base_url+'eng_ctr/get_OUTTIME1',
               dataSrc: 'items',


          },

          'columns': [
               {title: '#  ', "data": "ID"},
               {title: 'الاسم  ', "data": "FULLNAME"},

              {title: 'القسم  ', "data": "SECION"},

               {title: 'تاريخ  الادن   ', "data": "DATE_OUT"},
               {title: 'بداية  الادن  ', "data": "PERIOD_TIMES"},
               {title: 'نهاية الادن  ', "data": "PERIOD_TIMEE"},
               {title: 'سبب الادن  ', "data": "REASON_OUT"},
               {title: ' الاجراء  ', "data": "STATUS_NO"},
               {"data": null,"sTitle":"الاجراء","sClass": "td",
                    "mRender": function(data, type, full) {
                         if(data.STATUS_NO=='قيد الإنتظار'){


                              return  ' <div class="btn-group dropdown mr-1 mb-1 ">'+
                                  ' <button type="button" class="btn btn-primary bg-light-primary dropdown-toggle" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">الاجراء</button>'+
                                  '<div class="dropdown-menu " x-placement="top-start"style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -175px, 0px);">'+
                                  '<a class="dropdown-item btn btn-danger bg-light-danger"  style="    text-align: center;" onclick="DELETE_OUTTIME(' + full.ID + ')"><i class="ft-trash"></i>حدف</a>'+
                                  '<a class="dropdown-item btn btn-info bg-light-info mb-1 " style="    text-align: center;"  onclick="get_OUTTIME_detail( ' + full.ID + ',' + full.CARDID + ',' + '\'' + full.DATE_OUT + '\',' + '\'' + full.PERIOD_TIMES + '\',' + '\'' + full.PERIOD_TIMEE + '\',' + '\'' + full.REASON_OUT + '\')"><i class="fa fa-edit"></i>تعديل</a>'+


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
function insert_OUTTIME() {

     //alert('DATEBAY');

     $.ajax({
          type: 'post',
          url: base_url + "eng_ctr/insert_OUTTIME",
          dataType: "json",
          data: {
               CARDID: $('#CARDID').val() ,
               DATE_OUT: $('#DATE_OUT').val()  ,
               PERIOD_TIMES: $('#PERIOD_TIMES').val() ,
               PERIOD_TIMEE: $('#PERIOD_TIMEE').val()  ,
               STATUS_NO: $('#STATUS_NO').val()  ,
               SECTION: $('#SECTION').val() ,

               REASON_OUT: $('#REASON_OUT').val() ,



          },


          success: function (data) {
               if (data.p_errcod == 1) {

                    toastr.success('تم اضافة الطلب بنجاح', 'تم ');
                    oTable.ajax.reload(null, false);

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
function   DELETE_OUTTIME(p1) {

     Swal.fire({
          title: 'هل  تريد حذف هذا الطلب؟',
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
                    url: base_url+"eng_ctr/DELETE_OUTTIME",
                    dataType: "json",
                    data: {
                         p_id: p1
                    },


                    success: function (data) {
                         if (data.P_ERRCOD == 1) {
                              oTable.ajax.reload(null, false);

                              toastr.success('تم حدف الطلب بنجاح', 'تم ');



                         }

                         else  if (data.P_ERRCOD == 2) {
                              toastr.error(' لم تم حدف الطلب ', 'خطا ');

                         }
                         else   {
                              toastr.warning('ضضضض');
                         }






                    }

               })
          }
     });

}
function get_OUTTIME_detail(ID_OUTTIME, CARDID, DATE_OUT, PERIOD_TIMES, PERIOD_TIMEE, REASON_OUT) {

     $('#UPDATE_btn').show();
     $('#insert_btn').hide();
     $('#ID_OUTTIME').val(ID_OUTTIME);
     $('#CARDID').val(CARDID).trigger('change');
     $('#DATE_OUT').val(DATE_OUT);
     $('#PERIOD_TIMES').val(PERIOD_TIMES);
     $('#PERIOD_TIMEE').val(PERIOD_TIMEE);
     $('#REASON_OUT').val(REASON_OUT);
     $('#update_emp_modalaz').modal('show');


}
function UPDATE_OUTTIME() {

     $.ajax({
          type: 'post',
          url: base_url + "eng_ctr/UPDATE_OUTTIME",
          dataType: "json",
          data: {
               ID_OUTTIME: $('#ID_OUTTIME').val() ,
               CARDID: $('#CARDID').val() ,
               DATE_OUT: $('#DATE_OUT').val()  ,
               PERIOD_TIMES: $('#PERIOD_TIMES').val() ,
               PERIOD_TIMEE: $('#PERIOD_TIMEE').val()  ,
               REASON_OUT: $('#REASON_OUT').val() ,
               STATUS_NO: $('#STATUS_NO').val()  ,


          },


          success: function (data) {
               if (data.p_errcod == 1) {
                    oTable.ajax.reload(null, false);

                    toastr.success('تم الطلب الطلب بنجاح', 'تم ');

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

/*******************select_emp***************************/

function get_OUTTIMEBOSS1(){

     oTable1 = $('#get_OUTTIMEBOSS1').DataTable({
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
               url:base_url+'boss_ctr/get_OUTTIMEBOSS1',
               dataSrc: 'items',

          },

          'columns': [
               {title: 'م  ', "data": null},
               {title: 'الاسم  ', "data": "FULLNAME"},

             {title: 'القسم  ', "data": "SECIONNAME"},

               {title: 'تاريخ  الادن   ', "data": "DATE_OUT"},
               {title: 'بداية  الادن  ', "data": "PERIOD_TIMES"},
               {title: 'نهاية الادن  ', "data": "PERIOD_TIMEE"},
               {title: 'سبب الاجازة  ', "data": "REASON_OUT"},
               { title: 'الاجراء',"data": "STATUS_NO"},
               {"data": null,"sTitle":"الاجراء","sClass": "td",
                    "mRender": function(data, type, full) {

                         return '<button id="btn_accept_holydayBOSS" type="button" class="btn btn-outline-success round mr-1 mb-1" onclick="accept_OUTTIMEBOSS('+data.ID+')" ><i class="ft-check">قبول</i>   </button>' ;


                    }
               },
               {"data": null,"sTitle":"الاجراء","sClass": "td",
                    "mRender": function(data, type, full) {

                         return  '<button id="btn_cancel_holydayBOSS" type="button" class="btn btn-outline-danger  round mr-1 mb-1" onclick="cancel_OUTTIMEBOSS('+data.ID+')" ><i class="ft-x-circle">رفض</i> </button>'


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

     setTimeout(function(){
          var rows = document.getElementById("get_OUTTIMEBOSS").getElementsByTagName("tr").length;
          //  alert(rows)

          document.getElementById("places1").innerText = rows-1;

     }, 500);

}
function accept_OUTTIMEBOSS(p) {


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
                    url: base_url + "Boss_ctr/accept_OUTTIMEBOSS",
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

                         get_OUTTIMEBOSS2();
                         get_OUTTIMEBOSS3();



                    }

               })
          }
     });
}
function cancel_OUTTIMEBOSS(p) {


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
                    url: base_url + "boss_ctr/cancel_OUTTIMEBOSS",
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

                         get_OUTTIMEBOSS2();
                         get_OUTTIMEBOSS3();





                    }

               })
          }
     });
}
/*******************select_emp***************************/
function get_OUTTIMEBOSS2(){

     oTable2 = $('#get_OUTTIMEBOSS2').DataTable({
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
               url:base_url+'boss_ctr/get_OUTTIMEBOSS2',
               dataSrc: 'items',
               data: function (d) {
                    d.JOBTITLE = $('#JOBTITLE').val()
               }
          },

          'columns': [
               {title: 'م  ', "data": null},
               {title: 'الاسم  ', "data": "FULLNAME"},

                {title: 'القسم  ', "data": "SECIONNAME"},

               {title: 'تاريخ  الادن   ', "data": "DATE_OUT"},
               {title: 'بداية  الادن  ', "data": "PERIOD_TIMES"},
               {title: 'نهاية الادن  ', "data": "PERIOD_TIMEE"},
               {title: 'سبب الاجازة  ', "data": "REASON_OUT"},
               { title: 'الاجراء',"data": "STATUS_NO"},
               {"data": null,"sTitle":"قبول","sClass": "td",
                    "mRender": function(data, type, full) {

                         return '<button id="btn_accept_holydayBOSS" type="button" class="btn btn-outline-success round mr-1 mb-1" onclick="accept_OUTTIMEBOSS('+data.ID+')" ><i class="ft-check">قبول</i>   </button>' ;


                    }
               },
               {"data": null,"sTitle":"رفض","sClass": "td",
                    "mRender": function(data, type, full) {

                         return  '<button id="btn_cancel_holydayBOSS" type="button" class="btn btn-outline-danger  round mr-1 mb-1" onclick="cancel_OUTTIMEBOSS('+data.ID+')" ><i class="ft-x-circle">رفض</i> </button>'


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
function get_OUTTIMEBOSS3(){

     oTable3 = $('#get_OUTTIMEBOSS3').DataTable({
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
               url:base_url+'boss_ctr/get_OUTTIMEBOSS2',
               dataSrc: 'items',
               data: function (d) {
                    d.JOBTITLE = $('#JOBTITLE3').val()
               }
          },

          'columns': [
               {title: 'م  ', "data": null},
               {title: 'الاسم  ', "data": "FULLNAME"},

               {title: 'القسم  ', "data": "SECIONNAME"},

               {title: 'تاريخ  الادن   ', "data": "DATE_OUT"},
               {title: 'بداية  الادن  ', "data": "PERIOD_TIMES"},
               {title: 'نهاية الادن  ', "data": "PERIOD_TIMEE"},
               {title: 'سبب الاجازة  ', "data": "REASON_OUT"},
               { title: 'الاجراء',"data": "STATUS_NO"},
               {"data": null,"sTitle":"قبول","sClass": "td",
                    "mRender": function(data, type, full) {

                         return '<button id="btn_accept_holydayBOSS" type="button" class="btn btn-outline-success round mr-1 mb-1" onclick="accept_OUTTIMEBOSS('+data.ID+')" ><i class="ft-check">قبول</i>   </button>' ;


                    }
               },
               {"data": null,"sTitle":"رفض","sClass": "td",
                    "mRender": function(data, type, full) {

                         return  '<button id="btn_cancel_holydayBOSS" type="button" class="btn btn-outline-danger  round mr-1 mb-1" onclick="cancel_OUTTIMEBOSS('+data.ID+')" ><i class="ft-x-circle">رفض</i> </button>'


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

