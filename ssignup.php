<?php
 include('connect.php');
 
    $firstName=mysqli_real_escape_string($conn,$_POST['sfirstName']);
    $lastName=mysqli_real_escape_string($conn,$_POST['slastName']);
    $username=mysqli_real_escape_string($conn,$_POST['susername']);
    $companyname=mysqli_real_escape_string($conn,$_POST['companyname']);
    $email=mysqli_real_escape_string($conn,$_POST['semail']);
    $address=mysqli_real_escape_string($conn,$_POST['saddress']);
    $city=mysqli_real_escape_string($conn,$_POST['scity']);
    $street=mysqli_real_escape_string($conn,$_POST['sstreet']);
    $zip=mysqli_real_escape_string($conn,$_POST['szip']);
    $number=mysqli_real_escape_string($conn,$_POST['snumber']);
    $pass=mysqli_real_escape_string($conn,$_POST['spass']);


    

    $sql ="INSERT INTO seller(Username, Password,CompanyName,Fname, Lname, Street, AptNo, City, ZipCode, Email, PhoneNo) 
    values('$username','$companyname','$pass','$firstName','$lastName','$street','$address','$city','$zip','$email','$number') ";

    if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
?>