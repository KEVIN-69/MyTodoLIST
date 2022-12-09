<?php
require_once("config/koneksi.php");

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>TodoLIST</title>
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="style/card.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbarku shadow-sm fixed-top" id="navbar">
      <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="index.php"></i><span class="text-light">TodoLIST</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <form class="d-flex" action="index.php" method="GET">
      <input class="form-control me-2 bg-white border-2 small" type="text" placeholder="Search Todo" aria-describedby="basic-addon2" aria-label="Title" name="cari" required>
      <div class="input-group-append">
      <button class="btn btn-light" type="submit" value="Cari" style="color:#e44232;">
      <i class="fas fa-search fa-sm"></i></button>
      </div>
    </form>
            </ul>
          </div>
        </div>
      </div>
    </nav><br><br>
    <!-- End Navbar -->

    <div class="container fw-bold h3 mt-5" style="color:#e44232">MY TODO</div>
    <div class="container">
    <a href="add.php" class="btn btnku mt-4"><i class="fa fa-plus" aria-hidden="true" style="color:white;"></i> Add Todo </a>
    </div> <br>

    <!-- php untuk pencarian -->
    <div class="container">

    <?php
    include "config/koneksi.php";
    if(isset($_GET['cari']))
    {
        $cari = $_GET['cari'];

        echo "<b> Hasil Pencarian : " .$cari."</b>";

    }
    ?>
    </div>

    <div class="p-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                    </div>

                    <?php
    $nama_tugas = "";

    if(isset($_GET['cari']))
    {
        $nama_tugas = $_GET['cari'];
        $hasil = mysqli_query($conn, "SELECT * FROM tugas_danielkevin WHERE nama_tugas LIKE '%".$nama_tugas."%'");
    }

    else{
        $hasil = mysqli_query($conn, "SELECT * FROM tugas_danielkevin");
    }

    // mengambil data untuk ditampilkan
    WHILE($data = mysqli_fetch_array($hasil)){
    ?>
    <div class="row col-lg-4 p-3">
    <a class="text-dark"style="text-decoration:none" href="edit.php?id=<?php echo $data['id_tugas'] ?>">
        <div class="card border border-secondary">
            <div class="card-body">
            <h5 class="card-title"><?php echo $data['nama_tugas']; ?></h5>
            <p class="card-text"><?php echo $data['deskripsi_tugas']; ?></p>
            <p class="fw-bold">Deadline : </p>
            <p class="fw-bold card-text"><?php echo $data['deadline']; ?></p>
          <td class="action">
            <a class="btn btnku mt-2 mb-2 " href="delete.php?idk=<?php echo $data["id_tugas"] ?>" onclick="return confirm('Are you sure you want to delete todo?')"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></a>
          </td>
            </div>
          </div>
    </div>                    
        <?php } ?>
        </div>
  </div>
</div>

  <!-- footer -->
  <footer class="footer mt-5 bg-dark p-5">
            <div class="container">
                <div class="row text-light">
                    <div class="col-6 text-lg-start text-sm-start" style="color:#f8e9ff;">
                        &copy; Copyright 2022 | TodoLIST. All Rights Reserved
                    </div>
                    <div class="col-6 text-lg-end text-sm-end" style="color:#f8e9ff;">
                        Created by Daniel kevin
                    </div>
                </div>
            </div>
        </footer>
    <!-- end footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>