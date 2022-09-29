var oTable1;

$(document).ready(function(){

     get_OUTTIMEBOSS();

});

function get_OUTTIMEBOSS(){

     oTable1 = $('#get_OUTTIMEBOSS').DataTable({
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
               url:base_url+'boss_ctr/get_OUTTIMEBOSS',
               dataSrc: 'items',
               data: function (d) {
                    d.p_section_id = $('#p_section_id').val()
               }
          },

          'columns': [
               {title: 'م  ', "data": null},
              {title: 'الاسم  ', "data": "FULLNAME"},

              // {title: 'القسم  ', "data": "SECIONNAME"},

               {title: 'تاريخ  الإذن   ', "data": "DATE_OUT"},
               {title: 'بداية  الإذن  ', "data": "PERIOD_TIMES"},
               {title: 'نهاية الإذن  ', "data": "PERIOD_TIMEE"},
               {title: 'سبب الإذن  ', "data": "REASON_OUT", width: 70,},
               { title: 'الاجراء',"data": "STATUS_NO"},
               {"data": null,"sTitle":"قبول","sClass": "td",
                    "mRender": function(data, type, full) {

                         return '<button id="btn_accept_holydayBOSS" type="button" class="btn btn-success mr-1 mb-1" onclick="accept_OUTTIMEBOSS('+data.ID+')" ><i style="margin-top: 4px;margin-right: 3px;" class=" ft-check float-right"></i>  قبول </button>' ;


                    }
               },
               {"data": null,"sTitle":"رفض","sClass": "td",
                    "mRender": function(data, type, full) {

                         return  '<button id="btn_cancel_holydayBOSS" type="button" class="btn btn-danger mr-1 mb-1" onclick="cancel_OUTTIMEBOSS('+data.ID+')" ><i style="margin-top: 4px;margin-right: 3px;"class="  ft-x-circle float-right"></i> رفض</button>'


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
          title: 'هل  تريد قبول الطلب؟',
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


                              get_OUTTIMEBOSS();

                         }

                         else  if (data.p_errcod == 2) {
                              toastr.error(' لم يتم قبول الطلب ', 'خطا ');

                         }
                         else   {
                              toastr.warning('ضضضض');
                         }






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


                              get_OUTTIMEBOSS();

                         }

                         else  if (data.p_errcod == 2) {
                              toastr.error(' لم يتم رفض الطلب ', 'خطا ');

                         }
                         else   {
                              toastr.warning('ضضضض');
                         }







                    }

               })
          }
     });
}

