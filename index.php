<?php
include 'dbh.php';
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <div id="comments">
        <h2>Comments:</h2>
        <?php

    $sql = "SELECT * FROM comments";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            echo "<p style=\"font-weight: 600;\">";
            echo $row['author'];
            echo "</p>";
            echo "<p style=\"color: rgb(105, 105, 175);\">";
            echo $row['message'];
            echo "</p>";
        }

    } else {
        echo "There are no comments.";
    }
    ?>
    </div>
</body>

</html>
