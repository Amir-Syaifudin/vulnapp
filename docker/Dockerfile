FROM ubuntu:24.04
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update && apt-get install -y \
    apache2 php8.3 libapache2-mod-php8.3 php8.3-mysql php8.3-sqlite3 php8.3-xml \
    php8.3-curl php8.3-mbstring php8.3-zip curl unzip git && rm -rf /var/lib/apt/lists/*
RUN a2enmod rewrite
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
WORKDIR /var/www/my-laravel-app
EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]