<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta hhtp-equiv = "X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="layar-dalam"></div></div>
        <div class="logo">
            <a href="">><img src="asset/DWKTrip.png"class="Putih"></a>
        </div></div>
        <div class="menu">
            <a href="#" class="tombol-menu">
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
            </a>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#aboutus">About Us</a></li>
                <li><a href="testimoni">Testimoni</a></li>
                <li><a href="contactus">Contact Us</a></li>
                <li><a href="trip">Trip</a></li>
            </ul>
        </div>
    </div>
    </nav>
    <div class="layar-penuh">
    <header id="home">
        <div class="overlay"></div>
        <video autoplay muted loop>
            <source src="asset/0504.mp4" type="video/mp4" />
        </video>
        <div class="Intro">
            <h3>Visit DWK-Trip</h3>
            <p>
                blablabla
            </p>
            <p>
            <?php if(!isset($_SESSION['login'])){ ?>
                <a href="login.php" class="tombol">LOGIN</a>
                     <?php } else { ?>
                <a href="logout.php" class="tombol">LOGOUT</a>
             <?php } ?>
            </p>
        </div>
    </header>
    <main>
        <section id="aboutus">
            <div class="layar-dalam">
                <h3>About Us</h3>
                <p class="ringkasan">ngebkp yuk

                </p>
                <div class="konten-isi">
                    <p>
                        yuk gas ngebkp
                    </p>
                </div>
            </div>
        </section>
        <section class="abuabu"
        id="support">
            <div class="layar-dalam support">
                <div>
                    <img src="asset/matahari.png"/>
                    <h6>In Every Condition</h6>
                    <p>
                       odading 
                </div>
                <div>
                    <img src="asset/tas.png" />
                    <h6>Proffesional Team</h6>
                    <p>
                       dewek.boys
                    </p>
                </div>
                <div>
                    <img src="asset/kompas.png" />
                    <h6>Expert Hikers</h6>
                    <p>
                        yaping final boss
                    </p>
                </div>
            </div>    
        </section>
        <section id="gallery">
            <div><img src="asset/foto1.jpg"></div>
            <div><img src="asset/foto2.jpg"></div>
            <div><img src="asset/foto3.jpg"></div>
            <div><img src="asset/foto4.jpg"></div>
            <div><img src="asset/foto5.jpg"></div>
            <div><img src="asset/foto6.jpg"></div>
            <div><img src="asset/foto7.jpg"></div>
            <div><img src="asset/foto8.jpg"></div>
        </section>
        <section class="quote">
            <div class="layar-dalam">
                <p>Jogja terbuat dari rindu, pulang dan angkringan.</p>
            </div>
        </section>
        <section id="Team">
            <div class="layar-dalam">
                <h3>Our Team</h3>
                <p class="ringkasan">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eius illum nihil eos quia. Sapiente.
                </p>
                <div class="tim">
                    <div>
                        <img src="asset/yonber3.jpg">
                        <h6>Ezar</h6>
                        <span>Indonesia</span>
                    </div>
                    <div>
                        <img src="asset/ikraam kembang.jpg">
                        <h6>Ikraam</h6>
                        <span>Indonesia</span>
                    </div>
                    <div>
                        <img src="asset/vin tatang.jpg">
                        <h6>Vin</h6>
                        <span>Indonesia</span>
                    </div>
                    <div>
                        <img src="asset/tempuk2.jpg">
                        <h6>Raiyan</h6>
                        <span>Indonesia</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="abuabu" id="blog">
            <div class="layar-dalam">
                <h3>Latest Blog</h3>
                <p class="ringkasan">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, vero et. Sint quia magni odit.
                </p>
                <div class="blog">
                    <div class="area">
                        <div class="gambar" style="background-image: url('asset/blog1.jpg');"></div>
                        <div class="text">
                            <article>
                                <h4><a href="#">What About Bromo?</a></h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias numquam aut libero.</p>
                            </article>
                        </div>
                    </div>
                    <div class="area">
                        <div class="gambar" style="background-image: url('asset/blog2.jpg');"></div>
                        <div class="text">
                            <article>
                                <h4><a href="#">What About Yogyakarta?</a></h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias numquam aut libero.</p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="contact">
        <div class="layar-dalam">
            <div>
                <h5>Info</h5>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem inventore officiis voluptatem? Reiciendis, velit eveniet.
            </div>
            <div>
                <h5>Contact</h5>
                081326750932 (Ikraam)
                085710139945 (Raiyan)
                081222777576 (Ezar)
                0895416598090 (Vin)
            </div>
            <div>
                <h5>Help</h5>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem inventore officiis voluptatem? Reiciendis, velit eveniet.
            </div>
            <div>
                <h5>Sitemap</h5>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem inventore officiis voluptatem? Reiciendis, velit eveniet.
            </div>
        </div>
        <div class="layar-dalam">
            <div class="copyright">&copy; 2021 Travelling Indonesia</div>
        </div>
    </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="javascript.js"></script>
    </body>
</html>