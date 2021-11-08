co# Clone your project
1-> Go to the folder application using cd command on your cmd or terminal

2->Run composer install on your cmd or terminal

3->Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu

4->Open your .env file and change the database name (DB_DATABASE) to whatever you have, username(DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
By default, the username is root and you can leave the password field empty. (This is for Xampp)
By default, the username is root and password is also root. (This is for Lamp)

5->Run php artisan key:generate

6->Run php artisan migrate

7->Run php artisan serve

8->Go to localhost:8000

# Make migration table

<!-- This creates the table -->
->php artisan make:migration create_books_table

<!-- This migrates the table -->
->php artisan migrate

<!-- This rollbacks and deletes the created tables -->
->php artisan migrate:rollback

<!-- This updates our tables -->
->php artisan migrate:refresh

<!-- Drop all tables and migrate them again-->
->php artisan migrate:fresh

<!-- Migrate and Seed at the same time -->
->php artisan migrate:refresh --seed

# Make seeder

<!-- Create the seed -->
->php artisan make:seeder BookSeeder

<!-- Launch the seed function -->
-> php artisan db:seed

# Clean Laravel Cache

->composer dump-autoload

->php artisan cache:clear

->php artisan config:clear

# Resources

-> ORM Eloquent & Model : https://laravel.com/docs/8.x/eloquent

-> Migrations https://laravel.com/docs/8.x/migrations

-> Validations : https://laravel.com/docs/8.x/validation

-> Eloquent relationships https://laravel.com/docs/8.x/eloquent-relationships#one-to-many

-> Requests and input https://laravel.com/docs/4.2/requests

# Package Install for compiling assets

-> npm install

-> npm run dev

# Creating a new Laravel Project using Breeze Authentication

-> laravel new myProjectName

-> cd myProject

-> create a database (empty)

-> Change .end file to match DB credentials

-> php artisan migrate

-> composer require laravel/breeze --dev

-> php artisan breeze:install