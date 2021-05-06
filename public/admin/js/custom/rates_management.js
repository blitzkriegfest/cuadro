$(document).ready(function() {
 //Updating
 const payload = $('#upd').data('payload')
 console.log(payload);
 $('#rates').attr('action', base_url + 'cms/rates/update/' + payload.id);

 $()
});