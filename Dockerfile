# Use an official PHP runtime as the base image
FROM php:8.1-apache

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Install any additional PHP extensions or dependencies if required
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Expose port 80 for the web server
EXPOSE 80
