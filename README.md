# LaraStrap Blog

Laravel 8



## Quick Start

**Install dependencies**

```bash
composer install
npm install
npm run dev
```



**Database and `.env` file **

```bash
# Create a MySQL database for the project
# Create .env file to app's root directory
# Copy the .env.example content and save it to .env file

# Set the following config in .env file according to your database credentials

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOUR_DATABASE
DB_USERNAME=YOUR_USERNAME
DB_PASSWORD=YOUR_PASSWORD
```



**Generate encryption key**

```bash
php artisan key:generate
```



**Run migration**

```bash
php artisan migrate
```



**Import users and articles**

```bash
php artisan db:seed
```



**Run server**

```bash
php artisan serve
```

