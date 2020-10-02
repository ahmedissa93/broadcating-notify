# broadcating-notify
This is broadcasting  notification using laravel and socket.io.

# How to use it 
- composer install 
- npm install 
- cp .env.example .env
- php artisan key:generate


# How to run noification:
- php artisan server
- node socket

open two tab in browser 
fisrt tab open this http://127.0.0.1:8001/sendMessage

second http://127.0.0.1:8001/

in every refresh will see notification real time using socket 
