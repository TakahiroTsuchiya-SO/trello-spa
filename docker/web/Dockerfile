FROM ubuntu:20.04
RUN apt-get update && apt-get install -y init && apt-get clean all

RUN apt update \
    && apt install -y curl vim

RUN apt install -y nginx

WORKDIR /root
ENTRYPOINT /usr/sbin/nginx -g 'daemon off;' -c /etc/nginx/nginx.conf