docker run --name it-academy-project -d \
    -p 88:80 \
    -p 8822:22 \
    --restart unless-stopped \
    --volume /home/bootcamp/Larproject/laravel-intro:/var/www/html \
    --network=laravel_intro_network\
    amoraresco/it-academy-project:latest \

