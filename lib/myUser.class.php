<?php

class myUser extends sfBasicSecurityUser
{
    public function iniciarSesion($nombre_usuario,$pass){
    
    
    
    $empleado = empleadoQuery::create();
    
    $empleado->filterByUser($nombre_usuario)
             ->filterByPass(md5($pass))
             ->joinWith('Privilegios');
    
    if($this->login=$empleado->findOne()){ 
        $this->setAttribute('nombre_usuario', $nombre_usuario);
        $this->setAttribute('nivel', $this->login->getPrivilegios()->getDescripcion());
        $this->setAuthenticated(true);
    }else{
        $cliente = ClienteQuery::create();
        $cliente->filterByUser($nombre_usuario)
                 ->filterByPass($pass);
        if($this->login=$cliente->findOne()){ 
            $this->setAttribute('nombre_usuario', $this->login->getUser());
            $this->setAttribute('nivel', 'cliente');
            $this->setAttribute('codCliente',$this->login->getIdClie());
            $this->setAuthenticated(true);
        }else{
            $this->cerrarSesion();
        }
        
//        $this->cerrarSesion();
    }
  }
  
  
    public function cerrarSesion(){
    
    $this->getAttributeHolder()->clear();
    $this->setAuthenticated(false);
  }
}
