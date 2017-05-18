# Docker development environment boilerplate 
### Stack
  - nginx
  - php7.1
  - mysql
  - redis

### Pre requirements
  - docker version 17.03.1-ce, and docker-compose version 1.11.2

### Build process
  - docker-compose up -d

### Composer
#### For Windows
  - docker run --rm -v %cd%/src:/app composer/composer install
#### For Linux
  - docker run --rm -v $(pwd)/src:/app composer/composer install