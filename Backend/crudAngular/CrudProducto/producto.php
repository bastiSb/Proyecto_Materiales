<?php
class Producto {
    public $Id;
    public $Nombre;
    public $Marca;
    public $Stock;
    public $IdCategoria;

    function __construct(int $id, string $nombre, int $stock, int $idcategoria, string $marca)
   {
       $this->Id = $id;
       $this->Nombre = $nombre;
       $this->Stock = $stock;
       $this->IdCategoria = $idcategoria;
       $this->Marca = $marca;
   }
}