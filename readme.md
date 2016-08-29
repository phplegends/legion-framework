#Legion Framework

For install, use the follow command:

```bash
git clone https://github.com/phplegends/legion-framework.git project-name

cd project-name

composer install

```

Run the PHP built-in server to test your application:


```bash
php -S localhost:8000 -t web/

```

Now, access [localhost:8000](http://localhost:8000).

#Define your own route

In `app/routes.php`, add the follow code:

```php
$router->get('/my-route', function () {

    return $response->create('Hello World!');
})
```

Test it in  [localhost:8000/my-route](http://localhost:8000/my-route)



The application folder is `web`. You can store your assetics files inside this folder.

