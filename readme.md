# Laraforms

Laraforms is a simple survey platform with an easy-to-use material design interface.

## Installation

### Dependencies

To be able to install Laraforms, you will need:

- Composer

- NodeJS and npm

### Method

Clone repository

```
git clone https://github.com/natzim/Laraforms

cd Laraforms/
```

Install Laravel and Laravel's dependencies

```
composer install
```

Install node packages (elixir, bower and gulp)

```
sudo npm install
```

Download frontend dependencies

```
node_modules/bower/bin/bower install
```

Run gulp to create public resources

```
node_modules/gulp/bin/gulp.js
```

Rename the example environment file, then edit the settings to match your needs

```
mv .env.example .env

vim .env
```

If using Laravel Homestead, start Homestead and ssh into it

```
homestead up

homestead ssh
```

Run the migrations

```
php artisan migrate
```
