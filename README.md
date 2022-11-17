# Laravel Kratos Demo

This is the demo for using [chivincent/laravel-kratos](https://packagist.org/packages/chivincent/laravel-kratos) to authenticate user in Laravel application.

## Usage

```
$ git clone git@github.com:chivincent/laravel-kratos-demo.git
$ composer install
$ cp .env.example .env
$ php artisan key:generate
$ docker compose -f docker-compose.yaml -f docker/compose/kratos-svc.yaml up -d
$ php artisan serve
```

- Access `http://127.0.0.1:4455`, sign up as new user and sign in.
- Open Developer Console in browser

```javascript
const headers = new Headers({
    'accept': 'applicaton/json',
    'conent-type': 'application/json',
})

resp = await fetch('http://127.0.0.1:8000/api/user', { headers, credentials: 'include' })
await resp.json()

resp = await fetch('http://127.0.0.1:8000/api/db-user', { headers, credentials: 'include' })
await resp.json()
```
