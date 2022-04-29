FROM debian:buster

RUN apt-get update && apt-get -y upgrade && apt-get install -y mariadb-server


COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./tools /var/www/

EXPOSE 3306

RUN service mysql start && mysql < /var/www/setup.sql && rm -f /var/www/setup.sql;

CMD ["mysqld"]