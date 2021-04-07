<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="zooo.php">
      <button  name="Back" >Go back</button>
    </form>
</body>

</html>

  <?php
  $pdo = new PDO('mysql:host=localhost;dbname=zoo', zooAdmin, 12345);


  if (isset($_POST['submit'])) {
  ?>
   
      <table >
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Birthday</th>
        <?php
        $search = $_POST['search'];
        $query = ("SELECT * FROM `animals` WHERE (`id` LIKE '%$search%') OR (`name` LIKE '%$search%') OR (`category` LIKE '%$search%') OR (`birthday` LIKE '%$search%')");
        $statement = $pdo->prepare($query,array(PDO::FETCH_ASSOC));
        $statement->execute();

        $result = $statement->fetchAll();

        if (count($result) > 0) {
           foreach ($result as $row){ {
        echo "<div>
            <tr>
                <td>  ".$row['id']." </td>
                <td>  ".$row['name']." </td>
                <td>  ".$row['category']." </td>
                <td> ".$row['birthday']." </td>
            </tr>
        </div>";
          }
        }
      }else {
          echo "Could not find any results..";
             }

}

?>
