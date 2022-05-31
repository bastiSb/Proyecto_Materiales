<?php
class Categoria {
    public $Id;
    public $Nombre;

    function __construct(int $id, string $nombre){
       $this->Id = $id;
       $this->Nombre = $nombre;
   }
}