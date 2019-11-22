# Postales
Se hace uso del framework materialize, este se colocara en la raiz del proyecto.
### Base de Datos
En la carpeta SQL, se encotrara el ultimo script con la DB actualizada, el nonbre de dicha DB es "postales", si se cambia el nombre, debera de modificarse el archivo /php/conexion.php
```php
  static public function connect(){
 
    $db = "postales";   //Nombre de la base de Datos
 
   }
```
