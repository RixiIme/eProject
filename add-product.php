<?php 
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $content = $_POST['content'];
    
    $connect = mysqli_connect('localhost','root','','tiki');

    if(!$connect){
        die("connect failed").mysqli_connect_error();

    } echo"connect sucess";

    $sql = "INSERT INTO products (name,price,content) VALUES ('$name','$price','$content')";

    mysqli_query($connect,$sql);
    echo mysqli_insert_id($connect);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="price" placeholder="price">
        <textarea name="content" placeholder="content"> </textarea>
        <button>Submit</button>
    </form>
    
</body>
</html>c