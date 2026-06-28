<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Elisya Hair and Spa Salon</title>
        <link rel="stylesheet" href="../salon/styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
    
    <!---HOME-->
    <section id="banner">
        <nav class="navbar">
            <div class="logo">
                <img src="salon/gambar/apt.png" alt="Logo"> 
            </div>
            <ul class="nav-links">
                <li><a href="#banner">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Our Services</a></li>
                <li><a href="#testimonial">Testimonials</a></li>
                <li><a href="#footer">Contact</a></li>
            </ul>
        </nav>  
        <div class="banner-text">
        <?php if (isset($_SESSION['user']) && $_SESSION['user']['isLoggedIn']): ?>
                <h1>Welcome, <?= esc($_SESSION['user']['username']) ?>!</h1>
                <div class="banner-btn">
                    <a href="<?= base_url('/reservation') ?>" class="btn">
                        <span></span> Reservation
                    </a>
                </div>
                <div class="banner-btn">
                    <a href="<?= base_url('/logout') ?>" class="btn">Logout</a>
                </div>
                
            <?php else: ?>

                <h1>Elisya's <br> Hair and Spa Salon</h1> <br>
                <p>Beautiful Hair, Perfect Skin, All in One Place!</p>
                <p>Scroll down for further details</p>
                <div class="banner-btn">
                    <a href="<?= base_url('/login') ?>"><span></span> Login for Reservation </a>
                </div>
             
            <?php endif; ?>
        </div>
    </section>

<!---ABOUT-->
    <section id="about">
        <div class="title-text">
            <p> About Us </p>
            <h1>Why Choose Us</h1>
        </div>
        <div class="about-box">
            <div class="abouts">
                <h1>Experienced Staff</h1>
                <div class="abouts-desc">
                    <div class="abouts-text">
                        <p>All staff members in our salon are certified competent in make up, hair do, and nail art.</p>
                    </div>
                </div>
                <h1>High Quality Products</h1>
                <div class="abouts-desc">
                    <div class="abouts-text">
                        <p>Our salon ensures that all beauty products used have passed lab tests and are legal to use and of high quality.</p>
                    </div>
                </div>
                <h1>Affordable Price</h1>
                <div class="abouts-desc">
                    <div class="abouts-text">
                        <p>The prices offered are available in various packages. You can customize it according to your needs.</p>
                    </div>
                </div>
            </div>
            <div class="abouts-img">
                <img src="salon/gambar/cas.jpg" alt="Treatment">
            </div>
        </div>
    </section>  

<!---SERVICE-->
    <section id="services">
        <div class="title-text">
            <p> Our Services </p>
            <h1> What We Offer </h1>
        </div>
        <div class="services-box">
            <div class="single-service">
                <img src="salon/gambar/haircut.png" width="300" height="300">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3></a>Hair Styling</h3><br>
                    <hr> <br>
                    <p><a href="<?= base_url('service/hairStyling') ?>">Click here<br>for further details</a></p>
                </div>
            </div>
            <div class="single-service">
                <img src="salon/gambar/hair-coloring.jpg" width="300" height="300">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Hair Coloring</h3><br>
                    <hr> <br>
                    <p><a href="<?= base_url('service/hairColoring') ?>">Click here<br>for further details</a></p>
                </div>
            </div>
            <div class="single-service">
                <img src="salon/gambar/spa.jpg" width="300" height="300">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Spa Treatment</h3><br>
                    <hr> <br>
                    <p><a href="<?= base_url('service/spa') ?>">Click here<br>for further details</a></p>
                </div>
            </div>
            <div class="single-service">
                <img src="salon/gambar/facial.jpg" width="300" height="300">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Facial Treatments</h3><br>
                    <hr> <br>
                    <p><a href="<?= base_url('service/facial') ?>">Click here<br>for further details</a></p>
                </div>
            </div>
            <div class="single-service">
                <img src="salon/gambar/nail-art.jpg" width="300" height="300">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Manicure and Pedicure</h3><br>
                    <hr> <br>
                    <p><a href="<?= base_url('service/manipedi') ?>">Click here<br>for further details</a></p>
                </div>
            </div>
            <div class="single-service">
                <img src="salon/gambar/makeup.jpg" width="300" height="300">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Make Up</h3><br>
                    <hr> <br>
                    <p><a href="<?= base_url('service/makeup') ?>">Click here<br>for further details</a></p>
                </div>
            </div>
            <div class="single-service">
                <img src="salon/gambar/nailart2.jpg" width="300" height="300">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Nail Art</h3><br>
                    <hr> <br>
                    <p><a href="<?= base_url('service/nailart') ?>">Click here<br>for further details</a></p>
                </div>
            </div>
            <div class="single-service">
                <img src="salon/gambar/waxing.jpg" width="300" height="300">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Waxing Treatment</h3><br>
                    <hr> <br>
                    <p><a href="<?= base_url('service/waxing') ?>">Click here<br>for further details</a></p>
                </div>
            </div>
        </div>
        </section>

<!---Testimonieee-->
    <section id="testimonial">
        <div class="title-text">
        <p> Testimonials </p>
        <h1> What Client Says </h1>
        </div>
        <div class="testimonial-row">
            <div class="testimonial-col">
                <div class="user">
                    <img src="salon/gambar/karina.jpg">
                    <div class="user-info">
                        <h4>Yoo Jimin "Karina"</h4>
                        <small>@katarinabluu</small>
                    </div>
                </div>
                <p>Annyeonghaseyo yeorobun~ Apa kabareu? Jadi naneun mau ngasih
                kalian rekomendasi buat treatment di salon Elisya! Treatmentnya jinjja neomu
                baguss banget guys! Gak akan nyesel deh. Jangan lupa buat tratment di sini ya~
                Kunjungin Elisya salon sekarang guys!!~~
                </p>
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="salon/gambar/xaviera.jpg">
                    <div class="user-info">
                        <h4>Xaviera Putri</h4>
                        <small>@xavieraaputri</small>
                    </div>
                </div>
                <p>Hai all! Aku adalah salah satu pelanggan yang sering banget
                ke salon ini. Pelayanannya ramah banget! Produk yg digunain juga super
                lengkap dan buagus banget. Jangan lupa ya buat cobain semua treatmentnya.
                Any treatment will be all worth it guys, trust me!
                </p>
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="salon/gambar/emma.jpg">
                    <div class="user-info">
                        <h4>Emma Watson</h4>
                        <small>@emmawatson</small>
                    </div>
                </div>
                <p>Hi guys! It's Emma here. Aku seneng banget bisa berkesempatan buat jadi pelanggan
                di salon Elisya ini. Treatmentnya gak main-main guys.
                Di sini juga banyak pilihannya, super duper lengkap. Aku rekomendasiin banget salon ini
                buat kamu yang pengen treatment lengkap sat-set yang gak perlu cari beda-beda tempat.
                Di sini udah lengkap!
                </p>
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="salon/gambar/ningning.jpg">
                    <div class="user-info">
                        <h4>Ning Yizhuo "Ningning"</h4>
                        <small>@imnotningning</small>
                    </div>
                </div>
                <p>Halo semua! Aku Ningning dari Aespa~ Aku mau kasih tau kalian salon terbaik di kota: Elisya Hair and Nail Salon!
                Mereka punya treatment yang benar-benar bikin rambutku jadi halus dan glowing banget. Staffnya ramah banget, bikin nyaman kayak di rumah sendiri.
                Buat kalian yang pengen tampil beda, cobain treatment di Elisya ya! Pasti suka banget!
                </p>
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="salon/gambar/winter.jpg">
                    <div class="user-info">
                        <h4>Winter Aespa</h4>
                        <small>@imwinter</small>
                    </div>
                </div><p>Annyeong~ Aku Winter! Aku mau share experienceku setelah treatment di Elisya Salon.
                Dari styling, sampai perawatan rambut di sini semuanya terasa profesional banget! Hasilnya juga memuaskan. Buat kalian yang mau refresh penampilan,
                Elisya salon adalah pilihan yang tepat! Pasti puas deh!"
                </p>
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="salon/gambar/aeri.jpg">
                    <div class="user-info">
                        <h4>Giselle Aespa</h4>
                        <small>@aeriuchinaga</small>
                    </div>
                </div><p>Hi everyone! Giselle here~ Aku udah coba beberapa salon, tapi Elisya Hair and Nail Salon bener-bener beda banget!
                Mereka super teliti, dan hasilnya gak main-main! Rambut dan kukuku bener-bener terasa fresh setelah treatment di sini.
                Kalian wajib coba deh! Thank me later, okay?
                </p>
            </div>
        </div>
    </section>

<!---Footer yeay-->
    <section id="footer">
        <img src="salon/gambar/apt.png" class="footer-img">
        <div class="title-text">
            <p>Contact</p>
            <h1>Visit Us Now</h1>
        </div>
        <div class="footer-row">
            <div class="footer-left">
                <h1>Opening Hours</h1>
                <p><i class="fa fa-clock-o"></i> Monday to Friday - 9 AM to 9 PM</p>
                <p><i class="fa fa-clock-o"></i> Saturday to Sunday - 10 AM to 11 PM</p>
            </div>
            <div class="footer-right">
                <h1>Get In Touch</h1>
                <p><i class="fa fa-map-marker"></i> Jalan Bangau No. 42, 9 Ilir, Ilir Timur II, Kota Palembang</p>
                <p><i class="fa fa-paper-plane"></i> elisyasalon@website.com</p>
                <p><i class="fa fa-phone"></i> 021-998-002</p>
                <div class="map-container" style="text-align:right; margin-top: 20px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5855.450352466513!2d104.76428150516853!3d-2.966978394716381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b766fb912cb11%3A0x310a3e56bb041ee!2sJl.%20Bangau%20No.42%2C%209%20Ilir%2C%20Kec.%20Ilir%20Tim.%20II%2C%20Kota%20Palembang%2C%20Sumatera%20Selatan%2030114!5e0!3m2!1sid!2sid!4v1730647232102!5m2!1sid!2sid" 
                        width="200" 
                        height="150" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
        <div class="social-links">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube-play"></i>
        </div>
    
    </section>


<script>

// Reveal animation pada setiap elemen .title-text saat di-scroll
const reveals = document.querySelectorAll('.title-text');

function reveal() {
    reveals.forEach((reveal) => {
        const windowHeight = window.innerHeight;
        const revealTop = reveal.getBoundingClientRect().top;
        const revealPoint = 150;

        if (revealTop < windowHeight - revealPoint) {
            reveal.classList.add('active'); // Menambahkan class active jika elemen terlihat
        } else {
            reveal.classList.remove('active'); // Menghilangkan class active jika elemen tidak terlihat
        }
    });
}

window.addEventListener('scroll', reveal);

// Smooth scroll untuk link navbar
document.querySelectorAll('.nav-links a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
            e.preventDefault();
        const targetId = this.getAttribute('href');
        document.querySelector(targetId).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

</script>

    </body>
</html>