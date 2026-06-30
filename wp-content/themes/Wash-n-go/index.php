<?php
get_header();

$hero_image_url = get_template_directory_uri() . '/assets/images/right-car-detailing.webp';
?>

<section class="relative overflow-hidden bg-[#07111f]">

    <!-- Background Image -->
    <div
        class="hero-bg-animate absolute inset-0 bg-cover bg-center"
        style="background-image: url('<?php echo esc_url($hero_image_url); ?>');">
    </div>

    <!-- Premium Dark Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-[#020617]/95 via-[#020617]/82 to-[#020617]/55"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-[#020617]/30 via-transparent to-[#020617]"></div>

    <!-- Decorative Glows -->
    <div class="absolute left-[-80px] top-24 h-72 w-72 rounded-full bg-cyan-400/20 blur-3xl"></div>
    <div class="absolute right-[-80px] top-52 h-80 w-80 rounded-full bg-sky-500/20 blur-3xl"></div>
    <div class="absolute bottom-20 left-1/2 h-56 w-56 -translate-x-1/2 rounded-full bg-cyan-300/10 blur-3xl"></div>

    <!-- Dot Pattern -->
    <div class="absolute inset-0 opacity-[0.08]"
         style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 24px 24px;">
    </div>

    <!-- Hero Main -->
    <div class="relative z-10 mx-auto grid min-h-[760px] max-w-7xl grid-cols-1 items-center gap-12 px-4 pb-36 pt-28 sm:px-6 lg:grid-cols-2 lg:px-8 lg:pt-24">

        <!-- Left Content -->
        <div class="text-center lg:text-left">

            <!-- Badge -->
            <div class="hero-fade-up hero-delay-1 inline-flex items-center gap-3 rounded-full border border-cyan-300/25 bg-white/10 px-5 py-2.5 text-sm font-bold text-white shadow-lg backdrop-blur-md">
                <span class="relative flex h-3 w-3">
                    <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-cyan-300 opacity-75"></span>
                    <span class="relative inline-flex h-3 w-3 rounded-full bg-cyan-300"></span>
                </span>
                100% Mobile Car Detailing Service
            </div>

            <!-- Heading -->
            <h1 class="hero-fade-up hero-delay-2 mt-7 max-w-4xl text-4xl font-black leading-[1.08] tracking-tight text-white sm:text-5xl lg:text-6xl xl:text-7xl">
                Professional Mobile
                <span class="bg-gradient-to-r from-cyan-300 via-sky-300 to-cyan-400 bg-clip-text text-transparent">
                    Car Detailing
                </span>
                Near You
            </h1>

            <!-- Description -->
            <p class="hero-fade-up hero-delay-3 mt-6 max-w-2xl text-base leading-8 text-slate-200 sm:text-lg">
                We come to your home, office, or workplace with premium detailing tools and safe products.
                Get a clean, protected, and showroom-ready vehicle without wasting your time.
            </p>

            <!-- Trust Points -->
            <div class="hero-fade-up hero-delay-4 mt-7 flex flex-wrap justify-center gap-3 lg:justify-start">
                <span class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-4 py-2 text-sm font-bold text-white backdrop-blur-md">
                    <i class="fa-solid fa-check text-cyan-300"></i>
                    Same Day Booking
                </span>

                <span class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-4 py-2 text-sm font-bold text-white backdrop-blur-md">
                    <i class="fa-solid fa-shield-heart text-cyan-300"></i>
                    Safe Products
                </span>

                <span class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-4 py-2 text-sm font-bold text-white backdrop-blur-md">
                    <i class="fa-solid fa-location-dot text-cyan-300"></i>
                    We Come To You
                </span>
            </div>

            <!-- Buttons -->
            <div class="hero-fade-up hero-delay-5 mt-9 flex flex-col items-center gap-4 sm:flex-row lg:justify-start">

                <a href="#appointment"
                   class="hero-glow-btn group inline-flex min-w-[225px] items-center justify-center gap-3 rounded-full bg-gradient-to-r from-cyan-400 to-sky-500 px-8 py-4 text-sm font-black uppercase tracking-wide text-white shadow-2xl transition-all duration-300 hover:-translate-y-1 hover:from-cyan-300 hover:to-sky-400">
                    Book Appointment
                    <i class="fa-solid fa-arrow-right transition-transform duration-300 group-hover:translate-x-1"></i>
                </a>

                <a href="tel:4692999750"
                   class="group inline-flex min-w-[225px] items-center justify-center gap-3 rounded-full border border-white/25 bg-white/10 px-8 py-4 text-sm font-black text-white shadow-lg backdrop-blur-md transition-all duration-300 hover:-translate-y-1 hover:bg-white hover:text-slate-950">
                    <i class="fa-solid fa-phone-volume text-cyan-300 transition-transform duration-300 group-hover:rotate-12 group-hover:text-slate-950"></i>
                    (469) 299-9750
                </a>

            </div>

            <!-- Stats -->
            <div class="hero-fade-up hero-delay-5 mt-10 grid max-w-xl grid-cols-3 gap-3">
                <div class="rounded-2xl border border-white/15 bg-white/10 p-4 text-center backdrop-blur-md">
                    <strong class="block text-2xl font-black text-white">5★</strong>
                    <span class="mt-1 block text-xs font-bold text-slate-300">Rated Service</span>
                </div>

                <div class="rounded-2xl border border-white/15 bg-white/10 p-4 text-center backdrop-blur-md">
                    <strong class="block text-2xl font-black text-white">100%</strong>
                    <span class="mt-1 block text-xs font-bold text-slate-300">Mobile</span>
                </div>

                <div class="rounded-2xl border border-white/15 bg-white/10 p-4 text-center backdrop-blur-md">
                    <strong class="block text-2xl font-black text-white">3+</strong>
                    <span class="mt-1 block text-xs font-bold text-slate-300">Packages</span>
                </div>
            </div>

        </div>

        <!-- Right Floating Booking Card -->
        <div class="hero-fade-up hero-delay-4 hidden lg:block">
            <div class="hero-float relative ml-auto max-w-md rounded-[2rem] border border-white/20 bg-white/15 p-6 shadow-2xl backdrop-blur-xl">

                <div class="absolute -right-5 -top-5 flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-cyan-400 to-sky-500 text-white shadow-2xl">
                    <i class="fa-solid fa-car-side text-3xl"></i>
                </div>

                <div class="rounded-[1.5rem] bg-white p-6 shadow-xl">
                    <p class="text-sm font-black uppercase tracking-[0.18em] text-cyan-600">
                        Premium Service
                    </p>

                    <h3 class="mt-3 text-3xl font-black leading-tight text-slate-950">
                        Get Your Car Detailed Today
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-slate-600">
                        Interior, exterior, ceramic protection, stain removal, and complete detailing at your location.
                    </p>

                    <div class="mt-6 space-y-3">
                        <div class="flex items-center gap-3 rounded-2xl bg-slate-50 p-3">
                            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-cyan-100 text-cyan-600">
                                <i class="fa-solid fa-spray-can-sparkles"></i>
                            </span>
                            <span class="text-sm font-extrabold text-slate-800">Deep Interior Cleaning</span>
                        </div>

                        <div class="flex items-center gap-3 rounded-2xl bg-slate-50 p-3">
                            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-cyan-100 text-cyan-600">
                                <i class="fa-solid fa-wand-magic-sparkles"></i>
                            </span>
                            <span class="text-sm font-extrabold text-slate-800">Paint Shine & Protection</span>
                        </div>

                        <div class="flex items-center gap-3 rounded-2xl bg-slate-50 p-3">
                            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-cyan-100 text-cyan-600">
                                <i class="fa-solid fa-clock"></i>
                            </span>
                            <span class="text-sm font-extrabold text-slate-800">Fast Mobile Appointment</span>
                        </div>
                    </div>

                    <a href="#appointment"
                       class="mt-6 inline-flex w-full items-center justify-center rounded-2xl bg-slate-950 px-6 py-4 text-sm font-black text-white transition-all duration-300 hover:-translate-y-1 hover:bg-cyan-600">
                        Reserve Your Spot
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Bottom Booking Strip -->
<section class="relative overflow-hidden bg-gradient-to-r from-cyan-500 to-sky-600 py-8">
    <div class="absolute inset-0 opacity-20"
         style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 22px 22px;">
    </div>

    <div class="relative mx-auto flex max-w-6xl flex-col items-center justify-between gap-4 px-4 text-center sm:px-6 lg:flex-row lg:text-left">
        <p class="text-lg font-black text-white">
            Quick, efficient, and professional mobile car detailing at your doorstep.
        </p>

        <a href="tel:4692999750"
           class="inline-flex items-center justify-center gap-3 rounded-full bg-white px-7 py-3 text-sm font-black text-cyan-700 shadow-xl transition-all duration-300 hover:-translate-y-1 hover:bg-slate-950 hover:text-white">
            <i class="fa-solid fa-phone-volume"></i>
            Call Now: (469) 299-9750
        </a>
    </div>
</section>

<!-- About Section -->
<section class="relative overflow-hidden bg-white py-20 sm:py-24">

    <!-- Background Decoration -->
    <div class="absolute left-0 top-20 h-72 w-72 rounded-full bg-cyan-100/70 blur-3xl"></div>
    <div class="absolute right-0 bottom-10 h-72 w-72 rounded-full bg-sky-100/70 blur-3xl"></div>

    <div class="relative z-10 mx-auto grid max-w-7xl grid-cols-1 items-center gap-12 px-4 sm:px-6 lg:grid-cols-2 lg:px-8">

        <!-- Content -->
        <div class="section-fade-up">

            <span class="inline-flex items-center gap-2 rounded-full bg-cyan-50 px-4 py-2 text-xs font-black uppercase tracking-[0.18em] text-cyan-600">
                <span class="h-2 w-2 rounded-full bg-cyan-500"></span>
                RCD
            </span>

            <h2 class="mt-5 max-w-xl text-3xl font-black leading-tight tracking-tight text-slate-950 sm:text-4xl lg:text-5xl">
                Who We Are -
                <span class="bg-gradient-to-r from-cyan-500 to-sky-500 bg-clip-text text-transparent">
                    Right Car Detailing USA
                </span>
            </h2>

            <p class="mt-6 max-w-2xl text-base leading-8 text-slate-600">
                At Right Car Detailing USA, we are more than just a car cleaning company —
                we are a dedicated team of experts passionate about auto detailing services
                that exceed expectations. From compact sedans and family SUVs to work trucks,
                RVs, motorcycles, and boats, our technicians handle every vehicle with precision.
            </p>

            <p class="mt-4 max-w-2xl text-base leading-8 text-slate-600">
                We combine advanced cleaning products, professional-grade equipment, and
                industry-proven techniques to deliver consistent and long-lasting results.
                With fully mobile systems, we provide convenient detailing near you, giving
                drivers a reliable, professional, and affordable alternative to traditional car washes.
            </p>

            <!-- Features -->
            <div class="mt-7 grid grid-cols-1 gap-4 sm:grid-cols-2">

                <div class="flex items-center gap-3 rounded-2xl border border-cyan-100 bg-cyan-50/60 p-4">
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-white text-cyan-600 shadow-sm">
                        <i class="fa-solid fa-location-dot"></i>
                    </span>
                    <span class="text-sm font-black text-slate-800">
                        100% Mobile Service
                    </span>
                </div>

                <div class="flex items-center gap-3 rounded-2xl border border-cyan-100 bg-cyan-50/60 p-4">
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-white text-cyan-600 shadow-sm">
                        <i class="fa-solid fa-shield-heart"></i>
                    </span>
                    <span class="text-sm font-black text-slate-800">
                        Safe Premium Products
                    </span>
                </div>

            </div>

            <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                <a href="/about/"
                   class="inline-flex items-center justify-center gap-3 rounded-full bg-gradient-to-r from-cyan-500 to-sky-500 px-7 py-3.5 text-sm font-black text-white shadow-lg shadow-cyan-500/25 transition-all duration-300 hover:-translate-y-1 hover:shadow-cyan-500/40">
                    About Us
                    <i class="fa-solid fa-arrow-right text-xs"></i>
                </a>

                <a href="tel:4692999750"
                   class="inline-flex items-center justify-center gap-3 rounded-full border border-cyan-200 bg-white px-7 py-3.5 text-sm font-black text-slate-900 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-cyan-400 hover:text-cyan-600">
                    <i class="fa-solid fa-phone-volume text-cyan-500"></i>
                    Call Now
                </a>
            </div>

        </div>

        <!-- Image -->
        <div class="section-fade-up image-float relative">

            <div class="absolute -left-5 -top-5 h-24 w-24 rounded-3xl bg-cyan-400/20 blur-2xl"></div>
            <div class="absolute -right-5 -bottom-5 h-32 w-32 rounded-3xl bg-sky-400/20 blur-2xl"></div>

            <div class="soft-glow relative overflow-hidden rounded-[2rem] border border-cyan-100 bg-white p-3 shadow-2xl">

                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/right-car-detailing.webp'); ?>"
                    alt="Right Car Detailing USA"
                    class="h-[360px] w-full rounded-[1.5rem] object-cover sm:h-[430px]">

                <!-- Floating Badge -->
                <div class="absolute bottom-7 left-7 rounded-2xl border border-white/30 bg-white/90 px-5 py-4 shadow-xl backdrop-blur-md">
                    <div class="flex items-center gap-3">
                        <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-100 text-cyan-600">
                            <i class="fa-solid fa-spray-can-sparkles"></i>
                        </span>
                        <div>
                            <strong class="block text-sm font-black text-slate-950">
                                Premium Detailing
                            </strong>
                            <small class="text-xs font-bold text-slate-500">
                                At your doorstep
                            </small>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>


<!-- Services Section -->
<section class="relative overflow-hidden bg-slate-50 py-20 sm:py-24">

    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-[0.35]"
         style="background-image: radial-gradient(#67e8f9 1px, transparent 1px); background-size: 28px 28px;">
    </div>

    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <!-- Heading -->
        <div class="mx-auto max-w-4xl text-center">

            <span class="inline-flex items-center gap-2 rounded-full bg-white px-4 py-2 text-xs font-black uppercase tracking-[0.18em] text-cyan-600 shadow-sm">
                <span class="h-2 w-2 rounded-full bg-cyan-500"></span>
                Our Services
            </span>

            <h2 class="mt-5 text-3xl font-black leading-tight tracking-tight text-slate-950 sm:text-4xl lg:text-5xl">
                Mobile Car Detailing Services
                <span class="bg-gradient-to-r from-cyan-500 to-sky-500 bg-clip-text text-transparent">
                    Near You
                </span>
            </h2>

            <p class="mx-auto mt-5 max-w-3xl text-base leading-8 text-slate-600">
                We offer a complete range of mobile car detailing services near you including
                interior cleaning, exterior polishing, and full-service auto detailing packages.
                Each service is customized to match your vehicle’s needs and deliver outstanding results.
            </p>

        </div>

        <!-- Cards -->
        <div class="mt-14 grid grid-cols-1 gap-7 md:grid-cols-3">

            <!-- Card 1 -->
            <div class="group rounded-[1.7rem] border border-cyan-100 bg-white p-7 shadow-lg transition-all duration-300 hover:-translate-y-3 hover:shadow-2xl">

                <div class="mb-6 flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-cyan-100 to-sky-100 text-cyan-600 transition-all duration-300 group-hover:rotate-3 group-hover:scale-110 group-hover:from-cyan-500 group-hover:to-sky-500 group-hover:text-white">
                    <i class="fa-solid fa-couch text-2xl"></i>
                </div>

                <h3 class="text-xl font-black text-slate-950">
                    Interior Car Detailing
                </h3>

                <p class="mt-4 text-sm leading-7 text-slate-600">
                    A clean interior transforms your driving experience. Our interior detailing includes:
                </p>

                <ul class="mt-5 space-y-3">
                    <li class="flex gap-3 text-sm font-bold text-slate-700">
                        <i class="fa-solid fa-circle-check mt-1 text-cyan-500"></i>
                        Deep vacuuming of carpets, seats, and mats
                    </li>
                    <li class="flex gap-3 text-sm font-bold text-slate-700">
                        <i class="fa-solid fa-circle-check mt-1 text-cyan-500"></i>
                        Upholstery and leather cleaning
                    </li>
                    <li class="flex gap-3 text-sm font-bold text-slate-700">
                        <i class="fa-solid fa-circle-check mt-1 text-cyan-500"></i>
                        Odor removal and sanitization
                    </li>
                    <li class="flex gap-3 text-sm font-bold text-slate-700">
                        <i class="fa-solid fa-circle-check mt-1 text-cyan-500"></i>
                        Dashboard, vents, and console detailing
                    </li>
                    <li class="flex gap-3 text-sm font-bold text-slate-700">
                        <i class="fa-solid fa-circle-check mt-1 text-cyan-500"></i>
                        Pet hair removal and steam cleaning
                    </li>
                </ul>

                <a href="#appointment"
                   class="mt-7 inline-flex items-center gap-2 text-sm font-black text-cyan-600 transition hover:text-slate-950">
                    Book Interior Service
                    <span class="transition-transform duration-300 group-hover:translate-x-1">→</span>
                </a>
            </div>

            <!-- Card 2 -->
            <div class="group rounded-[1.7rem] border border-cyan-200 bg-white p-7 shadow-xl transition-all duration-300 hover:-translate-y-3 hover:shadow-2xl md:-translate-y-5">

                <div class="mb-6 flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-cyan-500 to-sky-500 text-white shadow-lg shadow-cyan-500/25 transition-all duration-300 group-hover:rotate-3 group-hover:scale-110">
                    <i class="fa-solid fa-car-on text-2xl"></i>
                </div>

                <div class="mb-4 inline-flex rounded-full bg-cyan-50 px-3 py-1 text-xs font-black uppercase tracking-wider text-cyan-600">
                    Most Popular
                </div>

                <h3 class="text-xl font-black text-slate-950">
                    Exterior Car Detailing
                </h3>

                <p class="mt-4 text-sm leading-7 text-slate-600">
                    Your vehicle’s exterior is the first thing people notice. Our exterior detailing services restore shine and protect paint.
                </p>

                <ul class="mt-5 space-y-3">
                    <li class="flex gap-3 text-sm font-bold text-slate-700">
                        <i class="fa-solid fa-circle-check mt-1 text-cyan-500"></i>
                        Hand wash, polish, and waxing
                    </li>
                    <li class="flex gap-3 text-sm font-bold text-slate-700">
                        <i class="fa-solid fa-circle-check mt-1 text-cyan-500"></i>
                        Bug and tar removal
                    </li>
                    <li class="flex gap-3 text-sm font-bold text-slate-700">
                        <i class="fa-solid fa-circle-check mt-1 text-cyan-500"></i>
                        Tire and rim cleaning
                    </li>
                    <li class="flex gap-3 text-sm font-bold text-slate-700">
                        <i class="fa-solid fa-circle-check mt-1 text-cyan-500"></i>
                        Long-lasting protective coating
                    </li>
                </ul>

                <a href="#appointment"
                   class="mt-7 inline-flex items-center gap-2 text-sm font-black text-cyan-600 transition hover:text-slate-950">
                    Book Exterior Service
                    <span class="transition-transform duration-300 group-hover:translate-x-1">→</span>
                </a>
            </div>

            <!-- Card 3 -->
            <div class="group rounded-[1.7rem] border border-cyan-100 bg-white p-7 shadow-lg transition-all duration-300 hover:-translate-y-3 hover:shadow-2xl">

                <div class="mb-6 flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-cyan-100 to-sky-100 text-cyan-600 transition-all duration-300 group-hover:rotate-3 group-hover:scale-110 group-hover:from-cyan-500 group-hover:to-sky-500 group-hover:text-white">
                    <i class="fa-solid fa-car-on text-2xl"></i>
                </div>

                <h3 class="text-xl font-black text-slate-950">
                    Complete Car Detailing
                </h3>

                <p class="mt-4 text-sm leading-7 text-slate-600">
                    For the ultimate care, our full detailing packages combine interior and exterior services for a complete makeover.
                </p>

                <ul class="mt-5 space-y-3">
                    <li class="flex gap-3 text-sm font-bold text-slate-700">
                        <i class="fa-solid fa-circle-check mt-1 text-cyan-500"></i>
                        Interior deep cleaning and sanitization
                    </li>
                    <li class="flex gap-3 text-sm font-bold text-slate-700">
                        <i class="fa-solid fa-circle-check mt-1 text-cyan-500"></i>
                        Exterior wash, polish, and wax
                    </li>
                    <li class="flex gap-3 text-sm font-bold text-slate-700">
                        <i class="fa-solid fa-circle-check mt-1 text-cyan-500"></i>
                        Headlight restoration
                    </li>
                    <li class="flex gap-3 text-sm font-bold text-slate-700">
                        <i class="fa-solid fa-circle-check mt-1 text-cyan-500"></i>
                        Engine bay cleaning
                    </li>
                    <li class="flex gap-3 text-sm font-bold text-slate-700">
                        <i class="fa-solid fa-circle-check mt-1 text-cyan-500"></i>
                        Optional protective coatings
                    </li>
                </ul>

                <a href="#appointment"
                   class="mt-7 inline-flex items-center gap-2 text-sm font-black text-cyan-600 transition hover:text-slate-950">
                    Book Complete Service
                    <span class="transition-transform duration-300 group-hover:translate-x-1">→</span>
                </a>
            </div>

        </div>

        <!-- Bottom CTA -->
        <div class="mt-14 rounded-[2rem] bg-gradient-to-r from-cyan-500 to-sky-600 p-8 shadow-2xl shadow-cyan-500/20 sm:p-10">
            <div class="flex flex-col items-center justify-between gap-6 text-center lg:flex-row lg:text-left">

                <div>
                    <h3 class="text-2xl font-black text-white">
                        Ready to make your car look brand new?
                    </h3>
                    <p class="mt-2 text-sm font-semibold text-cyan-50">
                        Book your mobile detailing appointment today. We come to your location.
                    </p>
                </div>

                <div class="flex flex-col gap-3 sm:flex-row">
                    <a href="tel:4692999750"
                       class="inline-flex items-center justify-center gap-3 rounded-full bg-white px-7 py-3.5 text-sm font-black text-cyan-700 shadow-lg transition-all duration-300 hover:-translate-y-1 hover:bg-slate-950 hover:text-white">
                        <i class="fa-solid fa-phone-volume"></i>
                        Call: (469) 299-9750
                    </a>

                    <a href="#appointment"
                       class="inline-flex items-center justify-center gap-3 rounded-full border border-white/40 bg-white/15 px-7 py-3.5 text-sm font-black text-white backdrop-blur-md transition-all duration-300 hover:-translate-y-1 hover:bg-white hover:text-cyan-700">
                        Book Appointment
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>

<section class="relative overflow-hidden bg-[#07111f] py-20 sm:py-24">

    <!-- Background Glow -->
    <div class="absolute left-[-120px] top-20 h-80 w-80 rounded-full bg-cyan-400/20 blur-3xl"></div>
    <div class="absolute right-[-120px] bottom-20 h-80 w-80 rounded-full bg-sky-500/20 blur-3xl"></div>

    <!-- Dot Pattern -->
    <div class="absolute inset-0 opacity-[0.08]"
         style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 26px 26px;">
    </div>

    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <!-- Heading -->
        <div class="pricing-fade-up mx-auto max-w-3xl text-center">

            <span class="inline-flex items-center gap-2 rounded-full border border-cyan-300/25 bg-white/10 px-4 py-2 text-xs font-black uppercase tracking-[0.18em] text-cyan-300 backdrop-blur-md">
                <span class="h-2 w-2 rounded-full bg-cyan-300"></span>
                Detailing Packages
            </span>

            <h2 class="mt-5 text-3xl font-black tracking-tight text-white sm:text-4xl lg:text-5xl">
                Choose Your
                <span class="bg-gradient-to-r from-cyan-300 to-sky-400 bg-clip-text text-transparent">
                    Detailing Service
                </span>
            </h2>

            <p class="mx-auto mt-5 max-w-2xl text-base leading-8 text-slate-300">
                Select from flexible car detailing packages, vehicle-specific pricing,
                or monthly subscription plans designed for regular car care.
            </p>
        </div>

        <!-- Tabs -->
        <div class="pricing-fade-up mt-10 flex flex-wrap items-center justify-center gap-3">

            <button type="button"
                    class="pricing-tab-btn active rounded-full border border-cyan-400/30 bg-white/10 px-7 py-3 text-sm font-black text-white backdrop-blur-md transition-all duration-300 hover:border-cyan-300 hover:bg-cyan-500/20"
                    data-pricing-tab="packages">
                Packages
            </button>

            <button type="button"
                    class="pricing-tab-btn rounded-full border border-cyan-400/30 bg-white/10 px-7 py-3 text-sm font-black text-white backdrop-blur-md transition-all duration-300 hover:border-cyan-300 hover:bg-cyan-500/20"
                    data-pricing-tab="vehicles">
                Vehicles
            </button>

            <button type="button"
                    class="pricing-tab-btn rounded-full border border-cyan-400/30 bg-white/10 px-7 py-3 text-sm font-black text-white backdrop-blur-md transition-all duration-300 hover:border-cyan-300 hover:bg-cyan-500/20"
                    data-pricing-tab="subscriptions">
                Subscriptions
            </button>

        </div>

        <!-- Packages Content -->
        <div class="pricing-tab-content active mt-14 grid-cols-1 gap-7 md:grid-cols-3" data-pricing-content="packages">

            <!-- Bronze -->
            <div class="group rounded-[1.7rem] border border-cyan-400/15 bg-white/[0.06] p-7 shadow-xl backdrop-blur-md transition-all duration-300 hover:-translate-y-3 hover:border-cyan-400/45 hover:bg-white/[0.09]">

                <div class="flex items-start justify-between gap-4">
                    <div>
                        <h3 class="text-2xl font-black text-white">Bronze</h3>
                        <p class="mt-2 text-sm font-semibold text-slate-400">
                            Perfect for regular maintenance
                        </p>
                    </div>

                    <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-cyan-400/10 text-cyan-300 transition-all duration-300 group-hover:bg-cyan-500 group-hover:text-white">
                        <i class="fa-solid fa-droplet text-xl"></i>
                    </span>
                </div>

                <div class="mt-7 flex items-end gap-2">
                    <span class="text-5xl font-black text-cyan-300">$99</span>
                    <span class="pb-2 text-sm font-bold text-slate-400">per vehicle</span>
                </div>

                <a href="#appointment"
                   class="mt-8 inline-flex w-full items-center justify-center rounded-2xl border border-cyan-400 px-6 py-3.5 text-sm font-black text-cyan-300 transition-all duration-300 hover:-translate-y-1 hover:bg-cyan-500 hover:text-white">
                    Book Now
                </a>

                <ul class="mt-8 space-y-4">
                    <li class="flex gap-3 text-sm font-semibold text-slate-200">
                        <i class="fa-solid fa-check mt-1 text-cyan-300"></i>
                        Exterior hand wash
                    </li>
                    <li class="flex gap-3 text-sm font-semibold text-slate-200">
                        <i class="fa-solid fa-check mt-1 text-cyan-300"></i>
                        Tire and rim cleaning
                    </li>
                    <li class="flex gap-3 text-sm font-semibold text-slate-200">
                        <i class="fa-solid fa-check mt-1 text-cyan-300"></i>
                        Glass cleaning
                    </li>
                    <li class="flex gap-3 text-sm font-semibold text-slate-200">
                        <i class="fa-solid fa-check mt-1 text-cyan-300"></i>
                        Quick interior vacuum
                    </li>
                </ul>
            </div>

            <!-- Silver -->
            <div class="pricing-glow relative rounded-[1.7rem] border border-cyan-400 bg-white/[0.08] p-7 shadow-2xl backdrop-blur-md transition-all duration-300 hover:-translate-y-3 md:-translate-y-5">

                <div class="absolute -top-4 left-1/2 -translate-x-1/2 rounded-full bg-gradient-to-r from-cyan-400 to-sky-500 px-5 py-2 text-xs font-black uppercase tracking-wide text-white shadow-xl shadow-cyan-500/30">
                    Most Popular
                </div>

                <div class="flex items-start justify-between gap-4">
                    <div>
                        <h3 class="text-2xl font-black text-white">Silver</h3>
                        <p class="mt-2 text-sm font-semibold text-slate-300">
                            Our most popular choice
                        </p>
                    </div>

                    <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-cyan-400 to-sky-500 text-white shadow-lg shadow-cyan-500/30">
                        <i class="fa-solid fa-star text-xl"></i>
                    </span>
                </div>

                <div class="mt-7 flex items-end gap-2">
                    <span class="text-5xl font-black text-white">$199</span>
                    <span class="pb-2 text-sm font-bold text-slate-300">per vehicle</span>
                </div>

                <a href="#appointment"
                   class="mt-8 inline-flex w-full items-center justify-center rounded-2xl bg-gradient-to-r from-cyan-400 to-sky-500 px-6 py-3.5 text-sm font-black text-white shadow-xl shadow-cyan-500/30 transition-all duration-300 hover:-translate-y-1 hover:from-cyan-300 hover:to-sky-400">
                    Book Now
                </a>

                <ul class="mt-8 space-y-4">
                    <li class="flex gap-3 text-sm font-semibold text-white">
                        <i class="fa-solid fa-check mt-1 text-cyan-300"></i>
                        Everything in Bronze
                    </li>
                    <li class="flex gap-3 text-sm font-semibold text-white">
                        <i class="fa-solid fa-check mt-1 text-cyan-300"></i>
                        Interior detailing
                    </li>
                    <li class="flex gap-3 text-sm font-semibold text-white">
                        <i class="fa-solid fa-check mt-1 text-cyan-300"></i>
                        Dashboard treatment
                    </li>
                    <li class="flex gap-3 text-sm font-semibold text-white">
                        <i class="fa-solid fa-check mt-1 text-cyan-300"></i>
                        Trim restoration
                    </li>
                    <li class="flex gap-3 text-sm font-semibold text-white">
                        <i class="fa-solid fa-check mt-1 text-cyan-300"></i>
                        Air freshener
                    </li>
                </ul>
            </div>

            <!-- Gold -->
            <div class="group rounded-[1.7rem] border border-cyan-400/15 bg-white/[0.06] p-7 shadow-xl backdrop-blur-md transition-all duration-300 hover:-translate-y-3 hover:border-cyan-400/45 hover:bg-white/[0.09]">

                <div class="flex items-start justify-between gap-4">
                    <div>
                        <h3 class="text-2xl font-black text-white">Gold</h3>
                        <p class="mt-2 text-sm font-semibold text-slate-400">
                            Complete transformation
                        </p>
                    </div>

                    <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-cyan-400/10 text-cyan-300 transition-all duration-300 group-hover:bg-cyan-500 group-hover:text-white">
                        <i class="fa-solid fa-crown text-xl"></i>
                    </span>
                </div>

                <div class="mt-7 flex items-end gap-2">
                    <span class="text-5xl font-black text-cyan-300">$349</span>
                    <span class="pb-2 text-sm font-bold text-slate-400">per vehicle</span>
                </div>

                <a href="#appointment"
                   class="mt-8 inline-flex w-full items-center justify-center rounded-2xl border border-cyan-400 px-6 py-3.5 text-sm font-black text-cyan-300 transition-all duration-300 hover:-translate-y-1 hover:bg-cyan-500 hover:text-white">
                    Book Now
                </a>

                <ul class="mt-8 space-y-4">
                    <li class="flex gap-3 text-sm font-semibold text-slate-200">
                        <i class="fa-solid fa-check mt-1 text-cyan-300"></i>
                        Everything in Silver
                    </li>
                    <li class="flex gap-3 text-sm font-semibold text-slate-200">
                        <i class="fa-solid fa-check mt-1 text-cyan-300"></i>
                        Paint correction
                    </li>
                    <li class="flex gap-3 text-sm font-semibold text-slate-200">
                        <i class="fa-solid fa-check mt-1 text-cyan-300"></i>
                        Ceramic coating application
                    </li>
                    <li class="flex gap-3 text-sm font-semibold text-slate-200">
                        <i class="fa-solid fa-check mt-1 text-cyan-300"></i>
                        Headlight restoration
                    </li>
                    <li class="flex gap-3 text-sm font-semibold text-slate-200">
                        <i class="fa-solid fa-check mt-1 text-cyan-300"></i>
                        Engine bay detail
                    </li>
                    <li class="flex gap-3 text-sm font-semibold text-slate-200">
                        <i class="fa-solid fa-check mt-1 text-cyan-300"></i>
                        Premium leather treatment
                    </li>
                </ul>
            </div>

        </div>

        <!-- Vehicles Content -->
        <div class="pricing-tab-content mt-14 grid-cols-1 gap-7 md:grid-cols-3" data-pricing-content="vehicles">

            <div class="rounded-[1.7rem] border border-cyan-400/15 bg-white/[0.06] p-7 shadow-xl backdrop-blur-md">
                <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-cyan-400/10 text-cyan-300">
                    <i class="fa-solid fa-car-side text-2xl"></i>
                </span>
                <h3 class="mt-6 text-2xl font-black text-white">Sedan</h3>
                <p class="mt-2 text-sm font-semibold text-slate-400">Compact and standard cars</p>
                <div class="mt-7 text-5xl font-black text-cyan-300">$99+</div>
                <a href="#appointment" class="mt-8 inline-flex w-full items-center justify-center rounded-2xl border border-cyan-400 px-6 py-3.5 text-sm font-black text-cyan-300 hover:bg-cyan-500 hover:text-white">
                    Book Sedan
                </a>
            </div>

            <div class="rounded-[1.7rem] border border-cyan-400 bg-white/[0.08] p-7 shadow-2xl backdrop-blur-md md:-translate-y-5">
                <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-cyan-400 to-sky-500 text-white">
                    <i class="fa-solid fa-truck-monster text-2xl"></i>
                </span>
                <h3 class="mt-6 text-2xl font-black text-white">SUV / Truck</h3>
                <p class="mt-2 text-sm font-semibold text-slate-300">Larger vehicles and family SUVs</p>
                <div class="mt-7 text-5xl font-black text-white">$149+</div>
                <a href="#appointment" class="mt-8 inline-flex w-full items-center justify-center rounded-2xl bg-gradient-to-r from-cyan-400 to-sky-500 px-6 py-3.5 text-sm font-black text-white shadow-xl shadow-cyan-500/30">
                    Book SUV
                </a>
            </div>

            <div class="rounded-[1.7rem] border border-cyan-400/15 bg-white/[0.06] p-7 shadow-xl backdrop-blur-md">
                <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-cyan-400/10 text-cyan-300">
                    <i class="fa-solid fa-van-shuttle text-2xl"></i>
                </span>
                <h3 class="mt-6 text-2xl font-black text-white">Van / RV</h3>
                <p class="mt-2 text-sm font-semibold text-slate-400">Large vans, RVs, and fleet vehicles</p>
                <div class="mt-7 text-5xl font-black text-cyan-300">$249+</div>
                <a href="#appointment" class="mt-8 inline-flex w-full items-center justify-center rounded-2xl border border-cyan-400 px-6 py-3.5 text-sm font-black text-cyan-300 hover:bg-cyan-500 hover:text-white">
                    Book Large Vehicle
                </a>
            </div>

        </div>

        <!-- Subscriptions Content -->
        <div class="pricing-tab-content mt-14 grid-cols-1 gap-7 md:grid-cols-3" data-pricing-content="subscriptions">

            <div class="rounded-[1.7rem] border border-cyan-400/15 bg-white/[0.06] p-7 shadow-xl backdrop-blur-md">
                <h3 class="text-2xl font-black text-white">Monthly Care</h3>
                <p class="mt-2 text-sm font-semibold text-slate-400">Best for personal vehicles</p>
                <div class="mt-7 text-5xl font-black text-cyan-300">$89</div>
                <p class="mt-1 text-sm font-bold text-slate-400">per month</p>
                <a href="#appointment" class="mt-8 inline-flex w-full items-center justify-center rounded-2xl border border-cyan-400 px-6 py-3.5 text-sm font-black text-cyan-300 hover:bg-cyan-500 hover:text-white">
                    Subscribe
                </a>
            </div>

            <div class="pricing-glow rounded-[1.7rem] border border-cyan-400 bg-white/[0.08] p-7 shadow-2xl backdrop-blur-md md:-translate-y-5">
                <h3 class="text-2xl font-black text-white">Premium Monthly</h3>
                <p class="mt-2 text-sm font-semibold text-slate-300">Most popular monthly plan</p>
                <div class="mt-7 text-5xl font-black text-white">$159</div>
                <p class="mt-1 text-sm font-bold text-slate-300">per month</p>
                <a href="#appointment" class="mt-8 inline-flex w-full items-center justify-center rounded-2xl bg-gradient-to-r from-cyan-400 to-sky-500 px-6 py-3.5 text-sm font-black text-white shadow-xl shadow-cyan-500/30">
                    Subscribe
                </a>
            </div>

            <div class="rounded-[1.7rem] border border-cyan-400/15 bg-white/[0.06] p-7 shadow-xl backdrop-blur-md">
                <h3 class="text-2xl font-black text-white">Fleet Plan</h3>
                <p class="mt-2 text-sm font-semibold text-slate-400">For business and fleet owners</p>
                <div class="mt-7 text-5xl font-black text-cyan-300">Custom</div>
                <p class="mt-1 text-sm font-bold text-slate-400">quote based</p>
                <a href="#appointment" class="mt-8 inline-flex w-full items-center justify-center rounded-2xl border border-cyan-400 px-6 py-3.5 text-sm font-black text-cyan-300 hover:bg-cyan-500 hover:text-white">
                    Get Quote
                </a>
            </div>

        </div>

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabButtons = document.querySelectorAll('[data-pricing-tab]');
        const tabContents = document.querySelectorAll('[data-pricing-content]');

        tabButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                const target = button.getAttribute('data-pricing-tab');

                tabButtons.forEach(function (btn) {
                    btn.classList.remove('active');
                });

                tabContents.forEach(function (content) {
                    content.classList.remove('active');
                });

                button.classList.add('active');

                const activeContent = document.querySelector('[data-pricing-content="' + target + '"]');
                if (activeContent) {
                    activeContent.classList.add('active');
                }
            });
        });
    });
</script>

<section id="appointment" class="relative overflow-hidden bg-white py-20 sm:py-24">

    <!-- Background Decorative Glow -->
    <div class="absolute left-[-100px] top-20 h-80 w-80 rounded-full bg-cyan-100/80 blur-3xl"></div>
    <div class="absolute right-[-100px] bottom-20 h-80 w-80 rounded-full bg-sky-100/80 blur-3xl"></div>

    <!-- Light Dot Pattern -->
    <div class="absolute inset-0 opacity-[0.35]"
         style="background-image: radial-gradient(#67e8f9 1px, transparent 1px); background-size: 30px 30px;">
    </div>

    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2">

            <!-- Left Content -->
            <div class="contact-fade-up">

                <span class="inline-flex items-center gap-2 rounded-full bg-cyan-50 px-4 py-2 text-xs font-black uppercase tracking-[0.18em] text-cyan-600">
                    <span class="h-2 w-2 rounded-full bg-cyan-500"></span>
                    Get In Touch
                </span>

                <h2 class="mt-5 max-w-xl text-3xl font-black leading-tight tracking-tight text-slate-950 sm:text-4xl lg:text-5xl">
                    Ready to Experience
                    <span class="bg-gradient-to-r from-cyan-500 to-sky-500 bg-clip-text text-transparent">
                        Premium Car Detailing?
                    </span>
                </h2>

                <p class="mt-6 max-w-2xl text-base leading-8 text-slate-600">
                    Fill in your details and our team will confirm your appointment shortly.
                    We provide professional mobile car detailing at your home, office, or workplace.
                </p>

                <!-- Contact Info -->
                <div class="mt-9 space-y-4">

                    <a href="tel:4692999750"
                       class="group flex items-center gap-4 rounded-2xl border border-cyan-100 bg-white p-5 shadow-lg transition-all duration-300 hover:-translate-y-1 hover:border-cyan-300 hover:shadow-xl">
                        <span class="flex h-13 w-13 items-center justify-center rounded-2xl bg-cyan-50 text-cyan-600 transition-all duration-300 group-hover:bg-cyan-500 group-hover:text-white">
                            <i class="fa-solid fa-phone-volume text-lg"></i>
                        </span>

                        <span>
                            <small class="block text-xs font-black uppercase tracking-[0.18em] text-slate-400">
                                Phone
                            </small>
                            <strong class="mt-1 block text-base font-black text-slate-950">
                                (469) 299-9750
                            </strong>
                        </span>
                    </a>

                    <a href="mailto:info@rightcardetailingusa.com"
                       class="group flex items-center gap-4 rounded-2xl border border-cyan-100 bg-white p-5 shadow-lg transition-all duration-300 hover:-translate-y-1 hover:border-cyan-300 hover:shadow-xl">
                        <span class="flex h-13 w-13 items-center justify-center rounded-2xl bg-cyan-50 text-cyan-600 transition-all duration-300 group-hover:bg-cyan-500 group-hover:text-white">
                            <i class="fa-regular fa-envelope text-lg"></i>
                        </span>

                        <span>
                            <small class="block text-xs font-black uppercase tracking-[0.18em] text-slate-400">
                                Email
                            </small>
                            <strong class="mt-1 block text-base font-black text-slate-950">
                                info@rightcardetailingusa.com
                            </strong>
                        </span>
                    </a>

                    <div class="group flex items-center gap-4 rounded-2xl border border-cyan-100 bg-white p-5 shadow-lg transition-all duration-300 hover:-translate-y-1 hover:border-cyan-300 hover:shadow-xl">
                        <span class="flex h-13 w-13 items-center justify-center rounded-2xl bg-cyan-50 text-cyan-600 transition-all duration-300 group-hover:bg-cyan-500 group-hover:text-white">
                            <i class="fa-regular fa-clock text-lg"></i>
                        </span>

                        <span>
                            <small class="block text-xs font-black uppercase tracking-[0.18em] text-slate-400">
                                Hours
                            </small>
                            <strong class="mt-1 block text-base font-black text-slate-950">
                                Open Daily: 8:00 AM - 8:00 PM
                            </strong>
                        </span>
                    </div>

                </div>
            </div>

            <!-- Right Form -->
            <div class="contact-fade-up contact-float">

                <div class="relative rounded-[2rem] border border-cyan-100 bg-white p-6 shadow-2xl shadow-cyan-500/10 sm:p-8">

                    <!-- Small Floating Badge -->
                    <div class="absolute -top-5 left-8 rounded-full bg-gradient-to-r from-cyan-500 to-sky-500 px-5 py-2 text-xs font-black uppercase tracking-wider text-white shadow-lg shadow-cyan-500/30">
                        Book Now
                    </div>

                    <h3 class="mt-3 text-2xl font-black text-slate-950">
                        Request an Appointment
                    </h3>

                    <p class="mt-2 text-sm leading-7 text-slate-500">
                        Tell us what your vehicle needs and we will contact you shortly.
                    </p>

                    <form class="mt-7 space-y-5" action="#" method="post">

                        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">

                            <div>
                                <label class="mb-2 block text-xs font-black uppercase tracking-[0.16em] text-slate-500">
                                    Full Name
                                </label>
                                <input type="text"
                                       name="name"
                                       placeholder="John Smith"
                                       class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4 text-sm font-semibold text-slate-900 outline-none transition-all duration-300 placeholder:text-slate-400 focus:border-cyan-400 focus:bg-white focus:ring-4 focus:ring-cyan-100">
                            </div>

                            <div>
                                <label class="mb-2 block text-xs font-black uppercase tracking-[0.16em] text-slate-500">
                                    Phone
                                </label>
                                <input type="tel"
                                       name="phone"
                                       placeholder="(555) 000-0000"
                                       class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4 text-sm font-semibold text-slate-900 outline-none transition-all duration-300 placeholder:text-slate-400 focus:border-cyan-400 focus:bg-white focus:ring-4 focus:ring-cyan-100">
                            </div>

                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-black uppercase tracking-[0.16em] text-slate-500">
                                Email Address
                            </label>
                            <input type="email"
                                   name="email"
                                   placeholder="you@email.com"
                                   class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4 text-sm font-semibold text-slate-900 outline-none transition-all duration-300 placeholder:text-slate-400 focus:border-cyan-400 focus:bg-white focus:ring-4 focus:ring-cyan-100">
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-black uppercase tracking-[0.16em] text-slate-500">
                                Service Interest
                            </label>
                            <select name="service"
                                    class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4 text-sm font-semibold text-slate-900 outline-none transition-all duration-300 focus:border-cyan-400 focus:bg-white focus:ring-4 focus:ring-cyan-100">
                                <option value="">Select a package...</option>
                                <option value="Interior Detailing">Interior Detailing</option>
                                <option value="Exterior Detailing">Exterior Detailing</option>
                                <option value="Complete Detailing">Complete Detailing</option>
                                <option value="Ceramic Coating">Ceramic Coating</option>
                                <option value="Fleet Detailing">Fleet Detailing</option>
                            </select>
                        </div>

                        <div>
                            <label class="mb-2 block text-xs font-black uppercase tracking-[0.16em] text-slate-500">
                                Additional Notes
                            </label>
                            <textarea name="message"
                                      rows="5"
                                      placeholder="Vehicle make, model, condition, or any special requests..."
                                      class="w-full resize-none rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4 text-sm font-semibold text-slate-900 outline-none transition-all duration-300 placeholder:text-slate-400 focus:border-cyan-400 focus:bg-white focus:ring-4 focus:ring-cyan-100"></textarea>
                        </div>

                        <button type="submit"
                                class="group inline-flex w-full items-center justify-center gap-3 rounded-2xl bg-gradient-to-r from-cyan-500 to-sky-500 px-7 py-4 text-sm font-black uppercase tracking-[0.14em] text-white shadow-xl shadow-cyan-500/25 transition-all duration-300 hover:-translate-y-1 hover:from-cyan-400 hover:to-sky-400 hover:shadow-cyan-500/40">
                            Send Inquiry
                            <i class="fa-solid fa-paper-plane text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
