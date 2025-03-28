<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Green</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    :root {
        --primary-color: #28a745;
        --secondary-color: #218838;
        --dark-color: #343a40;
        --light-color: #f8f9fa;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        scroll-behavior: smooth;
    }

    .navbar {
        background-color: rgba(61, 97, 77, 0.34);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
         !important;

    }

    .navbar-brand {
    font-weight: 700;
    color: var(--primary-color) !important;
    font-size: 1.5rem;    
    display: flex;
    align-items: center;
    gap: 8px;
    opacity: 0;
    transform: translateY(-20px);
    animation: fadeIn 1s forwards, floating 3s infinite ease-in-out;
    }

    @keyframes fadeIn {
    to {
        opacity: 1;
        transform: translateY(0);
       }
    }

    @keyframes floating {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-5px); }
    100% { transform: translateY(0px); }
    }

    .logo-icon {
    font-size: 40px;
    animation: rotateLeaf 4s infinite linear;
    }  
    

    .hero-section {
        background-image:url('https://p4.wallpaperbetter.com/wallpaper/24/26/453/5bd369b43ba6a-wallpaper-preview.jpg');
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 100%;
        color: white;
        padding: 150px 0;
        text-align: center;
    }

    .section-title {
        position: relative;
        margin-top: -30px;
        margin-bottom: 50px;
        font-weight: 700;
        color: var(--dark-color);
    }

    .section-title::after {
        content: '';
        position: absolute;
        left: 50%;
        bottom: -15px;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background-color: var(--primary-color);
    }

    .about-section {
        padding: 100px 0;
        background-color: var(--light-color);
    }

    .company-carousel {
        padding: 80px 0;
    }

    .carousel-item img {
        height: 500px;
        object-fit: cover;
        border-radius: 10px;
    }

    .testimonial-section {
        padding: 100px 0;
        background-color: var(--dark-color);
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: white;
    }

    .testimonial-card {
        background-color: rgb(183, 246, 187);
        border-radius: 10px;
        padding: 30px;
        color: var(--dark-color);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        margin: 15px;
        height: 100%;
    }

    .testimonial-img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid var(--primary-color);
        margin-bottom: 15px;
    }

    .rating {
        color: #ffc107;
        margin-bottom: 15px;
    }

    .about-feature {
        margin-top: -150px;
        margin-right: 10px;
        padding: 100px 0;
        background-color: var(--light-color);
    }

    .feature-box {
        width: 250px;
        height: 250px;
        text-align: center;
        padding: 30px 20px;
        border-radius: 10px;
        transition: all 0.3s ease;
        margin-bottom: 30px;
        background-color: white;
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.05);
    }

    .feature-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .feature-icon {
        font-size: 2.5rem;
        color: var(--primary-color);
        margin-bottom: 20px;
    }

    footer {
        background-color: var(--dark-color);
        color: white;
        padding: 70px 0 0;
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: all 0.3s ease;
        display: block;
        margin-bottom: 10px;
    }

    .footer-links a:hover {
        color: white;
        padding-left: 5px;
    }

    .social-icons a {
        display: inline-block;
        width: 40px;
        height: 40px;
        background-color: rgba(255, 255, 255, 0.1);
        color: white;
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        margin-right: 10px;
        transition: all 0.3s ease;
    }

    .social-icons a:hover {
        background-color: var(--primary-color);
        transform: translateY(-3px);
    }

    .copyright {
        background-color: rgba(0, 0, 0, 0.2);
        padding: 20px 0;
        margin-top: 50px;
    }
    </style>
</head>

<body>


    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">"Bergerak Hijau, Masa Depan Cerah!"</h1>
            <p class="lead mb-5">World Green Menciptakan Solusi Hijau yang Membawa Dampak Positif Bagi Bumi dan Generasi Mendatang</p>
            <a href="#about" class="btn btn-outline-light btn-lg">Tentang Kami</a>
            <a href="#contact" class="btn btn-outline-light btn-lg">Kontak Kami</a>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="container">
            <h2 class="text-center section-title">Tentang World Green</h2>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" style="margin-top: 10px;">
                    <img src="https://awsimages.detik.net.id/community/media/visual/2022/09/22/ilustrasi-legalitas-perusahaan_169.jpeg?w=600&q=90"
                        alt="Tentang World Green" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">Misi Kami untuk Lingkungan yang Lebih Baik</h3>
                    <p>World Green adalah perusahaan yang berdedikasi untuk menciptakan solusi ramah lingkungan yang mendukung keberlanjutan planet ini. Kami berkomitmen untuk menyediakan produk dan layanan inovatif yang mengurangi dampak lingkungan, sekaligus memberikan manfaat jangka panjang bagi masyarakat.</p>
                    <p>Di World Green, kami percaya bahwa setiap langkah kecil menuju keberlanjutan memiliki dampak besar bagi masa depan bumi. Kami berfokus pada pengembangan teknologi hijau, penggunaan energi terbarukan, pengelolaan limbah yang bertanggung jawab, serta menawarkan produk daur ulang dan ramah lingkungan kepada pelanggan kami. Dengan mendukung gaya hidup yang lebih hijau, kami bertujuan untuk memberdayakan masyarakat untuk mengambil tindakan nyata dalam menjaga kelestarian alam.</p>
                </div>
            </div>
        </div>
    </section>             
    <section class="about-feature"> 
    <div class="container"> 
        <div class="row mt-4 justify-content-center"> 
            <div class="col-md-3 mb-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h4>Berkelanjutan</h4>
                    <p>Solusi yang mendukung kelestarian lingkungan untuk generasi mendatang</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h4>Inovatif</h4>
                    <p>Teknologi terbaru untuk efisiensi energi dan pengelolaan sumber daya</p>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Company Carousel -->
    <section class="company-carousel" id="company">
        <div class="container">
            <h2 class="text-center section-title">Galeri Perusahaan</h2>
            <div id="companyCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#companyCarousel" data-bs-slide-to="0"
                        class="active"></button>
                    <button type="button" data-bs-target="#companyCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#companyCarousel" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://foto.kontan.co.id/9meU82hQPYFoPhj9VGGG7jx25Zw=/smart/2020/01/16/580843565p.jpg"
                            class="d-block w-100" alt="Fasilitas World Green">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                            <h5>Fasilitas Produksi Ramah Lingkungan</h5>
                            <p>Pabrik kami menggunakan 100% energi terbarukan dengan sistem daur ulang air terintegrasi
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/78/2024/01/26/JAUU-2403679441.jpg"
                            class="d-block w-100" alt="Tim World Green">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                            <h5>Tim Profesional yang Berdedikasi</h5>
                            <p>Lebih dari 200 ahli lingkungan bekerja untuk menciptakan solusi berkelanjutan</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://asset.kompas.com/crops/hmWyzIWuLU5tPI0-Nj18kHNR-Vg=/20x0:800x520/780x390/data/photo/2020/03/10/5e671d84f0218.jpg"
                            class="d-block w-100" alt="Proyek World Green">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                            <h5>Proyek Penghijauan Global</h5>
                            <p>Kami telah menanam lebih dari 1 juta pohon di 15 negara berbeda</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#companyCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#companyCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section" id="testimonial">
        <div class="container">
            <h2 class="text-center section-title text-white">Testimoni Pelanggan Kami</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <img src="https://yt3.googleusercontent.com/RjGigjjU1TSp498mvk9ofqvXOROgkYzPcmY_pptsuMb5AQ_TG-9tAb-Hcu1lemU34DmC_5-5kcU=s900-c-k-c0x00ffffff-no-rj" alt="Testimoni 1"
                            class="testimonial-img mx-auto d-block">
                        <div class="rating text-center">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-center">"Saya sangat terkesan dengan komitmen World Green terhadap keberlanjutan. Mereka tidak hanya menawarkan produk ramah lingkungan, tetapi juga memberikan edukasi yang penting tentang bagaimana kita bisa ikut serta dalam menjaga bumi. Produk yang mereka tawarkan berkualitas tinggi dan benar-benar mendukung gaya hidup lebih hijau. Saya merasa lebih baik menggunakan produk dari mereka, karena saya tahu mereka berfokus pada masa depan yang lebih baik untuk generasi mendatang."</p>
                        <h5 class="text-center mt-3">Vina Muliana</h5>
                        <p class="text-muted text-center">HR Practitioner & Content Creator</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaEbz78UDWVfpWnHPbI8FUYVav-iAs9EscZg&s" alt="Testimoni 2"
                            class="testimonial-img mx-auto d-block">
                        <div class="rating text-center">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-center">"Saya sangat terkesan dengan inovasi yang dihadirkan oleh perusahaan ini. Produk mereka tidak hanya berkualitas tinggi, tetapi juga membantu mengurangi dampak negatif terhadap lingkungan. Ini adalah langkah nyata menuju dunia yang lebih hijau"</p>
                        <h5 class="text-center mt-3">Gerald Vincent</h5>
                        <p class="text-muted text-center">Content Creator</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjl7t-YPyjMR1P3kFRrTbWS0khFyBZXM0Jvw&s" alt="Testimoni 3"
                            class="testimonial-img mx-auto d-block">
                        <div class="rating text-center">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="text-center">"Sebagai perusahaan yang peduli terhadap energi berkelanjutan, saya sangat mengapresiasi solusi yang ditawarkan. Teknologi yang dikembangkan membantu kami mengurangi jejak karbon tanpa mengorbankan efisiensi. Sangat direkomendasikan bagi bisnis yang ingin beralih ke solusi hijau!."</p>
                        <h5 class="text-center mt-3">Cinta Laura Khiel</h5>
                        <p class="text-muted text-center">Model</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>