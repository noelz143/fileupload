<?php 
	$targetDir = "uploads/";
	$filename =basename ($_FILES['file']['name']);
	$targetfilepath=$targetDir.$filename;
	$filetype =pathinfo($targetfilepath,PATHINFO_EXTENSION);

	if(isset($_POST['submit']) && !empty($_FILES['file']['name'])){
		$allowtypes = array ('jpg','png','gif','pdf');

		if (in_array($filetype, $allowtypes)) {
			if (move_uploaded_file($_FILES['file']['tmp_name'],$targetfilepath)){
				echo $filename;
			} 
			else{
				echo "failed to upload";
			}
		}
		else{
			echo "file type not allowed";
		}
	}
 ?>