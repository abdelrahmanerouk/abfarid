<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عبدالرحمن فريد | خبير الاستراتيجيات والنمو الرقمي - abfarid</title>
    
    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700;900&family=Orbitron:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary: #FF6B00;
            --bg: #000000;
            --surface: #0A0A0A;
            --text: #FFFFFF;
            --text-dim: #B0B0B0;
            --transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { background-color: var(--bg); color: var(--text); font-family: 'Cairo', sans-serif; overflow-x: hidden; }

        /* --- Navigation --- */
        nav {
            position: fixed; top: 0; width: 100%; padding: 20px 5%;
            display: flex; justify-content: space-between; align-items: center;
            z-index: 1000; background: rgba(0,0,0,0.85); backdrop-filter: blur(15px);
            border-bottom: 1px solid rgba(255,107,0,0.1);
        }
        .logo { font-family: 'Orbitron'; font-size: 24px; color: var(--primary); text-decoration: none; font-weight: 900; }
        .nav-links { display: flex; gap: 25px; list-style: none; }
        .nav-links a { color: var(--text); text-decoration: none; font-weight: 600; font-size: 14px; transition: 0.3s; }
        .nav-links a:hover { color: var(--primary); }

        /* --- Hero Section (Perfect Melt) --- */
        .hero {
            height: 100vh;
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            overflow: hidden;
            position: relative;
        }

        .hero-img-box {
            position: relative;
            height: 100%;
            background: #000;
            cursor: pointer;
        }

        .hero-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
            /* سيحان احترافي 360 درجة */
            -webkit-mask-image: radial-gradient(circle at center, black 30%, transparent 85%);
            mask-image: radial-gradient(circle at center, black 30%, transparent 85%);
            filter: grayscale(100%) brightness(0.6);
        }

        .hero-img-box:hover img {
            filter: grayscale(0%) brightness(1.1) contrast(1.1);
            transform: scale(1.02);
        }

        .hero-text-box { padding: 0 10%; z-index: 10; }
        .hero h1 { font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 900; line-height: 1.1; margin-bottom: 25px; }
        .hero h1 span { color: var(--primary); }
        .hero p { font-size: 1.3rem; color: var(--text-dim); margin-bottom: 40px; }

        /* --- Sections General Style --- */
        section { padding: 100px 5%; max-width: 1300px; margin: 0 auto; }
        .section-header { text-align: center; margin-bottom: 60px; }
        .section-header h2 { font-size: 36px; font-weight: 900; }
        .section-header .line { width: 60px; height: 4px; background: var(--primary); margin: 15px auto; }

        /* --- Blog Section (New) --- */
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .blog-card {
            background: var(--surface);
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid rgba(255,255,255,0.05);
            transition: var(--transition);
            text-decoration: none;
            color: inherit;
        }

        .blog-card:hover { border-color: var(--primary); transform: translateY(-10px); }
        .blog-img { width: 100%; height: 220px; background-size: cover; background-position: center; transition: 0.5s; }
        .blog-card:hover .blog-img { transform: scale(1.05); }
        .blog-info { padding: 25px; }
        .blog-info .date { font-size: 12px; color: var(--primary); font-family: 'Orbitron'; margin-bottom: 10px; display: block; }
        .blog-info h3 { font-size: 20px; margin-bottom: 15px; font-weight: 800; }
        .blog-info p { color: var(--text-dim); font-size: 14px; line-height: 1.6; }

        /* --- Services --- */
        .services-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px; }
        .service-card {
            background: var(--surface); padding: 40px; border-radius: 20px;
            border: 1px solid rgba(255,107,0,0.1); transition: var(--transition);
        }
        .service-card:hover { border-color: var(--primary); transform: translateY(-10px); }
        .service-card i { font-size: 35px; color: var(--primary); margin-bottom: 20px; display: block; }

        /* --- Final CTA --- */
        .experience-banner {
            background: radial-gradient(circle, #1a1a1a 0%, #000 100%);
            padding: 100px 5%; text-align: center; border-radius: 40px;
            margin: 50px 0; border: 1px solid var(--primary);
        }
        .experience-text { font-size: clamp(1.8rem, 4vw, 2.5rem); font-weight: 900; line-height: 1.4; }

        /* --- Buttons --- */
        .btn {
            padding: 18px 40px; border-radius: 50px; font-weight: 800;
            text-decoration: none; display: inline-flex; align-items: center; gap: 12px;
            transition: var(--transition); cursor: pointer; border: none;
        }
        .btn-primary { background: var(--primary); color: #fff; box-shadow: 0 10px 30px rgba(255,107,0,0.3); }
        .btn-primary:hover { transform: scale(1.05); }

        /* --- Footer --- */
        footer { padding: 80px 5% 40px; border-top: 1px solid rgba(255,255,255,0.05); text-align: center; }
        .social-grid { display: flex; justify-content: center; gap: 15px; margin: 30px 0; flex-wrap: wrap; }
        .social-link {
            width: 50px; height: 50px; background: #111; display: flex; align-items: center; justify-content: center;
            color: white; font-size: 20px; border-radius: 12px; transition: 0.3s; text-decoration: none;
        }
        .social-link:hover { background: var(--primary); transform: translateY(-5px); }

        .wa-float {
            position: fixed; bottom: 30px; left: 30px; background: #25D366; color: white;
            width: 65px; height: 65px; border-radius: 50%; display: flex; align-items: center;
            justify-content: center; font-size: 30px; z-index: 1000; text-decoration: none;
        }

        @media (max-width: 992px) {
            .hero { grid-template-columns: 1fr; height: auto; padding-top: 100px; }
            .hero-img-box { height: 400px; }
            .hero-text-box { padding: 40px 5%; text-align: center; }
            .nav-links { display: none; }
        }
    </style>
</head>
<body>

    <nav>
        <a href="#" class="logo">AB FARID</a>
        <ul class="nav-links">
            <li><a href="#home">الرئيسية</a></li>
            <li><a href="#services">الخدمات</a></li>
            <li><a href="#blog">المدونة</a></li>
            <li><a href="#contact">تواصل</a></li>
        </ul>
        <a href="https://wa.me/966536258017" class="btn btn-primary" style="padding: 10px 25px; font-size: 13px;">استشارة مجانية</a>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-img-box">
            <img src="abfarid.jpg" alt="عبدالرحمن فريد">
        </div>
        <div class="hero-text-box" data-aos="fade-right">
            <h1>مش بقدم مجرد خدمات..<br><span>بقدملك خبرة 10 سنين</span></h1>
            <p>مستشار تسويق رقمي متخصص في تحويل البيانات إلى أرباح، وبناء استراتيجيات نمو متكاملة في السوق السعودي والخليجي.</p>
            <a href="#contact" class="btn btn-primary">ابدأ رحلة نموك الآن <i class="fas fa-rocket"></i></a>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog">
        <div class="section-header" data-aos="fade-up">
            <h2>آخر الأفكار التسويقية</h2>
            <div class="line"></div>
            <p style="color: var(--text-dim);">مقالات حصرية عن السيو، الإعلانات، والنمو الرقمي.</p>
        </div>
        <div class="blog-grid">
            <!-- Blog Item 1 -->
            <a href="post.php?id=1" class="blog-card" data-aos="fade-up">
                <div class="blog-img" style="background-image: url('https://via.placeholder.com/600x400/111/FF6B00?text=SEO+Tips');"></div>
                <div class="blog-info">
                    <span class="date">MAY 15, 2025</span>
                    <h3>كيف تتصدر جوجل في السعودية خلال 2025؟</h3>
                    <p>دليل شامل عن أهم التحديثات في خوارزميات جوجل وكيفية استغلالها لزيادة زيارات متجرك...</p>
                </div>
            </a>
            <!-- Blog Item 2 -->
            <a href="post.php?id=2" class="blog-card" data-aos="fade-up" data-aos-delay="100">
                <div class="blog-img" style="background-image: url('https://via.placeholder.com/600x400/111/FF6B00?text=Paid+Ads');"></div>
                <div class="blog-info">
                    <span class="date">MAY 10, 2025</span>
                    <h3>سر الـ ROAS المرتفع في حملات تيك توك</h3>
                    <p>لماذا تفشل أغلب حملات تيك توك؟ وكيف تبني استراتيجية محتوى تجبر العميل على الشراء...</p>
                </div>
            </a>
        </div>
    </section>

    <!-- CTA Banner -->
    <div class="experience-banner" data-aos="zoom-in">
        <p class="experience-text">
            مش بقدم مجرد خدمات بقدملك خبرة اكتر من 10 سنين في مجال التسويق
        </p>
    </div>

    <!-- Services -->
    <section id="services">
        <div class="section-header" data-aos="fade-up">
            <h2>الخدمات الاستراتيجية</h2>
        </div>
        <div class="services-grid">
            <div class="service-card" data-aos="fade-up">
                <i class="fas fa-chess-knight"></i>
                <h3>التخطيط وأبحاث السوق</h3>
                <p style="color: var(--text-dim); font-size: 14px;">دراسة المنافسين وتحليل SWOT لبناء استراتيجية واقعية ومربحة.</p>
            </div>
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-chart-line"></i>
                <h3>الأداء والنمو الرقمي</h3>
                <p style="color: var(--text-dim); font-size: 14px;">إدارة حملات Meta, TikTok, Snap بخبرة عملية في 20 مجالاً مختلفاً.</p>
            </div>
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-search-dollar"></i>
                <h3>سيو الصفحة الأولى</h3>
                <p style="color: var(--text-dim); font-size: 14px;">تصدر نتائج البحث المحلية في جوجل السعودية لزيادة المبيعات العضوية.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <span class="footer-logo">AB FARID</span>
        <div class="social-grid">
            <a href="https://www.linkedin.com/in/abdelrahmanfarid/" target="_blank" class="social-link"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://x.com/abfaridofficial" target="_blank" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="https://www.instagram.com/abfaridofficial" target="_blank" class="social-link"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/abfaridofficial" target="_blank" class="social-link"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.youtube.com/@abfaridofficial" target="_blank" class="social-link"><i class="fab fa-youtube"></i></a>
            <a href="https://www.snapchat.com/@abfaridofficial" target="_blank" class="social-link"><i class="fab fa-snapchat"></i></a>
        </div>
        <p style="color: #444; font-size: 12px;">&copy; 2025 عبدالرحمن فريد | abfarid.com</p>
    </footer>

    <a href="https://wa.me/966536258017" class="wa-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1200, once: true });
    </script>
</body>
</html>