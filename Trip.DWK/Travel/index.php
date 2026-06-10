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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip.DWK</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav id="navbar">
        <div class="logo">
            <a href="#home"><img src="asset/dwk-putihNEW.png" id="logoImg" />
        </a>
        </div>
        <div class="menu">
            <a href="#" class="tombol-menu" id="tombolMenu">
                <span class="garis"></span>
                <span class="garis"></span>
                <span class="garis"></span>
            </a>
            <ul id="menuList">
                <li><a href="#home">Home</a></li>
                <li><a href="#aboutus">About Us</a></li>
                <li><a href="#Team">Contact us</a></li>
                <li><a href="#contact">Testimoni</a></li>
                <li><a href="#blog">Trip</a></li>
            </ul>
        </div>
    </nav>

    <header id="home">
        <div class="slideshow-container">
            <div class="slide active" style="background-image: url('asset/bromo.jpg')"></div>
            <div class="slide" style="background-image: url('asset/lombok.jpg')"></div>
            <div class="slide" style="background-image: url('asset/merbabu.jpg')"></div>
            <div class="slide" style="background-image: url('asset/ntt.beach.jpg')"></div>
            <div class="slide" style="background-image: url('asset/pantai.jpg')"></div>
        </div>
        <div class="overlay"></div>
        <div class="Intro">
            <h3>Visit DWK-Trip</h3>
            <p>Platform digital untuk menemukan dan memesan open trip dengan mudah, aman, dan terorganisir.</p>
            <p>
                <?php if(!isset($_SESSION['login'])){ ?>
                    <a href="login.php" class="tombol">LOGIN</a>
                <?php } else { ?>
                    <a href="logout.php" class="tombol">LOGOUT</a>
                <?php } ?>
            </p>
        </div>
        <div class="slide-dots">
            <span class="dot active" onclick="goToSlide(0)"></span>
            <span class="dot" onclick="goToSlide(1)"></span>
            <span class="dot" onclick="goToSlide(2)"></span>
            <span class="dot" onclick="goToSlide(3)"></span>
            <span class="dot" onclick="goToSlide(4)"></span>
        </div>
    </header>

    <main>
        <section id="aboutus">
            <div class="layar-dalam">
                <h3>About Us</h3>
                <p class="ringkasan">Platform digital yang menghubungkan penyedia jasa open trip terpercaya dengan para traveler. Kami hadir untuk memastikan perjalanan wisata Anda lebih mudah, terorganisir, dan menyenangkan tanpa perlu pusing mengatur detailnya sendiri.</p>
                <div class="konten-isi">
                    <p>Nikmati Pengalaman Liburan yang Berbeda</p>
                </div>
            </div>
        </section>

        <section class="abuabu" id="support">
            <div class="layar-dalam support">
                <div>
                    <img src="asset/matahari.png"/>
                    <h6>In Every Condition</h6>
                    <p>Menemukan paket open trip, memesan perjalanan secara online, bergabung dengan traveler lain, menikmati liburan dengan aman dan praktis.</p>
                </div>
                <div>
                    <img src="asset/tas.png" />
                    <h6>Proffesional Team</h6>
                    <p>Tim kami siap membantu mulai dari perencanaan perjalanan hingga perjalanan selesai, memastikan setiap peserta mendapatkan pengalaman yang aman, nyaman, dan menyenangkan.</p>
                </div>
                <div>
                    <img src="asset/kompas.png" />
                    <h6>Expert Hikers</h6>
                    <p>Dipandu oleh tim yang berpengalaman dalam kegiatan alam dan pendakian, sehingga perjalanan terasa lebih terarah, aman, dan berkesan.</p>
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
                <p>Jangan biarkan rencana liburanmu hanya jadi wacana. Wujudkan sekarang bersama Trip.DWK!</p>
            </div>
        </section>

        <section id="Team">
            <div class="layar-dalam">
                <h3>Our Team</h3>
                <p class="ringkasan">Tim kami memiliki guide yang berpengalaman dalam menjaga kenyamanan traveler</p>
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
                <h3>Testimoni</h3>
                <p class="ringkasan">Apa kata mereka tentang Trip.DWK?</p>
                <div class="testimoni">
                    <div class="testi-card">
                        <img src="asset/fiersa besari.jpg" class="testi-foto">
                        <h6>Fiersa Besari</h6>
                        <div class="bintang">★★★★★</div>
                        <p>"Trip yang luar biasa! Semua terorganisir dengan baik, pemandangannya indah banget!"</p>
                    </div>
                    <div class="testi-card">
                        <img src="asset/Nadia Putri.png" class="testi-foto">
                        <h6>Nadia Putri</h6>
                        <div class="bintang">★★★★☆</div>
                        <p>"Pengalaman liburan yang tak terlupakan, guide-nya profesional dan ramah!"</p>
                    </div>
                    <div class="testi-card">
                        <img src="asset/Dinda Ayu.png" class="testi-foto">
                        <h6>Dinda Ayu</h6>
                        <div class="bintang">★★★★★</div>
                        <p>"Recommended banget! Harga terjangkau tapi kualitas tidak mengecewakan!"</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="contact">
        <div class="layar-dalam">
            <div>
                <h5>Info</h5>
                Trip.Dwk adalah penyedia layanan paket wisata terpercaya yang siap menemani petualangan serumu mengeksplorasi keindahan alam, budaya, dan destinasi terbaik di Indonesia.
            </div>
            <div>
                <h5>Contact</h5>
                081326750932 (Ikraam)<br>
                085710139945 (Raiyan)<br>
                081222777576 (Ezar)<br>
                0895416598090 (Vin)
            </div>
            <div>
                <h5>Help</h5>
                Kalo Butuh bantuan bisa hubungin kontak di samping kiri ini ya, kami akan sedia Membantu
            </div>
            <div>
                <h5>Sitemap</h5>
                Home, About Us, Testimoni, Contact Us, Trip
            </div>
        </div>
        <div class="layar-dalam">
            <div class="copyright">&copy; 2025 Trip.DWK</div>
        </div>
    </footer>

    <script src="javascript.js"></script>
</body>
</html>