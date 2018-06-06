# laravel-test-project
Simple user management system consisting from users section and administrator section.

Here are the steps you need to do for making this project work.

1. Clone the repository
2. Create a virtual host that follows `public` folder
3. Run`composer update`
4. Create a database
5. Create an `.env` file, copying from `.env.example`
6. Change values for DB connection
7. (Optional)Change values MAIL_DRIVER values in order to make "Forgot password" work
8. Run `php artisan key:generate`
9. (Optional) Change `SESSION_DRIVER` from `file` to database
11. Run `php artisan migrate`
12. (Optional) Run `php artisan db:seed --class=UsersSeeder` to populate `users` table with fake data
13. Go to `/register` page and create a new user, then try login/logout
14. Go to `/admin/login` and use default admin - admin@example.com admin123
15. In admin section you can manage the users
