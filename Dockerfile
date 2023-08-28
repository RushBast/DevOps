# Use an official PHP runtime as the base image
FROM php:7.4-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy your PHP application code into the container
COPY ./php/ .

# Expose the port for Apache
EXPOSE 80

# Start the Apache web server
CMD ["apache2-foreground"]
