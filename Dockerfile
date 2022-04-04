FROM php:8-fpm

# Copy composer.lock and composer.json
#COPY composer.lock composer.json /var/www/
ENV COMPOSER_ALLOW_SUPERUSER=1
# Set working directory
WORKDIR /var/www

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl

#Install ocrmypdf
RUN apt-get -y update 
RUN apt-get -y install \
    ghostscript \
    icc-profiles-free \
    liblept5 \
    libxml2 \
    pngquant \
    python3-pip \
    tesseract-ocr \
    zlib1g \
    libzip-dev \
    libonig-dev

#Install supervisor
RUN apt-get -y install supervisor

RUN python3 -m pip install --upgrade pip

# RUN pip3 install ocrmypdf

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install zip
RUN docker-php-ext-install exif
RUN docker-php-ext-install pcntl
# RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-webp-dir=/usr/include/  --with-jpeg-dir=/usr/include
# RUN docker-php-ext-install gd

#Install npm, node, vuejs e vue-cli
# RUN curl -sL https://deb.nodesource.com/setup_10.x -o nodesource_setup.sh
# RUN bash nodesource_setup.sh
# RUN apt-get update
# RUN apt-get -y install nodejs
# RUN npm -v
# RUN npm init -y
# RUN npm install vue
# RUN npm install -g vue-cli
# RUN npm i element-ui -S
# RUN npm install maska

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#Install MongoBd Extension
RUN pecl install mongodb && docker-php-ext-enable mongodb

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

# Change current user to www
USER www

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
