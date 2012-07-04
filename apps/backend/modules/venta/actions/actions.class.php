<?php

/**
 * venta actions.
 *
 * @package    tp2
 * @subpackage venta
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ventaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $consulta= VentaQuery::create()
              ->joinWith('Producto')
              ->joinWith('Cliente');

       if ($request->getParameter('busqueda')){
           $palabra=$request->getParameter('busqueda');
           $consulta->useProductoQuery()
                   ->filterByTitulo('%'.$palabra.'%')
                   ->endUse();
           
        if($request->getParameter('desdefecha')&&$request->getParameter('hastafecha')){
             $desde=$request->getParameter('desdefecha');
             $hasta=$request->getParameter('hastafecha');
             $consulta->where("fecha BETWEEN '$desde' AND '$hasta'");
         }
       }
      
               
    $this->ventas=$consulta->find();
  }
}
