
# ShoppingKart with Laravel

A basic ecommerce website with admin panel.

## Getting started

### Project configuration

Start by cloning this project on your workstation.

The next thing will be to install all the dependencies of the project.

```sh
cd ./laravel-shoppingKart
composer install
```

Once the dependencies are installed, you can now configure your project by creating a new `.env` file containing the environment variables used for development.

```
cp .env.example .env
```

Create database tables using migration command.

```
php artisan migrate
```

### Launch and discover

You are now ready to launch the NestJS application using the command below.

```
php artisan serve
```

You can now head to `http://127.0.0.1:8000/` and see that it works.

## Contributing

Feel free to suggest an improvement, report a bug, or ask something.
