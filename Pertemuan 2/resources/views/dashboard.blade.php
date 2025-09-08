@extends('layouts.masters')
@section('title', 'Dashboard')
@section('content')
<div class="banner-container">
    <video autoplay loop muted playsinline id="bannerVideo">
        <source src="#" type="video/mp4">
        Browser Anda tidak mendukung tag video.
    </video>
    <div class="video-label">Welcome</div>
</div>

<section id="about" class="content-section about-us-section">
    <div class="container about-us-container">
        <div class="about-us-image-column">
            <div class="about-us-image-wrapper">
                <img src="#" alt="New York Cheesecake">
                <div class="image-label"></div>
            </div>
        </div>
        <div class="about-us-content-column">
            <div class="title-box about-us-title-box">
                ABOUT US
            </div>
            <p>Komunitas ini adalah wadah bagi para pecinta baking untuk berbagi, belajar, dan berkembang bersama. Kami percaya bahwa baking adalah seni yang menyenangkan dan bisa dinikmati semua orang. Mari temukan inspirasi dan resep terbaru di sini!</p>
            <p>Bergabunglah dengan kami untuk mengikuti berbagai kegiatan menarik, mulai dari workshop, demo masak, hingga tantangan baking bulanan.</p>
        </div>
    </div>
</section>

<section id="activities" class="content-section activities-overview-section">
    <div class="container">
        <h2 class="section-title activities-main-title">PILIH JENIS KEGIATAN KAMI</h2>
        <div class="activity-category-grid">
            <div class="activity-category-card">
                <img src="#" alt="Workshop Baking">
                <h3 class="activity-category-title">Workshop Baking</h3>
                <p class="activity-category-description">Pelajari teknik-teknik baking dari para ahli melalui workshop interaktif kami.</p>
            </div>
            <div class="activity-category-card">
                <img src="#" alt="Demo Masak">
                <h3 class="activity-category-title">Demo Masak</h3>
                <p class="activity-category-description">Saksikan demo masak langsung dari para profesional dan dapatkan tips berharga.</p>
            </div>
            <div class="activity-category-card">
                <img src="#" alt="Tantangan Baking">
                <h3 class="activity-category-title">Tantangan Baking</h3>
                <p class="activity-category-description">Ikuti tantangan baking bulanan kami dan menangkan hadiah menarik!</p>
            </div>
        </div>
    </div>
</section>

<section id="product" class="content-section product-section">
     <div class="container">
        <div class="product-section-header">
            <h3 class="product-title-text">Featured Products</h3>
            <a href="#" class="product-more-button-link">
                More <span class="arrow-icon">→</span>
            </a>
        </div>
        <div id="initialProductGrid" class="product-grid initial-product-view">
            <p>Produk unggulan belum tersedia.</p>
        </div>
    </div>
</section>

<section id="partners" class="content-section partners-section">
     <div class="container">
        <h2 class="section-title partners-title">Our Partners</h2>
        <div class="partners-empty-space">
            <p class="coming-soon-text">(Partner kami akan segera hadir di sini!)</p>
        </div>
    </div>
</section>

<section id="contact" class="contact-section-footer">
     <div class="container contact-container">
        <h2 class="contact-section-title">Keep in Touch</h2>
        <div class="contact-content-area">
            <div class="contact-form-wrapper">
                <form id="contactForm" >
                    <div class="form-group">
                        <input type="email" id="email" name="sender_email" placeholder="Email Anda" required value="">
                    </div>
                    <div class="form-group-row">
                        <div class="form-group-half">
                            <input type="text" id="sender_name" name="sender_name" placeholder="Nama Anda" required value="">
                        </div>
                        <div class="form-group-half">
                            <input type="text" id="subject" name="subject" placeholder="Subjek Pesan">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message_text" rows="4" placeholder="Pesan Anda" required></textarea>
                    </div>
                    <button type="submit" class="btn-submit-contact">Send</button>
                </form>
                <div id="formMessage" class="form-message-container"></div>
            </div>
            <div class="contact-info-wrapper">
                <div class="social-icons">
                    <a href="#"><img src="#" alt="LinkedIn"></a>
                    <a href="#"><img src="#" alt="TikTok"></a>
                    <a href="#"><img src="#" alt="X/Twitter"></a>
                    <a href="#s"><img src="#" alt="YouTube"></a>
                    <a href="#"><img src="#" alt="Instagram"></a>
                </div>
                <p class="contact-detail"><img src="#" alt="Phone"> +62 878 9827 2631</p>
                <p class="contact-detail"><img src="#"> trial123@gmail.com</p>
                <p class="contact-detail address-detail"><img src="#" alt="Address"> Jl. Apaya gatau No.11, Daerah Gaada, Planet Namek, Posnya Gaboleh Tau, 12345</p>
            </div>
        </div>
    </div>
</section>
@endsection
