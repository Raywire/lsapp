## Title
LSAPP

## Description
This is a blogging app made using Laravel

## Running the API
It's very simple to get the API up and running. First, create the database (and database user if necessary) and add them to the .env file.

```env
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_password
```

Then install, migrate, seed, and run the server:

```php
composer install
php artisan migrate
php artisan serve
```

## Testing Environment
Use this url: http://localhost:8000 or the url on the terminal when you run the app

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
