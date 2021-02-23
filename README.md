## Sobre el Proyecto

Esta es una Prueba Tecnica, presentada por Mario Alberto Guzman Mendoza, para la empresa EVERTEC.

## Requisitos
- PHP = 7.3 o superior
- Extension SOAP para PHP
- 
## Pasos para instalar
-   Clonar el Repositorio
-   copiar el archivo example.env con el nombre .env
-   Configurar el archivo .env con sus datos de base de datos
-   Configurar en el archivo .env las variables 
        DNETIX_LOGIN="your login here"
        DNETIX_TRANKEY="your TRANKEY here"
        DNETIX_URL="your URL here"
-   Importante Configurar la variable APP_URL correctamente con el dominio usado aunque sea localhost
-   composer install
-   Ejecutar las migraciones y los seed: php artisan migrate --seed
-   npm install && npm run dev

## Testing

Este proyecto cuenta con pruebas de test Automatico
