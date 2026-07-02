<?php
/**
 * Custom marketing page renderer.
 */

if (!defined('ABSPATH')) {
    exit;
}

$page = washngo_current_custom_page();

if (!$page) {
    get_header();
    ?>
    <section class="mx-auto max-w-4xl px-4 py-24 text-center sm:px-6 lg:px-8">
        <h1 class="text-4xl font-black text-slate-950"><?php esc_html_e('Page not found', 'wash-n-go'); ?></h1>
    </section>
    <?php
    get_footer();
    return;
}

function washngo_page_image_url()
{
    return get_template_directory_uri() . '/assets/images/right-car-detailing.webp';
}

function washngo_contact_image_url()
{
    return get_template_directory_uri() . '/assets/images/contact.png';
}

function washngo_icon_html($icon, $classes = '')
{
    printf('<i class="%s %s" aria-hidden="true"></i>', esc_attr($icon), esc_attr($classes));
}

function washngo_page_button($href, $label, $icon, $style = 'primary')
{
    $classes = 'inline-flex items-center justify-center gap-3 rounded-full px-7 py-4 text-sm font-black transition-all duration-300 hover:-translate-y-1';

    if ('secondary' === $style) {
        $classes .= ' border border-cyan-200 bg-white text-slate-950 shadow-sm hover:border-cyan-400 hover:text-cyan-600';
    } else {
        $classes .= ' bg-gradient-to-r from-cyan-500 to-sky-500 text-white shadow-xl shadow-cyan-500/25 hover:from-cyan-400 hover:to-sky-400 hover:shadow-cyan-500/40';
    }
    ?>
    <a href="<?php echo esc_url($href); ?>" class="<?php echo esc_attr($classes); ?>">
        <?php echo esc_html($label); ?>
        <?php washngo_icon_html($icon, 'text-xs'); ?>
    </a>
    <?php
}

function washngo_render_page_hero($page)
{
    $hero_image = washngo_page_image_url();
    $stats = array(
        array('value' => '100%', 'label' => 'Mobile service'),
        array('value' => '10', 'label' => 'Service areas'),
        array('value' => '5+', 'label' => 'Detail options'),
    );
    ?>
    <section class="wng-page-hero relative overflow-hidden bg-[#07111f] text-white">
        <div class="absolute inset-0 bg-cover bg-center opacity-30" style="background-image: url('<?php echo esc_url($hero_image); ?>');"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#020617] via-[#07111f]/92 to-[#07111f]/70"></div>
        <div class="absolute inset-0 opacity-[0.08]" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 25px 25px;"></div>
        <div class="absolute -left-24 top-24 h-72 w-72 rounded-full bg-cyan-400/20 blur-3xl"></div>
        <div class="absolute -right-24 bottom-20 h-80 w-80 rounded-full bg-sky-500/20 blur-3xl"></div>

        <div class="relative z-10 mx-auto grid min-h-[560px] max-w-7xl grid-cols-1 items-center gap-12 px-4 py-20 sm:px-6 lg:grid-cols-[1.05fr_0.95fr] lg:px-8">
            <div class="hero-fade-up">
                <span class="inline-flex items-center gap-2 rounded-full border border-cyan-300/25 bg-white/10 px-4 py-2 text-xs font-black uppercase tracking-[0.18em] text-cyan-200 backdrop-blur-md">
                    <span class="h-2 w-2 rounded-full bg-cyan-300"></span>
                    <?php echo esc_html($page['eyebrow'] ?? 'Wash N Go'); ?>
                </span>

                <h1 class="mt-6 max-w-4xl text-4xl font-black leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">
                    <?php echo esc_html($page['title']); ?>
                </h1>

                <p class="mt-6 max-w-2xl text-base leading-8 text-slate-200 sm:text-lg">
                    <?php echo esc_html($page['lead']); ?>
                </p>

                <div class="mt-9 flex flex-col gap-4 sm:flex-row">
                    <?php washngo_page_button(home_url('/book-now/'), 'Book Appointment', 'fa-solid fa-arrow-right'); ?>
                    <?php washngo_page_button(home_url('/contact/'), 'Contact Us', 'fa-regular fa-envelope', 'secondary'); ?>
                </div>

                <div class="mt-10 grid max-w-2xl grid-cols-3 gap-3">
                    <?php foreach ($stats as $stat) : ?>
                        <div class="rounded-2xl border border-white/15 bg-white/10 p-4 text-center backdrop-blur-md">
                            <strong class="block text-2xl font-black text-white"><?php echo esc_html($stat['value']); ?></strong>
                            <span class="mt-1 block text-xs font-bold text-slate-300"><?php echo esc_html($stat['label']); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="hero-fade-up hero-delay-3">
                <div class="hero-float relative ml-auto max-w-lg rounded-[2rem] border border-white/20 bg-white/15 p-4 shadow-2xl backdrop-blur-xl">
                    <img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr($page['title']); ?>" class="h-[360px] w-full rounded-[1.5rem] object-cover">
                    <div class="absolute -bottom-5 left-6 right-6 rounded-2xl border border-cyan-100 bg-white p-5 text-slate-950 shadow-2xl">
                        <div class="flex items-center gap-4">
                            <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-cyan-50 text-cyan-600">
                                <?php washngo_icon_html($page['icon'] ?? 'fa-solid fa-car-side'); ?>
                            </span>
                            <div>
                                <strong class="block text-base font-black"><?php echo esc_html($page['eyebrow'] ?? 'Premium Detailing'); ?></strong>
                                <span class="mt-1 block text-sm font-semibold leading-6 text-slate-500">Professional mobile car care brought directly to your location.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}

function washngo_render_cta_band($heading = 'Ready for a cleaner, shinier car?')
{
    ?>
    <section class="relative overflow-hidden bg-gradient-to-r from-cyan-500 to-sky-600 py-10 text-white">
        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 22px 22px;"></div>
        <div class="relative mx-auto flex max-w-7xl flex-col items-center justify-between gap-5 px-4 text-center sm:px-6 lg:flex-row lg:px-8 lg:text-left">
            <div>
                <h2 class="text-2xl font-black"><?php echo esc_html($heading); ?></h2>
                <p class="mt-2 text-sm font-semibold text-cyan-50">Book a mobile detailing appointment and let our team handle the hard work.</p>
            </div>
            <div class="flex flex-col gap-3 sm:flex-row">
                <a href="<?php echo esc_url(home_url('/book-now/')); ?>" class="inline-flex items-center justify-center gap-3 rounded-full bg-white px-7 py-3.5 text-sm font-black text-cyan-700 shadow-xl transition-all duration-300 hover:-translate-y-1 hover:bg-slate-950 hover:text-white">
                    <i class="fa-regular fa-calendar-check" aria-hidden="true"></i>
                    Book Now
                </a>
                <a href="tel:4692999750" class="inline-flex items-center justify-center gap-3 rounded-full border border-white/40 bg-white/15 px-7 py-3.5 text-sm font-black text-white backdrop-blur-md transition-all duration-300 hover:-translate-y-1 hover:bg-white hover:text-cyan-700">
                    <i class="fa-solid fa-phone-volume" aria-hidden="true"></i>
                    Call (469) 299-9750
                </a>
            </div>
        </div>
    </section>
    <?php
}

function washngo_render_service_card($service)
{
    ?>
    <a href="<?php echo esc_url(home_url($service['path'])); ?>" class="wng-page-card group flex h-full flex-col rounded-[1.5rem] border border-cyan-100 bg-white p-7 shadow-lg transition-all duration-300 hover:-translate-y-2 hover:border-cyan-300 hover:shadow-2xl" data-animate>
        <span class="mb-6 flex h-16 w-16 items-center justify-center rounded-2xl bg-cyan-50 text-2xl text-cyan-600 transition-all duration-300 group-hover:rotate-3 group-hover:scale-110 group-hover:bg-gradient-to-br group-hover:from-cyan-500 group-hover:to-sky-500 group-hover:text-white">
            <?php washngo_icon_html($service['icon']); ?>
        </span>
        <h3 class="text-xl font-black text-slate-950"><?php echo esc_html($service['short_title']); ?></h3>
        <p class="mt-4 flex-1 text-sm leading-7 text-slate-600"><?php echo esc_html($service['lead']); ?></p>
        <span class="mt-7 inline-flex items-center gap-2 text-sm font-black text-cyan-600">
            View Details
            <i class="fa-solid fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true"></i>
        </span>
    </a>
    <?php
}

function washngo_render_about_page()
{
    $values = array(
        array('icon' => 'fa-solid fa-location-dot', 'title' => 'We come to you', 'text' => 'Mobile service at your driveway, office, apartment, or workplace parking area.'),
        array('icon' => 'fa-solid fa-shield-heart', 'title' => 'Safe products', 'text' => 'Paint-safe, interior-safe, and trim-safe products matched to your vehicle condition.'),
        array('icon' => 'fa-solid fa-spray-can-sparkles', 'title' => 'Detailing standards', 'text' => 'Every appointment is handled with a checklist, clean tools, and careful finishing.'),
        array('icon' => 'fa-solid fa-clock', 'title' => 'Easy scheduling', 'text' => 'Flexible booking windows for busy drivers, families, and small business fleets.'),
    );
    ?>
    <section class="relative overflow-hidden bg-white py-20 sm:py-24">
        <div class="absolute left-0 top-20 h-72 w-72 rounded-full bg-cyan-100/70 blur-3xl"></div>
        <div class="absolute right-0 bottom-10 h-72 w-72 rounded-full bg-sky-100/70 blur-3xl"></div>
        <div class="relative z-10 mx-auto grid max-w-7xl grid-cols-1 items-center gap-12 px-4 sm:px-6 lg:grid-cols-2 lg:px-8">
            <div data-animate>
                <span class="inline-flex items-center gap-2 rounded-full bg-cyan-50 px-4 py-2 text-xs font-black uppercase tracking-[0.18em] text-cyan-600">
                    <span class="h-2 w-2 rounded-full bg-cyan-500"></span>
                    Who We Are
                </span>
                <h2 class="mt-5 text-3xl font-black leading-tight tracking-tight text-slate-950 sm:text-4xl lg:text-5xl">
                    Premium mobile detailing with a practical, customer-first approach.
                </h2>
                <p class="mt-6 text-base leading-8 text-slate-600">
                    Wash N Go was built for drivers who care about a clean vehicle but do not want to lose time waiting in line. Our mobile setup brings professional tools, premium products, and reliable detailing steps to the place your vehicle already is.
                </p>
                <p class="mt-4 text-base leading-8 text-slate-600">
                    From compact sedans and family SUVs to work trucks, fleets, RVs, motorcycles, and boats, we focus on clean interiors, glossy exteriors, protected finishes, and a smooth booking experience.
                </p>
                <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                    <?php washngo_page_button(home_url('/services/'), 'Explore Services', 'fa-solid fa-arrow-right'); ?>
                    <?php washngo_page_button(home_url('/locations/'), 'View Locations', 'fa-solid fa-location-dot', 'secondary'); ?>
                </div>
            </div>
            <div class="relative" data-animate>
                <div class="soft-glow overflow-hidden rounded-[2rem] border border-cyan-100 bg-white p-3 shadow-2xl">
                    <img src="<?php echo esc_url(washngo_page_image_url()); ?>" alt="Mobile detailing team" class="h-[430px] w-full rounded-[1.5rem] object-cover">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-slate-50 py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center" data-animate>
                <span class="inline-flex items-center gap-2 rounded-full bg-white px-4 py-2 text-xs font-black uppercase tracking-[0.18em] text-cyan-600 shadow-sm">
                    Why Choose Us
                </span>
                <h2 class="mt-5 text-3xl font-black text-slate-950 sm:text-4xl">Built for clean results and convenient service.</h2>
            </div>
            <div class="mt-12 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <?php foreach ($values as $value) : ?>
                    <div class="rounded-[1.5rem] border border-cyan-100 bg-white p-6 shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl" data-animate>
                        <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-cyan-50 text-xl text-cyan-600">
                            <?php washngo_icon_html($value['icon']); ?>
                        </span>
                        <h3 class="mt-5 text-lg font-black text-slate-950"><?php echo esc_html($value['title']); ?></h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600"><?php echo esc_html($value['text']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
}

function washngo_render_services_index()
{
    $services = washngo_core_services();
    ?>
    <section class="relative overflow-hidden bg-slate-50 py-20 sm:py-24">
        <div class="absolute inset-0 opacity-[0.32]" style="background-image: radial-gradient(#67e8f9 1px, transparent 1px); background-size: 28px 28px;"></div>
        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-4xl text-center" data-animate>
                <span class="inline-flex items-center gap-2 rounded-full bg-white px-4 py-2 text-xs font-black uppercase tracking-[0.18em] text-cyan-600 shadow-sm">
                    Header Services
                </span>
                <h2 class="mt-5 text-3xl font-black text-slate-950 sm:text-4xl lg:text-5xl">Choose the detailing service that fits your vehicle.</h2>
                <p class="mx-auto mt-5 max-w-3xl text-base leading-8 text-slate-600">Each page includes what is included, who it is best for, and how the appointment works.</p>
            </div>
            <div class="mt-14 grid grid-cols-1 gap-7 sm:grid-cols-2 lg:grid-cols-3">
                <?php foreach ($services as $service) : ?>
                    <?php washngo_render_service_card($service); ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
}

function washngo_render_addons_index()
{
    $addons = washngo_addon_services();
    ?>
    <section class="bg-white py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-4xl text-center" data-animate>
                <span class="inline-flex items-center gap-2 rounded-full bg-cyan-50 px-4 py-2 text-xs font-black uppercase tracking-[0.18em] text-cyan-600">
                    Add-Ons
                </span>
                <h2 class="mt-5 text-3xl font-black text-slate-950 sm:text-4xl lg:text-5xl">Upgrade your detail with a more protected finish.</h2>
                <p class="mx-auto mt-5 max-w-3xl text-base leading-8 text-slate-600">Add-ons are perfect when your vehicle needs more than a maintenance wash, from correction and coating to headlights, tint services, and engine bay care.</p>
            </div>
            <div class="mt-14 grid grid-cols-1 gap-7 sm:grid-cols-2 lg:grid-cols-4">
                <?php foreach ($addons as $addon) : ?>
                    <?php washngo_render_service_card($addon); ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
}

function washngo_render_detail_page($page)
{
    $related = 'addon-detail' === $page['type'] ? washngo_addon_services() : washngo_core_services();
    ?>
    <section class="bg-white py-20 sm:py-24">
        <div class="mx-auto grid max-w-7xl grid-cols-1 gap-12 px-4 sm:px-6 lg:grid-cols-[0.95fr_1.05fr] lg:px-8">
            <div data-animate>
                <span class="inline-flex items-center gap-2 rounded-full bg-cyan-50 px-4 py-2 text-xs font-black uppercase tracking-[0.18em] text-cyan-600">
                    <?php echo esc_html($page['accent'] ?? 'Premium Service'); ?>
                </span>
                <h2 class="mt-5 text-3xl font-black leading-tight text-slate-950 sm:text-4xl">What this service includes</h2>
                <p class="mt-5 text-base leading-8 text-slate-600"><?php echo esc_html($page['lead']); ?></p>
                <div class="mt-8 grid grid-cols-1 gap-3 sm:grid-cols-2">
                    <?php foreach ($page['highlights'] as $highlight) : ?>
                        <div class="flex items-center gap-3 rounded-2xl border border-cyan-100 bg-cyan-50/70 p-4">
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white text-cyan-600 shadow-sm">
                                <i class="fa-solid fa-check" aria-hidden="true"></i>
                            </span>
                            <span class="text-sm font-black text-slate-800"><?php echo esc_html($highlight); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2" data-animate>
                <?php foreach ($page['included'] as $item) : ?>
                    <div class="rounded-[1.25rem] border border-slate-100 bg-slate-50 p-5 shadow-sm">
                        <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-white text-cyan-600 shadow-sm">
                            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                        </span>
                        <p class="mt-4 text-sm font-bold leading-7 text-slate-700"><?php echo esc_html($item); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="bg-[#07111f] py-20 text-white sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-[0.8fr_1.2fr]">
                <div data-animate>
                    <span class="inline-flex items-center gap-2 rounded-full border border-cyan-300/25 bg-white/10 px-4 py-2 text-xs font-black uppercase tracking-[0.18em] text-cyan-300">
                        Our Process
                    </span>
                    <h2 class="mt-5 text-3xl font-black sm:text-4xl">A polished appointment from start to finish.</h2>
                    <p class="mt-5 text-base leading-8 text-slate-300">We follow a clear detailing flow so every service feels organized, thorough, and easy for you.</p>
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <?php foreach ($page['process'] as $index => $step) : ?>
                        <div class="rounded-[1.5rem] border border-cyan-300/15 bg-white/[0.06] p-6 backdrop-blur-md" data-animate>
                            <span class="text-sm font-black text-cyan-300">0<?php echo esc_html((string) ($index + 1)); ?></span>
                            <p class="mt-3 text-base font-bold leading-7 text-white"><?php echo esc_html($step); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-10 lg:grid-cols-[0.8fr_1.2fr]">
                <div data-animate>
                    <h2 class="text-3xl font-black text-slate-950 sm:text-4xl">Best for</h2>
                    <p class="mt-4 text-base leading-8 text-slate-600">This service is a strong choice for these vehicles and situations.</p>
                </div>
                <div class="flex flex-wrap gap-3" data-animate>
                    <?php foreach ($page['best_for'] as $item) : ?>
                        <span class="inline-flex items-center gap-2 rounded-full border border-cyan-100 bg-cyan-50 px-5 py-3 text-sm font-black text-cyan-700">
                            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                            <?php echo esc_html($item); ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="mt-16 grid grid-cols-1 gap-7 sm:grid-cols-2 lg:grid-cols-4">
                <?php foreach ($related as $item) : ?>
                    <?php if (($item['path'] ?? '') === ($page['path'] ?? '')) { continue; } ?>
                    <?php washngo_render_service_card($item); ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
}

function washngo_render_locations_index()
{
    $locations = washngo_location_pages();
    ?>
    <section class="relative overflow-hidden bg-slate-50 py-20 sm:py-24">
        <div class="absolute inset-0 opacity-[0.28]" style="background-image: radial-gradient(#67e8f9 1px, transparent 1px); background-size: 30px 30px;"></div>
        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-4xl text-center" data-animate>
                <span class="inline-flex items-center gap-2 rounded-full bg-white px-4 py-2 text-xs font-black uppercase tracking-[0.18em] text-cyan-600 shadow-sm">
                    10 Locations
                </span>
                <h2 class="mt-5 text-3xl font-black text-slate-950 sm:text-4xl lg:text-5xl">Mobile car detailing across North Texas.</h2>
                <p class="mx-auto mt-5 max-w-3xl text-base leading-8 text-slate-600">Choose your nearest service area and book interior, exterior, complete, fleet, RV, or premium add-on detailing.</p>
            </div>
            <div class="mt-14 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-5">
                <?php foreach ($locations as $slug => $location) : ?>
                    <a href="<?php echo esc_url(home_url('/locations/' . $slug . '/')); ?>" class="group rounded-[1.5rem] border border-cyan-100 bg-white p-6 shadow-lg transition-all duration-300 hover:-translate-y-2 hover:border-cyan-300 hover:shadow-2xl" data-animate>
                        <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-cyan-50 text-cyan-600 transition-all duration-300 group-hover:bg-gradient-to-br group-hover:from-cyan-500 group-hover:to-sky-500 group-hover:text-white">
                            <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                        </span>
                        <h3 class="mt-5 text-lg font-black text-slate-950"><?php echo esc_html($location['short_title']); ?></h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600"><?php echo esc_html($location['lead']); ?></p>
                        <span class="mt-5 inline-flex items-center gap-2 text-sm font-black text-cyan-600">
                            View Area
                            <i class="fa-solid fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true"></i>
                        </span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
}

function washngo_render_location_detail($page)
{
    $services = washngo_core_services();
    ?>
    <section class="bg-white py-20 sm:py-24">
        <div class="mx-auto grid max-w-7xl grid-cols-1 gap-12 px-4 sm:px-6 lg:grid-cols-[0.85fr_1.15fr] lg:px-8">
            <div data-animate>
                <span class="inline-flex items-center gap-2 rounded-full bg-cyan-50 px-4 py-2 text-xs font-black uppercase tracking-[0.18em] text-cyan-600">
                    <?php echo esc_html($page['city']); ?> Service Area
                </span>
                <h2 class="mt-5 text-3xl font-black leading-tight text-slate-950 sm:text-4xl">We detail at your home, office, or workplace in <?php echo esc_html($page['city']); ?>.</h2>
                <p class="mt-5 text-base leading-8 text-slate-600"><?php echo esc_html($page['lead']); ?></p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <?php foreach ($page['neighborhoods'] as $area) : ?>
                        <span class="rounded-full border border-cyan-100 bg-cyan-50 px-4 py-2 text-sm font-black text-cyan-700"><?php echo esc_html($area); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2" data-animate>
                <?php foreach (array_slice($services, 0, 4) as $service) : ?>
                    <a href="<?php echo esc_url(home_url($service['path'])); ?>" class="rounded-[1.5rem] border border-cyan-100 bg-slate-50 p-6 transition-all duration-300 hover:-translate-y-2 hover:bg-white hover:shadow-xl">
                        <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white text-cyan-600 shadow-sm">
                            <?php washngo_icon_html($service['icon']); ?>
                        </span>
                        <h3 class="mt-5 text-lg font-black text-slate-950"><?php echo esc_html($service['short_title']); ?></h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600"><?php echo esc_html($service['accent']); ?></p>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
}

function washngo_render_gallery_page()
{
    $items = array(
        array('title' => 'Interior Reset', 'text' => 'Seats, mats, carpets, console, vents, and touch points refreshed.'),
        array('title' => 'Gloss Exterior', 'text' => 'Foam wash, paint-safe dry, wheels, tires, glass, and protected shine.'),
        array('title' => 'Complete Detail', 'text' => 'Interior and exterior care combined for a full vehicle transformation.'),
        array('title' => 'Protection Finish', 'text' => 'Ceramic coating and paint correction options for deeper gloss.'),
        array('title' => 'Fleet Ready', 'text' => 'Consistent mobile care for work vehicles and business fleets.'),
        array('title' => 'RV and Large Vehicles', 'text' => 'Large vehicle detailing for RVs, vans, campers, and trailers.'),
    );
    ?>
    <section class="bg-white py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-7 sm:grid-cols-2 lg:grid-cols-3">
                <?php foreach ($items as $index => $item) : ?>
                    <div class="group relative min-h-[330px] overflow-hidden rounded-[1.5rem] bg-[#07111f] p-7 text-white shadow-xl" data-animate>
                        <div class="absolute inset-0 bg-cover bg-center opacity-55 transition-transform duration-700 group-hover:scale-110" style="background-image: url('<?php echo esc_url(washngo_page_image_url()); ?>');"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-[#020617] via-[#020617]/75 to-transparent"></div>
                        <div class="relative z-10 flex h-full flex-col justify-end">
                            <span class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-cyan-400 text-slate-950">
                                <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                            </span>
                            <h3 class="text-2xl font-black"><?php echo esc_html($item['title']); ?></h3>
                            <p class="mt-3 text-sm font-semibold leading-7 text-slate-200"><?php echo esc_html($item['text']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
}

function washngo_render_blog_page()
{
    $posts = array(
        array('title' => 'How often should you detail your car?', 'text' => 'A practical guide for daily drivers, family vehicles, and cars exposed to heat, rain, dust, and road grime.', 'icon' => 'fa-regular fa-calendar-check'),
        array('title' => 'Interior detailing vs. regular vacuuming', 'text' => 'Why deep cleaning seats, vents, mats, trim, and high-touch surfaces can completely change how your vehicle feels.', 'icon' => 'fa-solid fa-couch'),
        array('title' => 'When ceramic coating makes sense', 'text' => 'How coating helps protect gloss, improve cleaning, and support long-term paint care after proper prep.', 'icon' => 'fa-solid fa-shield-halved'),
        array('title' => 'Fleet detailing for small businesses', 'text' => 'Clean business vehicles help your team look organized, professional, and ready for customers.', 'icon' => 'fa-solid fa-truck-fast'),
    );
    ?>
    <section class="bg-slate-50 py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-7 md:grid-cols-2">
                <?php foreach ($posts as $post) : ?>
                    <article class="rounded-[1.5rem] border border-cyan-100 bg-white p-7 shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl" data-animate>
                        <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-cyan-50 text-xl text-cyan-600">
                            <?php washngo_icon_html($post['icon']); ?>
                        </span>
                        <h2 class="mt-6 text-2xl font-black text-slate-950"><?php echo esc_html($post['title']); ?></h2>
                        <p class="mt-4 text-sm leading-7 text-slate-600"><?php echo esc_html($post['text']); ?></p>
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="mt-7 inline-flex items-center gap-2 text-sm font-black text-cyan-600">
                            Ask Our Team
                            <i class="fa-solid fa-arrow-right text-xs" aria-hidden="true"></i>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
}

function washngo_render_contact_form($heading = 'Request an Appointment')
{
    $services = array_merge(washngo_core_services(), washngo_addon_services());
    ?>
    <section class="relative overflow-hidden bg-white py-20 sm:py-24">
        <div class="absolute left-[-100px] top-20 h-80 w-80 rounded-full bg-cyan-100/80 blur-3xl"></div>
        <div class="absolute right-[-100px] bottom-20 h-80 w-80 rounded-full bg-sky-100/80 blur-3xl"></div>
        <div class="relative z-10 mx-auto grid max-w-7xl grid-cols-1 items-start gap-12 px-4 sm:px-6 lg:grid-cols-[0.85fr_1.15fr] lg:px-8">
            <div data-animate>
                <span class="inline-flex items-center gap-2 rounded-full bg-cyan-50 px-4 py-2 text-xs font-black uppercase tracking-[0.18em] text-cyan-600">
                    Get In Touch
                </span>
                <h2 class="mt-5 text-3xl font-black leading-tight text-slate-950 sm:text-4xl">Tell us what your vehicle needs.</h2>
                <p class="mt-5 text-base leading-8 text-slate-600">Share your vehicle type, preferred service, and timing. We will help you choose the right detail and confirm availability.</p>
                <div class="mt-8 space-y-4">
                    <a href="tel:4692999750" class="group flex items-center gap-4 rounded-2xl border border-cyan-100 bg-white p-5 shadow-lg transition-all duration-300 hover:-translate-y-1 hover:border-cyan-300 hover:shadow-xl">
                        <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-cyan-50 text-cyan-600 group-hover:bg-cyan-500 group-hover:text-white">
                            <i class="fa-solid fa-phone-volume" aria-hidden="true"></i>
                        </span>
                        <span>
                            <small class="block text-xs font-black uppercase tracking-[0.18em] text-slate-400">Phone</small>
                            <strong class="mt-1 block text-base font-black text-slate-950">(469) 299-9750</strong>
                        </span>
                    </a>
                    <a href="mailto:info@rightcardetailingusa.com" class="group flex items-center gap-4 rounded-2xl border border-cyan-100 bg-white p-5 shadow-lg transition-all duration-300 hover:-translate-y-1 hover:border-cyan-300 hover:shadow-xl">
                        <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-cyan-50 text-cyan-600 group-hover:bg-cyan-500 group-hover:text-white">
                            <i class="fa-regular fa-envelope" aria-hidden="true"></i>
                        </span>
                        <span>
                            <small class="block text-xs font-black uppercase tracking-[0.18em] text-slate-400">Email</small>
                            <strong class="mt-1 block text-base font-black text-slate-950">info@rightcardetailingusa.com</strong>
                        </span>
                    </a>
                    <div class="overflow-hidden rounded-2xl border border-cyan-100 bg-white p-3 shadow-lg">
                        <img src="<?php echo esc_url(washngo_contact_image_url()); ?>" alt="Contact Wash N Go" class="h-auto w-full rounded-xl object-cover">
                    </div>
                </div>
            </div>

            <div class="rounded-[2rem] border border-cyan-100 bg-white p-6 shadow-2xl shadow-cyan-500/10 sm:p-8" data-animate>
                <h3 class="text-2xl font-black text-slate-950"><?php echo esc_html($heading); ?></h3>
                <p class="mt-2 text-sm leading-7 text-slate-500">This form prepares your inquiry. For fastest booking, call the number on this page.</p>
                <form class="mt-7 space-y-5" action="<?php echo esc_url(home_url('/contact/')); ?>" method="post" data-booking-form>
                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                        <label class="block">
                            <span class="mb-2 block text-xs font-black uppercase tracking-[0.16em] text-slate-500">First Name</span>
                            <input type="text" name="first_name" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4 text-sm font-semibold text-slate-900 outline-none transition-all duration-300 focus:border-cyan-400 focus:bg-white focus:ring-4 focus:ring-cyan-100">
                        </label>
                        <label class="block">
                            <span class="mb-2 block text-xs font-black uppercase tracking-[0.16em] text-slate-500">Last Name</span>
                            <input type="text" name="last_name" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4 text-sm font-semibold text-slate-900 outline-none transition-all duration-300 focus:border-cyan-400 focus:bg-white focus:ring-4 focus:ring-cyan-100">
                        </label>
                    </div>
                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                        <label class="block">
                            <span class="mb-2 block text-xs font-black uppercase tracking-[0.16em] text-slate-500">Email Address</span>
                            <input type="email" name="email" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4 text-sm font-semibold text-slate-900 outline-none transition-all duration-300 focus:border-cyan-400 focus:bg-white focus:ring-4 focus:ring-cyan-100">
                        </label>
                        <label class="block">
                            <span class="mb-2 block text-xs font-black uppercase tracking-[0.16em] text-slate-500">Phone Number</span>
                            <input type="tel" name="phone" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4 text-sm font-semibold text-slate-900 outline-none transition-all duration-300 focus:border-cyan-400 focus:bg-white focus:ring-4 focus:ring-cyan-100">
                        </label>
                    </div>
                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                        <label class="block">
                            <span class="mb-2 block text-xs font-black uppercase tracking-[0.16em] text-slate-500">Vehicle Type</span>
                            <select name="vehicle_type" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4 text-sm font-semibold text-slate-900 outline-none transition-all duration-300 focus:border-cyan-400 focus:bg-white focus:ring-4 focus:ring-cyan-100">
                                <option value="">Select vehicle type</option>
                                <option>Sedan</option>
                                <option>SUV</option>
                                <option>Truck</option>
                                <option>Van</option>
                                <option>RV or Camper</option>
                                <option>Boat</option>
                            </select>
                        </label>
                        <label class="block">
                            <span class="mb-2 block text-xs font-black uppercase tracking-[0.16em] text-slate-500">Service</span>
                            <select name="service" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4 text-sm font-semibold text-slate-900 outline-none transition-all duration-300 focus:border-cyan-400 focus:bg-white focus:ring-4 focus:ring-cyan-100">
                                <option value="">Select a service</option>
                                <?php foreach ($services as $service) : ?>
                                    <option><?php echo esc_html($service['short_title']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </label>
                    </div>
                    <label class="block">
                        <span class="mb-2 block text-xs font-black uppercase tracking-[0.16em] text-slate-500">Select Time</span>
                        <select name="preferred_time" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4 text-sm font-semibold text-slate-900 outline-none transition-all duration-300 focus:border-cyan-400 focus:bg-white focus:ring-4 focus:ring-cyan-100">
                            <option value="">Choose a preferred time</option>
                            <option value="8:00 AM">8:00 AM</option>
                            <option value="9:00 AM">9:00 AM</option>
                            <option value="10:00 AM">10:00 AM</option>
                            <option value="11:00 AM">11:00 AM</option>
                            <option value="12:00 PM">12:00 PM</option>
                            <option value="1:00 PM">1:00 PM</option>
                            <option value="2:00 PM">2:00 PM</option>
                            <option value="3:00 PM">3:00 PM</option>
                            <option value="4:00 PM">4:00 PM</option>
                            <option value="5:00 PM">5:00 PM</option>
                            <option value="6:00 PM">6:00 PM</option>
                            <option value="7:00 PM">7:00 PM</option>
                            <option value="8:00 PM">8:00 PM</option>
                        </select>
                    </label>
                    <label class="block">
                        <span class="mb-2 block text-xs font-black uppercase tracking-[0.16em] text-slate-500">Notes</span>
                        <textarea name="notes" rows="5" class="w-full resize-none rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4 text-sm font-semibold text-slate-900 outline-none transition-all duration-300 focus:border-cyan-400 focus:bg-white focus:ring-4 focus:ring-cyan-100"></textarea>
                    </label>
                    <p class="hidden rounded-2xl border border-emerald-100 bg-emerald-50 px-5 py-4 text-sm font-bold text-emerald-700" data-form-status>
                        Thanks. Your inquiry is ready. Please call us to confirm the fastest available time.
                    </p>
                    <button type="submit" class="group inline-flex w-full items-center justify-center gap-3 rounded-2xl bg-gradient-to-r from-cyan-500 to-sky-500 px-7 py-4 text-sm font-black uppercase tracking-[0.14em] text-white shadow-xl shadow-cyan-500/25 transition-all duration-300 hover:-translate-y-1 hover:from-cyan-400 hover:to-sky-400">
                        Send Inquiry
                        <i class="fa-solid fa-paper-plane text-xs transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>
    <?php
}

get_header();
washngo_render_page_hero($page);

switch ($page['type']) {
    case 'about':
        washngo_render_about_page();
        break;

    case 'services-index':
        washngo_render_services_index();
        washngo_render_addons_index();
        break;

    case 'addons-index':
        washngo_render_addons_index();
        break;

    case 'locations-index':
        washngo_render_locations_index();
        break;

    case 'location-detail':
        washngo_render_location_detail($page);
        break;

    case 'gallery':
        washngo_render_gallery_page();
        break;

    case 'blog':
        washngo_render_blog_page();
        break;

    case 'book':
        washngo_render_contact_form('Book Your Appointment');
        break;

    case 'contact':
    default:
        washngo_render_contact_form('Request an Appointment');
        break;
}

get_footer();
