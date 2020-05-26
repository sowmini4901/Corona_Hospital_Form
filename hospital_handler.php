<?php

$patientname = $_POST['patientname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$hospital = $_POST['hospital']; 
$department = $_POST['department'];
$phone =  $_POST['phone'];
$email = $_POST['email'];
$gender = $_POST['gender'];

if (!empty($patientname) || !empty($lastname) || !empty($age) || !empty($hospital) || !empty($department) || !empty($phone) || !empty($email) || !empty($gender)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "hospital";  // see the name of the database
    
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());

    }else{
        $SELECT = "SELECT email From tony Where email = ? Limit 1";
        $INSERT = "INSERT Into tony (patientname,lastname,age,hospital,department,phone,email,gender) values(?, ?, ?, ?, ?, ?, ?, ?)";

        //prepare statement

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum==0)
        {
            $stmt->close();

            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ssississ",$patientname,$lastname,$age,$hospital,$department,$phone,$email,$gender);
            $stmt->execute();
            echo "New record inserted successfully";

        } 
        else{
            echo "Someone already registered using this email";
        }
        $stmt->close();
        $conn->close();

    }

}else {
    echo "All fields are required";
    die();
}





?>