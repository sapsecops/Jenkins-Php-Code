#base image
FROM php:8.1-cli

#setting working dir
WORKDIR /app

#Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy current directory details
COPY . .

#Install dependencies
RUN composer install

#Expose port
EXPOSE 8000

#PHP SERVER
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]

