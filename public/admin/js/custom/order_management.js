$(document).ready(function() {
 //Updating
 $('.edit-row').on('click', function(){
  $('.modal').modal()
   $('#main-form')[0].reset() // reset the form
   const payload = $(this).data('payload')
   console.log(payload);

   $('input[name=name]').removeAttr('required')
   $('input[name=email]').removeAttr('required')
   $('input[name=number]').removeAttr('required')
   $('textarea[name=address_1]').removeAttr('required')
   $('textarea[name=address_2]').removeAttr('required')
   $('input[name=city]').removeAttr('required')
   $('input[name=state_province]').removeAttr('required')
   $('input[name=postal_code]').removeAttr('required')
   $('input[name=sender_name]').removeAttr('required')
   $('input[name=sender_email]').removeAttr('required')
   $('input[name=sender_number').removeAttr('required')
   $('input[name=order_type]').removeAttr('required')
   $('input[name=order_cost]').removeAttr('required')

   $('input[name=name]').val(payload.name)
   $('input[name=email]').val(payload.email)
   $('input[name=number]').val(payload.number)
   $('textarea[name=address_1]').val(payload.address_1)
   $('textarea[name=address_2]').val(payload.address_2)
   $('input[name=city]').val(payload.city)
   $('input[name=state_province]').val(payload.state_province)
   $('input[name=postal_code]').val(payload.postal_code)
   $('input[name=sender_name]').val(payload.sender_name)
   $('input[name=sender_email]').val(payload.sender_email)
   $('input[name=sender_number').val(payload.sender_number)
   $('input[name=order_type]').val(payload.order_type)
   $('input[name=order_cost]').val(payload.order_cost)

   $('#main-form').attr('action', base_url + 'cms/orders/update/' + payload.order_id)
   $('.modal').modal()
 })

 // Adding
 $('.add-btn').on('click', function() {
  $('.modal').modal()
   $('#main-form')[0].reset() // reset the form
   $('#main-form').attr('action', base_url + 'cms/orders/add')
 })


 //Deleting
 $('.btn-delete').on('click', function(){

   let p = prompt("Are you sure you want to delete this? Type DELETE to continue", "");
   if (p === 'DELETE') {
     const id = $(this).data('id')
     console.log(id);

     invokeForm(base_url + 'cms/orders/delete/', {id: id});
   }

 })

})