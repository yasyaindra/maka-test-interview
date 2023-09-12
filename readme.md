# Maka Test Interview

# Cara Instal

## Setting Environment

```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=root
DB_PASSWORD=
```

## Instal

```php
composer install
```

# Migrate

```php
php artisan migrate:fresh --seed
```

# Testing

Postman

## Headers

Accept: application/json

Content-Type: application/json

## Route

### Get All Users

```
http://localhost/api/users
```

### Get Single User

```
http://crud-user.test:81/api/users/:id
```

### Store User

```
http://localhost/api/users
```

```json
{
    "name": "John",
    "address": "Jakarta",
    "image": "filename.jpg"
}
```

**Body**

use form-data in Postman

### Update User

```json
http://localhost/api/users/:id?_method=PUT
```

```json
{
    "name": "John (changes)",
    "address": "Jakarta (changes)",
    "image": "filename.jpg"
}
```

### Delete User

```
http://localhost/api/users/:id?_method=DELETE
```

### Get User By Name or Address

```
http://crud-user.test:81/api/users?address=foo&name=bar
```