<form method="post" enctype="multipart/form-data">
	<input type="file" name="img[]" multiple="true">
	<input type="submit" name="btn">

</form>
<?php

if(isset($_POST['btn'])){
	$json = json_encode($_FILES['img']['name']);
	print_r($json);
	 
}

?>