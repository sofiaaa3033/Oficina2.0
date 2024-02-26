Instalação do projeto em um ambiente Ubuntu 22.04

1-Instalação do php8.0, use os seguintes comandos no terminal:
sudo apt update
sudo apt install php8.0

2-Instalação do composer, use os seguintes comandos no terminal:
sudo apt update
sudo apt install php-cli unzip
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

3-Instalação do Docker Desktop:
https://www.docker.com/products/docker-desktop/-

4-Instalação do Laravel Sail, use os seguintes comandos no terminal:
composer global require laravel/sail
cd oficina2.0
sail up

5-Clonagem do projeto, use os seguintes comandos no terminal:
git clone git@github.com:sofiaaa3033/Oficina2.0.git








