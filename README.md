Welcome to Propertybook practical skills assessment project created by Tatenda Marvelous Chimusoro.

The system is a single page web based application which is powered by Laravel PHP framework version 9.

The page contains multiple sections which display dynamic information from the database as well as dynamic pictures.

---

Prerequisites:

1. php version 8.1.0 and above.
2. Composer

---

Below are some steps to get started with the system:

1. Clone the repository to your local machine
2. Open your teminal and run

   ```
   composer install
   ```

   to install the project's dependences
3. Run

   ```
   cp .env.example .env
   ```

   to generate  the .env file
4. Set up your .env file as well as the database credentials and run

   ```
   php artisan key:generate
   ```

   to generate the application key.
5. Run

   ```
   php artisan migrate --seed
   ```

   you will be prompted to create the database with the name specified in your .env file. Press y and press enter
6. Run

   ```
   php artisan db:seed AuthSeeder
   ```

   **ONCE** to create the default admin credentials which are:

   ```
   email: admin@propertybook.co.zw
   ```

   ```
   password: password
   ```
7. Run

   ```
   php artisan storage:link
   ```

   to be able todisplay the uploaded images

   ```
   php artisan serve
   ```
8. Run

   ```
   php artisan serve
   ```

   then go to your browser and type the address

   ```
    127.0.0.1:8000 
   ```

   and enjoy the application.
9. To edit the website content go to

   ```
    127.0.0.1:8000/admin
   ```

   you will be redirected to the login page where you will enter the crendentials mentioned on item 5

Other useful commands:

1. ```
   php artisan db:seed HeroSeeder
   ```

   to seed the hero section only.
2. ```
   php artisan db:seed About
   ```

   to seed the about section only.
3. ```
   php artisan db:seed ServiceSeeder
   ```

   to seed the services section only.
4. ```
   php artisan db:seed PriceSeeder
   ```

   to seed the pricing section only.
5. ```
   php artisan db:seed FooterSeeder
   ```

   to seed the footer section only.

**ENJOY!!!!!**

*Done by Tatenda Marvelous Chimusoro*

---
