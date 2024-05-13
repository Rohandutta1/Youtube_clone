<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylees.css">
    <title>Video Library</title>
    <link rel="shortcut icon" href="youtube-logo-png-2061.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    

</head>
<body>
<?php include("header.php"); ?>

    <?php include("sidebar.php"); ?>




    <div class="video-detail">
        <div class="main-video">
            <?php
            include("db.php");
            // Get the video name from the query parameter
            $videoName = $_GET['video'];

            $title = $_GET['t'];
            $description = $_GET['d'];

            if (empty($videoName)) {
                echo "<p>No video selected.</p>";
            } else {
                echo "<div class='video-container'>";
                echo "<div class='video-details-box'>";
                echo "<video controls weidth='300' height='400'>";
                echo "<source src='upload/$videoName' type='video/mp4'>";
                echo "Your browser does not support the video tag.";
                echo "</video>";
                echo "<div class='video-details'>";
                //echo "<h4>title:$title</h4>";
                echo "<p style='text-align:left;'>description : $description</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
             }
            
            ?>
    
       
</div>

</body>
</html>
