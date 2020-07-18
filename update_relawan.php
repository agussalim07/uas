<?
include "connection.php";
include "header.php";

$id = $_POST['id'];
$fullname = $_POST['fullname'];
$address = $_POST['address'];
$province;
if(isset($_POST['province'])) {
    $province = $_POST['province'];
} else {
    $province = $_POST['temp_province'];
}
$email = $_POST['email'];
$no_handphone = $_POST['no_handphone'];
$skills = $_POST['skills'];
$update="UPDATE relawan SET fullname='$fullname', address='$address',province='$province',
email='$email', no_handphone='$no_handphone', skills='$skills' WHERE id ='$id'";
if (mysqli_query($db, $update)) {
    header('Location: dashboard.php');
} else {
 echo "relawan gagal di update";
}
?>