<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filuppladdning</title>
</head>
<body>
     <form action="zooo.php" method= "POST" enctype = "multipart/form-data">
     <p> The file has uploaded</p>
     <button  name="New" >New Upload</button>
    </form>
</body>

</html>


<?php
  $pdo = new PDO('mysql:host=localhost;dbname=zoo', zooAdmin, 12345);


  if (isset($_POST['upload'])) {
    $file_name= $_FILES['file']['name'];
    $file_type= $_FILES['file']['type'];
    $file_size= $_FILES['file']['size'];
    $file_tem_loc= $_FILES['file']['tmp_name'];
    $file_store= "upload/".$file_name;

    if (move_upload_file ($file_tem_loc, $file_store)) {
        echo "The file has uploaded";
    }

}
?>