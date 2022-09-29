var oTable1;



$(document).ready(function(){


       select_jender();
       select_rank();
       select_section();
       select_social();
       select_status();
       select_branch();
       reword_officer();



       $('#top_insert_btn').on('click',function (){

        $('#IDNUMBER').val('');
        $('#FERST_NAME').val('');
		$('#FATHER_NAME').val('');
		$('#DAD_NAME').val('');
        $("#JENDER").select2("val", "0");
        $("#RANK").select2("val", "0");
		$('#MALINUMBER').val('');
        $("#SECTION").select2("val", "0");
		$('#DATE_BIRTH').val('');
        $("#SOCIAL").select2("val", "0");
        $("#STATUS").select2("val", "0");
        $("#BRANCH").select2("val", "0");
        $('#DATE_JOIN').val('');
        $('#ADREES').val('');
        $('#PHON').val('');
        $('#MOBILE').val('');
        $('#STRET').val('');
        $('#insert_emp_modal').modal('show');


})

       
});	


   
function select_jender(){
    //alert('ssaa');

    $.ajax({
        type: 'post',
        url: base_url+"drug_ctr/select_jender",
        dataType: "json",
       
       


        success: function (data) {


            $('#JENDER').html('');

            $('#JENDER').append('<option value=""></option>');
            

            $.each(data.items, function(REC_NO, obj)
            {
                $('#JENDER').append('<option value="' + obj.ID + '">' +obj.NAME + '</option>');
            });

        }
    })
   }



   function select_rank(){
    //alert('ssaa');

    $.ajax({
        type: 'post',
        url: base_url+"drug_ctr/select_rank",
        dataType: "json",
       
       


        success: function (data) {


            $('#RANK').html('');

            $('#RANK').append('<option value=""></option>');
            

            $.each(data.items, function(REC_NO, obj)
            {
                $('#RANK').append('<option value="' + obj.ID + '">' +obj.NAME + '</option>');
            });

        }
    })
   }

   function select_section(){
    //alert('ssaa');

    $.ajax({
        type: 'post',
        url: base_url+"drug_ctr/select_section",
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



   function select_social(){
    //alert('ssaa');

    $.ajax({
        type: 'post',
        url: base_url+"drug_ctr/select_social",
        dataType: "json",
       
       


        success: function (data) {


            $('#SOCIAL').html('');

            $('#SOCIAL').append('<option value=""></option>');
            

            $.each(data.items, function(REC_NO, obj)
            {
                $('#SOCIAL').append('<option value="' + obj.ID + '">' +obj.NAME + '</option>');
            });

        }
    })
   }


   function select_status(){
    //alert('ssaa');

    $.ajax({
        type: 'post',
        url: base_url+"drug_ctr/select_status",
        dataType: "json",
       
       


        success: function (data) {


            $('#STATUS').html('');

            $('#STATUS').append('<option value=""></option>');
            

            $.each(data.items, function(REC_NO, obj)
            {
                $('#STATUS').append('<option value="' + obj.ID + '">' +obj.NAME + '</option>');
            });

        }
    })
   }


  


 function select_branch(){
    //alert('ssaa');

    $.ajax({
        type: 'post',
        url: base_url+"drug_ctr/select_branch",
        dataType: "json",
       
       


        success: function (data) {


            $('#BRANCH').html('');

            $('#BRANCH').append('<option value=""></option>');
            

            $.each(data.items, function(REC_NO, obj)
            {
                $('#BRANCH').append('<option value="' + obj.ID + '">' +obj.NAME + '</option>');
            });

        }
    })
   }


/*
   function reword_officer(){
    //  alert('njnhnn');
  
       //use datatable
           oTable1 = $('#sample_20').DataTable({
           // //
           destroy:true,
           "language": {
               url: base_url+'jquery/Arabic.json'
           },
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
               url:base_url+'drug_ctr/reword_officer',
               dataSrc: 'items',
           },
  
          
  
           'columns': [	 
                      { "data": "ID_OFFICER",sWidth: '40px'},                 
                      { "data": "IDNUMBER"},                  
                      { "data": "FERST_NAME"},                  
                      { "data": "FATHER_NAME"},                  
                      { "data": "DAD_NAME"},   
                      { "data": "JENDER"},                  
                      { "data": "RANK"},                  
                      { "data": "MALINUMBER"},                  
                      { "data": "SECTION"}, 
                      { "data": "DATE_BIRTH"},                  
                      { "data": "SOCIAL"},                  
                      { "data": "STATUS"},                  
                      { "data": "BRANCH"}, 
                      { "data": "DATE_JOIN"},                  
                      { "data": "ADREES"},                  
                      { "data": "PHON"},                  
                      { "data": "MOBILE"},   
                      { "data": "STRET"}, 
                                 
                    
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
           { "width": "280px", "targets": [3] },             
           
  
              ],

              
              columnDefs: [
				{targets: 0,width: '10px'},
                {targets: 1,width: '350px'}
               ]
            
        
       
       });
   
       
   }

   */


   function reword_officer(){
  
       //use datatable
           oTable1 = $('#sample_20').DataTable({
           // //
           destroy:true,
           "language": {
               url: base_url+'jquery/Arabic.json'
           },

           responsive: true,

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
               url:base_url+'drug_ctr/reword_officer',
               dataSrc: 'items',
           },
  
          
  
           'columns': [	 
                      { "data": "ID_OFFICER"},                 
                      { "data": "IDNUMBER"},                  
                      { "data": "FERST_NAME"},                  
                      { "data": "FATHER_NAME"},                  
                      { "data": "DAD_NAME"},   
                      { "data": "JENDER"},                  
                      { "data": "RANK"},                  
                      { "data": "MALINUMBER"},                  
                      { "data": "SECTION"}, 
                      { "data": "DATE_BIRTH"},                  
                      { "data": "SOCIAL"},                  
                      { "data": "STATUS"},                  
                      { "data": "BRANCH"}, 
                      { "data": "DATE_JOIN"},                  
                      { "data": "ADREES"},                  
                      { "data": "PHON"},                  
                      { "data": "MOBILE"},   
                      { "data": "STRET"}, 
                                 
                    
                      {

                         "data": null, sWidth: '5px', Sortable: false,
                         "mRender": function (data, type, full) {
                             return  ' <button type="button" class="btn btn-primary btn-outline btn-circle sbold "  onclick="get_item_detail( ' + full.ID_REWORD + ','+'\'' + full.DATE_REWORD + '\','+'\'' + full.TYPE_REWORD + '\',' + full.NUMBER_REWORD + ','+'\'' + full.NOTES_REWORD + '\' )">'+'تعديل '+'</button>' ;
                         },
                        },
                         {
                             "data": null, sWidth: '5px', Sortable: false,
                             "mRender": function (data, type, full) {
                                 return  '<button type="button" class="btn btn-danger btn-outline btn-circle sbold green"  onclick="del_item(' + full.ID_OFFICER  +')">'+'حذف '+'</button>' ;
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
           
  
              ],

              
              columnDefs: [
				{
					targets: 0,
					width: '900px',
					className: 'dt-left',
					orderable: false,
					render: function(data, type, full, meta) {
						return `
                        <label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable"/>
                            <span></span>
                        </label>`;
					},
				},

                {	targets: 1,	title: 'رقم الهوية',orderable: false, width: '3080px',	},

                {	targets: 2,	title: ' الاسم',orderable: false, width: '80px',	},

                {	targets: 3,	title: 'اسم الاب',orderable: false, width: '80px',	},
                {	targets: 4,	title: 'اسم العائلة',orderable: false, width: '80px',	},
                {	targets: 5,	title: 'الجنس',orderable: false, width: '80px',	},
                {	targets: 6,	title: 'الرتبة',orderable: false, width: '80px',	},
                {	targets: 7,	title: 'الرقم المالي',orderable: false, width: '80px',	},
                {	targets: 8,	title: 'Actions',orderable: false, width: '80px',	},
                {	targets: 9,	title: 'Actions',orderable: false, width: '80px',	},
                {	targets: 10,title: 'Actions',orderable: false, width: '80px',	},
                {	targets: 11,title: 'Actions',orderable: false, width: '80px',	},
                {	targets: 12,title: 'Actions',orderable: false, width: '80px',	},
                {	targets: 13,title: 'Actions',orderable: false, width: '80px',	},
                {	targets: 14,title: 'Actions',orderable: false, width: '80px',	},
                {	targets: 15,title: 'Actions',orderable: false, width: '80px',	},
                {	targets: 16,title: 'Actions',orderable: false, width: '80px',	},
                {	targets: 17,title: 'Actions',orderable: false, width: '80px',	},
                {	targets: 18,title: 'Actions',orderable: false, width: '80px',	},
                {	targets: 19,title: 'Actions',orderable: false, width: '80px',	},

			
			],
            
        
       
       });
   
       
   }


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
                 url: base_url+"drug_ctr/delete_officer",
                 dataType: "json",
                 data: {
                    ID_OFFICER: p1
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



     function insert_officer() {

        alert('k1');
       //  alert($('#typerecord').val() );
     //    alert($('#notes_REWORD').val()  );
     
         $.ajax({
                type: 'post',
                url: base_url + "drug_ctr/insert_officer",
                dataType: "json",
                data: {

                   
                    IDNUMBER: $('#IDNUMBER').val() ,
                    FERST_NAME: $('#FERST_NAME').val()  ,
                    FATHER_NAME: $('#FATHER_NAME').val() ,
                    DAD_NAME: $('#DAD_NAME').val() ,	
                    JENDER: $('#JENDER').val() ,
                    RANK: $('#RANK').val()  ,	
                    MALINUMBER: $('#MALINUMBER').val() ,
                    SECTION: $('#SECTION').val()  ,	
                    DATE_BIRTH: $('#DATE_BIRTH').val() ,
                    SOCIAL: $('#SOCIAL').val()  ,	
                    STATUS: $('#STATUS').val() ,
                    BRANCH: $('#BRANCH').val()  ,	
                    DATE_JOIN: $('#DATE_JOIN').val() ,
                    ADREES: $('#ADREES').val()  ,	
                    PHON: $('#PHON').val() ,
                    MOBILE: $('#MOBILE').val()  ,	
                    STRET: $('#STRET').val() 
                
     
            },
                
            success: function (data) {
               alert('k2');
             if(data.is_ok = 1) {
                 if (data.row_count >= 1) {
                     oTable1.ajax.reload( null, false );
                     $('#insert_emp_modal').modal('hide');
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
     
  