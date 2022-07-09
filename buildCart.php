<?php 

if((isset($_GET['emptyCart']) || !isset($_COOKIE['id'])) && !isset($_GET['id'])){
    
    setcookie("id", "", time() - 3600);
    echo"<h1>Your Cart Is Empty</h1>";
}
elseif(!isset($_GET['viewCart'])){
if(!isset($_COOKIE['id'])){
    
$id=$_GET['id'];
setcookie('id', $id,time()+ 3600);
$_COOKIE['id']=$id;
// print($_COOKIE['id']);
// header("location: shoping.php");
}
else{
    
$id=$_GET['id'];
setcookie('id', $_COOKIE['id'].'-'.$id, time()+3600);

}
// print($_COOKIE['id']);
header("location: shoping.php");
}
else{
    require_once('database.php');
    $db=new Database();
$ids=explode('-',$_COOKIE['id']);
echo"<h1>Your Cart</h1>";
echo"<table>";
echo"<th>Product Name<th>";
echo"<th>Product Price<th>";
foreach($ids as $id){
    $sqldata=$db->getSpecificData($id);
    $result=$sqldata->fetch();
  
         
                echo"<tr><td>{$result['pname']}<td>";
                echo"<td>{$result['pprice']}<td>";

       
}
echo"</table>";
echo("<tr><td><form action='buildCart.php' method='get'>
<button type='submit' name='emptyCart'>Empty Cart</button>
</form></td></tr>");
// print($_SESSION['id']);
}