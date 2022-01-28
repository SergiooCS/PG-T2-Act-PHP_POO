<?php
class Productos{
    public int $id;
    public string $nombre;
    public int $unidades;
    private float $precio;
    private float $iva=0.21;

    /* CONTRUCTOR */
    public function __constructor(int $id, string $nombre, int $unidades, float $precio){
        /* ALMACENAR DATOS */
        $this->id=$id;
        $this->nombre=$nombre;
        $this->unidades=$unidades;
        $this->precio=$precio;
    }   

    /* SETTERS */
    public function setId(int $id):void{
        $this->id=$id;
    }
    
    public function setNombre(string $nombre):void{
        $this->nombre=$nombre;
    }

    public function setUnidades(int $unidades):void{
        $this->unidades=$unidades;
    }

    public function setPrecio(float $precio):void{
        $this->precio=$precio;
    }

    /* GETTERS */
    public function getId():int{
        return $this->id;
    }
    
    public function getNombre():string{
        return $this->nombre;
    }
    
    public function getUnidades():int{
        return $this->unidades;
    }
    
    public function getPrecio():float{
        return $this->precio;
    }

    /* METODOS */
    public function calcularTotal(int $unidades, int $precio, float $iva){
        $subtotal=$unidades*$precio;
        $total=$subtotal*$iva;
        echo "El total de la factura es ".$total;
    }



}//cierra clase