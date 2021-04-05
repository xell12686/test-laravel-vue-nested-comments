
## Laravel 5.5 + Vue.js - Nested Comment Sytem

This is a test project to be submitted to Marhian & Sohrab, it will be set to private after the test has been checked.

## Coding Test Instructions:

Create a comment system single-page web application with Laravel 5.5+ and VueJS with the following requirements:
- Assume that there is only one Blog Post that can be commented.
- Only the user’s name and comment text are required to post a comment.
- A comment can be replied with another comment.
- Nested comments are up to 3 layers only
- The page should not refresh when posting a comment.
- Comments must be ordered by latest.
- Make the user interface as beautiful, responsive, and easy-to-use as you can.
- Use MySQL database for storing your data.
- No need to edit, delete, etc of comments.

## How To Run App

- Clone this repository
- Copy .env.example file to .env and edit database credentials to match you mysl server
- Run: composer install
- Run: php artisan key:generate
- Run: php artisan migrate
- Run: php artisan serve
- Open http://127.0.0.1:8000/ in browser
- Login / Register and account
- Add Comments from to popalate database and test app

