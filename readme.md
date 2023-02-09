## Build

```shell
docker compose up -d
```

### Config replica

```shell
docker compose exec mongo-node-1 bash

#in container run
sh /replica-set.sh
```

# Run success test

```shell
docker compose exec php php /app/index.php
```