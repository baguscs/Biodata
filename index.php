<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Biodata</title>
  </head>

  <!-- start session -->
  <?php session_start(); ?>

  <!-- include setting -->
  <?php include('resource/connection/setting.php'); ?>

  <body>
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand text-color" href="#">MY BIODATA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse d-flex" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link text-color" href="#toAbout">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-color" href="#toSkills">Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-color" href="#toPortofolio">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-color" href="#toMessage">Message</a>
            </li>
            <li class="nav-item">
              <button type="button" class="btn btn-outline-success btn-login"  data-bs-toggle="modal" data-bs-target="#loginPage">Login</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Modal Login -->
    <div class="modal fade" id="loginPage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login Page</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="resource/controller/LoginController.php" method="POST">
            <div class="modal-body">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="username">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="save" value="save">Sign in</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="container" id="toHome">
      <div class="card circle-item-stroke">
        <div class="card-body"></div>
      </div>
      <div class="card circle-item-stroke2">
        <div class="card-body"></div>
      </div>
      <div class="card circle-item">
        <div class="card-body"></div>
      </div>
      <div class="card figure-card">
        <div class="card-body">
            <img class="hero1" src="assets/image/hero 1.png" alt="">
        </div>
      </div>
      <div class="main-content">
        <p class="tag-name">bagus cahyo s</p>
        <p class="tag-hobby">web developer</p>
      </div>
      <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
        <div class="about" id="toAbout">
          <h1 class="title">About</h1>
          <div class="card description">
            <div class="card-body">
              <div class="row">
                  <div class="col-8">
                    <div class="container">
                        <p class="name-desc">hi, i'm bagus cahyo s</p>
                        <p class="job-desc">web developer (back end)</p>
                        <p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, architecto assumenda. Nobis odit dolore quod eveniet maiores, incidunt cum veritatis quam illo odio, ipsa nihil maxime velit eum esse expedita. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt vel fugiat nisi eveniet ratione accusamus provident dolor, porro voluptatem totam, amet molestias voluptatum ipsum cupiditate nihil error aliquam omnis quidem. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto sequi laborum iure, necessitatibus aliquam maiores eaque enim magni amet sint adipisci commodi, itaque facilis odio mollitia cum temporibus placeat iusto?</p>
                        <a class="btn btn-email" href="#" role="button"><i class="bi bi-envelope-paper"></i> E-Mail Me</a>
                        <p class="separator"><a href="#" class="btn-download"><i class="bi bi-download"></i> Download CV</a></p>
                    </div>
                  </div>
                  <div class="col-4">
                    <img src="assets/image/hero2.png" alt="">
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="skills" id="toSkills">
          <h1 class="title mb-5">Skills</h1>
          <div class="item-skills">
              <img class="skill" src="assets/image/logo1.png" alt="">
              <img src="assets/image/logo2.png" alt="">
          </div>
        </div>
        <div class="portofolio-section" id="toPortofolio">
          <h1 class="title">Portofolio</h1>
          <div class="card portofolio mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="assets/image/folio.png" class="img-fluid rounded-start folio" alt="...">
              </div>
              <div class="col-md-8">
                <div class="space">
                  <a href="resource/view/portofolio.php" class="link-folio">Web Prodi Sistem Informasi</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card portofolio mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="assets/image/folio2.png" class="img-fluid rounded-start folio" alt="...">
              </div>
              <div class="col-md-8">
                <div class="space">
                  <a href="#" class="link-folio">E-Pemilu</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card portofolio">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="assets/image/folio3.png" class="img-fluid rounded-start folio" alt="...">
              </div>
              <div class="col-md-8">
                <div class="space">
                  <a href="#" class="link-folio">Go-Laundry</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="message end-margin" id="toMessage">
          <h1 class="title mb-5">Message</h1>
          <div class="message-content">
            <div class="row">
              <div class="col-6">
                <form action="resource/controller/AddDataController.php" id="message-form" method="POST">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-color">Sapaan</label>
                    <input type="text" name="say" class="form-control input-message" id="exampleFormControlInput1" placeholder="Masukkan Sapaan">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-color">Judul</label>
                    <input type="text" name="title" class="form-control input-message" id="exampleFormControlInput1" placeholder="Masukkan Judul">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label text-color">Deskripsi</label>
                    <textarea class="form-control input-message" name="describe" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan Deskripsi"></textarea>
                  </div>
                  <div class="btn-action">
                    <input type="text" value="user" name="request" hidden>
                    <button type="button" class="btn btn-outline-danger" onclick="resetForm()">Reset</button>
                    <button type="submit" class="btn btn-outline-success" name="save" value="save">Submit</button>
                  </div>
                </form>
              </div>
              <div class="col-6">
                <h3 class="text-color-center">Data Message</h3>
                <?php
                  $perPage = 3;
                  
                  //hitung total page
                  $stmt = $connect->query('SELECT count(*) FROM pesan WHERE status = 1');
                  $total_results = $stmt->fetchColumn();
                  $total_pages = ceil($total_results / $perPage);

                  //halaman saat ini
                  $page = isset($_GET['page']) ? $_GET['page'] : 1;
                  $accuratePage = $page;
                  $previously = $accuratePage - 1;
                  $next = $accuratePage + 1;
                  $starting_limit = ($page - 1) * $perPage;

                  //query ambil pesan
                  $query = "SELECT * FROM pesan WHERE status = 1 LIMIT $starting_limit,$perPage";

                  //ambil semua pengguna untuk halaman saat ini
                  $data = $connect->query($query)->fetchAll();

                ?>
                <div class="content-message">
                  <?php foreach ($data as $item): ?>
                    <h4 class="text-message"><?php echo $item['judul'];?></h4>
                    <div class="text-margin">
                    <h5 class="text-message"><?php echo $item['sapaan'];?></h5>
                    <h6 class="text-message"><?php echo $item['deskripsi'];?></h6>
                    </div>
                  <?php endforeach; ?>
                  <nav class="mt-3" aria-label="...">
                    <ul class="pagination justify-content-center">
                      <li class="page-item <?php if ($accuratePage == 1) : ?> disabled <?php endif; ?>">
                        <a class="page-link" href="<?php echo "?page=$previously"; ?>#toMessage">Previous</a>
                      </li>
                      <?php for ($page = 1; $page <= $total_pages ; $page++):?>
                        <li class="page-item <?php if ($accuratePage == $page) : ?> active <?php endif; ?>">
                          <a class="page-link" href="<?php echo "?page=$page"; ?>#toMessage"><?php echo $page; ?></a>
                        </li>
                      <?php endfor; ?>
                      <li class="page-item <?php if ($accuratePage == $total_pages) : ?> disabled <?php endif; ?> ">
                        <a class="page-link" href="<?php echo "?page=$next"; ?>#toMessage">Next</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    <script>
      function resetForm(){  
        document.getElementById("message-form").reset();  
      }   
    </script>
    <!-- menampilkan alert success -->
    <?php if (@$_SESSION['success']) { ?>
      <script>
        swal("Sucess!", "<?php echo $_SESSION['success']; ?>", "success");
      </script>
    <?php unset($_SESSION['success']); } ?>

    <!-- menampilkan alert error -->
    <?php if (@$_SESSION['error']) { ?>
      <script>
        swal("Error!", "<?php echo $_SESSION['error']; ?>", "error");
      </script>
    <?php unset($_SESSION['error']); } ?>

  </body>
  <footer class="footer-content">
    <div class="card card-footer">
      <div class="card-body spacing-footer">
        <div class="row">
          <div class="col-9">
            <p class="head-footer">for more information</p>
            <p class="text-footer">Send email to apaajalah@gmail.com</p>
            <p>
              <a href="#" class="btn social-footer"><i class="bi bi-facebook"></i></a>
              <a class="btn social-footer icon-space" href="#"><i class="bi bi-instagram"></i></a>
              <a href="#" class="btn social-footer icon-space"><i class="bi bi-whatsapp"></i></a>
            </p>
          </div>
          <div class="col-3">
            <a href="#toHome" class="btn flow-up"><i class="bi bi-arrow-up-circle up"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</html>
