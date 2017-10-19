Jua Katiba ya Tanzania

Development instructions

```bash
#install all dependencies specified in composer.json
$ composer install

#install all dependencies specified in package.json
$ yarn install

#optimize composer dependencies for development
$ composer dev

#optimize yarn dependencies for development
yarn dev

#runs yarn dev, watches all dependencies and recompiles on changes
yarn watch
```

Staging instructions

```bash
#ignore dependencies specified as require-dev
$ composer install --no-dev

$ yarn install

#optimize composer dependencies for production
$ composer deploy

#optimize yarn dependencies for production
#ignores dependecies specified as devDependencies
$ yarn deploy
```
