<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">
<!-- <html lang="en"> -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>وحید مرادی لک | Vahid Moradi Lak – Software Engineer</title>
    <meta name="description" content="وب‌سایت شخصی وحید مرادی لک - توسعه‌دهنده نرم‌افزار، متخصص هوش مصنوعی، امنیت، NLP و Full-Stack Development.">
    <meta name="keywords" content="توسعه‌دهنده  فول‌استک, LLMs, python, Agents">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://moradilak.ir/">

    <!-- Open Graph -->
    <meta property="og:type" content="profile">
    <meta property="og:title" content="وحید مرادی لک | Vahid Moradi Lak">
    <meta property="og:description" content="Software Engineer | AI, NLP, Security & Full-Stack Developer">
    <meta property="og:url" content="https://moradilak.ir/">

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Person",
      "name": "وحید مرادی",
      "alternateName": [
      "Vahid Moradi",
      "وحید مرادی لک",
      "Vahid Moradi Lak",
      "وحید مرادی کشتی‌گیر",
      "وحید مرادی کشتی"
      ],
      "url": "https://moradilak.ir/",
      "sameAs": [
        "https://linkedin.com/in/moradilak",
        "https://github.com/vahidmoradilak"
      ],
      "jobTitle": "Software Engineer",
      "affiliation": {
        "@type": "Organization",
        "name": "University of Tehran"
      }
    }
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
:root {
    --bg: #f8fafc;
    --card: #ffffff;
    --text: #0f172a;
    --muted: #475569;
    --primary: #2563eb;
    --secondary: #1e40af;
    --border: #e5e7eb;
    --light-bg: #f3f4f6;
    --shadow: rgba(0,0,0,0.1);
    --primary-rgb: 37, 99, 235;
    --primary-color: #2563eb;
    --secondary-color: #1e40af;
    --text-color: #0f172a;
    --border-color: #e5e7eb;
}

html[data-theme="dark"] {
    --bg: #0b1220;
    --card: #111827;
    --text: #f8fafc;
    --muted: #cbd5e1;
    --primary: #60a5fa;
    --secondary: #93bbfd;
    --border: #1e293b;
    --light-bg: #1e293b;
    --shadow: rgba(0,0,0,0.3);
    --primary-rgb: 96, 165, 250;
    --primary-color: #60a5fa;
    --secondary-color: #93bbfd;
    --text-color: #f8fafc;
    --border-color: #1e293b;
}

* { margin:0; padding:0; box-sizing:border-box; }

body {
    background:var(--bg); color:var(--text); font-family:'Vazirmatn',sans-serif,'tahoma';
    line-height:1.6; margin:0; padding:20px;
    transition:background .3s ease,color .3s ease;
}

.container {
    max-width:800px; margin:0 auto; background:var(--card);
    border:1px solid var(--border); padding:30px; border-radius:10px;
    position:relative; transition:background .3s ease,border-color .3s ease;
}

.language-switch {
    position:absolute; top:60px; left:20px; background:var(--primary);
    color:#fff; padding:8px 15px; border-radius:5px; cursor:pointer;
    border:none; font-family:'Vazirmatn',sans-serif; font-size:.9em;
    font-weight:500; z-index:10; transition:background .3s ease;
}
.language-switch:hover { background:var(--secondary); }

.theme-switch {
    position:absolute; top:10px; left:10px;
    border:1px solid var(--border); background:var(--card);
    color:var(--text); padding:4px 8px; font-size:.8em;
    cursor:pointer; z-index:10; border-radius:4px;
    transition:background .3s ease,color .3s ease,border-color .3s ease;
}

[lang="en"] { direction:ltr; font-family:'Poppins',sans-serif; }
[lang="en"] .container, [lang="en"] .contact-info, [lang="en"] .profile-image,
[lang="en"] .section-title, [lang="en"] .experience-item { text-align:left; }
[lang="en"] .section-title::after { right:auto; left:0; }
[lang="en"] .experience-item ul { padding-right:0; padding-left:20px; }
[lang="en"] .skills-list { justify-content:flex-start; }
[lang="en"] .achievement-item { padding-right:0; padding-left:25px; }
[lang="en"] .achievement-item::before { right:auto; left:0; }

h1 { color:var(--text); text-align:center; border-bottom:2px solid var(--primary); padding-bottom:10px; font-weight:700; font-size:2.2em; margin-bottom:30px; }
.section { margin:25px 0; }
.section-title { color:var(--primary); margin-bottom:20px; font-weight:600; font-size:1.5em; position:relative; padding-bottom:8px; }
.section-title::after { content:''; position:absolute; bottom:0; right:0; width:80px; height:4px; background:var(--primary); border-radius:2px; }
.contact-info { text-align:center; margin-bottom:30px; font-weight:500; }
.contact-info p { margin:8px 0; color:var(--text); }
.profile-image { text-align:center; margin-bottom:30px; }
.profile-image img { width:200px; height:200px; border-radius:50%; object-fit:cover; object-position:center 20%; border:4px solid var(--primary); box-shadow:0 8px 24px rgba(var(--primary-rgb),.2); transition:transform .3s ease; }
.profile-image img:hover { transform:scale(1.1); }
.experience-item { margin-bottom:20px; padding:15px; background:var(--light-bg); border-radius:8px; border:1px solid var(--border); transition:transform .3s ease,box-shadow .3s ease; }
.experience-item:hover { transform:translateY(-3px); box-shadow:0 8px 16px var(--shadow); }
.experience-title { font-weight:600; color:var(--text); font-size:1.1em; margin-bottom:5px; }
.experience-date { color:var(--muted); font-size:.9em; font-weight:500; }
.experience-item ul { margin:10px 0; padding-right:20px; }
.experience-item li { margin:5px 0; color:var(--text); }
.skills-list { display:flex; flex-wrap:wrap; gap:10px; justify-content:center; }
.skill-item { background:var(--light-bg); padding:8px 20px; border-radius:20px; font-size:.9em; font-weight:500; color:var(--text); border:1px solid var(--border); transition:background .3s ease,color .3s ease,transform .3s ease; }
.skill-item:hover { background:var(--primary); color:#fff; transform:translateY(-2px); }
.skill-category { margin-bottom:20px; }
.skill-category-title { color:var(--primary); font-size:1.2em; margin-bottom:10px; }
.fa-content, .en-content { display:none; }
.fa-content.active, .en-content.active { display:block; }
.section-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(300px,1fr)); gap:20px; margin-top:20px; }
.project-card { background:var(--card); border-radius:10px; padding:20px; border:1px solid var(--border); box-shadow:0 2px 10px var(--shadow); transition:transform .3s ease,box-shadow .3s ease; }
.project-card:hover { transform:translateY(-5px); }
.project-title { color:var(--text); font-size:1.2em; margin-bottom:10px; }
.project-tech { display:flex; flex-wrap:wrap; gap:8px; margin:10px 0; }
.project-tech span { background:var(--light-bg); padding:4px 12px; border-radius:15px; font-size:.9em; color:var(--text); border:1px solid var(--border); }
.certificate-item { display:flex; align-items:center; gap:15px; margin-bottom:15px; padding:10px; background:var(--light-bg); border-radius:8px; border:1px solid var(--border); }
.certificate-icon { width:40px; height:40px; display:flex; align-items:center; justify-content:center; background:var(--primary); color:#fff; border-radius:50%; flex-shrink:0; overflow:hidden; }
.certificate-icon img { width:100%; height:100%; object-fit:cover; }
.achievement-item { position:relative; padding-right:20px; margin-bottom:15px; color:var(--text); }
.achievement-item::before { content:'🏆'; position:absolute; right:0; top:0; }
.volunteer-item { background:var(--light-bg); padding:15px; border-radius:8px; margin-bottom:15px; border:1px solid var(--border); }
.interests-list { display:flex; flex-wrap:wrap; gap:10px; }
.interest-item { background:var(--light-bg); color:var(--text); padding:8px 15px; border-radius:20px; font-size:.9em; border:1px solid var(--border); }
.social-links { display:flex; justify-content:center; gap:20px; margin-top:20px; }
.social-link { color:var(--primary); font-size:1.5em; transition:color .3s ease,transform .3s ease; }
.social-link:hover { color:var(--secondary); transform:translateY(-2px); }
.btn { display:inline-block; padding:10px 20px; border-radius:6px; font-size:.9em; font-weight:500; cursor:pointer; text-decoration:none; transition:background .3s ease,color .3s ease,transform .2s ease; border:none; font-family:inherit; }
.btn-secondary { background:var(--primary); color:#fff; }
.btn-secondary:hover { background:var(--secondary); transform:translateY(-1px); color:#fff; }
.enamad { text-align:center; margin-top:20px; }

@media (max-width:768px) {
    .container { padding:15px; }
    h1 { font-size:1.6em; }
    .language-switch { top:50px; left:10px; font-size:.8em; padding:6px 10px; }
    .section-grid { grid-template-columns:1fr; }
    .profile-image img { width:150px; height:150px; }
}

@media print {
    body { background:#fff; padding:10px; color:#000; }
    .container { box-shadow:none; border:1px solid #ddd; padding:20px; }
    .language-switch, .theme-switch { display:none !important; }
    .experience-item:hover, .project-card:hover, .profile-image img:hover,
    .skill-item:hover, .social-link:hover { transform:none; box-shadow:none; }
    .skill-item:hover { background:var(--light-bg); color:var(--text); }
    .section { break-inside:avoid; }
    .profile-image img { border-color:#333; }
    a { color:#000; text-decoration:underline; }
}
</style>
</head>

<body>
    <div class="container">
        <button class="language-switch" onclick="toggleLanguage()">English</button>
        <button class="theme-switch" onclick="toggleTheme()">🌓</button>

        <div class="fa-content active">
            <h1>وحید مرادی لک</h1>
            
            <div class="profile-image">
                <img src="images/vahid.jpg" alt="profile picture">
            </div>

            <div class="contact-info">
                <p>ایمیل: moradilak@ut.ac.ir | تلفن: ۸۵۸۵ ۲۱۷ ۰۹۳۵</p>
                <p>آدرس: تهران، امیرآباد، خیابان کارگر شمالی</p>
                <div class="social-links">
                    <a href="https://linkedin.com/in/moradilak" target="_blank" class="social-link">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/vahidmoradilak" target="_blank" class="social-link">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://twitter.com/vahidmoradilak" target="_blank" class="social-link">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">درباره من</h2>
                <p style="text-align:center; font-weight: bold;">به نام حضرت دوست که هر چه داریم از اوست</p>
                <p style="text-align:justify">کارشناس ارشد مهندسی کامپیوتر، گرایش نرم‌افزار؛ در زمینه‌های مختلفی تجربه کار داریم از فول استک و توسعه دهنده نرم‌افزار گرفته تا کار کردن در حوزه امنیت و رمز با استفاده از تکنولوژی‌های مدرن، بعد از آغاز دوران تحصیلی ارشد نیز پا در عرصه تحلیل داده‌ها گذاشته‌ایم، در حوزه‌های nlp, LLMs, LangChain and GraphChain, Agents و مسایل مشابه تجربه کار داریم.
                    </br>خدمت کردن در کشور را به کار در خارج کشور ترجیح می‌دهیم و اینکه دوست داریم روی فیلدی کار کنیم که در کشور احساس نیاز بیشتری به آن بشود.
                </br>در کل با وجود توانایی و داشتن مهارت‌های قوی در عرصه‌های مختلف و تجربه کار با فریم‌ورک‌های متنوع از یادگیری و کسب تجربه جدید لذت می‌بریم.</p>
                <a style="display: block; text-align: center;" href="cv-fa-v4.pdf" class="btn btn-secondary" download="" data-translate="download_cv">دانلود رزومه</a>
            </div>

            <div class="section">
                <h2 class="section-title">تحصیلات</h2>
                <div class="experience-item">
                    <div class="experience-title">کارشناس ارشد مهندسی کامپیوتر</div>
                    <div>دانشگاه تهران</div>
                    <div>گرایش: مهندسی نرم‌افزار</div>
                    <div>معدل: در حال تحصیل</div>
                    <div class="experience-date">1402 - اکنون</div>
                </div>
                <div class="experience-item">
                    <div class="experience-title">کارشناس مهندسی کامپیوتر</div>
                    <div>دانشگاه شهید رجایی</div>
                    <div>گرایش: نرم‌افزار و هوش</div>
                    <div>معدل: 18.31</div>
                    <div class="experience-date">1397 - 1401</div>
                </div>
                <div class="experience-item">
                    <div class="experience-title">دیپلم ریاضی فیزیک</div>
                    <div>دبیرستان شهید بهشتی</div>
                    <div>رشته ریاضی فیزیک</div>
                    <div>معدل: 19.38</div>
                    <div class="experience-date">1394 - 1397</div>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">تجربیات کاری</h2>
                <div class="experience-item">
                    <div class="experience-title">توسعه‌دهنده ارشد</div>
                    <div>شرکت فناوری پارس</div>
                    <div class="experience-date">1402 - 1403</div>
                    <ul>
                        <li>تولید اپلیکیشن پیام‌رسان بومی برای گروه‌های خاص</li>
                        <li>تولید فیلترشکن اختصاصی</li>
                        <li>تحلیل، بررسی و نوشتن الگوریتم برای رمزگذاری مبتنی بر پست‌کوانتوم</li>
                        <li>راهنمایی و آموزش توسعه‌دهندگان تازه‌کار</li>
                    </ul>
                </div>
                <div class="experience-item">
                    <div class="experience-title">کارآموز شبکه و سخت‌افزار</div>
                    <div>دانشگاه شهید رجایی</div>
                    <div class="experience-date">1400 - 1401</div>
                    <ul>
                        <li>عیب‌یابی و رفع مشکلات سایت‌ها</li>
                        <li>تعمیر سیستم‌های معیوب و ارتقای آنها </li>
                    </ul>
                </div>
                <div class="experience-item">
                    <div class="experience-title">فول‌استک</div>
                    <div>دانشگاه شهید رجایی</div>
                    <div class="experience-date">1399 - 1400</div>
                    <ul>
                        <li>طراحی سامانه پیش‌ثبت‌نام انتخاب واحد دانشجویان </li>
                        <li>پیاده‌سازی سیستم احراز هویت</li>
                        <li>توسعه کامپوننت‌های قابل استفاده مجدد</li>
                        <li>بهینه‌سازی SEO و عملکرد وب‌سایت</li>
                    </ul>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">مهارت‌ها</h2>
                <div class="skill-category">
                    <h3 class="skill-category-title">زبان‌های برنامه‌نویسی</h3>
                    <div class="skills-list">
                        <span class="skill-item">c</span>
                        <span class="skill-item">c++</span>
                        <span class="skill-item">c#</span>
                        <span class="skill-item">HTML</span>
                        <span class="skill-item">CSS</span>
                        <span class="skill-item">JavaScript</span>
                        <span class="skill-item">PHP</span>
                        <span class="skill-item">Go</span>
                        <span class="skill-item">Python</span>
                    </div>
                </div>
                <div class="skill-category">
                    <h3 class="skill-category-title">فریم‌ورک‌ها و کتابخانه‌ها</h3>
                    <div class="skills-list">
                        <span class="skill-item">Qt</span>
                        <span class="skill-item">Jupyter</span>
                        <span class="skill-item">Django</span>
                        <span class="skill-item">Transformers</span>
                        <span class="skill-item">Datasets</span>
                    </div>
                </div>
                <div class="skill-category">
                    <h3 class="skill-category-title">ابزارها و تکنولوژی‌ها</h3>
                    <div class="skills-list">
                        <span class="skill-item">Git</span>
                        <span class="skill-item">Docker</span>
                        <span class="skill-item">Hugging Face</span>
                        <span class="skill-item">Colab</span>
                        <span class="skill-item">Kaggle</span>
                    </div>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">پروژه‌ها</h2>
                <div class="section-grid">
                    <div class="project-card">
                        <div class="project-title">Queen-McCluskey</div>
                        <p>به دست آوردن تعداد PI و EPI در مدارهای منطقی به صورت خودکار</p>
                        <div class="project-tech">
                            <span>c++</span>
                            <span>c</span>
                            <span>Qt</span>
                        </div>
                        <a href="https://github.com/vahidmoradilak/Queen-McCluskey" target="_blank">مشاهده در گیت‌هاب</a>
                    </div>
                    <div class="project-card">
                        <div class="project-title">پیام‌رسان بومی</div>
                        <p>ایجاد اپلیکیشن پیام‌رسان مبتنی بر رمزگذاری پست کوانتوم برای گروه‌های خاص</p>
                        <div class="project-tech">
                            <span>c</span>
                            <span>Python</span>
                            <span>React</span>
                            <span>TypeScript</span>
                            <span>Node.js</span>
                            <span>MongoDB</span>
                        </div>
                        <a href="https://github.com/vahidmoradilak" target="_blank">مشاهده در گیت‌هاب</a>
                    </div>
                    <div class="project-card">
                        <div class="project-title">سامانه انتخاب واحد</div>
                        <p>طراحی و توسعه یک سامانه برای پیش‌ثبت‌نام انتخاب واحد دانشجویان</p>
                        <div class="project-tech">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JavaScript</span>
                            <span>PHP</span>
                            <span>MySQL</span>
                        </div>
                        <a href="https://github.com/vahidmoradilak" target="_blank">مشاهده در گیت‌هاب</a>
                    </div>
                    <div class="project-card">
                        <div class="project-title">طراحی کتاب فروشی برخط</div>
                        <p>فروشگاهی با صفر تا صد امکانات الزم برای خرید کتاب، پیگیری و مشاهده وضعیت</br>
                            سفارش و ثبت</br>
                            افزودن دیدگاه برای کتاب‌ها</p>
                        <div class="project-tech">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JavaScript</span>
                            <span>PHP</span>
                            <span>MySQL</span>
                        </div>
                        <a href="https://github.com/vahidmoradilak" target="_blank">مشاهده در گیت‌هاب</a>
                    </div>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">زبان‌ها</h2>
                <div class="experience-item">
                    <div class="experience-title">زبان لکی</div>
                    <div>سطح: بومی</div>
                </div>
                <div class="experience-item">
                    <div class="experience-title">زبان فارسی</div>
                    <div>سطح: بومی</div>
                </div>
                <div class="experience-item">
                    <div class="experience-title">زبان انگلیسی</div>
                    <div>سطح: پیشرفته</div>
                    <!-- <div>مدرک: IELTS 7.5</div> -->
                </div>
                <div class="experience-item">
                    <div class="experience-title">زبان کردی</div>
                    <div>سطح: پیشرفته</div>
                </div>
                <div class="experience-item">
                    <div class="experience-title">زبان عربی</div>
                    <div>سطح: متوسط</div>
                </div>
                <div class="experience-item">
                    <div class="experience-title">زبان آلمانی</div>
                    <div>سطح: مقدماتی</div>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">گواهینامه‌ها</h2>
                <div class="certificate-item">
                    <div class="certificate-icon">
                        <img src="https://api2.sololearn.com/v2/certificates/CC-SZDKWVTM/image/png?t=639008043617779100" width="20" height="20" alt="">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div>
                        <div class="experience-title">Python</div>
                        <div>صادرکننده: Sololearn</div>
                        <div class="experience-date">1402</div>
                        <a href="https://www.sololearn.com/certificates/CC-SZDKWVTM" target="_blank">مشاهده تصویر گواهی</a>
                    </div>
                </div>
                <div class="certificate-item">
                    <div class="certificate-icon">
                        <img src="https://quera.org/media/public/certificate/0072e135efc84500a4549920dc2a6100.png" width="20" height="20" alt="">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div>
                        <div class="experience-title">PHP</div>
                        <div>صادرکننده: Sololearn</div>
                        <div class="experience-date">1401</div>
                        <a href="https://quera.org/media/public/certificate/0072e135efc84500a4549920dc2a6100.png" target="_blank">مشاهده تصویر گواهی</a>
                    </div>
                </div>
                <div class="certificate-item">
                    <div class="certificate-icon">
                        <img src="https://quera.org/media/public/certificate/45bf641f03d1470692b27878014be8ac.png" width="20" height="20" alt="">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div>
                        <div class="experience-title">SQL</div>
                        <div>صادرکننده: Sololearn</div>
                        <div class="experience-date">1400</div>
                        <a href="https://quera.org/media/public/certificate/45bf641f03d1470692b27878014be8ac.png" target="_blank">مشاهده تصویر گواهی</a>
                    </div>
                </div>
                <div class="certificate-item">
                    <div class="certificate-icon">
                        <img src="https://api2.sololearn.com/v2/certificates/CT-QS0MGBBH/image/jpg?t=639172902619529400" width="20" height="20" alt="">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div>
                        <div class="experience-title">CSS</div>
                        <div>صادرکننده: Sololearn</div>
                        <div class="experience-date">1400</div>
                        <a href="https://www.sololearn.com/certificates/CT-QS0MGBBH" target="_blank">مشاهده تصویر گواهی</a>
                    </div>
                </div>
                <div class="certificate-item">
                    <div class="certificate-icon">
                        <img src="https://quera.org/media/public/certificate/2b7a7fa5b5744226ba8ad51b27a1489d.png" width="20" height="20" alt="">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div>
                        <div class="experience-title">HTML</div>
                        <div>صادرکننده: Sololearn</div>
                        <div class="experience-date">1400</div>
                        <a href="https://quera.org/media/public/certificate/2b7a7fa5b5744226ba8ad51b27a1489d.png" target="_blank">مشاهده تصویر گواهی</a>
                    </div>
                </div>
                <div class="certificate-item">
                    <div class="certificate-icon">
                        <img src="https://quera.org/media/public/certificate/ad426e937bea492a9779c915a18b55d5.png" width="20" height="20" alt="">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div>
                        <div class="experience-title">C++</div>
                        <div>صادرکننده: Sololearn</div>
                        <div class="experience-date">1400</div>
                        <a href="https://quera.org/media/public/certificate/ad426e937bea492a9779c915a18b55d5.png" target="_blank">مشاهده تصویر گواهی</a>
                    </div>
                </div>
                <div class="certificate-item">
                    <div class="certificate-icon">
                        <img src="https://quera.org/media/public/certificate/1b1f29ab8ccb490197925e37f88f15a3.png" width="20" height="20" alt="">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div>
                        <div class="experience-title">C#</div>
                        <div>صادرکننده: Sololearn</div>
                        <div class="experience-date">1400</div>
                        <a href="https://quera.org/media/public/certificate/1b1f29ab8ccb490197925e37f88f15a3.png" target="_blank">مشاهده تصویر گواهی</a>
                    </div>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">دستاوردها و افتخارات</h2>
                <div class="achievement-item">
                    <div class="experience-title">رتبه 17 کنکور کارشناسی ارشد</div>
                    <div>سازمان سنجش</div>
                    <div class="experience-date">1402</div>
                </div>
                <div class="achievement-item">
                    <div class="experience-title">جزء 10 درصد برتر استعدادهای درخشان</div>
                    <div>مدیریت آموزشی دانشگاه شهید رجایی</div>
                    <div class="experience-date">1401</div>
                </div>
                <div class="achievement-item">
                    <div class="experience-title">نماینده کل ورودی‌های 97 رشته کامپیوتر</div>
                    <div>رییس دانشکده مهندسی کامپیوتر</div>
                    <div class="experience-date">1398</div>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">عضویت در مجموعه‌ها</h2>
                <div class="volunteer-item">
                    <div class="experience-title">سازمان بین‌المللی دانشجویان</div>
                    <div>عضو ویژه</div>
                    <div class="experience-date">1404 - اکنون</div>
                </div>
                <div class="volunteer-item">
                    <div class="experience-title">کانون دانش‌آموختگان طرح‌ولایت</div>
                    <div>خادم</div>
                    <div class="experience-date">1400 - اکنون</div>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">فعالیت‌های داوطلبانه</h2>
                <div class="volunteer-item">
                    <div class="experience-title">مدرس کارگاه‌های برنامه‌نویسی</div>
                    <div>انجمن علمی دانشکده مهندسی کامپیوتر</div>
                    <div class="experience-date">1398 - 1403</div>
                </div>
            </div>


            <div class="section">
                <h2 class="section-title">علاقه‌مندی‌ها</h2>
                <div class="interests-list">
                    <span class="interest-item">پردازش زبان طبیعی</span>
                    <span class="interest-item">داده کاوی</span>
                    <span class="interest-item">پاسخگویی به سوالات</span>
                    <span class="interest-item">هوش مصنوعی</span>
                    <span class="interest-item">یادگیری ماشین</span>
                    <span class="interest-item">یادگیری عمیق</span>
                    <span class="interest-item">مدل‌های زبانی بزرگ</span>
                    <span class="interest-item">عیب‌یابی خطا</span>
                    <span class="interest-item">توسعه و امنیت نرم‌افزار</span>
                </div>
            </div>
        </div>

        <div class="en-content">
            <h1>Vahid Moradi Lak</h1>
            
            <div class="profile-image" style="text-align: center;">
                <img src="images/vahid_lab.jpg" alt="Profile Picture">
            </div>

            <div class="contact-info" style="text-align: center;">
                <p>Email: moradilak@ut.ac.ir | Phone: +98 935 217 8585</p>
                <p>Address: North Kargar Street, Amirabad, Tehran, Iran</p>
                <div class="social-links">
                    <a href="https://linkedin.com/in/moradilak" target="_blank" class="social-link">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/vahidmoradilak" target="_blank" class="social-link">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://twitter.com/vahidmoradilak" target="_blank" class="social-link">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">About Me</h2>
                <p style="text-align:justify">M.Sc. in Computer Engineering (Software Engineering); Experienced in full-stack development, software engineering, security, and encryption using modern technologies. Since starting my master's, I have also been working in data analysis, NLP, LLMs, LangChain, GraphChain, Agents, and related fields.</br>
                    I prefer serving my country over working abroad and wish to work in areas where my skills are most needed.</br>
                    Overall, with strong skills across diverse fields and experience with various frameworks, I enjoy learning and gaining new experience.</p>
                    <a style="display: block; text-align: center;" href="cv-en-v4.pdf" class="btn btn-secondary" download="" data-translate="download_cv">Download CV</a>
            </div>

            <div class="section">
                <h2 class="section-title">Education</h2>
                <div class="experience-item">
                    <div class="experience-title">Master of Science in Software Engineering</div>
                    <div>University of Tehran</div>
                    <div>Major: Software Engineering</div>
                    <div>GPA: Studying</div>
                    <div class="experience-date">2023 - Present</div>
                </div>
                <div class="experience-item">
                    <div class="experience-title">Bachelor of Science in Software Engineering</div>
                    <div>Shahid Rajaee Teacher Training University</div>
                    <div>Major: Software Engineering</div>
                    <div>GPA: 18.31/20</div>
                    <div class="experience-date">2018 - 2022</div>
                </div>
                <div class="experience-item">
                    <div class="experience-title">Diploma in Mathematics and Physics</div>
                    <div>Shahid Beheshti High School</div>
                    <div>Major: Mathematics and Physics</div>
                    <div>GPA: 19.38/20</div>
                    <div class="experience-date">2015 - 2018</div>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">Work Experience</h2>
                <div class="experience-item">
                    <div class="experience-title">Senior Developer</div>
                    <div>Pars Technology Company</div>
                    <div class="experience-date">2023 - 2024</div>
                    <ul>
                        <li>Creating a native messaging app for specific groups</li>
                        <li>Development of custom VPN/proxy solutions</li>
                        <li>Analyze, test, and write algorithms for post-quantum encryption</li>
                        <li>Mentoring and training novice developers</li>
                    </ul>
                </div>
                <div class="experience-item">
                    <div class="experience-title">Network and Hardware Intern</div>
                    <div>Shahid Rajaee University</div>
                    <div class="experience-date">2021 - 2022</div>
                    <ul>
                        <li>Troubleshooting and fixing site problems</li>
                        <li>Repairing and upgrading faulty systems</li>
                    </ul>
                </div>
                <div class="experience-item">
                    <div class="experience-title">Full stack</div>
                    <div>Shahid Rajaee University</div>
                    <div class="experience-date">2020 - 2021</div>
                    <ul>
                        <li>Designing a pre-registration system for student department selection</li>
                        <li>Implementing an authentication system</li>
                        <li>Developing reusable components</li>
                        <li>SEO and website performance optimization</li>
                    </ul>
                </div>
            </div>
                
            <div class="section">
                <h2 class="section-title">Skills</h2>
                <div class="skill-category">
                    <h3 class="skill-category-title">Programming Languages</h3>
                    <div class="skills-list">
                        <span class="skill-item">c</span>
                        <span class="skill-item">c++</span>
                        <span class="skill-item">c#</span>
                        <span class="skill-item">HTML</span>
                        <span class="skill-item">CSS</span>
                        <span class="skill-item">JavaScript</span>
                        <span class="skill-item">PHP</span>
                        <span class="skill-item">Go</span>
                        <span class="skill-item">Python</span>
                    </div>
                </div>
                <div class="skill-category">
                    <h3 class="skill-category-title">Frameworks & Libraries</h3>
                    <div class="skills-list">
                        <span class="skill-item">Qt</span>
                        <span class="skill-item">Jupyter</span>
                        <span class="skill-item">Django</span>
                        <span class="skill-item">Transformers</span>
                        <span class="skill-item">Datasets</span>
                    </div>
                </div>
                <div class="skill-category">
                    <h3 class="skill-category-title">Tools & Technologies</h3>
                    <div class="skills-list">
                        <span class="skill-item">Git</span>
                        <span class="skill-item">Docker</span>
                        <span class="skill-item">Hugging Face</span>
                        <span class="skill-item">Colab</span>
                        <span class="skill-item">Kaggle</span>
                    </div>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">Projects</h2>
                <div class="section-grid">
                    <div class="project-card">
                        <div class="project-title">Queen-McCluskey</div>
                        <p>Obtaining PI and EPI numbers in logic circuits automatically</p>
                        <div class="project-tech">
                            <span>c++</span>
                            <span>c</span>
                            <span>Qt</span>
                        </div>
                        <a href="https://github.com/vahidmoradilak/Queen-McCluskey" target="_blank">View on GitHub</a>
                    </div>
                    <div class="project-card">
                        <div class="project-title">Native messenger</div>
                        <p>Creating a messaging application based on quantum post encryption for specific groups</p>
                        <div class="project-tech">
                            <span>c</span>
                            <span>Python</span>
                            <span>React</span>
                            <span>TypeScript</span>
                            <span>Node.js</span>
                            <span>MongoDB</span>
                        </div>
                        <a href="https://github.com/vahidmoradilak" target="_blank">View on GitHub</a>
                    </div>
                    <div class="project-card">
                        <div class="project-title">Unit selection system</div>
                        <p>Design and development of a system for preregistration of student unit selection</p>
                        <div class="project-tech">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JavaScript</span>
                            <span>PHP</span>
                            <span>MySQL</span>
                        </div>
                        <a href="https://github.com/vahidmoradilak" target="_blank">View on GitHub</a>
                    </div>
                    <div class="project-card">
                        <div class="project-title">Online bookstore design</div>
                        <p>A store with all the necessary features to buy books, track and view</br>
                            order status, and</br>
                            add comments for books.</p>
                        <div class="project-tech">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JavaScript</span>
                            <span>PHP</span>
                            <span>MySQL</span>
                        </div>
                        <a href="https://github.com/vahidmoradilak" target="_blank">View on GitHub</a>
                    </div>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">Languages</h2>
                <div class="experience-item">
                    <div class="experience-title">Lakish</div>
                    <div>Level: Native</div>
                </div>
                <div class="experience-item">
                    <div class="experience-title">Persian</div>
                    <div>Level: Native</div>
                </div>
                <div class="experience-item">
                    <div class="experience-title">English</div>
                    <div>Level: Advanced</div>
                    <!-- <div>Certificate: IELTS 7.5</div> -->
                </div>
                <div class="experience-item">
                    <div class="experience-title">Kurdish</div>
                    <div>Level: Advanced</div>
                </div>
                <div class="experience-item">
                    <div class="experience-title">Arabic</div>
                    <div>Level: Intermediate</div>
                </div>
                <div class="experience-item">
                    <div class="experience-title">German</div>
                    <div>Level: Beginner</div>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">Certificates</h2>
                <div class="certificate-item">
                    <div class="certificate-icon">
                        <img src="https://api2.sololearn.com/v2/certificates/CC-SZDKWVTM/image/png?t=639008043617779100" width="20" height="20" alt="">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div>
                        <div class="experience-title">Python</div>
                        <div>Issuer: Sololearn</div>
                        <div class="experience-date">2023</div>
                        <a href="https://www.sololearn.com/certificates/CC-SZDKWVTM" target="_blank">View certificate image</a>
                    </div>
                </div>
                <div class="certificate-item">
                    <div class="certificate-icon">
                        <img src="https://quera.org/media/public/certificate/0072e135efc84500a4549920dc2a6100.png" width="20" height="20" alt="">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div>
                        <div class="experience-title">PHP</div>
                        <div>Issuer: Sololearn</div>
                        <div class="experience-date">2022</div>
                        <a href="https://quera.org/media/public/certificate/0072e135efc84500a4549920dc2a6100.png" target="_blank">View certificate image</a>
                    </div>
                </div>
                <div class="certificate-item">
                    <div class="certificate-icon">
                        <img src="https://quera.org/media/public/certificate/45bf641f03d1470692b27878014be8ac.png" width="20" height="20" alt="">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div>
                        <div class="experience-title">SQL</div>
                        <div>Issuer: Sololearn</div>
                        <div class="experience-date">2021</div>
                        <a href="https://quera.org/media/public/certificate/45bf641f03d1470692b27878014be8ac.png" target="_blank">View certificate image</a>
                    </div>
                </div>
                <div class="certificate-item">
                    <div class="certificate-icon">
                        <img src="https://api2.sololearn.com/v2/certificates/CT-QS0MGBBH/image/jpg?t=639172902619529400" width="20" height="20" alt="">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div>
                        <div class="experience-title">CSS</div>
                        <div>Issuer: Sololearn</div>
                        <div class="experience-date">2021</div>
                        <a href="https://www.sololearn.com/certificates/CT-QS0MGBBH" target="_blank">View certificate image</a>
                    </div>
                </div>
                <div class="certificate-item">
                    <div class="certificate-icon">
                        <img src="https://quera.org/media/public/certificate/2b7a7fa5b5744226ba8ad51b27a1489d.png" width="20" height="20" alt="">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div>
                        <div class="experience-title">HTML</div>
                        <div>Issuer: Sololearn</div>
                        <div class="experience-date">2021</div>
                        <a href="https://quera.org/media/public/certificate/2b7a7fa5b5744226ba8ad51b27a1489d.png" target="_blank">View certificate image</a>
                    </div>
                </div>
                <div class="certificate-item">
                    <div class="certificate-icon">
                        <img src="https://quera.org/media/public/certificate/ad426e937bea492a9779c915a18b55d5.png" width="20" height="20" alt="">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div>
                        <div class="experience-title">C++</div>
                        <div>Issuer: Sololearn</div>
                        <div class="experience-date">2021</div>
                        <a href="https://quera.org/media/public/certificate/ad426e937bea492a9779c915a18b55d5.png" target="_blank">View certificate image</a>
                    </div>
                </div>
                <div class="certificate-item">
                    <div class="certificate-icon">
                        <img src="https://quera.org/media/public/certificate/1b1f29ab8ccb490197925e37f88f15a3.png" width="20" height="20" alt="">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div>
                        <div class="experience-title">C#</div>
                        <div>Issuer: Sololearn</div>
                        <div class="experience-date">2021</div>
                        <a href="https://quera.org/media/public/certificate/1b1f29ab8ccb490197925e37f88f15a3.png" target="_blank">View certificate image</a>
                    </div>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">Achievements and Honors</h2>
                <div class="achievement-item">
                    <div class="experience-title">Rank 17 in the Master's Degree Entrance Exam</div>
                    <div>National Organization of Educational Testing</div>
                    <div class="experience-date">2023</div>
                </div>
                <div class="achievement-item">
                    <div class="experience-title">Among the top 10% of brilliant talents</div>
                    <div>Educational Management of Shahid Rajaee University</div>
                    <div class="experience-date">2020</div>
                </div>
                <div class="achievement-item">
                    <div class="experience-title">Representative of total entries in 97 computer disciplines</div>
                    <div>Dean of the Computer Engineering Faculty</div>
                    <div class="experience-date">2019</div>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">Memberships</h2>
                <div class="volunteer-item">
                    <div class="experience-title">International Student Organization</div>
                    <div>Special member</div>
                    <div class="experience-date">2025 - present</div>
                </div>
                <div class="volunteer-item">
                    <div class="experience-title">Tarhvelayat Alumni Association</div>
                    <div>Volunteer</div>
                    <div class="experience-date">2019 - present</div>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">Volunteer Activities</h2>
                <div class="volunteer-item">
                    <div class="experience-title">Programming Workshop Instructor</div>
                    <div>Scientific Association of the Faculty of Computer Engineering</div>
                    <div class="experience-date">2019 - 2024</div>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">Interests</h2>
                <div class="interests-list">
                    <span class="interest-item">Natural Language Processing (NLP)</span>
                    <span class="interest-item">Data Mining</span>
                    <span class="interest-item">Question Answering</span>
                    <span class="interest-item">Artificial Intelligence (AI)</span>
                    <span class="interest-item">Machine Learning (ML)</span>
                    <span class="interest-item">Deep Learning</span>
                    <span class="interest-item">Large Language Models (LLMs)</span>
                    <span class="interest-item">Error Troubleshooting</span>
                    <span class="interest-item">Software Development and Security</span>
                </div>
            </div>
        </div>
    </div>

    <p class="enamad"><a referrerpolicy='origin' target='_blank' href='https://trustseal.enamad.ir/?id=5253644&Code=hkM6px2BDgc7kTytSjvm93qYhdsgbFt1'><img referrerpolicy='origin' src='https://trustseal.enamad.ir/logo.aspx?id=5253644&Code=hkM6px2BDgc7kTytSjvm93qYhdsgbFt1' alt='' style='cursor:pointer' code='hkM6px2BDgc7kTytSjvm93qYhdsgbFt1'></a></p>
    
    <script>
        function toggleLanguage() {
            const faContent = document.querySelector('.fa-content');
            const enContent = document.querySelector('.en-content');
            const button = document.querySelector('.language-switch');
            const html = document.documentElement;

            if (faContent.classList.contains('active')) {
                faContent.classList.remove('active');
                enContent.classList.add('active');
                button.textContent = 'فارسی';
                html.lang = 'en';
                html.dir = 'ltr';
            } else {
                enContent.classList.remove('active');
                faContent.classList.add('active');
                button.textContent = 'English';
                html.lang = 'fa';
                html.dir = 'rtl';
            }
        }
    </script>

    <script>
        function toggleTheme() {
            const html = document.documentElement;
            const btn = document.querySelector('.theme-switch');
            const next = html.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
            html.setAttribute('data-theme', next);
            btn.textContent = next === 'dark' ? '☀️' : '🌙';
            try { localStorage.setItem('theme', next); } catch (e) {}
        }

        try {
            if (localStorage.getItem('theme') === 'dark') {
                document.documentElement.setAttribute('data-theme', 'dark');
                document.querySelector('.theme-switch').textContent = '☀️';
            }
        } catch (e) {}
    </script>

</body>
</html>