# workflow3
Como funciona el software workflow?
Los sistemas de workflow sirven para automatizar procesos de un equipo con un objetivo similar.
Se desarrollo un sistema con la finalidad de poder organizar grupos de trabajo, facilitar el paso de informacion entre ellos y mantener un registro de las tareas que realiza.
En la pantalla pricipal se puede visualizar informacion de la empresa que desarrollo el software y informacion respectiva de los desarrolladores, asi mismo bajar el repositorio del proyecto.
Existen dos maneras de logearse que son: 
* Administrador 
* Usuario 
El administrador a diferencia del usuario podra visualizar la bitacora, el back up y tambien trendra una viasualizacion de usuarios roles y procesos.
los reportes que realizara el administrador tambien seran de un tipo diferente a los del usuario y permitira enviarselo al usuario que asigne de la base de datos.
El formulario que genere el administrador podra ser exportado en pdf o txt.
el usuario solo visualizara los temas, perfil, diagramador y un formulario distinto al del administrador.
La bitacora se podra exportar en un archivo ".txt".
El Backup se visualizara en una ruta diferente y se podra bajar en archivo ".gz" y archivo ".tar". Se bajara dependiendo la limitacion de tiempo que se definio previamente que en este caso esta en una vez por dia.
La asignacion de usuario definira el tema y las visualizaciones de la web.
 cuando un usuario eliga un determinado tema de su agrado al cerrar su sesion y volver a iniciarla se mantendra con el ultimo tema elegido.
los usuario vinene por defecto con el tema de fondo blanco.
El diagramador sera visualizado tanto para el usuario y para el administrador, se podra desarrollar un diagrama de flujo arrastrando widget y eventos y editando los nombres de las calles, el diagramador se podra guardar en tu drive. o en tu equipo.

--INSTALACION DEL REPOSITORIO-- 
1.- Abrir la terminal de windows (cmd)
2.- Colocar en comando git clone seguido del link que se enuentra en la parte superior del proyecto 
3.- Luego de haber clonado el proyecto, ejecutar el comando composer install para instalar todas las dependencias 
4.- Abrir el proyecto en su editor de codigo preferido y crear un archivo ".env" al cual se copiara el contenido de del archivo ".envexample"
5.- En el ".env" editar las credenciales de su sistema gestor de base de datos de preferencia(recomendado utilizar mysql para este proyecto ).
6.- En la terminal ejecutar el comando php artisan Key: generate 
7.- Crear una base de datos vacia con el nombre Workflow_db
8.- En la terminal color l comando php artisan migrate: refresh --seed
9.-Colocar php artisan serve e ir a la direccion de localhost.