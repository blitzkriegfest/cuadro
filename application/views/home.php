<!DOCTYPE html>
<html>
<head>
	<title>Cuadro</title>
</head>
<body>

<!-- <input type="filepicker" data-fp-apikey="AfLddltxlRFyI7PzHfgR4z" /> -->

<button class="facebookUpload">Upload your Photos for Facebook</button>
<script type="text/javascript" src="https://api.filestackapi.com/filestack.js"></script>

<script>
	// filepicker.setKey("AfLddltxlRFyI7PzHfgR4z");
	
	// document.getElementById('facebookUpload').onclick = function(){

	// 	filepicker.pick(
	// 	{
	// 		mimetype: 'image/*',
	// 		services: ['COMPUTER','FACEBOOK','INSTAGRAM']
	// 	},
	// 	function(Blob){
	// 		console.log(JSON.stringify(Blob));
	// 	}
	// 	);
	// };
	
	$('.filepicker').on('click', function() {
		  var _this = $(this); 
		  filepicker.pick(
		    {
		      mimetype: 'image/*',
		      hide: true,
		      maxSize: 2*1024*1024,
		      imageQuality: 90,
		      imageDim: [800, null],
		      services: ['COMPUTER', 'FACEBOOK', 'INSTAGRAM'],
		      openTo: 'COMPUTER'
		    },
		    function(Blob) {
		      setTimeout(previewImage(Blob.url), 2000);
		      console.log(JSON.stringify(Blob));
		      _this.data("doc-url", Blob.url);
		    },
		    function(FPError) {
		      console.log(FPError.toString());
		    },
		    function(FPProgress) {
		      console.log(parseInt(FPProgress.progress));
		      progressPercentage = parseInt(FPProgress.progress) + '%';
		      $('.progress-bar').css('width', progressPercentage).text(progressPercentage);
		    }
		  );
		});
</script>

</body>
</html>