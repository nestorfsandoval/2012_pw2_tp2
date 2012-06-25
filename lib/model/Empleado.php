<?php



/**
 * Skeleton subclass for representing a row from the 'empleado' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class Empleado extends BaseEmpleado {
    
    public function getNombreCompleto(){
        return $this->getApellido().', '.$this->getNombre();
    }
    
    public function getDireccion(){
        return $this->getCiudadRelatedByIdCiudad();
    }

} // Empleado
