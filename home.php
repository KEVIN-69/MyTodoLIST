<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- CSS External -->
    <link rel="stylesheet" href="style/style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" sizes="32x32" href="assets/images/hospital.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>TodoLIST</title>
  </head>
  <body id="home" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="0" class="scrollspy-example" tabindex="0">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbarku shadow-sm fixed-top" id="navbar">
      <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="home.php" style="color:white;">TodoLIST</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <ul class="navbar-nav fw-bold">
              <li class="nav-item">
                <a class="nav-link fs-6 active" aria-current="page" style="color:white;" href="#banner">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6" style="color:white;" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6" style="color:white;" href="#start">Start for free</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Banner -->
    <div class="banner p-5" id="banner">
      <div class="container">
          <div class="row d-flex justify-content-center">
              <div class="col-15 col-lg-6 my-auto">
                  <h1 class="fw-bold">
                  Organize yourwork and life
                  </h1>
                  <p>
                  Become focused, organized, and calm with TodoLIST
                  </p>
                  <a href="#start" class="btn btn-danger mt-2 mb-2">Start for free </a>
              </div>
              <div class="col-10 col-lg-6 my-6">
                  <img src="assets/images/home.jpg" alt="banner-images" class="banner-images">
              </div>
          </div>
      </div>
    </div>
  <!-- End Banner -->

   <!-- about -->
	<div id="about" class="about p-5" style="background-color: rgb(251, 251, 251); margin-top: 15px;">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="fw-bold fs-4 text-center p-5">
						<p>About</p>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="about">
						<img src="assets/images/about.jpg" alt="about" class="img-about">
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 mt-4">
					<div class="about-text justify-content-">
						<p>TodoLIST is a website that provides a program where users can make lists of things they want to do with the aim of being able to manage time well so that life becomes organized.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
  <!--End About-->

<!--Start-->
<div id="start" class="about p-5" style="background-color: white;">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="fw-bold fs-4 text-center p-5">
          <p>Start for free</p>
        </div>
        <div class="row d-flex justify-content-center">
              <div class="col-15 col-lg-6 my-auto">
                  <h1 class="fw-bold">
                  Achieve peace of mind with TodoLIST
                  </h1>
                  <a href="index.php" class="btn btn-danger mt-2 mb-2">Open Todo </a>
              </div>
              <div class="col-10 col-lg-6 my-6">
                  <img src="assets/images/home.jpg" alt="banner-images" class="banner-images">
              </div>
          </div>
      </div>
  </div>
</div>
</div>
<!--End start-->

    <!-- footer -->
    <footer class="footer mt-5 bg-dark p-5">
            <div class="container col">
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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>