NAME = inception

all:	${NAME}

${NAME}: 
		cd srcs && docker-compose -p ${NAME} up

stop:
		cd srcs && docker-compose -p ${NAME} down

clean: 
	docker stop $$(docker ps -qa) && docker rm $$(docker ps -qa) && docker rmi -f $$(docker images -qa) && \
	docker volume rm $$(docker volume ls -q) &&	docker network rm $$(docker network ls -q);

re: clean all

.PHONY: ${NAME} all re down clean