<?php
    class Crud {
        private $conexion;
        private $host = 'localhost';
        private $user = 'root';
        private $db = 'pdo';
        private $password = '';

        public function __construct() {
            $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->password);
        }

        public function mostrar() {
            $query = $this->conexion->prepare('SELECT * FROM persona');
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            $this->conexion = null;
            return $result;
        }

        public function eliminar($id) {
            $query = 'DELETE FROM persona WHERE id = :id';
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $this->conexion = null;
            return $stmt;
        }

        public function insertar($datos) {
            $query = 'INSERT INTO persona(nombre, edad, email) values(:nombre, :edad, :email)';
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(':nombre', $datos['nombre']);
            $stmt->bindParam(':edad', $datos['edad']);
            $stmt->bindParam(':email', $datos['email']);
            $stmt->execute();
            $this->conexion = null;
            return $stmt;
        }

        public function update($datos) {
            $query = 'UPDATE persona SET nombre = :nombre, edad = :edad, email = :email WHERE id = :id';
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(':id', $datos['id']);
            $stmt->bindParam(':nombre', $datos['nombre']);
            $stmt->bindParam(':edad', $datos['edad']);
            $stmt->bindParam(':email', $datos['email']);
            $stmt->execute();
            $this->conexion = null;
            return $stmt;
        }
    }
?>