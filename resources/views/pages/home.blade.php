<!DOCTYPE html>

<html class="dark" dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <br>
    <title>Safia Springs | مياه ينابيع صافيا - نقاء طبيعي من قلب الجزيرة</title>
    <meta name="description" content="استمتع بأفضل مياه معدنية طبيعية من ينابيع صافيا. نقاء لا يضاهى، توازن معدني مثالي وتوصيل سريع في المملكة العربية السعودية." />
    <meta name="keywords" content="مياه صافيا, مياه معدنية السعودية, مياه ينابيع طبيعية, توصيل مياه الرياض, مياه شرب نقية, Safia Springs" />
    <meta name="author" content="Safia Springs" />
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Open Graph / Social Media -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="Safia Springs | مياه ينابيع صافيا - نقاء من قلب الطبيعة" />
    <meta property="og:description" content="اكتشف نقاء مياه ينابيع صافيا الطبيعية. توازن معدني فريد وتصميم عصري يلامس الروح." />
    <meta property="og:image" content="{{ asset('images/safia-og-preview.jpg') }}" />
    <!-- CSS and JS (Direct Paths) -->
    <link rel="stylesheet" href="/css/app.css" />
    <script src="/js/app.js" defer></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&amp;family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&amp;family=Plus+Jakarta+Sans:wght@300;400;500;600;700&amp;family=IBM+Plex+Sans+Arabic:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />


</head>

<body class="bg-surface text-on-surface font-body selection:bg-secondary/30">
    <div class="droplet-container fixed inset-0 z-[5] pointer-events-none overflow-hidden" id="global-droplets"></div>
    <!-- Top Navigation -->
    <nav
        class="fixed top-0 w-full z-50 bg-slate-950/20 backdrop-blur-xl transition-all duration-500 ease-[cubic-bezier(0.2,0.8,0.2,1)] px-6 md:px-12 py-6">
        <div class="flex justify-between items-center w-full max-w-screen-2xl mx-auto">
            <div class="flex items-center gap-8">
                <a class="text-2xl font-headline italic text-secondary tracking-wide" href="#">Safia Springs</a>
                <div class="hidden md:flex gap-8 items-center" id="nav-container">
                    <a class="nav-link font-label tracking-wide text-sm" href="#heritage">من نحن</a>
                    <a class="nav-link font-label tracking-wide text-sm" href="#products">منتجاتنا</a>
                    <a class="nav-link font-label tracking-wide text-sm" href="#sustainability">الاستدامة</a>
                    <a class="nav-link font-label tracking-wide text-sm" href="#contact">اتصل بنا</a>
                </div>
            </div>
            <div class="flex items-center gap-6">
                <!-- <button class="text-white/80 hover:text-white font-label text-sm">English</button> -->
                <button
                    class="bg-primary-container text-secondary px-8 py-3 rounded-full font-label text-sm border border-secondary/20 hover:border-secondary/80 transition-all duration-500">
                    <a href="https://wa.me/{{ config('contact.whatsapp') }}">
                        اطلب الان </a></button>
            </div>
        </div>
    </nav>

    <main>
        <!-- Hero Section -->
        <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-surface pt-20">
            <div class="absolute inset-0 z-0">
                <div class="absolute inset-0 bg-gradient-to-b from-surface/20 via-surface/40 to-surface"></div>
                <img alt="Water Surface" class="w-full h-full object-cover opacity-20 mix-blend-screen"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD5dRxGt0Br7sm9X-pG1fO0H-oDwrdlj5riqG4o4FaE3g46jSgl7CXs5JttDqxK3TxpuGO_0OkuE3MxCMJL56CMO5r-cKAOVqfb_niV4YLLz0NH9d_gJ0keJZQmCScu_0FeSyxIX0o7R1ZUILho-Ly4qgLwNOwx3gKe9E2F9Sumyym4ZPrlYJyE2vQ0y4WEwGfOI4IMhbBGQfghZcx1464Abk780PthgcC5bY9Tkn9-GsdaS9ac4xGFUiAKXq3PqjH21Y-ZBp_MTdw" />
            </div>
            <div class="relative z-10 w-full max-w-screen-2xl mx-auto px-6 md:px-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="order-2 lg:order-1 flex justify-center items-center">
                        <div class="relative w-full max-w-2xl flex items-center justify-center pop-out-container h-[400px] md:h-[600px]">
                            <div class="absolute w-[80%] aspect-square bg-secondary/10 rounded-full blur-[120px] scale-110">
                            </div>
                            <!-- Left Bottle -->
                            <img alt="Safia Bottle Left"
                                class="relative z-10 w-full h-full object-contain product-shadow transition-transform duration-500 ease-out"
                                id="bottle-left" src="/images/Gemini_Generated_Image_xd66i8xd66i8xd66-removebg-preview-removebg-preview (1).png"
                                style="clip-path: inset(0 45% 0 0);" />
                            <!-- Right Bottle -->
                            <img alt="Safia Bottle Right"
                                class="absolute z-10 w-full h-full object-contain product-shadow transition-transform duration-500 ease-out"
                                id="bottle-right" src="/images/Gemini_Generated_Image_xd66i8xd66i8xd66-removebg-preview-removebg-preview (1).png"
                                style="clip-path: inset(0 0 0 45%);" />
                        </div>
                    </div>
                    <div class="order-1 lg:order-2 text-right reveal">
                        <h2 class="text-secondary font-headline text-xl md:text-2xl mb-4 tracking-[0.2em] uppercase">Purity
                            Defined</h2>
                        <h1 class="text-5xl md:text-7xl lg:text-8xl font-headline text-white mb-8 leading-tight">نقاء من قلب
                            الطبيعة</h1>
                        <p
                            class="text-on-surface-variant text-lg md:text-xl max-w-2xl ms-auto mb-12 font-light leading-relaxed">
                            مياه نبع صافيا هي المنتج الوحيد والأساسي لشركة تعبئة المياه الصحية. تم تأسيس الشركة عام 1973 وحافظت على سعيها الدائم للابتكار والاستفادة من 50 عامًا من الخبرة في مجال تعبئة المياه.


                        </p>
                        <div class="flex flex-col md:flex-row items-center justify-start gap-6">
                            <a class="liquid-gradient text-on-secondary px-12 py-5 rounded-full font-label text-sm tracking-widest ghost-border shadow-[0_0_40px_rgba(201,168,76,0.2)] hover:scale-105 transition-all duration-500 w-full md:w-auto text-center"
                                href="#products">استكشف مجموعتنا</a>
                            <a class="text-white glass-card px-12 py-5 rounded-full font-label text-sm tracking-widest ghost-border hover:bg-white/10 transition-all duration-500 w-full md:w-auto text-center"
                                href="#heritage">قصتنا</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#heritage" class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce cursor-pointer">
                <span class="material-symbols-outlined text-secondary text-3xl">expand_more</span>
            </a>
        </section>
        <!-- Wave Transition -->
        <div class="wave-container bg-surface">
            <svg class="fill-surface-container-low" preserveaspectratio="none" viewbox="0 0 1200 120">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z">
                </path>
            </svg>
        </div>
        <!-- About Section -->
        <section class="py-24 md:py-40 bg-surface-container-low overflow-hidden" id="heritage">
            <div class="max-w-screen-2xl mx-auto px-6 md:px-12 reveal">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                    <div class="relative order-2 lg:order-1">
                        <div class="absolute -top-20 -right-20 w-80 h-80 bg-secondary/10 rounded-full blur-[120px]"></div>
                        <div class="pop-out-container relative group">
                            <div
                                class="absolute inset-0 bg-secondary/5 rounded-3xl -rotate-6 ghost-border scale-95 opacity-50 group-hover:rotate-0 transition-transform duration-700">
                            </div>
                            <img class="relative z-10 w-2/3 mx-auto h-auto object-contain drop-shadow-[0_20px_40px_rgba(0,0,0,0.4)] opacity-10 parallax-img"
                                src="/images/Gemini_Generated_Image_qo95bqo95bqo95bq.png" alt="Safia Family 3D Bottle" />
                        </div>
                        <div class="absolute -bottom-10 -left-10 glass-card p-8 rounded-2xl z-20 ghost-border max-w-xs">
                            <p class="text-secondary font-headline text-4xl mb-2 italic">8.1 pH</p>
                            <p class="text-on-surface-variant text-sm font-label tracking-widest uppercase">توازن قلوي مثالي
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-8 order-1 lg:order-2">
                        <span class="text-secondary font-label text-sm uppercase tracking-[0.3em]">The Source</span>
                        <h2 class="text-4xl md:text-6xl font-headline text-white leading-tight">إرث من النقاء
                            المتدفق<br />
                            <!-- <span class="text-secondary italic">A Legacy of Pure Flow</span> -->
                        </h2>
                        <p class="text-on-surface-variant text-lg leading-relaxed font-light">
                            تتميز مياه نبع صافيا بنقاوتها وطعمها المميز. وهي تنبع من المياه الجوفية العميقة المحمية. ويقع مصنعنا في منطقة سعد بمحافظة رماح على بعد 120 كم شرق الرياض، بعيداً عن المنشآت الحضرية والتلوث الخارجي.

                            نستخدم أحدث التقنيات وأكثرها تطوراً في عملية التعبئة الآلية بالكامل ونلتزم بأعلى معايير الصحة والسلامة. منذ البداية، نحرص على تقديم أعلى معايير جودة للمياه المعبأة مباشرة من المصدر.</p>
                        <div class="mt-8 flex gap-12">
                            <div>
                                <p class="text-white text-3xl font-headline">0.00%</p>
                                <p class="text-on-surface-variant text-xs font-label uppercase mt-1 tracking-widest">شوائب
                                </p>
                            </div>
                            <div>
                                <p class="text-white text-3xl font-headline">100%</p>
                                <p class="text-on-surface-variant text-xs font-label uppercase mt-1 tracking-widest">معادن
                                    طبيعية</p>
                            </div>
                            <div>
                                <p class="text-white text-3xl font-headline">20+</p>
                                <p class="text-on-surface-variant text-xs font-label uppercase mt-1 tracking-widest">عاماً
                                    من التميز</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Products Section -->
        <section class="py-24 md:py-40 bg-surface reveal" id="products">
            <div class="max-w-screen-2xl mx-auto px-6 md:px-12 mb-20 text-center">
                <h2 class="text-secondary font-label text-sm uppercase tracking-[0.3em] mb-4">Collection</h2>
                <h3 class="text-4xl md:text-6xl font-headline text-white italic">التشكيلة المختارة</h3>
                <div class="w-24 h-[2px] bg-secondary/40 mx-auto mt-6"></div>
            </div>
            <div class="max-w-screen-2xl mx-auto px-6 md:px-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="flex flex-col gap-8 h-full">
                        <div
                            class="glass-card p-10 rounded-3xl ghost-border flex items-center justify-between group hover:border-secondary/40 transition-all duration-700 h-1/2 relative overflow-hidden reveal">
                            <div class="z-10">
                                <h4 class="text-2xl font-headline text-white mb-2">المجموعة اليومية</h4>
                                <p class="text-on-surface-variant text-sm font-label tracking-widest mb-6">330ml • Pack of
                                    24</p>
                                <button
                                    class="gold-gradient text-on-secondary px-6 py-2 rounded-full font-label text-xs uppercase tracking-widest font-bold hover:scale-105 transition-all duration-500 shadow-lg">
                                    <a href="https://wa.me/{{ config('contact.whatsapp') }}">
                                        اطلب الان </a>
                                </button>
                            </div>
                            <div
                                class="relative w-1/3 aspect-square flex items-center justify-center bg-secondary/5 rounded-lg">
                                <img alt="Safia 330ml"
                                    class="h-4/5 object-contain group-hover:scale-110 transition-transform duration-700 parallax-img"
                                    src="/images/safia-3d-family-removebg-preview.png" />
                            </div>
                        </div>
                        <div
                            class="glass-card p-10 rounded-3xl ghost-border flex items-center justify-between group hover:border-secondary/40 transition-all duration-700 h-1/2">
                            <div class="z-10">
                                <h4 class="text-2xl font-headline text-white mb-2">حجم العائلة</h4>
                                <p class="text-on-surface-variant text-sm font-label tracking-widest mb-6">Gallon Pure
                                    Refill 5L</p>
                                <button
                                    class="gold-gradient text-on-secondary px-6 py-2 rounded-full font-label text-xs uppercase tracking-widest font-bold hover:scale-105 transition-all duration-500 shadow-lg">
                                    اطلب الآن
                                </button>
                            </div>
                            <div
                                class="flex items-center justify-center w-24 h-24 text-secondary/30 group-hover:text-secondary/60 transition-colors duration-500">
                                <span class="material-symbols-outlined text-7xl"
                                    style="font-variation-settings: 'FILL' 1">water_drop</span>
                            </div>

                        </div>
                    </div>
                    <div
                        class="glass-card rounded-3xl ghost-border group hover:border-secondary/40 transition-all duration-700 relative overflow-hidden flex flex-col md:flex-row items-center justify-end min-h-[600px] reveal">
                        <div class="absolute inset-0 w-full h-full">
                            <img alt="Royal Edition Background"
                                class="w-full h-full object-cover object-center opacity-70 group-hover:scale-105 transition-transform duration-1000"
                                src="/images/family-bottle.png" />
                            <div
                                class="absolute inset-0 bg-gradient-to-l from-surface via-transparent to-transparent opacity-80">
                            </div>
                        </div>
                        <div class="relative z-10 p-12 text-right flex flex-col items-end gap-4 max-w-sm">
                            <h4 class="text-4xl md:text-5xl font-headline text-white leading-tight">الإصدار الملكي</h4>
                            <p class="text-secondary font-label tracking-[0.2em] uppercase text-sm">Litre Glass 1.5</p>
                            <div class="mt-8">
                                <button
                                    class="gold-gradient text-on-secondary px-6 py-2 rounded-full font-label text-xs uppercase tracking-widest font-bold hover:scale-105 transition-all duration-500 shadow-lg">
                                    <a href="https://wa.me/{{ config('contact.whatsapp') }}">
                                        اطلب الان </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Us -->
        <section class="py-24 bg-surface-container-high relative overflow-hidden">
            <div
                class="max-w-screen-2xl mx-auto px-6 md:px-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 relative z-10">
                <div class="flex flex-col gap-4">
                    <span class="material-symbols-outlined text-secondary text-5xl text-center">water_drop</span>
                    <h5 class="text-white font-headline text-xl mt-4 text-center">مصدر بكر</h5>
                    <p class="text-on-surface-variant text-sm font-light leading-relaxed text-center">يتم استخراجها من طبقات المياه
                        الجوفية العميقة، والمعزولة طبيعياً عن الملوثات البيئية الحديثة.</p>
                </div>
                <div class="flex flex-col gap-4">
                    <span class="material-symbols-outlined text-secondary text-5xl text-center">verified</span>
                    <h5 class="text-white font-headline text-xl mt-4 text-center">جودة معتمدة</h5>
                    <p class="text-on-surface-variant text-sm font-light leading-relaxed text-center">نلتزم بأعلى معايير سلامة الأغذية
                        الدولية وشهادات الأيزو للمياه المعبأة.</p>
                </div>
                <div class="flex flex-col gap-4">
                    <span class="material-symbols-outlined text-secondary text-5xl text-center">eco</span>
                    <h5 class="text-white font-headline text-xl mt-4 text-center">توازن معدني</h5>
                    <p class="text-on-surface-variant text-sm font-light leading-relaxed text-center">مزيج فريد من الكالسيوم
                        والمغنيسيوم والبوتاسيوم يوفر طعماً سلساً ومنعشاً.</p>
                </div>
                <div class="flex flex-col gap-4">
                    <span class="material-symbols-outlined text-secondary text-5xl text-center">precision_manufacturing</span>
                    <h5 class="text-white font-headline text-xl mt-4 text-center">تعبئة متطورة</h5>
                    <p class="text-on-surface-variant text-sm font-light leading-relaxed text-center">تضمن تكنولوجيا التعبئة المتطورة
                        عدم وجود أي تلامس بشري من المصدر حتى الختم.</p>
                </div>
            </div>
        </section>
        <!-- Sustainability Section -->
        <section class="relative py-40 overflow-hidden" id="sustainability">
            <div class="absolute inset-0 z-0">
                <img alt="Nature conservation" class="w-full h-full object-cover opacity-40 parallax-img"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCUHT8UyWYxOdRhACAUrdQa8QD3lf7sJtFlCdxthbtp7CVgwmlI7Qx14z9xAN01CAiN6bqXpAGEz2jzeGeHcvtliL4Tif79Vg-yPP_c-wi1SOHEASRSFDC-u0NMzj-idmCvy1bEqtJfOnRfG_9tY8OE157tkDTwrWnFVFhLZhJ1uavsTWzLHM5iaeKCem56D1zoD6yn78ALsrdIA5LJsjoTy5pp3GTiqiVSCKFc-J_ARd0sqLTGrfRqoSaU__hAkKREQ-XRpK9PwD4" />
                <div class="absolute inset-0 bg-surface/50"></div>
            </div>
            <div class="relative z-10 max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-secondary font-label text-sm uppercase tracking-[0.3em] mb-4">Our Commitment</h2>
                <h3 class="text-4xl md:text-6xl font-headline text-white mb-10">حماية مصدر الحياة</h3>
                <p class="text-on-surface-variant text-xl leading-relaxed font-light mb-12">
                    الاستدامة ليست خياراً، بل هي أساسنا. تقود ينابيع صافيا التعبئة المسؤولة بيئياً في المنطقة، باستخدام مواد
                    قابلة لإعادة التدوير بنسبة 100% ومرافق استخراج تعمل بالطاقة الشمسية لضمان أن يكون أثرنا نقياً مثل
                    مياهنا.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
                    <div class="glass-card p-6 rounded-2xl ghost-border">
                        <p class="text-secondary text-3xl font-headline mb-2">100%</p>
                        <p class="text-white text-xs font-label uppercase tracking-widest">بلاستيك قابل للتدوير</p>
                    </div>
                    <div class="glass-card p-6 rounded-2xl ghost-border">
                        <p class="text-secondary text-3xl font-headline mb-2">30%</p>
                        <p class="text-white text-xs font-label uppercase tracking-widest">بلاستيك أقل</p>
                    </div>
                    <div class="glass-card p-6 rounded-2xl ghost-border">
                        <p class="text-secondary text-3xl font-headline mb-2">طاقة شمسية</p>
                        <p class="text-white text-xs font-label uppercase tracking-widest">مصنع يعمل بالشمس</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Updated Contact Us Section -->
        <section class="py-24 md:py-40 bg-surface overflow-hidden reveal" id="contact">
            <div class="max-w-screen-2xl mx-auto px-6 md:px-12">
                <h2 class="text-3xl md:text-5xl font-headline text-secondary mb-16 text-right">تواصل معنا</h2>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-stretch min-h-[600px]">
                    <!-- Right Column: Map -->
                    <div class="relative order-1 lg:order-2 flex items-center justify-center p-8 bg-[#0a0a0a]">
                        <div class="absolute inset-0 map-container opacity-40 hover:opacity-100 transition-opacity duration-700">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d463879.4005891341!2d46.4326545734375!3d24.7259458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d874173%3A0xa602330743f3513b!2zUmpeYWRoIFNhdWRpIEFyYWJpYQ!5e0!3m2!1sen!2ssa!4v1712666800000!5m2!1sen!2ssa"
                                class="w-full h-full border-0 grayscale invert brightness-75 contrast-125 hover:grayscale-0 hover:invert-0 hover:brightness-100 hover:contrast-100 transition-all duration-700"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                        <!-- Location Pin -->
                        <div class="relative z-10 flex flex-col items-center">
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined text-secondary text-8xl drop-shadow-[0_0_20px_rgba(201,168,76,0.4)]">location_on</span>
                                <div
                                    class="absolute -bottom-2 left-1/2 -translate-x-1/2 w-12 h-4 bg-black/40 rounded-[100%] blur-sm">
                                </div>
                            </div>
                            <!-- Overlay Card -->
                            <div
                                class="mt-4 glass-card p-6 rounded-xl border border-secondary/20 min-w-[280px] text-right">
                                <h4 class="text-secondary font-headline text-xl mb-2">المقر الرئيسي</h4>
                                <p class="text-white/80 text-sm mb-4">منطقة ينبع، المملكة العربية السعودية</p>
                                <p class="text-secondary font-label tracking-widest text-lg font-bold">SAFIA 800 966+</p>
                            </div>
                        </div>
                    </div>
                    <!-- Left Column: Form -->
                    <div class="relative order-2 lg:order-1 p-10 md:p-16 flex flex-col justify-center">
                        <form class="space-y-12">
                            <div class="relative group">
                                <input
                                    class="w-full bg-transparent border-0 border-b border-white/20 focus:ring-0 focus:border-secondary text-white py-4 transition-all placeholder:text-transparent peer hover:border-secondary transition-colors duration-500"
                                    id="name" placeholder="الاسم الكامل" type="text" />
                                <label
                                    class="absolute right-0 top-4 text-white/40 font-label text-sm uppercase tracking-widest transition-all peer-focus:-top-6 peer-focus:text-secondary peer-focus:text-xs peer-[:not(:placeholder-shown)]:-top-6 peer-[:not(:placeholder-shown)]:text-secondary peer-[:not(:placeholder-shown)]:text-xs"
                                    for="name">الاسم الكامل</label>
                            </div>
                            <div class="relative group">
                                <input
                                    class="w-full bg-transparent border-0 border-b border-white/20 focus:ring-0 focus:border-secondary text-white py-4 transition-all placeholder:text-transparent peer hover:border-secondary transition-colors duration-500"
                                    id="phone" placeholder="رقم الجوال" type="tel" />
                                <label
                                    class="absolute right-0 top-4 text-white/40 font-label text-sm uppercase tracking-widest transition-all peer-focus:-top-6 peer-focus:text-secondary peer-focus:text-xs peer-[:not(:placeholder-shown)]:-top-6 peer-[:not(:placeholder-shown)]:text-secondary peer-[:not(:placeholder-shown)]:text-xs"
                                    for="phone">رقم الجوال</label>
                            </div>
                            <div class="relative group">
                                <input
                                    class="w-full bg-transparent border-0 border-b border-white/20 focus:ring-0 focus:border-secondary text-white py-4 transition-all placeholder:text-transparent peer hover:border-secondary transition-colors duration-500"
                                    id="email" placeholder="البريد الإلكتروني" type="email" />
                                <label
                                    class="absolute right-0 top-4 text-white/40 font-label text-sm uppercase tracking-widest transition-all peer-focus:-top-6 peer-focus:text-secondary peer-focus:text-xs peer-[:not(:placeholder-shown)]:-top-6 peer-[:not(:placeholder-shown)]:text-secondary peer-[:not(:placeholder-shown)]:text-xs"
                                    for="email">البريد الإلكتروني</label>
                            </div>
                            <div class="relative group">
                                <textarea
                                    class="w-full bg-transparent border-0 border-b border-white/20 focus:ring-0 focus:border-secondary text-white py-4 transition-all placeholder:text-transparent peer h-32 resize-none hover:border-secondary transition-colors duration-500"
                                    id="message" placeholder="رسالتك..."></textarea>
                                <label
                                    class="absolute right-0 top-4 text-white/40 font-label text-sm uppercase tracking-widest transition-all peer-focus:-top-6 peer-focus:text-secondary peer-focus:text-xs peer-[:not(:placeholder-shown)]:-top-6 peer-[:not(:placeholder-shown)]:text-secondary peer-[:not(:placeholder-shown)]:text-xs"
                                    for="message">رسالتك...</label>
                            </div>
                            <div class="flex justify-end pt-8">
                                <button
                                    class="gold-gradient text-on-secondary px-16 py-4 rounded-lg font-label text-sm uppercase tracking-widest font-bold hover:scale-105 transition-all duration-500 shadow-2xl">
                                    إرسال الطلب
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-950 text-white font-body py-12 px-6 md:px-12 border-t border-white/5">
        <div class="max-w-screen-2xl mx-auto flex flex-col md:flex-row items-center justify-between gap-12">
            <!-- Left: Toggle & Socials -->
            <div class="flex items-center gap-8 order-3 md:order-1">
                <button
                    class="text-white/60 hover:text-white transition-colors text-xs font-bold tracking-widest">EN</button>
                <div class="flex gap-4">
                    <a class="w-10 h-10 flex items-center justify-center rounded-full bg-white/5 hover:bg-white/10 transition-colors"
                        href="#"><span class="material-symbols-outlined text-sm">public</span></a>
                    <a class="w-10 h-10 flex items-center justify-center rounded-full bg-white/5 hover:bg-white/10 transition-colors"
                        href="#"><span class="material-symbols-outlined text-sm">camera</span></a>
                </div>
            </div>
            <!-- Center: Navigation -->
            <div class="flex flex-wrap justify-center gap-8 md:gap-12 order-2">
                <a class="text-white/60 hover:text-secondary transition-colors text-sm font-label uppercase tracking-widest"
                    href="#heritage">التراث</a>
                <a class="text-white/60 hover:text-secondary transition-colors text-sm font-label uppercase tracking-widest"
                    href="#products">المنتجات</a>
                <a class="text-white/60 hover:text-secondary transition-colors text-sm font-label uppercase tracking-widest border-b-2 border-secondary pb-1"
                    href="#">البداية</a>
                <a class="text-white/60 hover:text-secondary transition-colors text-sm font-label uppercase tracking-widest"
                    href="#sustainability">التزامنا للمستقبل</a>
                <a class="text-white/60 hover:text-secondary transition-colors text-sm font-label uppercase tracking-widest"
                    href="#contact">تواصل</a>
            </div>
            <!-- Right: Logo -->
            <div class="order-1 md:order-3">
                <h4 class="text-2xl font-headline text-white italic tracking-wide">ينابيع صافيا</h4>
            </div>
        </div>
        <div
            class="max-w-screen-2xl mx-auto mt-12 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4 text-[10px] text-white/40 font-label uppercase tracking-[0.2em]">
            <p>© 2024 ينابيع صافيا. جميع الحقوق محفوظة.</p>
            <p>صُنعت للنقاء - الجودة فوق كل شيء</p>
        </div>
    </footer>
    @verbatim
    <script>
        function createDroplet() {
            const container = document.getElementById('global-droplets');
            if (!container) return;

            const droplet = document.createElement('div');
            const size = Math.random() * 4 + 2;
            const left = Math.random() * 100;

            droplet.className = 'water-droplet animate-droplet';
            droplet.style.width = size + 'px';
            droplet.style.height = (size * 1.6) + 'px';
            droplet.style.left = left + '%';
            droplet.style.top = '-5%';

            container.appendChild(droplet);

            setTimeout(function() {
                droplet.remove();
            }, 18000);
        }

        function scheduleNextDroplet() {
            var delay = Math.random() * 1500 + 800;
            setTimeout(function() {
                createDroplet();
                scheduleNextDroplet();
            }, delay);
        }

        scheduleNextDroplet();

        // Scroll Reveal logic
        function revealElements() {
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('reveal-active');
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            document.querySelectorAll('.reveal').forEach(function(el) {
                observer.observe(el);
            });
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', revealElements);
        } else {
            revealElements();
        }

        document.addEventListener('mousemove', function(e) {
            var moveX = (e.clientX - window.innerWidth / 2) * 0.02;
            var moveY = (e.clientY - window.innerHeight / 2) * 0.02;
            var rotateY = (e.clientX - window.innerWidth / 2) * 0.015;
            var rotateX = (e.clientY - window.innerHeight / 2) * -0.015;

            var bottle = document.getElementById('hero-bottle');
            var bLeft = document.getElementById('bottle-left');
            var bRight = document.getElementById('bottle-right');

            if (bottle) {
                bottle.style.transform =
                    'translate(' + moveX + 'px, ' + moveY + 'px) rotateY(' + rotateY + 'deg) rotateX(' + rotateX + 'deg)';
            }
            if (bLeft && bRight) {
                bLeft.style.transform = 'translate(' + moveX + 'px, ' + moveY + 'px) rotateY(' + rotateY + 'deg) rotateX(' + rotateX + 'deg)';
                bRight.style.transform = 'translate(' + moveX + 'px, ' + moveY + 'px) rotateY(' + rotateY + 'deg) rotateX(' + rotateX + 'deg)';
            }
        });

        // All images animation on scroll
        window.addEventListener('scroll', function() {
            var scrollPos = window.scrollY;

            // Hero Bottle split logic
            var bLeft = document.getElementById('bottle-left');
            var bRight = document.getElementById('bottle-right');
            if (bLeft && bRight) {
                var factor = window.innerWidth < 768 ? 0.1 : 0.2;
                var moveAmount = scrollPos * factor;
                bLeft.style.marginLeft = '-' + moveAmount + 'px';
                bRight.style.marginLeft = moveAmount + 'px';
            }

            // Parallax effect for all images with .parallax-img class
            document.querySelectorAll('.parallax-img').forEach(function(img) {
                var speed = 0.1;
                var rect = img.getBoundingClientRect();
                var windowHeight = window.innerHeight;

                if (rect.top < windowHeight && rect.bottom > 0) {
                    var shift = (rect.top - windowHeight / 2) * speed;
                    // Apply smooth parallax
                    img.style.translate = '0 ' + shift + 'px';
                }
            });
        });

        // Handle navigation active state
        var navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                navLinks.forEach(function(l) {
                    l.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
    </script>
    @endverbatim
</body>

</html>