FROM php:8.2-fpm

# Installer les dépendances
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Installer les extensions PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier les fichiers d'application existants
COPY src/ /var/www/html/

# Installer les dépendances de Laravel
RUN composer install

# Exposer le port 9000 pour PHP-FPM
EXPOSE 9000

CMD ["php-fpm"]