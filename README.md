# Project Setup Guide

## Clone the Repository
```sh
git clone <your-repository-link>
cd <your-project-folder>
```

## Install Dependencies
```sh
composer install
```

## Set Up Environment Variables
```sh
cp .env.example .env
```

## Create Database
1. Open your database management tool (e.g., MySQL, PostgreSQL).
2. Create a new database (e.g., `your_database_name`).
3. Update the `.env` file with the database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
```

## Run Migrations
```sh
php artisan migrate
```

## Seed the Database
```sh
php artisan db:seed
```

## Start the Local Development Server
```sh
php artisan serve
```

Now you can access the application at **http://127.0.0.1:8000** 🚀

