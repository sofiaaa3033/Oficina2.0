Instalação do projeto em um ambiente Ubuntu 22.04

1-Instalação do php8.0
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt install php8.0 php8.0-common php8.0-cli php8.0-fpm php8.0-mysql php8.0-curl  php8.0-zip php8.0-gd php8.0-mbstring php8.0-xml php8.0-bcmath 

2 - Clonagem do projeto: use os seguintes comandos no terminal:
git clone https://github.com/sofiaaa3033/Oficina2.0.git 

3-Instalação das dependencias(dentro da pasta do projeto clonado)
composer update

4-Instalação do Docker Desktop: https://www.docker.com/products/docker-desktop/ - Selecione seu sistema operacional e siga o passo a passo da documentação pra fazer a instalação

5-Instalação do Laravel Sail,  Dentro da pasta do projeto(oficina2.0)
use os seguintes comandos no terminal: composer global require laravel/sail cd
php artisan sail:install







