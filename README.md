# Examen de Aptitudes Adestra - EJERCICIOS  ![Status badge](https://img.shields.io/badge/status-%20terminado-green) 

## Comenzando 🚀
NOMBRE: Jose Alfredo Dzul Hau
FECHA: 25 de Febrero de 2022
<BR></BR>
### Requisitos 📋
1. Xampp V3.2.4
2. PHP
3. MYSQL

### Instalación 🔧
1. Clona este proyecto.
2. Ve a la carpeta
`C:\xampp\htdocs`
<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/156190734-e93a6838-a48b-4dd7-9144-c3fff5c2debb.png)
3. Crea una Carpeta llamada Examen y pega todos los Archivos dentro de la carpeta
`C:\xampp\htdocs\Examen`
<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/156190849-5b780257-edf6-48db-93af-cc9dc2d0c3a7.png)
4. Crear base de datos en ``phpmyadmin`` llamado "depositos"
<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/156191665-d70010af-dbaf-4b60-9efd-91d6ef8f8f0a.png)
6. Importar ``depositos.sql`` a la base de datos recién creada en el paso 4
<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/156191840-1dd7c4a8-d361-4cd9-ad5d-f81b0bb128af.png)
9. Configurar la conexión a la base de datos en `conexion.php` (está dentro de la carpeta config)
<BR></BR>
![conexion a base de datos depositos](https://user-images.githubusercontent.com/70233261/156192133-642bbb10-4990-40de-b844-75882483bcac.png)
10. Corre el ambiente local, ingresando en tu navegador de preferencia y teclear
`http://localhost/Examen/`
## 🛠 Despliegue
1. Una vez instalado todo lo anterior, podemos ver nuestro proyecto funcionando
<BR></BR>
✨ a) Se proporciona el archivo ASCII RPE.txt que contiene los registros de depósitos realizados a una determinada cuenta bancaria. El archivo contiene las siguientes líneas:
0010030000150311130525
0050020000180511180230
0140045000230811160812
2. Creamos el Archivo txt llamado ASCII RPE.txt dentro de la carpeta llamada Examen en htdocs
<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/156192822-cd0afe10-250e-4dfe-b9d0-56c12cc51eba.png)
<BR></BR>
2. Creamos el código para leer los registros que contiene el archivo txt y guardarlos en la tabla llamada "depositos" de mi BD.
<BR></BR>
![Insertar datos](https://user-images.githubusercontent.com/70233261/156193341-2c0ca946-15a5-4092-b8b6-2e2dea34562e.png)
<BR></BR>
3. Guardamos los registro en la tabla depositos
<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/156193621-d6ffbdd0-9129-4c7e-8ab1-6f77ababe9ac.png)
<BR></BR>
✨ b) Se tiene la siguiente URL:
Guardar.php?nombre=Erik+Castillo&email=erik%40yahoo.com&gustos[]=Ver+la+tv&gustos[]=Salir+al+cine&gustos[]=Jugar+Futbol
Realiza en PHP y MySQL el script que inserte los datos en una tabla con los siguientes campos
Idusuario(auto_incrementeal) / nombre / email / gustos
<BR></BR>
1. Creamos el código para guardar los registros que contiene la URL y guardarlos en en la tabla llamada "datos_url" de mi BD.
<BR></BR>
![url insertar datos](https://user-images.githubusercontent.com/70233261/156194031-0e93107c-7150-418d-9cff-3e1c1a7c43f4.png)

2. Guardamos los registro en la tabla datos_url
<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/156194131-4685a976-9d3e-48ff-b7b5-0c8b3484761d.png)
<BR></BR>
✨ c) Realiza un algoritmo que imprima los siguientes números:
1 3 6 10 15 21 28 36 45 55 66 78 91 105
<BR></BR>
1. Creamos el código para la sucesión númerica
<BR></BR>
![sucesión númerica](https://user-images.githubusercontent.com/70233261/156417412-8a287f74-4bc7-4f52-b6ad-9ceb4201e625.png)

<BR></BR>
![image](https://user-images.githubusercontent.com/70233261/156417488-5b21d5d4-41af-4e77-b1f9-563354319cd2.png)


## Licencia 📄

Este proyecto está bajo la Licencia (Tu Licencia) - mira el archivo [LICENSE.md](LICENSE.md) para detalles

## Autores ✒️

_Menciona a todos aquellos que ayudaron a levantar el proyecto desde sus inicios_

* **Jose Alfredo Dzul Hau** - *Trabajo Inicial*
* **Jose Alfredo Dzul Hau** - *Documentación*
---
⌨️ con ❤️ por [JAlfredoDzulHau](https://github.com/JAlfredoDzulHau) 😊

