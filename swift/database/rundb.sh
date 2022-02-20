docker run -it --rm \
  --name hetic-taylor-db \
  -p 3316:3306 \
  -e MYSQL_RANDOM_ROOT_PASSWORD=true \
  -e MYSQL_PASSWORD=queentaytay \
  -e MYSQL_USER=oim \
  -e MYSQL_DATABASE=taylor_swift \
  mysql:5.7.37-debian \
  --character-set-server=utf8mb4 \
  --collation-server=utf8mb4_unicode_ci
