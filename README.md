## Blog site
Simple blog site for Polyarix Test task built with Laravel
### Installation
Install all the dependencies with composer
```bash
composer install
```
Create .env file from .env.example and fill database connection strings
```bash
cp .env.example .env
```
Generate a new application key
```bash
php artisan key:generate
```
Run the database migrations
```bash
php artisan migrate
```
Run the development server
```bash
php artisan serve
```
You can now access the server at http://127.0.0.1:8000
