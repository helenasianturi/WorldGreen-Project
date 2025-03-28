<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorldGreen</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    :root {
        --primary-color: #2E8B57;
        --secondary-color: #3CB371;
        --light-color: #F8F9FA;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar {
        background-color: rgba(61, 97, 77, 0.34);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        
    }

    .navbar-brand {
        font-weight: 700;
        color: var(--primary-color) !important;
    }

    .hero-section {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://cdn1-production-images-kly.akamaized.net/YFN5__RPwKEcma1Nmpona5nZzwQ=/1200x900/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4701906/original/055763300_1703849366-sustainable-development-goals-still-life.jpg');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 100px 0;
        margin-bottom: 50px;
    }

    .product-card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        margin-bottom: 30px;
    }

    .product-card:hover {
        transform: translateY(-10px);
    }

    .product-img {
        height: 200px;
        object-fit: cover;
    }

    .badge-eco {
        background-color: var(--primary-color);
        color: white;
    }

    .price {
        color: var(--primary-color);
        font-weight: 700;
        font-size: 1.2rem;
    }

    .btn-eco {
        background-color: var(--primary-color);
        color: white;
    }

    .btn-eco:hover {
        background-color: var(--secondary-color);
        color: white;
    }

    .product-detail-img {
        border-radius: 10px;
        height: 400px;
        object-fit: cover;
    }

    footer {
        background-color: var(--primary-color);
        color: white;
        padding: 50px 0 0;
        margin-top: 50px;
    }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Produk Ramah Lingkungan</h1>
            <p class="lead">Temukan produk modern tanpa merusak lingkungan</p>
        </div>
    </section>

    <!-- Product Listing -->
    <section class="product-listing mb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-15">
                    <h2 class="text-center fw-bold">Produk Kami</h2>
                </div>
            </div>

            <div class="row">
                <!-- Product 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://asset.kompas.com/crops/e3OECWANSC0PhwCeCi2kcDov-_E=/68x48:948x634/1200x800/data/photo/2023/10/16/652d0b858d81f.jpg"
                            class="card-img-top product-img" alt="Deterjen">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Organik</span>
                            <h5 class="card-title">Deterjen organik (100ml)</h5>
                            <p class="card-text"> Deterjen yang dirancang untuk meminimalkan dampak negatif terhadap lingkungan.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp52.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://www.siu-bijiplastik.com/wp-content/uploads/2022/05/Plastik-Ramah-Lingkungan-S.jpg"
                            class="card-img-top product-img" alt="Plastik">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Daur Ulang</span>
                            <h5 class="card-title">Plastik Kantong (1 pcs)</h5>
                            <p class="card-text">Berasal dari singkong dan dapat terurai secara alami menjadi kompos ketika dibuang ke tanah. </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp5.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXdNIUoiAXUKZsmfo8D7IQriggDvUto1gYpfBWqMgkW-diHWbvjvBcyRb495KGyY3VlDelnrWLM4oJAtd3bSWz9JtGPZAK-sWs0i8WwLaZucZtJ39IiMxIMAxv_QIvynY0nPEikBVneYTDCI_eh5hA?key=vrZtzK_UylDJD11oGJE-A5Mi"
                            class="card-img-top product-img" alt="Cup coffe">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Organik</span>
                            <h5 class="card-title">Cup coffe (10 pcs)</h5>
                            <p class="card-text">Gelas kopi ramah lingkungan dari ampas tebu dapat didaur ulang atau terurai secara alami.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp35.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//97/MTA-7564074/oem_sedotan_bambu_go_green_kopi_boba_minuman_restaurant_cafe_usaha_murah_-_12_pcs_-_full01_lfbvl1qm.jpg"
                            class="card-img-top product-img" alt="Straw">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Organik</span>
                            <h5 class="card-title">Sedotan (10 pcs)</h5>
                            <p class="card-text">Sedotan ramah lingkungan dapat mengurangi dampak negatif sedotan plastik terhadap lingkungan, terutama lingkungan laut.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp20.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <!-- Product 5 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2020/3/11/83634357/83634357_074baa03-9ea9-471e-8483-35f776617ebf_2048_2048"
                            class="card-img-top product-img" alt="Kotak Makan">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Stainless Steal</span>
                            <h5 class="card-title">Kotak Makan (750ml)</h5>
                            <p class="card-text">Kotak makan yang dapat digunkan berkali-kali.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp250.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/7/13/14c3f20d-2b6f-4274-b5dc-c4c94c30ff48.jpg"
                            class="card-img-top product-img" alt="Sabun">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Organik</span>
                            <h5 class="card-title">Sabun organik (1 pcs)</h5>
                            <p class="card-text">Sabun tanpa deterjen yang aman untuk kulit sensitif.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp20.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://kaifacraft.com/wp-content/uploads/2024/09/WhatsApp-Image-2024-09-10-at-11.08.28-AM-2.jpeg"
                            class="card-img-top product-img" alt="Tas">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Daur ulang</span>
                            <h5 class="card-title">Tas goni (1 pcs)</h5>
                            <p class="card-text">Tas ramah lingkungan yang terbuat dari goni.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp105.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://soerabaja45.co.id/wp-content/uploads/2022/02/paperbag-size.jpg"
                            class="card-img-top product-img" alt="Paper bag">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Daur ulang</span>
                            <h5 class="card-title">Paper bang (1 pcs)</h5>
                            <p class="card-text">Paper bag ramah lingkungan dan dapat di daur ulang.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp10.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>



    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>