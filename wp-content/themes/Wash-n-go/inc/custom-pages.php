<?php
/**
 * Static marketing pages for the Wash N Go theme.
 */

if (!defined('ABSPATH')) {
    exit;
}

function washngo_core_services()
{
    return array(
        'car-detailing' => array(
            'type'        => 'service-detail',
            'path'        => '/services/car-detailing/',
            'eyebrow'     => 'Car Detailing',
            'title'       => 'Car Detailing',
            'short_title' => 'Car Detailing',
            'lead'        => 'Complete mobile car detailing designed to clean, refresh, and protect your vehicle inside and out at your home, office, or workplace.',
            'icon'        => 'fa-solid fa-car',
            'accent'      => 'Everyday vehicle reset',
            'highlights'  => array('Interior and exterior detail options', 'Paint-safe wash and dry', 'Cabin vacuum and surface refresh', 'Mobile appointment at your location'),
            'included'    => array('Vehicle condition review', 'Exterior hand wash and dry', 'Interior vacuum and wipe down', 'Glass, wheels, tires, and trim attention', 'Service upgrades based on condition', 'Final quality check before handoff'),
            'process'     => array('Review your vehicle and priorities', 'Prep the exterior and cabin for cleaning', 'Detail visible surfaces inside and out', 'Apply finish and protection options', 'Walk through the completed detail with you'),
            'best_for'    => array('Daily drivers', 'First-time details', 'Busy schedules', 'Maintenance cleaning'),
        ),
        'suv-truck-detailing' => array(
            'type'        => 'service-detail',
            'path'        => '/services/suv-truck-detailing/',
            'eyebrow'     => 'SUV & Truck Detailing',
            'title'       => 'SUV & Truck Detailing',
            'short_title' => 'SUV & Truck Detailing',
            'lead'        => 'Professional detailing for larger vehicles including SUVs, pickups, family haulers, and work trucks that need deeper cleaning and durable finish care.',
            'icon'        => 'fa-solid fa-truck-pickup',
            'accent'      => 'Larger vehicle care',
            'highlights'  => array('Extra attention for larger cabins', 'Truck bed and cargo-area options', 'Wheel, tire, and trim cleaning', 'Interior stain and family-use cleanup'),
            'included'    => array('Large-vehicle inspection', 'Interior vacuum and cargo-area refresh', 'Exterior wash and safe drying', 'Wheel, tire, step, and trim detail', 'Seat and mat cleaning options', 'Final finish review'),
            'process'     => array('Confirm vehicle size and condition', 'Clean high-traffic interior and cargo zones', 'Wash exterior panels, wheels, tires, and trim', 'Add protection or add-ons as needed', 'Review the finished SUV or truck with you'),
            'best_for'    => array('Family SUVs', 'Pickup trucks', 'Work vehicles', 'Road-trip cleanup'),
        ),
        'interior-detailing' => array(
            'type'        => 'service-detail',
            'path'        => '/services/interior-detailing/',
            'eyebrow'     => 'Interior Detailing Service',
            'title'       => 'Interior Detailing Service',
            'short_title' => 'Interior Detailing',
            'lead'        => 'Deep interior cleaning for seats, carpets, mats, dashboard, vents, cup holders, door panels, and every high-touch surface your passengers notice.',
            'icon'        => 'fa-solid fa-couch',
            'accent'      => 'Fresh cabin finish',
            'highlights'  => array('Deep vacuum and compressed-air cleanout', 'Seat, carpet, and mat shampoo options', 'Dashboard, console, door, and trim wipe down', 'Odor refresh and glass cleaning'),
            'included'    => array('Interior inspection and item-safe prep', 'Crevice vacuuming around seats and rails', 'Fabric shampoo or leather-safe conditioning', 'Plastic, vinyl, and trim dressing', 'Interior glass and mirror cleaning', 'Final scent-neutral refresh'),
            'process'     => array('Inspect the cabin and identify stains or delicate materials', 'Remove loose debris with vacuum and compressed air', 'Treat fabric, mats, leather, and trim with safe products', 'Detail vents, console, glass, and all touch points', 'Review the finish with you before we leave'),
            'best_for'    => array('Daily drivers', 'Family SUVs', 'Pet hair cleanup', 'Used car refresh'),
        ),
        'exterior-detailing' => array(
            'type'        => 'service-detail',
            'path'        => '/services/exterior-detailing/',
            'eyebrow'     => 'Exterior Detailing Services',
            'title'       => 'Exterior Detailing Services',
            'short_title' => 'Exterior Detailing',
            'lead'        => 'A careful exterior wash, decontamination, shine, wheel cleaning, tire dressing, and paint-safe protection for a clean gloss that lasts.',
            'icon'        => 'fa-solid fa-car-on',
            'accent'      => 'Gloss and protection',
            'highlights'  => array('Foam pre-soak and hand wash', 'Wheel, tire, and trim detailing', 'Paint-safe drying and protection', 'Glass, mirrors, and final touch-up'),
            'included'    => array('Bug, grime, and road-film pre-treatment', 'Two-bucket hand wash process', 'Wheel face and tire cleaning', 'Door jamb wipe down', 'Spray wax or sealant option', 'Exterior glass polish and final inspection'),
            'process'     => array('Pre-rinse and loosen dirt safely', 'Wash body panels with soft mitts and clean towels', 'Detail wheels, tires, trim, emblems, and glass', 'Apply shine and paint protection', 'Walk around the vehicle for final quality control'),
            'best_for'    => array('Weekly maintenance', 'Road trip cleanup', 'Weather protection', 'Gloss restoration'),
        ),
        'complete-detailing' => array(
            'type'        => 'service-detail',
            'path'        => '/services/complete-detailing/',
            'eyebrow'     => 'Complete Detailing Service',
            'title'       => 'Complete Detailing Service',
            'short_title' => 'Complete Detailing',
            'lead'        => 'Our full-service detail combines interior restoration and exterior protection into one premium appointment at your home, office, or workplace.',
            'icon'        => 'fa-solid fa-wand-magic-sparkles',
            'accent'      => 'Full vehicle reset',
            'highlights'  => array('Interior and exterior detail together', 'Paint shine with protected finish', 'Cabin, trunk, mats, glass, wheels, and trim', 'Ideal before sale, events, or seasonal care'),
            'included'    => array('Full interior vacuum and wipe down', 'Seat, carpet, and mat cleaning', 'Exterior hand wash and dry', 'Wheel, tire, trim, and jamb detail', 'Spray wax or paint sealant', 'Final inspection and finishing touch'),
            'process'     => array('Confirm vehicle condition and priority areas', 'Complete interior deep clean', 'Wash and decontaminate exterior surfaces', 'Protect paint, trim, and tires', 'Review every panel and touch point before handoff'),
            'best_for'    => array('Busy professionals', 'Pre-sale vehicles', 'Seasonal resets', 'Showroom-ready finish'),
        ),
        'fleet-detailing' => array(
            'type'        => 'service-detail',
            'path'        => '/services/fleet-detailing/',
            'eyebrow'     => 'Fleet Detailing Services',
            'title'       => 'Fleet Detailing Services',
            'short_title' => 'Fleet Detailing',
            'lead'        => 'Reliable recurring mobile detailing for company cars, vans, trucks, and teams that need clean vehicles without slowing down operations.',
            'icon'        => 'fa-solid fa-truck-fast',
            'accent'      => 'Business-ready vehicles',
            'highlights'  => array('Scheduled on-site fleet care', 'Consistent exterior and interior standards', 'Flexible maintenance plans', 'Great for sales, service, and delivery teams'),
            'included'    => array('Fleet walk-through and vehicle count', 'Maintenance wash or complete detail options', 'Interior wipe down and vacuum packages', 'Exterior wash, tires, glass, and trim', 'Recurring schedule coordination', 'Simple custom quote by vehicle mix'),
            'process'     => array('Review your fleet size and service goals', 'Build a service checklist by vehicle type', 'Schedule recurring on-site appointments', 'Detail vehicles in batches with consistent standards', 'Adjust the plan as your fleet changes'),
            'best_for'    => array('Small business fleets', 'Delivery vehicles', 'Sales teams', 'Service trucks'),
        ),
        'mobile-rv-detailing' => array(
            'type'        => 'service-detail',
            'path'        => '/services/mobile-rv-detailing/',
            'eyebrow'     => 'Mobile RV Detailing Services',
            'title'       => 'Mobile RV Detailing Services',
            'short_title' => 'RV & Camper Detailing',
            'lead'        => 'Mobile detailing for RVs, campers, travel trailers, vans, and oversized vehicles that need careful cleaning where they are parked.',
            'icon'        => 'fa-solid fa-caravan',
            'accent'      => 'Large vehicle care',
            'highlights'  => array('Exterior wash for large vehicles', 'Interior living-area refresh', 'Glass, wheels, trim, and storage areas', 'Custom quote based on size and condition'),
            'included'    => array('Size and condition review', 'Exterior wash and brightening', 'Interior vacuum and surface clean', 'Cabinet, dash, glass, and floor attention', 'Trim and tire finishing', 'Custom add-ons for oxidation or heavy buildup'),
            'process'     => array('Confirm parking access and vehicle size', 'Pre-treat exterior grime and high-contact areas', 'Clean interior zones from cockpit to living space', 'Finish wheels, glass, trim, and storage areas', 'Review any recommended maintenance add-ons'),
            'best_for'    => array('RVs', 'Travel trailers', 'Camper vans', 'Work vans'),
        ),
        'boat-marine-detailing' => array(
            'type'        => 'service-detail',
            'path'        => '/services/boat-marine-detailing/',
            'eyebrow'     => 'Boat & Marine Detailing',
            'title'       => 'Boat & Marine Detailing',
            'short_title' => 'Boat & Marine Detailing',
            'lead'        => 'Marine detailing for boats and watercraft including cleaning, polishing, and protection for surfaces exposed to sun, water, and storage buildup.',
            'icon'        => 'fa-solid fa-ship',
            'accent'      => 'Marine surface care',
            'highlights'  => array('Boat and watercraft cleaning', 'Interior and deck refresh options', 'Oxidation and polishing upgrades', 'Custom quote by size and condition'),
            'included'    => array('Marine condition inspection', 'Exterior hull and deck cleaning options', 'Interior compartment and seating refresh', 'Glass, metal, and trim attention', 'Polish or protection recommendations', 'Final detail review'),
            'process'     => array('Review boat size, access, and condition', 'Pre-treat grime, water spots, and buildup', 'Clean accessible marine surfaces', 'Polish or protect based on the service level', 'Review finish and recommended maintenance'),
            'best_for'    => array('Boats', 'Watercraft', 'Seasonal cleanup', 'Pre-storage detail'),
        ),
    );
}

function washngo_addon_services()
{
    return array(
        'ceramic-coating' => array(
            'type'        => 'addon-detail',
            'path'        => '/add-ons/ceramic-coating/',
            'eyebrow'     => 'Ceramic Coating',
            'title'       => 'Ceramic Coating',
            'short_title' => 'Ceramic Coating',
            'lead'        => 'Add durable gloss, slickness, and paint protection with a ceramic coating service designed to help your vehicle stay cleaner longer.',
            'icon'        => 'fa-solid fa-shield-halved',
            'accent'      => 'Long-lasting paint shield',
            'highlights'  => array('High-gloss hydrophobic protection', 'Helps resist road film and water spotting', 'Great after paint correction', 'Excellent upgrade for daily drivers'),
            'included'    => array('Paint-safe wash and surface prep', 'Clay or decontamination as needed', 'Panel wipe before application', 'Ceramic coating application', 'Cure guidance and aftercare tips', 'Final gloss inspection'),
            'process'     => array('Clean and inspect painted surfaces', 'Prep paint for proper bonding', 'Apply ceramic coating in controlled sections', 'Level and inspect the finish', 'Explain care timing and maintenance'),
            'best_for'    => array('New vehicles', 'Freshly corrected paint', 'Daily drivers', 'Premium protection'),
        ),
        'paint-correction' => array(
            'type'        => 'addon-detail',
            'path'        => '/add-ons/paint-correction/',
            'eyebrow'     => 'Paint Correction',
            'title'       => 'Paint Correction',
            'short_title' => 'Paint Correction',
            'lead'        => 'Reduce swirl marks, oxidation, haze, and light scratches to bring back clarity and depth before sealing or coating your paint.',
            'icon'        => 'fa-solid fa-wand-magic-sparkles',
            'accent'      => 'Clearer paint finish',
            'highlights'  => array('Swirl and haze reduction', 'Gloss restoration', 'Great before ceramic coating', 'Paint-safe machine polishing'),
            'included'    => array('Paint inspection under light', 'Wash and decontamination', 'Test spot and polish selection', 'Single or multi-step correction options', 'Panel wipe and protection recommendation', 'Final gloss review'),
            'process'     => array('Inspect paint and identify defects', 'Decontaminate paint before polishing', 'Perform a test spot for the right polish system', 'Correct panels safely and evenly', 'Protect the finish after polishing'),
            'best_for'    => array('Dark paint', 'Swirl marks', 'Lease returns', 'Pre-coating prep'),
        ),
        'headlight-restoration' => array(
            'type'        => 'addon-detail',
            'path'        => '/add-ons/headlight-restoration/',
            'eyebrow'     => 'Headlight Restoration',
            'title'       => 'Headlight Restoration',
            'short_title' => 'Headlight Restoration',
            'lead'        => 'Restore cloudy, yellow, or hazy headlights for a cleaner look and better nighttime visibility.',
            'icon'        => 'fa-solid fa-lightbulb',
            'accent'      => 'Clearer night visibility',
            'highlights'  => array('Haze and yellowing reduction', 'Improved front-end appearance', 'Protective finishing option', 'Fast add-on appointment'),
            'included'    => array('Lens condition review', 'Masking around lights', 'Progressive cleaning and refinement', 'Polish for clarity', 'UV protectant option', 'Final clarity check'),
            'process'     => array('Inspect lens oxidation and condition', 'Protect surrounding paint and trim', 'Refine the lens surface carefully', 'Polish for clarity', 'Add protection to slow future haze'),
            'best_for'    => array('Older vehicles', 'Night drivers', 'Pre-sale detail', 'Safety refresh'),
        ),
        'tint-removal' => array(
            'type'        => 'addon-detail',
            'path'        => '/add-ons/tint-removal/',
            'eyebrow'     => 'Tint Removal',
            'title'       => 'Tint Removal',
            'short_title' => 'Tint Removal',
            'lead'        => 'Safe removal of old, bubbling, faded, or damaged window tint with careful attention to glass and surrounding trim.',
            'icon'        => 'fa-solid fa-eraser',
            'accent'      => 'Clean glass reset',
            'highlights'  => array('Old tint removal', 'Adhesive cleanup', 'Glass-safe process', 'Great before fresh tint installation'),
            'included'    => array('Window tint condition review', 'Careful film removal', 'Adhesive softening and cleanup', 'Glass wipe down', 'Trim-safe working process', 'Final visibility check'),
            'process'     => array('Inspect tint age and condition', 'Warm and loosen film safely', 'Remove film from glass sections', 'Clean adhesive residue', 'Review glass clarity and next-step options'),
            'best_for'    => array('Bubbling tint', 'Faded tint', 'Peeling film', 'Pre-tint prep'),
        ),
        'window-tinting' => array(
            'type'        => 'addon-detail',
            'path'        => '/add-ons/window-tinting/',
            'eyebrow'     => 'Window Tinting',
            'title'       => 'Window Tinting',
            'short_title' => 'Window Tinting',
            'lead'        => 'High-quality window tinting to improve privacy, reduce heat, protect your cabin, and enhance the look of your vehicle.',
            'icon'        => 'fa-solid fa-solar-panel',
            'accent'      => 'Style and heat control',
            'highlights'  => array('Privacy and cleaner appearance', 'Heat and glare reduction', 'Cabin protection support', 'Tint options by vehicle type'),
            'included'    => array('Vehicle glass inspection', 'Tint shade and coverage discussion', 'Glass prep before installation', 'Film application', 'Edge and finish inspection', 'Aftercare guidance'),
            'process'     => array('Confirm tint goals and vehicle glass layout', 'Clean and prep glass surfaces', 'Apply film carefully to selected windows', 'Inspect finish and edges', 'Explain cure time and care steps'),
            'best_for'    => array('Privacy upgrade', 'Heat reduction', 'Cabin comfort', 'Style refresh'),
        ),
        'engine-bay-cleaning' => array(
            'type'        => 'addon-detail',
            'path'        => '/add-ons/engine-bay-cleaning/',
            'eyebrow'     => 'Engine Bay Cleaning',
            'title'       => 'Engine Bay Cleaning',
            'short_title' => 'Engine Bay Cleaning',
            'lead'        => 'A careful engine bay cleaning that removes dirt, dust, grease, and buildup while respecting sensitive components.',
            'icon'        => 'fa-solid fa-gears',
            'accent'      => 'Cleaner under the hood',
            'highlights'  => array('Careful component-safe cleaning', 'Dust, grime, and grease removal', 'Plastic and rubber dressing', 'Great before sale or service visits'),
            'included'    => array('Engine bay inspection', 'Sensitive area protection', 'Controlled cleaning and agitation', 'Detail brushing around accessible areas', 'Plastic and rubber dressing', 'Final wipe down and review'),
            'process'     => array('Inspect visible components and risk areas', 'Cover or avoid sensitive zones', 'Clean with controlled product use', 'Brush and wipe accessible details', 'Dress plastics and review the finish'),
            'best_for'    => array('Pre-sale cleanup', 'Service visit prep', 'Work trucks', 'Weekend vehicles'),
        ),
    );
}

function washngo_location_pages()
{
    return array(
        'dallas-tx' => array(
            'city'          => 'Dallas',
            'state'         => 'TX',
            'title'         => 'Mobile Car Detailing in Dallas, TX',
            'short_title'   => 'Dallas, TX',
            'lead'          => 'Premium mobile car detailing in Dallas for homes, offices, apartments, and workplace parking lots.',
            'neighborhoods' => array('Downtown Dallas', 'Uptown', 'Oak Lawn', 'Lakewood'),
        ),
        'plano-tx' => array(
            'city'          => 'Plano',
            'state'         => 'TX',
            'title'         => 'Mobile Car Detailing in Plano, TX',
            'short_title'   => 'Plano, TX',
            'lead'          => 'Convenient mobile detailing in Plano with interior, exterior, complete detail, and ceramic protection options.',
            'neighborhoods' => array('Legacy West', 'Willow Bend', 'Downtown Plano', 'Prestonwood'),
        ),
        'frisco-tx' => array(
            'city'          => 'Frisco',
            'state'         => 'TX',
            'title'         => 'Mobile Car Detailing in Frisco, TX',
            'short_title'   => 'Frisco, TX',
            'lead'          => 'Detailing for Frisco drivers who want a clean, protected vehicle without waiting at a traditional car wash.',
            'neighborhoods' => array('The Star', 'Stonebriar', 'Phillips Creek', 'Panther Creek'),
        ),
        'mckinney-tx' => array(
            'city'          => 'McKinney',
            'state'         => 'TX',
            'title'         => 'Mobile Car Detailing in McKinney, TX',
            'short_title'   => 'McKinney, TX',
            'lead'          => 'Mobile detailing in McKinney for daily drivers, family vehicles, trucks, and weekend cars.',
            'neighborhoods' => array('Historic Downtown', 'Craig Ranch', 'Stonebridge Ranch', 'Adriatica'),
        ),
        'allen-tx' => array(
            'city'          => 'Allen',
            'state'         => 'TX',
            'title'         => 'Mobile Car Detailing in Allen, TX',
            'short_title'   => 'Allen, TX',
            'lead'          => 'Interior and exterior mobile detailing in Allen with careful service at your driveway or office.',
            'neighborhoods' => array('Twin Creeks', 'Watters Creek', 'StarCreek', 'West Allen'),
        ),
        'richardson-tx' => array(
            'city'          => 'Richardson',
            'state'         => 'TX',
            'title'         => 'Mobile Car Detailing in Richardson, TX',
            'short_title'   => 'Richardson, TX',
            'lead'          => 'Professional mobile car detailing across Richardson for clean cabins, glossy paint, and protected finishes.',
            'neighborhoods' => array('Telecom Corridor', 'Canyon Creek', 'Heights Park', 'Duck Creek'),
        ),
        'garland-tx' => array(
            'city'          => 'Garland',
            'state'         => 'TX',
            'title'         => 'Mobile Car Detailing in Garland, TX',
            'short_title'   => 'Garland, TX',
            'lead'          => 'On-site detailing in Garland for cars, SUVs, trucks, and family vehicles that need a complete refresh.',
            'neighborhoods' => array('Firewheel', 'Duck Creek', 'Lakewood', 'Downtown Garland'),
        ),
        'irving-tx' => array(
            'city'          => 'Irving',
            'state'         => 'TX',
            'title'         => 'Mobile Car Detailing in Irving, TX',
            'short_title'   => 'Irving, TX',
            'lead'          => 'Mobile detailing in Irving and Las Colinas for busy drivers who want premium car care on their schedule.',
            'neighborhoods' => array('Las Colinas', 'Valley Ranch', 'Heritage District', 'Cottonwood Valley'),
        ),
        'arlington-tx' => array(
            'city'          => 'Arlington',
            'state'         => 'TX',
            'title'         => 'Mobile Car Detailing in Arlington, TX',
            'short_title'   => 'Arlington, TX',
            'lead'          => 'Reliable mobile detailing in Arlington with service for personal vehicles, trucks, and small fleets.',
            'neighborhoods' => array('Downtown Arlington', 'Viridian', 'Pantego', 'Dalworthington Gardens'),
        ),
        'fort-worth-tx' => array(
            'city'          => 'Fort Worth',
            'state'         => 'TX',
            'title'         => 'Mobile Car Detailing in Fort Worth, TX',
            'short_title'   => 'Fort Worth, TX',
            'lead'          => 'Premium mobile car detailing in Fort Worth with complete interior, exterior, and protection packages.',
            'neighborhoods' => array('Downtown Fort Worth', 'West 7th', 'Tanglewood', 'Cultural District'),
        ),
    );
}

function washngo_custom_page_routes()
{
    static $routes = null;

    if (null !== $routes) {
        return $routes;
    }

    $routes = array(
        'about' => array(
            'type'    => 'about',
            'path'    => '/about/',
            'eyebrow' => 'About Us',
            'title'   => 'About Wash N Go',
            'lead'    => 'Wash N Go is a mobile car wash and detailing team built around convenience, careful workmanship, and a cleaner finish at your doorstep.',
            'icon'    => 'fa-solid fa-car-side',
        ),
        'services' => array(
            'type'    => 'services-index',
            'path'    => '/services/',
            'eyebrow' => 'Our Services',
            'title'   => 'Mobile Car Detailing Services',
            'lead'    => 'Choose from car detailing, SUV and truck detailing, interior, exterior, complete, fleet, RV, and boat detailing services. We bring the tools, products, and care to your location.',
            'icon'    => 'fa-solid fa-spray-can-sparkles',
        ),
        'add-ons' => array(
            'type'    => 'addons-index',
            'path'    => '/add-ons/',
            'eyebrow' => 'Premium Add-Ons',
            'title'   => 'Car Detailing Add-Ons',
            'lead'    => 'Upgrade your appointment with ceramic coating, paint correction, headlight restoration, tint removal, window tinting, and engine bay cleaning for a sharper finish.',
            'icon'    => 'fa-solid fa-star',
        ),
        'locations' => array(
            'type'    => 'locations-index',
            'path'    => '/locations/',
            'eyebrow' => 'Service Areas',
            'title'   => '10 Mobile Detailing Locations',
            'lead'    => 'We serve drivers across major North Texas locations with convenient mobile car detailing at homes, offices, and workplaces.',
            'icon'    => 'fa-solid fa-location-dot',
        ),
        'gallery' => array(
            'type'    => 'gallery',
            'path'    => '/gallery/',
            'eyebrow' => 'Gallery',
            'title'   => 'Detailing Gallery',
            'lead'    => 'Explore the kind of clean interiors, glossy paint, sharp wheels, and protected finishes our mobile detailing service is built to deliver.',
            'icon'    => 'fa-regular fa-images',
        ),
        'blog' => array(
            'type'    => 'blog',
            'path'    => '/blog/',
            'eyebrow' => 'Car Care Blog',
            'title'   => 'Detailing Tips and Car Care Guides',
            'lead'    => 'Helpful car care advice for keeping your interior fresh, paint protected, headlights clear, and vehicle looking its best between details.',
            'icon'    => 'fa-regular fa-newspaper',
        ),
        'contact' => array(
            'type'    => 'contact',
            'path'    => '/contact/',
            'eyebrow' => 'Contact',
            'title'   => 'Contact Wash N Go',
            'lead'    => 'Tell us about your vehicle and the detailing service you need. Our team will help you choose the right appointment.',
            'icon'    => 'fa-regular fa-envelope',
        ),
        'book-now' => array(
            'type'    => 'book',
            'path'    => '/book-now/',
            'eyebrow' => 'Book Now',
            'title'   => 'Book a Mobile Detailing Appointment',
            'lead'    => 'Reserve a convenient time for interior detailing, exterior detailing, complete detailing, add-ons, or fleet service.',
            'icon'    => 'fa-regular fa-calendar-check',
        ),
    );

    foreach (washngo_core_services() as $slug => $service) {
        $routes['services/' . $slug] = array_merge($service, array(
            'route_slug' => $slug,
            'type'       => 'service-detail',
        ));
    }

    foreach (washngo_addon_services() as $slug => $service) {
        $routes['add-ons/' . $slug] = array_merge($service, array(
            'route_slug' => $slug,
            'type'       => 'addon-detail',
        ));
    }

    foreach (washngo_location_pages() as $slug => $location) {
        $routes['locations/' . $slug] = array_merge($location, array(
            'route_slug' => $slug,
            'type'       => 'location-detail',
            'path'       => '/locations/' . $slug . '/',
            'eyebrow'    => 'Service Area',
            'icon'       => 'fa-solid fa-location-dot',
        ));
    }

    return $routes;
}

function washngo_request_path()
{
    if (defined('WASHNGO_FALLBACK_ROUTE') && WASHNGO_FALLBACK_ROUTE) {
        return trim((string) WASHNGO_FALLBACK_ROUTE, '/');
    }

    $request_path = trim((string) parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH), '/');
    $home_path    = trim((string) parse_url(home_url('/'), PHP_URL_PATH), '/');

    if ($home_path && ($request_path === $home_path || 0 === strpos($request_path, $home_path . '/'))) {
        $request_path = trim(substr($request_path, strlen($home_path)), '/');
    }

    $install_directory = trim(basename(ABSPATH), '/');

    if ($install_directory && ($request_path === $install_directory || 0 === strpos($request_path, $install_directory . '/'))) {
        $request_path = trim(substr($request_path, strlen($install_directory)), '/');
    }

    return $request_path;
}

function washngo_current_custom_page()
{
    global $washngo_current_custom_page;

    return is_array($washngo_current_custom_page) ? $washngo_current_custom_page : null;
}

function washngo_intercept_custom_pages()
{
    $path   = washngo_request_path();
    $routes = washngo_custom_page_routes();

    if (!isset($routes[$path])) {
        return;
    }

    global $washngo_current_custom_page;
    $washngo_current_custom_page = $routes[$path];
    $washngo_current_custom_page['request_path'] = $path;

    status_header(200);
    include get_template_directory() . '/custom-page.php';
    exit;
}
add_action('template_redirect', 'washngo_intercept_custom_pages', 0);

function washngo_custom_page_title($title)
{
    $page = washngo_current_custom_page();

    if (!$page || empty($page['title'])) {
        return $title;
    }

    return $page['title'] . ' | ' . get_bloginfo('name');
}
add_filter('pre_get_document_title', 'washngo_custom_page_title', 20);

function washngo_custom_page_body_classes($classes)
{
    $page = washngo_current_custom_page();

    if (!$page) {
        return $classes;
    }

    $classes = array_diff($classes, array('error404'));
    $classes[] = 'washngo-custom-page';
    $classes[] = 'washngo-custom-page-' . sanitize_html_class($page['type']);

    return $classes;
}
add_filter('body_class', 'washngo_custom_page_body_classes', 20);
