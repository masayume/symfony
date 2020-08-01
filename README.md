# symfony

## Setup

### Symfony

```
wget https://get.symfony.com/cli/installer -O - | bash

sudo apt-get install php-ctype
sudo apt-get install php-iconv
sudo apt-get install php-json
sudo apt-get install libpcre3 libpcre3-dev
sudo apt-get install php-intl
sudo apt-get install php-simplexml

symfony check:requirements
```

### Composer

```
sudo apt install curl php-cli php-mbstring git unzip
cd ~
curl -sS https://getcomposer.org/installer -o composer-setup.php
```

verify "Installer Checksum (SHA-384)" in https://composer.github.io/pubkeys.html

```
php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
composer
```

create the symphony application

```
symfony new 01-symphapp --full
  or
/usr/local/bin/composer create-project symfony/website-skeleton /home/masayume/git/symfony/01-symphapp
```

### APACHE

* http://localhost/symphapp/

## The "01-symphapp" application

```
cd ~/git/symfony/01-symphapp
code .
```


# Resources

* [Up & Running With Symfony 4 - Part 1: Setup, Controllers, Twig](https://www.youtube.com/watch?v=t5ZedKnWX9E)
* [Symfony Crash Course - 3h 30](https://www.youtube.com/watch?v=Bo0guUbL5uo)