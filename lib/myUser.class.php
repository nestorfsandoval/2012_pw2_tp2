<?php

class myUser extends sfBasicSecurityUser
{
    public function iniciarSesion($nombre_usuario,$pass){
    
    
    
    $consulta = empleadoQuery::create();
    
    $consulta->filterByUser($nombre_usuario)
             ->filterByPass($pass)
             ->joinWith('Privilegios');
    
    if($this->empleado=$consulta->findOne()){ 
        $this->setAttribute('nombre_usuario', $nombre_usuario);
        $this->setAttribute('nivel', $this->empleado->getPrivilegios()->getDescripcion());
        $this->setAuthenticated(true);
    }else
    {
        $this->cerrarSesion();
    }
  }
  
  
    public function cerrarSesion(){
    
    $this->getAttributeHolder()->clear();
    $this->setAuthenticated(false);
  }
}
