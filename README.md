
# Setup
    1. docker compose up -d --build
    2. Attach Shell the app in `Containers` view
    3. composer install
    4. copy .env.example and rename to .env
    5. place database credential in .env
    6. php artisan key:generate
    7. php artisan migrate
    8. php artisan db:seed
    9. chown -R www-data:www-data /var/www/storage
    10. chown -R www-data:www-data /var/www/bootstrap/cache
    11. chmod -R 775 /var/www/storage
    12. chmod -R 775 /var/www/bootstrap/cache
    13. import postman collection

