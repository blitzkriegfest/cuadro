$(document).ready(function() {
 //Updating
 $('.edit-row').on('click', function(){
  $('.modal').modal()
   $('#main-form')[0].reset() // reset the form
   const payload = $(this).data('payload')
   var data = $(this).data('images')
   console.log(payload);

   $.each(data, function(i, item) {
       $("#ordimages").append("<a href='" + data[i].Images + "' target='_blank' ><img src='" + data[i].Images + "' class='imgs' style='width: 100px; height: auto; border-radius: 10%;'/></a>&nbsp;");
   });

   // $('input[name=name]').removeAttr('required')
   // $('input[name=email]').removeAttr('required')
   // $('input[name=number]').removeAttr('required')
   // $('textarea[name=address_1]').removeAttr('required')
   // $('textarea[name=address_2]').removeAttr('required')
   // $('input[name=city]').removeAttr('required')
   // $('input[name=state_province]').removeAttr('required')
   // $('input[name=postal_code]').removeAttr('required')
   // $('input[name=sender_name]').removeAttr('required')
   // $('input[name=sender_email]').removeAttr('required')
   // $('input[name=sender_number').removeAttr('required')
   // $('input[name=order_type]').removeAttr('required')
   // $('input[name=order_cost]').removeAttr('required')

   // $('input[name=name]').val(payload.name)
   // $('input[name=email]').val(payload.email)
   // $('input[name=number]').val(payload.number)
   // $('textarea[name=address_1]').val(payload.address_1)
   // $('textarea[name=address_2]').val(payload.address_2)
   // $('input[name=city]').val(payload.city)
   // $('input[name=state_province]').val(payload.state_province)
   // $('input[name=postal_code]').val(payload.postal_code)
   // $('input[name=sender_name]').val(payload.sender_name)
   // $('input[name=sender_email]').val(payload.sender_email)
   // $('input[name=sender_number').val(payload.sender_number)
   // $('input[name=order_type]').val(payload.order_type)
   // $('input[name=order_cost]').val(payload.order_cost)
   // $('#preview').attr('src', payload.proof_of_payment)
   // 
   $('#rname').text("Name: " + payload.name)
   $('#remail').text("Email: " + payload.email)
   $('#rnumber').text("Contact Number: " + payload.number)
   $('#raddress1').text("Address 1: " + payload.address_1)
   $('#raddress2').text("Address 2: " + payload.address_2)
   $('#rcity').text("City: " + payload.city)
   $('#rstateprovince').text("State/Province: " + payload.state_province)
   $('#rpostalcode').text("Postal Code: " + payload.postal_code)
   $('#sname').text("Sender Name: " + payload.sender_name)
   $('#semail').text("Sender Email: " + payload.sender_email)
   $('#snumber').text("Sender Number: " + payload.sender_number)
   $('#ordertype').text("Order Type: " + payload.order_type)
   $('#ordercost').text("Order Cost: " + payload.order_cost)
   $('#orderstatus').text("Order Status: " + payload.order_status)
   $('#modeofpayment').text("Mode of Payment: " + payload.mode_of_payment)
   $('#preview').attr('src', payload.proof_of_payment)
   $('#link').attr('href', payload.proof_of_payment)
   $("#orderstatuschange option[value='"+payload.page+"']").attr('selected', 'selected');

   $('#main-form').attr('action', base_url + 'cms/orders/updateStatus/' + payload.order_id)
   $('.modal').modal()
 })

 $('.modal').on('hidden.bs.modal', function (e) {
   $( ".imgs" ).remove();
   $("#main-form").html(function (i, html) {
       return html.replace(/&nbsp;/g, '');
   });
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