FROM php:8.3-cli

# تثبيت المكتبات المطلوبة
RUN apt-get update && apt-get install -y \
    git curl zip unzip \
    libpq-dev libzip-dev libonig-dev libxml2-dev \
    libsqlite3-dev sqlite3 \
    && docker-php-ext-install pdo pdo_sqlite pdo_mysql pdo_pgsql mbstring zip exif pcntl bcmath

# تثبيت Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# تحديد مسار المشروع
WORKDIR /var/www

# نسخ المشروع
COPY . .

# تثبيت الحزم
RUN composer install --no-dev --optimize-autoloader

# إنشاء ملفات ومجلدات Laravel المطلوبة
RUN mkdir -p /var/www/database \
    && touch /var/www/database/database.sqlite \
    && mkdir -p /var/www/storage/framework/sessions \
    && mkdir -p /var/www/storage/framework/cache \
    && mkdir -p /var/www/storage/framework/views \
    && mkdir -p /var/www/bootstrap/cache \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache /var/www/database || true

# فتح البورت
EXPOSE 10000

# تشغيل التطبيق
CMD sh -c "php artisan optimize:clear && php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=${PORT:-10000}"