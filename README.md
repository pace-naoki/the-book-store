# The Book Store Project Setup

## Runninng / Development

### Install repository
Install the repository and check out dev branch

### Install modules
```composer install```<br>
```npm install```

### DB set up
Create the following database and user<br>
If you are using MAMM, you can set up it easily<br><br>

DATABASE: the_book_store<br>
USER: the_book_store<br>
PASSWORD: 6(H"@au6't<RTfqp<br>

### Copy env file
At the document root path<br>
```cp .env.sample .env```

### Migrate & Seeding
```php artisan migrate --seed```

### Application Login Info
Login user is automaticaly created after running seeding.<br><br>

EMAIL: test@gmail.com<br>
PASSWORD: 11111111
