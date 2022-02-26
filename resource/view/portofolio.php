<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
        <title>Biodata</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand text-color" href="index.html">MY BIODATA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse d-flex" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link text-color" href="../../index.php#toAbout">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-color" href="../../index.php#toSkills">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-color" href="../../index.php#toPortofolio">Portofolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-color" href="../../index.php#toMessage">Message</a>
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
                    <form action="../controller/LoginController.php" method="POST">
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
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../../assets/image/potofolio/si_1.png" class="d-block w-100" alt="...">
                  </div>
                </div>
            </div>
            <div class="content-folio">
                <h1 class="head-folio">detail portofolio</h1>
                <h3 class="title-folio">web prodi sistem Informasi</h3>
                <hr>
                <div class="container2">
                    <div class="card2">
                       <div class="face face1">
                          <div class="content">
                             <img src="../../assets/image/potofolio/si_2.png">
                             <h3>Sambutan</h3>
                          </div>
                       </div>
                       <div class="face face2">
                          <div class="content">
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                             <!-- <a href="#"><i class="bi bi-search"></i> Lihat</a> -->
                          </div>
                       </div>
                    </div>
                    <div class="card2">
                       <div class="face face1">
                          <div class="content">
                             <img src="../../assets/image/potofolio/si_4.png">
                             <h3>Mahasiswa</h3>
                          </div>
                       </div>
                       <div class="face face2">
                          <div class="content">
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                             <!-- <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-search"></i> Lihat</a> -->
                          </div>
                       </div>
                    </div>
                    <div class="card2">
                       <div class="face face1">
                          <div class="content">
                             <img src="../../assets/image/potofolio/si_3.png">
                             <h3>Visi Kelimuan</h3>
                          </div>
                       </div>
                       <div class="face face2">
                          <div class="content">
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                             <!-- <a href="#"><i class="bi bi-search"></i> Lihat</a> -->
                          </div>
                       </div>
                    </div>
                 </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
    <footer class="footer-content">
        <div class="card card-footer">
        <div class="card-body spacing-footer">
            <div class="row">
            <div class="col-9">
                <p class="head-footer">for more information</p>
                <p class="text-footer">Send email to apaajalah@gmail.com</p>
                <p>
                <a href="" class="btn social-footer"><i class="bi bi-facebook"></i></a>
                <a class="btn social-footer icon-space" href=""><i class="bi bi-instagram"></i></a>
                <a href="" class="btn social-footer icon-space"><i class="bi bi-whatsapp"></i></a>
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