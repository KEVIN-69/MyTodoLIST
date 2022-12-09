<?php
    require_once("config/koneksi.php");

	$queryEdit = mysqli_query($conn, "SELECT * FROM tugas_danielkevin WHERE id_tugas = '".$_GET['id']."' ");
	if(mysqli_num_rows($queryEdit) == 0){
		echo '<script>window.location="index.php"</script>';
	}
	$k = mysqli_fetch_object($queryEdit);
    ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Todo</title>
    <link href="style/card.css" rel="stylesheet">
</head>
<body>
    <!-- Form Data -->
<div class="container card mt-5 col-md-8">
        <div class="card-header fw-bold">Edit Todo</div>
        <div class="card-body">
            <form action="" method="post">
                <div class=" mb-3">
                    <label for="nama_tugas" class="form-label">Title</label>
                    <input type="text" class="form-control" id="nama_tugas" name="nama_tugas" placeholder="Input Title" value="<?php echo $k->nama_tugas ?>" required>
                </div>
                <div class=" mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" class="form-control" id="deskripsi_tugas" name="deskripsi_tugas" placeholder="Input Description" required rows="3"><?php echo $k->deskripsi_tugas ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="deadline" class="form-label">Deadline</label>
                    <input type="date" class="form-control" id="deadline" name="deadline" value="<?php echo $k->deadline ?>" required>
                </div>

                <button type="submit" name="submit" class="btn btnku">Edit</button>
                <a href="index.php" class="btn btn-secondary">Back</a>
            </form>
            <?php 
					if(isset($_POST['submit'])){

						$nama_tugas = ucwords($_POST['nama_tugas']);
                        $deskripsi_tugas = ucwords($_POST['deskripsi_tugas']);
                        $deadline = ucwords($_POST['deadline']);

						$update = mysqli_query($conn, "UPDATE tugas_danielkevin SET 
												nama_tugas = '".$nama_tugas."', deskripsi_tugas = '".$deskripsi_tugas."', deadline = '".$deadline."'
												WHERE id_tugas = '".$k->id_tugas."' ");

						if($update){
							echo '<script>alert("Successfully Edit Todo")</script>';
							echo '<script>window.location="index.php"</script>';
						}else{
							echo 'gagal '.mysqli_error($conn);
						}

					}
				?>
        </div>
    </div>
    <!-- End Form Data -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>