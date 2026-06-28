<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facial Treatment</title>
    <link rel="stylesheet" href="../salon/services/facial.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <section id="banner">
        <!-- Tombol kembali -->
        <a href="<?= base_url('/')?>" class="back-button">
            <i class="fa fa-arrow-left"></i> Back
        </a>
        
        <div class="banner-text">
            <h1>Facial Treatment</h1>
            <p>Facial Treatment adalah perawatan wajah yang dirancang untuk membersihkan, melembapkan, dan memperbaiki kondisi kulit, menjadikannya tampak lebih segar, sehat, dan bercahaya. Perawatan ini mencakup beberapa tahap mulai dari pembersihan mendalam, eksfoliasi, pemijatan, hingga masker yang disesuaikan dengan kebutuhan kulit Anda. Facial Treatment membantu mengangkat sel kulit mati, menghidrasi kulit, serta meredakan tanda-tanda kelelahan atau stres. Sangat cocok bagi Anda yang ingin menjaga kulit tetap sehat dan merawat diri dengan pengalaman relaksasi yang menyenangkan.</p>
        </div>
        </section>
    
        <section class="services-pricelist-section">
            <div class="services">
                <div class="service-item">
                    <h2>Classic Manicure</h2>
                    <p class="duration">(45 Min)</p>
                    <p>Perawatan dasar untuk kuku tangan yang meliputi pembersihan, pemotongan, dan pemolesan untuk kuku yang bersih dan rapi.</p>
                </div>
                <div class="service-item">
                    <h2>Classic Pedicure</h2>
                    <p class="duration">(60 Min)</p>
                    <p>Perawatan dasar untuk kuku kaki dengan pembersihan, pemotongan, dan pemolesan agar kuku tampak bersih dan sehat.</p>
                </div>
                <div class="service-item">
                    <h2>Gel Manicure</h2>
                    <p class="duration">(60 Min)</p>
                    <p>Manicure menggunakan gel khusus yang tahan lama, memberikan hasil kilap yang indah dan tahan lama hingga beberapa minggu.</p>
                </div>
                <div class="service-item">
                    <h2>Gel Pedicure</h2>
                    <p class="duration">(75 Min)</p>
                    <p>Pedicure dengan gel tahan lama yang membuat kuku kaki tampak cantik dan berkilau, serta tahan lama.</p>
                </div>
                <div class="service-item">
                    <h2>Spa Manicure</h2>
                    <p class="duration">(60 Min)</p>
                    <p>Manicure lengkap dengan tambahan scrub dan pelembab untuk tangan yang lebih halus dan terawat.</p>
                </div>
                <div class="service-item">
                    <h2>Spa Pedicure</h2>
                    <p class="duration">(75 Min)</p>
                    <p>Pedicure lengkap yang dilengkapi dengan scrub dan pelembab untuk kaki yang lembut dan segar.</p>
                </div>
                <div class="service-item">
                    <h2>French Manicure</h2>
                    <p class="duration">(50 Min)</p>
                    <p>Manicure gaya klasik dengan ujung kuku berwarna putih, memberikan kesan elegan dan bersih pada kuku Anda.</p>
                </div>
                <div class="service-item">
                    <h2>French Pedicure</h2>
                    <p class="duration">(65 Min)</p>
                    <p>Pedicure klasik dengan ujung kuku kaki berwarna putih, memberikan tampilan yang elegan dan bersih.</p>
                </div>
            </div>
        
            <!-- Pricelist -->
            <div class="pricelist">
                <h2>Pricelist</h2>
                <p>Classic Manicure (45 Min): Rp150,000</p>
                <p>Classic Pedicure (60 Min): Rp180,000</p>
                <p>Gel Manicure (60 Min): Rp250,000</p>
                <p>Gel Pedicure (75 Min): Rp300,000</p>
                <p>Spa Manicure (60 Min): Rp200,000</p>
                <p>Spa Pedicure (75 Min): Rp250,000</p>
                <p>French Manicure (50 Min): Rp180,000</p>
                <p>French Pedicure (65 Min): Rp220,000</p>
            </div>
        </section>        
        
    <!-- Gallery -->
    <section class="gallery-section">
        <h2>Gallery</h2>
        <div class="gallery">
            <img src="../salon/services/image16.jpg">
            <img src="../salon/services/image17.jpeg">
            <img src="../salon/services/image18.jpeg">
            <img src="../salon/services/image19.jpg">
            <img src="../salon/services/image20.avif">
        </div>
    </section>
    
        
    <!-- Footer Kecil -->
<section id="footer">
    <div class="footer-content">
        <div class="footer-text">
            <p>© 2024 Elisya Salon. All rights reserved.</p>
        </div>
        <div class="social-links">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube-play"></i>
        </div>
    </div>
</section>

<script>
    // Ambil semua elemen dengan kelas 'service-item'
    const serviceItems = document.querySelectorAll('.service-item');

    // Fungsi untuk menambahkan kelas 'visible'
    function showServiceItems() {
        serviceItems.forEach((item, index) => {
            console.log(`Menambahkan kelas visible ke item ${index}`); // Log untuk debugging
            setTimeout(() => {
                item.classList.add('visible');
            }, index * 200); // Ganti 200 dengan angka yang lebih tinggi untuk penundaan lebih lama
        });
    }

    // Jalankan fungsi saat halaman dimuat
    window.onload = showServiceItems;
</script>


</body>
</html>
