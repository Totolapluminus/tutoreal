FROM composer:latest

WORKDIR /var/www/tutoreal

ENTRYPOINT ["composer", "--ignore-platform-reqs"]