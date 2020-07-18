
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
     <link rel="stylesheet" href="assets/css/styles.css" />
     <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<?
include "connection.php";
include "header.php";

?>
<?
$id_relawan = $_GET['id_relawan'];

$query="SELECT * FROM relawan WHERE id =\"$id_relawan\"";
$result=mysqli_query($db,$query);
$row= $result -> 

<div class="container">
<h1>Form Edit Relawan</h1>
<form action="update_relawan.php" method="post">
<input type="hidden" name="id" value="<? echo " $row[id]" ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Lengkap</label>
    <input name="fullname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="" $row[fullname]" ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input name="address" type="text" class="form-control" id="exampleInputPassword1" placeholder="Alamat" value="" $row[address]" ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Provinsi</label>
    <select name="province" class="form-control" id="exampleFormControlSelect1">
    <?php
 $province = [
  'Aceh'
  ,
  'Bali'
  ,
  'Banten'
  ,
  'Bengkulu'
  ,
  'DKI Jakarta'
  ,
  'Gorontalo'
  ,
  'Jambi'
  ,
  'Jawa Barat'
  ,
  'Jawa Tengah'
  ,
  'Jawa Timur'
  ,
  'Kalimantan Barat'
  ,
  'Kalimantan Selatan'
  ,
  'Kalimantan Tengah'
  ,
  'Kalimantan Timur'
  ,
  'Kalimantan Utara'
  ,
  'Kepulauan Bangka Belitung'
  ,
  'Kepulauan Riau'
  ,
  'Lampung'
  ,
  'Maluku'
  ,
  'Maluku Utara'
  ,
  'Nusa Tenggara Barat'
  ,
  'Nusa Tenggara Timur'
  ,
  'Papua'
  ,
  'Papua Barat'
  ,
  'Riau'
  ,
  'Sulawesi Barat'
  ,
  'Sulawesi Selatan'
  ,
  'Sulawesi Tengah'
  ,
  'Sulawesi Tenggara'
  ,
  'Sulawesi Utara'
  ,
  'Sumatera Barat'
  ,
  'Sumatera Selatan'
  ,
  'Sumatera Utara'
  ,
  'Yogyakarta'
  ,
];
    foreach ($province as $value) {
        echo "<option value=$value>$value</option>";
    }
      ?>
    </select>
  </div>
  <input type="hidden" name="temp_province" value="<? echo " $row[province]" ?>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input name="email" type="text" class="form-control" id="exampleInputPassword1" placeholder="Email" value="" $row[email]" ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">No Handphone</label>
    <input name="no_handphone" type="text" class="form-control" id="exampleInputPassword1" placeholder="No Handphone" value="" $row[no_handphone]" ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Kemampuan</label>
    <input name="skills" type="text" class="form-control" id="exampleInputPassword1" placeholder="Kemampuan" value="" $row[skills]" ?>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>