LARAVEL REST API SAMPLE
--------------------------------------
PHP (Laravel) Developer Challenge

This README would normally document whatever steps are necessary to get the application up and running.
This Api Is working with Mysql.You can run the mysql in xampp server or ect.
Things you may want to cover:

System dependencies
-------------------------------------
LARAVEL 8.0<br>
phpMyAdmin 4.9.2<br>
PHP Version 7.4.8<br>
xampp V3.2.4<br>

composer Update
-------------------------------------------------
Run the command to run composer<br>

composer install<br>
composer require automattic/woocommerce


Database Configuration
-------------------------------------
You can change the .env File in Root
change the  user name and password and db name in mysql sever
DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=<br>
DB_USERNAME=<br>
DB_PASSWORD=<br>

Database Migrations
------------------------------------------
You can Run migration Command below its create DB and create table and Data Seeding<br>

1.php artisan migrate

How to run the API
----------------------------------
Run this command in Your CLI<br>
php artisan serve<br>
php artisan queue:work<br>
System runing with http://localhost:8000

Run API with POSTMAN
---------------------------------------------
Postman is an API platform for building and using APIs. you can download the postman and setup 
https://www.postman.com/downloads/

API End point
-----------------------------------------------

* New User register<br>
    End point: http://localhost:8000/api/register<br>
    Method: POST<br>
    Body<br>
    {<br>
        "email":"test@gmail.com"<br>
        "password":"123"<br>
        "c_password":"123"<br>

    }<br>

    Out Put<br>

    {<br>
    "success": true,<br>
    "data": {<br>
        "token": "1|IAv8tDc1LUyCQqlz3lJhz9oaLNaqCKUMhhDgAQFM",<br>
        "name": "thushara"<br>
    },<br>
    "message": "User register successfully."<br>
    }
-------------------------------------------

    * Login
    End point: http://localhost:8000/api/login 
    Method: POST
    Body
    {
        "email":"test@gmail.com"
        "password":"123"
       }

    Out Put

    {
    "success": true,
    "data": {
        "token": "1|IAv8tDc1LUyCQqlz3lJhz9oaLNaqCKUMhhDgAQFM",<
        "name": "thushara"
    },
    "message": "User register successfully."
    }

-------------------------------------

    * Get Products
    End point: http://localhost:8000/api/products
    Method: GET
    Authorization: Bearer + token
 
    Out Put

    {
    "success": true,
    "data": [
        {
            "id": 70,
            "name": "special cotton shirt for men",
            "price": "15",
            "description": "des"
        },
        {
            "id": 71,
            "name": "high quality men distress skinny blue jeans",
            "price": "90",
            "description": "des"
        },
        ]
           "message": "Products retrieved successfully."
     }