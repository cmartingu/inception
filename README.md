# Inception 🚀

## Descripción 📜
**Inception** es un proyecto donde se construye una infraestructura completa de contenedores utilizando **Docker** y **Docker Compose**. Este proyecto tiene como objetivo configurar un entorno de desarrollo completo con servicios como bases de datos, servidores web, y otros servicios comunes dentro de un solo contenedor o conjunto de contenedores. El proyecto incluye la configuración de servicios como **NGINX**, **PHP**, **MySQL** y **WordPress**, entre otros.

## Objetivo 🎯
El objetivo principal del proyecto **Inception** es familiarizarse con la creación y administración de contenedores Docker y redes, utilizando **Docker Compose** para orquestar múltiples contenedores. A lo largo de este proyecto se aprenden varios conceptos, tales como:

- **Docker**: Crear y gestionar contenedores.
- **Docker Compose**: Orquestar múltiples contenedores a través de archivos de configuración YAML.
- **NGINX**: Configuración de un servidor web.
- **PHP**: Uso de PHP para la ejecución de scripts en el servidor.
- **MySQL**: Gestión de bases de datos utilizando contenedores Docker.
- **WordPress**: Instalación y configuración de WordPress para gestionar un sitio web dinámico.

## Características ⚙️
- **Docker**: Uso intensivo de contenedores para cada servicio (NGINX, PHP, MySQL, WordPress, etc.).
- **Docker Compose**: Orquestación de todos los contenedores mediante un archivo `docker-compose.yml`.
- **Infraestructura 3 capas**: Separación de responsabilidades en contenedores independientes para mayor flexibilidad y escalabilidad.
- **Configuración de NGINX**: Uso de NGINX como servidor web y proxy inverso.
- **PHP-FPM**: Ejecución de scripts PHP dentro del contenedor.
- **Base de datos MySQL**: Uso de un contenedor para administrar bases de datos.
- **WordPress**: Configuración de WordPress en un contenedor para crear un sitio web dinámico.

## Tecnologías 💻
- **Docker**: Para crear y gestionar contenedores.
- **Docker Compose**: Para la orquestación de contenedores.
- **NGINX**: Servidor web.
- **PHP**: Lenguaje de programación para la ejecución de scripts en el servidor.
- **MySQL**: Sistema de gestión de bases de datos relacionales.
- **WordPress**: Plataforma de gestión de contenido para sitios web.

## Instalación ⚒️

1. **Clona el repositorio**:
    ```bash
    git clone https://github.com/tu_usuario/inception.git
    ```

2. **Accede al directorio del proyecto**:
    ```bash
    cd inception
    ```

3. **Construye y levanta los contenedores** usando Docker Compose:
    ```bash
    docker-compose up --build
    ```

    - Este comando descargará las imágenes necesarias, construirá los contenedores y los pondrá en marcha.

4. **Accede al sitio WordPress**:
    - Una vez que todos los contenedores estén levantados, puedes acceder a tu instalación de WordPress a través del navegador utilizando la dirección:
      ```plaintext
      http://localhost
      ```

5. **Accede a la base de datos MySQL**:
    - Puedes acceder a la base de datos MySQL en el contenedor utilizando:
      ```bash
      docker exec -it mysql_container_name mysql -u root -p
      ```

    - Sustituye `mysql_container_name` por el nombre del contenedor que has configurado para MySQL.
