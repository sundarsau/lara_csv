# Generate CSV file in Laravel

This is a simple Laravel 10 application which displays data in a html table with Laravel pagination. It creates some data using Laravel Faker. User can click on download CSV button to download all data in a csv file.

# How To Use

1) Download the repository from https://github.com/sundarsau/lara_csv
2) Extract it into a folder
3) Create a Database in MySQL
4) copy .env.example to .env and update database name, username and password. For example, I used the database lara_demo and updated database details as below:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=lara_demo
    DB_USERNAME=root
    DB_PASSWORD=

5) Run composer install from project root
6) Run php artisan key:generate
7) Run php artisan migrate. This will create Laravel default tables and also creates a new table named "applications". 
8) Run php artisan db:seed. This will create some fake data in applications table.
9) Run php artisan serve
10) In Browser run localhost:8000

# License
This is an MIT license, you can modify the code according to your requirements
