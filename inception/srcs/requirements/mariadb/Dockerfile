FROM alpine:3.14

RUN apk update 
RUN apk add openrc mariadb mariadb-common mariadb-client

ENTRYPOINT rc-service mariadb start
