

	<?php

		if (!empty($_POST['teacher']) AND ($_POST['assignment']))
		{
			include("portions/doc_upload.php");
		}
		

	?>



		<form class='form-group' action='#' method='POST' enctype="multipart/form-data">
			<label>Teacher </label>:<input type="text" name='teacher' class='form-control'><br/>
			<label>Description of the assignment</label>:<input type="text" name="assignment" class='form-control'><br/>
			<div class='alert alert-info'><label>Upload the assignment</label>:<input type="file" name="document" ></div><br/>
			<input type="submit" value='Send' class='btn btn-info btn-lg'>
		</form>
	