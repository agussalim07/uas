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
<div class="container">
<h1>Form Tambah Relawan</h1>
<form action="submit.php" method="post">
<input type="hidden" name="id" value="<? echo " $row[id]" ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Lengkap</label>
    <input name="fullname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input name="address" type="text" class="form-control" id="exampleInputPassword1" placeholder="Alamat">
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
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input name="email" type="text" class="form-control" id="exampleInputPassword1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">No Handphone</label>
    <input name="no_handphone" type="text" class="form-control" id="exampleInputPassword1" placeholder="No Handphone">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Kemampuan</label>
    <input name="skills" type="text" class="form-control" id="exampleInputPassword1" placeholder="Kemampuan">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>