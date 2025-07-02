# Laravel API Authentication

A backend-only Laravel application providing secure authentication APIs using Laravel Sanctum.

## Quick Start

### Option 1: Using PHP (Local Development)

```bash
# Install dependencies
composer install

# Setup environment
cp .env.example .env
php artisan key:generate

# Setup database
touch database/database.sqlite
php artisan migrate

# Start server
php artisan serve
```

### Option 2: Using Laravel Sail (Docker)

[installing sail into existing applications](https://laravel.com/docs/12.x/sail#installing-sail-into-existing-applications)

The API will be available at `http://localhost:80`