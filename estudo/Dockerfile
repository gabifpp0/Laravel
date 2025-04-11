FROM php:8.2-fpm

# Instalar dependências e extensões
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    zip \
    unzip \
    libonig-dev \
    libxml2-dev \
    libcurl4-openssl-dev \
    default-mysql-client \
    && docker-php-ext-install pdo pdo_mysql bcmath zip mbstring xml curl \
    && docker-php-ext-enable pdo_mysql \
    && echo "extension=pdo_mysql.so" >> /usr/local/etc/php/conf.d/pdo_mysql.ini \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Verificar se pdo_mysql está instalado
RUN php -m | grep pdo_mysql || { echo "pdo_mysql not installed"; exit 1; }

# Instalar o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Definir diretório de trabalho
WORKDIR /var/www

# Ajustar permissões
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www