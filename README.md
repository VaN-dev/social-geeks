# social-geeks

## 1. Clone project
```
$ git clone git@github.com:VaN-dev/social-geeks.git
```

## 2. Install vendors and configure app
```
$ composer install
```
## 3. Configure file permissions
```
$ sudo setfacl -R -m u:www-data:rwX -m u:`whoami`:rwX var
$ sudo setfacl -dR -m u:www-data:rwX -m u:`whoami`:rwX var
```
## 4. Create database schema
```
$ php bin/console doctrine:schema:update --force
```

## 5. Load fixtures
```
$ php bin/console doctrine:fixtures:load
```

## 6. You're ready.