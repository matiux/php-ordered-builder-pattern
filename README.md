Builder Pattern implemented in PHP with the ISP (Interface Segregation Principle) to enforce method calls.
======

## Setup for development

```shell
git clone https://github.com/matiux/php-ordered-builder-pattern.git && cd php-ordered-builder-pattern
cp docker/docker-compose.override.dist.yml docker/docker-compose.override.yml
make build-php ARG=--no-cache
make upd
make php-run ARG="php client.php"
```