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
## Enjoy !!

## Assignment Description
We want a technical solution that makes us able to quickly add a new payment method with clean code that fulfills the principles of SOLID, each payment method must be able to connect with it and use one of its features (shown below) and also store the result in the database and return the results to the client side.

## Solution:
I used Strategy pattern to resolve the right payment method and encapsulate the object with Facade pattern to improve the usability and readability of the payment method and at the end I used the DTO pattern for the payment response encapsulation. 
![image](https://user-images.githubusercontent.com/22579610/189501172-e8db3c38-80b0-4d03-9c26-6847c1e93921.png)


## API Documentation
https://documenter.getpostman.com/view/8046650/VVdgc6YQ

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
