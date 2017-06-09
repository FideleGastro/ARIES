docker run -p 8081:81 --name some-mysql -e MYSQL_ROOT_PASSWORD= -d  mysql

docker run -p 8080:80 --name some-app --link some-mysql:mysql -d  my-php-app