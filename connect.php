<
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
$connect = mysqli_connect('localhost','root','','tiki');
if(!$connect){
    die("connec failed").mysqli_connect_error();
}



?>

<table border="1">
      <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Content</th>
        </tr>
      </thead>
    <tbody>
    <?php 
    $sql = "SELECT * FROM products ";
    $results = mysqli_query($connect,$sql);
    if(mysqli_num_rows($results)>0){
        while ($row = mysqli_fetch_assoc($results)){
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['price'];?></td>
                <td><?php echo $row['content'];?></td>
            </tr>
            <td>
                <a href=""></a>
            </td>
            <?php
        }
    }
    ?>
    </tbody>

</table>
    
</body>
</html>