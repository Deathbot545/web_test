<?php

 include('connect.php');

if(isset($_POST['username'])){
 $username=$_POST['username'];
 $password=$_POST['password'];

 $sql="SELECT* FROM buyer WHERE Username='".$username."' and Password='".$password."'";
 $result=mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)==1){
    include 'dash.php';

 }
 else{
    echo'wrong password';
 }
}
 
?>