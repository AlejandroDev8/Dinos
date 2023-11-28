# Dinos

Proyecto final para la materia **Desarrollo de Aplicaciones Web (DAW)**, el cual consiste en hacer una red social.
En este caso se optó por tratar de hacer un clon de Instagram a nuestro estilo

## Comenzando 🚀

Estas instrucciones te permitirán obtener una copia del proyecto en tu máquina local para propósitos de desarrollo y pruebas.

### Pre-requisitos 📋

Necesitas tener instalado lo siguiente

* Docker
* WSL
* VSCode
* PHP
* NodeJS
* npm

### Instalación 🔧

Para clonar el repositorio

``` Github
https://github.com/AlejandroDev8/ProyectoDaw-RedSocial.git
```

Para instalar las dependecias de php (tener la carpeta **vendor**)

``` php
composer install
```

**En ese proyecto se está ocupando docker, al igual que *Sail*, entonces siempre vamos a ocupar un comando, el cual es:**

```bash
./vendor/bin/sail
```

**El comando lo puedes acortar solamente a la palabra *sail*, con un *alias*, pero lo tienes que hacer en *WSL* y modificar el archivo *source*, así no tendrás que escribir el comando completo en cada momento y solo tendrás que escribir el *alias* y el resto de instrucciones que quieras hacer.
Tienes que tener en cuenta para que te funcionen todos los comando, debes de tener ejecutando docker y que este la instancia del proyecto iniciada, en otra palabras, el proyecto ejecutandose**

* Debes de copiar el copiar el contenbdido del archivo '.env.example' y pegarlo en otro archivo llamado '.env', o si lo quieres hacer por terminal, sería de la siguiente manera

```bash
cp .env.example .env
```

Para levantar la isntacia de docker (**Levantar el proyecto en localhost**)

```bash
./vendor/bin/sail up
```

* Cuando entres a localhost, te mandará un error, ya que hace falta el **APP_KEY** que neceista Laravel, en este caso la puedes generar desde la página que te muestra el error (en el navegador) y solamente le darías en refrescar

Para tener las dependencias de npm (la carpeta node_modules)

```bash
./vendor/bin/sail npm i
```

Para que se puedan aplicar los estilos de TailwindCSS

```npm
npm run dev
```

También debes de correr las migraciones

```bash
./vendor/bin/sail artisan migrate
```

## Construido con 🛠️

* [Laravel](https://laravel.com/) - El framework web usado
* [Blade](https://laravel.com/docs/8.x/blade) - Motor de plantillas
* [TailwindCSS](https://tailwindcss.com/) - Framework de desarrollo de estilos CSS

## Autores ✒️

* **Alejandr Olvera** - *Trabajo Inicial* - [AlejandroDev8](https://github.com/AlejandroDev8)

## Expresiones de Gratitud 🎁

* Comenta a otros sobre este proyecto 📢
* Invita una cerveza 🍺 o un café ☕ a alguien del equipo.
* Da las gracias públicamente 🤓.
* Profesor Juan de la Torre.
