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