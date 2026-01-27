<footer id="footer" class="footer">

    <div class="container footer-top">
        <div class="row gy-4">

            <!-- Tentang Desa -->
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="/" class="d-flex align-items-center mb-3">
                    <img src="/assets/img/logo.png" alt="Logo" style="height: 50px; margin-right: 10px;">
                    <span class="sitename">DESA KETOMPEN</span>
                </a>
                <div class="footer-contact pt-3">
                    <p class="mb-2"><i class="bi bi-geo-alt me-2"></i>Kecamatan Pajarakan</p>
                    <p class="mb-2"><i class="bi bi-map me-2"></i>Kabupaten Probolinggo</p>
                    <p class="mb-2"><i class="bi bi-envelope me-2"></i>desaketompen@gmail.com</p>
                    <p class="mb-0"><i class="bi bi-phone me-2"></i>085773187434</p>
                </div>
            </div>

            <!-- Useful Links + Follow Us -->
            <div class="col-lg-4 col-md-6">
                <div class="row gy-3">

                    <!-- Useful Links -->
                    <div class="col-12 footer-links">
                        <h4 class="mb-3">Menu Cepat</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="bi bi-chevron-right me-1"></i> 
                                <a href="{{ route('beranda') }}">Beranda</a>
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-chevron-right me-1"></i> 
                                <a href="{{ route('sejarah') }}">Tentang Desa</a>
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-chevron-right me-1"></i> 
                                <a href="{{ route('program') }}">Promo Desa</a>
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-chevron-right me-1"></i> 
                                <a href="{{ route('ruang_curhat.pengaduan') }}">Pengaduan</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Follow Us -->
                    <div class="col-12">
                        <h4 class="mb-3">Ikuti Kami</h4>
                        <div class="social-links d-flex flex-wrap gap-2">
                            <a href="" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               aria-label="YouTube">
                                <i class="bi bi-youtube"></i>
                            </a>
                            <a href="" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               aria-label="Facebook">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               aria-label="Instagram">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               aria-label="TikTok">
                                <i class="bi bi-tiktok"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Peta -->
            <div class="col-lg-4 col-md-12">
                <h4 class="mb-3">Lokasi Desa</h4>
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31625.668809037063!2d113.34397876538341!3d-7.767690481760667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7aa91f817be97%3A0x19a5b1b24b48fe39!2sKaranggeger%2C%20Kec.%20Pajarakan%2C%20Kabupaten%20Probolinggo%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1768121636569!5m2!1sid!2sid"
                        width="100%"
                        height="260"
                        style="border:0; border-radius:12px;"
                        allowfullscreen
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Lokasi Desa Ketompen">
                    </iframe>
                </div>
            </div>

        </div>
    </div>

    <!-- Copyright -->
    <div class="container copyright text-center mt-4">
        <div class="row">
            <div class="col-12">
                <p class="mb-2">
                    © <span id="currentYear">2026</span> 
                    <strong class="sitename">HI-TechSmart</strong> 
                    | All Rights Reserved
                </p>
                <p class="mb-0 small">
                    Website Resmi Desa Ketompen, Kecamatan Pajarakan, Kabupaten Probolinggo
                </p>
            </div>
        </div>
    </div>

</footer>

<style>
/* ================== FOOTER FINAL VINALY ================== */
footer.footer {
    background-color: #1B5E20 !important; /* Hijau Desa Tua */
    color: #ffffff !important;
    padding: 60px 0 20px;
}

/* Global text */
footer.footer,
footer.footer p,
footer.footer span,
footer.footer h4,
footer.footer li,
footer.footer a,
footer.footer strong {
    color: #ffffff !important;
}

/* Links */
footer.footer a {
    text-decoration: none;
    transition: all 0.3s ease;
}

footer.footer a:hover {
    color: #C8E6C9 !important;
    padding-left: 5px;
}

/* Headings */
footer.footer h4 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 1rem;
    position: relative;
    padding-bottom: 10px;
}

footer.footer h4::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 50px;
    height: 2px;
    background: #81C784;
}

/* Sitename */
footer.footer .sitename {
    font-size: 1.4rem;
    font-weight: 700;
    letter-spacing: 0.5px;
}

/* Contact info */
footer.footer .footer-contact p {
    margin-bottom: 0.5rem;
    display: flex;
    align-items: center;
    font-size: 15px;
}

footer.footer .footer-contact i {
    font-size: 1.1rem;
    margin-right: 8px;
}

/* Footer links */
footer.footer .footer-links ul {
    padding: 0;
    margin: 0;
    list-style: none;
}

footer.footer .footer-links li {
    padding: 6px 0;
    display: flex;
    align-items: center;
}

/* Social media */
footer.footer .social-links a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 42px;
    height: 42px;
    border-radius: 50%;
    border: 2px solid rgba(255,255,255,0.35);
    transition: all 0.3s ease;
    background: transparent;
}

footer.footer .social-links a i {
    font-size: 18px;
}

footer.footer .social-links a:hover {
    background-color: #ffffff;
    border-color: #ffffff;
    transform: translateY(-4px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.25);
}

footer.footer .social-links a:hover i {
    color: #2E7D32 !important;
}

/* Map */
footer.footer .map-container {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 6px 18px rgba(0,0,0,0.3);
}

/* Copyright */
footer.footer .copyright {
    border-top: 1px solid rgba(255,255,255,0.25);
    padding-top: 25px;
    margin-top: 40px;
    text-align: center;
}

footer.footer .copyright p {
    line-height: 1.6;
}

footer.footer .copyright .small {
    font-size: 0.9rem;
    opacity: 0.9;
}

/* ================== RESPONSIVE ================== */
@media (max-width: 768px) {
    footer.footer {
        padding: 40px 0 20px;
    }

    footer.footer .sitename {
        font-size: 1.2rem;
    }

    footer.footer h4 {
        text-align: center;
    }

    footer.footer h4::after {
        left: 50%;
        transform: translateX(-50%);
    }

    footer.footer .footer-links,
    footer.footer .social-links {
        justify-content: center;
        text-align: center;
    }

    footer.footer .footer-links li {
        justify-content: center;
    }
}
</style>

<script>
    // Update current year automatically
    document.getElementById('currentYear').textContent = new Date().getFullYear();
</script>