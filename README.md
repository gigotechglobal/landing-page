# GIGOTECH GLOBAL NETWORK — Landing Page

This repository contains the Laravel-based landing page for GIGOTECH Global Network.

**Repository:** https://github.com/gigotechglobal/landing-page

**Branches:** `main`, `development`

## Requirements

- PHP 8.3
- Composer
- Node.js (18+) and npm
- MySQL (or SQLite for quick local setups)
- Git

## Quick start (Windows / PowerShell)

1. Clone the repository:

```powershell
git clone https://github.com/gigotechglobal/landing-page.git
cd landing-page
```

2. Install PHP dependencies:

```powershell
composer install
```

3. Install JavaScript dependencies:

```powershell
npm install
```

4. Copy the environment file and configure it:

```powershell
copy .env.example .env
# Edit .env to set DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD, and APP_URL
```

5. Generate the application key:

```powershell
php artisan key:generate
```

6. Create the database and run migrations (MySQL):

```powershell
# create database using your MySQL client, then
php artisan migrate
```

Alternative: use SQLite for quick local testing:

```powershell
set-item -path database\database.sqlite -type file -force
# then set DB_CONNECTION=sqlite and DB_DATABASE=database/database.sqlite in .env
php artisan migrate
```

7. Build assets for local development (Vite):

```powershell
npm run dev
# In another terminal: php artisan serve
```

To run a single combined dev environment you can use the composer `dev` script (it uses `concurrently`):

```powershell
composer run dev
```

To build production assets:

```powershell
npm run build
```

8. Open the site in your browser:

```powershell
php artisan serve --host=127.0.0.1 --port=8000
# Visit http://127.0.0.1:8000
```

## Running tests

Run the test suite with:

```powershell
composer test
# or
php artisan test
```

## Common commands

- Install deps: `composer install` / `npm install`
- Generate key: `php artisan key:generate`
- Run migrations: `php artisan migrate`
- Start app server: `php artisan serve`
- Start Vite dev server: `npm run dev`
- Build assets: `npm run build`
- Run tests: `composer test`

## Git workflow and contributing

- The repo has two long-lived branches: `main` and `development`.
- Recommended flow for feature work:

```bash
# update local branches
git checkout development
git pull origin development

# create a feature branch
git checkout -b feature/your-short-description

# work, stage, commit
git add .
git commit -m "feat: short description"

# push branch and open a Pull Request to `development`
git push -u origin feature/your-short-description
```

- After code review and CI, merge feature branch into `development`. When ready for release, open a PR from `development` into `main` and follow your release process.

- If you need to set the remote:

```bash
git remote add origin https://github.com/gigotechglobal/landing-page.git
```

## Code style and formatting

- This project uses Laravel Pint. Run the formatter before committing PHP changes:

```powershell
vendor\bin\pint --format
```

## Troubleshooting

- Vite manifest / asset errors in Blade: run `npm run build` or `npm run dev` and ensure `APP_URL` matches the served host.
- Migration errors: verify `.env` DB credentials, create the database, and run `php artisan migrate`.
- If assets don't update, clear caches:

```powershell
php artisan view:clear
php artisan route:clear
php artisan config:clear
```

## Useful files

- Environment example: [.env.example](.env.example)
- Routes: [routes/web.php](routes/web.php)
- Main view: [resources/views/welcome.blade.php](resources/views/welcome.blade.php)

## License

This project uses the MIT license (see `composer.json`).

---

If you want, I can also add a CONTRIBUTING.md with a checklist (tests, linting, PR template) and a short section about code ownership and approvals.
