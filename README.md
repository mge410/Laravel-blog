# Laravel-blog

[![Php cs fixer](https://github.com/mge410/Laravel-blog/actions/workflows/linter.yml/badge.svg)](https://github.com/mge410/Laravel-blog/actions/workflows/linter.yml)

**Запуск проекта**

Первый шаг одинаковый, дальше разные для OC Windows/Linux  
**1** Клонируем себе репозиторий:  
```https://github.com/mge410/Laravel-blog.git ```  
и переходим в папку с проектом   
```cd Laravel-blog ```

Запуск без Docker

 Windows:                                                                                                                                                                                                  
 **2** Качаем зависимости через composer: ``` composer install```  
 **3** Заводим env файл: ```cp .env.example .env```  
 **4** Загружаем миграции для базы данных и создаём роли пользователей, artisan сам предложит создать базу, соглашаемся с ним. ```php artisan migrate``` <br>  ```php artisan db:seed --class=RoleSeeder```  
 **6** Наполняем базу тестовыми данными  ```php artisan db:seed```   
 **7** Генерируем ключ для нашего приложения  ```php artisan key:gen```  
 **8** Запускаем сервер  ```php artisan serve```                                                                                                                                                           
