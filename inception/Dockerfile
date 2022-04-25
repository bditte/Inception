FROM alpine:3.14

RUN	apk update 
RUN	apk add openssl curl ca-certificates sudo 
RUN	printf "%s%s%s%s\n" \
    	"@nginx " \
    	"http://nginx.org/packages/alpine/v" \
    	`egrep -o '^[0-9]+\.[0-9]+' /etc/alpine-release` \
    	"/main" \
    	| tee -a /etc/apk/repositories 

RUN	curl -o /tmp/nginx_signing.rsa.pub https://nginx.org/keys/nginx_signing.rsa.pub 
RUN	sudo mv /tmp/nginx_signing.rsa.pub /etc/apk/keys/ 
RUN	sudo apk add nginx@nginx
COPY  nginx.conf /etc/nginx/conf.d/default.conf
RUN   mkdir /home/inception /etc/nginx/ssl
RUN   openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes \
      -out /etc/nginx/ssl/bditte.pem \
      -keyout /etc/nginx/ssl/bditte.key \
      -subj "/C=FR/ST=Paris/L=Paris/O=42/OU=bditte/CN=bditte/"

COPY  index.html  /home/inception/
ENTRYPOINT ["sudo", "nginx", "-g", "daemon off;"]
