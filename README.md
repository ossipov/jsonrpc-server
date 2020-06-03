# 🛸 JSON-RPC Server

## Requirements

* PHP 7.2+
* Composer
* JSON-RPC Client — https://github.com/ossipov/jsonrpc-client 

## Installation 

```
git clone https://github.com/ossipov/jsonrpc-server.git
cd jsonrpc-server
composer install
cp .env.example .env
php artisan key:generate
```

if you're on Windows run:
```
echo "" >> database\database.sqlite
php artisan migrate:fresh
```

if you're on Windows run:
```
touch database\database.sqlite
php artisan migrate:fresh
```

Server's JSONRPC_TOKEN should match JSONRPC_SERVER_TOKEN at client's side. 
```
JSONRPC_TOKEN=TOKEN
```

Now just run server:
```
php artisan serve --port=8001
```

If port 8001 is not busy by some other proccess server should be availabe at http://127.0.0.1:8001
Now go and setup https://github.com/ossipov/jsonrpc-client
