# Laraforms

Laraforms is a simple survey platform with an easy-to-use material design interface.

## Installation

### Dependencies

To be able to install Laraforms, you will need:

- Composer

- NodeJS and npm

- Bower

- Gulp

### Method

Clone repository

```
git clone https://github.com/natzim/Laraforms.git

cd Laraforms
```

Install Laravel and Laravel's dependencies

```
composer install
```

Install Laravel Elixir

```
npm install
```

Download frontend dependencies

```
bower install
```

Run gulp to create public resources

```
gulp
```

Edit the environment configuration file to match your installation

```
mv .env.example .env

vim .env
```

Run the migrations

```
php artisan migrate
```