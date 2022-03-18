##  ol-skill-test

To install this project, please follow this steps
At first you have to run
`composer i`.
Then you must copy `.env.example` file and rename it to `.env`.
If you are a Windows user, you can run this command `copy .env.example .env`, 
Next you have to set up your database and mail server.

Now you can run `php artisan migrate`.
Now you have to generate your app key using this command `php artisan key:generate`


After that you can run your project using the command `php artisan queue:work` and 
in another terminal you have to run `php artisan serve`.

