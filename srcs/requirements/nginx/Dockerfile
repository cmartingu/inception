
FROM debian:bookworm

RUN apt-get update && apt-get upgrade -y \
    && apt-get install -y nginx openssl apt-utils \
    && rm -rf /var/lib/apt/lists/*

RUN mkdir /etc/nginx/ssl
RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes \
    -out /etc/nginx/ssl/carlos-m.crt \
    -keyout /etc/nginx/ssl/carlos-m.key \
    -subj "/C=ES/ST=Madrid/L=Madrid/O=42 School/OU=carlos-m42/CN=carlos-m/"

COPY default /etc/nginx/conf.d/default.conf

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]