
$(document).ready(function(){
    get_navegations();
    countout();

    countqq11();
    insert_refresh();
    alltaskscard();
  //  alert(22);

});	

function login() {
   // alert(22);

    $.ajax({
        type: 'post',
        url: base_url + "Login_ctr/login",
        dataType: "json",
        data: {
            P_CARDID: $('#P_CARDID').val() ,
            P_PASSWORD: $('#P_PASSWORD').val() ,
        },

        success: function (data) {
            // alert(22);
            // if(data.p_counter==0  ) {
            //     $('#login_msg').show();
            //     $('#login_msg').text('!! خطأ في المدخلات');
            //     // alert('username or password erroe');
            // }

             if(data.p_counter==0 && data.p_active==1 ){
              //  alert('user name or password is wrong');
                //   Swal.fire("تم تعديل النجاح", "", "success");
                //  document.getElementById("login_msg").style.display = "block";
                $('#login_msg').show();
                $('#login_msg').text('كلمة المرور غير صحيحة')

            }

                else if(data.p_counter==1 && data.p_active==1 && data.pout[0].JOBTITLE==2){
                //  alert('data right');

                window.location=base_url+'main_ctr/welcome_page';
                //  Swal.fire("تم تعديل النجاح", "", "success");

            }
             else if(data.p_counter==1 && data.p_active==1 && data.pout[0].JOBTITLE==0){
                 //  alert('data right');

                 window.location=base_url+'main_ctr/emp4';
                 //  Swal.fire("تم تعديل النجاح", "", "success");

             } else if(data.p_counter==1 && data.p_active==1 && data.pout[0].JOBTITLE==1){
                 //  alert('data right');

                 window.location=base_url+'main_ctr/emp4';
                 //  Swal.fire("تم تعديل النجاح", "", "success");

             }

                else if(data.p_counter==1 && data.p_active==2){

                // Swal.fire("تم تعديل النجاح", "", "success");

              //  alert(' account is locked');
                //   document.getElementById("login_msg").style.display = "block";
                 $('#login_msg').show();
                 $('#login_msg').text('!!  الحساب معطل ');
            }
                else{
                   // alert(' account is 11');
                $('#login_msg').show();
                $('#login_msg').text('اسم المستخدم غير صالح');
                }






        },


    });
}
function countqq11() {

    $.ajax({
        type: 'post',
        url: base_url + "Eng_ctr/countqq11",
        dataType: "json",
        data: {
            SECTION: $('#SECTION').val() ,
        },
        success: function(data) {




            $('#qq11').text(data.P_OUT);

        }
    })
}
function countout() {

    $.ajax({
        type: 'post',
        url: base_url + "Eng_ctr/countout",
        dataType: "json",
        data: {
            SECTION: $('#SECTION').val() ,
        },
        success: function(data) {




            $('#countout0').text(data.P_OUT);

        }
    })
}
function alltaskscard() {

    $.ajax({
        type: 'post',
        url: base_url + "Eng_ctr/alltaskscard",
        dataType: "json",
        data: {
            CARDID: $('#CARDID111').val() ,
        },
        success: function(data) {




            $('#alltaskscard').text(data.P_OUT);

        }
    })
}

/*-------------------عرض الطلبات-------------------------*/
function get_taskv1() {
    //alert(22);
    $.ajax({
        type: 'post',
        async:false,
        url: base_url + "boss_ctr/get_task",
        dataType: "json",
        data: {
            user_id:$('#user_id').val(),
        },
        success: function (data) {
            //alert(22);

            $('#itemm').html("")
            $.each(data.items, function (REC_NO, obj) {
                if(obj.STATUS_NO ==="قيد الإنتظار"){
                    $('#itemm').append(
                        '<a  class="" href="http://127.0.0.1/team_prog/Main_ctr/tasks_emp">'+
                        '<div id="itemm" class="media d-flex align-items-center d-flex justify-content-between read-notification">'+
                        '<div class="media-body">'+
                                '<h6 class="m-0"><span>مهمة جديدة</span><small class="grey lighten-1 font-italic float-right">5 mins ago</small></h6><smallclass="noti-text"> ' + obj.TASK_DETAILES + '</small>'+
                                '<h6 class="noti-text font-small-3 m-0"> ' + obj.TASK_NAME + '</h6>'+

                        '</div>'+
                        '</a>'
                );
                }
            });

        }
    }),
    $.ajax({
        type: 'post',
        async:false,
        url: base_url + "eng_ctr/get_OUTTIME",
        dataType: "json",
        data: {
            user_id:$('#user_id').val(),
        },
        success: function (data) {
            //alert(22);

            $('#itemm').html("")
            $.each(data.items, function (REC_NO, obj) {
                if(obj.STATUS_NO ==="تم القبول"){
                    $('#itemm').append(
                        '<a  class="" href="http://127.0.0.1/team_prog/Main_ctr/tasks_emp">'+
                        '<div id="itemm" class="media d-flex align-items-center d-flex justify-content-between read-notification">'+
                        '<div class="media-body">'+
                        '<h6 class="m-0"><span>مهمة جديدة</span><small class="grey lighten-1 font-italic float-right">5 mins ago</small></h6><smallclass="noti-text"> ' + obj.TASK_DETAILES + '</small>'+
                        '<h6 class="noti-text font-small-3 m-0"> ' + obj.TASK_NAME + '</h6>'+

                        '</div>'+
                        '</a>'
                    );
                }
            });

        }
    }),
    $.ajax({
        type: 'post',
        async:false,
        url: base_url + "eng_ctr/get_holyday",
        dataType: "json",
        data: {
            user_id:$('#user_id').val(),
        },
        success: function (data) {
            //alert(22);

            $('#itemm').html("")
            $.each(data.items, function (REC_NO, obj) {
                if(obj.STATUS_NO ==="تم القبول"){
                    $('#itemm').append(
                        '<a  class="" href="http://127.0.0.1/team_prog/Main_ctr/tasks_emp">'+
                        '<div id="itemm" class="media d-flex align-items-center d-flex justify-content-between read-notification">'+
                        '<div class="media-body">'+
                        '<h6 class="m-0"><span>مهمة جديدة</span><small class="grey lighten-1 font-italic float-right">5 mins ago</small></h6><smallclass="noti-text"> ' + obj.TASK_DETAILES + '</small>'+
                        '<h6 class="noti-text font-small-3 m-0"> ' + obj.TASK_NAME + '</h6>'+

                        '</div>'+
                        '</a>'
                    );
                }
            });

        }
    })


    setTimeout(function(){

        var rows=document.getElementById("itemm").getElementsByClassName("media").length;
        document.getElementById("countnave").innerText=rows;


    }, 500);
}

function insert_refresh() {

    $.ajax({
        type: 'post',
        url: base_url + "eng_ctr/insert_refresh",
        dataType: "json",
        data: {
            CARDID: $('#CARDID').val() ,


        },


        success: function (data) {


            //    toastr.warning('ضضضض');







        }
    });
}
function insert_refresh1(){
    $(this).css('background-color','#000000');
}

/*-------------------اضافة الطلبات-------------------------*/
function get_navegations() {

    //alert(22);
    $.ajax({
        type: 'post',
        async:false,
        url: base_url + "Eng_ctr/get_navegations",
        dataType: "json",
        data: {
            CARDID:$('#user_id').val(),

        },
        success: function (data) {
         //  alert($('#JOBTITLE111').val())
            $('#itemm11').html("")
            $.each(data.items, function (REC_NO, obj) {
                /******************************االاجازات***************************/

                if(obj.STATUS_NO ==="تم الرفض"  && obj.URL== "Main_ctr/emp31" &&  obj.IS_READ=="1"){
                    $('#itemm11').append(
                        '<a  onclick="read_update('+ obj.ID +');">'+

                        '<div id="itemm" class="media notactiveqq d-flex align-items-center d-flex justify-content-between read-notification">'+
                        '<div class="media-body">'+
                        '<h6 class="m-0"><span> طلب اجازة</span><small class="grey lighten-1 font-italic float-right">منذ' + obj.TIME + '</small></h6><smallclass="noti-text"> تم رفض طلب اجازتك</small>'+
                        // '<h6 class="noti-text font-small-3 m-0"> ' + obj.TASK_NAME + '</h6>'+
                        '<input type="hidden" id="P_ID'+ obj.ID +'" value="' + obj.ID + '" />'+
                        '</div>'+
                        '</a>'
                    );
                }
                if(obj.STATUS_NO ==="تم الرفض"  && obj.URL== "Main_ctr/emp31" &&  obj.IS_READ=="2"){
                    $('#itemm11').append(
                        '<a  onclick="read_update('+ obj.ID +');">'+

                        '<div id="itemm" style="    background-color: white;" class="media  align-items-center  justify-content-between read-notification">'+
                        '<div class="media-body">'+
                        '<h6 class="m-0"><span> طلب اجازة</span><small class="grey lighten-1 font-italic float-right">منذ' + obj.TIME + '</small></h6><smallclass="noti-text"> تم رفض طلب اجازتك</small>'+
                        // '<h6 class="noti-text font-small-3 m-0"> ' + obj.TASK_NAME + '</h6>'+
                        '<input type="hidden" id="P_ID'+ obj.ID +'" value="' + obj.ID + '" />'+
                        '</div>'+
                        '</a>'
                    );
                }




                if(obj.STATUS_NO ==="تم القبول"  && obj.URL== "Main_ctr/emp31"  &&  obj.IS_READ=="1"){
                    $('#itemm11').append(
                        '<a  onclick="read_update('+ obj.ID +');">'+
                        '<div id="itemm" class="media notactiveqq  d-flex align-items-center d-flex justify-content-between read-notification">'+
                        '<div class="media-body">'+
                        '<h6 class="m-0"><span> طلب اجازة</span><small class="grey lighten-1 font-italic float-right">منذ' + obj.TIME + '</small></h6><smallclass="noti-text"> تم قبول طلب اجازتك</small>'+
                        // '<h6 class="noti-text font-small-3 m-0"> ' + obj.TASK_NAME + '</h6>'+
                        '<input type="hidden" id="P_ID'+ obj.ID +'" value="' + obj.ID + '" />'+

                        '</div>'+
                        '</a>'
                    );
                }
                if(obj.STATUS_NO ==="تم القبول"  && obj.URL== "Main_ctr/emp31"  &&  obj.IS_READ=="2"){
                    $('#itemm11').append(
                        '<a  onclick="read_update('+ obj.ID +');">'+
                        '<div id="itemm" style="    background-color: white;" class="media  align-items-center  justify-content-between read-notification">'+
                        '<div class="media-body">'+
                        '<h6 class="m-0"><span> طلب اجازة</span><small class="grey lighten-1 font-italic float-right">منذ' + obj.TIME + '</small></h6><smallclass="noti-text"> تم قبول طلب اجازتك</small>'+
                        // '<h6 class="noti-text font-small-3 m-0"> ' + obj.TASK_NAME + '</h6>'+
                        '<input type="hidden" id="P_ID'+ obj.ID +'" value="' + obj.ID + '" />'+

                        '</div>'+
                        '</a>'
                    );
                }


                if(obj.STATUS_NO ==="قيد الإنتظار"  && obj.URL== "Main_ctr/emp31"  &&  obj.IS_READ=="1"  && $('#JOBTITLE111').val()=="2"){
                    $('#itemm11').append(
                        '<a  onclick="read_update1('+ obj.ID +');">'+
                        '<div id="itemm" class="media notactiveqq d-flex align-items-center d-flex justify-content-between read-notification">'+
                        '<div class="media-body">'+
                        '<h6 class="m-0"><span> طلب اجازة</span><small class="grey lighten-1 font-italic float-right">منذ' + obj.TIME + '</small></h6><smallclass="noti-text"> طلب اجازة جديد</small>'+
                        // '<h6 class="noti-text font-small-3 m-0"> ' + obj.TASK_NAME + '</h6>'+
                        '<input type="hidden" id="P_ID'+ obj.ID +'" value="' + obj.ID + '" />'+

                        '</div>'+
                        '</a>'
                    );
                }
                if(obj.STATUS_NO ==="قيد الإنتظار"  && obj.URL== "Main_ctr/emp31"  &&  obj.IS_READ=="2"  && $('#JOBTITLE111').val()=="2"){
                    $('#itemm11').append(
                        '<a  onclick="read_update1('+ obj.ID +');">'+
                        '<div id="itemm" style="    background-color: white;" class="media  align-items-center  justify-content-between read-notification">'+
                        '<div class="media-body">'+
                        '<h6 class="m-0"><span> طلب اجازة</span><small class="grey lighten-1 font-italic float-right">منذ' + obj.TIME + '</small></h6><smallclass="noti-text">  طلب اجازة جديد</small>'+
                        // '<h6 class="noti-text font-small-3 m-0"> ' + obj.TASK_NAME + '</h6>'+
                        '<input type="hidden" id="P_ID'+ obj.ID +'" value="' + obj.ID + '" />'+

                        '</div>'+
                        '</a>'
                    );
                }

/*****************************الادونات****************************/




                if(obj.STATUS_NO ==="تم الرفض"  && obj.URL== "Main_ctr/emp_outim" &&  obj.IS_READ=="1"){
                    $('#itemm').append(
                        '<a  onclick="read_updateemp_outim('+ obj.ID +');">'+
                        '<div id="itemm" class="media notactiveqq d-flex align-items-center d-flex justify-content-between read-notification">'+
                        '<div class="media-body">'+
                        '<h6 class="m-0"><span> ادن خروج </span><small class="grey lighten-1 font-italic float-right">منذ' + obj.TIME + '</small></h6><smallclass="noti-text">  تم رفض ادن خروج</small>'+
                        // '<h6 class="noti-text font-small-3 m-0"> ' + obj.TASK_NAME + '</h6>'+
                        '<input type="hidden" id="P_ID'+ obj.ID +'" value="' + obj.ID + '" />'+
                        '</div>'+
                        '</a>'
                    );
                }
                if(obj.STATUS_NO ==="تم الرفض"  && obj.URL== "Main_ctr/emp_outim" &&  obj.IS_READ=="2"){
                    $('#itemm').append(
                        '<a  onclick="read_updateemp_outim('+ obj.ID +');">'+

                        '<div id="itemm" style="    background-color: white;" class="media   align-items-center  justify-content-between read-notification">'+
                        '<div class="media-body">'+
                        '<h6 class="m-0"><span>  ادن خروج</span><small class="grey lighten-1 font-italic float-right">منذ' + obj.TIME + '</small></h6><smallclass="noti-text"> تم رفض ادن خروج</small>'+
                        // '<h6 class="noti-text font-small-3 m-0"> ' + obj.TASK_NAME + '</h6>'+
                        '<input type="hidden" id="P_ID'+ obj.ID +'" value="' + obj.ID + '" />'+
                        '</div>'+
                        '</a>'
                    );
                }




                if(obj.STATUS_NO ==="تم القبول"  && obj.URL== "Main_ctr/emp_outim"  &&  obj.IS_READ=="1"){
                    $('#itemm').append(
                        '<a  onclick="read_updateemp_outim('+ obj.ID +');">'+
                        '<div id="itemm" class="media  d-flex align-items-center d-flex justify-content-between read-notification">'+
                        '<div class="media-body">'+
                        '<h6 class="m-0"><span> ادن خروج</span><small class="grey lighten-1 font-italic float-right">منذ' + obj.TIME + '</small></h6><smallclass="noti-text"> تم قبول ادن خروج</small>'+
                        // '<h6 class="noti-text font-small-3 m-0"> ' + obj.TASK_NAME + '</h6>'+
                        '<input type="hidden" id="P_ID'+ obj.ID +'" value="' + obj.ID + '" />'+

                        '</div>'+
                        '</a>'
                    );
                }
                if(obj.STATUS_NO ==="تم القبول"  && obj.URL== "Main_ctr/emp_outim"  &&  obj.IS_READ=="2"){
                    $('#itemm').append(
                        '<a  onclick="read_updateemp_outim('+ obj.ID +');">'+
                        '<div id="itemm" style="    background-color: white;" class="media  align-items-center  justify-content-between read-notification">'+
                        '<div class="media-body">'+
                        '<h6 class="m-0"><span> ادن خروج</span><small class="grey lighten-1 font-italic float-right">منذ' + obj.TIME + '</small></h6><smallclass="noti-text"> تم قبول ادن خروج</small>'+
                        // '<h6 class="noti-text font-small-3 m-0"> ' + obj.TASK_NAME + '</h6>'+
                        '<input type="hidden" id="P_ID'+ obj.ID +'" value="' + obj.ID + '" />'+

                        '</div>'+
                        '</a>'
                    );
                }


                if(obj.STATUS_NO ==="قيد الإنتظار"  && obj.URL== "Main_ctr/emp_outim"  &&  obj.IS_READ=="1"  && $('#JOBTITLE111').val()=="2"){
                    $('#itemm').append(
                        '<a  onclick="read_updateemp_outim1('+ obj.ID +');">'+
                        '<div id="itemm" class="media notactiveqq d-flex align-items-center d-flex justify-content-between read-notification">'+
                        '<div class="media-body">'+
                        '<h6 class="m-0"><span> ادن خروج</span><small class="grey lighten-1 font-italic float-right">منذ' + obj.TIME + '</small></h6><smallclass="noti-text"> ادن خروج جديد</small>'+
                        // '<h6 class="noti-text font-small-3 m-0"> ' + obj.TASK_NAME + '</h6>'+
                        '<input type="hidden" id="P_ID'+ obj.ID +'" value="' + obj.ID + '" />'+

                        '</div>'+
                        '</a>'
                    );
                }
                if(obj.STATUS_NO ==="قيد الإنتظار"  && obj.URL== "Main_ctr/emp_outim"  &&  obj.IS_READ=="2"  && $('#JOBTITLE111').val()=="2"){
                    $('#itemm').append(
                        '<a  onclick="read_updateemp_outim1('+ obj.ID +');">'+
                        '<div id="itemm" style="    background-color: white;" class="media  align-items-center  justify-content-between read-notification">'+
                        '<div class="media-body">'+
                        '<h6 class="m-0"><span> ادن خروج</span><small class="grey lighten-1 font-italic float-right">منذ' + obj.TIME + '</small></h6><smallclass="noti-text">  ادن خروج جديد</small>'+
                        // '<h6 class="noti-text font-small-3 m-0"> ' + obj.TASK_NAME + '</h6>'+
                        '<input type="hidden" id="P_ID'+ obj.ID +'" value="' + obj.ID + '" />'+

                        '</div>'+
                        '</a>'
                    );
                }








                /*********************************************************/


                if(obj.STATUS_NO ==="قيد الإنتظار"  && obj.URL== "Main_ctr/tasks_emp" &&  obj.IS_READ=="1"){
                    $('#itemm').append(
                        '<a  onclick="read_updatetasks_emp('+ obj.ID +');">'+

                        '<div id="itemm" class="media notactiveqq d-flex align-items-center d-flex justify-content-between read-notification">'+
                        '<div class="media-body" >'+
                        '<h6 class="m-0"><span> المهمام </span><small class="grey lighten-1 font-italic float-right">منذ' + obj.TIME + '</small></h6><smallclass="noti-text">مهمة جديدة</small>'+
                        // '<h6 class="noti-text font-small-3 m-0"> ' + obj.TASK_NAME + '</h6>'+
                        '<input type="hidden" id="P_ID'+ obj.ID +'" value="' + obj.ID + '" />'+
                        '</div>'+
                        '</a>'
                    );
                }
                if(obj.STATUS_NO ==="قيد الإنتظار"  && obj.URL== "Main_ctr/tasks_emp" &&  obj.IS_READ=="2"){
                    $('#itemm').append(
                        '<a  onclick="read_updatetasks_emp('+ obj.ID +');">'+

                        '<div id="itemm" >'+
                        '<div id="itemm" style="    background-color: white;" class="media  align-items-center  justify-content-between read-notification">'+
                        '<h6 class="m-0"><span>   المهمام</span><small class="grey lighten-1 font-italic float-right">منذ' + obj.TIME + '</small></h6><smallclass="noti-text"> مهممة جديدة</small>'+
                        // '<h6 class="noti-text font-small-3 m-0"> ' + obj.TASK_NAME + '</h6>'+
                        '<input type="hidden" id="P_ID'+ obj.ID +'" value="' + obj.ID + '" />'+
                        '</div>'+
                        '</a>'
                    );
                }




                if(obj.STATUS_NO ==="المهمة متاخرة"  && obj.URL== "Main_ctr/tasks_emp"  &&  obj.IS_READ=="1" && $('#JOBTITLE111').val()=="2" ){
                    $('#itemm').append(
                        '<a  onclick="read_updatetasks_emp1('+ obj.ID +');">'+
                        '<div id="itemm" class="media notactiveqq d-flex align-items-center d-flex justify-content-between read-notification">'+
                        '<div class="media-body">'+
                        '<h6 class="m-0"><span>  المهمام</span><small class="grey lighten-1 font-italic float-right">منذ' + obj.TIME + '</small></h6><smallclass="noti-text"> المهمة متاخرة</small>'+
                        // '<h6 class="noti-text font-small-3 m-0"> ' + obj.TASK_NAME + '</h6>'+
                        '<input type="hidden" id="P_ID'+ obj.ID +'" value="' + obj.ID + '" />'+

                        '</div>'+
                        '</a>'
                    );
                }
                if(obj.STATUS_NO ==="المهمة متاخرة"  && obj.URL== "Main_ctr/tasks_emp"  &&  obj.IS_READ=="2" && $('#JOBTITLE111').val()=="2" ){
                    $('#itemm').append(
                        '<a  onclick="read_updatetasks_emp1('+ obj.ID +');">'+
                        '<div id="itemm" style="    background-color: white;" class="media  align-items-center  justify-content-between read-notification">'+
                        '<div class="media-body">'+
                        '<h6 class="m-0"><span>  المهمام</span><small class="grey lighten-1 font-italic float-right">منذ' + obj.TIME + '</small></h6><smallclass="noti-text"> يوجد مهمة متاحرة</small>'+
                        // '<h6 class="noti-text font-small-3 m-0"> ' + obj.TASK_NAME + '</h6>'+
                        '<input type="hidden" id="P_ID'+ obj.ID +'" value="' + obj.ID + '" />'+

                        '</div>'+
                        '</a>'
                    );
                }


                if(obj.STATUS_NO ==="قيد العمل "  && obj.URL== "Main_ctr/tasks_emp"  &&  obj.IS_READ=="1" && $('#JOBTITLE111').val()=="2" ){
                    $('#itemm').append(
                        '<a  onclick="read_updatetasks_emp1('+ obj.ID +');">'+
                        '<div id="itemm" class="media notactiveqq d-flex align-items-center d-flex justify-content-between read-notification">'+
                        '<div class="media-body">'+
                        '<h6 class="m-0"><span>  المهمام</span><small class="grey lighten-1 font-italic float-right">منذ' + obj.TIME + '</small></h6><smallclass="noti-text"> المهمة قيد العمل</small>'+
                        // '<h6 class="noti-text font-small-3 m-0"> ' + obj.TASK_NAME + '</h6>'+
                        '<input type="hidden" id="P_ID'+ obj.ID +'" value="' + obj.ID + '" />'+

                        '</div>'+
                        '</a>'
                    );
                }
                if(obj.STATUS_NO ==="قيد العمل "  && obj.URL== "Main_ctr/tasks_emp"  &&  obj.IS_READ=="2" && $('#JOBTITLE111').val()=="2" ){
                    $('#itemm').append(
                        '<a  onclick="read_updatetasks_emp1('+ obj.ID +');">'+
                        '<div id="itemm" style="    background-color: white;" class="media  align-items-center  justify-content-between read-notification">'+
                        '<div class="media-body">'+
                        '<h6 class="m-0"><span>  المهمام</span><small class="grey lighten-1 font-italic float-right">منذ' + obj.TIME + '</small></h6><smallclass="noti-text">  االمهمة قيد العمل</small>'+
                        // '<h6 class="noti-text font-small-3 m-0"> ' + obj.TASK_NAME + '</h6>'+
                        '<input type="hidden" id="P_ID'+ obj.ID +'" value="' + obj.ID + '" />'+

                        '</div>'+
                        '</a>'
                    );
                }



                if(obj.STATUS_NO ==="تم الانجاز"  && obj.URL== "Main_ctr/tasks_emp"  &&  obj.IS_READ=="1" && $('#JOBTITLE111').val()=="2"){
                    $('#itemm').append(
                        '<a  onclick="read_updatetasks_emp1('+ obj.ID +');">'+
                        '<div id="itemm" class="media notactiveqq d-flex align-items-center d-flex justify-content-between read-notification">'+
                        '<div class="media-body">'+
                        '<h6 class="m-0"><span>  المهمام</span><small class="grey lighten-1 font-italic float-right">منذ' + obj.TIME + '</small></h6><smallclass="noti-text"> تم انجاز المهمة</small>'+
                        // '<h6 class="noti-text font-small-3 m-0"> ' + obj.TASK_NAME + '</h6>'+
                        '<input type="hidden" id="P_ID'+ obj.ID +'" value="' + obj.ID + '" />'+

                        '</div>'+
                        '</a>'
                    );
                }
                if(obj.STATUS_NO ==="تم الانجاز"  && obj.URL== "Main_ctr/tasks_emp"  &&  obj.IS_READ=="2" && $('#JOBTITLE111').val()=="2"){
                    $('#itemm').append(
                        '<a  onclick="read_updatetasks_emp1('+ obj.ID +');">'+
                        '<div id="itemm" style="    background-color: white;" class="media  align-items-center  justify-content-between read-notification">'+
                        '<div class="media-body">'+
                        '<h6 class="m-0"><span>  المهمام</span><small class="grey lighten-1 font-italic float-right">منذ' + obj.TIME + '</small></h6><smallclass="noti-text">  نم انجاز المهمة</small>'+
                        // '<h6 class="noti-text font-small-3 m-0"> ' + obj.TASK_NAME + '</h6>'+
                        '<input type="hidden" id="P_ID'+ obj.ID +'" value="' + obj.ID + '" />'+

                        '</div>'+
                        '</a>'
                    );
                }




            });

        }
    }),


    setTimeout(function(){

        var rows=document.getElementById("itemm").getElementsByClassName("d-flex").length;
        document.getElementById("countnave").innerText=rows;


    }, 500);
}
function read_update(num) {

    $.ajax({
        type: 'post',
        url: base_url + "eng_ctr/read_update",
        dataType: "json",
        data: {
            CARDID: $('#user_id').val() ,
            P_ID: $("#P_ID"+num).val() ,
            P_TABLE_ID: 1 ,


        },


        success: function (data) {

            window.location=base_url+'main_ctr/emp31';

              toastr.warning('ضضضض');







        }
    });
}
function read_update1(num) {

    $.ajax({
        type: 'post',
        url: base_url + "eng_ctr/read_update",
        dataType: "json",
        data: {
            CARDID: $('#user_id').val() ,
            P_ID: $("#P_ID"+num).val() ,
            P_TABLE_ID: 1 ,


        },


        success: function (data) {

            window.location=base_url+'boss_ctr/furlough';

            toastr.warning('ضضضض');







        }
    });
}
/*********************************************************/
function read_updateemp_outim(num) {

    $.ajax({
        type: 'post',
        url: base_url + "eng_ctr/read_update",
        dataType: "json",
        data: {
            CARDID: $('#user_id').val() ,
            P_ID: $("#P_ID"+num).val() ,
            P_TABLE_ID: 2,


        },


        success: function (data) {

            window.location=base_url+'main_ctr/emp_outim';

            toastr.warning('ضضضض');







        }
    });
}
function read_updateemp_outim1(num) {

    $.ajax({
        type: 'post',
        url: base_url + "eng_ctr/read_update",
        dataType: "json",
        data: {
            CARDID: $('#user_id').val() ,
            P_ID: $("#P_ID"+num).val() ,
            P_TABLE_ID: 2 ,


        },


        success: function (data) {

            window.location=base_url+'main_ctr/emp_outtime';

            toastr.warning('ضضضض');







        }
    });
}
/*********************************************************/
function read_updatetasks_emp(num) {

    $.ajax({
        type: 'post',
        url: base_url + "eng_ctr/read_update",
        dataType: "json",
        data: {
            CARDID: $('#user_id').val() ,
            P_ID: $("#P_ID"+num).val() ,
            P_TABLE_ID: 3,


        },


        success: function (data) {

            window.location=base_url+'main_ctr/tasks_emp';

            toastr.warning('ضضضض');







        }
    });
}
function read_updatetasks_emp1(num) {

    $.ajax({
        type: 'post',
        url: base_url + "eng_ctr/read_update",
        dataType: "json",
        data: {
            CARDID: $('#user_id').val() ,
            P_ID: $("#P_ID"+num).val() ,
            P_TABLE_ID: 3,


        },


        success: function (data) {

            window.location=base_url+'main_ctr/emp51';

            toastr.warning('ضضضض');







        }
    });
}