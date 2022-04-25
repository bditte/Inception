#!/bin/sh

sed -i s/SERVER_NAME/${DOMAIN_NAME}/g /etc/nginx/conf.d/default.conf
sed -i s/CERTS_DIR/${CERTS_DIR}/g /etc/nginx/conf.d/default.conf
sed -i s/TLS_VERSION/${TLS_VERSION}/g /etc/nginx/conf.d/default.conf

sudo nginx -g "daemon off";