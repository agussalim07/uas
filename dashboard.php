<?php 
    include 'connection.php';
	session_start(); 
    if($_SESSION['login'] = "") header('Location: login.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
     <link rel="stylesheet" href="styles.css" />
     <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<?php
        include 'header.php'
    ?>
<body>
    <div class="container">
        <div>
        <div class="text-center">
        <h4>
        <?php $dt = new DateTime('now', new DateTimezone('Asia/Jakarta')); ?>
		<?php echo $dt->format("d-F-y H:i:s"); ?> <br>
        </h4>
        <h3>Data Relawan Covid</h3> <br>
         </div>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Alamat Rumah</th>
            <th scope="col">Propinsi</th>
            <th scope="col">Email</th>
            <th scope="col">No. HP</th>
            <th scope="col">Keahlian</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "select * from relawan ORDER by id DESC";
            if ($data = $db->query($query)) {
                while ($row = $data->fetch_assoc()) {
                $id = $row['id'];
                $fullname = $row['fullname'];
                $address = $row['address'];
                $province = $row['province'];
                $email = $row['email'];
                $no_handphone = $row['no_handphone'];
                $skills = $row['skills'];
                echo "<tr>
                <td>$fullname</td>
                <td>$address</td>
                <td>$province</td>
                <td>$email</td>
                <td>$no_handphone</td>
                <td>$skills</td>
                <td><a
                href=\"edit.php?id_relawan=$id\">Edit</a>
                &nbsp;<a
                href=\"delete.php?id_relawan=$id\">Hapus</a></td></tr>";
                
             }
              }
           ?>
        </tbody>
            </table>

         </div>
            <div class="text-left mt-3 mb-3">
            <a href="add_relawan.php" class="btn btn-primary">Tambah Relawan</a>
            <a href="generate_pdf.php" class="btn btn-primary">Download PDF</a>
         </div>
        </div>
    </div>
</body>
</html>
<!-- <LI>$row[1] &nbsp;$row[2] &nbsp; $row[3] &nbsp;<a
            href=\"edit_article.php?articleID=$row[0]\">Edit</a>
            &nbsp;<a
            href=\"delete.php?articleID=$row[0]\">Hapus</a></LI><br>"); -->