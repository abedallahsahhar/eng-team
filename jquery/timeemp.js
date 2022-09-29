var oTable;
var oTable1;

/*******************document***************************/
$(document).ready(function(){
    // $("#CARDID").select2({disabled:'readonly'});

    select_emp();
    get_timeemp();
    get_timeemp1();


});
/*******************empoyee***************************/
function get_timeemp(){

    oTable = $('#get_timeemp').DataTable({
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
            dataType:'json',
            type: 'POST',
            url:base_url+'eng_ctr/get_timeemp',
            dataSrc: 'items',
            data: function (d) {
                d.user_id = $('#user_id').val()
            }

        },

        'columns': [
            {title: 'تاريح اليوم  ', "data": "DATE_DAY"},
            {title: 'الاسم  ', "data": "FULLNAME"},
            {title: 'القسم  ', "data": "SECIONNAME"},
            {title: 'وقت الحضور  ', "data": "TIME_COM"},
            {title: 'وقت الانصراف  ', "data": "TIME_GO"},

            //         {title: ' حدف  ',
            //
            // "data": null,
            //     sWidth: '5px',
            //     Sortable: false,
            //     "mRender": function (data, type, full) {
            //         return '<button type="button" class="btn btn-danger bg-light-danger" onclick="DELETE_timeemp(' + full.ID + ')">' + '<i class="ft-trash"></i> ' + '</button>';
            //     },
            // },



        ]



    });


}
function insert_timeemp() {

 //alert('DATEBAY');

     $.ajax({
          type: 'post',
          url: base_url + "eng_ctr/insert_timeemp",
          dataType: "json",
          data: {
              DATE_DAY: $('#DATE_DAY').val() ,
              CARDID: $('#CARDID').val()  ,
              TIME_COM: $('#TIME_COM').val() ,
              TIME_GO: $('#TIME_GO').val()  ,



          },


         success: function (data) {
             if (data.p_errcod == 1) {

                 toastr.success('تم اضافة البيانات بنجاح', 'تم ');
                 window.location=base_url+'main_ctr/welcome_page';

             }

             else  if (data.p_errcod == 2) {
                 toastr.error('قمت بادخال البيانات بشكل خطا  ', 'خطأ   ');
             }
             else if (data.p_errcod == 5)   {
                 toastr.warning('تم تسجيل دخولك مسبقا');
                 window.location=base_url+'main_ctr/welcome_page';

             }

             oTable.ajax.reload(null, false);





         }
     });
}
function   DELETE_timeemp(p1) {
    //alert(p1);
     Swal.fire({
          title: 'هل  تريد حذف هذا البيانات؟',
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
                    url: base_url+"eng_ctr/DELETE_timeemp",
                    dataType: "json",
                    data: {
                        p_id: p1
                    },


                   success: function (data) {
                       if (data.P_ERRCOD == 1) {
                        //   oTable1.ajax.reload(null, false);
                           get_timeemp1();
                           toastr.success('تم حدف البيانات بنجاح', 'تم ');



                       }

                       else  if (data.P_ERRCOD == 2) {
                           toastr.error(' لم يتم حدف البيانات ', 'خطا ');

                       }
                       else   {
                           toastr.warning('ضضضض');
                       }






                   }

               })
          }
     });

}
/*******************clear_timeemp***************************/
function clear_timeemp() {
    $('#DATE_DAY').val('');
    $('#CARDID').val('').trigger('change');
    $('#TIME_COM').val('');
    $('#TIME_GO').val('');

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
                $('#CARDID').append('<option value="' + obj.FULLNAME + '">' +obj.CARDID + '</option>');
            });

        }
    })
}
function get_timeemp1(){
    oTable1 = $('#get_timeemp1').DataTable({
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


        "ajax":{
            dataType:'json',
            type: 'POST',
            url:base_url+'eng_ctr/get_timeemp1',
            dataSrc: 'items',


        },

        'columns': [
            {title: 'تاريح اليوم  ', "data": "DATE_DAY"},
            {title: 'الاسم  ', "data": "FULLNAME"},
            {title: 'القسم  ', "data": "SECIONNAME"},
            {title: 'وقت الحضور  ', "data": "TIME_COM"},
            {title: 'وقت الانصراف  ', "data": "TIME_GO"},

                    {title: ' حدف  ',

            "data": null,
                sWidth: '5px',
                Sortable: false,
                "mRender": function (data, type, full) {
                    return '<button type="button" class="btn btn-danger bg-light-danger" onclick="DELETE_timeemp(' + full.ID + ')">' + '<i class="ft-trash"></i> ' + '</button>';
                },
            },



        ]



    });


}
function UPDATE_timeemp() {
    $.ajax({
        type: 'post',
        url: base_url + "eng_ctr/UPDATE_timeemp",
        dataType: "json",
        data: {
            CARDID: $('#CARDID').val() ,
            TIME_GO: $('#TIME_GO').val()  ,
        },
        success: function (data) {

                toastr.success('تم تسجيل خروجك بنجاح');

            oTable.ajax.reload(null, false);

            window.location=base_url+'login_ctr/logout';








        }
    });
}
function UPDATE_detail(p_id,TIME_GO) {
    var today = new Date();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    document.getElementById("TIME_GO").value = time;

    $('#p_id').val(p_id);

    $('#TIME_GO').val(time);


}
