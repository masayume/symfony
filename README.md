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

## The "01-symphapp" APPLICATION

```
cd ~/git/symfony/01-symphapp
code .
```

* create a controller: ArticleController.php in src/controller

* set up a route to the contoller in config/routes/routes.yaml () 
```index:
    path: /
    defaults: { _controller: 'App\Controller\ArticleController::index' }
```
* to use annotations:
```
composer require doctrine/annotations
```

* to use twig template engine:
```
composer require twig

in ArticleController...
...
return $this->render('articles/index.html.twig');
```

The base.html.twig file in templates is the base.
Add in a new directory "articles" another file that extends that template index.html.twig:

```
{% extends 'base.html.twig' %}

{% block title %} Symphapp articles {% endblock %}

{% block body %}
<h1>Articles</h1>
{% endblock %}
```


# Resources

* [Up & Running With Symfony 4 - Part 1: Setup, Controllers, Twig](https://www.youtube.com/watch?v=t5ZedKnWX9E)
* [Symfony Crash Course - 3h 30](https://www.youtube.com/watch?v=Bo0guUbL5uo)