# Ezoom API

This an API made using [Code Igniter](https://codeigniter.com) to test my skills.

## What is needed?

To run this API you need to have **docker** and **docker-compose** installed.

## How to run

Run the following commands:

```shell
git clone https://github.com/LORDBABUINO/ezoom-api.git
cd ezoom-api
cp php/.env.example php/.env
cp mysql/.env.example mysql/.env
docker-compose up -d
docker container exec ezoom_php php index.php migrate
```

then API will available on port http://localhost:8080/courses .

You also can change the database password editing the .env file on php and mysql directories.

