$(document).ready(function() {
 //Updating
 $('.edit-row').on('click', function(){
  $('.modal').modal()
   $('#main-form')[0].reset() // reset the form
   const payload = $(this).data('payload')
   console.log(payload);

   $('input[name=tags]').removeAttr('required')
   $('input[name=value]').removeAttr('required')
   $('input[name=page]').removeAttr('required')

   $('input[name=tags]').val(payload.tags)
   $('input[name=value]').val(payload.value)
   $('input[name=page]').val(payload.page)
    $("#pages option[value='"+payload.order_status+"']").attr('selected', 'selected');

   $('#main-form').attr('action', base_url + 'cms/seo/update/' + payload.id)
   $('.modal').modal()
 })

 // Adding
 $('.add-btn').on('click', function() {
  $('.modal').modal()
   $('#main-form')[0].reset() // reset the form

   $('input[name=tags]').attr('required', 'required')
   $('input[name=value]').attr("required", 'required')
   $('input[name=page]').attr("required", 'required')

   $('#main-form').attr('action', base_url + 'cms/seo/add')
   
 })

 //Deleting
 $('.btn-delete').on('click', function(){

   let p = prompt("Are you sure you want to delete this? Type DELETE to continue", "");
   if (p === 'DELETE') {
     const id = $(this).data('id')
     console.log(id);

     invokeForm(base_url + 'cms/seo/delete', {id: id});
   }

 })

})