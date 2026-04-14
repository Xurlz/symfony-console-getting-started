test: vendor
	composer -- exec phpunit tests/
vendor:
	composer install
clean:
	rm -rf vendor/

.PHONY: test clean
