<!DOCTYPE html>
<html>
    <head>
    <link rel= "alternate" href="index.php">
    </head>
    <body>
    <?php
    header("refresh:5;url=index.php");
    $nama = @$_POST["name"];
    if ($nama){
        echo "Thank you for your response " .$nama. "<br>";
    }
    ?>
    </body>
</html>