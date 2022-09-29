var oTable1;
var var_reward_id ;

$(document).ready(function(){
     //alert('abed');
     abed();
     abedm();
     emp_update_btnA
     emp_update_btnM
     get_item_detailA
     get_item_detailM


     $('#emp_update_btnA').on('click',function (){
          $('#insert_btnA').show();
          $('#update_btnA').hide();
          $('#AAA').val('');
          $('#AA').val('');
          $('#update_emp_modalA').modal('show');
     })
     $('#emp_update_btnM').on('click',function (){
          $('#insert_btnM').show();
          $('#update_btnM').hide();
          $("#M").select2("val", "0");
          $("#MM").select2("val", "0");
          $('#MMM').val('');
          $('#MMMM').val('');
          $('#MMMMM').val('');

          $('#update_emp_modalM').modal('show');
     })


});

function abed(){
    // alert('abed');

     //use datatable
     oTable1 = $('#sample_14').DataTable({
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
               url:base_url+'drug_ctr/abed',
               dataSrc: 'items',
          },


          'columns': [
               { "data": "ID_ABED"},
               { "data": "AAA"},
               { "data": "AA"},
               {
                    "data": null, sWidth: '5px', Sortable: false,
                    "mRender": function (data, type, full) {
                         return  ' <button type="button" class="btn btn-primary btn-outline btn-circle sbold "  onclick="get_item_detailA( ' + full.ID_ABED + ','+'\'' + full.AAA + '\','+'\'' + full.AA + '\' )">'+'تعديل '+'</button>' ;
                    },
               },

               {
                    "data": null, sWidth: '5px', Sortable: false,
                    "mRender": function (data, type, full) {
                         return  '<button type="button" class="btn btn-danger btn-outline btn-circle sbold green"  onclick="del_itemA(' + full.ID_ABED +')">'+'حذف '+'</button>' ;
                    },
               },

          ]


     });


}

function insert_abed() {

   //  alert('k1');
     $.ajax({
          type: 'post',
          url: base_url + "drug_ctr/insert_abed",
          dataType: "json",
          data: {
               // ID_REWARD : $('#ID_REWARD').val(),
               AAA: $('#AAA').val() ,
               AA: $('#AA').val()  ,



          },

          success: function (data) {
             // alert('k2');
               if(data.is_ok = 1) {
                    if (data.row_count >= 1) {
                         oTable1.ajax.reload( null, false );
                         $('#update_emp_modalA').modal('hide');
                         Toast.fire({icon: 'success', title: 'تم تعديل ' + data.row_count + ' عنصر'})


                    }
                    else
                         Toast.fire({icon: 'error',	title: 	'لم يتم تعديل أي  عنصر'})
               }
               else
                    Toast.fire({icon: 'error',title: 	'حدث خطأ '+data.error_msg})
          }

     });
}

function   del_itemA(p1) {



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
               // del_itemA(p1)
               $.ajax({
                    type: 'post',
                    url: base_url+"drug_ctr/del_itemA",
                    dataType: "json",
                    data: {
                         ID_ABED: p1
                    },


                    success: function (data) {

                         if(data.is_ok == 1) {
                              if (data.row_count >= 1) {
                                   oTable1.ajax.reload( null, false );
                                   Toast.fire({icon: 'success', title: 'تم حذف ' + data.row_count + ' عنصر'})

                              }
                              else
                                   Toast.fire({icon: 'error',	title: 	'لم يتم حذف أي  عنصر'})
                         }
                         else
                              Toast.fire({icon: 'error',title: 	'حدث خطأ '+data.error_msg})
                    }
               })
          }
     });

}

function get_item_detailA(id,AAA,AA){
     $('#insert_btnA').hide();
     $('#update_btnA').show();
   //  alert('AAAAAA');


//alert(id+' '+DATE_REWARD+' '+TYPE_REWARD+' '+NUM_REWARD+' '+NOTES_REWARD);

     var_reward_id = id ;

     $('#AAA').val(AAA);
     $('#AA').val(AA);
     $('#update_emp_modalA').modal('show');



}

function updat_REWARDA() {

      //alert('abed1');
     $.ajax({
          type: 'post',
          url: base_url + "drug_ctr/updat_REWARDA",
          dataType: "json",
          data: {
               id :var_reward_id,
               AAA: $('#AAA').val() ,
               AA: $('#AA').val()  ,



          },

          success: function (data) {
             //  alert('abed2');
               if(data.is_ok == 1) {
                    if (data.row_count >= 1) {
                         oTable1.ajax.reload( null, false );
                         $('#update_emp_modalA').modal('hide');
                         Toast.fire({icon: 'success', title: 'تم تعديل ' + data.row_count + ' عنصر'})


                    }
                    else
                         Toast.fire({icon: 'error',	title: 	'لم يتم تعديل أي  عنصر'})
               }
               else
                    Toast.fire({icon: 'error',title: 	'حدث خطأ '+data.error_msg})
          }

     });
}
/******************************************************************/
function abedm(){
    //  alert('abed');

     //use datatable
     oTable1 = $('#sample_15').DataTable({
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
               url:base_url+'drug_ctr/abedm',
               dataSrc: 'items',
          },


          'columns': [
               { "data": "ID_ABEDM"},
               { "data": "M"},
               { "data": "MM"},
               { "data": "MMM"},
               { "data": "MMMM"},
               { "data": "MMMMM"},
               {
                    "data": null, sWidth: '5px', Sortable: false,
                    "mRender": function (data, type, full) {
                         return  ' <button type="button" class="btn btn-primary btn-outline btn-circle sbold "  onclick="get_item_detailM( ' + full.ID_ABEDM + ','+'\'' + full.M + '\','+'\'' + full.MM + '\','+'\'' + full.MMM + '\','+'\'' + full.MMMM + '\','+'\'' + full.MMMMM + '\'  )">'+'تعديل '+'</button>' ;
                    },
               },


               {
                    "data": null, sWidth: '5px', Sortable: false,
                    "mRender": function (data, type, full) {
                         return  '<button type="button" class="btn btn-danger btn-outline btn-circle sbold green"  onclick="del_itemM(' + full.ID_ABEDM +')">'+'حذف '+'</button>' ;
                    },
               },

          ]


     });


}

function insert_abedM() {

     //  alert('k1');
     $.ajax({
          type: 'post',
          url: base_url + "drug_ctr/insert_abedM",
          dataType: "json",
          data: {
               // ID_REWARD : $('#ID_REWARD').val(),
               M: $('#M').val() ,
               MM: $('#MM').val()  ,
               MMM: $('#MMM').val() ,
               MMMM: $('#MMMM').val()  ,
               MMMMM: $('#MMMM').val() ,

          },

          success: function (data) {
               // alert('k2');
               if(data.is_ok = 1) {
                    if (data.row_count >= 1) {
                         oTable1.ajax.reload( null, false );
                         $('#update_emp_modalM').modal('hide');
                         Toast.fire({icon: 'success', title: 'تم تعديل ' + data.row_count + ' عنصر'})


                    }
                    else
                         Toast.fire({icon: 'error',	title: 	'لم يتم تعديل أي  عنصر'})
               }
               else
                    Toast.fire({icon: 'error',title: 	'حدث خطأ '+data.error_msg})
          }

     });
}

function   del_itemM(p1) {



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
               // del_itemA(p1)
               $.ajax({
                    type: 'post',
                    url: base_url+"drug_ctr/del_itemM",
                    dataType: "json",
                    data: {
                         ID_ABEDM: p1
                    },


                    success: function (data) {

                         if(data.is_ok == 1) {
                              if (data.row_count >= 1) {
                                   oTable1.ajax.reload( null, false );
                                   Toast.fire({icon: 'success', title: 'تم حذف ' + data.row_count + ' عنصر'})

                              }
                              else
                                   Toast.fire({icon: 'error',	title: 	'لم يتم حذف أي  عنصر'})
                         }
                         else
                              Toast.fire({icon: 'error',title: 	'حدث خطأ '+data.error_msg})
                    }
               })
          }
     });

}

function get_item_detailM(id,M,MM,MMM,MMMM,MMMMM){

     $('#insert_btnM').hide();
     $('#update_btnM').show();

//alert(id+' '+DATE_REWARD+' '+TYPE_REWARD+' '+NUM_REWARD+' '+NOTES_REWARD);

     var_reward_id = id ;

     $('#M').val(M);
     $('#MM').val(MM);
     $('#MMM').val(MMMM);
     $('#MMMM').val(MMMM);
     $('#MMMMM').val(MMMMM);
     $('#update_emp_modalM').modal('show');



}

function updat_REWARDM() {

     //alert('abed1');
     $.ajax({
          type: 'post',
          url: base_url + "drug_ctr/updat_REWARDM",
          dataType: "json",
          data: {
               id :var_reward_id,
               M: $('#M').val() ,
               MM: $('#MM').val()  ,
               MMM: $('#MMM').val() ,
               MMMM: $('#MMMM').val()  ,
               MMMMM: $('#MMMMM').val() ,



          },

          success: function (data) {
               //  alert('abed2');
               if(data.is_ok == 1) {
                    if (data.row_count >= 1) {
                         oTable1.ajax.reload( null, false );
                         $('#update_emp_modalM').modal('hide');
                         Toast.fire({icon: 'success', title: 'تم تعديل ' + data.row_count + ' عنصر'})


                    }
                    else
                         Toast.fire({icon: 'error',	title: 	'لم يتم تعديل أي  عنصر'})
               }
               else
                    Toast.fire({icon: 'error',title: 	'حدث خطأ '+data.error_msg})
          }

     });
}