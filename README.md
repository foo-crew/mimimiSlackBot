foo
---

Run Composer commands
---

```
docker run --rm --interactive --tty \
    --volume $PWD:/app \
    --volume $COMPOSER_HOME:/tmp \
    composer install
```

As long as symfony phpunit bridge needs composer installed in the same server, composer it's installed in the php-fpm server too.

StatsD integration
---

Graphite website port: 8082

Graphite writing port: 2003

Grafana website port: 3000 
```
http://0.0.0.0:3000/
```

Default grafana admin user is admin/admin.

Configure the data source to point to graphite container (http://0.0.0.0:8082 - Access: direct)