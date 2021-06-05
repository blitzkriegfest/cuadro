$(document).ready(function() {
 //Updating
 $('.edit-row').on('click', function(){
  $('.modal').modal()
   $('#main-form')[0].reset() // reset the form
   const payload = $(this).data('payload')
   console.log(payload);

   $('input[name=feature_title]').removeAttr('required')
   $('input[name=feature_description]').removeAttr('required')
   $('input[name=feature_image]').removeAttr('required')

   $('input[name=feature_title]').val(payload.feature_title)
   $('#preview').attr('src', payload.feature_image)
   $('textarea[name=feature_description]').val(payload.feature_description)

   $('#main-form').attr('action', base_url + 'cms/features/update/' + payload.id)
   $('.modal').modal()
 })

 // Adding
 $('.add-btn').on('click', function() {
  $('.modal').modal()
   $('#main-form')[0].reset() // reset the form

   $('input[name=feature_title]').attr('required', 'required')
   $('input[name=feature_description]').attr('required', 'required')

   $('#main-form').attr('action', base_url + 'cms/features/add')
   
 })

 //Deleting
 $('.btn-delete').on('click', function(){

   let p = prompt("Are you sure you want to delete this? Type DELETE to continue", "");
   if (p === 'DELETE') {
     const id = $(this).data('id')
     console.log(id);

     invokeForm(base_url + 'cms/features/delete', {id: id});
   }

 })

})

