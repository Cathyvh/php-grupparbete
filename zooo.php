 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
    <link rel="stylesheet" href="style.css"> 
 </head>
 <body>
    <?php
    $pdo = new PDO('mysql:host=localhost;dbname=zoo', zooAdmin, 12345);
    ?>

    <form  action="search.php" method="post">
        <input type="text" name="search" placeholder="Search">
        <button type="submit" name="submit">Search</button>
    </form>
    <table>
<?php      
    $stmt  =$pdo->query('SELECT * FROM animals');
    ?>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Birthday</th>
        </tr>
    <?php
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>           
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['category'] ?></td>
            <td><?php echo $row['birthday'] ?></td>
        </tr>
    <?php
    }
    ?>
                
        <form action="uploadfile.php" method= "POST" enctype = "multipart/form-data">
                        <p><input type="file" name="file"/></p>
                        <p><button name= "upload" >Upload</button></p>
        </form>
    </table>

 </body>
 </html>
 
