Install
1. Clone the source code or create new project.
git clone git@github.com:ofaruk0169/omar_blog.git

2. Set the basic config

cp .env.example .env

Edit the .env file and set the database and other config for the system after you copy the .env.example file.

2. Install the extended package dependency.

npm install

npm run production
3. Run the blog install command, the command will run the migrate command and generate test data.
php artisan blog:install
