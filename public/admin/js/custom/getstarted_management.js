$(document).ready(function(){
	$('#ordetails input[type=text]').on('keyup', function(){
		var address1 = $('#ss-recipient-address-1').val();
		var address2 = $('#ss-recipient-address-2').val();

		$('#fs-name').text( $('#ss-sender-name').val() );
		$('#fs-email').text( $('#ss-sender-email').val() );
		$('#fs-contact').text( $('#ss-sender-number').val() );

		$('#fs-rname').text( $('#ss-recipient-name').val() );
		$('#fs-remail').text( $('#ss-recipient-email').val() );
		$('#fs-raddress').text( address1 + ", " + address2);
		$('#fs-rcity').text( $('#ss-recipient-city').val() );
		$('#fs-rcontact').text( $('#ss-recipient-number').val() );
	});
});