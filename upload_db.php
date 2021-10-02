<meta charset="UTF-8">
<?php
include('condb.php'); 

	$fileupload =(isset($_POST['fileupload']) ? $_POST['fileupload'] :'');
	$upload=$_FILES['fileupload']['name'];
	if($upload !='') { 
		$path="pdf/";
		$path_copy=$path.$upload;
		$path_link="pdf/".$upload;
		move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);  
	}else{
		$upload='';
	}


	// echo '<pre>';
	// print_r($_REQUEST);
	// echo '</pre>';
	// exit;

	// เพิ่มไฟล์เข้าไปในตาราง uploadfile
	
		$sql = "INSERT INTO upload(fileupload)VALUES('$upload')";
		
		$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($conn);
	// javascript แสดงการ upload file
	
	echo '
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	';		
	if($result){
		echo '
		<script>
		   setTimeout(function() {
			swal({
				title: "สำเร็จ",
				text: "เพิ่มข้อมูลสำเร็จ",
				type: "success"
			}, function() {
				window.location = "index.php";
			});
		}, 100);
	</script>
	';
}
else{
echo "<script type='text/javascript'>";
echo "alert('เพิ่มข้อมูลไม่สำเร็จ');";
echo "window.location = 'index.php' ";
echo "</script>";
}
?>