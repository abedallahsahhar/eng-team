
var emp_lis_var;

$(document).ready(function(){ 
	
	const Toast = Swal.mixin({
		toast: true,
		position: 'center',
		showConfirmButton: false,
		timer: 1500,
		timerProgressBar: true,
		didOpen: (toast) => {
			toast.addEventListener('mouseenter', Swal.stopTimer)
			toast.addEventListener('mouseleave', Swal.resumeTimer)
		}
	})
      $('#dele_emp_btn').click( function (){
		  delete_employee(   $('#employee_id').val()   );
	  } );


      $('#show_new_modal_btn').on('click', function (){
		   $('#new_emp_modal').modal('show');
	  } );


 function delete_employee(p1){

	 $.ajax({
		 type: 'post',
		 url: "../main_ctr/delet_employee",
		 dataType: "json",
		 data: {
			 P1: p1
		 },
		 success: function (data) {

			 if(data.its_ok=1){
			 	if(data.row_count>=1)
					//alert("تم حذف "+data.row_count +"سجل");
				 Toast.fire({
					 icon: 'success',
					 title: "تم حذف "+data.row_count +"سجل"
				 });
			 	else //alert("لم يتم حذف أي سجل "+data.error_msg);
				 Toast.fire({
					 icon: 'warning',
					 title: "لم يتم حذف أي سجل "+data.error_msg
				 });
			 }
			 else Toast.fire({
				 icon: 'error',
				 title: "لم يتم حذف أي سجل "+data.error_msg
			 });

		 }

	 })


 }
}); //.........end $(document).ready(function()  ........




