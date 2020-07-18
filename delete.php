  
<?php
include "connection.php";
$id = $_GET['id_relawan'];
$query = "DELETE FROM relawan WHERE id =\"$id\"";
if (mysqli_query($db, $query)) {
    header('Location: dashboard.php');
} else {
    echo "Komentar gagal dihapus. Kemungkinan terjadi kegagalan koneksi
 ke database MySQL.";
}