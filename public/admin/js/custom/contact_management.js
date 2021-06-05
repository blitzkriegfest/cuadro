$(document).ready(function() {
 //Updating
 $('.edit-row').on('click', function(){
  $('.modal').modal()
   $('#main-form')[0].reset() // reset the form
   const payload = $(this).data('payload')
   console.log(payload);

   $('input[name=contact_name]').removeAttr('required')
   $('input[name=contact_address]').removeAttr('required')
   $('input[name=contact_number]').removeAttr('required')

   $('input[name=contact_name]').val(payload.contact_name)
   $('input[name=contact_number]').val(payload.contact_number)
   $('textarea[name=contact_address]').val($(this).data('content'))

   // $('select[name=user_type] option').each(function() {
   //   $(this).removeAttr('selected')
   // });
   // $('select[name=user_type] option').filter(function () { return $(this).html() == payload.user_type; }).attr('selected', 'selected')

   $('#main-form').attr('action', base_url + 'cms/contact/update/' + payload.id)
   $('.modal').modal()
 })

 // Adding
 $('.add-btn').on('click', function() {
  $('.modal').modal()
   $('#main-form')[0].reset() // reset the form

   $('input[name=contact_name]').attr('required', 'required')
   $('input[name=contact_number]').attr("required", 'required')
   $('input[name=contact_address]').attr("required", 'required')

   $('#main-form').attr('action', base_url + 'cms/contact/add')
   
 })

 //Deleting
 $('.btn-delete').on('click', function(){

   let p = prompt("Are you sure you want to delete this? Type DELETE to continue", "");
   if (p === 'DELETE') {
     const id = $(this).data('id')
     console.log(id);

     invokeForm(base_url + 'cms/contact/delete', {id: id});
   }

 })

})