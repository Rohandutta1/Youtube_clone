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


            <?php
include("db.php");

$q = "SELECT * FROM video";

$result = mysqli_query($conn, $q);

if ($result->num_rows > 0) {
    echo "<div class='video-container'>";

    while ($row = mysqli_fetch_array($result)) {
        $videoUrl = $row["name"];
        $name = $row["title"];
        $description = $row["desc"];

        echo "<div class='video-content-cover'>";
        echo "<a href='video_detail.php?video=$videoUrl&t=$name&d=$description' style='text-decoration: none';>";
        echo "<div class='video-content' >";
        echo "<video controls class='video-box'>";
        echo "<source src='upload/$videoUrl' type='video/mp4'  >";
        echo "Your browser does not support the video tag.";
        echo "</video>";
        
          echo "<div class='detail'>";
            echo "<h4 class='title'>$name</h4>";
            echo "</a>";  
          echo "</div>";
        
        echo "</div>";
        echo "</div>";
    }
    echo "</div>"; // Close the video-container
}
?>

                    
            </div>
        </div>
    </div>
</body>