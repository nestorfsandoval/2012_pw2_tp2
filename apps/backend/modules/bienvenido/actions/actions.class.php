<?php

/**
 * bienvenido actions.
 *
 * @package    tp2
 * @subpackage bienvenido
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class bienvenidoActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
   
      if($request->getParameter('logout') && $request->getParameter('logout')==1){
          return $this->redirect('http://localhost/2012pw2tp2/frontend_dev.php?logout=1');
      }
  }
}
