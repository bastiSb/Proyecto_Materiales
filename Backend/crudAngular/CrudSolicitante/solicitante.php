<?php
class Solicitante {
    public $Id;
    public $Tipo;
    public $Run;
    public $Pnombre;
    public $Snombre;
    public $Papellido;
    public $Sapellido;
    public $Correo;
    public $Numero;
    public $IdEscuela;
    public $IdCarrera;
    public $IdSeccion;
    public $Pwd;

    function __construct(int $id, string $tipo, int $run, string $pnombre,
                        string $snombre, string $papellido, string $sapellido,
                        string $correo, int $numero, int $idEscuela, int $idCarrera, int $idSeccion, string $pwd)
   {
       $this-> Id = $id;
       $this-> Tipo = $tipo;
       $this-> Run = $run;
       $this-> Pnombre = $pnombre;
       $this-> Snombre = $snombre;
       $this-> Papellido = $papellido;
       $this-> Sapellido = $sapellido;
       $this-> Correo = $correo;
       $this-> Numero = $numero;
       $this-> IdEscuela = $idEscuela;
       $this-> IdCarrera = $idCarrera;
       $this-> IdSeccion = $idSeccion;
       $this-> Pwd = $pwd;
   }
}