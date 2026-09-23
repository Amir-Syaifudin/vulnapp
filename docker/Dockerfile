FROM ubuntu:24.04
ENV DEBIAN_FRONTEND=noninteractive

# NOTE: apache2 here is whatever version is current in Ubuntu's live noble
# repo at build time (already patched against the CVE-2024-38473/38474/
# 38475/40725 batch - Ubuntu backports fixes into 2.4.58-1ubuntuN rather
# than bumping to 2.4.60). This container is only meant to exercise the
# framework-layer CVEs (2025-27515, 2024-52301), which don't depend on the
# web server. The Apache-layer CVEs still need a VM installed fresh from
# the old ISO per FASE 1-2, not this Docker image - see chat history for
# why pinning apache2 here via snapshot.ubuntu.com hit a dependency
# conflict with the base image's newer perl-base.
RUN apt-get update && apt-get install -y \
    apache2 php8.3 libapache2-mod-php8.3 php8.3-mysql php8.3-sqlite3 php8.3-xml \
    php8.3-curl php8.3-mbstring php8.3-zip curl unzip git && rm -rf /var/lib/apt/lists/*
RUN a2enmod rewrite
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
WORKDIR /var/www/my-laravel-app
EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]