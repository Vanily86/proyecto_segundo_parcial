# Usamos una imagen oficial de PHP con Apache
FROM php:8.2-apache

# Instalamos extensiones necesarias para MySQL (PDO)
RUN docker-php-ext-install pdo pdo_mysql

# Habilitamos el módulo rewrite de Apache (necesario para MVC)
RUN a2enmod rewrite

# Copiamos todo el contenido de nuestro proyecto al servidor
COPY . /var/www/html/

# Configuramos Apache para que apunte a la carpeta /public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Exponemos el puerto 80
EXPOSE 80
