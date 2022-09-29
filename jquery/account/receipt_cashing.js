var currentDate = new Date()
var day = currentDate.getDate()
var month = currentDate.getMonth() + 1
var year = currentDate.getFullYear()
var d = day + "-" + month + "-" + year;
  
$(document).ready(function(){
	get_accounts();
	cleaning();
});	



function get_items(){
	//use datatable
		oTable1 = $('#sample_11').dataTable({
		// //
		destroy:true,
		"language": {
			url: base_url+'jquery/Arabic.json'
		},
		// responsive: true,
		//"order":[0, 'asc'],
		"aaSorting" : [],
		"bAutoWidth": false,
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
			url:base_url+'account_ctr/get_items',
			dataSrc: 'items',
		},
		'columns': [	
				{ 
                "data": "ITEMNO",                  
                "render": function ( data, type, full ) {
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
			//	{ className: "label label-sm label-danger", "targets": [ 0 ] },
				//{ className: "label label-sm label-success", "targets": [ 1 ] }
				{ "width": "5%", "targets": [0] },
				{ "width": "50px", "targets": [1] },
		 		{ "width": "50px", "targets": [2] },
		 		{ "width": "50px", "targets": [3] },
		   ]
		
	
	});

	
}

function get_item_detail(t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,t11,t12,t13){
	 clear_form();
	 //
           	
	 $('#ITEMNO').val(t1);
	 $('#CLEANNAME').val(t2);
	 $('#BUYINGPRICE1').val(t3);
	 $('#BUYINGPRICE2').val(t4);
	 $('#BUYINGPRICE3').val(t5);
	 $('#SELLINGPRICE1').val(t6);
	 $('#SELLINGPRICE2').val(t7);
	 $('#SELLINGPRICE3').val(t8);			 
	 $('#DEFAULTUNIT').val(t9);	 
	 $('#UNITNAME1').val(t9).trigger('change'); 
	 $('#ITEMTYPE').val(t11).trigger('change'); 
	 $('#BUYINGCURRENCY').val(t12).trigger('change'); 
	 $('#SELLINGCURRENCY').val(t13).trigger('change'); 
	 
	 $('#myModal1').modal('show');
  
 
}


function insert_invoicesdetails() {

			 $.ajax({
					type: 'post',
					url: base_url + "account_ctr/insert_invoicesdetails",
					dataType: "json",
					data: {			
						IUNO: $('#IUNO').val(),
						COUNTER: $('#COUNTER').val(),
						ACCOUNTNO: $('#ACCOUNTNO').val(),
						DATES: $('#DATES').val(),
						DEPARTMENT: $('#DEPARTMENT').val(),
						FINANCER: $('#FINANCER').val(),
						JORNALNO: $('#JORNALNO').val(),
						QUANTITY: $('#QUANTITY').val(),
						ENTRYUNITPRICE: $('#ENTRYUNITPRICE').val(),
						SOURCE: $('#SOURCE').val(),
						CURRENCY: $('#CURRENCY').val(),
						RATE: $('#RATE').val(),
						NAME: $('#NAME').val(),
						NO: $('#NO').val(),
						CASHPAYMENT: $('#CASHPAYMENT').val(),
						DESCRIPTION: $('#DESCRIPTION').val(),
						TIMES: $('#TIMES').val(),
				},
					
			 success: function (data) { 
			 if (data.rowcount == 1) {
                $("#success-alert").alert();
                $("#success-alert").fadeTo(2000, 400).slideUp(400, function () {
                    $("#success-alert").slideUp(400);
                });



            } else if (data.rowcount == 0) {
                $("#warning-alert").alert();
                $("#warning-alert").fadeTo(2000, 500).slideUp(500, function () {
                    $("#warning-alert").slideUp(00);
                });
            } else if (data.rowcount == null) {
                $("#danger-alert").alert();
                $("#danger-alert").fadeTo(2000, 500).slideUp(500, function () {
                    $("#danger-alert").slideUp(500);
                });
            }
		}

    });
}


function get_accounts() {
	//select2
   $.ajax({
        type: 'post',
        url: base_url + "account_ctr/get_accounts/",
        dataType: "json",
        async:false,
        success: function(data) {
            $('#ACCOUNTNO').html('');
            $('#ACCOUNTNO').append('<option value="">' + '</option>');
            $.each(data.items, function(sub, obj)
            {
                $('#ACCOUNTNO').append('<option value="' + obj.ACCOUNTNO + '">' +obj.CLEANNAME + '</option>');
         });
        }
    })
}

function get_next_invoices_no() {
   $.ajax({
        type: 'post',
        url: base_url + "account_ctr/get_next_invoices_no/",
        dataType: "json",
        success: function(data) {
			var k=data.items[0].IUNO;
			$('#IUNO').val(k);
        }
    })
}


function cleaning(){
	$('#JORNALNO').val('');
	$('#ACCOUNTNO').select2('val','');	
	$('#ACCOUNTNO').val('').trigger('change');
	$('#CASHCURRENCY').val('1001').trigger('change');

}

//***************************************************************************************
function update_invoices (){//alert('***');
	
	if($('#JOURNAL_ID').val()==''){
	  $.ajax({
        type: 'post',
        url: base_url+'account_ctr/update_invoices',
        dataType: "json",
         data: {
            STOCKNO: $('#STOCKNO').val(),
             JORNALNO: $('#JORNALNO').val(),
             TYPE: $('#TYPE').val(),
             MIOTYPE: $('#MIOTYPE').val(),
             DATES: $('#DATES').val(),
             NO: $('#NO').val(),
             MIONO: $('#MIONO').val(),
             ACCOUNTNO: $('#ACCOUNTNO').val(),
             BOOKNO: $('#BOOKNO').val(),
             MIOBOOKNO: $('#MIOBOOKNO').val(),
             MAINCURRENCY: $('#MAINCURRENCY').val(),
             CASHCURRENCY: $('#CASHCURRENCY').val(),
             MAINCURRENCYRATE: $('#MAINCURRENCYRATE').val(),
             CASHCURRENCYRATE: $('#CASHCURRENCYRATE').val(),
             CASHACCOUNTNO: $('#CASHACCOUNTNO').val(),
             DBCRACCOUNTNO: $('#DBCRACCOUNTNO').val(),
             DBCRAMOUNT: $('#DBCRAMOUNT').val(),
             TOTAL: $('#TOTAL').val(),
             CASHPAYMENT: $('#CASHPAYMENT').val(),
             ACCOUNTAMOUNT: $('#ACCOUNTAMOUNT').val(),
             REMARK: $('#REMARK').val(),
             DEPARTMENT: $('#DEPARTMENT').val(),
             FINANCER: $('#FINANCER').val(),
             DEALER: $('#DEALER').val(),
             TIMES: $('#TIMES').val(),
          },
        success: function(data) {
		        if (data.rowcount == 1) {
					
                   $('#JOURNAL_ID').val(data.pseq);  
                   $('#JOURNAL_ID2').val(data.pseq);
                   $('#DESCRIBTION').val($('#JOURNAL_DESCRIPTION').val());
                   $('#sum_debit').val(0);  
                   $('#sum_credit').val(0); 				   
                                        $("#success-alert").alert();
                                        $("#success-alert").fadeTo(2000, 400).slideUp(400, function () {
                                            $("#success-alert").slideUp(400);
                                        });

                                      
                                    } else if (data.rowcount == 0) {
                                        $("#warning-alert").alert();
                                        $("#warning-alert").fadeTo(2000, 500).slideUp(500, function () {
                                            $("#warning-alert").slideUp(00);
                                        });
                                    } else if (data.rowcount == null) {
                                        $("#danger-alert").alert();
                                        $("#danger-alert").fadeTo(2000, 500).slideUp(500, function () {
                                            $("#danger-alert").slideUp(500);
                                        });
                                    }
		}
	  })
	}else{
		  $("#warning-alert20").alert();
                                        $("#warning-alert20").fadeTo(2000, 500).slideUp(500, function () {
                                            $("#warning-alert20").slideUp(500);
                                        });
		
		
	}
	
}



 
function delete_invoicesdetails(p1,p2) {
    //alert(p1);
    
    swal({
            title: "هل انت متأكد?",
            text: "من حذف هذا السجل?",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: 'لا!',
            cancelButtonText: "نعم!",
            closeOnConfirm: false,
            closeOnCancel: false,
            confirmButtonClass: "btn-success",
            cancelButtonColor: "btn-success",
        },
        function(isConfirm) {
            if (isConfirm) {
                swal({title: "الغاء!",text: "تم الغاء العملية.",type: "error",timer: 1000});
            } else {
                $.ajax({
                    type: 'post',
                    url: base_url + "account_ctr/delete_JOURNAL_DETAIL",
                    dataType: "json",
                    data: {   JD_ID: p1  ,
                              JOURNAL_ID:p2					},
                    success: function(data) {
                        if (data.rowcount==1)
                        {  //alert('deleted');
                    remove_data();
                   select_conditionJOURNAL_DETAIL();
				    $('#sum_debit').val(data.pdebit);
				 $('#sum_credit').val(data.pcredit);
                            swal({title: "تم الحذف!",text: "تمت عملية الحذف بنجاح.",type: "success",timer: 1500});
                           

                        } else if  (data.rowcount==0)
                        {
                            // alert('nothing');
                            swal({title: "خطأ !",text: "لم تمت عملية الحذف.",type: "error",timer: 1500});
                        } else if  (data.rowcount==null) {
                            // alert('error');
                            swal({title: "خطأ !",text: "لا يوجد اتصال بالسيرفر.",type: "error",timer: 1500});
                        }
                    },
                });
            }
        });



}

