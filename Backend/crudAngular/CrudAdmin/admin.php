<?php
class Admin {
    public $Id;
    public $Nombre;
    public $Pwd;
    public $Email;

    function __construct(int $id, string $nombre, string $pwd, string $email){
       $this->Id = $id;
       $this->Nombre = $nombre;
       $this->Pwd = $pwd;
       $this->Email = $email;
   }
}