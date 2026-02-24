# Utiliser PHP officiel avec FPM
FROM php:8.2-cli

# Installer les dépendances système nécessaires
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    && docker-php-ext-install mbstring bcmath zip

# Installer Composer
COPY --from=composer:2.8 /usr/bin/composer /usr/bin/composer

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier tous les fichiers du projet
COPY . .

# Installer les dépendances PHP Laravel
RUN composer install --no-dev --optimize-autoloader

# Donner les droits sur storage et bootstrap/cache
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Exposer le port utilisé par Laravel
EXPOSE 8000

# Lancer Laravel directement (pas besoin de Nginx)
CMD php artisan serve --host=0.0.0.0 --port=8000
