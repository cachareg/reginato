<?php

	Class DAOFoto{

        public function inserirFoto($foto, $id){
            //$produtos[]=array(); 
            $connection = mysqli_connect("localhost", "root", "", "reginato");
            $sql= "insert into foto_produto (nome, id_produto ) values('".$foto->getCaminho()."', ".$id.") ";
            echo($sql);
            return mysqli_query($connection, $sql);
        }

    }
?>