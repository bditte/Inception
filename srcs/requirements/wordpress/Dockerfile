FROM debian:buster

RUN	apt-get update && apt-get -y upgrade && apt-get -y install php7.3 php-mysqli php-fpm wget sendmail

EXPOSE 9000

COPY ./config/www.conf /etc/php/7.3/fpm/pool.d
COPY ./tools /var/www/

RUN chmod 777 /var/www/setup.sh

ENTRYPOINT ["/var/www/setup.sh"]

CMD ["/usr/sbin/php-fpm7.3", "--nodaemonize"]