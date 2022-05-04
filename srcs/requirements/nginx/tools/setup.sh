#!/bin/sh

sed -i "s/DOMAIN_NAME/${DOMAIN_NAME}/g" /etc/nginx/sites-available/default;
sed -i "s/CERTS_DIR/${CERTS_DIR}/g" /etc/nginx/sites-available/default;
sed -i "s/TLS_VERSION/${TLS_VERSION}/g" /etc/nginx/sites-available/default;

if [ ! -f /etc/ssl/bditte.pem ]; then
openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes \
      -out /etc/ssl/bditte.pem \
      -keyout /etc/ssl/bditte.key \
      -subj "/C=FR/ST=Paris/L=Paris/O=42/CN=${DOMAIN_NAME}/"
fi

exec "$@"