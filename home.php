<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KELOMPOK_4_D(2023)</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/5113081a10.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <a href="#" class="left-nav">
            <h3>H<i class="fas fa-hotel"></i>TEL KITA</h3>
        </a>
        <div class="right-nav">
            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>
        </div>
    </nav>

    <main>
        <!-- Bagian Form Reservasi Atau Pemesanan -->
        <div class="pencarian">
            <div class="judul">
                <h2>Form Reservasi Online</h2>
            </div>
            <form action="" name="fpencarian">
                <div class="input-pencarian">
                    <div>
                        <p>No ID</p>
                        <input type="number" name="iid" id="" autocomplete="off" placeholder="Nomor anda">
                    </div>
                    <div>
                        <p>Nama Lengkap</p>
                        <input type="text" name="inama" id="" autocomplete="off" placeholder="Nama anda">
                    </div>
                    <div>
                        <p>Tanggal Check-In</p>
                        <input type="date" name="itanggal" id="" autocomplete="off">
                    </div>
                    <div>
                        <p>Durasi</p>
                        <input type="number" name="idurasi" id="" autocomplete="off"
                            placeholder="Berapa               ?">
                        <span>malam</span>
                    </div>
                    <div>
                        <p>Jenis Kamar</p>
                        <select name="sjeniskamar" id="" autocomplete="off">
                            <option value="" class="kosong">Pilih kamar</option>
                            <Option value="Standard">Standard</Option>
                            <Option value="Deluxe">Deluxe</Option>
                            <Option value="Superior">Superior</Option>
                        </select>
                        <i class="fas fa-caret-down"></i>
                    </div>
                    <button class="hide-submit" type="submit" onclick="hasil()">
                        <i class="fas fa-equals"></i>
                    </button>
                </div>
                <button class="submit" type="submit" onclick="hasil()">
                    <i class="fas fa-equals"></i>
                </button>
            </form>
        </div>
        <!-- Bagian Jenis Kamar -->
        <div class="jenis-kamar">
            <div class="judul">
                <h2>Jenis Kamar</h2>
            </div>
            <div class="jenis-kamar-content">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <img src="Img/standard.jpg">
                        <div class="text">Standard</div>
                    </div>
                    <div class="mySlides fade">
                        <img src="Img/deluxe.jpg">
                        <div class="text">Deluxe</div>
                    </div>
                    <div class="mySlides fade">
                        <img src="Img/superior.jpg">
                        <div class="text">Superior</div>
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <!-- Bagian Lokasi -->
        <div class="lokasi">
            <div class="judul">
                <h2>Kami Berada Di</h2>
            </div>
            <div class="semua-lokasi">
                <div>
                    <img src="img/bandung.jpg" alt="">
                    <h3>Bandung</h3>
                    <span>100 Penginapan Tersedia</span>
                    <p>Pusat Kota</p>
                </div>
                <div>
                    <img src="img/jogja.jpg" alt="">
                    <h3>Jogja</h3>
                    <span>100 Penginapan Tersedia</span>
                    <p>Pusat Kota</p>
                </div>
                <div>
                    <img src="img/bali.jpg" alt="">
                    <h3>Bali</h3>
                    <span>100 Penginapan Tersedia</span>
                    <p>Pusat Kota</p>
                </div>
                <div>
                    <img src="img/malang.jpg" alt="">
                    <h3>Malang</h3>
                    <span>100 Penginapan Tersedia</span>
                    <p>Pusat Kota</p>
                </div>
                <div>
                    <img src="img/bogor.jpg" alt="">
                    <h3>Bogor</h3>
                    <span>100 Penginapan Tersedia</span>
                    <p>Pusat Kota</p>
                </div>
                <div>
                    <img src="img/surabaya.jpg" alt="">
                    <h3>Surabaya</h3>
                    <span>100 Penginapan Tersedia</span>
                    <p>Pusat Kota</p>
                </div>
                <div>
                    <img src="img/semarang.jpg" alt="">
                    <h3>Semarang</h3>
                    <span>100 Penginapan Tersedia</span>
                    <p>Pusat Kota</p>
                </div>
                <div>
                    <img src="img/jakarta.jpg" alt="">
                    <h3>Jakarta</h3>
                    <span>100 Penginapan Tersedia</span>
                    <p>Pusat Kota</p>
                </div>
                <div>
                    <img src="img/makassar.jpg" alt="">
                    <h3>Makassar</h3>
                    <span>100 Penginapan Tersedia</span>
                    <p>Pusat Kota</p>
                </div>
                <div>
                    <img src="img/solo.jpg" alt="">
                    <h3>Solo</h3>
                    <span>100 Penginapan Tersedia</span>
                    <p>Pusat Kota</p>
                </div>
                <div>
                    <img src="img/labuan bajo.jpg" alt="">
                    <h3>Labuan Bajo</h3>
                    <span>100 Penginapan Tersedia</span>
                    <p>Pusat Kota</p>
                </div>
                <div>
                    <img src="img/raja ampat.jpg" alt="">
                    <h3>Raja Ampat</h3>
                    <span>100 Penginapan Tersedia</span>
                    <p>Pusat Kota</p>
                </div>

            </div>
        </div>
        <!-- Bagian Partner Pembayaran -->
        <div class="partner">
            <div class="judul">
                <h2>Partner Pembayaran</h2>
            </div>
            <div class="partner-content">
                <p class="partner-text">
                    Kami bekerja sama dengan beragam penyedia layanan pembayaran tepercaya

                </p>
                <div class="partner-logo">
                    <a href="#"><img src="img/bca.jpg" alt=""></a>
                    <a href="#"><img src="img/mandiri.png" alt=""></a>
                    <a href="#"><img src="img/bni.png" alt=""></a>
                    <a href="#"><img src="img/bri.jpg" alt=""></a>
                    <a href="#"><img class="visa" src="img/visa.png" alt=""></a>
                    <a href="#"><img src="img/atm bersama.jpg" alt=""></a>
                    <a href="#"><img src="img/prima.png" alt=""></a>
                    <a href="#"><img src="img/indomaret.png" alt=""></a>
                    <a href="#"><img src="img/alfamart.png" alt=""></a>
                    <a href="#"><img src="img/alfamidi.jpg" alt=""></a>
                </div>
            </div>
        </div>
        <!-- Bagian Kenapa Kami -->
        <div class="kelebihan">
            <div class="judul">
                <h2>Kenapa Kami</h2>
            </div>
            <div class="kelebihan-content">
                <div>
                    <i class="fas fa-concierge-bell"></i>
                    <h3>Layanan Terbaik</h3>
                </div>
                <div>
                    <i class="fas fa-money-bill-wave"></i>
                    <h3>Harga Kompetitif</h3>
                </div>
                <div>
                    <i class="fas fa-money-check"></i>
                    <h3>Berbagai Pemilihan Pembayaran</h3>
                </div>
                <div>
                    <i class="fas fa-user-shield"></i>
                    <h3>Aman & Terpercaya</h3>
                </div>
                <div>
                    <i class="fas fa-tags"></i>
                    <h3>Diskon Menarik</h3>
                </div>
            </div>
        </div>
    </main>

    <!-- Bagian Footer -->
    <footer>
        <h2>Kontak Kami</h2>
        <div>
            <div class="footer-btn">
                <a href="kelompok/index.html"><button class="about">TENTANG KELOMPOK 4</button></a>
            </div>
            <a href="#">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
                <i class="fab fa-google"></i>
            </a>
            <a href="#">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="#">
                <i class="fab fa-instagram"></i>
            </a>

        </div>
        <hr>

    </footer>

    <!-- Button untuk Auto Scroll -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <i class="fas fa-angle-up"></i>
    </button>

    <script>

        mybutton = document.getElementById("myBtn");


        window.onscroll = function () { scrollFunction() };
        function scrollFunction() {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }


        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }


        var slideIndex = 1;
        showSlides(slideIndex);


        function plusSlides(n) {
            showSlides(slideIndex += n);
        }


        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }


        function hasil() {
            var id = document.fpencarian.iid.value;
            var nama = document.fpencarian.inama.value;
            var tanggal = document.fpencarian.itanggal.value;
            var durasi = parseFloat(document.fpencarian.idurasi.value);
            var jkamar = document.fpencarian.sjeniskamar.value;

            var harga_kamar = "";
            var total_harga = "";

            if (jkamar == "Standard") {
                harga_kamar = "Rp. 200.000,00";
                total_harga = Math.round(durasi * 200);
            }
            else if (jkamar == "Deluxe") {
                harga_kamar = "Rp. 400.000,00";
                total_harga = Math.round(durasi * 400);
            }
            if (jkamar == "Superior") {
                harga_kamar = "Rp. 600.000,00";
                total_harga = Math.round(durasi * 600);
            }

            alert(
                "No ID: " + id + "\nNama: " + nama +
                "\nTanggal Check-In: " + tanggal + "\nDurasi: " + durasi + " malam" +
                "\nJenis Kamar: " + jkamar + "\nHarga Kamar: " + harga_kamar +
                "\n\nTotal biaya yang harus anda keluarkan adalah sebesar" +
                "\nRp. " + total_harga + ".000,00"
            );

        }
    </script>
</body>

</html>