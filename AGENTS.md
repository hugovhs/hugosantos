# Repository Guidelines

## Project Structure & Module Organization

This is a Laravel 12 personal site and blog. Application code lives in `app/`, with controllers in `app/Http/Controllers`, middleware in `app/Http/Middleware`, models in `app/Models`, and mail classes in `app/Mail`. Routes are in `routes/web.php` and `routes/console.php`. Blade templates are under `resources/views`, including public pages, dashboard views, and email templates. Source CSS and JavaScript live in `resources/css` and `resources/js`; compiled/static assets and browser libraries are in `public/assets`. Database files are in `database/`. Tests are split between `tests/Feature` and `tests/Unit`.

## Build, Test, and Development Commands

- `composer install` installs PHP dependencies.
- `npm install` installs Vite, Tailwind, and frontend tooling.
- `composer dev` runs the full local stack: Laravel server, queue listener, logs, and Vite dev server.
- `php artisan serve` starts only the Laravel app.
- `npm run dev` starts only Vite for frontend assets.
- `npm run build` creates production frontend assets.
- `composer test` clears config and runs the Laravel test suite.
- `php artisan migrate` applies database migrations.

## Coding Style & Naming Conventions

Follow Laravel conventions and PSR-4 namespaces. Use 4-space indentation for PHP and Blade control structures. Controllers, models, middleware, and mail classes use `StudlyCase` class names such as `DashboardSession` and `ContactForm`. Database tables and migrations use Laravel-style snake_case plural names, for example `create_subscribers_table`. Blade files should use lowercase, descriptive names such as `resources/views/dashboard/posts/create.blade.php`. Use Laravel Pint for PHP formatting: `./vendor/bin/pint`.

## Testing Guidelines

PHPUnit is configured through `phpunit.xml`. Feature tests belong in `tests/Feature`; isolated logic tests belong in `tests/Unit`. Name test files after the behavior or class under test, ending in `Test.php`. The test environment uses in-memory SQLite, array cache/session stores, and array mail. Run `composer test` before submitting changes.

## Commit & Pull Request Guidelines

Recent commits use short, direct summaries, often in Spanish, for example `funcionalidad para el formulario de contacto`. Keep commit messages concise and behavior-focused. Pull requests should include a brief description, linked issue when applicable, test results, and screenshots for visible UI changes. Note any migration, environment, or asset-build steps reviewers must run.

## Security & Configuration Tips

Do not commit `.env`, secrets, database dumps, or generated logs. Keep environment-specific values in `.env` and document new required keys in the pull request. Validate and sanitize user-facing form changes, especially contact and subscription flows.
