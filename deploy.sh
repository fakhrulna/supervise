#!/bin/bash

echo "Deploying Supervise Application..."

git pull origin main

composer install --no-dev --optimize-autoloader

php artisan migrate --force

php artisan config:cache
php artisan route:cache
php artisan view:cache

npm install && npm run dev

echo "Deployment completed successfully!"
