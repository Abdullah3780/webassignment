<?php
class Database{
    private $db;
    public function __construct()
    {
        $this->db=new PDO("mysql:host=localhost;dbname=products","root","");
    }
    function insertData($pname,$pprice){
        $sql=$this->db->prepare("INSERT INTO `products` (`pid`, `pname`, `pprice`) VALUES (NULL, ?, ?)");
        return $pname.$sql->execute(array($pname,$pprice));
        
    }
    function showData(){
        $sql=$this->db->query("SELECT * FROM products");
        // print_r($sql);
        return $sql;
        
    }
    function getSpecificData($id){
        $sql = "SELECT *  FROM `products` WHERE `pid` = $id;";
   $result=     $this->db->query($sql);
        return $result;

    }
//     private $db;
//     private $user = "root";
//     private $pass = "";
//     private $dbname = "birds";
//     public function __construct()
//     {
//         $this->db = new PDO("mysql:host=localhost;dbname=$this->dbname",$this->user,$this->pass);
//         if(!$this->db)
//         {
            
//             die('connection failed');
//         }
       
//     }

//     function fetchAllColumns($tbl){
//         return $this->db->query("SELECT * FROM $users");
        
//     }
//     function CheckSignIn($user,$password) 
//     {
//         $sql = "SELECT `User_id` FROM `users` WHERE Username = \"$user\" AND password=\"$password\"";
//         $st = $this->db->query($sql);
//         if($st->rowCount()>0)
//         { 
//             echo "Login Successfull";
//         $row = $st->fetch();



//         return $row[0]; 
//         }
//         else
//         {
//             return false;
//         }
//     }
//     public function birdlog($bird,$pass,$enter){
//         $sql = "INSERT INTO `bird_detail` (`Bird_name`, `Food`, `Entered_by`) VALUES (?,?,?);";
//         $st = $this->db->prepare($sql);
//         $res = $st->execute(array($bird,$pass,$enter));
        
//         if($res){
//             echo"<br>";
//             echo "record inserted";
//         }
//         else{
//             echo"<br>";
//             echo "Insertion Failed";
//         }
//             }
//     function signUp($user,$pass)
//     {
//     try{
//     $sql = "INSERT INTO `users` (`uname`, `password`) VALUES (?,?);";
//     $st = $this->db->prepare($sql);
//     $res =  $st->execute(array($user,$pass));
//    // if($res==1)
//     //{
//         header('location:userhome.php?uid='.$this->db->lastInsertId());
//     //}
//     }
    
//     catch(Exception $e) 
//     {
//         header('location:SignUp_Form.php?e='.$e->getCode());
        
//         //print_r($e);
//         //print($e->getCode());
//        // print($e->getMessage()); 
//     }
//     }
}
?>