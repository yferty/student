<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


#### Поднять миграцию
    php artisan migrate
    таблица студент создается с данными, у всех студентов стедний балл "rating" 0
    чтоб рассчитать средний балл студентов нужно запустить консоль команду:
    php artisan student:rating-up
    
    ## в логике расчет среднего балла студента будет в кроне раз в сутки

#### Зарегистрироватся через интерфейс
    регистрацию через api это уже другая задача
    при регистрации генерится api_token (uuid)
    
#### Роуты
    Все роуты указаны в routes/api.php
    /api/student
    # при необходимости можно убрать префикс "api" в App\Providers\RouteServiceProvider.php
    
    для получение данных (авторизованный пользователь) нужно передать api_token (таблица users) в Baerer Token

##### Сценарии
    rating: коллекция данных имя, фамилия, почта и средний балл
    create: создание студента
    update: обновление данных студента (можно обновлять только имя, фамилия и почту)
    delete: удаление студента (мягкое удаление)
