FROM php:apache

# Install any additional dependencies your PHP app requires
# For example, if you need MySQL support:
# RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy the contents of the app to the container
COPY ./ /var/www/html