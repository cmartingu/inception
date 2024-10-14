
FROM debian:latest

RUN apt update && apt upgrade && apt install -y \
    php-fpm

CMD ["php-fpm8.2", "-F"]