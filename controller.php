<?php 

require('./env.php');


$user_name = $_GET['std_name'];
$user_email = $_GET['std_email'];
$user_phone = $_GET['std_phone'];

$query = "INSERT INTO student_info (id, std_name, std_email, std_phone) VALUES (NULL, '$user_name', '$user_email', '$user_phone')";

$result = mysqli_query($connection,$query);

if($result){
    header("location:./?message=data inserted successfully!✔️");
}

?>