FROM php:8.2-apache

# Set document root ke folder public Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Aktifkan mod_rewrite untuk Laravel
RUN a2enmod rewrite

# Install dependensi yang dibutuhkan (termasuk PostgreSQL untuk Supabase)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    git \
    nodejs \
    npm \
    libpq-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip pdo pdo_mysql pdo_pgsql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set folder kerja
WORKDIR /var/www/html

# Salin semua file proyek ke container
COPY . .

# Install Dependensi PHP (Tanpa dev package untuk server production)
RUN composer install --no-dev --optimize-autoloader

# Install Dependensi Node dan Build Tailwind CSS
RUN npm install && npm run build

# Ubah permission folder Laravel agar bisa ditulis
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Jalankan script start saat server hidup
RUN chmod +x /var/www/html/start.sh

EXPOSE 80
CMD ["/var/www/html/start.sh"]
