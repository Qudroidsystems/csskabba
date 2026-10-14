<?php

/*
| The school portal this website belongs to (CSS Kabba-type or TopClass-type).
| The website reads school details, numbers, classes, subjects, public events
| and staff from the portal's API, and admins sign in with their portal account.
*/
return [
    // e.g. https://portal.csskabba.ng (no trailing slash)
    'url' => rtrim((string) env('PORTAL_URL', ''), '/'),

    // Same value as WEBSITE_API_KEY in the portal's .env.
    'key' => (string) env('PORTAL_WEBSITE_KEY', ''),

    // Minutes to keep portal data before asking again. The last good copy is
    // kept, so the website stays up if the portal is down.
    'cache_minutes' => (int) env('PORTAL_CACHE_MINUTES', 30),

    // Seconds to wait for the portal.
    'timeout' => (int) env('PORTAL_TIMEOUT', 8),
];
