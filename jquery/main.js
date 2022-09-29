var oTable1;
$(document).ready(function(){
    // alert('njnhnn');
	main_search();
	get_items2();
});	



function main_search(){
  //  alert(base_url);
	//use datatable
		oTable1 = $('#sample_11').dataTable({
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
			url:base_url+'drug_ctr/main_search',
			dataSrc: 'items',
		},
		'columns': [	
                   { "data": "EMPLOYEE_ID"},                 
                   { "data": "FIRST_NAME"},                  
                   { "data": "LAST_NAME"},                  
                   { "data": "FULL_NAME"},                  
                   { "data": "EMAIL"},                  
                   { "data": "PHONE_NUMBER"},                  
                   { "data": "HIRE_DATE"}, 
                   {
                    "data": null, sWidth: '5px', Sortable: false,
                    "mRender": function (data, type, full) {
                        return  '<button type="button" class="btn green-jungle btn-outline btn-circle sbold"  onclick="get_item_detail(' + full.EMPLOYEE_ID + ','
                                + '\'' + full.FULL_NAME + '\')">'+'تفاصيل الصنف'+'</button>' ;
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
            */
		],
 	"columnDefs": [
		{ "width": "280px", "targets": [3] },
		   ]
	 
	
	});

	
}

function get_items2(){
 //   alert(base_url);
	//use datatable
		oTable1 = $('#sample_12').dataTable({
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
			url:base_url+'drug_ctr/search',
			dataSrc: 'items',
		},

		'columns': [	
                   { "data": "COUNTRY_ID"},                 
                   { "data": "COUNTRY_NAME"},                  
                   { "data": "REGION_ID"},                  
                  
                /*   {
                    "data": null, sWidth: '5px', Sortable: false,
                    "mRender": function (data, type, full) {
                        return  '<button type="button" class="btn green-jungle btn-outline btn-circle sbold"  onclick="get_item_detail(' + full.COUNTRY_ID + ','
                                + '\'' + full.COUNTRY_NAME + '\')">'+'تفاصيل الصنف'+'</button>' ;
                    }
                },   ,*/         
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
            */
		],
	/*	"columnDefs": [
			//	{ className: "label label-sm label-danger", "targets": [ 0 ] },
				//{ className: "label label-sm label-success", "targets": [ 1 ] }
				{ "width": "30px", "targets": [0] },
				{ "width": "50px", "targets": [1] },
		 		{ "width": "50px", "targets": [2] },
		 		{ "width": "50px", "targets": [3] },
		   ]
		*/
	
	});

	
}



// function get_item_detail(p1,p2){
//     alert('الرقم :'+p1+'  الاسم:'+p2);
// }