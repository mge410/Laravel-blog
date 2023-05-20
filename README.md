# Laravel-blog

[![Php cs fixer](https://github.com/mge410/Laravel-blog/actions/workflows/linter.yml/badge.svg)](https://github.com/mge410/Laravel-blog/actions/workflows/linter.yml)
[![Laravel-tests](https://github.com/mge410/Laravel-blog/actions/workflows/test.yml/badge.svg)](https://github.com/mge410/Laravel-blog/actions/workflows/test.yml)

**Запуск проекта**

Клонируем себе репозиторий:  
```git clone https://github.com/mge410/Laravel-blog.git ```  
и переходим в папку с проектом   
```cd Laravel-blog ```

PS. Команду с загрузкой тестовых данных для ролей пользователей выполнять обязательно. Для запуска потребуется запустить [Docker desktop](https://www.docker.com/products/docker-desktop/).


**Запуск проекта с Docker**

| Docker                                                                                                                                                                                     |
|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| **1** Поднимаем контейнер: <br>  ```docker-compose up -d```                                                                                                                                |
| **2** Заходим в контейнер и все следующие команды выполняем в нём: <br>```docker exec -it app_blog bash ```                                                                                |
| **3** Подгружаем зависимости : <br>```composer install ```                                                                                                                                 |
| **4** Копируем настройки env :  <br> Windows ```cp example_config.env .\.env.example.docker ``` <br> Linux  ```cp -r example_config.env /lyceum/.env ```                                   |
| **6** Загружаем миграции для базы данных и наполняем их тестовыми данными <br>```php artisan migrate ``` <br> ```php artisan db:seed --class=RoleSeeder ``` <br> ```php artisan db:seed``` |
| **6** Генерируем ключ   <br>```php artisan key:gen```                                                                                                                                      |
| **7** Запускаем проект: <br> ``` python .\lyceum\manage.py runserver ```                                                                                                                   |


**Запуск без Docker**

Windows:                                                                                                                                                                                                  
**1** Качаем зависимости через composer: ``` composer install```  
**2** Заводим env файл: ```cp .env.example .env```  
**3** Загружаем миграции для базы данных и создаём роли пользователей, artisan сам предложит создать базу, соглашаемся с ним. ```php artisan migrate``` <br>  ```php artisan db:seed --class=RoleSeeder```  
**4** Наполняем базу тестовыми данными  ```php artisan db:seed```   
**5** Генерируем ключ для нашего приложения  ```php artisan key:gen```  
**6** Запускаем сервер  ```php artisan serve```                                                                                                                                                           
