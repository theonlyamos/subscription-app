## Subcription App built with Laravel

- [Click this link to download Postman Collection](https://github.com/theonlyamos/subscription-app/blob/main/public/docs/collection.json).

## Installation

Run the commands below

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

# Generate api documentation
$ php artisan scribe:generate

# Run Local server
$ php artisan serve
```

### Visit [http://localhost:8000/docs](http://localhost:8000/docs) for api documentation when the local server is running
