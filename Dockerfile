# Use a imagem PHP oficial
FROM php:latest

# Diretório de trabalho no contêiner
WORKDIR /var/www/html

# Instale o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copie o arquivo composer.json para o contêiner
COPY ../composer.json /var/www/html/composer.json

# Instale as dependências usando o Composer
RUN composer install

# Copie a pasta vendor para um diretório diferente no contêiner
RUN cp -a vendor /var/www/html/app_vendor

# Exponha a porta 80
EXPOSE 80

# Comando para iniciar o servidor web
CMD ["php", "-S", "0.0.0.0:80"]

