<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
if (function_exists('wp_body_open')) {
    wp_body_open();
}
?>

<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'wash-n-go'); ?></a>

<style>
/* =========================
   PREMIUM CAR WASH HEADER
   ========================= */

:root {
    --wng-navy: #061826;
    --wng-navy-2: #0b2538;
    --wng-blue: #0284c7;
    --wng-aqua: #06b6d4;
    --wng-sky: #38bdf8;
    --wng-soft: #eefaff;
    --wng-soft-2: #dff7ff;
    --wng-white: #ffffff;
    --wng-text: #172033;
    --wng-muted: #64748b;
    --wng-border: rgba(15, 23, 42, 0.10);
    --wng-shadow: 0 18px 45px rgba(2, 8, 23, 0.12);
}

.wng-header {
    position: sticky;
    top: 0;
    z-index: 999;
    background: var(--wng-white);
    box-shadow: 0 10px 30px rgba(2, 8, 23, 0.06);
}

.wng-header.is-scrolled {
    box-shadow: var(--wng-shadow);
}

.wng-container {
    width: min(100% - 32px, 1280px);
    margin-inline: auto;
}

/* Top Bar */
.wng-topbar {
    background:
        radial-gradient(circle at left, rgba(6, 182, 212, 0.28), transparent 30%),
        linear-gradient(135deg, var(--wng-navy), var(--wng-navy-2));
    color: #e8f9ff;
    font-size: 13px;
}

.wng-topbar-inner {
    min-height: 42px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 18px;
}

.wng-topbar-left,
.wng-topbar-right {
    display: flex;
    align-items: center;
    gap: 18px;
    flex-wrap: wrap;
}

.wng-topbar a,
.wng-topbar span {
    color: #e8f9ff;
    text-decoration: none;
    font-weight: 800;
}

.wng-topbar i {
    color: var(--wng-sky);
    margin-right: 7px;
}

.wng-topbar a:hover {
    color: #ffffff;
}

/* Main Row */
.wng-main {
    background: rgba(255, 255, 255, 0.96);
    backdrop-filter: blur(16px);
    border-bottom: 1px solid var(--wng-border);
}

.wng-main-inner {
    min-height: 86px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 22px;
}

/* Brand */
.wng-brand {
    display: inline-flex;
    align-items: center;
    gap: 13px;
    text-decoration: none;
    min-width: max-content;
}

.wng-brand img,
.custom-logo {
    max-height: 62px;
    width: auto;
}

.wng-brand-mark {
    width: 54px;
    height: 54px;
    border-radius: 18px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background:
        linear-gradient(145deg, rgba(255,255,255,0.28), transparent),
        linear-gradient(135deg, var(--wng-aqua), var(--wng-blue));
    color: #ffffff;
    font-size: 23px;
    box-shadow: 0 16px 32px rgba(6, 182, 212, 0.35);
}

.wng-brand-copy {
    display: flex;
    flex-direction: column;
    line-height: 1.05;
}

.wng-brand-copy strong {
    color: var(--wng-navy);
    font-size: 25px;
    font-weight: 950;
    letter-spacing: -0.04em;
}

.wng-brand-copy strong span {
    color: var(--wng-aqua);
}

.wng-brand-copy small {
    margin-top: 5px;
    color: var(--wng-muted);
    font-size: 11px;
    font-weight: 900;
    letter-spacing: 0.16em;
    text-transform: uppercase;
}

/* Desktop Nav */
.wng-desktop-nav {
    flex: 1;
    display: flex;
    justify-content: center;
}

.wng-menu {
    display: flex;
    align-items: center;
    gap: 4px;
    list-style: none;
    padding: 7px;
    margin: 0;
    border-radius: 999px;
    background: var(--wng-soft);
    border: 1px solid rgba(6, 182, 212, 0.16);
}

.wng-nav-link {
    appearance: none;
    border: 0;
    background: transparent;
    position: relative;
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 11px 14px;
    border-radius: 999px;
    color: #243449;
    font-size: 14px;
    font-weight: 900;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.25s ease;
    white-space: nowrap;
}

.wng-nav-link:hover,
.wng-nav-link.is-active,
.current-menu-item .wng-nav-link {
    color: #ffffff;
    background: linear-gradient(135deg, var(--wng-aqua), var(--wng-blue));
    box-shadow: 0 12px 24px rgba(6, 182, 212, 0.28);
}

/* Dropdown */
.wng-has-dropdown {
    position: relative;
}

.wng-dropdown {
    position: absolute;
    top: calc(100% + 14px);
    left: 0;
    width: 320px;
    padding: 10px;
    border-radius: 22px;
    background: #ffffff;
    border: 1px solid rgba(6, 182, 212, 0.16);
    box-shadow: 0 28px 70px rgba(2, 8, 23, 0.18);
    opacity: 0;
    visibility: hidden;
    transform: translateY(12px);
    transition: all 0.25s ease;
}

.wng-has-dropdown:hover .wng-dropdown,
.wng-has-dropdown.is-open .wng-dropdown {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.wng-dropdown a {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px 13px;
    border-radius: 15px;
    color: var(--wng-text);
    text-decoration: none;
    font-size: 14px;
    font-weight: 800;
    transition: all 0.25s ease;
}

.wng-dropdown a::before {
    content: "";
    width: 9px;
    height: 9px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--wng-aqua), var(--wng-blue));
    box-shadow: 0 0 0 5px rgba(6, 182, 212, 0.12);
    flex-shrink: 0;
}

.wng-dropdown a:hover {
    background: var(--wng-soft);
    color: var(--wng-blue);
    transform: translateX(4px);
}

/* Actions */
.wng-actions {
    display: flex;
    align-items: center;
    gap: 12px;
}

.wng-call-box {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 10px 12px;
    border-radius: 18px;
    background: #ffffff;
    border: 1px solid rgba(6, 182, 212, 0.16);
    box-shadow: 0 12px 28px rgba(2, 8, 23, 0.06);
    text-decoration: none;
}

.wng-call-box i {
    width: 40px;
    height: 40px;
    border-radius: 14px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--wng-aqua), var(--wng-blue));
    color: #ffffff;
}

.wng-call-box small {
    display: block;
    color: var(--wng-muted);
    font-size: 11px;
    font-weight: 800;
}

.wng-call-box strong {
    display: block;
    color: var(--wng-navy);
    font-size: 13px;
    font-weight: 950;
}

.wng-book-btn {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    padding: 14px 20px;
    border-radius: 999px;
    background: linear-gradient(135deg, var(--wng-aqua), var(--wng-blue));
    color: #ffffff;
    text-decoration: none;
    font-size: 14px;
    font-weight: 950;
    box-shadow: 0 16px 35px rgba(6, 182, 212, 0.34);
    transition: all 0.25s ease;
    white-space: nowrap;
}

.wng-book-btn:hover {
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 22px 45px rgba(6, 182, 212, 0.46);
}

/* Mobile Toggle */
.wng-menu-toggle {
    display: none;
    width: 48px;
    height: 48px;
    border: 1px solid rgba(6, 182, 212, 0.18);
    border-radius: 16px;
    background: var(--wng-soft);
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 5px;
    cursor: pointer;
}

.wng-menu-line {
    width: 22px;
    height: 2px;
    border-radius: 999px;
    background: var(--wng-blue);
    transition: all 0.25s ease;
}

.wng-menu-toggle.is-active {
    background: linear-gradient(135deg, var(--wng-aqua), var(--wng-blue));
}

.wng-menu-toggle.is-active .wng-menu-line {
    background: #ffffff;
}

.wng-menu-toggle.is-active .line-1 {
    transform: translateY(7px) rotate(45deg);
}

.wng-menu-toggle.is-active .line-2 {
    opacity: 0;
}

.wng-menu-toggle.is-active .line-3 {
    transform: translateY(-7px) rotate(-45deg);
}

.wng-visually-hidden {
    position: absolute;
    width: 1px;
    height: 1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
}

/* Mobile Panel */
.wng-mobile-panel {
    display: none;
    background: #ffffff;
    border-bottom: 1px solid var(--wng-border);
    box-shadow: 0 22px 45px rgba(2, 8, 23, 0.10);
}

.wng-mobile-panel.is-open {
    display: block;
    animation: wngSlideDown 0.25s ease forwards;
}

@keyframes wngSlideDown {
    from {
        opacity: 0;
        transform: translateY(-8px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.wng-mobile-nav {
    padding: 14px 0 22px;
}

.wng-mobile-link {
    width: 100%;
    border: 0;
    background: transparent;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 14px 14px;
    border-radius: 15px;
    color: var(--wng-text);
    text-decoration: none;
    font-size: 15px;
    font-weight: 900;
    cursor: pointer;
}

.wng-mobile-link:hover,
.wng-mobile-link.is-active {
    color: var(--wng-blue);
    background: var(--wng-soft);
}

.wng-mobile-group.is-open .wng-mobile-link i {
    transform: rotate(180deg);
}

.wng-mobile-submenu {
    display: none;
    margin: 4px 0 8px 14px;
    padding-left: 12px;
    border-left: 2px solid var(--wng-soft-2);
}

.wng-mobile-group.is-open .wng-mobile-submenu {
    display: block;
}

.wng-mobile-submenu a {
    display: block;
    padding: 10px 12px;
    border-radius: 13px;
    color: #475569;
    text-decoration: none;
    font-size: 14px;
    font-weight: 800;
}

.wng-mobile-submenu a:hover {
    color: var(--wng-blue);
    background: var(--wng-soft);
}

.wng-mobile-cta {
    margin-top: 12px;
    display: grid;
    gap: 10px;
}

.wng-mobile-phone,
.wng-mobile-book {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    border-radius: 999px;
    padding: 14px 18px;
    text-decoration: none;
    font-weight: 950;
}

.wng-mobile-phone {
    color: var(--wng-blue);
    background: var(--wng-soft);
}

.wng-mobile-book {
    color: #ffffff;
    background: linear-gradient(135deg, var(--wng-aqua), var(--wng-blue));
    box-shadow: 0 16px 35px rgba(6, 182, 212, 0.32);
}

/* Admin Bar Fix */
.admin-bar .wng-header {
    top: 32px;
}

@media (max-width: 782px) {
    .admin-bar .wng-header {
        top: 46px;
    }
}

/* Responsive */
@media (max-width: 1180px) {
    .wng-call-box {
        display: none;
    }

    .wng-nav-link {
        padding-inline: 11px;
        font-size: 13px;
    }
}

@media (max-width: 1024px) {
    .wng-desktop-nav,
    .wng-actions {
        display: none;
    }

    .wng-menu-toggle {
        display: inline-flex;
    }

    .wng-main-inner {
        min-height: 78px;
    }
}

@media (max-width: 640px) {
    .wng-container {
        width: min(100% - 24px, 1280px);
    }

    .wng-topbar-inner {
        min-height: auto;
        padding: 9px 0;
        justify-content: center;
        text-align: center;
    }

    .wng-topbar-right {
        display: none;
    }

    .wng-brand-copy strong {
        font-size: 21px;
    }

    .wng-brand-copy small {
        font-size: 10px;
    }

    .wng-brand-mark {
        width: 48px;
        height: 48px;
        border-radius: 16px;
    }

    .wng-brand img,
    .custom-logo {
        max-height: 52px;
    }
}
</style>

<header class="wng-header" data-site-header>

    <!-- Top Bar -->
    <div class="wng-topbar">
        <div class="wng-container wng-topbar-inner">

            <div class="wng-topbar-left">
                <a href="tel:+923008233793">
                    <i class="fa-solid fa-phone-volume" aria-hidden="true"></i>
                    0300 8233793
                </a>

                <a href="tel:+923302822537">
                    <i class="fa-solid fa-mobile-screen-button" aria-hidden="true"></i>
                    0330 2822537
                </a>
            </div>

            <div class="wng-topbar-right">
                <span>
                    <i class="fa-regular fa-clock" aria-hidden="true"></i>
                    Open Daily 8:00 AM - 8:00 PM
                </span>

                <span>
                    <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                    Mobile Car Wash Service
                </span>
            </div>

        </div>
    </div>

    <!-- Main Header -->
    <div class="wng-main">
        <div class="wng-container wng-main-inner">

            <!-- Logo -->
            <a class="wng-brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php echo esc_attr(get_bloginfo('name') ?: 'Wash N Go'); ?>">
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $custom_logo    = $custom_logo_id
                    ? wp_get_attachment_image(
                        $custom_logo_id,
                        'full',
                        false,
                        array(
                            'class' => 'custom-logo',
                            'alt'   => esc_attr(get_bloginfo('name') ?: 'Wash N Go'),
                        )
                    )
                    : '';
                ?>
                <?php if ($custom_logo) : ?>
                    <?php echo $custom_logo; ?>
                <?php else : ?>
                    <span class="wng-brand-mark" aria-hidden="true">
                        <i class="fa-solid fa-car-side"></i>
                    </span>

                    <span class="wng-brand-copy">
                        <strong>Wash <span>N</span> Go</strong>
                        <small>Premium car care</small>
                    </span>
                <?php endif; ?>
            </a>

            <!-- Desktop Navigation -->
            <nav class="wng-desktop-nav" aria-label="<?php esc_attr_e('Primary menu', 'wash-n-go'); ?>">
                <ul class="wng-menu">

                    <li>
                        <a class="<?php echo washngo_nav_class('wng-nav-link', '/'); ?>" href="<?php echo esc_url(home_url('/')); ?>">
                            Home
                        </a>
                    </li>

                    <li>
                        <a class="<?php echo washngo_nav_class('wng-nav-link', '/about/'); ?>" href="<?php echo esc_url(home_url('/about/')); ?>">
                            About
                        </a>
                    </li>

                    <li class="wng-has-dropdown" data-dropdown>
                        <button class="<?php echo washngo_nav_class('wng-nav-link', '/services/'); ?>" type="button" aria-expanded="false" data-dropdown-toggle>
                            <span>Services</span>
                            <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
                        </button>

                        <div class="wng-dropdown" data-dropdown-menu>
                            <a href="<?php echo esc_url(home_url('/services/interior-detailing/')); ?>">Interior Detailing Service</a>
                            <a href="<?php echo esc_url(home_url('/services/exterior-detailing/')); ?>">Exterior Detailing Services</a>
                            <a href="<?php echo esc_url(home_url('/services/complete-detailing/')); ?>">Complete Detailing Service</a>
                            <a href="<?php echo esc_url(home_url('/services/fleet-detailing/')); ?>">Fleet Detailing Services</a>
                            <a href="<?php echo esc_url(home_url('/services/mobile-rv-detailing/')); ?>">Mobile RV Detailing Services</a>
                        </div>
                    </li>

                    <li>
                        <a class="<?php echo washngo_nav_class('wng-nav-link', '/locations/'); ?>" href="<?php echo esc_url(home_url('/locations/')); ?>">
                            Locations
                        </a>
                    </li>

                    <li class="wng-has-dropdown" data-dropdown>
                        <button class="<?php echo washngo_nav_class('wng-nav-link', '/add-ons/'); ?>" type="button" aria-expanded="false" data-dropdown-toggle>
                            <span>Add-Ons</span>
                            <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
                        </button>

                        <div class="wng-dropdown" data-dropdown-menu>
                            <a href="<?php echo esc_url(home_url('/add-ons/ceramic-coating/')); ?>">Ceramic Coating</a>
                            <a href="<?php echo esc_url(home_url('/add-ons/paint-correction/')); ?>">Paint Correction</a>
                            <a href="<?php echo esc_url(home_url('/add-ons/headlight-restoration/')); ?>">Headlight Restoration</a>
                            <a href="<?php echo esc_url(home_url('/add-ons/engine-bay-cleaning/')); ?>">Engine Bay Cleaning</a>
                        </div>
                    </li>

                    <li>
                        <a class="<?php echo washngo_nav_class('wng-nav-link', '/gallery/'); ?>" href="<?php echo esc_url(home_url('/gallery/')); ?>">
                            Gallery
                        </a>
                    </li>

                    <li>
                        <a class="<?php echo washngo_nav_class('wng-nav-link', '/blog/'); ?>" href="<?php echo esc_url(home_url('/blog/')); ?>">
                            Blog
                        </a>
                    </li>

                    <li>
                        <a class="<?php echo washngo_nav_class('wng-nav-link', '/contact/'); ?>" href="<?php echo esc_url(home_url('/contact/')); ?>">
                            Contact
                        </a>
                    </li>

                </ul>
            </nav>

            <!-- Desktop Actions -->
            <div class="wng-actions">
                <a class="wng-book-btn" href="<?php echo esc_url(home_url('/book-now/')); ?>">
                    <i class="fa-regular fa-calendar-check" aria-hidden="true"></i>
                    <span>Book Now</span>
                </a>
            </div>

            <!-- Mobile Toggle -->
            <button class="wng-menu-toggle" type="button" aria-controls="primary-navigation" aria-expanded="false" data-menu-toggle>
                <span class="wng-visually-hidden"><?php esc_html_e('Open menu', 'wash-n-go'); ?></span>
                <span class="wng-menu-line line-1"></span>
                <span class="wng-menu-line line-2"></span>
                <span class="wng-menu-line line-3"></span>
            </button>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="wng-mobile-panel" id="primary-navigation" data-mobile-menu>
        <nav class="wng-container wng-mobile-nav" aria-label="<?php esc_attr_e('Mobile menu', 'wash-n-go'); ?>">

            <a class="<?php echo washngo_nav_class('wng-mobile-link', '/'); ?>" href="<?php echo esc_url(home_url('/')); ?>">
                Home
            </a>

            <a class="<?php echo washngo_nav_class('wng-mobile-link', '/about/'); ?>" href="<?php echo esc_url(home_url('/about/')); ?>">
                About
            </a>

            <div class="wng-mobile-group" data-mobile-group>
                <button class="<?php echo washngo_nav_class('wng-mobile-link wng-mobile-dropdown-toggle', '/services/'); ?>" type="button" aria-expanded="false" data-mobile-toggle>
                    <span>Services</span>
                    <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
                </button>

                <div class="wng-mobile-submenu" data-mobile-submenu>
                    <a href="<?php echo esc_url(home_url('/services/interior-detailing/')); ?>">Interior Detailing Service</a>
                    <a href="<?php echo esc_url(home_url('/services/exterior-detailing/')); ?>">Exterior Detailing Services</a>
                    <a href="<?php echo esc_url(home_url('/services/complete-detailing/')); ?>">Complete Detailing Service</a>
                    <a href="<?php echo esc_url(home_url('/services/fleet-detailing/')); ?>">Fleet Detailing Services</a>
                    <a href="<?php echo esc_url(home_url('/services/mobile-rv-detailing/')); ?>">Mobile RV Detailing Services</a>
                </div>
            </div>

            <a class="<?php echo washngo_nav_class('wng-mobile-link', '/locations/'); ?>" href="<?php echo esc_url(home_url('/locations/')); ?>">
                Locations
            </a>

            <div class="wng-mobile-group" data-mobile-group>
                <button class="<?php echo washngo_nav_class('wng-mobile-link wng-mobile-dropdown-toggle', '/add-ons/'); ?>" type="button" aria-expanded="false" data-mobile-toggle>
                    <span>Add-Ons</span>
                    <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
                </button>

                <div class="wng-mobile-submenu" data-mobile-submenu>
                    <a href="<?php echo esc_url(home_url('/add-ons/ceramic-coating/')); ?>">Ceramic Coating</a>
                    <a href="<?php echo esc_url(home_url('/add-ons/paint-correction/')); ?>">Paint Correction</a>
                    <a href="<?php echo esc_url(home_url('/add-ons/headlight-restoration/')); ?>">Headlight Restoration</a>
                    <a href="<?php echo esc_url(home_url('/add-ons/engine-bay-cleaning/')); ?>">Engine Bay Cleaning</a>
                </div>
            </div>

            <a class="<?php echo washngo_nav_class('wng-mobile-link', '/gallery/'); ?>" href="<?php echo esc_url(home_url('/gallery/')); ?>">
                Gallery
            </a>

            <a class="<?php echo washngo_nav_class('wng-mobile-link', '/blog/'); ?>" href="<?php echo esc_url(home_url('/blog/')); ?>">
                Blog
            </a>

            <a class="<?php echo washngo_nav_class('wng-mobile-link', '/contact/'); ?>" href="<?php echo esc_url(home_url('/contact/')); ?>">
                Contact
            </a>

            <div class="wng-mobile-cta">
                <a class="wng-mobile-phone" href="tel:+923008233793">
                    <i class="fa-solid fa-phone-volume" aria-hidden="true"></i>
                    Call Now
                </a>

                <a class="wng-mobile-book" href="<?php echo esc_url(home_url('/book-now/')); ?>">
                    <i class="fa-regular fa-calendar-check" aria-hidden="true"></i>
                    Book an Appointment
                </a>
            </div>

        </nav>
    </div>

</header>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const header = document.querySelector('[data-site-header]');
    const menuToggle = document.querySelector('[data-menu-toggle]');
    const mobileMenu = document.querySelector('[data-mobile-menu]');
    const dropdownToggles = document.querySelectorAll('[data-dropdown-toggle]');
    const mobileToggles = document.querySelectorAll('[data-mobile-toggle]');

    function closeDesktopDropdowns() {
        document.querySelectorAll('[data-dropdown].is-open').forEach(function (dropdown) {
            dropdown.classList.remove('is-open');

            const toggle = dropdown.querySelector('[data-dropdown-toggle]');
            if (toggle) {
                toggle.setAttribute('aria-expanded', 'false');
            }
        });
    }

    function closeMobileMenu() {
        if (!menuToggle || !mobileMenu) return;

        mobileMenu.classList.remove('is-open');
        menuToggle.classList.remove('is-active');
        menuToggle.setAttribute('aria-expanded', 'false');
    }

    window.addEventListener('scroll', function () {
        if (!header) return;

        if (window.scrollY > 20) {
            header.classList.add('is-scrolled');
        } else {
            header.classList.remove('is-scrolled');
        }
    });

    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', function () {
            const isOpen = mobileMenu.classList.toggle('is-open');

            menuToggle.classList.toggle('is-active', isOpen);
            menuToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');

            if (isOpen) {
                closeDesktopDropdowns();
            }
        });
    }

    dropdownToggles.forEach(function (toggle) {
        toggle.addEventListener('click', function (event) {
            event.stopPropagation();

            const parent = toggle.closest('[data-dropdown]');
            const wasOpen = parent.classList.contains('is-open');

            closeDesktopDropdowns();

            parent.classList.toggle('is-open', !wasOpen);
            toggle.setAttribute('aria-expanded', !wasOpen ? 'true' : 'false');
        });
    });

    mobileToggles.forEach(function (toggle) {
        toggle.addEventListener('click', function () {
            const group = toggle.closest('[data-mobile-group]');
            const isOpen = group.classList.toggle('is-open');

            toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });
    });

    document.addEventListener('click', function (event) {
        if (!event.target.closest('[data-dropdown]')) {
            closeDesktopDropdowns();
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            closeDesktopDropdowns();
            closeMobileMenu();
        }
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth >= 1024) {
            closeMobileMenu();
        }
    });
});
</script>

<main id="primary" class="site-content">
