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
git clone https://github.com/natzim/Laraforms.git

cd Laraforms/
```

Install Laravel and Laravel's dependencies

```
composer install
```

Install Laravel Elixir

```
sudo npm install
```

Download frontend dependencies

```
bower install
```

Run gulp to create public resources

```
gulp
```

Rename the example environment file, then edit the settings to match your needs

```
mv .env.example .env

vim .env
```

Run the migrations

```
php artisan migrate
```
