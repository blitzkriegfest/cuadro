$(document).ready(function() {
 //Updating
 const payload = $('#upd').data('payload')
 console.log(payload);
 $('#rates').attr('action', base_url + 'cms/rates/update/' + payload.id);

 // $('#af').on('keyup', function(){
 // 	$('#af2').val( $(this).val() ); 
 // });
 // $('#bf').on('keyup', function(){
 // 	$('#bf2').val( $(this).val() ); 
 // });
});