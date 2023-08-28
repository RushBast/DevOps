# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy your application code to the container
COPY . /var/www/html

# Expose the port your web server runs on
EXPOSE 80

# Define any environment variables if needed
ENV MYSQL_HOST=localhost:3306
ENV MYSQL_USER=root
ENV MYSQL_PASSWORD=root
ENV MYSQL_DATABASE=recipebook

# Start the Apache web server
CMD ["apache2-foreground"]
