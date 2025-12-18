# Copilot / AI agent instructions for this repository

Purpose
- Help code-writing agents be immediately productive in this Laravel+Filament codebase.

Quick start (what humans/agents should run)
- Install PHP deps: `composer install` (or run `composer run setup` to run the project setup script).
- Install JS deps: `npm install` then `npm run dev` (or `npm run build` for production assets).
- Typical local dev (mirrors `composer.json` scripts):
  - `composer run dev` (starts `php artisan serve`, `queue:listen`, `pail`, and `vite` concurrently)
  - `php artisan migrate` to apply DB migrations
- Run tests: `composer run test` (runs `php artisan test` — phpunit configured to use in-memory sqlite in `phpunit.xml`).

Big picture architecture (what to know)
- This is a Laravel app (PSR-4 `App\` namespace). Key folders:
  - `app/Models` — Eloquent models (one model per file). Example: `app/Models/Kontak.php` uses a `boot` hook to enforce a single active `Kontak` record.
  - `app/Http/Controllers` — web controllers referenced from `routes/web.php` (routes follow `Controller::class, 'method'` patterns and use named routes like `berita.detail`).
  - `app/Filament/Resources` — Filament admin resources (each resource lives in its own folder; see plural folders such as `Kontaks/`, `Beritas/`). Filament controls internal admin UIs and CRUD flows.
  - `database/migrations` — migrations create schema. Follow naming/date conventions already present.
  - `resources/views` and `public/` — front-end views and built assets via Vite.

Project-specific conventions and important patterns
- Filament: Admin screens are implemented under `app/Filament/Resources`. When adding admin UIs, add both the Resource class and related Forms/Tables inside the resource folder.
- Model conventions:
  - Models often set `protected $table` explicitly (e.g., `Kontak` uses `protected $table = 'kontak'`).
  - Use `protected $fillable` and `protected $casts` consistently.
  - Business rules may live in model lifecycle hooks. Example: `app/Models/Kontak.php` flips `is_active` on others when one is saved — preserve this logic if you change the model or create seeders.
- Routing: `routes/web.php` uses controller-based routes and named routes. Patterns to follow: `index` for lists, `detailBerita`/`{slug}` for single pages.

Build / developer workflows (non-obvious details)
- Dev orchestration is done via composer scripts in `composer.json`:
  - `composer run setup` performs a full setup sequence (composer install, env copy, migrate, npm install, build)
  - `composer run dev` runs multiple services concurrently (server, queue listener, pail, vite). Use this for integrated local development.
- Asset pipeline: uses Vite (`npm run dev` / `npm run build`). See `package.json` for scripts and `laravel-vite-plugin` in deps.
- Tests: `phpunit.xml` is configured for in-memory sqlite; tests expect to run without a local DB. Use `composer run test`.

Integration points / external dependencies
- Filament (admin), Laravel core, `laravel/pail`, `laravel/pint`, Vite and Tailwind for front-end. Queue workers and `php artisan queue:listen` are used in dev script.
- No external API keys or third-party SDKs are obvious from top-level files, but check `config/` for service-specific env keys before adding integrations.

How to make safe edits (rules for AI agents)
- Preserve existing model lifecycle side-effects. Example: do not remove the `static::saving` handler in `app/Models/Kontak.php` without replacing its behavior.
- When adding migrations, follow the existing naming and column conventions (see `database/migrations/*_create_*.php`).
- Filament resources should remain inside `app/Filament/Resources/<PluralName>/` and register with Filament's auto-discovery (avoid moving files outside that folder).
- Keep route names stable. Front-end code and templates reference named routes (see `routes/web.php`), so refactors should preserve route names or add redirects.

Examples from the codebase
- Single-active-contact rule: `app/Models/Kontak.php` uses `protected $casts = ['is_active' => 'boolean']` and a `boot()` method that sets `is_active = false` on other records when one is saved.
- Route example: `routes/web.php` defines `Route::get('/berita/{slug}', [BeritaController::class, 'detailBerita'])->name('berita.detail');` — controllers use `index` and `detail*` naming.
- Dev script: see `composer.json` -> `scripts.dev` and `package.json` -> `scripts` for how the project expects to be run.

If you need more context
- Open these files first: `app/Models/Kontak.php`, `routes/web.php`, `composer.json`, `package.json`, and the folders under `app/Filament/Resources/`.
- Ask for the desired change's scope (UI vs backend vs migration) before making edits that touch database or routing.

If this file is incomplete or you want specific examples added, tell me which area to expand (tests, Filament resources, or deployment steps).
