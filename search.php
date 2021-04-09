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
  <form action="index.php">
    <button  name="Back" >Go back</button>
  </form>

  <div class="search-result">
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
          $searchCat = $_POST['category'];
          $query = ("SELECT * FROM `animals` WHERE (`id` LIKE '%$search%') AND  (`category` LIKE '%$searchCat%') OR (`name` LIKE '%$search%') AND  (`category` LIKE '%$searchCat%')
           OR (`birthday` LIKE '%$search%') AND  (`category` LIKE '%$searchCat%')");
          $searchStmt = $pdo->prepare($query,array(PDO::FETCH_ASSOC));
          $searchStmt->execute();
          $result = $searchStmt->fetchAll();

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
            echo "<h2>Could not find any results..</h2>";
              }
      }
  ?>
  </div>

</body>

</html>

 