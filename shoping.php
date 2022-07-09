<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoping</title>

</head>

<body>

    <table>
        <?php
            require_once ("database.php"); 
            $db=new Database();
            $rows=$db->showData();
            
            echo"<th>Product Name<th>";
            echo"<th>Product Price<th>";
            while($row=$rows->fetch()){
                echo"<tr><td>{$row['pname']}<td>";
                echo"<td>{$row['pprice']}<td>";
                echo"<td><a href='buildCart.php?id={$row['pid']}'>Add to Cart</a><td><tr>";
            }
            echo("<tr><td><form action='buildCart.php' method='get'>
            <button type='submit' name='viewCart' btn-outline-primary>View Cart</button>
        </form></td></tr>");
        ?>

    </table>
</body>

</html>