# symfony

symfony helloworld and add route for find randam lucky numbers
if you dont want to add route in routes.yaml then install annotations lib

```
composer require annotations
```


for test route pages
http://localhost/symfony/public/
http://localhost/symfony/public/luckynumber
http://localhost/symfony/public/show/abc

if 
http://localhost/symfony/public/luckynumber will not works for you thats mean your .htaccess file is missing
you need to call page as http://localhost/symfony/public/index.php/luckynumber
of install apache-pack lib which will add .htaccess file in your public folder

```
composer require symfony/apache-pack
```


