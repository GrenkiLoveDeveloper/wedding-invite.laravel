FROM php:8.3-fpm
ARG user
ARG uid

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libzip-dev \
    libpq-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Install php extensions installer
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/

# Install LDAP
RUN install-php-extensions ldap

# Install PHP extensions
RUN docker-php-ext-install pdo_pgsql pgsql mbstring exif pcntl bcmath gd zip soap

# Install IMAP
RUN apt update && apt install -y libc-client-dev libkrb5-dev && rm -r /var/lib/apt/lists/*
RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl  \
    && docker-php-ext-install imap  \
    && docker-php-ext-enable imap

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# install GNUPG2
RUN apt-get update && apt-get install -y gnupg2
COPY ./openssl.cnf /etc/ssl/

# Add TTK CA certificates
# COPY ./certs/TTK_Ent_CA.crt /usr/local/share/ca-certificates/
# COPY ./certs/TTK_Root_CA.crt /usr/local/share/ca-certificates/
# RUN update-ca-certificates

# Set working directory
WORKDIR /var/www
USER $user