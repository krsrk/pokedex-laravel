## About Pokedex: Laravel

El proyecto de Pokedex se construyo a partir de querer documentar y enseñar lo basico que se puedes hacer con Laravel,
pero aprovechando la estructura de datos de los Pokemon.

## Instalación y Ejecución
Clonamos este repositorio:
```
git clone https://github.com/krsrk/pokedex-laravel.git
```

Instalamos las dependencias de Laravel:
```
composer install
```

Instalamos las depedencias de Javascript:
```
npm install
```

Agregamos el archivo de configuración de Laravel:
```
cp .env.example .env
```

Agregamos el app key de Laravel:
```
php artisan key:generate
```

Configuramos Laravel Sail(agregamos el servicio de MariaDb):
```
php artisan sail:install
```

Agregamos nuestro alias de Laravel Sail(opcional):
```
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
```
Levantamos los servicios:
```
sail up -d
```
ó

```
./vendor/bin/sail up -d
```

Ejecutamos las migraciones y los seeders:
```
sail artisan migrate --seed
```

Ejecutamos el server local:
```
sail npm run dev
```

Verificamos en el browser:
```
http://localhost:8090
```

## License

The Pokedex un proyecto bajo la licencia [MIT license](https://opensource.org/licenses/MIT).
