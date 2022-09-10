## How To Install

#### First Of All:
- Open your terminal 
``` 
git clone https://github.com/FoxWilliamLucas/dp-app.git
cd dp-app
composer install
cp .env.example .env
php artisan key:generate
```
- Create an empty database for our application
- Fill the database credentials inside .env file
- Return to the terminal
```
php artisan migrate
php artisan db:seed
php artisan serv

```
it will help running applications on the PHP development server url http://lcoalhost:8000 by default

- open your browsre and go to http://lcoalhost:8000
##  Enjoy !!

## API Documentation
https://documenter.getpostman.com/view/8046650/VVdgc6YQ

## Assignment Desctiption
- We want a technical solution that makes us able to quickly add a new payment method with
clean code that fulfills the principles of SOLID, each payment method must be able to connect
with it and use one of its features and also store the result in the database and
return the results to the client side.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
