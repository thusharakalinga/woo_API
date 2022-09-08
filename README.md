
## Random K9s API

This exercise involves application logic, consuming 3rd party APIs and developing an API endpoint.<BR>
This README would normally document whatever steps are necessary to get the application up and running. This <BR>Api Is working with Mysql.You can run the mysql in xampp server or ect. Things you may want to cover:<BR>


## Learning Laravel

LARAVEL 8.0<BR>
phpMyAdmin 4.9.2<BR>
PHP Version 7.4.8<BR>
xampp V3.2.4<BR>
## Project Setting UP

Run the command to run composer<BR>
composer install<BR>



### Database Configuration

You can change the .env File in Root. change the user name and password and db name in mysql sever    <BR>DB_CONNECTION=mysql<BR>
DB_HOST=127.0.0.1<BR>
DB_PORT=3306<BR>
DB_DATABASE=<BR>
DB_USERNAME=<BR>
DB_PASSWORD=<BR>

### Database Migrations

You can Run migration Command below its create DB and create table and Data Seeding

1.php artisan migrate

### How to run the API

Run this command in Your CLI
php artisan serve
System runing with http://localhost:8000/api/


## Run API with POSTMAN

Postman is an API platform for building and using APIs. you can download the postman and setup <BR>
https://www.postman.com/downloads/



## API End point
-----------------------------------------------

* New User register<br>
    End point: http://localhost:8000/api/register<br>
    Method: POST<br>
    Form Data /Body<br>
    {<br>
        "email":"test@gmail.com"<br>
        "password":"123"<br>
        "confirm_password":"123"<br>

    }<br>

    Out Put<br>

    {<br>
     "success": true,</br>
    "data": {</br>
        "token": "1|PHaL0R9VP82iAgBfSs6Igr6kf7Kqx0wtjh1B3Ajn",</br>
        "name": "thushara"</br>
    },</br>
    "message": "User created successfully."</br>
    }
-------------------------------------------

    * Login</br>
    End point: http://localhost:8000/api/login </br>
    Method: POST
   Form Data / Body
    {
        "email":"test@gmail.com"
        "password":"123"
       }

    Out Put

    {
     "success": true,
    "data": {
        "token": "2|Wcq1sefHfQgGusLF3V3uTCCvlGNNvFyR4NQemJDM",
        "name": "thushara"
    },
    "message": "User signed in"
    }

-------------------------------------

    * Get Random K9
    End point: http://localhost:8000/api/dogs
    Method: GET
    Authorization: Bearer + token
 
    Out Put

    {
        "success": true,
        "data": "https://random.dog/474feef3-7ccf-4aff-94e5-9ad5a8b65a48.jpg",
        "facts": {
            "fact": "Dog trainers in ancient China were held in high esteem. A great deal of dog domestication also took place in China, especially dwarfing and miniaturization."
        },
        "message": "This File  is Expected Size...!!!!"
     }
## Unit test
you can use the cli and open the project forder
c;\random-k9_Laravel> vendor/bin/phpunit
