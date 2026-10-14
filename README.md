# School website

The public website for a school that runs the Vite eSchool portal: home page, about/admission pages, news &
events, gallery, our people, academics, admissions (online application), contact, school calendar and the mobile-app
download page, with its own admin at `/admin`.

**One codebase, one install per school.** CSS Kabba and TopClass each get their own copy of this project, their own
database and their own content. Each install points at its school's portal.

```
www.csskabba.ng      → this project (install 1)  ──API──►  portal.csskabba.ng  (csskabba-portal)
www.topclass…        → this project (install 2)  ──API──►  portal.topclass…    (topclass-portal)
```

## What comes from the portal

Through the portal's API (`/api/v1/website/feed` and `/staff`, protected by a shared key), cached for
`PORTAL_CACHE_MINUTES`:

* school name, motto, logo, address, phones, e-mail (each can be overridden in Admin → Settings → School details);
* the numbers strip (students, staff, classes, subjects);
* class levels and subjects (Academics page);
* public events from the portal calendar (home page and School calendar);
* staff for "Our people" (Admin → People → Add from the portal's staff records — photos are copied here);
* which app the school uses: **Vite Schools** (CSS Kabba-type portal) or **TopClass Schools** (TopClass-type).

If the portal can't be reached, the website keeps working with the last copy it received.

Everything else — pages, slides, news, gallery, people, FAQs, values, partners, app screenshots, messages and
applications — lives in this website's own database.

## Admin

`https://<website>/admin` — sign in with a **portal** e-mail/phone and password. Only portal users with the
**Manage website** permission get in (Super Admin / Admin / Administrator have it after the portal migration;
give it to others under the portal's Roles & permissions). Passwords are checked by the portal and never stored here.

New admission applications and messages appear under Admin → Messages and are e-mailed to the addresses set in
Admin → Settings → School details (needs the `MAIL_*` settings in `.env`).

## Install (each school)

Requirements: PHP 8.2+, MySQL/MariaDB, Composer, the GD extension.

```bash
cp .env.example .env            # then edit it — see below
composer install --no-dev --optimize-autoloader
php artisan key:generate
php artisan migrate --force     # creates the website tables with starter content
php artisan storage:link        # uploaded photos (the site also works without it, more slowly)
```

`.env` for CSS Kabba (TopClass: its own name, URL, database and portal):

```
APP_NAME="Claret Secondary School, Kabba"
APP_URL=https://www.csskabba.ng
DB_DATABASE=csskabba_website
PORTAL_URL=https://portal.csskabba.ng
PORTAL_WEBSITE_KEY=<the same long random value as WEBSITE_API_KEY in the portal's .env>
MAIL_MAILER=smtp               # plus MAIL_HOST, MAIL_USERNAME, MAIL_PASSWORD, MAIL_FROM_ADDRESS
```

On the **portal** (`csskabba-portal/.env`):

```
WEBSITE_API_KEY=<same value as PORTAL_WEBSITE_KEY>
WEBSITE_URL=https://www.csskabba.ng      # adds "School Website" to the portal menu for website admins
```

then `php artisan migrate` on the portal (adds the *Manage website* permission) and `php artisan config:clear`.

Make a key with: `php -r "echo bin2hex(random_bytes(24));"`

### Hosting

* Point the domain (`csskabba.ng` and `www`) at the hosting, and set the document root to this project's
  **`public`** folder (cPanel: Domains → the domain → Document Root, e.g. `/home/user/csskabba-website/public`).
* Install SSL for both names.
* For APK uploads (Admin → Mobile app), raise PHP `upload_max_filesize` and `post_max_size` to about 210M.
* Optional: a cron for Laravel's scheduler is not needed.

### Checking the connection

Admin → Settings → **Portal connection** shows *Connected*, *Using saved copy* or *Not connected* with the reason,
and has a **Refresh from portal now** button. Common answers:

| Message | Fix |
|---|---|
| `PORTAL_URL is not set` | Set it in this website's `.env`, then `php artisan config:clear`. |
| `The website feed is off` | Set `WEBSITE_API_KEY` in the **portal's** `.env`, then `php artisan config:clear` there. |
| `Wrong website key` | The two keys differ. |
| `Portal not reachable` | The portal address is wrong or down; the site keeps using the last copy. |

## Code map

| | |
|---|---|
| `routes/web.php` | public pages (`site.*`), `/admin/login`, admin (`website.admin.*`) |
| `app/Services/Portal/PortalClient.php` | portal API: feed, staff, admin sign-in |
| `app/Services/Website/WebsiteContent.php` | settings, school data, events, images, HTML cleaning |
| `app/Http/Controllers/Website/` | `SiteController` (public), `WebsiteAdminController` (admin) |
| `app/Http/Controllers/Admin/AdminAuthController.php` | sign-in with the portal account |
| `resources/views/website/` | public pages; `website/admin/` admin screens; `layouts/master.blade.php` admin layout |
| `public/website/` | site CSS/JS, icons, Bootstrap and Quill (no CDN needed) |
