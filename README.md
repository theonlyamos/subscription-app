## Subcription App built with Laravel
* [Click here to view api
    documentation](https://theonlyamos.github.io/subscription-app/)

- [Click this link to download Postman Collection](https://github.com/theonlyamos/subscription-app/blob/main/public/docs/collection.json).

## Installation
- Setup your database
- copy .env.example to .env
```shell
$ cp .env.example .env
```
- Replace database credentials in .env with yours
- Run the commands below on terminal
```shell
# Clone the repository
$ git clone https://github.com/theonlyamos/subscription-app.git
$ cd subscription-app/

# Install required packages
$ composer install

# Migrate Dabase
$ php artisan migrate

# Seed database tables [Websites, Users]
$ php artisan db:seed

# Publish Vendors
$ php artisan vendor:publish --provider="Knuckles\Scribe\ScribeServiceProvider" --tag=scribe-config
$ cp vendor/knuckleswtf/scribe/config/scribe.php config/
```
- Add `$app->register(\Knuckles\Scribe\ScribeServiceProvider::class);` to
    ``bootstrap/app.php``
```shell
# Generate api documentation
$ php artisan scribe:generate

# Run Local server
$ php artisan serve
```

### Visit [http://localhost:8000/docs](http://localhost:8000/docs) for api documentation when the local server is running

