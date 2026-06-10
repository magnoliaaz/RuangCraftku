<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RuangCraftku</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- HEADER -->
    <header class="top-header py-3">
        <div class="container">
            <div class="row align-items-center g-3">

                <!-- Logo -->
                <div class="col-lg-3 col-md-12 text-center text-lg-start">
    <a href="#beranda">
        <img src="{{ asset('assets/images/logo.png') }}"
             alt="RuangCraftku"
             class="logo-img">
    </a>
</div>

                <!-- Search -->
                <div class="col-lg-5 col-md-8">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari...">
                        <button class="btn btn-search">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </div>

                <!-- Login & Cart -->
                <div class="col-lg-4 col-md-4">
                    <div class="d-flex justify-content-center justify-content-lg-end gap-3">

                        <a href="#" class="btn btn-login">
                            <i class="bi bi-person"></i>
                            Login/Daftar
                        </a>

                        <a href="#" class="cart-icon">
                            <i class="bi bi-cart3"></i>
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </header>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">

            <button class="navbar-toggler bg-white"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a class="nav-link active" href="#beranda">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#kategori">Kategori</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#produk">Produk</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang Kami</a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>

    <!-- HERO -->
    <section id="beranda" class="hero">
        <div class="container-fluid p-0">

            <img
                src="{{ asset('assets/images/banner.png') }}"
                alt="Hero Banner"
                class="img-fluid w-100 hero-image">

        </div>
    </section>

    <!-- KATEGORI -->
    <section id="kategori" class="kategori py-5">
        <div class="container">

            <h2 class="section-title mb-4">Kategori</h2>

            <div class="row g-4">

                <div class="col-lg-3 col-md-6">
    <div class="kategori-card pola">
        <img src="{{ asset('assets/images/tulip.png') }}"
             alt="Pola"
             class="kategori-icon">
        <span>Pola</span>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="kategori-card kain">
        <img src="{{ asset('assets/images/kain.png') }}"
             alt="Kain"
             class="kategori-icon">
        <span>Kain</span>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="kategori-card alat">
        <img src="{{ asset('assets/images/benang.png') }}"
             alt="Alat & Bahan"
             class="kategori-icon">
        <span>Alat & Bahan</span>
    </div>
</div>

                <div class="col-lg-3 col-md-6">
                    <div class="kategori-card craft">
                        <i class="bi bi-handbag"></i>
                        <span>Produk Craft</span>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- PRODUK -->
    <section id="produk" class="produk py-5">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="section-title mb-0">Produk</h2>
        </div>

        <div class="row g-4">

            @foreach($products as $product)

                <div class="col-lg-4 col-md-6">

                    <div class="card produk-card h-100">

                        <img
                            src="{{ asset('assets/images/' . $product->photo) }}"
                            class="card-img-top"
                            alt="{{ $product->name }}">

                        <div class="card-body d-flex flex-column">

                            <h5>{{ $product->name }}</h5>

                            <div class="harga mb-3">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </div>

                            <button
                                class="btn btn-detail w-100 mt-auto"
                                data-bs-toggle="modal"
                                data-bs-target="#detailProdukModal">

                                Lihat Detail

                            </button>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>

    <!-- TENTANG -->
    <section id="tentang" class="why-us py-5">
        <div class="container">

            <div class="why-wrapper">

                <h2 class="why-title text-center mb-5">
                    Kenapa Memilih RuangCraftku?
                </h2>

                <div class="row text-center g-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="why-item">
                            <div class="icon-circle icon-blue">
                                <i class="bi bi-check-lg"></i>
                            </div>

                            <h5>Pola Lengkap & Jelas</h5>

                            <p>
                                Disertai ukuran dan petunjuk
                                yang mudah dipahami
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="why-item">
                            <div class="icon-circle icon-pink">
                                <i class="bi bi-download"></i>
                            </div>

                            <h5>Download Instan</h5>

                            <p>
                                Langsung dapat diunduh
                                setelah pembayaran
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="why-item">
                            <div class="icon-circle icon-green">
                                <i class="bi bi-printer"></i>
                            </div>

                            <h5>Bisa di-Print</h5>

                            <p>
                                Pola dapat dicetak kapan saja
                                sesuai kebutuhan
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="why-item">
                            <div class="icon-circle icon-purple">
                                <i class="bi bi-chat-dots"></i>
                            </div>

                            <h5>Bantuan dan Support</h5>

                            <p>
                                Kami siap membantu jika
                                terdapat kendala
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer py-5">
        <div class="container">

            <div class="row g-4 align-items-start">

                <div class="col-lg-8">
                    <h4 class="footer-logo">
                        <img src="{{ asset('assets/images/logow.png') }}"
     alt="RuangCraftku"
     class="logo-img">
                    </h4>

                    <p>
                        RuangCraftku menyediakan pola jahit digital,
                        kain, alat & bahan menjahit, serta berbagai
                        produk craft untuk membantu para pecinta
                        kerajinan tangan berkreasi dengan lebih mudah.
                    </p>
                </div>

                <div class="col-lg-4">

                    <h4>Follow Us</h4>

                    <p>
                        Ikuti media sosial kami untuk mendapatkan
                        informasi produk terbaru, promo menarik,
                        dan inspirasi craft.
                    </p>

                    <div class="social-links d-flex flex-wrap align-items-center gap-3">

    <a href="https://www.facebook.com/ruangcraftkuu/"
       target="_blank">
        <i class="bi bi-facebook"></i>
    </a>

    <a href="https://www.instagram.com/ruangcraftku_official/"
       target="_blank">
        <i class="bi bi-instagram"></i>
    </a>

    <a href="https://www.youtube.com/@ruangcraftkuofficial"
       target="_blank">
        <i class="bi bi-youtube"></i>
    </a>

    <a href="https://wa.me/c/628561793405"
       target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>

</div>
                </div>

            </div>

            <hr>

            <div class="text-center">
                © 2026 RuangCraftku. All Rights Reserved.
            </div>

        </div>
    </footer>

    <!-- MODAL DETAIL PRODUK -->
    <div class="modal fade" id="detailProdukModal" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content detail-modal">

                <button
                    type="button"
                    class="modal-close-btn"
                    data-bs-dismiss="modal">

                    <i class="bi bi-x-lg"></i>

                </button>

                <div class="modal-body">

                    <div class="row g-4">

                        <!-- Thumbnail -->
                        <div class="col-lg-2">

                            <div class="thumbnail-wrapper">

                                <img
                                    src="{{ asset('assets/images/produk.jpg') }}"
                                    class="thumbnail-img active-thumb">

                                <img
                                    src="{{ asset('assets/images/produk.jpg') }}"
                                    class="thumbnail-img">

                                <img
                                    src="{{ asset('assets/images/produk.jpg') }}"
                                    class="thumbnail-img">

                            </div>

                        </div>

                        <!-- Main Image -->
                        <div class="col-lg-5">

                            <img
                                src="{{ asset('assets/images/produk.jpg') }}"
                                class="img-fluid main-product-img"
                                id="mainImage">

                        </div>

                        <!-- Detail -->
                        <div class="col-lg-5">

                            <h2 class="product-title">
                                Pola Jahit Bagian A
                            </h2>

                            <h3 class="product-price">
                                Rp 30.000
                            </h3>

                            <p class="product-desc">
                                Buku tutorial digital berisi pola
                                dan panduan lengkap untuk membuat
                                pola jahit bagian A.
                            </p>

                            <button class="btn btn-cart-modal mt-4">
                                Tambahkan ke Keranjang
                            </button>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const thumbs = document.querySelectorAll('.thumbnail-img');
            const mainImage = document.getElementById('mainImage');

            thumbs.forEach(img => {
                img.addEventListener('click', () => {

                    mainImage.src = img.src;

                    thumbs.forEach(t => {
                        t.classList.remove('active-thumb');
                    });

                    img.classList.add('active-thumb');
                });
            });

        });
    </script>

    
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>