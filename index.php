<?php
/**
 * Al-Royal Oud - Luxury Perfume Landing Page
 * Designed & Developed by CodingBurg (https://codingburg.com)
 * Phone: 01908121146
 */
$client_phone = "01908121146";
$client_phone_display = "০১৯০৮-১২১১৪৬";
$whatsapp_url = "https://wa.me/8801908121146?text=" . urlencode("আসসালামু আলাইকুম, আমি আল-রয়্যাল প্রিমিয়াম পারফিউম কম্বো অফার সম্পর্কে জানতে এবং অর্ডার করতে চাই।");
?>
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>Al-Royal Oud | রাজকীয় সুবাসের অনন্য প্রতীক - প্রিমিয়াম পারফিউম কম্বো</title>
    <meta name="description" content="২৪ ঘণ্টার বেশি দীর্ঘস্থায়ী সুবাস, ১০০% অ্যালকোহল মুক্ত অ্যারাবিয়ান লাক্সারি পারফিউম। সারাদেশে ক্যাশ অন ডেলিভারি।">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gold: {
                            50: '#fdfbf0',
                            100: '#fbf7de',
                            200: '#f6ecbe',
                            300: '#efdc94',
                            400: '#e5c464',
                            500: '#d4af37',
                            600: '#ba9028',
                            700: '#946d20',
                            800: '#79561f',
                            900: '#67471e',
                        },
                        darkbg: '#07090e',
                        cardbg: '#0f141f',
                    }
                }
            }
        }
    </script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body class="bg-darkbg text-slate-100 antialiased pb-20 md:pb-0">

    <!-- 1. Top Announcement Bar -->
    <div class="bg-gradient-to-r from-amber-600 via-gold-500 to-amber-600 text-black py-2.5 px-4 text-center text-xs md:text-sm font-bold tracking-wide shadow-md">
        <div class="max-w-6xl mx-auto flex items-center justify-center gap-2">
            <span class="inline-block animate-bounce">⚡</span>
            <span>সীমিত সময়ের স্পেশাল ধামাকা অফার! ফ্রি হোম ডেলিভারি ও ৫০% পর্যন্ত ডিসকাউন্ট</span>
            <span class="hidden sm:inline">| সারাদেশে ক্যাশ অন ডেলিভারি</span>
            <span class="inline-block animate-bounce">⚡</span>
        </div>
    </div>

    <!-- 2. Sticky Glass Header -->
    <header class="sticky top-0 z-40 glass-nav transition-all duration-300">
        <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="index.php" class="flex items-center gap-2.5 group">
                <div class="w-10 h-10 rounded-full border border-gold-500/50 flex items-center justify-center bg-gold-500/10 text-gold-400 group-hover:scale-105 transition-transform">
                    <i class="fa-solid fa-crown text-lg"></i>
                </div>
                <div>
                    <span class="font-luxury font-bold text-lg md:text-xl tracking-wider text-gold-gradient block leading-none">AL-ROYAL</span>
                    <span class="text-[10px] md:text-xs tracking-widest text-slate-400 block uppercase font-light">Luxury Fragrance</span>
                </div>
            </a>

            <!-- Action Buttons -->
            <div class="flex items-center gap-2.5 sm:gap-4">
                <a href="tel:<?= $client_phone; ?>" class="hidden sm:flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-gold-500/40 text-gold-300 hover:bg-gold-500/10 text-xs md:text-sm transition-all">
                    <i class="fa-solid fa-phone text-xs"></i>
                    <span class="font-en"><?= $client_phone; ?></span>
                </a>

                <a href="<?= $whatsapp_url; ?>" target="_blank" class="flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-emerald-600 hover:bg-emerald-500 text-white text-xs md:text-sm font-semibold transition-all">
                    <i class="fa-brands fa-whatsapp text-sm md:text-base"></i>
                    <span class="hidden xs:inline">হোয়াটসঅ্যাপ</span>
                </a>

                <button class="btn-order-trigger btn-shimmer px-4 py-1.5 md:px-5 md:py-2 rounded-full text-xs md:text-sm font-bold flex items-center gap-1.5 cursor-pointer">
                    <i class="fa-solid fa-bag-shopping"></i>
                    <span>অর্ডার করুন</span>
                </button>
            </div>
        </div>
    </header>

    <!-- 3. Hero Section -->
    <section class="relative pt-6 md:pt-14 pb-12 overflow-hidden">
        <!-- Background Ambient Glow -->
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-[350px] md:w-[700px] h-[350px] md:h-[700px] bg-gold-500/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-6xl mx-auto px-4 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                <!-- Left: Headline & Offer Info -->
                <div class="lg:col-span-7 text-center lg:text-left">
                    <!-- Top Badge -->
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-gold-500/15 border border-gold-500/30 text-gold-300 text-xs md:text-sm font-medium mb-4">
                        <i class="fa-solid fa-star text-gold-400 text-xs"></i>
                        <span>বাংলাদেশের ১ নম্বর বেস্ট সেলার লাক্সারি অ্যারাবিয়ান পারফিউম</span>
                    </div>

                    <!-- Main Catchy Bangla Headline -->
                    <h1 class="text-2xl sm:text-4xl lg:text-5xl font-bold leading-tight sm:leading-tight lg:leading-[1.25] mb-4 text-white">
                        ব্যক্তিত্ব আর আভিজাত্যের অনন্য প্রতীক — <br>
                        <span class="text-gold-gradient">মন মাতানো রাজকীয় সুবাসে</span> মুগ্ধ করুন সবাইকে!
                    </h1>

                    <p class="text-slate-300 text-sm sm:text-base md:text-lg mb-6 max-w-xl mx-auto lg:mx-0 leading-relaxed font-light">
                        ২৪ থেকে ৩৬ ঘণ্টা দীর্ঘস্থায়ী সুবাস, ১০০% অ্যালকোহল মুক্ত অ্যারাবিয়ান উদ ও ফরাসি এসেন্সের জাদুকরী ব্লেন্ড। কোনো অগ্রিম টাকা ছাড়া পণ্য হাতে পেয়ে চেক করে মূল্য পরিশোধের ১০০% নিশ্চয়তা!
                    </p>

                    <!-- Flash Offer & Countdown Card -->
                    <div class="gold-card p-4 sm:p-5 rounded-2xl mb-6 max-w-xl mx-auto lg:mx-0">
                        <div class="flex flex-wrap items-center justify-between gap-3 border-b border-gold-500/20 pb-3 mb-3">
                            <div class="flex items-center gap-2">
                                <span class="flex h-3 w-3 relative">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-rose-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-3 w-3 bg-rose-500"></span>
                                </span>
                                <span class="text-xs sm:text-sm font-semibold text-rose-400">সীমিত সময়ের ধামাকা অফার শেষ হতে বাকি:</span>
                            </div>
                            
                            <!-- Countdown Digits -->
                            <div class="flex items-center gap-1.5 font-mono text-sm sm:text-base font-bold text-white">
                                <div class="bg-black/60 px-2 py-1 rounded border border-gold-500/30">
                                    <span id="cd-hours">14</span><span class="text-[10px] text-slate-400 ml-1">ঘণ্টা</span>
                                </div>
                                <span class="text-gold-400">:</span>
                                <div class="bg-black/60 px-2 py-1 rounded border border-gold-500/30">
                                    <span id="cd-mins">35</span><span class="text-[10px] text-slate-400 ml-1">মিঃ</span>
                                </div>
                                <span class="text-gold-400">:</span>
                                <div class="bg-black/60 px-2 py-1 rounded border border-gold-500/30 text-gold-300">
                                    <span id="cd-secs">20</span><span class="text-[10px] text-slate-400 ml-1">সেঃ</span>
                                </div>
                            </div>
                        </div>

                        <!-- Price display -->
                        <div class="flex items-baseline justify-center lg:justify-start gap-4">
                            <div class="text-xs sm:text-sm text-slate-400">
                                রেগুলার মূল্য: <del class="text-rose-400 font-semibold font-en">৳২,৫০০</del>
                            </div>
                            <div class="text-2xl sm:text-3xl font-extrabold text-gold-400 font-en">
                                ৳১,৩৯০ - ৳১,৬৯০
                            </div>
                            <span class="px-2 py-0.5 rounded text-[11px] font-bold bg-emerald-500/20 text-emerald-400 border border-emerald-500/30">
                                বাঁচবে ৳৮১০+
                            </span>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3 sm:gap-4 mb-6">
                        <button class="btn-order-trigger btn-shimmer w-full sm:w-auto px-8 py-3.5 rounded-full text-base sm:text-lg font-bold flex items-center justify-center gap-2 cursor-pointer shadow-lg">
                            <i class="fa-solid fa-bag-shopping text-xl"></i>
                            <span>সরাসরি অর্ডার করুন (ক্যাশ অন ডেলিভারি)</span>
                        </button>

                        <a href="tel:<?= $client_phone; ?>" class="w-full sm:w-auto px-6 py-3.5 rounded-full border border-gold-500/40 text-gold-300 hover:bg-gold-500/10 text-sm sm:text-base font-semibold flex items-center justify-center gap-2 transition-all">
                            <i class="fa-solid fa-phone"></i>
                            <span>কল করুন: <?= $client_phone; ?></span>
                        </a>
                    </div>

                    <!-- Micro Trust Signals -->
                    <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 sm:gap-6 text-xs sm:text-sm text-slate-300">
                        <div class="flex items-center gap-1.5">
                            <i class="fa-solid fa-truck-fast text-gold-400"></i>
                            <span>সারাদেশে হোম ডেলিভারি</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <i class="fa-solid fa-hand-holding-dollar text-gold-400"></i>
                            <span>হাতে পেয়ে চেক করে পেমেন্ট</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <i class="fa-solid fa-rotate-left text-gold-400"></i>
                            <span>পছন্দ না হলে ইনস্ট্যান্ট রিটার্ন</span>
                        </div>
                    </div>
                </div>

                <!-- Right: Product Visual Flacon -->
                <div class="lg:col-span-5 relative">
                    <div class="relative mx-auto max-w-sm sm:max-w-md">
                        <!-- Glow Halo -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-gold-500/30 to-amber-700/20 rounded-3xl blur-2xl -z-10"></div>
                        
                        <!-- Main Product Image Frame -->
                        <div class="gold-card rounded-3xl p-3 sm:p-4 relative overflow-hidden border border-gold-500/40 shadow-2xl">
                            <div class="relative rounded-2xl overflow-hidden aspect-[4/5] bg-neutral-900">
                                <img src="https://images.unsplash.com/photo-1594035910387-fea47794261f?auto=format&fit=crop&w=900&q=80" 
                                     alt="Al-Royal Luxury Perfume" 
                                     class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700">
                                
                                <!-- Floating Gold Badges -->
                                <div class="absolute top-3 left-3 bg-black/80 backdrop-blur-md px-3 py-1.5 rounded-full border border-gold-500/40 text-gold-300 text-xs font-semibold flex items-center gap-1.5 shadow-lg">
                                    <i class="fa-solid fa-certificate text-gold-400"></i>
                                    <span>১০০% অরিজিনাল অ্যারাবিয়ান এসেন্স</span>
                                </div>

                                <div class="absolute bottom-3 right-3 bg-emerald-950/90 backdrop-blur-md px-3.5 py-1.5 rounded-full border border-emerald-500/50 text-emerald-300 text-xs font-bold flex items-center gap-1.5 shadow-lg">
                                    <i class="fa-solid fa-shield-halved"></i>
                                    <span>অ্যালকোহল মুক্ত (হালাল)</span>
                                </div>
                            </div>

                            <!-- Small thumbnail strip -->
                            <div class="grid grid-cols-3 gap-2 mt-3">
                                <div class="rounded-xl overflow-hidden border border-gold-500/50 aspect-video bg-neutral-900">
                                    <img src="https://images.unsplash.com/photo-1523293182086-7651a899d37f?auto=format&fit=crop&w=400&q=80" alt="Royal Perfume Gold" class="w-full h-full object-cover">
                                </div>
                                <div class="rounded-xl overflow-hidden border border-gold-500/30 aspect-video bg-neutral-900">
                                    <img src="https://images.unsplash.com/photo-1588405748880-12d1d2a59f75?auto=format&fit=crop&w=400&q=80" alt="Amber Perfume" class="w-full h-full object-cover">
                                </div>
                                <div class="rounded-xl overflow-hidden border border-gold-500/30 aspect-video bg-neutral-900">
                                    <img src="https://images.unsplash.com/photo-1547887537-6158d64c35b3?auto=format&fit=crop&w=400&q=80" alt="Perfume Combo Box" class="w-full h-full object-cover">
                                </div>
                            </div>
                        </div>

                        <!-- Floating Customer Floating Badge -->
                        <div class="absolute -bottom-4 -left-3 sm:-left-6 bg-slate-900/95 border border-gold-500/40 p-3 rounded-2xl shadow-xl flex items-center gap-3 backdrop-blur-md">
                            <div class="w-10 h-10 rounded-full bg-gold-500/20 text-gold-400 flex items-center justify-center font-bold text-sm">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div>
                                <div class="text-xs font-bold text-white flex items-center gap-1">
                                    <span>২৫,০০০+ সন্তুষ্ট গ্রাহক</span>
                                    <i class="fa-solid fa-circle-check text-emerald-400 text-[10px]"></i>
                                </div>
                                <div class="text-[11px] text-slate-400 flex items-center gap-1">
                                    <span class="text-amber-400">★★★★★</span>
                                    <span>৪.৯ রেটিং</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. Feature Trust Highlights Bar -->
    <section class="py-8 border-y border-gold-500/20 bg-cardbg/40">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
                <!-- Highlight 1 -->
                <div class="flex items-center gap-3 p-3 rounded-xl bg-white/[0.02] border border-white/5">
                    <div class="w-11 h-11 rounded-xl bg-gold-500/10 text-gold-400 border border-gold-500/30 flex items-center justify-center shrink-0 text-lg">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <div>
                        <h4 class="text-xs sm:text-sm font-bold text-white">২৪-৩৬ ঘণ্টা স্থায়ী</h4>
                        <p class="text-[11px] sm:text-xs text-slate-400">কাপড়ে সুবাস থাকে ২ দিন</p>
                    </div>
                </div>

                <!-- Highlight 2 -->
                <div class="flex items-center gap-3 p-3 rounded-xl bg-white/[0.02] border border-white/5">
                    <div class="w-11 h-11 rounded-xl bg-emerald-500/10 text-emerald-400 border border-emerald-500/30 flex items-center justify-center shrink-0 text-lg">
                        <i class="fa-solid fa-mosque"></i>
                    </div>
                    <div>
                        <h4 class="text-xs sm:text-sm font-bold text-white">১০০% অ্যালকোহল মুক্ত</h4>
                        <p class="text-[11px] sm:text-xs text-slate-400">নামাজ ও প্রতিদিনে হালাল</p>
                    </div>
                </div>

                <!-- Highlight 3 -->
                <div class="flex items-center gap-3 p-3 rounded-xl bg-white/[0.02] border border-white/5">
                    <div class="w-11 h-11 rounded-xl bg-gold-500/10 text-gold-400 border border-gold-500/30 flex items-center justify-center shrink-0 text-lg">
                        <i class="fa-solid fa-truck-ramp-box"></i>
                    </div>
                    <div>
                        <h4 class="text-xs sm:text-sm font-bold text-white">ক্যাশ অন ডেলিভারি</h4>
                        <p class="text-[11px] sm:text-xs text-slate-400">হাতে পেয়ে চেক করে পেমেন্ট</p>
                    </div>
                </div>

                <!-- Highlight 4 -->
                <div class="flex items-center gap-3 p-3 rounded-xl bg-white/[0.02] border border-white/5">
                    <div class="w-11 h-11 rounded-xl bg-rose-500/10 text-rose-400 border border-rose-500/30 flex items-center justify-center shrink-0 text-lg">
                        <i class="fa-solid fa-shield-check"></i>
                    </div>
                    <div>
                        <h4 class="text-xs sm:text-sm font-bold text-white">১০০% রিটার্ন গ্যারান্টি</h4>
                        <p class="text-[11px] sm:text-xs text-slate-400">সুবাস অপছন্দে মানিব্যাক</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Pain Points vs Solution (কেন আল-রয়্যাল বেছে নিবেন?) -->
    <section class="py-14 relative">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="text-xs font-semibold text-gold-400 uppercase tracking-wider">তুলনামূলক পার্থক্য</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mt-1 text-white">
                    সাধারণ পারফিউমের চেয়ে <span class="text-gold-gradient">Al-Royal Oud</span> কেন সেরা?
                </h2>
                <p class="text-slate-400 text-xs sm:text-sm mt-2">
                    বাজারের সস্তা কেমিক্যালযুক্ত সেন্ট আপনার ত্বকের ক্ষতি করে এবং সুবাস ১-২ ঘণ্টাতেই উবে যায়। কিন্তু আল-রয়্যাল উদ এনে দেয় প্রকৃত আভিজাত্য।
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                <!-- Bad: Regular Market Perfume -->
                <div class="bg-rose-950/20 border border-rose-500/20 rounded-2xl p-6 relative">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-full bg-rose-500/20 text-rose-400 flex items-center justify-center">
                            <i class="fa-solid fa-xmark text-lg"></i>
                        </div>
                        <h3 class="text-lg font-bold text-rose-200">বাজারের সাধারণ সস্তা সেন্ট বা আতর</h3>
                    </div>
                    <ul class="space-y-3 text-xs sm:text-sm text-slate-300">
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-circle-xmark text-rose-400 mt-1 shrink-0"></i>
                            <span>স্প্রে করার ১ থেকে ২ ঘণ্টার মধ্যেই সুবাস উবে যায়।</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-circle-xmark text-rose-400 mt-1 shrink-0"></i>
                            <span>অতিরিক্ত কৃত্রিম অ্যালকোহল ও কেমিক্যালের কারণে মাথা ব্যথা করে।</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-circle-xmark text-rose-400 mt-1 shrink-0"></i>
                            <span>পোশাকে ব্যবহার করলে স্থায়ী দাগ পড়ে এবং কাপড় নষ্ট হয়।</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-circle-xmark text-rose-400 mt-1 shrink-0"></i>
                            <span>কোনো মানি-ব্যাক বা রিটার্ন গ্যারান্টি থাকে না।</span>
                        </li>
                    </ul>
                </div>

                <!-- Good: Al-Royal Oud -->
                <div class="gold-card rounded-2xl p-6 relative border-gold-500/60 shadow-xl bg-gold-500/[0.04]">
                    <div class="absolute -top-3 right-6 bg-gold-gradient text-black text-[11px] font-extrabold px-3 py-0.5 rounded-full uppercase tracking-wider">
                        প্রস্তাবিত
                    </div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-full bg-gold-500/20 text-gold-400 flex items-center justify-center">
                            <i class="fa-solid fa-check text-lg"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gold-300">আমাদের আল-রয়্যাল প্রিমিয়াম কালেকশন</h3>
                    </div>
                    <ul class="space-y-3 text-xs sm:text-sm text-slate-200">
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-circle-check text-emerald-400 mt-1 shrink-0"></i>
                            <span>২৪ থেকে ৩৬ ঘণ্টা কাপড়ে এবং ১২+ ঘণ্টা শরীরে মোহময় সুবাস বজায় থাকে।</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-circle-check text-emerald-400 mt-1 shrink-0"></i>
                            <span>১০০% প্রাকৃতিক অ্যারাবিয়ান এসেন্স ও অ্যালকোহল মুক্ত — সম্পূর্ণ হালাল।</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-circle-check text-emerald-400 mt-1 shrink-0"></i>
                            <span>পোশাকে কোনো প্রকার দাগ ফেলে না, বরং দীর্ঘক্ষণ সতেজ রাখে।</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-circle-check text-emerald-400 mt-1 shrink-0"></i>
                            <span>সুবাস পছন্দ না হলে ৭ দিনের মধ্যে ১০০% ক্যাশব্যাক রিটার্ন সুবিধা।</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Fragrance Notes Breakdown (The Secret Recipe) -->
    <section class="py-12 bg-cardbg/50 border-y border-gold-500/20">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="text-xs font-semibold text-gold-400 uppercase tracking-wider">সুগন্ধির গঠন</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mt-1 text-white">
                    অনবদ্য সুবাসের <span class="text-gold-gradient">৩ স্তরের জাদুকরী নোট</span>
                </h2>
                <p class="text-slate-400 text-xs sm:text-sm mt-2">
                    প্রতিটি স্প্রেতে মিলবে ধাপে ধাপে রাজকীয় অনুভূতির স্নিগ্ধ ছোঁয়া
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Top Note -->
                <div class="gold-card rounded-2xl p-5 text-center relative overflow-hidden group">
                    <div class="w-20 h-20 mx-auto rounded-full overflow-hidden border-2 border-gold-500/40 mb-4 group-hover:scale-105 transition-transform">
                        <img src="https://images.unsplash.com/photo-1587496679742-bad502958fbf?auto=format&fit=crop&w=300&q=80" alt="Top Note" class="w-full h-full object-cover">
                    </div>
                    <span class="text-[11px] font-bold text-gold-400 uppercase tracking-widest block mb-1">প্রথম ৩০ মিনিট</span>
                    <h3 class="text-lg font-bold text-white mb-2">টপ নোট: বার্গামট ও জাফরান</h3>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        স্প্রে করার সাথে সাথেই ছড়িয়ে পড়বে ফ্রেশ ইতালিয়ান বার্গামট এবং কাশ্মীরি জাফরানের একটি অদ্ভুত মিষ্টি ও সতেজ সুরভী।
                    </p>
                </div>

                <!-- Heart Note -->
                <div class="gold-card rounded-2xl p-5 text-center relative overflow-hidden group border-gold-500/60 shadow-lg">
                    <div class="w-20 h-20 mx-auto rounded-full overflow-hidden border-2 border-gold-500/60 mb-4 group-hover:scale-105 transition-transform">
                        <img src="https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=300&q=80" alt="Heart Note" class="w-full h-full object-cover">
                    </div>
                    <span class="text-[11px] font-bold text-amber-400 uppercase tracking-widest block mb-1">২ থেকে ৮ ঘণ্টা</span>
                    <h3 class="text-lg font-bold text-white mb-2">হার্ট নোট: দামাস্ক রোজ ও রয়েল উদ</h3>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        মৃদু মিষ্টি গোলাপের সাথে কম্বোডিয়ান প্রাকৃতিক উদের মিশেল, যা তৈরি করে একটি ব্যক্তিত্ববান ও রাজকীয় আভিজাত্য।
                    </p>
                </div>

                <!-- Base Note -->
                <div class="gold-card rounded-2xl p-5 text-center relative overflow-hidden group">
                    <div class="w-20 h-20 mx-auto rounded-full overflow-hidden border-2 border-gold-500/40 mb-4 group-hover:scale-105 transition-transform">
                        <img src="https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?auto=format&fit=crop&w=300&q=80" alt="Base Note" class="w-full h-full object-cover">
                    </div>
                    <span class="text-[11px] font-bold text-gold-400 uppercase tracking-widest block mb-1">২৪+ ঘণ্টা স্থায়ী</span>
                    <h3 class="text-lg font-bold text-white mb-2">বেস নোট: গোল্ডেন অ্যাম্বার ও চন্দন</h3>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        দীর্ঘস্থায়ী কাঠের মিষ্টি সুবাস, কস্তূরী (White Musk) এবং সোনা রঙের অ্যাম্বারের মুগ্ধকর গভীরতা যা আপনার পোশাকে থেকে যাবে দিনের পর দিন।
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Bundle Packages & Pricing Cards (Interactive Selection) -->
    <section class="py-14 relative" id="packages-section">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="text-xs font-semibold text-gold-400 uppercase tracking-wider">স্পেশাল প্যাকেজ অফার</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mt-1 text-white">
                    আপনার পছন্দের <span class="text-gold-gradient">প্যাকেজটি বেছে নিন</span>
                </h2>
                <p class="text-slate-400 text-xs sm:text-sm mt-2">
                    আজই অর্ডার করলে পাচ্ছেন বিশেষ ডিসকাউন্ট এবং কম্বো প্যাকেজে ফ্রি হোম ডেলিভারি!
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto items-stretch">
                
                <!-- Package 1: Single Bottle -->
                <div class="gold-card rounded-3xl p-6 flex flex-col justify-between relative hover:border-gold-500/60">
                    <div>
                        <div class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">ট্রায়াল প্যাক</div>
                        <h3 class="text-xl font-bold text-white mb-1">১টি রয়্যাল পারফিউম</h3>
                        <p class="text-xs text-slate-400 mb-4">৫০ মিলি লাক্সারি কাঁচের বোতল</p>
                        
                        <div class="mb-4">
                            <span class="text-xs text-slate-400">রেগুলার মূল্য: <del class="font-en text-rose-400">৳১,৪৯০</del></span>
                            <div class="text-3xl font-extrabold text-gold-400 font-en">৳৯৯০</div>
                            <span class="text-[11px] text-slate-400 block mt-1">+ ডেলিভারি চার্জ প্রযোজ্য</span>
                        </div>

                        <ul class="space-y-2 text-xs text-slate-300 mb-6 border-t border-white/10 pt-4">
                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-check text-emerald-400"></i>
                                <span>১টি প্রিমিয়াম ৫০ মিলি বটল</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-check text-emerald-400"></i>
                                <span>২৪ ঘণ্টা দীর্ঘস্থায়ী সুবাস</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-check text-emerald-400"></i>
                                <span>১০০% ক্যাশ অন ডেলিভারি</span>
                            </li>
                        </ul>
                    </div>

                    <button onclick="selectPackageFromCard('single')" class="w-full py-3 rounded-full border border-gold-500/50 text-gold-300 hover:bg-gold-500/20 font-bold text-sm transition-all cursor-pointer">
                        এই প্যাকেজটি নিন (৳৯৯০)
                    </button>
                </div>

                <!-- Package 2: Combo (Most Popular / Highlighted) -->
                <div class="gold-card rounded-3xl p-6 sm:p-7 flex flex-col justify-between relative border-2 border-gold-500 shadow-2xl bg-gradient-to-b from-cardbg via-cardbg to-amber-950/20 transform md:-translate-y-2">
                    <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-gold-gradient text-black text-xs font-extrabold px-4 py-1 rounded-full uppercase tracking-wider shadow-lg">
                        🔥 সর্বাধিক বিক্রিত (Best Seller)
                    </div>

                    <div>
                        <div class="text-xs font-bold text-gold-400 uppercase tracking-wider mb-2">রয়্যাল কাপল কম্বো</div>
                        <h3 class="text-2xl font-bold text-white mb-1">২টি পারফিউম কম্বো প্যাক</h3>
                        <p class="text-xs text-slate-300 mb-4">৫০ মিলি × ২ বোতল (উভয় ভ্যারিয়েন্ট)</p>
                        
                        <div class="mb-4">
                            <span class="text-xs text-slate-400">রেগুলার মূল্য: <del class="font-en text-rose-400">৳২,৯৮০</del></span>
                            <div class="text-4xl font-extrabold text-gold-gradient font-en">৳১,৬৯০</div>
                            <span class="inline-block mt-1 px-2.5 py-0.5 rounded-full text-xs font-bold bg-emerald-500/20 text-emerald-400 border border-emerald-500/30">
                                🚚 ফ্রি ডেলিভারি (বাঁচবে ৳১,২৯০)
                            </span>
                        </div>

                        <ul class="space-y-2.5 text-xs sm:text-sm text-slate-200 mb-6 border-t border-gold-500/20 pt-4">
                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-circle-check text-gold-400"></i>
                                <span class="font-semibold text-white">২টি প্রিমিয়াম পারফিউম ফ্লাকন</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-circle-check text-gold-400"></i>
                                <span class="text-emerald-400 font-bold">সারাদেশে সম্পূর্ণ ফ্রি ডেলিভারি</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-circle-check text-gold-400"></i>
                                <span>১টি লাক্সারি গিফট বক্স প্যাকিং</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-circle-check text-gold-400"></i>
                                <span>৩৬ ঘণ্টা দীর্ঘস্থায়ী সুবাসের নিশ্চয়তা</span>
                            </li>
                        </ul>
                    </div>

                    <button onclick="selectPackageFromCard('combo')" class="btn-shimmer w-full py-3.5 rounded-full text-base font-extrabold cursor-pointer">
                        কম্বো অফারটি লুফে নিন (৳১,৬৯০)
                    </button>
                </div>

                <!-- Package 3: VIP Mega Box -->
                <div class="gold-card rounded-3xl p-6 flex flex-col justify-between relative hover:border-gold-500/60">
                    <div>
                        <div class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">ভিআইপি স্পেশাল</div>
                        <h3 class="text-xl font-bold text-white mb-1">৩টি মেগা গিফট বক্স</h3>
                        <p class="text-xs text-slate-400 mb-4">৩টি ফুল সাইজ বোতল + উপহার</p>
                        
                        <div class="mb-4">
                            <span class="text-xs text-slate-400">রেগুলার মূল্য: <del class="font-en text-rose-400">৳৪,৪৭০</del></span>
                            <div class="text-3xl font-extrabold text-gold-400 font-en">৳২,২৯০</div>
                            <span class="inline-block mt-1 px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-emerald-500/20 text-emerald-400 border border-emerald-500/30">
                                🚚 ফ্রি ডেলিভারি + গিফট
                            </span>
                        </div>

                        <ul class="space-y-2 text-xs text-slate-300 mb-6 border-t border-white/10 pt-4">
                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-check text-emerald-400"></i>
                                <span>৩টি সম্পূর্ণ আলাদা লাক্সারি ফ্র্যাগ্রেন্স</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-check text-emerald-400"></i>
                                <span>১টি ফ্রি পকেট রয়্যাল আতর উপহার</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-check text-emerald-400"></i>
                                <span>ফ্রি হোম ডেলিভারি ও মানিব্যাক সুবিধা</span>
                            </li>
                        </ul>
                    </div>

                    <button onclick="selectPackageFromCard('vip')" class="w-full py-3 rounded-full border border-gold-500/50 text-gold-300 hover:bg-gold-500/20 font-bold text-sm transition-all cursor-pointer">
                        ভিআইপি বক্স অর্ডার করুন (৳২,২৯০)
                    </button>
                </div>

            </div>
        </div>
    </section>

    <!-- 8. Real Customer Reviews Section -->
    <section class="py-14 bg-cardbg/40 border-y border-gold-500/20">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="text-xs font-semibold text-gold-400 uppercase tracking-wider">কাস্টমার মতামত</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mt-1 text-white">
                    গ্রাহকদের মুখে <span class="text-gold-gradient">সরাসরি শুনুন তাদের অভিজ্ঞতা</span>
                </h2>
                <div class="flex items-center justify-center gap-2 mt-2">
                    <div class="text-amber-400 text-sm">★★★★★</div>
                    <span class="text-xs text-slate-300">৪.৯/৫ (১৫০০+ ভেরিফায়েড রিভিউ)</span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Review 1 -->
                <div class="gold-card rounded-2xl p-5">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-gold-500/20 border border-gold-500/40 flex items-center justify-center text-gold-300 font-bold text-sm">
                                ত
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-white">তানভীর মাহমুদ</h4>
                                <span class="text-[11px] text-slate-400">মিরপুর ডিওএইচএস, ঢাকা</span>
                            </div>
                        </div>
                        <span class="text-emerald-400 text-xs flex items-center gap-1 font-semibold">
                            <i class="fa-solid fa-circle-check text-[10px]"></i> ভেরিফায়েড
                        </span>
                    </div>
                    <div class="text-amber-400 text-xs mb-2">★★★★★</div>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        "আমি সাধারণত দুবাইয়ের পারফিউম ব্যবহার করি। কিন্তু আল-রয়্যালের এই কম্বোটির সুবাস সত্যি অবিশ্বাস্য! অফিসে দেওয়ার পর সহকর্মীরা বারবার জিজ্ঞেস করছিল কী সেন্ট লাগিয়েছি। প্রায় ৩৬ ঘণ্টা কাপড়ে সুবাস ছিল।"
                    </p>
                </div>

                <!-- Review 2 -->
                <div class="gold-card rounded-2xl p-5 border-gold-500/50">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-emerald-500/20 border border-emerald-500/40 flex items-center justify-center text-emerald-300 font-bold text-sm">
                                আ
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-white">আশরাফুল ইসলাম</h4>
                                <span class="text-[11px] text-slate-400">নাসিরাবাদ, চট্টগ্রাম</span>
                            </div>
                        </div>
                        <span class="text-emerald-400 text-xs flex items-center gap-1 font-semibold">
                            <i class="fa-solid fa-circle-check text-[10px]"></i> ভেরিফায়েড
                        </span>
                    </div>
                    <div class="text-amber-400 text-xs mb-2">★★★★★</div>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        "সবচেয়ে ভালো লেগেছে যে ১০০% অ্যালকোহল মুক্ত। নামাজে যাওয়ার সময় কোনো দ্বিধা ছাড়াই ব্যবহার করতে পারি। প্যাকেজিং এত সুন্দর ছিল যে কাউকে গিফট দেওয়ার মতো প্রিমিয়াম।"
                    </p>
                </div>

                <!-- Review 3 -->
                <div class="gold-card rounded-2xl p-5">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-gold-500/20 border border-gold-500/40 flex items-center justify-center text-gold-300 font-bold text-sm">
                                ম
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-white">মাহমুদা আক্তার</h4>
                                <span class="text-[11px] text-slate-400">উপশহর, সিলেট</span>
                            </div>
                        </div>
                        <span class="text-emerald-400 text-xs flex items-center gap-1 font-semibold">
                            <i class="fa-solid fa-circle-check text-[10px]"></i> ভেরিফায়েড
                        </span>
                    </div>
                    <div class="text-amber-400 text-xs mb-2">★★★★★</div>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        "আমার হাসব্যান্ডকে জন্মদিনে উপহার দেওয়ার জন্য ২ বোতলের কম্বোটা অর্ডার করেছিলাম। উনি খুব খুশি হয়েছেন। ডেলিভারিম্যান সামনে দাঁড়িয়ে প্যাকেট খুলে দেখতে দিয়েছে, এতে ভরসা পেয়েছি।"
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. Ultra-High Converting 1-Page Checkout Form -->
    <section class="py-16 relative" id="order-form-section">
        <div class="max-w-4xl mx-auto px-4">
            
            <!-- Order Form Card Container -->
            <div class="gold-card rounded-3xl p-6 sm:p-10 border-2 border-gold-500/70 shadow-2xl relative overflow-hidden bg-cardbg">
                
                <!-- Header of Form -->
                <div class="text-center mb-8">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 text-xs font-bold mb-2">
                        <i class="fa-solid fa-shield-halved"></i> কোনো অগ্রিম টাকা লাগবে না! ক্যাশ অন ডেলিভারি
                    </span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-white">
                        অর্ডার করতে <span class="text-gold-gradient">নিচের ফর্মটি পূরণ করুন</span>
                    </h2>
                    <p class="text-slate-300 text-xs sm:text-sm mt-2">
                        পণ্য হাতে পেয়ে খুলে দেখে মূল্য পরিশোধ করুন। মাত্র ৩০ সেকেন্ডেই অর্ডার সম্পন্ন করুন।
                    </p>
                </div>

                <form id="order-form" action="order.php" method="POST" class="space-y-6">
                    
                    <!-- Hidden inputs for backend totals -->
                    <input type="hidden" name="hidden_total_price" id="hidden_total_price" value="1690">
                    <input type="hidden" name="hidden_delivery_charge" id="hidden_delivery_charge" value="0">

                    <!-- Step 1: Select Package -->
                    <div>
                        <label class="block text-sm font-bold text-gold-300 mb-3 flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-gold-500 text-black flex items-center justify-center text-xs font-bold">১</span>
                            <span>আপনার পছন্দের প্যাকেজ সিলেক্ট করুন:</span>
                        </label>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                            <!-- Single Option -->
                            <label class="package-card block cursor-pointer">
                                <input type="radio" name="package_id" value="single" class="hidden">
                                <div class="package-content border border-slate-700 p-4 rounded-2xl bg-black/40 transition-all text-center">
                                    <div class="radio-indicator w-4 h-4 rounded-full border border-slate-500 mx-auto mb-2 flex items-center justify-center"></div>
                                    <div class="text-sm font-bold text-white">১টি পারফিউম</div>
                                    <div class="text-xs text-slate-400">ট্রায়াল প্যাক</div>
                                    <div class="text-lg font-bold text-gold-400 font-en mt-1">৳৯৯০</div>
                                    <span class="text-[10px] text-slate-500">+ ডেলিভারি চার্জ</span>
                                </div>
                            </label>

                            <!-- Combo Option (Default Checked) -->
                            <label class="package-card block cursor-pointer">
                                <input type="radio" name="package_id" value="combo" class="hidden" checked>
                                <div class="package-content border border-slate-700 p-4 rounded-2xl bg-black/40 transition-all text-center relative">
                                    <span class="absolute -top-2.5 left-1/2 -translate-x-1/2 bg-gold-500 text-black text-[10px] font-extrabold px-2 py-0.5 rounded-full whitespace-nowrap">
                                        সেরা পছন্দ
                                    </span>
                                    <div class="radio-indicator w-4 h-4 rounded-full border border-slate-500 mx-auto mb-2 flex items-center justify-center"></div>
                                    <div class="text-sm font-bold text-white">২টি কম্বো প্যাক</div>
                                    <div class="text-xs text-slate-300 font-semibold">বেস্ট সেলার</div>
                                    <div class="text-lg font-bold text-gold-400 font-en mt-1">৳১,৬৯০</div>
                                    <span class="text-[10px] text-emerald-400 font-bold">🚚 ফ্রি ডেলিভারি</span>
                                </div>
                            </label>

                            <!-- VIP Option -->
                            <label class="package-card block cursor-pointer">
                                <input type="radio" name="package_id" value="vip" class="hidden">
                                <div class="package-content border border-slate-700 p-4 rounded-2xl bg-black/40 transition-all text-center">
                                    <div class="radio-indicator w-4 h-4 rounded-full border border-slate-500 mx-auto mb-2 flex items-center justify-center"></div>
                                    <div class="text-sm font-bold text-white">৩টি মেগা বক্স</div>
                                    <div class="text-xs text-slate-400">ভিআইপি গিফট সহ</div>
                                    <div class="text-lg font-bold text-gold-400 font-en mt-1">৳২,২৯০</div>
                                    <span class="text-[10px] text-emerald-400 font-bold">🚚 ফ্রি ডেলিভারি</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Step 2: Customer Contact Info -->
                    <div>
                        <label class="block text-sm font-bold text-gold-300 mb-3 flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-gold-500 text-black flex items-center justify-center text-xs font-bold">২</span>
                            <span>আপনার তথ্য প্রদান করুন:</span>
                        </label>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Name -->
                            <div>
                                <label for="customer_name" class="block text-xs font-semibold text-slate-300 mb-1.5">
                                    আপনার পূর্ণ নাম <span class="text-rose-400">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400">
                                        <i class="fa-solid fa-user text-xs"></i>
                                    </span>
                                    <input type="text" id="customer_name" name="customer_name" required placeholder="যেমন: মো: আরিফুল ইসলাম"
                                        class="w-full pl-9 pr-4 py-3 rounded-xl bg-black/60 border border-slate-700 focus:border-gold-500 focus:ring-1 focus:ring-gold-500 text-white text-sm outline-none transition-all placeholder:text-slate-600">
                                </div>
                            </div>

                            <!-- Phone Number -->
                            <div>
                                <label for="customer_phone" class="block text-xs font-semibold text-slate-300 mb-1.5">
                                    সঠিক মোবাইল নাম্বার <span class="text-rose-400">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400">
                                        <i class="fa-solid fa-phone text-xs"></i>
                                    </span>
                                    <input type="tel" id="customer_phone" name="customer_phone" required maxlength="11" placeholder="যেমন: 017XXXXXXXX"
                                        class="w-full pl-9 pr-4 py-3 rounded-xl bg-black/60 border border-slate-700 focus:border-gold-500 focus:ring-1 focus:ring-gold-500 text-white text-sm outline-none transition-all placeholder:text-slate-600 font-en">
                                </div>
                                <span id="phone-error" class="text-[11px] text-rose-400 mt-1 hidden block">
                                    ⚠️ সঠিক ১১ ডিজিটের মোবাইল নাম্বার দিন (যেমন: 01712345678)
                                </span>
                            </div>
                        </div>

                        <!-- Full Address -->
                        <div class="mt-4">
                            <label for="customer_address" class="block text-xs font-semibold text-slate-300 mb-1.5">
                                আপনার সম্পূর্ণ ঠিকানা (জেলা, থানা, এলাকা/রোড নং) <span class="text-rose-400">*</span>
                            </label>
                            <div class="relative">
                                <span class="absolute top-3 left-3.5 text-slate-400">
                                    <i class="fa-solid fa-location-dot text-xs"></i>
                                </span>
                                <textarea id="customer_address" name="customer_address" required rows="2" placeholder="যেমন: বাড়ি ১২, রোড ৪, সেক্টর ১০, উত্তরা, ঢাকা"
                                    class="w-full pl-9 pr-4 py-2.5 rounded-xl bg-black/60 border border-slate-700 focus:border-gold-500 focus:ring-1 focus:ring-gold-500 text-white text-sm outline-none transition-all placeholder:text-slate-600"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3: Delivery Area -->
                    <div>
                        <label class="block text-sm font-bold text-gold-300 mb-3 flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-gold-500 text-black flex items-center justify-center text-xs font-bold">৩</span>
                            <span>ডেলিভারি এলাকা সিলেক্ট করুন:</span>
                        </label>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <label class="cursor-pointer">
                                <input type="radio" name="delivery_area" value="inside_dhaka" checked class="peer hidden">
                                <div class="p-3.5 rounded-xl border border-slate-700 peer-checked:border-gold-500 peer-checked:bg-gold-500/10 bg-black/40 flex items-center justify-between transition-all">
                                    <div class="flex items-center gap-2">
                                        <i class="fa-solid fa-city text-gold-400 text-sm"></i>
                                        <span class="text-xs sm:text-sm font-bold text-white">ঢাকার ভেতরে</span>
                                    </div>
                                    <span class="text-xs text-slate-300 font-en">৳৬০</span>
                                </div>
                            </label>

                            <label class="cursor-pointer">
                                <input type="radio" name="delivery_area" value="outside_dhaka" class="peer hidden">
                                <div class="p-3.5 rounded-xl border border-slate-700 peer-checked:border-gold-500 peer-checked:bg-gold-500/10 bg-black/40 flex items-center justify-between transition-all">
                                    <div class="flex items-center gap-2">
                                        <i class="fa-solid fa-truck text-gold-400 text-sm"></i>
                                        <span class="text-xs sm:text-sm font-bold text-white">ঢাকার বাইরে (সারাদেশে)</span>
                                    </div>
                                    <span class="text-xs text-slate-300 font-en">৳১২০</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Step 4: Live Order Summary -->
                    <div class="p-4 sm:p-5 rounded-2xl bg-black/70 border border-gold-500/30">
                        <div class="text-xs font-bold text-gold-400 uppercase tracking-wider mb-2">অর্ডার সামারি</div>
                        
                        <div class="space-y-2 text-xs sm:text-sm">
                            <div class="flex justify-between text-slate-300">
                                <span id="summary-pkg-name">২টি রয়্যাল পারফিউম কম্বো (বেস্ট সেলার)</span>
                                <span id="summary-pkg-price" class="font-bold font-en text-white">৳১,৬৯০</span>
                            </div>
                            <div class="flex justify-between text-slate-300">
                                <span>ডেলিভারি চার্জ:</span>
                                <span id="summary-delivery" class="font-bold font-en text-emerald-400">ফ্রি ডেলিভারি (৳০)</span>
                            </div>
                            <div class="border-t border-slate-800 pt-2 flex justify-between items-baseline text-white">
                                <span class="font-bold text-sm sm:text-base">সর্বমোট প্রদেয় টাকা:</span>
                                <span id="summary-total" class="text-2xl font-extrabold text-gold-400 font-en">৳১,৬৯০</span>
                            </div>
                        </div>
                    </div>

                    <!-- Big Submit Order Button -->
                    <div>
                        <button type="submit" id="submit-order-btn" class="btn-shimmer w-full py-4 rounded-2xl text-base sm:text-lg font-extrabold text-black flex items-center justify-center gap-2 cursor-pointer shadow-xl">
                            <i class="fa-solid fa-lock text-sm"></i>
                            <span>অর্ডার কনফার্ম করুন (ক্যাশ অন ডেলিভারি: <span id="submit-btn-total" class="font-en">৳১,৬৯০</span>)</span>
                        </button>
                    </div>

                    <!-- Safety Guarantee Note -->
                    <div class="text-center text-xs text-slate-400 flex items-center justify-center gap-2">
                        <i class="fa-solid fa-shield-heart text-gold-400"></i>
                        <span>১০০% নিরাপদ শপিং। ডেলিভারিম্যান পৌঁছালে প্যাকেট খুলে দেখে মূল্য পরিশোধ করুন।</span>
                    </div>

                </form>
            </div>
        </div>
    </section>

    <!-- 10. Frequently Asked Questions (FAQ) Accordion -->
    <section class="py-14 bg-cardbg/40 border-t border-gold-500/20">
        <div class="max-w-4xl mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="text-xs font-semibold text-gold-400 uppercase tracking-wider">সাধারণ জিজ্ঞাসা</span>
                <h2 class="text-2xl sm:text-3xl font-bold mt-1 text-white">
                    আপনার মনে থাকা <span class="text-gold-gradient">প্রশ্নের উত্তর</span>
                </h2>
            </div>

            <div class="space-y-3">
                <!-- FAQ 1 -->
                <div class="accordion-item gold-card rounded-xl border border-white/10 active">
                    <button type="button" class="accordion-header w-full p-4 text-left flex items-center justify-between text-sm sm:text-base font-bold text-white">
                        <span>১. ডেলিভারি পেতে কতদিন সময় লাগবে?</span>
                        <i class="fa-solid fa-chevron-down accordion-icon text-xs text-gold-400 transition-transform"></i>
                    </button>
                    <div class="accordion-content px-4 pb-4 text-xs sm:text-sm text-slate-300">
                        ঢাকার ভেতরে ২৪ থেকে ৪৮ ঘণ্টার মধ্যে এবং ঢাকার বাইরে যেকোনো জেলা শহরে ২ থেকে ৩ দিনের মধ্যে হোম ডেলিভারি পৌঁছে দেওয়া হয়।
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="accordion-item gold-card rounded-xl border border-white/10">
                    <button type="button" class="accordion-header w-full p-4 text-left flex items-center justify-between text-sm sm:text-base font-bold text-white">
                        <span>২. আমি কি পারফিউমটি মেখে নামাজ পড়তে পারব?</span>
                        <i class="fa-solid fa-chevron-down accordion-icon text-xs text-gold-400 transition-transform"></i>
                    </button>
                    <div class="accordion-content px-4 pb-4 text-xs sm:text-sm text-slate-300">
                        হ্যাঁ, নিঃসন্দেহে! এটি ১০০% অ্যালকোহল ও কেমিক্যাল মুক্ত প্রাকৃতিক এসেন্স দ্বারা প্রস্তুত, তাই এটি দিয়ে নামাজ আদায় ও পবিত্র স্থানে যাওয়া সম্পূর্ণ হালাল ও নিরাপদ।
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="accordion-item gold-card rounded-xl border border-white/10">
                    <button type="button" class="accordion-header w-full p-4 text-left flex items-center justify-between text-sm sm:text-base font-bold text-white">
                        <span>৩. সুবাস পছন্দ না হলে রিটার্ন করার নিয়ম কী?</span>
                        <i class="fa-solid fa-chevron-down accordion-icon text-xs text-gold-400 transition-transform"></i>
                    </button>
                    <div class="accordion-content px-4 pb-4 text-xs sm:text-sm text-slate-300">
                        ডেলিভারি ম্যানের উপস্থিতিতে বক্স খুলে দেখতে পারবেন। সুবাস পছন্দ না হলে কোনো চার্জ ছাড়াই সাথে সাথে রিটার্ন করতে পারবেন অথবা ৭ দিনের মধ্যে আমাদের নাম্বারে যোগাযোগ করে এক্সচেঞ্জ/মানিব্যাক নিতে পারবেন।
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="accordion-item gold-card rounded-xl border border-white/10">
                    <button type="button" class="accordion-header w-full p-4 text-left flex items-center justify-between text-sm sm:text-base font-bold text-white">
                        <span>৪. কোনো অগ্রিম পেমেন্ট করতে হবে কি?</span>
                        <i class="fa-solid fa-chevron-down accordion-icon text-xs text-gold-400 transition-transform"></i>
                    </button>
                    <div class="accordion-content px-4 pb-4 text-xs sm:text-sm text-slate-300">
                        একদমই না! আমরা গ্রাহকের শতভাগ আস্থায় বিশ্বাসী। পণ্য আপনার ঠিকানায় পৌঁছানোর পর হাতেনাতে চেক করে ডেলিভারিম্যানকে টাকা পরিশোধ করবেন।
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. Footer with Trust badges and Developer Branding -->
    <footer class="bg-black border-t border-gold-500/30 pt-12 pb-24 md:pb-12 text-slate-400 text-xs">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-10">
                <!-- Col 1: Brand Info -->
                <div class="md:col-span-2">
                    <div class="flex items-center gap-2.5 mb-3">
                        <div class="w-8 h-8 rounded-full border border-gold-500/50 flex items-center justify-center bg-gold-500/10 text-gold-400">
                            <i class="fa-solid fa-crown text-sm"></i>
                        </div>
                        <span class="font-luxury font-bold text-lg tracking-wider text-gold-gradient">AL-ROYAL OUD</span>
                    </div>
                    <p class="text-xs text-slate-400 max-w-sm mb-4 leading-relaxed">
                        আমরা সারাদেশে প্রিমিয়াম কোয়ালিটির অ্যারাবিয়ান আতর ও পারফিউম সরবরাহ করে আসছি। গুণমান ও আভিজাত্যের বিশ্বস্ত ঠিকানা।
                    </p>
                    <div class="flex items-center gap-3 text-gold-400">
                        <a href="tel:<?= $client_phone; ?>" class="hover:text-white transition-colors"><i class="fa-solid fa-phone"></i></a>
                        <a href="<?= $whatsapp_url; ?>" target="_blank" class="hover:text-white transition-colors"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="#" class="hover:text-white transition-colors"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="hover:text-white transition-colors"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>

                <!-- Col 2: Quick Links -->
                <div>
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-3">জরুরি লিংক</h4>
                    <ul class="space-y-2 text-xs">
                        <li><a href="#order-form-section" class="hover:text-gold-400 transition-colors">সরাসরি অর্ডার করুন</a></li>
                        <li><a href="#packages-section" class="hover:text-gold-400 transition-colors">প্যাকেজ অফার সমূহ</a></li>
                        <li><a href="admin.php" target="_blank" class="hover:text-gold-400 transition-colors text-amber-400/80">অর্ডার ড্যাশবোর্ড (অ্যাডমিন ডেমো)</a></li>
                    </ul>
                </div>

                <!-- Col 3: Contact & Address -->
                <div>
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-3">যোগাযোগের ঠিকানা</h4>
                    <ul class="space-y-2 text-xs">
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-phone text-gold-400"></i>
                            <a href="tel:<?= $client_phone; ?>" class="hover:text-white font-en"><?= $client_phone; ?></a>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-envelope text-gold-400"></i>
                            <span>support@codingburg.com</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-location-dot text-gold-400 mt-1"></i>
                            <span>হাউস-২৪, রোড-২, সেক্টর-৯, উত্তরা, ঢাকা-১২৩০</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Payment Methods Banner -->
            <div class="border-t border-slate-900 pt-6 pb-6 flex flex-wrap items-center justify-between gap-4">
                <div class="flex items-center gap-2">
                    <span class="text-[11px] text-slate-500">পেমেন্ট মেথড:</span>
                    <span class="px-2.5 py-1 rounded bg-slate-900 border border-slate-800 text-[11px] font-semibold text-slate-300">ক্যাশ অন ডেলিভারি</span>
                    <span class="px-2.5 py-1 rounded bg-pink-950/40 border border-pink-500/20 text-[11px] font-semibold text-pink-300">bKash</span>
                    <span class="px-2.5 py-1 rounded bg-orange-950/40 border border-orange-500/20 text-[11px] font-semibold text-orange-300">Nagad</span>
                </div>

                <div class="text-[11px] text-slate-500">
                    &copy; <?= date('Y'); ?> Al-Royal Oud Bangladesh. সর্বস্বত্ব সংরক্ষিত।
                </div>
            </div>

            <!-- Developer Credit (CodingBurg Branding) -->
            <div class="border-t border-gold-500/20 pt-6 text-center">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gold-500/10 border border-gold-500/30 text-xs">
                    <span class="text-slate-400">Designed & Developed by</span>
                    <a href="https://codingburg.com" target="_blank" rel="noopener noreferrer" class="font-bold text-gold-400 hover:text-gold-300 transition-colors flex items-center gap-1.5 group">
                        <i class="fa-solid fa-code text-gold-500 group-hover:rotate-12 transition-transform"></i>
                        <span class="font-en tracking-wide underline underline-offset-4 decoration-gold-500/50">CodingBurg</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- 12. Floating WhatsApp and Call Buttons -->
    <div class="fixed bottom-20 md:bottom-6 right-4 md:right-6 z-40 flex flex-col gap-3">
        <!-- Call Button -->
        <a href="tel:<?= $client_phone; ?>" title="সরাসরি কল করুন" 
           class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-amber-500 hover:bg-amber-400 text-black shadow-xl flex items-center justify-center text-lg md:text-xl transition-all transform hover:scale-110 border-2 border-white/30 animate-pulse-glow">
            <i class="fa-solid fa-phone"></i>
        </a>

        <!-- WhatsApp Button -->
        <a href="<?= $whatsapp_url; ?>" target="_blank" title="হোয়াটসঅ্যাপে চ্যাট করুন" 
           class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-emerald-500 hover:bg-emerald-400 text-white shadow-xl flex items-center justify-center text-xl md:text-2xl transition-all transform hover:scale-110 border-2 border-white/30 animate-pulse-green">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
    </div>

    <!-- 13. Mobile Sticky Bottom Bar (High Conversion Driver) -->
    <div class="fixed bottom-0 left-0 right-0 z-30 md:hidden glass-floating px-4 py-2.5 flex items-center justify-between gap-3 shadow-2xl">
        <div>
            <div class="text-[10px] text-slate-400 leading-none">মোট মূল্য:</div>
            <div id="sticky-mobile-price" class="text-lg font-extrabold text-gold-400 font-en leading-tight">৳১,৬৯০</div>
            <div class="text-[9px] text-emerald-400 font-semibold leading-none">ক্যাশ অন ডেলিভারি</div>
        </div>

        <button class="btn-order-trigger btn-shimmer px-6 py-2.5 rounded-full text-xs font-bold text-black flex items-center gap-1.5 shadow-lg">
            <i class="fa-solid fa-bag-shopping"></i>
            <span>এখনই অর্ডার করুন</span>
        </button>
    </div>

    <!-- 14. Fake Live Sales Notification Toast -->
    <div id="live-sale-toast" class="gold-card p-3 rounded-2xl max-w-xs shadow-2xl border border-gold-500/50 flex items-center gap-3">
        <div class="w-10 h-10 rounded-xl overflow-hidden shrink-0 border border-gold-500/40">
            <img src="https://images.unsplash.com/photo-1594035910387-fea47794261f?auto=format&fit=crop&w=150&q=80" alt="Perfume" class="w-full h-full object-cover">
        </div>
        <div class="text-[11px] leading-tight">
            <div class="text-white font-bold flex items-center gap-1">
                <span id="toast-customer-name">মাহমুদুল ইসলাম</span>
                <span class="text-slate-400 text-[10px]">(<span id="toast-customer-loc">উত্তরা, ঢাকা</span>)</span>
            </div>
            <div class="text-gold-300 font-semibold text-[10px] mt-0.5">
                <span id="toast-customer-pkg">২টি রয়্যাল কম্বো</span> অর্ডার করেছেন
            </div>
            <div class="text-[9px] text-slate-500 mt-0.5" id="toast-time">১ মিনিট আগে</div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="assets/js/app.js"></script>
</body>
</html>
