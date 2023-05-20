# Laravel-blog

[![Php cs fixer](https://github.com/mge410/Laravel-blog/actions/workflows/linter.yml/badge.svg)](https://github.com/mge410/Laravel-blog/actions/workflows/linter.yml)
[![Laravel-tests](https://github.com/mge410/Laravel-blog/actions/workflows/test.yml/badge.svg)](https://github.com/mge410/Laravel-blog/actions/workflows/test.yml)

**Запуск проекта**

Клонируем себе репозиторий:  
```git clone https://github.com/mge410/Laravel-blog.git ```  
и переходим в папку с проектом   
```cd Laravel-blog ```

PS. Команду с загрузкой тестовых данных для ролей пользователей выполнять обязательно. Для запуска потребуется запустить [Docker desktop](https://www.docker.com/products/docker-desktop/).

| **Запуск проекта с Docker**                                                                                                                                                                |
|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| **1** Поднимаем контейнер: <br>  ```docker-compose up -d```                                                                                                                                |
| **2** Заходим в контейнер и все следующие команды выполняем в нём: <br>```docker exec -it app_blog bash ```                                                                                |
| **3** Подгружаем зависимости : <br>```composer install ```                                                                                                                                 |
| **4** Копируем настройки env :  <br> Windows ```cp .\.env.example.docker .env  ``` <br> Linux  ```cp -r .env.example.docker .env ```                                                       |
| **6** Загружаем миграции для базы данных и наполняем их тестовыми данными <br>```php artisan migrate ``` <br> ```php artisan db:seed --class=RoleSeeder ``` <br> ```php artisan db:seed``` |
| **6** Генерируем ключ   <br>```php artisan key:gen```                                                                                                                                      |

| **Запуск без Docker**                                                                                                                                      |
|------------------------------------------------------------------------------------------------------------------------------------------------------------|
| **1** Заводим env файл: <br>  ```cp .env.example .env```                                                                                                   |
| **2** Загружаем миграции для базы данных и создаём роли пользователей : <br>  ```php artisan migrate``` <br>  ```php artisan db:seed --class=RoleSeeder``` |
| **3** Наполняем базу тестовыми данными :  <br>  ```php artisan db:seed```                                                                                  |
| **4** Генерируем ключ для нашего приложения :  <br> ```php artisan key:gen```                                                                              |
| **5** Запускаем сервер : <br>  ```php artisan serve```                                                                                                     |

После проект будет доступен тут ```http://127.0.0.1:8000/```
