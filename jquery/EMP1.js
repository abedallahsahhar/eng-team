var oTable;
var var_reward_id;
let userid;
var paglength;
var lastpage;
var rowcount = 0;
var pagenum = 1;
/*******************document***************************/
$(document).ready(function(){
    emp_accept();
     get_data();
    get_DEPARTMENT();
     get_picture();
     if ($('#CARDID').val() !=''){
          $('#btn_insert_data').hide();
          $('#btn_update_data').show();
          $.ajax({
               type: 'post',
               url: base_url+"eng_ctr/getdata_cardid",
               dataType: "json",
               data: {
                    CARDID: $('#CARDID').val()
               },
               success: function (data) { //alert(data.items[0].CARDID);
               // $('#p_id').val(data.items[0].p_id);
                   $('#FIRSTNAME').val(data.items[0].FIRSTNAME);
                    $('#FATHERNAME').val(data.items[0].FATHERNAME);
                    $('#GRANDFATHERNAME').val(data.items[0].GRANDFATHERNAME);
                    $('#FAMILYNAME').val(data.items[0].FAMILYNAME);
                    $("#GENDER").select2("val",data.items[0]. GENDER);
                    $('#DOB').val(data.items[0].DOB);
                    $('#BIRTHDATE').val(data.items[0].BIRTHDATE);
                    $('#MOBILE').val(data.items[0].MOBILE);
                    $('#EMAIL').val(data.items[0].EMAIL);

                    $("#DEGREE").select2("val",data.items[0]. DEGREE);
                    $('#SPECIALIZATION').val(data.items[0].SPECIALIZATION);
                    $('#ACHIEVEMENTS').val(data.items[0].ACHIEVEMENTS);
                    $('#DATESTARTCONTRACT').val(data.items[0].DATESTARTCONTRACT);
                    $("#STATUSJOB").select2("val",data.items[0]. STATUSJOB);
                    $("#JOBTITLE").select2("val",data.items[0]. JOBTITLE);
                       $("#SECION").select2("val",data.items[0]. SECION);

                   $('#ADDRESS').val(data.items[0].ADDRESS);
                   $('#TELEPHON').val(data.items[0].TELEPHON);
                   $("#ACTIVE_STATE").select2("val",data.items[0]. ACTIVE_STATE);





               }
          });



     }

 else {
        clear_inputs();

          $('#btn_update_data').hide();
          $('#btn_insert_data').show();
}

});
/*******************empoyee***************************/
function get_data(){
    var pageNumCount;
    var lastpage;
    var g=0;
    var pagenum=1;
    $.ajax({

        type:'post',
        url:base_url+"eng_ctr/get_data/",
        dataType:"json",
        data:{p_page_no:pagenum,
            p_limit_to:10,
        },



        success:function(data){
            pageNumCount=data.p_rowscount_out;
          // alert(pageNumCount);

            //    var rows = document.getElementById("get_data").getElementsByTagName("tr").length;

            //alert(pageNumCount);
            var m=0;
            var a=0;
            var w=0;
            var v=0;

            var i=0;
            $("#get_data").html('');

            $("#check").html('');

            $("#cirpic").html('');


            var event_data = '';
            $.each(data.items, function (REC_NO, obj) {
                /*******************append**************************/

                if (i<5){
                    $('#cirpic').append(
                        '<div class="symbol symbol-circle " data-toggle="tooltip">' +
                        '<img  src="data:image/jpeg;base64,' + obj.IMAGE + '" alt="  ">' +
                        '</div>' +
                        '</div>'
                    );

                }

                else if (i===5)  {
                    $('#cirpic').append(
                        '<div class="symbol symbol-circle symbol-light-danger" data-toggle="tooltip">'+
                        '<label style="    position: absolute;    COLOR: red;    top: 12px;      margin-right: 30px;">'+"+"+'</label>'+

                        '<span class="symbol-label font-weight-bold" id="placesSHAR1" >'+
                        '</span>'+

                        '</div>'
                    );

                }
                i++;


                /*******************append************************** */


                $('#check').append(
                    '<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">'+
                    <!--begin::Card-->
                    '<div class="card card-custom gutter-b card-stretch">'+
                    <!--begin::Body-->
                    '<div class="card-body text-center pt-4">'+
                    <!--begin::Toolbar-->
                    '<div class="d-flex justify-content-end">'+
                    '</div>'+
                    <!--end::Toolbar-->
                    <!--begin::User-->
                    '<div class="mt-7">'+
                    '<div class="avatar avatar-xl">'+
                    '<img  src="data:image/jpeg;base64,'  + obj.IMAGE + '" alt="  ">'+
                    ' </div>'+
                    '<div class="symbol symbol-lg-75 symbol-circle symbol-primary">'+
                    //  '<span class="font-size-h3 symbol-label font-weight-boldest d-none">'+AP+'</span>'+
                    '</div>'+
                    '</div>'+
                    <!--end::User-->
                    <!--begin::Name-->
                    '<div class="my-2">'+
                    ' <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4">'+obj.FULLNAME +'</a>'+
                    ' </div>'+
                    <!--end::Name-->
                    <!--begin::Label-->

                    ' <a href="#" class="badge badge-pill bg-light-info mb-1 mr-2">'+obj.SECIONNAME +'</a>'+


                    '<div class="mt-9 mb-6" style="    margin-top: 20px;">'+
                    ' <a href="'+ base_url+'main_ctr/emp1?CARDID='+obj.CARDID +'" class="badge badge-info mb-1 mr-2">'+
                    '<i class="fa fa-edit">'+'</i>'+
                    ' </a>'+
                    '<a onclick="delete_data(' + obj.CARDID +')" class="badge badge-danger mb-1 mr-2">'+
                    '<i class="ft-trash">'+'</i>'+
                    '</a>'+
                    '<a  onclick="model_parm(' + obj.CARDID +')" class="badge badge-warning mb-1 mr-10">'+
                    '<i class="fa fa-eye">'+'</i>'+
                    '</a>'+
                    ' </div>'+
                    <!--end::Buttons-->
                    '</div>'+
                    <!--end::Body-->
                    '</div>'+
                    <!--end::Card-->
                    ' </div>'








                );
                m++;



                /*******************append***************************/

                /*console.log(value);*/
                event_data += '<tr>';
                event_data += '<td>'+'<img style=" border-radius: 27px;""width="42" height="42"; src="data:image/jpeg;base64,'  + obj.IMAGE + '" alt="  ">'+'    </td>';

                event_data += '<td>'+obj.CARDID+'</td>';
                //event_data += '<td>'+'<div class="card">' +obj.FULLNAME+'</div>'+'</td>' +'<br'+obj.CARDID+'</td>';
                //   event_data += '<td>'+obj.STATUSNAME+'</td>';

                event_data += '<td>'+obj.FULLNAME+'</td>';
                event_data += '<td>'+obj.SECIONNAME+'</td>';
                event_data += '<td>'+obj.JOBTITLENAME+'</td>';

                event_data += '<td>'+obj.PASSWORD+'</td>';

                if  (data.items[a].ACTIVE_STATE==2) {


                    event_data += '<td>' + '<span id="aa" class="badge badge-pill bg-light-danger mb-1 mr-2">' + obj.ACTIVE_STATENAME + '</span>' + '</td>';

                }

                else  if  (data.items[a].ACTIVE_STATE==1) {
                    event_data += '<td>' +'<span class="badge badge-pill bg-light-success mb-1 mr-2">'+obj.ACTIVE_STATENAME+'</span>'+'</td>';


                }

                a++;

                event_data += '<td>' + ' <a class="btn btn-info bg-light-info  mb-1" href="'+ base_url+'main_ctr/emp1?CARDID='+obj.CARDID +'">'+'<i class = "fa fa-edit" >'+' </i>' + '</a>' +
                    ' <button class="btn btn-danger bg-light-danger  mb-1" onclick="delete_data(' + obj.CARDID  +')">'+'<i class = "fa fa-trash" >'+' </i>' + '</button>' + '</td>';

                // alert((data.items[a].STATUS));








            });
            $("#get_data").append(event_data);

            if (pageNumCount>=10){
                $('#paging').append('<li><a href="javascript:prevpage('+1+')">' +
                    '&laquo;' +
                    'السابق' +
                    '</a></li>');
            }
            for(j=0 ;j<pageNumCount; j++){

                g++;
                if(g<=10){
                    lastpage=g;
                    $('#paging').append(

                        ' <li class="page"><a '+g+'" href="javascript:get_data1('+g+')">'+g+'</a></li>'

                    );
                }


            };
            if (pageNumCount>=10){
                $('#paging').append('<li ><a href="javascript:nextpage('+lastpage+')">' +
                    ' التالي ' +
                    ' &raquo; '  +
                    '</a></li>');
            }


        }



    })
    setTimeout(function(){
        var rows = document.getElementById("get_data").getElementsByTagName("tr").length;
        //  alert(rows)

        document.getElementById("placesSHAR").innerText = rows;

        document.getElementById("placesSHAR1").innerText = (rows-5);

    }, 500);


}
function insert_data() {
    toastr.options = {
        "positionClass": "toast-center-center",
    }
 //alert('DATEBAY');

     $.ajax({
          type: 'post',
          url: base_url + "eng_ctr/insert_data",
          dataType: "json",
          data: {
               CARDID: $('#CARDID').val() ,
               FIRSTNAME: $('#FIRSTNAME').val()  ,
               FATHERNAME: $('#FATHERNAME').val() ,
               GRANDFATHERNAME: $('#GRANDFATHERNAME').val()  ,
               FAMILYNAME: $('#FAMILYNAME').val()  ,
               GENDER: $('#GENDER').val()  ,
               BIRTHDATE: $('#BIRTHDATE').val()  ,
               MOBILE: $('#MOBILE').val()  ,
               EMAIL: $('#EMAIL').val()  ,
               STATUS: $('#STATUS').val()  ,
               NATIONALITY: $('#NATIONALITY').val()  ,
               DATESTARTCONTRACT: $('#DATESTARTCONTRACT').val()  ,
              ACTIVE_STATE: $('#ACTIVE_STATE').val()  ,

          //    STATUSJOB: $('#STATUSJOB').val()  ,
               JOBTITLE: $('#JOBTITLE').val()  ,
               SECION: $('#SECION').val()  ,
               SPECIALIZATION: $('#SPECIALIZATION').val()  ,
               DEGREE: $('#DEGREE').val()  ,
               ACHIEVEMENTS: $('#ACHIEVEMENTS').val()  ,
              TELEPHON: $('#TELEPHON').val()  ,
              ADDRESS: $('#ADDRESS').val()  ,


          },


         success: function (data) {
             if (data.p_errcod == 1) {


                 toastr.success('تم اضافة الموظف بنجاح', 'تم ');

             }

             else  if (data.p_errcod == 2) {
                 toastr.error('قمت بادخال البيانات بشكل خطا  ', 'خطأ   ');
             }
             else   {
                 toastr.warning('ضضضض');
             }






         }
     });
}
function   delete_data(p1) {
  //  alert(p1);
    toastr.options = {
        "positionClass": "toast-center-center",
    }



    Swal.fire({
        title: 'هل  تريد حدف الموظف؟',
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
                    url: base_url+"eng_ctr/delete_data",
                    dataType: "json",
                    data: {
                        CARDID: p1
                    },


                   success: function (data) {
                       if (data.P_ERRCOD == 1) {

                           toastr.success('تم حدف الموظف بنجاح', 'تم ');



                       }

                       else  if (data.P_ERRCOD == 2) {
                           toastr.error(' لم تم حدف الموظف ', 'خطا ');

                       }
                       else   {
                           toastr.warning('ضضضض');
                       }
                       get_data();






                   }

               })
          }
     });

}
function update_data() {
    toastr.options = {
        "positionClass": "toast-center-center",
    }
   //  alert('DATEBAY');

     $.ajax({
          type: 'post',
          url: base_url + "eng_ctr/update_data",
          dataType: "json",
          data: {
               CARDID: $('#CARDID').val() ,
               FIRSTNAME: $('#FIRSTNAME').val()  ,
               FATHERNAME: $('#FATHERNAME').val() ,
               GRANDFATHERNAME: $('#GRANDFATHERNAME').val()  ,
               FAMILYNAME: $('#FAMILYNAME').val()  ,
               GENDER: $('#GENDER').val()  ,
               BIRTHDATE: $('#BIRTHDATE').val()  ,
               MOBILE: $('#MOBILE').val()  ,
               EMAIL: $('#EMAIL').val()  ,
               STATUS: $('#STATUS').val()  ,
               NATIONALITY: $('#NATIONALITY').val()  ,
               DATESTARTCONTRACT: $('#DATESTARTCONTRACT').val()  ,
              ACTIVE_STATE: $('#ACTIVE_STATE').val()  ,

             // STATUSJOB: $('#STATUSJOB').val()  ,
               JOBTITLE: $('#JOBTITLE').val()  ,
               SECION: $('#SECION').val()  ,
               SPECIALIZATION: $('#SPECIALIZATION').val()  ,
               DEGREE: $('#DEGREE').val()  ,
               ACHIEVEMENTS: $('#ACHIEVEMENTS').val()  ,
              TELEPHON: $('#TELEPHON').val()  ,
              ADDRESS: $('#ADDRESS').val()  ,

          },

         success: function (data) {
             if (data.p_errcod == 1) {

                 toastr.success('تم تعديل الموظف بنجاح', 'تم ');

             }

             else  if (data.p_errcod == 2) {
                 toastr.error('قمت باخال البيانات بشكل خط', 'خطا ');

             }
             else   {
                 toastr.warning('ضضضض');
             }






         }


     });
}
/*******************empoyee data***************************/
function model_parm(puser){

    userid=puser;
    $('#modal_permission1').modal('show');

    $.ajax({
        type: 'post',
        url: base_url + "eng_ctr/getdata_cardid",
        dataType: "json",
        data: {
            CARDID: userid,
        },

        success: function (data) { //alert(data.items[0].CARDID);
            $('#q').text( data.items[0].FULLNAME);
            $('#q1').text( data.items[0].FULLNAME);
            $('#q2').text( data.items[0].FULLNAME);

            $('#aaqq').val( data.items[0].CARDID);

            $('#qq').text( data.items[0].CARDID);
            $('#qqq').text( data.items[0].MOBILE);
            $('#qqq1').text( data.items[0].SECIONNAME);

            $('#qqqq').text( data.items[0].BIRTHDATE);
            $('#qqqqq').text( data.items[0].EMAIL);
            $('#qqqqqq').text( data.items[0].DEGREENAME);
            $('#qqqqqqq').text( data.items[0].JOBTITLENAME);
            $('#getpiccard').html(  '<img  src="data:image/jpeg;base64,' + data.items[0].PICTURE + ' ">');
            emp_accept();
            emp_accept1();
            emp_allreward();
        }


    });





}
/*******************clear_input***************************/
function clear_input() {
    toastr.options = {
        "positionClass": "toast-center-center",
    }
     $('#CARDID').val('');
     $('#FIRSTNAME').val('');
     $('#FATHERNAME').val('');
     $('#GRANDFATHERNAME').val('');
     $('#FAMILYNAME').val('');

     $('#GENDER').val('').trigger('change');
     $('#BIRTHDATE').val('');
     $('#MOBILE').val('');
     $('#EMAIL').val('');

     $('#STATUS').val('').trigger('change');
     $('#NATIONALITY').val('').trigger('change');
     $('#SECION').val('').trigger('change');
     $('#SPECIALIZATION').val('').trigger('change');
     $('#DEGREE').val('').trigger('change');
     $('#ACHIEVEMENTS').val('');
     $('#DATESTARTCONTRACT').val('');
     $('#STATUSJOB').val('').trigger('change');
     $('#JOBTITLE').val('').trigger('change');
    $('#ACTIVE_STATE').val('').trigger('change');
    $('#ADDRESS').val('');
    $('#TELEPHON').val('');

    get_picture();

    toastr.warning('تم تفريغ البيانات !', 'تم ');

}
function clear_inputs() {

    $('#CARDID').val('');
    $('#FIRSTNAME').val('');
    $('#FATHERNAME').val('');
    $('#GRANDFATHERNAME').val('');
    $('#FAMILYNAME').val('');

    $('#GENDER').val('').trigger('change');
    $('#BIRTHDATE').val('');
    $('#MOBILE').val('');
    $('#EMAIL').val('');

    $('#STATUS').val('').trigger('change');
    $('#NATIONALITY').val('').trigger('change');
    $('#SECION').val('').trigger('change');
    $('#SPECIALIZATION').val('').trigger('change');
    $('#DEGREE').val('').trigger('change');
    $('#ACHIEVEMENTS').val('');
    $('#DATESTARTCONTRACT').val('');
    $('#STATUSJOB').val('').trigger('change');
    $('#JOBTITLE').val('').trigger('change');
    $('#ACTIVE_STATE').val('').trigger('change');


}
/*******************pic***************************/
function insert_picture() {
     //  alert('clickme');
    toastr.options = {
        "positionClass": "toast-center-center",
    }
     var fromData= new FormData();
     fromData.append("CARDID",$('#CARDID').val());
     fromData.append("profile_avatar",$('input[type=file]')[0].files[0]);


     $.ajax({
          type: 'post',
          url: base_url + "eng_ctr/insert_picture",
          dataType: "json",
          data: fromData,
          contentType:false,
          processData : false,


         success: function (data) {
             if (data.p_errcod == 1) {

                 toastr.success('تم اضافة الصورة  بنجاح', 'تم ');

             }

             else  if (data.p_errcod == 2) {
                 toastr.error('قمت باخال الصورة بشكل خطا', 'خطا ');

             }
             else   {
                 toastr.warning('ضضضض');
             }






         }
     });
}
function get_picture(){

     //$('#kt_image_4').css('background-image', 'url( ../../anti_drug/logo.png');

     //alert('f');
     // $('#employee_image').attr('src',root_url+'app-assets/img/unknown officer.png');

     $.ajax(
         {
              //async: false,
              type:"post",
              dataType:"'xml/html/script/json/jsonp'",
              url: base_url+'eng_ctr/get_picture',
              data:{
                   CARDID:$('#CARDID').val()
              },


              beforeSend: function(){
                   $('#iemployee_image').attr('src','ajax_loader.gif');

              },
              complete: function(data, xhr, textStatus) {
                  if(data.responseText.length>0){
                      //   alert('1')
                      $('#personomg').attr('src','data:image/jpeg;base64,' +data.responseText);
                  }
                  else{
                      //    alert('0')
                      $('#personomg').attr('src','http://10.30.70.4/app-assets/img/blank.png');


                  }
              },
              success: function(data, textStatus, xhr) {

              },
              error: function(xhr, textStatus, errorThrown) {}
         })
}
function   delete_picture() {
    toastr.options = {
        "positionClass": "toast-center-center",
    }
     //  alert($('#CARDID').val());
     Swal.fire({
          title: 'هل  تريد حذف هذا العنصر',
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
                    url: base_url+"eng_ctr/delete_picture",
                    dataType: "json",
                    data: {
                         CARDID: $('#CARDID').val()
                    },


                   success: function (data) {
                       if (data.p_errcod == 1) {

                           toastr.success('تم حدف الصورة  بنجاح', 'تم ');

                       }

                       else  if (data.p_errcod == 2) {
                           toastr.error('لم يتم حدف الصورة  ', 'خطا ');

                       }
                       else   {
                           toastr.warning('ضضضض');
                       }
                     $('#kt_image_4').css('background','border-box');





                   }

               })
          }
     });

}
/**********************************************/

function channge_password() {


    $.ajax({
        type: 'post',
        url: base_url + "eng_ctr/channge_password",
        dataType: "json",
        data: {
            CARDID: $('#CARDID').val() ,
            OLD_PASS: $('#OLD_PASS').val()  ,
            NEW_PASS: $('#NEW_PASS').val() ,
            CONF_PASS: $('#CONF_PASS').val()  ,



        },


        success: function (data) {
            if (data.p_errcod == 1) {


                toastr.success('تم تغيير كلمة المرور بنجاح', 'تم ');

            }

            else  if (data.p_errcod == 2) {
                toastr.error('قمت بادخال البيانات بشكل خطا  ', 'خطأ   ');
            }
            else  if(data.p_errcod == 3)  {
                toastr.warning('كلمة المرور القديمة غير صحيحة');
            }

            else  if(data.p_errcod == 4)  {
                toastr.warning('كلمتان المرور غير متطابقات');
            }
            else {
                toastr.warning('  غير ');

            }




        }
    });
}


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
                    if (data.p_err_code = 4) {
                        get_data_active();

                        swal({
                            title: 'تمت العملية بنجاح',
                            text: 'تم حدف واحد عنصر',
                            type: 'success',
                            timer: 1000
                        })
                        get_data_active();

                    } else {
                        swal({
                            title: '  خطا',
                            text: ' لم يتم  حدف اي عنصر ',
                            type: 'error',
                            timer: 1000

                        })
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
                    get_data_active();

                    if (data.p_err_code = 4) {

                        swal({
                            title: 'تمت العملية بنجاح',
                            text: 'تم حدف واحد عنصر',
                            type: 'success',
                            timer: 1000
                        })


                        get_data_active();


                    } else {
                        swal({
                            title: '  خطا',
                            text: ' لم يتم  حدف اي عنصر ',
                            type: 'error',
                            timer: 1000

                        })
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


function get_DEPARTMEN1T(){
    //  alert('kkk');
    //alert($('#MANG_NO').val());
    //  alert( $('#MANG_NO').val());
    $.ajax({
        async:false,
        type: 'post',
        url: base_url+"eng_ctr/get_DEPARTMENT",
        dataType: "json",


        success: function (data) {

            $('#SECION').html('');
            $('#SECION').append('<option value=""></option>');
            $.each(data.items, function(REC_NO, obj){
                $('#SECION').append('<option value="' + obj.ID + '">' +obj.NAME + '</option>');
            });

        }
    })
}
function get_DEPARTMENT(){
    //  alert('ssaa');

    $.ajax({
        type: 'post',
        url: base_url+"eng_ctr/get_DEPARTMENT",
        dataType: "json",




        success: function (data) {


            $('#SECION').html('');

            $('#SECION').append('<option value=""></option>');


            $.each(data.items, function(REC_NO, obj)
            {
                $('#SECION').append('<option value="' + obj.ID + '">' +obj.NAME + '</option>');
            });

        }
    })
}
/************************بقنيشن**********************/
function prevpage(p){
    var qqq=p-Number(1) ;
    // alert(p);
    if (p>1){
        statu=1;
        var lastpage2;
        // alert(lastpage);
        $('#paging').html('');

        $('#paging').append('<li><a href="javascript:prevpage('+qqq+')">' +
            '&laquo;' +
            'السابق' +
            '</a></li>');
        var g=p-Number(2) ;
        // alert(g);
        if(lastpage2!=null){

            lastpage=lastpage2;
        }
        for(var i=p-Number(1) ;i<p+Number(9); i++){
            g++;
            lastpage2=g;
            $('#paging').append(

                ' <li class="page"><a '+g+'" href="javascript:get_data1('+g+')">'+g+'</a></li>'

            );


        }


        $('#paging').append('<li><a href="javascript:nextpage('+lastpage2+')">' +
            ' التالي ' +
            ' &raquo; '  +
            '</a></li>');
    }
}
function nextpage(p){
    // alert(p);
    statu=1;
    var lastpage2;
    var aaa=p-Number(8);
    //alert(lastpage);
    $('#paging').html('');
    $('#paging').append('<li ><a href="javascript:prevpage('+aaa+')">' +
        '&laquo;' +
        'السابق' +

        '</a></li>');
    var g=p-Number(9) ;
    //alert(g);
    if(lastpage2!=null){

        lastpage=lastpage2;
    }
    for(var i=p-Number(8) ;i<p+Number(2); i++){
        g++;
        lastpage2=g;
        $('#paging').append(

            ' <li class="page"> <a '+g+'" href="javascript:get_data1('+g+')">'+g+'</a></li>'

        );


    }


    $('#paging').append('<li class="page"><a href="javascript:nextpage('+lastpage2+')"> ' +
        ' التالي ' +
        ' &raquo; '  +
        ' </a></li>');
}
function get_data1(P){

    var pagenum=1;

    $.ajax({

        type:'post',
        url:base_url+"eng_ctr/get_data1/",
        dataType:"json",
        data:{p_page_no:P,
            p_limit_to:10,
        },


        success:function(data){
            pageNumCount=data.p_rowscount_out;
          // alert(pageNumCount);
            var event_data = '';
            var m=0;
            var a=0;
            var w=0;
            var v=0;

            var i=0;
            $("#get_data").html('');

            $("#check").html('');

            $("#cirpic").html('');


            var event_data = '';
            $.each(data.items, function (REC_NO, obj) {
                /*******************append**************************/

                if (i<5){
                    $('#cirpic').append(
                        '<div class="symbol symbol-circle " data-toggle="tooltip">' +
                        '<img  src="data:image/jpeg;base64,' + obj.IMAGE + '" alt="  ">' +
                        '</div>' +
                        '</div>'
                    );

                }

                else if (i===5)  {
                    $('#cirpic').append(
                        '<div class="symbol symbol-circle symbol-light-danger" data-toggle="tooltip">'+
                        '<label style="    position: absolute;     COLOR: red;    top: 12px;     margin-right: 30px;">'+"+"+'</label>'+

                        '<span class="symbol-label font-weight-bold" id="placesSHAR1" >'+
                        '</span>'+

                        '</div>'
                    );

                }
                i++;


                /*******************append************************** */


                $('#check').append(
                    '<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">'+
                    <!--begin::Card-->
                    '<div class="card card-custom gutter-b card-stretch">'+
                    <!--begin::Body-->
                    '<div class="card-body text-center pt-4">'+
                    <!--begin::Toolbar-->
                    '<div class="d-flex justify-content-end">'+
                    '</div>'+
                    <!--end::Toolbar-->
                    <!--begin::User-->
                    '<div class="mt-7">'+
                    '<div class="avatar avatar-xl">'+
                    '<img  src="data:image/jpeg;base64,'  + obj.IMAGE + '" alt="  ">'+
                    ' </div>'+
                    '<div class="symbol symbol-lg-75 symbol-circle symbol-primary">'+
                    //  '<span class="font-size-h3 symbol-label font-weight-boldest d-none">'+AP+'</span>'+
                    '</div>'+
                    '</div>'+
                    <!--end::User-->
                    <!--begin::Name-->
                    '<div class="my-2">'+
                    ' <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4">'+obj.FULLNAME +'</a>'+
                    ' </div>'+
                    <!--end::Name-->
                    <!--begin::Label-->

                    ' <a href="#" class="badge badge-pill bg-light-info mb-1 mr-2">'+obj.SECIONNAME +'</a>'+


                    '<div class="mt-9 mb-6" style="    margin-top: 20px;">'+
                    ' <a href="'+ base_url+'main_ctr/emp1?CARDID='+obj.CARDID +'" class="badge badge-info mb-1 mr-2">'+
                    '<i class="fa fa-edit">'+'</i>'+
                    ' </a>'+
                    '<a onclick="delete_data(' + obj.CARDID +')" class="badge badge-danger mb-1 mr-2">'+
                    '<i class="ft-trash">'+'</i>'+
                    '</a>'+
                    '<a  onclick="model_parm(' + obj.CARDID +')" class="badge badge-warning mb-1 mr-10">'+
                    '<i class="fa fa-eye">'+'</i>'+
                    '</a>'+
                    ' </div>'+
                    <!--end::Buttons-->
                    '</div>'+
                    <!--end::Body-->
                    '</div>'+
                    <!--end::Card-->
                    ' </div>'








                );
                m++;



                /*******************append***************************/

                /*console.log(value);*/
                event_data += '<tr>';
                event_data += '<td>'+'<img style=" border-radius: 27px;""width="42" height="42"; src="data:image/jpeg;base64,'  + obj.IMAGE + '" alt="  ">'+'    </td>';

                event_data += '<td>'+obj.CARDID+'</td>';
                //event_data += '<td>'+'<div class="card">' +obj.FULLNAME+'</div>'+'</td>' +'<br'+obj.CARDID+'</td>';
                //   event_data += '<td>'+obj.STATUSNAME+'</td>';

                event_data += '<td>'+obj.FULLNAME+'</td>';
                event_data += '<td>'+obj.SECIONNAME+'</td>';
                event_data += '<td>'+obj.PASSWORD+'</td>';

                if  (data.items[a].ACTIVE_STATE==2) {


                    event_data += '<td>' + '<span id="aa" class="badge badge-pill bg-light-danger mb-1 mr-2">' + obj.ACTIVE_STATENAME + '</span>' + '</td>';

                }

                else  if  (data.items[a].ACTIVE_STATE==1) {
                    event_data += '<td>' +'<span class="badge badge-pill bg-light-success mb-1 mr-2">'+obj.ACTIVE_STATENAME+'</span>'+'</td>';


                }

                a++;

                event_data += '<td>' + ' <a class="btn btn-info bg-light-info  mb-1" href="'+ base_url+'main_ctr/emp1?CARDID='+obj.CARDID +'">'+'<i class = "fa fa-edit" >'+' </i>' + '</a>' +
                    ' <button class="btn btn-danger bg-light-danger  mb-1" onclick="delete_data(' + obj.CARDID  +')">'+'<i class = "fa fa-trash" >'+' </i>' + '</button>' + '</td>';

                // alert((data.items[a].STATUS));








            });
            $("#get_data").append(event_data);

        }



    })



}


/**********************************************/

function emp_accept() {

    $.ajax({
        type: 'post',
        url: base_url + "Eng_ctr/emp_accept",
        dataType: "json",
        data: {
            CARDID: $('#aaqq').val() ,
        },
        success: function(data) {




            $('#count2').text(data.P_OUT);

        }
    })
}
function emp_accept1() {

    $.ajax({
        type: 'post',
        url: base_url + "Eng_ctr/emp_accept1",
        dataType: "json",
        data: {
            CARDID: $('#aaqq').val() ,
        },
        success: function(data) {




            $('#count21').text(data.P_OUT);

        }
    })
}
function emp_allreward() {

    $.ajax({
        type: 'post',
        url: base_url + "Eng_ctr/emp_allreward",
        dataType: "json",
        data: {
            CARDID: $('#aaqq').val() ,
        },
        success: function(data) {




            $('#emp_allreward').text(data.P_OUT);

        }
    })
}


