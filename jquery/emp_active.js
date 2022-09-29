var oTable;
var var_reward_id;
let userid;
/*******************document***************************/
$(document).ready(function(){

    get_data_active();


});

/************************تفعيل وتعطيل**********************/

function activity_state1(p1) {



    Swal.fire({
        title: 'هل  تريد تعطيل هذا المستخدم',
        icon: 'question',
        iconHtml: '؟',
        confirmButtonText: 'نعم',
        cancelButtonText: 'لا',
        showCancelButton: true,
        showCloseButton: true
    }).then((result) => {
        if (result.isConfirmed) {
            //  alert('yes');
            //  alert(p1);

            $.ajax({
                type: 'post',
                url: base_url+"eng_ctr/activity_state",

                dataType: "json",
                data: {
                    CARDID: p1,
                    ACTIVE_STATE:2,
                },
                success: function (data) {
                    if (data.p_errcod == 1) {


                        toastr.success('تم تعطيل الحساب بنجاح', 'تم ');
                        get_data_active();
                    }

                    else  if (data.p_errcod == 2) {
                        toastr.error('لم يتم تعطيل الحساب  ', 'خطأ   ');
                    }
                    else   {
                        toastr.warning('ضضضض');
                    }






                }
            })
        }
    });

}

function activity_state(p1) {



    Swal.fire({
        title: 'هل  تريد تفعيل هذا المستخدم',
        icon: 'question',
        iconHtml: '؟',
        confirmButtonText: 'نعم',
        cancelButtonText: 'لا',
        showCancelButton: true,
        showCloseButton: true
    }).then((result) => {
        if (result.isConfirmed) {
            //  alert('yes');
            //  alert(p1);

            $.ajax({
                type: 'post',
                url: base_url+"eng_ctr/activity_state",

                dataType: "json",
                data: {
                    CARDID: p1,
                    ACTIVE_STATE:1,
                },
                success: function (data) {
                    if (data.p_errcod == 1) {


                        toastr.success('تم تفعيل الحساب بنجاح', 'تم ');
                        get_data_active();

                    }

                    else  if (data.p_errcod == 2) {
                        toastr.error('لم يتم تقعيل الحساب  ', 'خطأ   ');
                    }
                    else   {
                        toastr.warning('ضضضض');
                    }






                }
            })
        }
    });

}
function get_data_active(){

    $.ajax({

        type:'post',
        url:base_url+"eng_ctr/get_data/",
        dataType:"json",



        success:function(data){
            //    var rows = document.getElementById("get_data").getElementsByTagName("tr").length;

            //alert(pageNumCount);
            var m=0;
            var a=0;
            var w=0;
            var v=0;

            $("#get_data_active").html('');

            $("#check").html('');

            $("#cirpic").html('');


            var event_data = '';
            $.each(data.items, function (REC_NO, obj) {
                /*******************append**************************/

                /*******************append************************** */

                /*******************append***************************/

                /*console.log(value);*/
                event_data += '<tr>';
                // event_data += '<td>'+'<img style=" border-radius: 27px;""width="42" height="42"; src="data:image/jpeg;base64,'  + obj.IMAGE + '" alt="Thumb-1">'+'    </td>';

                event_data += '<td>'+obj.CARDID+'</td>';
                //event_data += '<td>'+'<div class="card">' +obj.FULLNAME+'</div>'+'</td>' +'<br'+obj.CARDID+'</td>';
                //   event_data += '<td>'+obj.STATUSNAME+'</td>';

                event_data += '<td>'+obj.FULLNAME+'</td>';
                // event_data += '<td>'+obj.SECIONNAME+'</td>';
                event_data += '<td>'+obj.PASSWORD+'</td>';

                if  (data.items[v].ACTIVE_STATE=== "1") {


                    event_data += '<td>' + '<span id="aa" class="badge badge-pill bg-light-success mb-1 mr-2">مفعل</span>' + '</td>';

                }

                else  if  (data.items[v].ACTIVE_STATE=== "2") {
                    event_data += '<td>' +'<span class="badge badge-pill bg-light-danger mb-1 mr-2">معطل</span>'+'</td>';


                }

                a++;


                // alert((data.items[a].STATUS));


                if  (data.items[v].ACTIVE_STATE=== "1") {


                    event_data += '<td>'  + ' <button type="button" class="btn btn-danger bg-light-danger mr-1 mb-1"  ID="activity_state1" onclick="activity_state1(' + obj.CARDID  +')" >'+'تعطيل '+'</button>'  +  '</td>';

                }

                else   if  (data.items[v].ACTIVE_STATE=== "2") {



                    event_data += '<td>'  + ' <button type="button" class="btn btn-success bg-light-success mr-1 mb-1" ID="activity_state"  onclick="activity_state(' + obj.CARDID  +')"  >'+'تفعيل '+'</button>'  +  '</td>';


                }

                v++;





                event_data += '<tr>';

            });
            $("#get_data_active").append(event_data);




        }



    })


}

