# aust-pg-v2
This is a website for AUST programming group


## Requirements
-> WAMP/XAMP/MAMP (for using php and database, currently MYSQL database has been used in the project)

-> Composer (for Laravel)

-> Basic knowledge in using laravel 5.5 (as this project uses laravel 5.5)

## Get project ready to run on PC
1. at first clone/copy all files to destination folder
2. make a .env file at the root
3. copy the .env.example file contains to newly created .env file
4. open cmd and go to the directory location of the project
5. ###### run (without quotation):
        "php artisan key:generate"
6. ###### then run (without quotation):
        "composer install"
    
7. now the project is ready to use.


## Instruction for running with test data
1. create a database user: "homestead"
2. create a database named: "homestead"
3. give permission to the db user on the database

[N.B.: above 3 instuctions can be done by following this page-> https://www.digitalocean.com/community/tutorials/how-to-create-a-new-user-and-grant-permissions-in-mysql]

4. go to the project root directory using cmd
    ###### if you are running this for the first time execute (without quotation):
        "php artisan migrate"
    ###### otherwise run (without quotation):
        "php artisan migrate:refresh"
        
5. ###### now to get testing data run (without quotation):
        "php artisan db:seed"
        
6. two test user will be created:
    ###### a) "email: test@test.com"
    
    "pass: 123456"
    ###### b) email: s@s.com
    
    pass: 123456
