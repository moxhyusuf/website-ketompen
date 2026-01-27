@extends('layout.app')

@section('title', 'Berita')

@section('content')

<style>
:root {
    --primary-color: #22c55e;
    --primary-dark: #16a34a;
    --primary-light: #4ade80;
    --accent-color: #34d399;
    --text-dark: #14532d;
    --text-gray: #166534;
    --text-light: #16a34a;
    --bg-light: #f0fdf4;
    --bg-white: #ffffff;
    --border-color: #d1fae5;
    --shadow-sm: 0 1px 3px rgba(34,197,94,.08);
    --shadow-md: 0 4px 12px rgba(34,197,94,.08);
    --shadow-lg: 0 10px 30px rgba(34,197,94,.15);
}

/* ================= BLOG CARD ================= */
.blog-card {
    background: var(--bg-white);
    border-radius: 12px;
    border: 2px solid var(--border-color);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    height: 100%;
    transition: all .3s cubic-bezier(.4,0,.2,1);
    box-shadow: var(--shadow-sm);
}

.blog-card:hover {
    transform: translateY(-6px);
    box-shadow: var(--shadow-lg);
    border-color: var(--primary-light);
}

/* ================= IMAGE ================= */
.post-img {
    width: 100%;
    height: 180px;
    overflow: hidden;
    position: relative;
    flex-shrink: 0;
}

.post-img::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(34,197,94,.5), transparent 60%);
    opacity: 0;
    transition: opacity .3s ease;
}

.blog-card:hover .post-img::after {
    opacity: 1;
}

.post-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
    transition: transform .5s cubic-bezier(.4,0,.2,1);
}

.blog-card:hover .post-img img {
    transform: scale(1.1);
}

/* ================= CARD BODY ================= */
.blog-card-body {
    padding: 18px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

/* ================= META ================= */
.meta-top {
    margin-bottom: 10px;
}

.meta-top ul {
    padding: 0;
    margin: 0;
    list-style: none;
    display: flex;
    gap: 12px;
    font-size: 11.5px;
    color: var(--text-light);
    flex-wrap: wrap;
}

.meta-top ul li {
    display: flex;
    align-items: center;
    gap: 4px;
}

.meta-top ul li i {
    color: var(--primary-color);
    font-size: 12px;
}

/* ================= TITLE ================= */
.blog-card .title {
    font-size: 16px;
    font-weight: 700;
    margin: 0 0 10px;
    line-height: 1.4;
}

.blog-card .title a {
    color: var(--text-dark);
    text-decoration: none;
    transition: color .2s ease;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.blog-card .title a:hover {
    color: var(--primary-color);
}

/* ================= CONTENT ================= */
.blog-card .content {
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.blog-card .content p {
    font-size: 13px;
    color: var(--text-gray);
    line-height: 1.6;
    margin-bottom: 14px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* ================= READ MORE ================= */
.blog-card .read-more {
    margin-top: auto;
}

.blog-card .read-more a {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 8px 16px;
    border-radius: 8px;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
    color: #fff;
    font-size: 12px;
    font-weight: 600;
    text-decoration: none;
    transition: all .3s ease;
    box-shadow: 0 2px 8px rgba(34, 197, 94, .3);
}

.blog-card .read-more a:hover {
    background: linear-gradient(135deg, var(--primary-dark) 0%, #15803d 100%);
    transform: translateX(4px);
    box-shadow: 0 4px 12px rgba(34, 197, 94, .45);
}

.blog-card .read-more a i {
    transition: transform .3s ease;
}

.blog-card .read-more a:hover i {
    transform: translateX(3px);
}

/* ================= PAGE TITLE ================= */
.page-title {
    background: linear-gradient(135deg, #22c55e 0%, #16a34a 50%, #15803d 100%);
    padding: 60px 0 45px;
    margin-bottom: 50px;
    position: relative;
    overflow: hidden;
}

.page-title::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 40%;
    height: 100%;
    background: linear-gradient(135deg, rgba(74,222,128,.15) 0%, transparent 100%);
}

.page-title h1 {
    color: #fff;
    font-size: 36px;
    font-weight: 800;
    margin-top: 10px;
    text-shadow: 0 2px 15px rgba(0,0,0,.25);
}

.page-title .breadcrumbs ol {
    display: flex;
    gap: 10px;
    padding: 0;
    margin: 0;
    list-style: none;
}

.page-title .breadcrumbs ol li {
    color: rgba(255,255,255,.95);
    font-size: 13px;
}

.page-title .breadcrumbs ol li a {
    color: #fff;
    text-decoration: none;
    transition: opacity .2s;
}

.page-title .breadcrumbs ol li a:hover {
    opacity: .8;
}

.page-title .breadcrumbs ol li::after {
    content: '/';
    margin-left: 10px;
    color: rgba(255,255,255,.7);
}

.page-title .breadcrumbs ol li:last-child::after {
    display: none;
}

/* ================= SIDEBAR ================= */
.sidebar {
    position: sticky;
    top: 100px;
}

.widget-item {
    background: var(--bg-white);
    border: 2px solid var(--border-color);
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: var(--shadow-sm);
    transition: all .3s ease;
}

.widget-item:hover {
    box-shadow: var(--shadow-md);
    border-color: var(--primary-light);
}

.widget-title {
    font-size: 17px;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 16px;
    padding-bottom: 10px;
    border-bottom: 2px solid var(--primary-color);
    display: inline-block;
}

/* SEARCH WIDGET */
.search-widget form {
    display: flex;
    gap: 8px;
}

.search-widget input {
    flex: 1;
    padding: 10px 14px;
    border: 2px solid var(--border-color);
    border-radius: 8px;
    font-size: 13px;
    transition: all .2s ease;
}

.search-widget input:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(34, 197, 94, .12);
}

.search-widget button {
    padding: 10px 16px;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: all .3s ease;
    box-shadow: 0 2px 6px rgba(34, 197, 94, .25);
}

.search-widget button:hover {
    background: linear-gradient(135deg, var(--primary-dark) 0%, #15803d 100%);
    transform: scale(1.05);
    box-shadow: 0 4px 10px rgba(34, 197, 94, .35);
}

/* RECENT POSTS */
.recent-post-item {
    display: flex;
    gap: 12px;
    padding: 12px;
    margin: 0 -12px 10px;
    text-decoration: none;
    color: inherit;
    border-radius: 10px;
    transition: all .3s ease;
}

.recent-post-item:last-child {
    margin-bottom: 0;
}

.recent-post-item:hover {
    background: var(--bg-light);
    transform: translateX(4px);
}

.recent-post-item img {
    width: 75px;
    height: 60px;
    object-fit: cover;
    border-radius: 8px;
    flex-shrink: 0;
    box-shadow: var(--shadow-sm);
    border: 2px solid var(--border-color);
}

.recent-post-item h4 {
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 6px;
    color: var(--text-dark);
    line-height: 1.4;
    transition: color .2s ease;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.recent-post-item:hover h4 {
    color: var(--primary-color);
}

.recent-post-item time {
    font-size: 11px;
    color: var(--text-light);
    display: flex;
    align-items: center;
    gap: 4px;
}

.recent-post-item time i {
    font-size: 10px;
}

/* PAGINATION */
.pagination {
    gap: 6px;
    margin-top: 40px;
}

.page-link {
    border-radius: 8px !important;
    color: var(--text-gray);
    padding: 8px 14px;
    border: 2px solid var(--border-color);
    font-weight: 500;
    font-size: 13px;
    transition: all .3s ease;
}

.page-item.active .page-link {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
    border-color: var(--primary-color);
    color: #fff;
    box-shadow: 0 2px 8px rgba(34, 197, 94, .35);
}

.page-link:hover {
    background-color: var(--bg-light);
    border-color: var(--primary-color);
    color: var(--primary-color);
    transform: translateY(-2px);
}

/* RESPONSIVE */
@media (max-width: 991px) {
    .sidebar {
        position: static;
        margin-top: 40px;
    }
    
    .page-title h1 {
        font-size: 28px;
    }
    
    .page-title {
        padding: 50px 0 40px;
    }
}

@media (max-width: 767px) {
    .blog-card-body {
        padding: 16px;
    }
    
    .post-img {
        height: 160px;
    }
    
    .blog-card .title {
        font-size: 15px;
    }
    
    .widget-item {
        padding: 16px;
    }
}

/* ANIMATION */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.blog-card {
    animation: fadeInUp .5s ease-out;
}

.blog-card:nth-child(2) {
    animation-delay: .1s;
}

.blog-card:nth-child(3) {
    animation-delay: .2s;
}

.blog-card:nth-child(4) {
    animation-delay: .3s;
}
</style>

<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="container">
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Berita</li>
                </ol>
            </nav>
            <h1>Berita Terkini</h1>
        </div>
    </div>
    <!-- End Page Title -->

    <div class="container">
        <div class="row">

            <!-- BLOG CONTENT -->
            <div class="col-lg-8">
                <section id="blog-posts" class="blog-posts section">

                    <div class="row gy-4">

                        @foreach ($item as $berita)
                        <div class="col-lg-6">
                            <article class="blog-card">

                                <!-- IMAGE -->
                                <a href="{{ route('berita.detail', $berita->id_berita) }}"
                                   class="post-img">
                                    <img src="{{ asset('storage/'.$berita->image) }}"
                                         alt="{{ $berita->judul }}">
                                </a>

                                <!-- CARD BODY -->
                                <div class="blog-card-body">
                                    <!-- META -->
                                    <div class="meta-top">
                                        <ul>
                                            <li>
                                                <i class="bi bi-person-circle"></i> {{ $berita->nmpenulis }}
                                            </li>
                                            <li>
                                                <i class="bi bi-calendar-event"></i>
                                                {{ \Carbon\Carbon::parse($berita->tgl_berita)->format('d M Y') }}
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- TITLE -->
                                    <h2 class="title">
                                        <a href="{{ route('berita.detail', $berita->id_berita) }}">
                                            {{ $berita->judul }}
                                        </a>
                                    </h2>

                                    <!-- CONTENT -->
                                    <div class="content">
                                        <p>
                                            {{ Str::limit(strip_tags($berita->narasiberita), 120) }}
                                        </p>

                                        <div class="read-more">
                                            <a href="{{ route('berita.detail', $berita->id_berita) }}">
                                                Baca Selengkapnya
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </article>
                        </div>
                        @endforeach

                    </div>

                    <!-- PAGINATION -->
                    <div class="d-flex justify-content-center">
                        {{ $item->links('pagination::bootstrap-5') }}
                    </div>

                </section>
            </div>

            <!-- SIDEBAR -->
            <div class="col-lg-4 sidebar">
                <div class="widgets-container" data-aos="fade-up" data-aos-delay="200">

                    <!-- SEARCH -->
                    <div class="search-widget widget-item">
                        <h3 class="widget-title">Pencarian</h3>
                        <form action="{{ route('berita') }}" method="GET">
                            <input type="text" name="q"
                                   placeholder="Cari berita..."
                                   value="{{ request('q') }}">
                            <button type="submit" title="Search">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </div>

                    <!-- RECENT POSTS -->
                    <div class="recent-posts-widget widget-item">
                        <h3 class="widget-title">Berita Terbaru</h3>

                        @foreach($recentPosts as $post)
                        <a href="{{ route('berita.detail', $post->id_berita) }}"
                           class="recent-post-item">

                            <img src="{{ asset('storage/'.$post->image) }}"
                                 alt="{{ $post->judul }}">

                            <div>
                                <h4>{{ Str::limit($post->judul, 50) }}</h4>
                                <time>
                                    <i class="bi bi-calendar3"></i>
                                    {{ \Carbon\Carbon::parse($post->tgl_berita)->format('d M Y') }}
                                </time>
                            </div>

                        </a>
                        @endforeach
                    </div>

                </div>
            </div>

        </div>
    </div>

</main>
@endsection