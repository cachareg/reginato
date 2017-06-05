<?php
	include "../model/Caracteristica.php";
    require_once("../model/Foto.php");

	Class DAOCaracteristica{

        public function inserirCaracteristica($car){
            $connection = mysqli_connect("localhost", "root", "", "reginato");
            $sql="insert into caracteristica (nome, valoresSelecionadosPorFoto) values('".$car->getNome()."',".$car->isValoresSelecionadosPorFoto().")";
            //echo $sql;
            mysqli_query($connection, $sql);
            $id = mysqli_insert_id($connection);
            mysqli_close($connection); 
            return $id;

        }



        public function inserirFotosCaracteristica($c){
            $connection = mysqli_connect("localhost", "root", "", "reginato");
            $fotos = $c->getFotos();
            foreach ($fotos as $current) {
                $sql= "insert into foto_caracteristica (id_caracteristica, nome, hint) values(".$c->getId().", '".$current->getNome()."', '".$current->getHint()."')";
                echo $sql;
                mysqli_query($connection, $sql);
            }
            mysqli_close($connection);
        }

		public function getCaracteristicasPorProduto($id){

			$connection = mysql_connect("localhost", "root", "");
			mysql_select_db("reginato");
			//echo "id = "+$id;
			$sql= "select * FROM caracteristica join produto_caracteristica on (caracteristica.id=produto_caracteristica.id_caracteristica)  WHERE id_produto=".$id;
			$result=mysql_query($sql, $connection);
			$row = mysql_fetch_object($result);
			//var_dump($row);
			$fabrica = new Fabrica();
			$fabrica->setId($row->id);
			$fabrica->setNome($row->nome);
			$fabrica->setAtivo(false);
			return $fabrica;
		}

		public function getAllCaracteristicas(){
			$caracteristicas[]=array(); 
			$connection = mysqli_connect("localhost", "root", "", "reginato");
			mysql_set_charset('utf8');
			$sql= "select * FROM caracteristica";
			$result=mysqli_query( $connection, $sql);
			mysqli_close($connection);
			$caracteristica;

			while ($row = mysqli_fetch_object($result)) {
				$caracteristica = new Caracteristica();
				$caracteristica->setId($row->id);
				$caracteristica->setNome($row->nome);
				if($row->valoresSelecionadosPorFoto){
					$caracteristica->setValoresSelecionadosPorFoto(true);
				}else{
					$caracteristica->setValoresSelecionadosPorFoto(false);
				}
				array_unshift($caracteristicas, $caracteristica);
			}
			return $caracteristicas;
		}

    public function buildCaracteristica($id){
        $connection = mysqli_connect("localhost", "root", "", "reginato");
        $sql= "select * FROM Caracteristica WHERE id=".$id;
        $result=mysqli_query( $connection, $sql);
        $row = mysqli_fetch_object($result);
        $caracteristica = new Caracteristica();
        $caracteristica->setId($row->id);
        $caracteristica->setNome($row->nome);
        if($row->valoresSelecionadosPorFoto){
            $caracteristica->setValoresSelecionadosPorFoto(true);
        }else{
            $caracteristica->setValoresSelecionadosPorFoto(false);
        }
        mysqli_close($connection);
        return $caracteristica;
    }

    public function getFotos($id){
        $connection = mysqli_connect("localhost", "root", "", "reginato");
        $sql= "select * FROM foto_caracteristica WHERE id_caracteristica=".$id;
        $fotos[]=array();
        $url="http://localhost:82/site-reginato-representacao/reginato/fotos/caracteristicas/";
        $result=mysqli_query( $connection, $sql);
        $foto;
        while ($row = mysqli_fetch_object($result)) {
            $foto = new Foto();
            $foto->setId($row->id_foto);
            $foto->setCaminho($url.$id."/".$row->nome);
            $foto->setHint($row->hint);
            array_unshift($fotos, $foto);
        }
        mysqli_close($connection);
        return $fotos;
    }

	static function utf8_code_deep($input, $b_encode = TRUE, $b_entity_replace = TRUE)
    {
        if (is_string($input))
        {
            if($b_encode)
            {
                $input = utf8_encode($input);

                //return Entities to UTF8 characters
                //important for interfaces to blackbox-pages to send the correct UTF8-Characters and not Entities.
                if($b_entity_replace)
                {
                    $input = html_entity_decode($input, ENT_NOQUOTES/* | ENT_HTML5*/, 'UTF-8'); //ENT_HTML5 is a PHP 5.4 Parameter.
                }
            }
            else
            {
                //Replace NON-ISO Characters with their Entities to stop setting them to '?'-Characters.
                if($b_entity_replace)
                {
                    $input = preg_replace("/([\304-\337])([\200-\277])/e", "'&#'.((ord('\\1')-192)*64+(ord('\\2')-128)).';'", $input);
                }

                $input = utf8_decode($input);
            }
        }
        elseif (is_array($input))
        {
            foreach ($input as &$value)
            {
                $value = self::utf8_code_deep($value, $b_encode, $b_entity_replace);
            }
        }
        elseif (is_object($input))
        {
            $vars = array_keys(get_object_vars($input));

            if(get_class($input) == 'SimpleXMLElement')
            {
                //DOES NOT WORK!
                return '';
            }

            foreach ($vars as $var)
            {
                $input->$var = self::utf8_code_deep($input->$var, $b_encode, $b_entity_replace);
            }
        }

        return $input;
    }


	}


?>