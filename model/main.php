<?php
    include 'database/conexion.php';

    class main extends Conexion {
        public function insert($query){
            $result = mysqli_query($this->connect(), $query);
            return $result;
            $this->conDB->disconnect();
        }

        public function select($query){
            $result = mysqli_query($this->connect(), $query);
            return $result;
            $this->conDB->disconnect();
        }

        public function update($query){
            $result = mysqli_query($this->connect(), $query);
            return $result;
            $this->conDB->disconnect();
        }

        public function delete($query){
            $result = mysqli_query($this->connect(), $query);
            return $result;
            $this->conDB->disconnect();
        }
    }
?>