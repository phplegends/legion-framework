#Legion Framework

For install, use the follow command:

```bash
git clone https://github.com/phplegends/legion-framework.git project-name

cd project-name

composer install

php -S localhost:8000 -t web

```


Now, access http://localhost:8000.



#Define your own route

In `app/routes.php`, add the follow code:

```php
$router->get('/my-route', function () {

    return $response->create('Hello World!');
})
```

Test it in  http://localhost:8000/my-route