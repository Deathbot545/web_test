<?php
 include('connect.php');

    $firstName=mysqli_real_escape_string($con,$_POST['firstName']);
    $lastName=mysqli_real_escape_string($con,$_POST['lastName']);
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $address=mysqli_real_escape_string($con,$_POST['address']);
    $address2=mysqli_real_escape_string($con,$_POST['address2']);
    $country=mysqli_real_escape_string($con,$_POST['country']);
    $state=mysqli_real_escape_string($con,$_POST['state']);
    $zip=mysqli_real_escape_string($con,$_POST['zip']);
    $ccname=mysqli_real_escape_string($con,$_POST['cc-name']);
    $ccnumber=mysqli_real_escape_string($con,$_POST['cc-number']);
    $ccexpiration=mysqli_real_escape_string($con,$_POST['cc-expiration']);
    $cccvv=mysqli_real_escape_string($con,$_POST['cc-cvv']);

    $sql ="INSERT INTO user (first_name, last_name, user_name, email, address, address2, country, state, zip, payment, card_name, card_num, expiration, cvv) 
    values('$firstName','$lastName','$username','$email','$address','$address2','$country','$state','$zip','Debit Card','$ccname','$ccnumber','$ccexpiration','$cccvv') ";
    if(mysqli_query($con,$sql)){
        echo 'succsess';
    }
    else{
        echo 'error' .mysqli_error($con);
    }
 
 echo $_POST["firstName"];
 echo $_POST["lastName"];
 echo $_POST["username"];
 echo $_POST["email"];
 echo $_POST["address"];
 echo $_POST["address2"];
 echo $_POST["country"];
 echo $_POST["state"];
 echo $_POST["zip"];
 echo $_POST["cc-name"];
 echo $_POST["cc-number"];
 echo $_POST["cc-expiration"];
 echo $_POST["cc-cvv"];
?>