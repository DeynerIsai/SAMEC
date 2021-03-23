<?php
include_once 'Conexion.php';

class Dashboard
{
    public function __construct()
    {

        $this->con = new conexion();
    }

    public function set($atributo, $contenido)
    {
        $this->$atributo = $contenido;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }
/*
public function listar()
{
$sql       = "SELECT * FROM ruinas";
$resultado = $this->con->consultaRetorno($sql);
return $resultado;
}
public function buscar($word = false, $num = false)
{

if ($num == 1) {
$sth = $this->con->consultaRetorno('SELECT * FROM ruinas WHERE nombre LIKE "%' . $word . '%" '
. 'OR tipo LIKE "%' . $word . '%" OR localizacion LIKE "%' . $word . '%" ');
//$sth->execute();
return $sth;
} else {
$sth = $this->con->consultaRetorno('SELECT *, MATCH (nombre, tipo, localizacion) '
. 'AGAINST (:words) FROM lugares WHERE MATCH (nombre, tipo, localizacion) '
. 'AGAINST (:words) ');
$sth->execute(array(
':words' => $word,
));
return $sth->fetchAll();
}
}
public function crear()
{

$sql = "INSERT INTO ruinas (id_lugar,nombre,tipo,distancia,localizacion,historia,imagen,pagina_web,telefono,correo)
VALUES($this->id_lugar,'{$this->nombre}','{$this->tipo}','{$this->distancia}','{$this->localizacion}','{$this->historia}','{$this->imagen}','{$this->pagina_web}','{$this->telefono}','{$this->correo}');";

$this->con->consultaSimple($sql);
return true;
}

public function filtrar($valor)
{
$sql       = "SELECT * FROM lugares WHERE nombre LIKE '%$valor%'";
$resultado = $this->con->consultaRetorno($sql);
return $resultado;
}
 */
    public function consultar()
    {
        $sql       = "SELECT COUNT(id_usuario) AS usuario FROM usuarios WHERE estado=1";
        $resultado = $this->con->consultaRetorno($sql);
        $row       = mysqli_fetch_assoc($resultado);

        return $row;
    }
}
