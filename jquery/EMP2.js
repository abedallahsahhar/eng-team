var rowcount = 0;
var pagenum = 1;
let temArray = [];
let loadFile = [];
let downloadFile = [];
let downloadFile2= [];

$(document).ready(function(){
     get_file();
     $('#drop').dropzone({
          url: "/", // Set the url for your upload script location
          paramName: "file", // The name that will be used to transfer the file
          maxFiles: 1,
          maxFilesize: 10, // MB
          addRemoveLinks: true,
          acceptedFiles: "image/*,application/pdf",
        //  acceptedFiles: "image/*,application/pdf,.psd,.mp4,.mkv,.txt,.doc",

          accept: function (file, done) {
               //  console.log(file);
               let loadObject = {
                    "file": file,
                    "filename": file.name
               };
               loadFile.push(loadObject);

               console.log(loadFile);
          },
          removedfile: function (file) {
               toastr.success('تم ازالة الصورة  بنجاح', 'تم ');
               file.previewElement.remove();
               loadFile = loadFile.filter((elem) => elem.filename !== file.name);
               console.log(loadFile);



          },


     });
});
function btn_picture() {

     insrtStat = 0;
     for (var x = 0; x < loadFile.length; x++) {
          var formData = new FormData();


          var filnm = loadFile[x].file.name;

          var findStr = ".";


          var endOf = -1;
          endOf = filnm.lastIndexOf(findStr) > 0 ? filnm.lastIndexOf(findStr) + findStr.length : endOf;

          var getFileext = filnm.substr(endOf)

          formData.append("DROPWORD", $('#DROPWORD').val());

          formData.append("file", loadFile[x].file);
          formData.append("FILE_SIZE", loadFile[x].file.size);
          formData.append("NAME_FILE", loadFile[x].file.name);

          formData.append("FILE_EXT", getFileext);
          fileTempname = loadFile[x].filename;
          $.ajax({
               type: 'post',
               url: base_url + "eng_ctr/insert_file",
               dataType: "json",
               data: formData,
               contentType: false,
               processData: false,

               success: function (data) {
                    if (data.p_errcod == 1) {

                         toastr.success('تم اضافة الصورة  بنجاح', 'تم ');
                         $('#DROPWORD').val('');

                    } else if (data.p_errcod == 2) {
                         toastr.error('قمت باخال الصورة بشكل خطا', 'خطا ');

                    } else {
                         toastr.warning('ضضضض');
                    }


                    temArray = loadFile.filter((elem) => elem.filename !==
                        fileTempname);


               }

          })
          loadFile[x].file.previewElement.remove();

     }

     if(loadFile.length==0){


          if($('#DROPWORD').val()!=''){
               $.ajax({
                    type: 'post',
                    url: base_url + "eng_ctr/insert_TWET",
                    dataType: "json",

                    data: {
                         DROPWORD: $('#DROPWORD').val() },

                    success: function (data) {
                         if (data.p_errcod == 1) {

                              toastr.success('تم اضافة الصورة  بنجاح', 'تم ');


                         } else if (data.p_errcod == 2) {
                              toastr.error('قمت باخال الصورة بشكل خطا', 'خطا ');

                         } else {
                              toastr.warning('ضضضض');
                         }
                    }


                    })
     }
     //console.log(loadFile);



}

}
/***************************  النهاية  DROPZONE اضافة زر    **********************************/
function downloadAllfile() {

     for (var x = 0; x < downloadFile.length; x++) {

          if (downloadFile[x].isload == 0) {
               download("data:image/jpeg;base64," + downloadFile[x].file, downloadFile[x].id + ".jpeg", "image/jpeg");
               downloadFile[x].isload = 1;
               // return isload=1;
          }


     }



}
function get_file1() {

     $.ajax({
          async:false,
          type: 'post',
          url: base_url + "eng_ctr/get_file",
          dataType: "json",
          data: {
               p_id: 26,

          },

          success: function (data) {

               if(data.p_IMAGE.length>0){


                    $.each(data.p_IMAGE, function (index, object) {
                         if(  rowcount==0)

                         {rowcount= data.ROWSCOUNT_OUT;}
                         let loadObject = {"file":object ,"isload":0,'id':object.ID};
                         downloadFile.push(loadObject);

                         console.log(downloadFile);

                         if(data.p_IMAGE.PICTURE_BA64= "//8="){

                              $('#lightgallery').append(

                                  '<ul class="timeline timeline-left" style="    margin-right: 654px;margin-bottom: 29px;">'+
                                  '<li class="timeline-group">'+
                                  '<h5><span class="badge badge-primary cursor-default">'+object.DATE_D +'</span></h5>'+
                                  '</li>'+
                                  ' </ul>'+

                                  '  <li class="timeline-line"></li>'+
                                  '<li class="timeline-item"     data-src="data:image/jpeg;base64,' + object.PICTURE_BA64 + '" data-sub-html="<h4>Fading Light</h4><p>Classic '+'view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">'+

                                  '<div class="timeline-badge">'+
                                  ' <span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="مجريات الشركة">'+
                                  '    <i class="ft-award primary"></i>'+
                                  '   </span>'+
                                  '</div>'+
                                  ' <div class="timeline-card card shadow-z-1" style="    border: 8px solid #9ad289 !important;">'+
                                  ' <div class="card-header">'+
                                  '<a >'+

                                  ' <img  style="    height: 79%;" class="img-fluid img-responsive"   src="data:image/jpeg;base64,'  + object.PICTURE_BA64 + '">'+


                                  '<br>'+
                                  '<br>'+
                                  '<br>'+

                                  '<hr class="mt-0 mb-2">'+

                                  '<p class="m-0">'+object.DROPWORD +'</p>'+
                                  '<hr class=" mb-2">'+

                                  '</a>'+

                                  '</div>'+

                                  ' </div>'+
                                  ' </li>'+

                                  '<li class="timeline-item">'+
                                  ' <div class="timeline-badge">'+
                                  ' <span class="avatar" data-toggle="tooltip" data-placement="left" title="Eu pid nunc urna integer">'+
                                  '<img src="http://127.0.0.1/team_prog/app-assets/progect pic/checkTASKS.png"class="avatar" alt="avatar" width="40">'+
                                  '  </span>'+
                                  ' </div> '+
                                  ' </li>'+

                                  ' <button onclick="delete_file(' + object.ID + ')" class="btn btn-danger bg-light-danger" >' +
                                  ' <i class="ft-trash"></i>' +

                                  '</button>'

                              )
                         }



                    })





                    if(pagenum*5>=rowcount){
                         $('#more').hide();
                    }


                    pagenum++;






               }
               if(data.p_DROPWORD.length>0){


                    $.each(data.p_DROPWORD, function (index, object) {
                         if(  rowcount==0)

                         {rowcount= data.ROWSCOUNT_OUT;}
                         let loadObject = {"file":object ,"isload":0,'id':object.ID};
                         downloadFile.push(loadObject);

                         console.log(downloadFile);

                         if(data.p_DROPWORD.FILE_EXT= "aa"){

                              $('#lightgallery').append(

                                  '<ul class="timeline timeline-left" style="    margin-right: 654px;margin-bottom: 29px;">'+
                                  '<li class="timeline-group">'+
                                  '<h5><span class="badge badge-primary cursor-default">'+object.DATE_D +'</span></h5>'+
                                  '</li>'+
                                  ' </ul>'+

                                  '  <li class="timeline-line"></li>'+
                                  '<li class="timeline-item"     data-src="data:image/jpeg;base64,' + object.PICTURE_BA64 + '" data-sub-html="<h4>Fading Light</h4><p>Classic '+'view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">'+

                                  '<div class="timeline-badge">'+
                                  ' <span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="مجريات الشركة">'+
                                  '    <i class="ft-award primary"></i>'+
                                  '   </span>'+
                                  '</div>'+
                                  ' <div class="timeline-card card shadow-z-1">'+
                                  ' <div class="card-header">'+
                                  '<a >'+

                                  // ' <img  style="    height: 79%;" class="img-fluid img-responsive"   src="data:image/jpeg;base64,'  + object.PICTURE_BA64 + '">'+
                                  // '<br>'+
                                  // '<br>'+
                                  // '<br>'+

                                  '<hr class="mt-0 mb-2">'+

                                  '<p class="m-0">'+object.DROPWORD +'</p>'+
                                  '<hr class=" mb-2">'+

                                  '</a>'+

                                  '</div>'+

                                  ' </div>'+
                                  ' </li>'+

                                  '<li class="timeline-item">'+
                                  ' <div class="timeline-badge">'+
                                  ' <span class="avatar" data-toggle="tooltip" data-placement="left" title="Eu pid nunc urna integer">'+
                                  '<img src="http://127.0.0.1/team_prog/app-assets/progect pic/checkTASKS.png"class="avatar" alt="avatar" width="40">'+
                                  '  </span>'+
                                  ' </div> '+
                                  ' </li>'+

                                  ' <button onclick="delete_file(' + object.ID + ')" class="btn btn-danger bg-light-danger" >' +
                                  ' <i class="ft-trash"></i>' +

                                  '</button>'

                              )
                         }

                    })


                    if(pagenum*5>=rowcount){
                         $('#more').hide();
                    }


                    pagenum++;






               }

               if(data.P_VEDIO.length>0){
                    $.each(data.P_VEDIO, function (index, object) {

                         if(pagenum==1){ $('#viewvideo').html('')}

                         $('#viewvideo').append(

                             '<li class="col-xs-6 col-sm-4 col-md-2"    ">'+

                             ' <video width="200px" height="240" controls>'+
                             '<source src="data:image/jpeg;base64,' + object.PICTURE_BA64 + '" type="video/mp4">'+
                             ' Your browser does not support the video tag.'+
                             '</video>'+

                             '<a href="data:application/pdf;base64,'  + object.PICTURE_BA64 + '" download="'+object.NAME_FILE+'">'+object.NAME_FILE+
                             '</a>'+


                             // ' <a onclick="deleteimage(' + object.ID + ')" class="btn btn-icon btn-circle btn-light-danger mr-2" style="    margin-left: 80px !important;            ">' +
                             // ' <i class="flaticon-delete"></i>' +
                             // '</a>' +


                             '</li>'


                         )


                    })


                    // if(pagenum*5>=rowcount){
                    //      $('#more').hide();
                    // }








               }


               if(data.P_RESULT_OUT.length>0){
                    $.each(data.P_RESULT_OUT, function (index, object) {

                         if(pdf==1){ $('#viewvideo').html('')}
                         $('#pdf').append(

                             '<li class="col-xs-6 col-sm-4 col-md-2"    style=" margin-left: 15px;">'+
                             '<object'+
                             'type="application/pdf"'+
                             'width="100%"'+
                             'height="100%">'+
                             '  <embed type="application/pdf" width="200px"   height="100px"     src="data:application/pdf;base64,' + object.PICTURE_BA64 + '" />'+

                             '<a href="data:application/pdf;base64,' + object.PICTURE_BA64 + '">Download the PDF</a>'+


                             '</embed>'+
                             '</object>'+
                             '</li>'





                         )


                    })


                    if(pagenum*5>=rowcount){
                         $('#more').hide();
                    }








               }

          }




     });
}
function get_file() {

     $.ajax({
          async:false,
          type: 'post',
          url: base_url + "eng_ctr/get_file",
          dataType: "json",
          data: {

               PAGE_NO: pagenum,

          },

          success: function (data) {

               if(data.p_IMAGE.length>0){


                    $.each(data.p_IMAGE, function (index, object) {
                         if(  rowcount==0)

                         {rowcount= data.ROWSCOUNT_OUT;}
                         let loadObject = {"file":object ,"isload":0,'id':object.ID};
                         downloadFile.push(loadObject);

                         console.log(downloadFile);

                         if(data.p_IMAGE.PICTURE_BA64= "//8="){

                         $('#lightgallery').append(

                            '<ul class="timeline timeline-left" style="    margin-right: 654px;margin-bottom: 29px;">'+
                                 '<li class="timeline-group">'+
                                       '<h5><span class="badge badge-primary cursor-default">'+object.DATE_D +'</span></h5>'+
                                  '</li>'+
                            ' </ul>'+

                             '  <li class="timeline-line"></li>'+
                              '<li class="timeline-item"     data-src="data:image/jpeg;base64,' + object.PICTURE_BA64 + '" data-sub-html="<h4>Fading Light</h4><p>Classic '+'view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">'+

                             '<div class="timeline-badge">'+
                         ' <span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="مجريات الشركة">'+
                         '    <i class="ft-award primary"></i>'+
                         '   </span>'+
                         '</div>'+
                         ' <div class="timeline-card card shadow-z-1" style="        border: 4px solid #aff3a0  !important; !important;">'+
                         ' <div class="card-header">'+
                            '<a >'+

                             ' <img  style="    height: 79%;" class="img-fluid img-responsive"   src="data:image/jpeg;base64,'  + object.PICTURE_BA64 + '">'+


                     '<br>'+
                             '<br>'+
                             '<br>'+

                         '<hr class="mt-0 mb-2">'+

                             '<p class="m-0">'+object.DROPWORD +'</p>'+
                             '<hr class=" mb-2">'+

                             '</a>'+

                         '</div>'+

                         ' </div>'+
                         ' </li>'+

                         '<li class="timeline-item">'+
                         ' <div class="timeline-badge">'+
                         ' <span class="avatar" data-toggle="tooltip" data-placement="right" title="مجريات الشركة">'+
                    '<img src="http://127.0.0.1/team_prog/app-assets/progect pic/checkTASKS.png"class="avatar" alt="avatar" width="40">'+
                         '  </span>'+
                         ' </div> '+
                         ' </li>'+

                           ' <button onclick="delete_file(' + object.ID + ')" class="btn btn-danger bg-light-danger" >' +
                           ' <i class="ft-trash"></i>' +

                          '</button>'

                         )
                         }



                    })





                    if(pagenum*5>=rowcount){
                         $('#more').hide();
                    }


                    pagenum++;






               }
               if(data.p_DROPWORD.length>0){


                    $.each(data.p_DROPWORD, function (index, object) {
                         if(  rowcount==0)

                         {rowcount= data.ROWSCOUNT_OUT;}
                         let loadObject = {"file":object ,"isload":0,'id':object.ID};
                         downloadFile.push(loadObject);

                         console.log(downloadFile);

                         if(data.p_DROPWORD.FILE_EXT= "aa"){

                              $('#lightgallery').append(

                                  '<ul class="timeline timeline-left" style="    margin-right: 654px;margin-bottom: 29px;">'+
                                  '<li class="timeline-group">'+
                                  '<h5><span class="badge badge-primary cursor-default">'+object.DATE_D +'</span></h5>'+
                                  '</li>'+
                                  ' </ul>'+

                                  '  <li class="timeline-line"></li>'+
                                  '<li class="timeline-item"     data-src="data:image/jpeg;base64,' + object.PICTURE_BA64 + '" data-sub-html="<h4>Fading Light</h4><p>Classic '+'view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">'+

                                  '<div class="timeline-badge">'+
                                  ' <span class="bg-primary bg-lighten-4" data-toggle="tooltip" data-placement="right" title="مجريات الشركة">'+
                                  '    <i class="ft-award primary"></i>'+
                                  '   </span>'+
                                  '</div>'+
                                  ' <div class="timeline-card card shadow-z-1" style="    border: 4px solid #aff3a0  !important;">'+
                                  ' <div class="card-header">'+
                                  '<a >'+

                                // ' <img  style="    height: 79%;" class="img-fluid img-responsive"   src="data:image/jpeg;base64,'  + object.PICTURE_BA64 + '">'+
                                //   '<br>'+
                                //   '<br>'+
                                  '<br>'+

                                  '<hr class="mt-0 mb-2">'+

                                  '<p class="m-0">'+object.DROPWORD +'</p>'+
                                  '<hr class=" mb-2">'+

                                  '</a>'+

                                  '</div>'+

                                  ' </div>'+
                                  ' </li>'+

                                  '<li class="timeline-item">'+
                                  ' <div class="timeline-badge">'+
                                  ' <span class="avatar" data-toggle="tooltip" data-placement="right" title="مجريات الشركة">'+
                                  '<img src="http://127.0.0.1/team_prog/app-assets/progect pic/checkTASKS.png"class="avatar" alt="avatar" width="40">'+
                                  '  </span>'+
                                  ' </div> '+
                                  ' </li>'+

                                  ' <button onclick="delete_file(' + object.ID + ')" class="btn btn-danger bg-light-danger" >' +
                                  ' <i class="ft-trash"></i>' +

                                  '</button>'

                              )
                         }

                    })


                    if(pagenum*5>=rowcount){
                         $('#more').hide();
                    }


                    pagenum++;






               }

               if(data.P_VEDIO.length>0){
                    $.each(data.P_VEDIO, function (index, object) {

                         if(pagenum==1){ $('#viewvideo').html('')}

                         $('#viewvideo').append(

                             '<li class="col-xs-6 col-sm-4 col-md-2"    ">'+

                             ' <video width="200px" height="240" controls>'+
                             '<source src="data:image/jpeg;base64,' + object.PICTURE_BA64 + '" type="video/mp4">'+
                             ' Your browser does not support the video tag.'+
                             '</video>'+

                             '<a href="data:application/pdf;base64,'  + object.PICTURE_BA64 + '" download="'+object.NAME_FILE+'">'+object.NAME_FILE+
                             '</a>'+


                             // ' <a onclick="deleteimage(' + object.ID + ')" class="btn btn-icon btn-circle btn-light-danger mr-2" style="    margin-left: 80px !important;            ">' +
                             // ' <i class="flaticon-delete"></i>' +
                             // '</a>' +


                             '</li>'


                         )


                    })


                    // if(pagenum*5>=rowcount){
                    //      $('#more').hide();
                    // }








               }


               if(data.P_RESULT_OUT.length>0){
                    $.each(data.P_RESULT_OUT, function (index, object) {

                         if(pdf==1){ $('#viewvideo').html('')}
                         $('#pdf').append(

                             '<li class="col-xs-6 col-sm-4 col-md-2"    style=" margin-left: 15px;">'+
                             '<object'+
                             'type="application/pdf"'+
                             'width="100%"'+
                             'height="100%">'+
                             '  <embed type="application/pdf" width="200px"   height="100px"     src="data:application/pdf;base64,' + object.PICTURE_BA64 + '" />'+

                             '<a href="data:application/pdf;base64,' + object.PICTURE_BA64 + '">Download the PDF</a>'+


                             '</embed>'+
                             '</object>'+
                             '</li>'





                         )


                    })


                    if(pagenum*5>=rowcount){
                         $('#more').hide();
                    }








               }

          }
     });
}
/************************************************************ */
function delete_file(p1) {
    // $('#lightgallery').css('display','none');


     Swal.fire({
          title: 'هل  تريد حذف هذا الصورة؟',
          icon: 'question',
          iconHtml: '؟',
          confirmButtonText: 'نعم',
          cancelButtonText: 'لا',
          showCancelButton: true,
          showCloseButton: true
     }).then((result) => {
          if (result.isConfirmed) {
               $.ajax({
                    type: 'post',
                    url: base_url + "eng_ctr/delete_file",
                    dataType: "json",
                    data: {
                         p_id: p1


                    },


                    success: function (data) {
                         if (data.p_errcod == 1) {

                              toastr.success('تم حدف الصورة  بنجاح', 'تم ');
                              location.reload();

                         }
                         else  if (data.p_errcod == 2) {
                              toastr.error('لم يتم حدف الصورة  ', 'خطا ');

                         }
                         else   {
                              toastr.warning('ضضضض');
                         }





                    }

               })
          }
     });
}