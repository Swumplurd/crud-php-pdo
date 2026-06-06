 CREATE DATABASE pdo;
  USE pdo;
  CREATE TABLE persona (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    edad INT,
    email VARCHAR(100)
  );
