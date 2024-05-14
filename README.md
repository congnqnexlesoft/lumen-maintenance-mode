# Lumen maintenance mode
- *Author: https://github.com/rdehnhardt/lumen-maintenance-mode*
- `congnqnexlesoft` clone and update for `Lumen 6.x` and `PHP 7.4`

## How to install

- `PHP 7.4`
```shell
export PATH=/usr/local/Cellar/php@7.4/$(ls /usr/local/Cellar/php@7.4 | head -1)/bin:$PATH
php -v | grep "PHP 7.4"
```

```
composer require congnqnexlesoft/lumen-maintenance-mode
```

## How to configure
In `bootstrap/app.php`, add this instruction in providers

```PHP
$app->register(CongnqNexlesoft\MaintenanceMode\Providers\MaintenanceModeServiceProvider::class);
```
## Response
### Using JSON
- Require config the line below to your `.env` file
```dotenv
## congnqnexlesoft/lumen-maintenance-mode ##
MAINTENANCE_RESPONSE_FORMAT=json
```
### Using View
- Copy these files to your project:
```
resources/views/errors/503.blade.php
storage/framework/.gitignore
```

## Put the application into maintenance mode.

```shell
php artisan down
```

## Bring the application out of maintenance mode.

```shell
php artisan up
```

## IP released for access

In `.env` file

```dotenv
ALLOWED_IPS=999.99.9.999,999.99.9.999,999.99.9.999
```

---

## DevOps
### Release a new version
```shell
sh .ops/release-a-new-version.sh
```
