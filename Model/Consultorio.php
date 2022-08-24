<?php
require_once "../config/conexionpoo.php";

class Consultorio extends Conectar
{
    protected $Numeroconsul;
    protected $Nombreconsul;

    public function _construct()
    {
        parent::_construct();
    }

    public function registroconsultorio($Numeroconsul, $Nombreconsul)
    {
        $sql1="SELECT * FROM consultorios WHERE NumeroC = '$Numeroconsul'";
        $resultado=$this->_bd->query($sql1);
        $fila = mysqli_num_assoc($resultado);
        if($fila > 0)
        {
            echo "<script>alert('Consultorio ya registrado');
            window.location ='../view/Fconsultorio.php';
            </script>";

        }

        else
        {
            $sql="INSERT INTO consultorios(NumeroC, NombreC) VALUES ('".$Numeroconsul."','".$Nombreconsul."')";
            
            $resultado=$this->_bd->query($sql);
            if(!$resultado)
            {
                print "<script>alert(\"Fallo al insertar los datos.\");
                        window.location='..view/Fconsultorio.php';</script>";
            }

            else
            {
                return $resultado;
                print "<script>alert(\'Consultorio registrado.\');
                window.location ='../view/Fconsultorio.php';
                </script>";
                $resultado->close();
                $this->_bd->close();
            }
        }
    }

    public function listarconsultorios()
    {
        $sql1 = "SELECT * FROM consultorios ORDER BY NumeroC";
        $resultado=$this->_bd->query($sql1);

        if($resultado->num_rows>0)
        {
            while($row = $resultado->fecth_assoc())
            {
                $resultadoset[]=$row;
            }
        }

        return $resultadoset;

    }

    public function eliminarconsultorio()
    {
        $query="DELETE FROM consultorios WHERE NumeroC='$id'";
        $resultado=$this->_bd->query($query);

        if(!$resultado)
        {
            print "<script>alert(\"Consultorio eliminado\");
            window.loation='../view/Fconsultoio.php';</script>";
        }
        else
        {
            print "<script>alert(\"No se pudo eliminar el consultorio\");
            window.loation='../view/Fconsultoio.php';</script>";
        }
    }


}


?>