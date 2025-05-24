# Versão PHP 8.2.12 
FROM php:8.2.12-apache

# Para instalar las dependencias de las bases de datos
RUN docker-php-ext-install mysqli pdo pdo_mysql

#copiar el codigo fuente
COPY ./ /var/www/html/

RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html
    
    
EXPOSE 80

#Arrancar apache

CMD ["apache2-foreground"]

