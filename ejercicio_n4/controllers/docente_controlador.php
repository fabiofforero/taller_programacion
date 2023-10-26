<?php
namespace controllers\docente;
use models\Docente;
use controllers\EntityController;
use models\Curso;

class DocenteController extends EntityController
{
    private $dataTable = 'docentes';

    function allData()
    {
        $sql = "SELECT docentes.*,ocupaciones.nombre as ocupacion from docentes INNER join ocupaciones on docentes.idOcupacion = ocupaciones.id; " ;
        $resultSQL = $this->execSql($sql);
        $lista = [];
        if ($resultSQL->num_rows > 0) {
            while ($item = $resultSQL->fetch_assoc()) {
                $docente = new Docente();
                $docente->set('codigo', $item['cod']);
                $docente->set('nombre', $item['nombre']);
                $docente->set('ocupacion', $item['ocupacion']);
                array_push($lista, $docente);
            }
        }
        return $lista;
    }
    function getItem($codigo)
    {
        $sql = "select * from " . $this->dataTable . " where cod='" . $codigo."'";
        $resultSQL = $this->execSql($sql);
        $docente = null;
        if ($resultSQL->num_rows > 0) {
            while ($item = $resultSQL->fetch_assoc()) {
                $docente = new Docente();
                $docente->set('codigo', $item['cod']);
                $docente->set('nombre', $item['nombre']);
                $docente->set('idOcupacion', $item['idOcupacion']);
                break;
            }
        }
        return $docente;
    }
    function getOcupaciones()
    {
        $sql = "SELECT * from ocupaciones;";
        $resultSQL = $this->execSql($sql);
        $lista = [];
        if ($resultSQL->num_rows > 0) {
            while ($item = $resultSQL->fetch_assoc()) {
                $ocupacion = new Docente();
                $ocupacion->set('codigo', $item['id']);
                $ocupacion->set('nombre', $item['nombre']);
                array_push($lista, $ocupacion);
            }
        }
        return $lista;
    }
    function getCursos($codigo)
    {
        $sql = "select * from cursos where codDocente='" . $codigo."'";
        $resultSQL = $this->execSql($sql);
        $lista = [];
        
        if ($resultSQL->num_rows > 0) {
            while ($item = $resultSQL->fetch_assoc()) {
                $docente = new docente();
                $docente->set('codigo', $item['cod']);
                $docente->set('nombre', $item['nombre']);
                array_push($lista, $docente);
            }
        } else {
            return null; 
        }
        
        return $lista;
    }
    
    function addItem($docente)
    {
        $codigo = $docente->get('cod');
        $nombre = $docente->get('nombre');
        $idOcupacion = $docente->get('idOcupacion');
        $registro = $this->getItem($codigo);
        if (isset($registro)) {
            return "El código ya existe";
        }
        $sql = "Insert into " . $this->dataTable . " values ('$codigo','$nombre','$idOcupacion')";
        $resultSQL = $this->execSql($sql);
        if (!$resultSQL) {
            return "no se guardo";
        }
        return "se guardo con exito";
    }

    function deleteItem($codigo)
    {
        // Verificar si el docente tiene cursos asociados
        $cursos = $this->getCursos($codigo);

        if (!empty($cursos)) {
            return "No se puede eliminar el docente porque tiene cursos asociados.";
        }

        $sql = "delete from " . $this->dataTable;
        $sql .= " where cod ='" . $codigo . "'";
        $resultSQL = $this->execSql($sql);
        if ($resultSQL) {
            return "Registro eliminado";
        }
        return "No se pudo eliminar el registro";
    }
    function updateItem($docente)
    {
        $codigo = $docente->get('cod');
        $nombre = $docente->get('nombre');
        $idOcupacion = $docente->get('idOcupacion');
        $registro = $this->getItem($codigo);
        if (!isset($registro)) {
            return "El registro no existe";
        }
        $sql = "update " . $this->dataTable . " set ";
        $sql .= "nombre='$nombre',";
        $sql .= "idOcupacion=' $idOcupacion' ";
        $sql .= " where cod=$codigo";

        $resultSQL = $this->execSql($sql);
        if (!$resultSQL) {
            return "no se guardo";
        }
        return "se guardo con exito";
    }
  
}