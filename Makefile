up:
	docker compose up -d

up-build:
	docker compose up -d --build

down:
	docker compose down

reinit:
	make down && make up-build

php:
	docker compose exec php-fpm bash
