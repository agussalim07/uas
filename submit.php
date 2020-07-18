<?php
include "connection.php";
$fullname = $_POST['fullname'];
$address = $_POST['address'];
$province = $_POST['province'];
$email = $_POST['email'];
$no_handphone = $_POST['no_handphone'];
$skills = $_POST['skills'];

$query = "INSERT INTO relawan(fullname,address,province,email,no_handphone, skills)
 VALUES ('$fullname','$address','$province','$email','$no_handphone', '$skills')";

if (mysqli_query($db, $query)) {
    header('Location: dashboard.php');
} else {
    echo "<h2 align=center>Proses penambahan artikel tidak berhasil</h2>";
    echo $fullname;
    echo  mysqli_error($db);
}