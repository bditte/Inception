FROM debian:buster

RUN apt-get update && apt-get -y upgrade && apt-get install -y mariadb-server


COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./tools /var/www/


EXPOSE 3306

RUN service mysql start && mysql < /var/www/start.sql && rm -f /var/www/startsql;

CMD ["mysqld"]