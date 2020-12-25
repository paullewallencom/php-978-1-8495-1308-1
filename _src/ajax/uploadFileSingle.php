<!DOCTYPE html>
<html>
<head>
	<script src="../js/jquery-1.4.4.js"></script>
</head>
<body>
	<?php
	$upload_dir = "../uploads";
	
	$result["status"] = "200";
	$result["message"]= "Error!";
	
	if(isset($_FILES['file'])){
		echo "Uploading file... <br />";
		 if ($_FILES['file']['error'] == UPLOAD_ERR_OK) {
	     	$filename = $_FILES['file']['name']; // file name 
	        move_uploaded_file($_FILES['file']['tmp_name'], $upload_dir.'/'.$filename); 
	        $result["status"] = "100";
			$result["message"]= "File was uploaded successfully!";
	     } elseif ($_FILES['file']['error'] == UPLOAD_ERR_INI_SIZE) {
	     	$result["status"] = "200";
			$result["message"]= "The file is too big!"; // you can set the upload_max_filesize directive in php.ini
	     } else {
	       	$result["status"] = "500";
			$result["message"]= "Unknown error!";
	     }
	}
	?>
	
	<script>
	$(document).ready(function(){
		$('#placeHolder', window.parent.document).html('<?php echo $result["message"]; ?>');
	});
		
	</script>
</body>
</html>