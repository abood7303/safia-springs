<!DOCTYPE html>

<html class="dark" dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Safia Springs | ينابيع صافيا - نقاء من قلب الطبيعة</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&amp;family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&amp;family=Plus+Jakarta+Sans:wght@300;400;500;600;700&amp;family=IBM+Plex+Sans+Arabic:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="bg-surface text-on-surface font-body selection:bg-secondary/30">
    <!-- Top Navigation -->
    <nav
        class="fixed top-0 w-full z-50 bg-slate-950/20 backdrop-blur-xl transition-all duration-500 ease-[cubic-bezier(0.2,0.8,0.2,1)] px-6 md:px-12 py-6">
        <div class="flex justify-between items-center w-full max-w-screen-2xl mx-auto">
            <div class="flex items-center gap-8">
                <a class="text-2xl font-headline italic text-white tracking-wide" href="#">Safia Springs</a>
                <div class="hidden md:flex gap-8 items-center">
                    <a class="text-white/80 hover:text-white font-label tracking-wide text-sm transition-all duration-500"
                        href="#heritage">من نحن</a>
                    <a class="text-white/80 hover:text-white font-label tracking-wide text-sm transition-all duration-500"
                        href="#products">منتجاتنا</a>
                    <a class="text-white/80 hover:text-white font-label tracking-wide text-sm transition-all duration-500"
                        href="#sustainability">الاستدامة</a>
                    <a class="text-white/80 hover:text-white font-label tracking-wide text-sm transition-all duration-500"
                        href="#contact">اتصل بنا</a>
                </div>
            </div>
            <div class="flex items-center gap-6">
                <button class="text-white/80 hover:text-white font-label text-sm">English</button>
                <button
                    class="bg-primary-container text-secondary px-8 py-3 rounded-full font-label text-sm border border-secondary/20 hover:border-secondary/80 transition-all duration-500">اطلب
                    الآن</button>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-surface pt-20">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-b from-surface/20 via-surface/40 to-surface"></div>
            <div class="droplet-container" id="hero-droplets"></div>
            <img alt="Water Surface" class="w-full h-full object-cover opacity-20 mix-blend-screen"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD5dRxGt0Br7sm9X-pG1fO0H-oDwrdlj5riqG4o4FaE3g46jSgl7CXs5JttDqxK3TxpuGO_0OkuE3MxCMJL56CMO5r-cKAOVqfb_niV4YLLz0NH9d_gJ0keJZQmCScu_0FeSyxIX0o7R1ZUILho-Ly4qgLwNOwx3gKe9E2F9Sumyym4ZPrlYJyE2vQ0y4WEwGfOI4IMhbBGQfghZcx1464Abk780PthgcC5bY9Tkn9-GsdaS9ac4xGFUiAKXq3PqjH21Y-ZBp_MTdw" />
        </div>
        <div class="relative z-10 w-full max-w-screen-2xl mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1 flex justify-center items-center">
                    <div class="relative w-full max-w-2xl flex items-center justify-center">
                        <div class="absolute w-[80%] aspect-square bg-secondary/10 rounded-full blur-[120px] scale-110">
                        </div>
                        <img alt="Safia Premium Bottle"
                            class="relative z-10 w-full max-w-md h-auto object-contain product-shadow transition-transform duration-300 ease-out animate-[pulse_8s_ease-in-out_infinite]"
                            id="hero-bottle"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD-pGZ41vF_pZ1K8n_uL3m1N2wW8fL8vB6S7C8J9K0L1M2N3O4P5Q6R7S8T9U0V1W2X3Y4Z5A6B7C8D9E0F1G2H3I4J5K6L7M8N9O0P1Q2R3S4T5U6V7W8X9Y0Z" />
                    </div>
                </div>
                <div class="order-1 lg:order-2 text-right">
                    <h2 class="text-secondary font-headline text-xl md:text-2xl mb-4 tracking-[0.2em] uppercase">Purity
                        Defined</h2>
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-headline text-white mb-8 leading-tight">نقاء من قلب
                        الطبيعة</h1>
                    <p
                        class="text-on-surface-variant text-lg md:text-xl max-w-2xl ms-auto mb-12 font-light leading-relaxed">
                        استمتع بجوهر المياه الكريستالية الصافية من الينابيع البكر. تقدم لك صافيا الترطيب في أرقى صوره،
                        معبأ من مصدر الحياة مباشرة بتصميم عصري يلامس الروح.
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
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce">
            <span class="material-symbols-outlined text-secondary text-3xl">expand_more</span>
        </div>
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
        <div class="max-w-screen-2xl mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="relative order-2 lg:order-1">
                    <div class="absolute -top-20 -right-20 w-80 h-80 bg-secondary/10 rounded-full blur-[120px]"></div>
                    <img class="rounded-3xl w-full aspect-[4/5] object-cover relative z-10 ghost-border"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmXViH2tupGNz-vubUmAsBEc59CI4nY4a9nDb9HnMAmFmtsWR4l_lbyQK7keX9BJPGZqUDuTfsxwtPML6R2BnlgLuy69p_PXSixa0pTntojVx1yesLIRtzgZE90IoRvdI0ZrfVl6fqAA-sPaiaKennGxLCuCLhOnvEgAOGTkmX8XUGLF3g7V0B4mOjjpabThv1ZYjuse2YjHgufDHnItcNfr2aycbe8f3kbY_b3FZMgQ_1DGGQZUYX8fUZsVyWdML1V4yoh2vhd0E" />
                    <div class="absolute -bottom-10 -left-10 glass-card p-8 rounded-2xl z-20 ghost-border max-w-xs">
                        <p class="text-secondary font-headline text-4xl mb-2 italic">8.1 pH</p>
                        <p class="text-on-surface-variant text-sm font-label tracking-widest uppercase">توازن قلوي مثالي
                        </p>
                    </div>
                </div>
                <div class="flex flex-col gap-8 order-1 lg:order-2">
                    <span class="text-secondary font-label text-sm uppercase tracking-[0.3em]">The Source</span>
                    <h2 class="text-4xl md:text-6xl font-headline text-white leading-tight">إرث من النقاء
                        المتدفق<br /><span class="text-secondary italic">A Legacy of Pure Flow</span></h2>
                    <p class="text-on-surface-variant text-lg leading-relaxed font-light">ليست ينابيع صافيا مجرد شركة
                        مياه، بل هي حارس للنقاء الطبيعي. تتدفق ينابيعنا منذ قرون في أعماق آفاقنا القاحلة، وتتم تصفيتها
                        بشكل طبيعي عبر طبقات غنية بالمعادن لتصل إلى عبوتك دون أن تمسها يد بشر.</p>
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
    <section class="py-24 md:py-40 bg-surface" id="products">
        <div class="max-w-screen-2xl mx-auto px-6 md:px-12 mb-20 text-center">
            <h2 class="text-secondary font-label text-sm uppercase tracking-[0.3em] mb-4">Collection</h2>
            <h3 class="text-4xl md:text-6xl font-headline text-white italic">التشكيلة المختارة</h3>
            <div class="w-24 h-[2px] bg-secondary/40 mx-auto mt-6"></div>
        </div>
        <div class="max-w-screen-2xl mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="flex flex-col gap-8 h-full">
                    <div
                        class="glass-card p-10 rounded-3xl ghost-border flex items-center justify-between group hover:border-secondary/40 transition-all duration-700 h-1/2 relative overflow-hidden">
                        <div class="z-10">
                            <h4 class="text-2xl font-headline text-white mb-2">المجموعة اليومية</h4>
                            <p class="text-on-surface-variant text-sm font-label tracking-widest mb-6">330ml • Pack of
                                24</p>
                            <button
                                class="gold-gradient text-on-secondary px-6 py-2 rounded-full font-label text-xs uppercase tracking-widest font-bold hover:scale-105 transition-all duration-500 shadow-lg">
                                اطلب الآن
                            </button>
                        </div>
                        <div
                            class="relative w-1/3 aspect-square flex items-center justify-center bg-secondary/5 rounded-lg">
                            <img alt="Safia 330ml"
                                class="h-4/5 object-contain group-hover:scale-110 transition-transform duration-700"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDyUX9pAi5X73D7hZuPzOmhfXxL8MoCSQmBgJ5gDWRsagn1YrpgTMw7wNEcKe9aQDBlUHFvV0w2fxw8IVxUI28LYIVB_PEbN_0Q3v25PnsQfv4Lly6i0SVfnJ7yZcGbHnxAKIozAXI8HIvoFMa5RS3jByxpDrfleMHtQZ6UPVv8PzQ4pbiu0KQtqZUdNLYbfaGjwAaeMJxCJYuW29kZO9NEZnPdyIm6FTJ4IJ4R3GVPnl7WZOISfKFHRNhrnuBUrpuABsH3mPHzyTU" />
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
                    class="glass-card rounded-3xl ghost-border group hover:border-secondary/40 transition-all duration-700 relative overflow-hidden flex flex-col md:flex-row items-center justify-end min-h-[600px]">
                    <div class="absolute inset-0 w-full h-full">
                        <img alt="Royal Edition Background"
                            class="w-full h-full object-cover object-center opacity-70 group-hover:scale-105 transition-transform duration-1000"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBI9lCvJ5yG3Dm50XkiO0TW67gWHjAJFBxWN9sFXO-ATweIZqexQFLG61I6twnwDpJnsfaJGYJZhCsw9uqS6xjIngJgmC3kU1l-FMiPPGsuzCKKEqc8dJSufQKdthBjgqCpcTVt_IcXxLdV_K4P-ekO1H8XmGgGA5-p-AO3PKnhS35kdyliIiRXu95ZpqaNaSjE3T6srD1ZQXv3uz9n5q4zlCwgYKmddNZPftw_RpF0vWCiAzOvP7UAa5KhdlQ_OPfYODsZcNYnNUQ" />
                        <div
                            class="absolute inset-0 bg-gradient-to-l from-surface via-transparent to-transparent opacity-80">
                        </div>
                    </div>
                    <div class="relative z-10 p-12 text-right flex flex-col items-end gap-4 max-w-sm">
                        <h4 class="text-4xl md:text-5xl font-headline text-white leading-tight">الإصدار الملكي</h4>
                        <p class="text-secondary font-label tracking-[0.2em] uppercase text-sm">Litre Glass 1.5</p>
                        <div class="mt-8">
                            <button
                                class="text-secondary hover:text-white font-label text-sm uppercase tracking-widest flex items-center gap-2 group/btn">
                                اطلب الآن
                                <span class="w-8 h-[1px] bg-secondary group-hover/btn:bg-white transition-all"></span>
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
                <span class="material-symbols-outlined text-secondary text-5xl">water_drop</span>
                <h5 class="text-white font-headline text-xl mt-4">مصدر بكر</h5>
                <p class="text-on-surface-variant text-sm font-light leading-relaxed">يتم استخراجها من طبقات المياه
                    الجوفية العميقة، والمعزولة طبيعياً عن الملوثات البيئية الحديثة.</p>
            </div>
            <div class="flex flex-col gap-4">
                <span class="material-symbols-outlined text-secondary text-5xl">verified</span>
                <h5 class="text-white font-headline text-xl mt-4">جودة معتمدة</h5>
                <p class="text-on-surface-variant text-sm font-light leading-relaxed">نلتزم بأعلى معايير سلامة الأغذية
                    الدولية وشهادات الأيزو للمياه المعبأة.</p>
            </div>
            <div class="flex flex-col gap-4">
                <span class="material-symbols-outlined text-secondary text-5xl">eco</span>
                <h5 class="text-white font-headline text-xl mt-4">توازن معدني</h5>
                <p class="text-on-surface-variant text-sm font-light leading-relaxed">مزيج فريد من الكالسيوم
                    والمغنيسيوم والبوتاسيوم يوفر طعماً سلساً ومنعشاً.</p>
            </div>
            <div class="flex flex-col gap-4">
                <span class="material-symbols-outlined text-secondary text-5xl">precision_manufacturing</span>
                <h5 class="text-white font-headline text-xl mt-4">تعبئة متطورة</h5>
                <p class="text-on-surface-variant text-sm font-light leading-relaxed">تضمن تكنولوجيا التعبئة المتطورة
                    عدم وجود أي تلامس بشري من المصدر حتى الختم.</p>
            </div>
        </div>
    </section>
    <!-- Sustainability Section -->
    <section class="relative py-40 overflow-hidden" id="sustainability">
        <div class="absolute inset-0 z-0">
            <img alt="Nature conservation" class="w-full h-full object-cover grayscale opacity-20"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCUHT8UyWYxOdRhACAUrdQa8QD3lf7sJtFlCdxthbtp7CVgwmlI7Qx14z9xAN01CAiN6bqXpAGEz2jzeGeHcvtliL4Tif79Vg-yPP_c-wi1SOHEASRSFDC-u0NMzj-idmCvy1bEqtJfOnRfG_9tY8OE157tkDTwrWnFVFhLZhJ1uavsTWzLHM5iaeKCem56D1zoD6yn78ALsrdIA5LJsjoTy5pp3GTiqiVSCKFc-J_ARd0sqLTGrfRqoSaU__hAkKREQ-XRpK9PwD4" />
            <div class="absolute inset-0 bg-surface/80"></div>
        </div>
        <div class="relative z-10 max-w-4xl mx-auto px-6 text-center">
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
    <section class="py-24 md:py-40 bg-surface overflow-hidden" id="contact">
        <div class="max-w-screen-2xl mx-auto px-6 md:px-12">
            <h2 class="text-3xl md:text-5xl font-headline text-white mb-16 text-right">تواصل معنا</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 items-stretch min-h-[600px]">
                <!-- Right Column: Map -->
                <div class="relative order-1 lg:order-2 flex items-center justify-center p-8 bg-[#0a0a0a]">
                    <div class="absolute inset-0 map-container opacity-40">
                        <img alt="Saudi Arabia Map" class="w-full h-full object-contain grayscale brightness-50"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD-pGZ41vF_pZ1K8n_uL3m1N2wW8fL8vB6S7C8J9K0L1M2N3O4P5Q6R7S8T9U0V1W2X3Y4Z5A6B7C8D9E0F1G2H3I4J5K6L7M8N9O0P1Q2R3S4T5U6V7W8X9Y0Z" />
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
    <script>
        function createDroplet() {
            const container = document.getElementById('hero-droplets');
            if (!container) return;

            const droplet = document.createElement('div');
            const size = Math.random() * 6 + 4;
            const left = Math.random() * 100;
            const top = Math.random() * 40;

            droplet.className = 'water-droplet animate-droplet';
            droplet.style.width = `${size}px`;
            droplet.style.height = `${size * 1.4}px`;
            droplet.style.left = `${left}%`;
            droplet.style.top = `${top}%`;

            container.appendChild(droplet);

            setTimeout(() => {
                droplet.remove();
            }, 5000);
        }

        function scheduleNextDroplet() {
            const delay = Math.random() * 900 + 600;
            setTimeout(() => {
                createDroplet();
                scheduleNextDroplet();
            }, delay);
        }

        scheduleNextDroplet();

        document.addEventListener('mousemove', (e) => {
            const moveX = (e.clientX - window.innerWidth / 2) * 0.02;
            const moveY = (e.clientY - window.innerHeight / 2) * 0.02;
            const rotateY = (e.clientX - window.innerWidth / 2) * 0.015;
            const rotateX = (e.clientY - window.innerHeight / 2) * -0.015;

            const bottle = document.getElementById('hero-bottle');
            if (bottle) {
                bottle.style.transform =
                    `translate(${moveX}px, ${moveY}px) rotateY(${rotateY}deg) rotateX(${rotateX}deg)`;
            }
        });
    </script>
</body>

</html>
