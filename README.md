# Stack Network

## Create cloned network

~~~bash
docket network create --driver=bridge aston_network
~~~

## Running PHP
~~~bash
docker run -d --name php_server -v "$PWD/web":/var/www/html --network aston_network nanoninja/php-fpm
~~~

## Running Nginx
~~~bash
docker run -d --name nginx_server -v "$PWD/etc/nginx":/etc/nginx/conf.d -v "$PWD/web":/var/www/html --network=aston_network -p 8000:80 nginx
~~~

## Running MySQL
~~~bash
docker run -d --name mysql_server --network=aston_network -e MYSQL_DATABASE=test -e MYSQL_ROOT_PASSWORD=root mysql --default-authentication-plugin=mysql_native_password
~~~

## Running PhpMyAdmin
~~~bash
docker run -d --name myadmin --network=aston_network -e PMA_HOST=mysql_server -p "127.0.0.1:8080":80 phpmyadmin/phpmyadmin
~~~
