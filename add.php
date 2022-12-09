<?php
    require_once("config/koneksi.php");

    try {
        if (isset($_POST["submit"])) {
            $nama_tugas = $_POST["nama_tugas"];
            $deskripsi_tugas = $_POST["deskripsi_tugas"];
            $deadline = $_POST["deadline"];

            $queryCreated = "INSERT INTO tugas_danielkevin(nama_tugas, deskripsi_tugas, deadline) VALUES ('$nama_tugas', '$deskripsi_tugas' ,'$deadline')";


            $created = mysqli_query($conn, $queryCreated);
            echo '<script>alert("Successfully Added Todo")</script>';
            echo '<script>window.location="index.php"</script>';

        }
    } catch (Exception $error) {
        echo "Error", $error->getMessage(), "\n";
    }
    ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Todo</title>
    <link href="style/card.css" rel="stylesheet">
</head>
<body>
    <!-- Form Data -->
<div class="container card mt-5 col-md-8">
        <div class="card-header fw-bold">Add Todo</div>
        <div class="card-body">
            <form action="" method="post">
                <div class=" mb-3">
                    <label for="nama_tugas" class="form-label">Title</label>
                    <input type="text" class="form-control" id="nama_tugas" placeholder="Input Title" name="nama_tugas" required>
                </div>
                <div class=" mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="deskripsi_tugas" name="deskripsi_tugas" placeholder="Input Description" required rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="deadline" class="form-label">Deadline</label>
                    <input type="date" class="form-control" id="deadline" name="deadline" required>
                </div>

                <button type="submit" name="submit" class="btn btnku">Add</button>
                <a href="index.php" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
    <!-- End Form Data -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>