<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Desa Ketompen')</title>

    <link href="/assets/img/logo.png" rel="icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />

    <!-- Vendor CSS -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- Main CSS -->
    <link href="/assets/css/header-fix.css" rel="stylesheet" />
    <link href="/assets/css/main.css" rel="stylesheet" />

   <style>
    /* ============== HEADER BACKGROUND COLOR ============== */
    .header,
    header,
    #header,
    .header.sticky-top,
    .header.sticked {
        background-color: #2E7D32 !important; /* Hijau Desa */
    }

    /* ============== LOGO & SITENAME ============== */
    .header .sitename,
    header .sitename,
    .header .logo-text,
    header .logo-text {
        color: #ffffff !important;
        font-weight: 600;
    }

    .header .logo-img {
        height: 45px;
        width: auto;
    }

    /* ============== DESKTOP MENU ============== */
    @media (min-width: 1200px) {
        .header .navmenu > ul > li > a {
            color: #ffffff !important;
            font-weight: 500;
        }

        .header .navmenu > ul > li > a:hover {
            color: #C8E6C9 !important;
        }

        /* Dropdown Desktop */
        .header .navmenu .dropdown ul {
            background-color: #ffffff !important;
            border-radius: 6px;
        }

        .header .navmenu .dropdown ul li a {
            color: #333333 !important;
        }

        .header .navmenu .dropdown ul li a:hover {
            background-color: #E8F5E9 !important;
            color: #2E7D32 !important;
        }
    }

    /* ============== MOBILE MENU ============== */
    @media (max-width: 1199px) {
        .mobile-nav-toggle,
        .mobile-nav-toggle i {
            color: #ffffff !important;
            font-size: 28px;
        }

        .navmenu,
        .navmenu.mobile-nav-active {
            background-color: #ffffff !important;
        }

        .navmenu ul li a {
            color: #333333 !important;
            font-weight: 500;
        }

        .navmenu ul li a:hover {
            background-color: #E8F5E9 !important;
            color: #2E7D32 !important;
        }

        .navmenu ul li a.active {
            background-color: #C8E6C9 !important;
            color: #1B5E20 !important;
            border-left: 4px solid #2E7D32 !important;
        }
    }

    /* ============== BUTTON LOGIN ============== */
    .header .btn-getstarted {
        background-color: #0288D1 !important; /* Biru Aksen */
        color: #ffffff !important;
        border-radius: 6px;
        font-weight: 600;
    }

    .header .btn-getstarted:hover {
        background-color: #0277BD !important;
    }
</style>

</head>

<body class="index-page">

    @include('layout.navbar')

    <!-- Mobile Nav Overlay -->
    <div class="mobile-nav-overlay"></div>

    <main class="main">
        @yield('content')
    </main>

    @include('layout.footer')

    <!-- Vendor JS -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/js/main.js"></script>

    <!-- ISOTOPE -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>

    {{-- Custom Scripts - Semua dalam satu DOMContentLoaded --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ============ MOBILE NAVIGATION ============
            const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
            const navMenu = document.querySelector('.navmenu');
            const overlay = document.querySelector('.mobile-nav-overlay');
            const body = document.body;

            // Toggle mobile navigation
            if (mobileNavToggle) {
                mobileNavToggle.addEventListener('click', function(e) {
                    e.stopPropagation();
                    navMenu.classList.toggle('mobile-nav-active');
                    overlay.classList.toggle('active');
                    body.style.overflow = navMenu.classList.contains('mobile-nav-active') ? 'hidden' : '';
                    
                    // Change icon
                    if (navMenu.classList.contains('mobile-nav-active')) {
                        this.classList.remove('bi-list');
                        this.classList.add('bi-x');
                    } else {
                        this.classList.remove('bi-x');
                        this.classList.add('bi-list');
                    }
                });
            }

            // Close mobile nav when clicking overlay
            if (overlay) {
                overlay.addEventListener('click', function() {
                    navMenu.classList.remove('mobile-nav-active');
                    overlay.classList.remove('active');
                    body.style.overflow = '';
                    if (mobileNavToggle) {
                        mobileNavToggle.classList.remove('bi-x');
                        mobileNavToggle.classList.add('bi-list');
                    }
                });
            }

            // ============ MOBILE DROPDOWN TOGGLE ============
            const dropdownToggles = document.querySelectorAll('.navmenu .dropdown > a');
            dropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', function(e) {
                    if (window.innerWidth < 1200) {
                        e.preventDefault();
                        const parent = this.parentElement;
                        
                        // Toggle dropdown
                        parent.classList.toggle('dropdown-active');
                        
                        // Close other dropdowns
                        dropdownToggles.forEach(other => {
                            if (other !== toggle && other.parentElement.classList.contains('dropdown-active')) {
                                other.parentElement.classList.remove('dropdown-active');
                            }
                        });
                    }
                });
            });

            // Close mobile nav when clicking a link (except dropdown toggles)
            const navLinks = document.querySelectorAll('.navmenu a:not(.dropdown > a)');
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth < 1200) {
                        navMenu.classList.remove('mobile-nav-active');
                        overlay.classList.remove('active');
                        body.style.overflow = '';
                        if (mobileNavToggle) {
                            mobileNavToggle.classList.remove('bi-x');
                            mobileNavToggle.classList.add('bi-list');
                        }
                    }
                });
            });

            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 1200) {
                    navMenu.classList.remove('mobile-nav-active');
                    overlay.classList.remove('active');
                    body.style.overflow = '';
                    if (mobileNavToggle) {
                        mobileNavToggle.classList.remove('bi-x');
                        mobileNavToggle.classList.add('bi-list');
                    }
                    // Close all dropdowns on desktop
                    dropdownToggles.forEach(toggle => {
                        toggle.parentElement.classList.remove('dropdown-active');
                    });
                }
            });

            // ============ ISOTOPE ============
            const container = document.querySelector('.isotope-container');
            if (container) {
                const iso = new Isotope(container, {
                    itemSelector: '.isotope-item',
                    layoutMode: 'fitRows',
                    percentPosition: true
                });

                const filters = document.querySelectorAll('.isotope-filters li');

                filters.forEach(filter => {
                    filter.addEventListener('click', function() {
                        filters.forEach(el => el.classList.remove('filter-active'));
                        this.classList.add('filter-active');

                        const filterValue = this.getAttribute('data-filter');
                        iso.arrange({ filter: filterValue });
                    });
                });

                // Relayout after images load
                if (typeof imagesLoaded !== 'undefined') {
                    imagesLoaded(container, function() {
                        iso.layout();
                    });
                }
            }

            // ============ LAZY LOADING IMAGES ============
            const lazyImages = document.querySelectorAll('img[loading="lazy"]');
            if ('IntersectionObserver' in window) {
                const imageObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            img.classList.add('loaded');
                            imageObserver.unobserve(img);
                        }
                    });
                });

                lazyImages.forEach(img => imageObserver.observe(img));
            }

            // ============ INITIALIZE AOS ============
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    easing: 'ease-in-out',
                    once: true,
                    mirror: false
                });
            }
        });
    </script>

    {{-- TEMPAT SCRIPT HALAMAN --}}
    @stack('scripts')

</body>
</html>