# Laravel POS Foundations

This project completes IT0049 Technical Formative Assessment 5: **From Zero to Four Pages, Again: Your First Laravel Application**.

## Included pages

- `/` - landing page
- `/about` - project overview
- `/customers` - customer accounts from a static PHP array
- `/users` - user accounts from a static PHP array

The project uses `PageController`, `CustomerController`, and `UserController`. The account views use Blade `@foreach` loops and all pages share the navigation in `resources/views/layouts/app.blade.php`.

## Requirements

- PHP 8.2 or newer
- Composer
- Node.js and npm (optional; only needed if you want to compile front-end assets)

## Setup in VS Code

1. Extract the ZIP and open the extracted `laravel-pos-foundations` folder in VS Code.
2. Open the VS Code terminal in that folder.
3. Install PHP dependencies:

   ```bash
   composer install
   ```

4. Create the environment file and application key:

   ```bash
   copy .env.example .env
   php artisan key:generate
   ```

   On macOS/Linux, use `cp .env.example .env` instead of `copy`.

5. Start the Laravel development server:

   ```bash
   php artisan serve
   ```

6. Open `http://127.0.0.1:8000` in your browser.

## Useful Artisan commands

```bash
php artisan route:list
php artisan about
php artisan serve
```

The environment used to package this project did not include PHP, so the final browser run must be performed on a machine with PHP and Composer installed.
