<?php
session_start();
   $conn=new mysqli("localhost","root","","youtube");



   if(isset($_POST['log'])){
  
   $channel=$conn -> real_escape_string($_POST['channel']);
   $password=$conn -> real_escape_string($_POST['password']);

     

   $sql="SELECT id FROM people WHERE channel='$channel' and password='$password'";
   $res=$conn->query($sql);     
   if($res->num_rows>0){
    while($row=$res->fetch_assoc()){
        $id= $row['id'];
        $_SESSION['logged']='yes';
       // $_SESSION['id']=$id;
        echo 1;

    }
   }else{
    echo 0;
   }
         
         //
    
   }   


   ?>