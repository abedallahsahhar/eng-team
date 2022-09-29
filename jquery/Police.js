var oTable1;

var emp_number  ; 

$(document).ready(function(){

   // alert('njnhnn');
	//reword_search();

     emp_insert_btn
    select_search();
    reword_searchh();
        /*************************** ID  زر الاضافة الاول********************************* */


    $('#emp_insert_btn').on('click',function (){

		$('#DATE_REWORD').val('');
		//$('#typerecord').val('');
        $("#typerecord").select2("val", "0");
		$('#NUMBER_REWORD').val('');
		$('#notes_REWORD').val('');

        $('#update_emp_modal').modal('show');
        
})


    /***************************النهاية********************************* */



});	


    /*************************** اضافة جدول    ********************************* */




function reword_searchh(){
  //  alert('njnhnn');

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
             url:base_url+'drug_ctr/reword_searchh',
             dataSrc: 'items',
         },


         'columns': [	 
                    { "data": "ID_REWORD"},                 
                    { "data": "DATE_REWORD"},                  
                    { "data": "NAME"},                  
                    { "data": "NUMBER_REWORD"},                  
                    { "data": "NOTES_REWORD"},                  
                  
                    {
                       "data": null, sWidth: '5px', Sortable: false,
                       "mRender": function (data, type, full) {
                           return  ' <button type="button" class="btn btn-primary btn-outline btn-circle sbold "  onclick="get_item_detail( ' + full.ID_REWORD + ','+'\'' + full.DATE_REWORD + '\','+'\'' + full.TYPE_REWORD + '\',' + full.NUMBER_REWORD + ','+'\'' + full.NOTES_REWORD + '\' )">'+'تعديل '+'</button>' ;
                       },
                      },
                       {
                           "data": null, sWidth: '5px', Sortable: false,
                           "mRender": function (data, type, full) {
                               return  '<button type="button" class="btn btn-danger btn-outline btn-circle sbold green"  onclick="del_item(' + full.ID_REWORD  +')">'+'حذف '+'</button>' ;
                           },
                       },   
                           
                 //    { "data": "JOB_ID"},                  
                 //    { "data": "SALARY"},                  
                 //    { "data": "COMMISSION_PCT"},                  
                 //    { "data": "MANAGER_ID"},                  
                 //    { "data": "DEPARTMENT_ID"},                  
            /*         "render": function ( data, type, full ) {
                      //   return "<a id='"+full.id+"'>"+data+"</a>";
                      return  '   <span class="label label-sm label-danger" style="font-size: 12px;"> '+ full.ITEMNO + ' </span>'   ;
                 }
                 },
                 { 
                     "data": "CLEANNAME",                    
                     "render": function ( data, type, full ) {							
                             return  '   <span class="label label-sm label-success" style="font-size: 13px;"> '+ full.CLEANNAME + ' </span>'   ;
                 
                     }
                 },
 
             { "data": "UNITNAME1",sWidth: '10px' },   // الوحدة
             { "data": "BALANCE",sWidth: '10px' },//الموجود في المخزن
             { "data": "RASED",sWidth: '10px' },//رصيد الصنف
             {
                 "data": null, sWidth: '5px', Sortable: false,
                 "mRender": function (data, type, full) {
                     return  '<button type="button" class="btn green-jungle btn-outline btn-circle sbold"  onclick="get_item_detail(' + full.ITEMNO + ','
                             + '\'' + full.CLEANNAME + '\','+ full.BUYINGPRICE1 + ','+ full.BUYINGPRICE2 + ',' + full.BUYINGPRICE3 + ',' 
                             + full.SELLINGPRICE1 + ','+ full.SELLINGPRICE2 + ','+ full.SELLINGPRICE3 + ',' + full.DEFAULTUNIT + ','+ '\'' + full.UNITNAME1 + '\',' + full.ITEMTYPE + ',' 
                             + full.BUYINGCURRENCY + ','+ full.SELLINGCURRENCY + ')">'+'تفاصيل الصنف'+'</button>' ;
                 },
             },
             {
                 "data": null, sWidth: '10px', Sortable: false,
                 "mRender": function (data, type, full) {
                     var ss=1;
                     return  '<button type="button" class="btn red btn-outline btn-circle sbold" onclick="get_stocktrans(' + full.ITEMNO + ','+ '\'' + full.CLEANNAME + '\')">'+'حركة الصنف'+'</button>' ;
                 }
             },
         ],
      "columnDefs": [
         { "width": "280px", "targets": [3] },              */

            ]
      
     
     });
 
     
 }

    

    /***************************النهاية********************************* */

  
   /***************************  هنا DELETE    ********************************* */

  
  function   del_item(p1) {

   // alert(p1);


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
                url: base_url+"drug_ctr/reword_delet",
                dataType: "json",
                data: {
                    ID_REWORD: p1
                },
    
    
                success: function (data) {
                  //  alert('k1');

    
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

    /***************************النهاية********************************* */



    /***************************استدعاء SELECT********************************* */



   function select_search(){
    //alert('ss');

    $.ajax({
        type: 'post',
        url: base_url+"drug_ctr/select_search",
        dataType: "json",
       
       


        success: function (data) {

            $('#typerecord').html('');

            $('#typerecord').append('<option value=""></option>');
            

            $.each(data.items, function(REC_NO, obj)
            {
                $('#typerecord').append('<option value="' + obj.ID + '">' +obj.NAME + '</option>');
            });

        }
    })
   }




  /***************************النهاية********************************* */


  /***************************اضافة الى جدول اونكليك الاضافة********************************* */


function insert_record() {

   alert('k1');
    alert($('#typerecord').val() );
    alert($('#notes_REWORD').val()  );

    $.ajax({
           type: 'post',
           url: base_url + "drug_ctr/reword_insert",
           dataType: "json",
           data: {
            // ID_REWARD : $('#ID_REWARD').val(),
            DATE_REWORD: $('#DATE_REWORD').val() ,
            TYPE_REWORD: $('#typerecord').val()  ,
            NUMBER_REWORD: 112200 ,// $('#NUMBER_REWORD').val(),
            //NOTES_REWARD:'fffffffff'  			
            NOTES_REWORD: $('#notes_REWORD').val()  			
           

       },
           
       success: function (data) {
       alert('k2');
        if(data.is_ok = 1) {
            if (data.row_count >= 1) {
                oTable1.ajax.reload( null, false );
                $('#update_emp_modal').modal('hide');
                Toast.fire({icon: 'success', title: 'تم الاضافة ' + data.row_count + ' عنصر'})


            }
            else
                Toast.fire({icon: 'error',	title: 	'لم يتم اضافة أي  عنصر'})
        }
        else
            Toast.fire({icon: 'error',title: 	'حدث خطأ '+data.error_msg})
    }

});
}

    /***************************النهاية********************************* */

 
    /***************************UPDATE********************************* */
   

  function get_item_detail(id,DATE_REWORD,TYPE_REWORD,NUMBER_REWORD,NOTES_REWORD){



//alert(id+' '+DATE_REWORD+' '+TYPE_REWORD+' '+NUMBER_REWORD+' '+NOTES_REWORD);
//    alert(id);
	 var_reward_id = id ;
     $('#DATE_REWORD').val('');
      $("#typerecord").select2("val", "0");
     $('#NUMBER_REWORD').val('');
     $('#notes_REWORD').val('');


    $('#DATE_REWORD').val(DATE_REWORD);
    //$('#typerecord').val(TYPE_REWORD);
    $("#typerecord").select2("val", TYPE_REWORD);
    $('#NUMBER_REWORD').val(NUMBER_REWORD);
    $('#notes_REWORD').val(NOTES_REWORD);
    $('#update_emp_modal').modal('show');

    /*
	$('#emp_id_update').val(emp_id);
	$('#emp_fname_update').val(first_nm);
	$('#emp_lname_update').val(last_nm);
	$('#emp_hdate_update').val(HIRE_DATE);
	$('#emp_salary_update').val(salary);

	$('#update_emp_modal').modal('show');

    */
}




function updat_REWARD() {

        $.ajax({
               type: 'post',
               url: base_url + "drug_ctr/reword_updat",
               dataType: "json",
               data: {
                 id :var_reward_id,
                 DATE_REWORD: $('#DATE_REWORD').val() ,
                 TYPE_REWORD: $('#typerecord').val()  ,
                 NUMBER_REWORD: $('#NUMBER_REWORD').val(),
                 NOTES_REWORD:$('#notes_REWORD').val() 			
              //  NOTES_REWARD: $('#NOTES_REWARD').val()  			
               
    
           },
               
           success: function (data) {
            alert('k2');
            if(data.is_ok == 1) {
                if (data.row_count >= 1) {
                    oTable1.ajax.reload( null, false );
                    $('#update_emp_modal').modal('hide');
                    Toast.fire({icon: 'success', title: 'تم تعديل ' + data.row_count + ' عنصر'});


            }
            else
                Toast.fire({icon: 'error',	title: 	'لم يتم تعديل أي  عنصر'});
        }
        else
            Toast.fire({icon: 'error',title: 	'حدث خطأ '+data.error_msg});
    }
    
    });
    }

