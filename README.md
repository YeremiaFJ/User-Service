UserServiceGIT
==============

Requirement:
- Install XAMPP (https://www.apachefriends.org/download.html).
- Composer Installed (https://getcomposer.org/download/).
- Install node js (https://nodejs.org/en/download/).
- Create a virtual host that point to the public folder of the project.
How to create virtual host -> (https://stackoverflow.com/a/36572751).

How to use:
- Create .env file from '.env.example'. Change few config:
  - APP_NAME : Your app name
  - APP_URL : Your virtual host URL for this Service.
  - Remove all 'DB_' config, except DB_CONNECTION, change from mysql to sqlite
- Create database.sqlite in the database folder of the project.
- Now open command prompt, navigate to your project folder. Run these commands:
  - composer install
  - php artisan key:generate
  - npm install
  - php artisan migrate
- Done.
