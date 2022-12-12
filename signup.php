<?php
 include('connect.php');

    $firstName=mysqli_real_escape_string($conn,$_POST['bfirstName']);
    $lastName=mysqli_real_escape_string($conn,$_POST['blastName']);
    $username=mysqli_real_escape_string($conn,$_POST['busername']);
    $email=mysqli_real_escape_string($conn,$_POST['bemail']);
    $address=mysqli_real_escape_string($conn,$_POST['baddress']);
    $city=mysqli_real_escape_string($conn,$_POST['bcity']);
    $street=mysqli_real_escape_string($conn,$_POST['bstreet']);
    $zip=mysqli_real_escape_string($conn,$_POST['bzip']);
    $number=mysqli_real_escape_string($conn,$_POST['bnumber']);
    $pass=mysqli_real_escape_string($conn,$_POST['pass']);


    

    $sql ="INSERT INTO buyer(Username, Password, Fname, Lname, Street, AptNo, City, ZipCode, Email, PhoneNo) 
    values('$username','$pass','$firstName','$lastName','$street','$address','$city','$zip','$email','$number') ";

    if ($conn->query($sql) === TRUE) {
  echo " record successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
?>
