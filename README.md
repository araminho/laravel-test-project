# laravel-test-project
Simple user management system consisting from users section and administrator section.

Here are the steps you need to do for making this project work.

1. Clone the repository
2. Create a virtual host that follows `public` folder
3. Run`composer update`
4. Create a database
5. Create an `.env` file, copying from `.env.example`
6. Change values for DB connection
7. (Optional) Change `SESSION_DRIVER` from `file` to database
8. Run `php artisan migrate`
9. (Optional) Run `php artisan db:seed --class=UsersSeeder` to populate `users` table with fake data
10. Go to `/register` page and create a new user, then try login/logout
11. Go to `/admin/login` and use default admin - admin@example.com admin123
12. In admin section you can manage the users
