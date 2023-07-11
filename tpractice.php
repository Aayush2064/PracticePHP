<?php include 'connection.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        a.btn {
            display:block;
            padding: 20px;
            border:1px solid rgba(0,0,0,0.1);
            text-align:center;
        }
        a.btn:hover {
          border:1px solid rgba(0,0,0);
          color:green;
          
        }
        div.btn {
            text-align:left;
            margin:0;
            padding:0;
        }
        a.butn {
            color:white;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="btn">
            <a class="btn" href="practice3.php">Add</a>
        </div>  

        <table class="table">
  <thead>
  <tr>
      <th scope="col">S.N</th>
      <th scope="col">First Name:</th>
      <th scope="col">Last Name:</th>
      <th scope="col">E-mail:</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php
$select = "SELECT * FROM `practice3`";
$result = $con->query($select);

if ($result->num_rows > 0) {
    $sn = 1;
    while($row = $result->fetch_assoc()){
        ?>
          <tr>
              <th><?php echo $sn  ?></th>
              <td><?php  echo $row["fname"]; ?></td>
              <td><?php  echo $row["lname"]; ?></td>
              <td><?php  echo $row["email"]; ?></td>
              <td><button type="button" class="btn btn-primary"><a href="edit.php" class="butn">Edit</a></button></td>
            <form action="tpractice.php" method="post">
                <td><a href="delete.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">Delete</a>
            </form>
            </tr>
            <?php
        $sn++;
    }
}
?>
</tbody>

</table>

    </div>
</body>
</html>

<?php 
?>