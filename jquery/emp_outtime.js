var oTable0;
var oTable;

$(document).ready(function(){
     select_emp();
     // get_DEPARTMENT();

    get_OUTTIME();

     aaaa();
     emp_cancel();
     emp_allorder();
     emp_accept();
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

function get_OUTTIME(){

     oTable = $('#get_OUTTIME').DataTable({
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
          "pageLength": 5,
          "Processing": true,
          "ServerSide": true,
          "Paginate": true,
          "ordering":false,

          "ajax":{
             //  sync:false,
               dataType:'json',
               type: 'POST',
               url:base_url+'eng_ctr/get_OUTTIME',
               dataSrc: 'items',
               data: function (d) {
                    d.user_id = $('#user_id').val()
               }

          },

          'columns': [
               {title: '#  ', "data": "ID"},
               {title: 'الاسم  ', "data": "FULLNAME"},

               // {title: 'القسم  ', "data": "SECION"},

               {title: 'تاريخ  الإذن   ', "data": "DATE_OUT"},
               {title: 'وقت بداية  الإذن  ', "data": "PERIOD_TIMES"},
               {title: 'وقت نهاية الإذن  ', "data": "PERIOD_TIMEE"},
               {title: 'سبب الإذن  ', "data": "REASON_OUT"},
               {title: ' حالة الطلب  ', "data": "STATUS_NO"},
               {"data": null,"sTitle":"الاجراء","sClass": "td",
                    "mRender": function(data, type, full) {
                         if(data.STATUS_NO=='قيد الإنتظار'){

                              //
                              // return  ' <div class="btn-group dropdown mr-1 mb-1 ">'+
                              //     ' <button type="button" class="btn btn-primary bg-light-primary dropdown-toggle" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">الاجراء</button>'+
                              //     '<div class="dropdown-menu " x-placement="top-start"style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -175px, 0px);">'+
                              //     '<a class="dropdown-item btn btn-danger bg-light-danger"  style="    text-align: center;" onclick="DELETE_OUTTIME(' + full.ID + ')"><i class="ft-trash"></i>حدف</a>'+
                              //     '<a class="dropdown-item btn btn-info bg-light-info mb-1 " style="    text-align: center;"  onclick="get_OUTTIME_detail( ' + full.ID + ',' + full.CARDID + ',' + '\'' + full.DATE_OUT + '\',' + '\'' + full.PERIOD_TIMES + '\',' + '\'' + full.PERIOD_TIMEE + '\',' + '\'' + full.REASON_OUT + '\')"><i class="fa fa-edit"></i>تعديل</a>'+
                              //
                              //
                              //     '  </div>';


                              return  '    <div class="btn-group dropdown mr-2 mb-1 "> '+
                                  ' <button type="button" class="btn btn-primary bg-light-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">الاجراء <i class="ft-alert-circle ml-2"></i></button> '+
                                  '  <div class="dropdown-menu "style="position: absolute; transform: translate3d(0px, -132px, 0px); top: 0px; left: 0px; will-change: transform;"x-placement="top-start"> '+
                                  '  <a style="    color: red"  class="dropdown-item" onclick="DELETE_OUTTIME(' + full.ID + ')"><i class="ft-trash float-right"></i> حذف</a> '+
                                    '<a style="color: blue"  class="dropdown-item"   onclick="get_OUTTIME_detail( ' + full.ID + ',' + full.CARDID + ',' + '\'' + full.DATE_OUT + '\',' + '\'' + full.PERIOD_TIMES + '\',' + '\'' + full.PERIOD_TIMEE + '\',' + '\'' + full.REASON_OUT + '\')"><i class="fa fa-edit float-right"></i>تعديل</a>'+

                                  '  </div> '+
                                  '  </div> ' ;




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
               JOBTITLE: $('#JOBTITLE').val() ,

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

                    toastr.success('تم تعديل الطلب بنجاح', 'تم ');

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
// function get_DEPARTMENT(){
//      //  alert('ssaa');
//
//      $.ajax({
//           type: 'post',
//           url: base_url+"eng_ctr/get_DEPARTMENT",
//           dataType: "json",
//
//
//
//
//           success: function (data) {
//
//
//                $('#SECTION').html('');
//
//                $('#SECTION').append('<option value=""></option>');
//
//
//                $.each(data.items, function(REC_NO, obj)
//                {
//                     $('#SECTION').append('<option value="' + obj.ID + '">' +obj.NAME + '</option>');
//                });
//
//           }
//      })
// }
function aaaa() {

     $.ajax({
          type: 'post',
          url: base_url + "Eng_ctr/aaaa",
          dataType: "json",
          data: {
               CARDID: $('#CARDID').val() ,
          },
          success: function(data) {




                    $('#count1').text(data.P_OUT);

          }
     })
}
function emp_accept() {

     $.ajax({
          type: 'post',
          url: base_url + "Eng_ctr/emp_accept",
          dataType: "json",
          data: {
               CARDID: $('#CARDID').val() ,
          },
          success: function(data) {




               $('#count2').text(data.P_OUT);

          }
     })
}
function emp_cancel() {

     $.ajax({
          type: 'post',
          url: base_url + "Eng_ctr/emp_cancel",
          dataType: "json",
          data: {
               CARDID: $('#CARDID').val() ,
          },
          success: function(data) {




               $('#count3').text(data.P_OUT);

          }
     })
}
function emp_allorder() {

     $.ajax({
          dataType: "json",
          type: 'POST',
          url: base_url + "Eng_ctr/emp_allorder",
          data: {
               CARDID: $('#CARDID').val() ,
          },
          success: function(data) {



               $('#count4').text(data.P_OUT);

          }
     })
}