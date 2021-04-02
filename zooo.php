 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
      <div>
      <table>
 <?php
        $pdo = new PDO('mysql:host=localhost;dbname=zoo', zooAdmin, 12345);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
      
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
        </div>
        </table>
 </body>
 </html>
 
