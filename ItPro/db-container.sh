docker run --name it-academy-db -d \
    -p 33069:3306 \
    -e MYSQL_ROOT_PASSWORD=root\
    --restart unless-stopped \
    --network=laravel_intro_network\
    --volume /home/yazan/bootcamp/Larproject/laravel-intro/docker-conteiners/db:/var/lib/mysql \
    mariadb:latest \


