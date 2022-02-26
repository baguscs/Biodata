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
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Biodata</title>
  </head>

  <!-- start session -->
  <?php session_start(); ?>

  <!-- include setting -->
  <?php include('../../resource/connection/setting.php'); ?>

  <body>
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand text-color" href="#">MY BIODATA
          <br>
          Hallo <?= $_SESSION['nama']; ?>
        </a>
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
              <button type="button" class="btn btn-outline-danger btn-login"  data-bs-toggle="modal" data-bs-target="#logoutPage">Logout</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Modal Logout -->
    <div class="modal fade" id="logoutPage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Logout Page</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="../controller/LogoutController.php" method="POST">
            <p class="text-logout">Hai, <?= $_SESSION['nama'] ?> kamu yakin mau logout?</p>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger" name="save" value="save">Sign out</button>
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
            <img class="hero1" src="../../assets/image/hero 1.png" alt="">
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
                    <img src="../../assets/image/hero2.png" alt="">
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="skills" id="toSkills">
          <h1 class="title mb-5">Skills</h1>
          <div class="item-skills">
              <img class="skill" src="../../assets/image/logo1.png" alt="">
              <img src="../../assets/image/logo2.png" alt="">
          </div>
        </div>
        <div class="portofolio-section" id="toPortofolio">
          <h1 class="title">Portofolio</h1>
          <div class="card portofolio mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="../../assets/image/folio.png" class="img-fluid rounded-start folio" alt="...">
              </div>
              <div class="col-md-8">
                <div class="space">
                  <a href="../view/portofolio.php" class="link-folio">Web Prodi Sistem Informasi</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card portofolio mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="../../assets/image/folio2.png" class="img-fluid rounded-start folio" alt="...">
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
                <img src="../../assets/image/folio3.png" class="img-fluid rounded-start folio" alt="...">
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
                <form action="../controller/AddDataController.php" id="message-form" method="POST">
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
                    <input type="text" value="admin" name="request" hidden>
                    <button type="button" class="btn btn-outline-danger" onclick="resetForm()">Reset</button>
                    <button type="submit" class="btn btn-outline-success" name="save" value="save">Submit</button>
                  </div>
                </form>
              </div>
              <div class="col-6">
                <h3 class="text-color-center">View Data</h3>
                <?php
                  // ambil data dari database 
                  $getData = $connect->prepare('SELECT * FROM pesan');
                  $getData->execute();
                  // tangkap hasil execute
                  $message = $getData->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <div class="table-responsive">
                  <table class="table table table-dark table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Sapaan</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th class="width-row">Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $no = 1;
                        foreach ($message as $item): 
                      ?>
                      <tr>
                        <td><?= $no ?></td>
                        <td><?= $item['sapaan'] ?></td>
                        <td><?= $item['judul'] ?></td>
                        <td><?= $item['deskripsi'] ?></td>
                        <td>
                          <button type="button" class="btn btn-info btn-option" title="Edit" data-bs-toggle="modal" data-bs-target="#editData<?= $no ?>"><i class="bi bi-pencil color-icon"></i></button>
                          <button type="button" class="btn btn-danger btn-option" title="Hapus" data-bs-toggle="modal" data-bs-target="#hapusData<?= $no ?>"><i class="bi bi-trash color-icon"></i></button>
                          <?php if ($item['status'] == 1) :?>
                            <button class="btn btn-danger btn-option" title="Show View" data-bs-toggle="modal" data-bs-target="#viewData<?= $no ?>"><i class="bi bi-eye-slash color-icon"></i></button>
                          <?php else : ?>
                            <button class="btn btn-warning btn-option" title="Hide View" data-bs-toggle="modal" data-bs-target="#viewData<?= $no ?>"><i class="bi bi-eye color-icon"></i></button>
                          <?php endif?>
                          <button class="btn btn-success btn-option" title="Upload Foto" data-bs-toggle="modal" data-bs-target="#uploadFoto<?= $no ?>"><i class="bi bi-cloud-arrow-up color-icon"></i></button>
                        </td>
                      </tr>

                      <!-- Modal Edit -->
                      <div class="modal fade" id="editData<?= $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Edit Data <?= $item['judul'] ?></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form action="../controller/EditDataController.php" id="message-form" method="POST">
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label">Sapaan</label>
                                  <input type="text" name="say" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Sapaan" value="<?= $item['sapaan'] ?>">
                                </div>
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label">Judul</label>
                                  <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Judul" value="<?= $item['judul'] ?>">
                                  <input type="text" value="<?= $item['id'] ?>" name="id" hidden>
                                </div>
                                <div class="mb-3">
                                  <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                  <textarea class="form-control" name="describe" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan Deskripsi"><?= $item['deskripsi'] ?></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary" name="save" value="save">Save changes</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Modal Hapus -->
                      <div class="modal fade" id="hapusData<?= $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Hapus Data <?= $item['judul'] ?></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p>Apakah Anda Yakin Ingin Menghapus Data <?= $item['judul'] ?> ?</p>
                            </div>
                            <div class="modal-footer">
                              <form action="../controller/DeleteDataController.php" id="message-form" method="POST">
                                <input type="text" name="id" value="<?= $item['id'] ?>" hidden>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="save" value="save">Save changes</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Modal View -->
                      <div class="modal fade" id="viewData<?= $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">View Data <?= $item['judul'] ?></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <?php if ($item['status'] == 1) : ?>
                                <p>Apakah Anda Yakin Ingin Sembunyikan Data <?= $item['judul'] ?> ?</p>
                              <?php else : ?>
                                <p>Apakah Anda Yakin Ingin Tampilkan Data <?= $item['judul'] ?> ?</p>
                              <?php endif ?>
                              
                            </div>
                            <div class="modal-footer">
                              <form action="../controller/ViewDataController.php" id="message-form" method="POST">
                                <input type="number" name="id" value="<?= $item['id'] ?>" hidden>
                                <input type="number" name="status" value="<?= $item['status'] ?>" hidden>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="save" value="save">Save changes</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Modal Upload -->
                      <div class="modal fade" id="uploadFoto<?= $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Upload Foto Data <?= $item['judul'] ?></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form action="../controller/UploadFotoController.php" id="message-form" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                  <label for="formFile" class="form-label">Pilih Foto</label>
                                  <input class="form-control" type="file" id="formFile" name="foto">
                                </div>
                                <div>
                                  <h4>Foto Saat ini:</h4>
                                  <?php if ($item['foto'] == null) : ?>
                                    <h5>Tidak Ada Foto</h5>
                                  <?php else : ?>
                                  <img src="../../assets/image/storage/<?= $item['foto'] ?>" class="img-fluid" alt="...">
                                  <?php endif; ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <input type="number" name="id" value="<?= $item['id'] ?>" hidden>
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary" name="save" value="save">Save changes</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                      <?php 
                        $no++;
                        endforeach; 
                      ?>
                    </tbody>
                  </table>
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

    <!-- menampilkan alert success -->
    <?php if (@$_SESSION['login']) { ?>
      <script>
        swal("You are Logged in!", "<?php echo $_SESSION['login']; ?>", "success");
      </script>
    <?php unset($_SESSION['login']); } ?>

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
