var oTable0;
var oTable;

$(document).ready(function(){
     select_emp();
     select_emp1();
     get_DEPARTMENT();
     get_holyday();

     get_joptitle0();
     aaaa1();
     emp_cancel1();
     emp_allorder1();
     emp_accept1();

     $('#AZBTN').on('click',function (){
          $('#UPDATE_btn').hide();
          $('#insert_btn').show();
          $('#EMP_NAME').val() ;
          $('#DATE_HOLIDAY_S').val('')  ;
          $('#DATE_HOLIDAY_E').val('') ;
          // $('#HOLIDAY_TYPE').val()  ;
          $('#HOLIDAY_TYPE').val('').trigger('change');

          $('#HOLIDAY_RESON').val('')  ;
          $('#update_emp_modalaz').modal('show');
     })


});



function get_joptitle0(){

     oTable0 = $('#get_joptitle0').DataTable({
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
               url:base_url+'eng_ctr/get_joptitle0',
               dataSrc: 'items',


          },

          'columns': [
               {title: 'My  ', "data": "SECION"},




          ]



     });


}
/*******************get_holyday***************************/

function get_holyday(){

     oTable = $('#get_holyday').DataTable({
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
          "ordering":false,

          "ajax":{
               dataType:'json',
               type: 'POST',
               url:base_url+'eng_ctr/get_holyday',
               dataSrc: 'items',
               data: function (d) {
                    d.user_id = $('#user_id').val()
               }

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

               {"data": null,"sTitle":"الاجراء","sClass": "td",
                    "mRender": function(data, type, full) {
                         if(data.STATUS_NO=='قيد الإنتظار'){

                              //
                              // return  ' <div class="btn-group dropdown mr-1 mb-1 ">'+
                              // ' <button type="button" class="btn btn-primary bg-light-primary dropdown-toggle" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">الاجراء</button>'+
                              // '<div class="dropdown-menu " x-placement="top-start"style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -175px, 0px);">'+
                              // '<a class="dropdown-item btn btn-danger bg-light-danger"  onclick="DELETE_holyday(' + full.ID + ')"><i class="ft-trash"></i>حدف</a>'+
                              // '<a class="dropdown-item btn btn-info bg-light-info mb-1 "   onclick="get_holyday_detail( ' + full.ID + ',' + full.CARDID + ',' + '\'' + full.DATE_HOLIDAY_S + '\',' + '\'' + full.DATE_HOLIDAY_E + '\',' + '\'' + full.HOLIDAY_TYPE + '\',' + '\'' + full.HOLIDAY_RESON + '\')"><i class="fa fa-edit"></i>تعديل</a>'+
                              //
                              //
                              //
                              // '  </div>';



                              return  '    <div class="btn-group dropdown mr-2 mb-1 "> '+
                                  ' <button type="button" class="btn btn-primary bg-light-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">الاجراء <i class="ft-alert-circle ml-2"></i></button> '+
                                  '  <div class="dropdown-menu "style="position: absolute; transform: translate3d(0px, -132px, 0px); top: 0px; left: 0px; will-change: transform;"x-placement="top-start"> '+
                                  '<a style="    color: red"  class="dropdown-item"  onclick="DELETE_holyday(' + full.ID + ')"><i class="ft-trash float-right"></i>حدف</a>'+


                                  '<a  style="color: blue"  class="dropdown-item"   onclick="get_holyday_detail( ' + full.ID + ',' + full.CARDID + ',' + '\'' + full.DATE_HOLIDAY_S + '\',' + '\'' + full.DATE_HOLIDAY_E + '\',' + '\'' + full.HOLIDAY_TYPE + '\',' + '\'' + full.HOLIDAY_RESON + '\')"><i class="fa fa-edit float-right"></i>تعديل</a>'+

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
function insert_holyday() {
     toastr.options = {
          "positionClass": "toast-center-center",
     }
     //alert('DATEBAY');

     $.ajax({
          type: 'post',
          url: base_url + "eng_ctr/insert_holyday",
          dataType: "json",
          data: {
               CARDID: $('#CARDID').val() ,
               DATE_HOLIDAY_S: $('#DATE_HOLIDAY_S').val()  ,
               DATE_HOLIDAY_E: $('#DATE_HOLIDAY_E').val() ,
               HOLIDAY_TYPE: $('#HOLIDAY_TYPE').val()  ,
               STATUS_NO: $('#STATUS_NO').val() ,
               HOLIDAY_RESON: $('#HOLIDAY_RESON').val()  ,
               SECTION: $('#SECTION').val()  ,
               JOBTITLE: $('#JOBTITLE').val() ,


          },


          success: function (data) {
               if (data.p_errcod == 1) {
                    oTable.ajax.reload(null, false);

                    toastr.success('تم اضافة الاجازة بنجاح', 'تم ');

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
function   DELETE_holyday(p1) {
     toastr.options = {
          "positionClass": "toast-center-center",
     }
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
                    url: base_url+"eng_ctr/DELETE_holyday",
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
function get_holyday_detail(ID_HOLIDAY, CARDID, DATE_HOLIDAY_S, DATE_HOLIDAY_E, HOLIDAY_TYPE, HOLIDAY_RESON) {

     $('#insert_btn').hide();
     $('#UPDATE_btn').show();
     $('#ID_HOLIDAY').val(ID_HOLIDAY);

     $('#CARDID').val(CARDID).trigger('change');
     $('#DATE_HOLIDAY_S').val(DATE_HOLIDAY_S);
     $('#DATE_HOLIDAY_E').val(DATE_HOLIDAY_E);
     $('#HOLIDAY_TYPE').val(HOLIDAY_TYPE).trigger('change');
     $('#HOLIDAY_RESON').val(HOLIDAY_RESON);
     $('#update_emp_modalaz').modal('show');

}
function UPDATE_holyday() {
     toastr.options = {
          "positionClass": "toast-center-center",
     }
     //alert('DATEBAY');

     $.ajax({
          type: 'post',
          url: base_url + "eng_ctr/UPDATE_holyday",
          dataType: "json",
          data: {
               ID_HOLIDAY: $('#ID_HOLIDAY').val() ,
               CARDID: $('#CARDID').val() ,
               DATE_HOLIDAY_S: $('#DATE_HOLIDAY_S').val()  ,
               DATE_HOLIDAY_E: $('#DATE_HOLIDAY_E').val() ,
               HOLIDAY_TYPE: $('#HOLIDAY_TYPE').val()  ,
               STATUS_NO: $('#STATUS_NO').val() ,
               HOLIDAY_RESON: $('#HOLIDAY_RESON').val()  ,


          },


          success: function (data) {
               if (data.p_errcod == 1) {
                    oTable.ajax.reload(null, false);

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

/*******************select_emp***************************/

function select_emp(){
   //  alert('ssaa');

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
function select_emp1(){
  //   alert('ssaa');

     $.ajax({
          type: 'post',
          url: base_url+"eng_ctr/get_data",
          dataType: "json",




          success: function (data) {


               $('#kt_select2_3').html('');

               $('#kt_select2_3').append('<option value=""></option>');


               $.each(data.items, function(REC_NO, obj)
               {
                    $('#kt_select2_3').append('<option value="' + obj.CARDID + '">' +obj.FULLNAME + '</option>');
               });

          }
     })
}
function get_DEPARTMENT(){
     //  alert('ssaa');

     $.ajax({
          type: 'post',
          url: base_url+"eng_ctr/get_DEPARTMENT",
          dataType: "json",




          success: function (data) {


               $('#SECTION').html('');

               $('#SECTION').append('<option value=""></option>');


               $.each(data.items, function(REC_NO, obj)
               {
                    $('#SECTION').append('<option value="' + obj.ID + '">' +obj.NAME + '</option>');
               });

          }
     })
}
function aaaa1() {

     $.ajax({
          type: 'post',
          url: base_url + "Eng_ctr/aaaa1",
          dataType: "json",
          data: {
               CARDID: $('#CARDID').val() ,
          },
          success: function(data) {




               $('#count1').text(data.P_OUT);

          }
     })
}
function emp_accept1() {

     $.ajax({
          type: 'post',
          url: base_url + "Eng_ctr/emp_accept1",
          dataType: "json",
          data: {
               CARDID: $('#CARDID').val() ,
          },
          success: function(data) {




               $('#count2').text(data.P_OUT);

          }
     })
}
function emp_cancel1() {

     $.ajax({
          type: 'post',
          url: base_url + "Eng_ctr/emp_cancel1",
          dataType: "json",
          data: {
               CARDID: $('#CARDID').val() ,
          },
          success: function(data) {




               $('#count3').text(data.P_OUT);

          }
     })
}
function emp_allorder1() {

     $.ajax({
          dataType: "json",
          type: 'POST',
          url: base_url + "Eng_ctr/emp_allorder1",
          data: {
               CARDID: $('#CARDID').val() ,
          },
          success: function(data) {



               $('#count4').text(data.P_OUT);

          }
     })
}