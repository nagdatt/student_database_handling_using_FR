<?php

	function AddImageToPath($n/*TouploadName*/,$t/*TempName*/,$tb/*folder*/,$enroll/*UnFolderNameToSave*/)
	{
		$root='DATAIMAGES/'.$tb;
		if(!is_dir($root))
			mkdir($root,"0777");
		$eroll2=$root.'/'.$enroll;
		if(!is_dir($eroll2))
			mkdir($eroll2,"0777");
	//$n=$_FILES['file']['name'];
	//$t=$_FILES['file']['tmp_name'];

	//$l='Nagdatt/Gajjam/';
	//if(! is_dir($l))
//	mkdir('Nagdatt/Gajjam',"0777");
//	if(move_uploaded_file($t,$l."Nagdatt.jpg")){
	//echo "file uploaded";
//	}
	//else{
	//	echo "File Upload Error";
	//}
	
	for($counter=0;$counter<3;$counter++){
		echo $t[$counter];
		if(move_uploaded_file($t[$counter],$eroll2."/".$enroll.'_'.($counter+1).'.jpg')){
		//echo $eroll2."/".$enroll.'_'.'1'.'.jpg';
	}
	else{
		echo "Error Ocuured";
		return false;
	}
	}
	
	return true;
	}
?>
