FROM alpine:3.14

RUN	apk update && apk upgrade && apk add openssl curl sudo 


COPY  ./config/nginx.conf /etc/nginx/conf.d/default.conf
RUN   mkdir /home/inception /etc/nginx/ssl
RUN   openssl req -newkey rsa:4096 \
	  -x509 -sha256 -days 365 -nodes \
      -out ${CERTS_DIR}/bditte.pem \
      -keyout ${CERTS_DIR}/bditte.key \
      -subj "/C=FR/ST=Paris/L=Paris/O=42/OU=bditte/CN=bditte/"

COPY  index.html  /home/inception/

EXPOSE 443

ENTRYPOINT ["sh", "setup.sh"]
