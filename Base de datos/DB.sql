CREATE DATABASE contraseña;
USE contraseña;
CREATE TABLE reg_usuarios (
  id_usuario      int(10), 
  documento   int(10) NOT NULL AUTO_INCREMENT, 
  primer_nombre   varchar(255), 
  primer_apellido int(10), 
  clave           int(10), 
  codigo          int(10), 
  PRIMARY KEY (documento));
