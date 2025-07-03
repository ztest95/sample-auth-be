# Laravel API Authentication

A backend-only Laravel application providing secure authentication APIs using Laravel Sanctum.

## Quick Start

### Prerequisites
- PHP 8.4 & composer or Docker

### Option 1: Using Laravel Sail (Docker)

[installing sail into existing applications](https://laravel.com/docs/11.x/sail#installing-sail-into-existing-applications)

1. **Clone the repository:**
    ```bash
    git clone git@github.com:ztest95/sample-auth-fe.git

    cd sample-auth-be
    ```

2. **Run the Application**
   ```bash
   ./run.sh

   # or execute these commands

   docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php84-composer:latest \
    composer install --ignore-platform-reqs

   ./vendor/bin/sail up -d

   ./vendor/bin/sail artisan key:generate

   touch database/database.sqlite

   ./vendor/bin/sail artisan migrate --seed
   ```

### Option 1: Using PHP (Local Development)

1. **Clone the repository:**
    ```bash
    git clone git@github.com:ztest95/sample-auth-be.git

    cd sample-auth-be
    ```

2. **Install dependencies**
    ```bash
    composer install
    ```

3. **Setup Environment**
    ```bash
    cp .env.example .env
    php artisan key:generate
    touch database/database.sqlite
    ```

4. **Start server**
    ```bash
    php artisan serve
    ```

The API will be available at `http://localhost:80/api`