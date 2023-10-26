<?php
namespace models;
class Docente{
    private $codigo;
    private $nombre;
    private $idOcupacion;
    private $ocupacion;

    function get($prop){
        return $this->$prop;
    }

    function set($prop, $value){
        $this->$prop = $value;
    }
}
?>