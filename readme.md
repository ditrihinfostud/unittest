# Deps
- composer require --dev phpunit/phpunit
- composer require --dev symfony/phpunit-bridge
- composer require symfony/maker-bundle --dev
- composer require orm

# Setup entities
- php bin/console make:entity
- (Movie, name, ManyToMany -> Author)
- (Author, name, ManyToMany -> Movie)

# Setup .env file and run migrations

- php bin/console doctrine:database:create
- php bin/console make:migration
- php bin/console doctrine:migrations:migrate

# Test example
- MoviesTest.php

# Running tests
- ./vendor/bin/phpunit tests

# PhpUnit Documentation
- https://phpunit.readthedocs.io/en/9.5/assertions.html
