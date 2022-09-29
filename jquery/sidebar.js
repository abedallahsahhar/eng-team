
$(function(){
	enable_disap_sidebar();
})	
	
//--------------------------------------
	function enable_disap_sidebar(){
    $.ajax({
        dataType:'json',
		
       url:base_url+"sidebar_ctr/call_get_privilage_model",
       //data:"view="+'cars' 
       success:function(data){
           $.each(data.list_priv,function(index,obj){
               var getpart=obj.PART_NO;
           //    alert(getpart);
               $('#side'+getpart).css('display','block')
           })
       }
   })
    
}

