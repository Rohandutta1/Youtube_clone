
<?php 

include("db.php");

if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$t=$_POST['title'];
	$d=$_POST['desc'];
	
	$file_destination = "upload/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO video VALUES ('$file_name', '$t', '$d')";

	if(mysqli_query($conn,$q)) {

		$success = "Video uploaded successfully.";
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a video to upload..!";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload Video into the Database</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<!-- <script src="assets/js/jquery.min.js"></script> -->
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylees.css">
    <title>Video Library</title>
    <link rel="shortcut icon" href="youtube-logo-png-2061.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	<style>
        /* Custom CSS for background and fonts */
        body {
            /*background-color: black; /* Set the background to black */
			background-image:url('bg-upload.jpg');
            color: white; /* Set font color to white */
        }

        /* Adjust the container style */
        .container {
            background-color: transparent; /* Set container background to transparent */
            padding: 20px; /* Add some padding to the container */
        }

        /* Adjust the form input and textarea styles */
        .form-control {
            background-color: #333; /* Set input background to a darker shade */
            color: white; /* Set input font color to white */
        }

        /* Adjust the alert styles */
        .alert {
            background-color: #333; /* Set alert background to a darker shade */
            color: white; /* Set alert font color to white */
        }

        /* Adjust the button styles */
        .btn {
            background-color: #007bff; /* Set button background color */
            color: white; /* Set button font color to white */
        }
    </style>
</head>
<body>
<?php include("header.php"); ?>

<?php include("sidebar.php"); ?>

	<div class="container mt-3">
		
				<h1 class="text-center mb-5"><b>Upload your video into the library</b></h1>
				<div class="col-lg-8 m-auto">
				<form action="upload.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
					</div>
					<div>
						<textarea class="form-control" name="title" placeholder="Write name of the video" id="floatingTextarea"></textarea><br>
						<textarea class="form-control" name="desc" placeholder="Leave a Description here" id="floatingTextarea2" style="height: 100px"></textarea>
  			        
                    </div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php } ?>
					<input type="submit" name="upload" value="Upload" class="btn btn-success ml-3">
				</form>
				</div>
	</div>
</body>
</html>