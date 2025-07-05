# FROM php:7.4-apache

# RUN docker-php-ext-install mysqli


# Usar uma imagem oficial do PHP com Apache
FROM php:8.2-apache

# Atualizar pacotes do sistema para aplicar correções de segurança
RUN apt-get update && apt-get upgrade -y && apt-get clean

# Instalar extensões necessárias para o MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilitar o módulo rewrite do Apache
RUN a2enmod rewrite

# Definir permissões
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html
