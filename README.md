# Freestyle

Freestyle is a free web tool that will help you apply the art of freestyle.

## Install

Locate on the root project folder
```
cd /your-path/freestyle/src/L7/
```

Build the current project and run it:

```
docker build -t freestyle .
docker run -d --rm -p 8000:8000 -v "$PWD":/var/www/html --name freestyle-run freestyle
docker exec -it freestyle-run bash
```


Edit .env.dev file with personal data and remove '.dev'
```
mv .env.dev YOUR-PATH/.env
```

Run project (docker shell)
```
composer install
php artisan key:generate
php artisan serve --host 0.0.0.0
```

Open this URL http://localhost:8000


Check the result and if ok stop the container  (out of docker shell)
```
docker stop freestyle-run
```