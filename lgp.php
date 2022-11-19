<?php

 include('connect.php');

if(isset($_POST['username'])){
 $username=$_POST['username'];
 $password=$_POST['password'];

 $sql="SELECT* FROM user WHERE user_name='".$username."' and cvv='".$password."'";
 $result=mysqli_query($con,$sql);
 if(mysqli_num_rows($result)==1){
    echo'you have loged in';

 }
 else{
    echo'wrong password';
 }
}
 
?>