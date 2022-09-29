var oTable0;
var oTable;

$(document).ready(function(){
     select_emp();

     get_REWARDS();
     get_REWARDS1();




     $('#AZBTN').on('click',function (){
          $('#UPDATE_btn').hide();
          $('#insert_btn').show();
          $('#CARDID').val('').trigger('change');

          $('#DATE_REWARDS').val('')  ;
          $('#TYPPE_REWARDS').val('').trigger('change');

          $('#REASON_REWARDS').val('')  ;
          $('#update_emp_modalaz').modal('show');

     })


});



/*******************get_OUTTIME***************************/

function get_REWARDS(){

     oTable = $('#get_REWARDS').DataTable({
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
               url:base_url+'eng_ctr/get_REWARDS',
               dataSrc: 'items',


          },

          'columns': [
           //    {title: '#  ', "data": "ID"},
               {title: 'الاسم  ', "data": "FULLNAME"},
               {title: 'القسم  ', "data": "SECIONNAME"},
               {title: 'تاريخ  المكافئة   ', "data": "DATE_REWARDS"},
               {title: '  نوع المكافئة  ', "data": "TYPPE_REWARDSNAME"},
               {title: ' تفاصيل المكافئة  ', "data": "REASON_REWARDS"},


     {               title: '  الاجراء  ',

               "data": null,
                    sWidth: '5px',
                    Sortable: false,
                    "mRender": function (data, type, full) {
                         return '<button type="button" class="btn btn-danger bg-light-danger"  onclick="DELETE_REWARDS(' + full.ID + ')">' + '<i class="ft-trash"></i> ' + '</button>';
                    },
               },

               {
                    "data": null,
                    sWidth: '5px',
                    Sortable: false,
                    "mRender": function (data, type, full) {
                         return ' <button id="btn_holyday_detail" type="button" class="btn btn-info bg-light-info mb-1 "  onclick="get_REWARDS_detail( ' + full.ID + ',' + full.CARDID + ',' + '\'' + full.DATE_REWARDS + '\',' + full.TYPPE_REWARDS + ',' + '\'' + full.REASON_REWARDS + '\')">' + '<i class="fa fa-edit"></i> ' + '</button>';
                    },
               },
          ],




     });


}
function insert_REWARDS() {

     $.ajax({
          type: 'post',
          url: base_url + "eng_ctr/insert_REWARDS",
          dataType: "json",
          data: {
               CARDID: $('#CARDID').val() ,
               DATE_REWARDS: $('#DATE_REWARDS').val()  ,
               TYPPE_REWARDS: $('#TYPPE_REWARDS').val() ,
               REASON_REWARDS: $('#REASON_REWARDS').val()  ,



          },


          success: function (data) {
               if (data.p_errcod == 1) {
                    get_REWARDS();

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
function   DELETE_REWARDS(p1) {

     Swal.fire({
          title: 'هل  تريد حذف هذا الموظف؟',
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
                    url: base_url+"eng_ctr/DELETE_REWARDS",
                    dataType: "json",
                    data: {
                         p_id: p1
                    },


                    success: function (data) {
                         if (data.P_ERRCOD == 1) {
                              get_REWARDS();

                              toastr.success('تم حدف الموظف بنجاح', 'تم ');



                         }

                         else  if (data.P_ERRCOD == 2) {
                              toastr.error(' لم تم حدف الموظف ', 'خطا ');

                         }
                         else   {
                              toastr.warning('ضضضض');
                         }






                    }

               })
          }
     });

}
function get_REWARDS_detail(ID_REWARDS, CARDID, DATE_REWARDS, TYPPE_REWARDS, REASON_REWARDS) {
     $('#insert_btn').hide();
     $('#UPDATE_btn').show();

     $('#ID_REWARDS').val(ID_REWARDS);
     $('#CARDID').val(CARDID).trigger('change');
     $('#DATE_REWARDS').val(DATE_REWARDS);
     $('#TYPPE_REWARDS').val(TYPPE_REWARDS).trigger('change');
     $('#REASON_REWARDS').val(REASON_REWARDS);
     $('#update_emp_modalaz').modal('show');


}
function UPDATE_REWARDS() {


     $.ajax({
          type: 'post',
          url: base_url + "eng_ctr/UPDATE_REWARDS",
          dataType: "json",
          data: {
               ID_REWARDS: $('#ID_REWARDS').val() ,
               CARDID: $('#CARDID').val() ,
               DATE_REWARDS: $('#DATE_REWARDS').val()  ,
               TYPPE_REWARDS: $('#TYPPE_REWARDS').val() ,
               REASON_REWARDS: $('#REASON_REWARDS').val()  ,



          },


          success: function (data) {
               if (data.p_errcod == 1) {
                    get_REWARDS();

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
/*******************get_REWARDS***************************/

function get_REWARDS1(){

     oTable = $('#get_REWARDS1').DataTable({
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
               url:base_url+'eng_ctr/get_REWARDS',
               dataSrc: 'items',


          },

          'columns': [
          //     {title: 'م  ', "data": null},
               {title: 'الاسم  ', "data": "FULLNAME"},
               {title: 'القسم  ', "data": "SECIONNAME"},
               {title: 'تاريخ  المكافئة   ', "data": "DATE_REWARDS"},
               {title: '  نوع المكافئة  ', "data": "TYPPE_REWARDSNAME"},
               {title: ' تفاصيل المكافة  ', "data": "REASON_REWARDS"},



          ],




     });


}
