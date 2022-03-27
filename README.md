<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<p align="center">
 <img width=817px height=100px src="https://beparrot.store/media_shared/banner.png" alt="NubezarTech_Logo_Horizontal">
</p>

<h1 align="center" style="font-family:'Roboto';">BeParrot: Store API</h1>
<h2 align="center" style="font-family:'Roboto'; font-style: italic;">Soluciones Informáticas NubezarTech</h2>

<div align="center">

[![Status](https://img.shields.io/badge/status-active-success.svg)]()
[![GitHub Pull Requests](https://img.shields.io/github/issues-pr/kylelobo/The-Documentation-Compendium.svg)](https://github.com/BeParrotStore/Store_API/pulls)
[![Tests](https://github.com/anuraghazra/github-readme-stats/workflows/Test/badge.svg)](https://github.com/BeParrotStore/Store_API/actions)

</div>

---

<p align="center"> 🤖 Gestión unificada de las comunicaciones con clientes, usuarios y empleados.🏁
    <br> 
</p>

## 📝 Tabla de contenido

- [Instalación](#installation)
- [Configuración del entorno](#enviroment)
- [Despliegue](#deployment)
- [Author](#author)


## 🔧 Instalación <a name = "installation"></a>

Clona el repositorio en tu maquina local.
```
git clone https://github.com/nubezartech/ComunicationsService.git
```

Accede al directorio del proyecto.
```
cd ComunicationsService
```   
Instala las librerias y dependencias mediante composer.
```
composer install
```

## ⛏️ Configura en entorno <a name = "enviroment"></a>

- <b>[ .env.example ]</b>- Archivo de variables de entorno de ejemplo.

Copiar en archivo .env.example en el directorio raíz del proyecto, y renombralo a .env. 
```
cp .env.example .env
```
Configura las variables de entorno: 
  - <b>[APP_ENV]</b>: 
      - PRODUCTION: Para entorno de producción.
      - DEVELOP: Para entorno de desarrollo y pruebas.  
***
- <b>Database configuratión:</b>
  - [BEPPARROT_DB_HOST](#).
  - [BEPPARROT_DB_NAME](#).
  - [BEPPARROT_DB_USER](#).
  - [BEPPARROT_DB_PASS](#).   
***
- <b>Database configuratión:</b>  

  - [RABBITMQ_HOST](#).
  - [RABBITMQ_PORT](#).
  - [RABBITMQ_USER](#).
  - [RABBITMQ_PASS](#).
***
## 🚀 Despliegue al servidor <a name = "deployment"></a>

Una vez desarrolladas las features e incorporadas *(push)* a la rama **"dev"**, se creará una PullRequest a **"main"** mediante GitHub Actions. Ésta quedará pendiente de revisión y una vez aprovada se incorporara´n los cambios a la rama principal *("main")*. A su vez, se desplegará el proyecto a través de GitHub Actions y SSH en el servidor web de producción.


## ✍️ Authors <a name = "authors"></a>

- [@aabadmo4](https://github.com/aabadmo4) - <b>Adan Nahir Abad Mora</b> <br>
<i>CEO y Digital Chief Officer en <a href="http://www.nubezar.tech">Soluciones Informáticas NubezarTech</a></i>

