<?php
require_once('database.php');
$db=new Database();
echo "Entered";
$insert=$db->insertData($_POST['pname'],$_POST['pprice']);
if(isset($insert)){
print($insert);}
else{
    echo "Product Not Inserted";
}