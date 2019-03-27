<?php 
$message_type = $this->session->flashdata('message')["message_type"];
$message = $this->session->flashdata('message')["message"];

if(isset($message) && $message!=""): ?>
<script type="text/javascript">

$(document).ready(function() {
	"use strict";
	
	$.toast({
		heading: '<?php echo preg_replace( "/\r|\n/", "",$message_type); ?>',
		text: '<p><?php echo preg_replace( "/\r|\n/", "",$message); ?></p>',
		position: 'top-right',
		loaderBg:'#7a5449',
		class: 'jq-toast-primary',
		hideAfter: 3500, 
		stack: 6,
		showHideTransition: 'fade'
	});
});	

</script>
<?php endif; ?>


	
	
          
