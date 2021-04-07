 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
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
        </div>
        </table>





<!-- TEST 2<div>
<table>
<?php
//     $sql = "SELECT * FROM animals";
//     $result = mysqli_query($pdo, $sql);
//     $queryResults = mysqli_num_rows($result);   

//     if ($queryResults > 0){
//             while($row= mysgli_fetch_assoc($result)){
//                 echo "<div>
//         //             <tr>
//         //     <td>  ".$row['id']." </td>
//         //     <td>  ".$row['name']." </td>
//         //     <td>  ".$row['category']." </td>
//         //     <td> ".$row['birthday']." </td>
//         //   </tr>
//         //         </div>";
//             }

//     }
?>
        <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Birthday</th>
        </tr>

</table>
</div> -->






 
 <!-- ORGINALET<?php
        // $pdo = new PDO('mysql:host=localhost;dbname=zoo', zooAdmin, 12345);
        // $stmt  =$pdo->prepare('SELECT * FROM animals');
        // $stmt->execute();
?>
<form action="search.php" method="POST">
    <input name="search" type="text" placeholder="Search">
    <button name="submit">Search</button>

</form>

<div> -->

<!-- <table>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Birthday</th>
            </tr>
<?php


        // $result = msgli_query($pdo, $stmt);
        // $queryResults = mysqli_num_rows($result);
        // if($queryResults > 0){
        //     while($row = mysqli_fetch_assoc()){
        //         echo "<div>
        //             <tr>
        //     <td>  ".$row['id']." </td>
        //     <td>  ".$row['name']." </td>
        //     <td>  ".$row['category']." </td>
        //     <td> ".$row['birthday']." </td>
        //   </tr>
        //         </div>";
        //     }
        // }
        ?>
</table> -->

<!-- <table>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Birthday</th>
            </tr>
<?php

        // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        //               echo "<div>
        //             <tr>
        //     <td>  ".$row['id']." </td>
        //     <td>  ".$row['name']." </td>
        //     <td>  ".$row['category']." </td>
        //     <td> ".$row['birthday']." </td>
        //   </tr>
        //         </div>";
       //}
        ?>
      </table>


</div> -->

 </body>
 </html>
 
