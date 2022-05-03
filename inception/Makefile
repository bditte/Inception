NAME = inception

VOLUME_PATH = /home/bditte/data

all:	${NAME}

${NAME}:
		@grep -qxF '127.0.0.1		bditte.42.fr' /etc/hosts || \
		echo '127.0.0.1		bditte.42.fr' >> /etc/hosts

		mkdir -p ${VOLUME_PATH}/wordpress ${VOLUME_PATH}/mariadb; 
		cd srcs && docker-compose -p ${NAME} up

stop:
		cd srcs && docker-compose -p ${NAME} down
clean: 
	docker stop $$(docker ps -qa);\
	docker rm $$(docker ps -qa); \
	docker rmi -f $$(docker images -qa);\
	docker volume rm $$(docker volume ls -q);	\
	docker network rm mynet;
	rm -rf ${VOLUME_PATH}/wordpress ${VOLUME_PATH}/mariadb; 
re: clean all

.PHONY: ${NAME} all re down clean