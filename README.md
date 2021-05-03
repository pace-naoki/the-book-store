# The Book Store Project Setup

## Runninng / Development

### Install repository
Install the repository and check dev branch

### Install modules
```composer install```
```npm install```

### DB set up
Create the following database and user

DATABASE: the_book_store
USER: the_book_store
PASSWORD: 6(H"@au6't<RTfqp

### Copy env file
At the document root path
```cp .env.sample .env```

### Migrate & Seeding
```php artisan migrate --seed```
