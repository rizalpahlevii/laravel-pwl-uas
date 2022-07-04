## :rocket: PWL UAS

## System Requirement

-   PHP Version 8.1 or Above
-   Composer
-   Git
-   Node.Js / NPM

## Installation

1. Open the terminal, navigate to your directory (htdocs or public_html).

```bash
git clone https://github.com/rizalpahlevii/laravel-pwl-uas.git
cd laravel-pwl-uas
composer install
npm install
```

2. Setting the database configuration, open .env file at project root directory

```
DB_DATABASE=**your_db_name**
DB_USERNAME=**your_db_user**
DB_PASSWORD=**password**
```

3. Install Project

```bash
npm run dev
php artisan cache:clear
php artisan config:clear
php artisan key:generate
php artisan migrate:fresh --seed
```
