<?php
namespace controllers\curso;
use models\Curso;
use controllers\EntityController;
class CursoController extends EntityController
{
    private $dataTable = 'cursos';

    function allData()
    {
        $sql = "SELECT c.cod, c.nombre as nombre, d.nombre as docente
        FROM cursos c
        JOIN docentes d ON c.codDocente = d.cod;
        " ;
        $resultSQL = $this->execSql($sql);
        $lista = [];
        if ($resultSQL->num_rows > 0) {
            while ($item = $resultSQL->fetch_assoc()) {
                $curso = new Curso();
                $curso->set('codigo', $item['cod']);
                $curso->set('nombre', $item['nombre']);
                $curso->set('docente', $item['docente']);
                array_push($lista, $curso);
            }
        }
        return $lista;
    }
    function getItem($codigo)
    {
        $sql = "select * from " . $this->dataTable . " where cod='" . $codigo."'";
        $resultSQL = $this->execSql($sql);
        $curso = null;
        if ($resultSQL->num_rows > 0) {
            while ($item = $resultSQL->fetch_assoc()) {
                $curso = new curso();
                $curso->set('codigo', $item['cod']);
                $curso->set('nombre', $item['nombre']);
                $curso->set('codDocente', $item['codDocente']);
                break;
            }
        }
        return $curso;  
    }
    function getDocentes()
    {
       
        $sql = "SELECT * from docentes;";
        $resultSQL = $this->execSql($sql);
        $lista = [];
        if ($resultSQL->num_rows > 0) {
            while ($item = $resultSQL->fetch_assoc()) {
                $ocupacion = new Curso();
                $ocupacion->set('codDocente', $item['cod']);
                $ocupacion->set('nombre', $item['nombre']);
                array_push($lista, $ocupacion);
            }
        }
        return $lista;
    }
    
    function addItem($curso)
    {
        $codigo = $curso->get('cod');
        $nombre = $curso->get('nombre');
        $codDocente = $curso->get('codDocente');
        $registro = $this->getItem($codigo);
        if (isset($registro)) {
            return "El código ya existe";
        }
        $sql = "Insert into " . $this->dataTable . " values ('$codigo','$nombre','$codDocente')";
        $resultSQL = $this->execSql($sql);
        if (!$resultSQL) {
            return "no se guardo";
        }
        return "se guardo con exito";
        
    }
    function deleteItem($codigo)
    {
        $sql = "delete from " . $this->dataTable;
        $sql .= " where cod = $codigo";
        $resultSQL = $this->execSql($sql);
            if ($resultSQL) {
              return "Registro eliminado";
            }
            return "No se pudo eliminar el registro";
    }
    
    function updateItem($curso)
    {
        $codigo = $curso->get('cod');
        $nombre = $curso->get('nombre');
        $codDocente = $curso->get('codDocente');
        $registro = $this->getItem($codigo);
        if (!isset($registro)) {
            return "El registro no existe";
        }
        $sql = "update " . $this->dataTable . " set ";
        $sql .= "nombre='$nombre',";
        $sql .= "codDocente='$codDocente' ";
        $sql .= " where cod=$codigo";

        $resultSQL = $this->execSql($sql);
        if (!$resultSQL) {
            return "no se guardo";
        }
        return "se guardo con exito";
    }
  
}
