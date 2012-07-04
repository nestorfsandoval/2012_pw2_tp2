<?php

class myUser2 extends sfBasicSecurityUser
{
    public function iniciarSesion($nombre_usuario,$pass){
    
    $this->setAttribute('nombre_usuario', $nombre_usuario);
    
    $consulta = empleadoQuery::create();
    
    $consulta->findByUser($this->getAttribute('nombre_usuario'));
    $consulta->_and();
    $consulta->findByPass($pass);
    
    if(count($this->empleados=$consulta->find())>0){   
        $this->setAuthenticated(true);
    }
    else
    {
        $this->cerrarSesion();
    }
  }
  
  
    public function cerrarSesion(){
    
    $this->getAttributeHolder()->clear();
    $this->setAuthenticated(false);
  }
}
