test: up
	docker compose exec app composer -- exec phpunit tests/
build:
	docker compose build
	touch build
up: build
	docker compose up -d
down:
	docker compose down
	rm build

.PHONY: up down test
