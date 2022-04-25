docker rm "nginx-test" && docker rmi mynginx ; docker build -t "mynginx" . && docker run -i -p 80:80 --name nginx-test mynginx;
