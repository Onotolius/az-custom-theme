# AZ Custom Theme (Pulstar Landing)

Custom WordPress theme based on my static "Pulstar" landing page.  
Built to practice WordPress theming and to show how I can quickly adapt an existing HTML/CSS layout to WP.

## Tech stack

- WordPress 6.8.3
- PHP 8.2
- HTML5, CSS3 (Flexbox)

## What this theme shows

- Local WordPress setup (Local by Flywheel)
- Classic theme structure: `header.php`, `footer.php`, `index.php`, `functions.php`
- Moving a static landing page into a WordPress theme
- Custom helpers for assets:
  - `az_asset($path)` – builds correct URLs for theme assets
  - `az_img($file, $alt, $class)` – outputs `<img>` tags from `assets/imgs`
- All images and styles loaded through helpers instead of hardcoded paths

## Installation

1. Download or clone this repository.
2. Copy the `az-custom-theme` folder into your WordPress installation:

   ```text
   wp-content/themes/az-custom-theme
