- Собрать Docker образ
docker compose up --build
- Запустить Docker контейнеры в фоне
docker compose up -d
- Посмотреть Docker logs
docker logs <name>
- Дамп базы данных
docker exec docker_mysql mariadb-dump -u root -p'root'  app > backup.sql
- Войти в контейнер mariadb
docker exec -it docker_mysql mariadb -u root -p app 
Enter password: root 
- Посмотреть список контейнеров
docker ps -a
- Остановить все контейнеры
docker stop ${docker ps -a}
- Перезагрузка конфига nginx без остановки Docker контейнера
docker exec <id container> nginx -s reload
- Найти какие-то данные в контейнере
docker inspect <container id> | grap <string>
- Содержание конфига контейнера
docker inspect <name/id>
