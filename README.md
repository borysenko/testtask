
cd docker

docker-compose up

docker-compose exec php composer install

docker-compose exec php php yii init

docker-compose exec php php yii migrate


http://localhost:8106/