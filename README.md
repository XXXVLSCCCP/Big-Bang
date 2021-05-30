    Здесь начал integration api Laravel and React:
    1. Сделал пример запроса с фронтенда React на Бекенд Laravel
    Ccылка на проект с react где можно проверить соединения:https://github.com/XXXVLSCCCP/React.js-Big-Bang/tree/develop
    4. Для теста был создан контроллер  ExampleController.php
    2. В laravel делается соединения по api для регистрации.
    3. Изменения были в паке api.php, RegisteredUserController.php, Models/User.php и в migration CreateUsersTable
   
    
    В первую очередь проверяем две вещи (в любом терминале, хоть даже в редакторе):
    php -v             установлен ли в системе php (без него вообще ничего не заработает)
    composer -v        установлен ли в системе composer (то же самое что npm, только для php)
    Если пишет версию, значит все нормально, а если знать таких не знает, нужно установить (это не сложно)
    Установка php: https://www.youtube.com/watch?v=GWwhLfTRAV8 (только качаем последнюю 8 версию)
    Установка composer: https://www.youtube.com/watch?v=usMGJEeTTZU

    Перед тем как клонировать проект, рекомендую все таки попробовать установить OpenServer https://ospanel.io/download/
    Настраивать пока не нужно, если понадобится, то потом с настройкой разберемся.
    Установить лучше не на диске С, а там где вам удобно работать с проектами.
    Важно! Путь к OpenServer не должен содержать кириллицу. Идеальный вариант например D:/OpenServer

    Сам проект желательно сразу сохранить в папке domains в OpenServer причем так, чтоб между папкой domains
    и папкой public не было лишних папок, кроме папки проекта:
    Правильно: D:/Openserver/domains/bigbang/public
    Неправильно: D:/Openserver/domains/projects/bigbang/public

    Открываем папку проекта в VSCode или PHPStorm, в терминале:
    composer install               подтянутся зависимости laravel и появится папка vendor
    npm install && npm run dev     подтянутся фронтенд зависимости и появится папка node modules
    cp .env.example .env           в корне появится файл .env
    php artisan key:generate       генерация ключа для .env

    php artisan serve              запускаем сервер (после этого на http://127.0.0.1:8000 у вас должен запустится проект)

    PS: react и фронтенд в папке resources, на файлы с именем bootstrap не обращайте внимания - это не всем известная
    библиотека, а часть laravel 

    


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
