# Install PHP
```
sudo yum install -y php php-cli php-common php-mbstring php-xml php-curl php-json php-zip php-devel php-opcache php-pdo php-mysqlnd

php -v
```

# Install Composer
```
cd ~
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
sudo mv composer.phar /usr/local/bin/composer
php -r "unlink('composer-setup.php');"

composer -V
```

# Start your Project
```
cd /path/to/Jenkins-Php-Code
composer install
php -S 0.0.0.0:8000 -t public
```
