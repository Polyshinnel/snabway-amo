### Snabway Amo App

Приложение для работы с API Amo CRM

#### Развертывание:

1. Скопировать .env.example
2. Переименовать в .env
3. Указать переменные:
```
DB_PORT=3306
DB_DATABASE=Название бд
DB_USERNAME=Имя пользователя бд
DB_PASSWORD=Пароль от бд

AMO_CLIENT_ID=Данные из интеграции AMO
AMO_CLIENT_SECRET=Данные из интеграции AMO
AMO_REDIRECT_URL=Данные из интеграции AMO
```
4. Произвести миграцию БД
```
php artisan migrate
```
5. Создать пользователя:
```
php artisan manage-user:register Username UserEmail UserPassword
```

#### Авторизация:

Произвести POST запрос по адресу:

/api/auth/login

В теле запроса отправляем JSON c нашим логином и паролем:
```json
{
"email": "example@example.com",
"password": "Password"
}
```

В ответ получаем:
```json
{
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9",
    "token_type": "bearer",
    "expires_in": 3600
}
```
Теперь все запросы подписываем JWT токеном через Bearer:
```
Authorization: Bearer "Полученный токен"
```
