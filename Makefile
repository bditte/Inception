NAME = inception

IMAGES = $(NAME)_nginx $(NAME)_wordpress $(NAME)_mariadb

VOLUMES = wp db

VOLUME_PATH = /home/bditte/data

all:	${NAME}

${NAME}:
		@grep -qxF '127.0.0.1		bditte.42.fr' /etc/hosts || \
		echo '127.0.0.1		bditte.42.fr' >> /etc/hosts

		mkdir -p ${VOLUME_PATH}/wordpress ${VOLUME_PATH}/mariadb; 
		cd srcs && docker-compose -p ${NAME} up

stop:
		cd srcs && docker-compose -p ${NAME} down
clean:	stop 
	docker rmi -f $(IMAGES);\
	docker volume rm $(VOLUMES);	\
	docker network rm mynet; \
	rm -rf ${VOLUME_PATH}/wordpress ${VOLUME_PATH}/mariadb; 
re: clean all

.PHONY: ${NAME} all re down clean stop
