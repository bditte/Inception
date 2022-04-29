FROM debian:buster

RUN	apt-get update && apt-get -y upgrade && apt-get -y install openssl nginx 

COPY  ./config/nginx.conf /etc/nginx/sites-available/default
RUN   mkdir -p /etc/ssl/

EXPOSE 443

COPY  ./config/setup.sh /var/www/
RUN   chmod 777 /var/www/setup.sh

ENTRYPOINT ["/var/www/setup.sh"]


CMD ["nginx", "-g", "daemon off;"]