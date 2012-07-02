<?php

/**
 * compra actions.
 *
 * @package    tp2
 * @subpackage compra
 * @author     Your name here
 */
class compraActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $consulta=registrocompraQuery::create();
    
    if ($request->getParameter('busqueda')){
        $palabra=$request->getParameter('busqueda');

        if($request->getParameter('desdefecha')&&$request->getParameter('hastafecha')){
             $desde=$request->getParameter('desdefecha');
             $hasta=$request->getParameter('hastafecha');
             $consulta->where("fecha BETWEEN '$desde' AND '$hasta'");
         }
        
         switch ($request->getParameter('estado')){
                case 'proveedor':   $consulta->useProveedorQuery()
                                            ->filterByNombre('%'.$palabra.'%')
                                            ->endUse();
                    break;
                case 'factura':     $consulta->filterByNFactura('%'.$palabra.'%');
                    break;
                case 'monto':       $consulta->filterByValor('%'.$palabra.'%');
                    break;
                case 'remito':      $consulta->filterByRemito('%'.$palabra.'%');
                    break;
                    
         }
         
         
         
    }
      
    $this->registrocompras = $consulta->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new registrocompraForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new registrocompraForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $registrocompra = registrocompraQuery::create()->findPk($request->getParameter('idcompra'));
    $this->forward404Unless($registrocompra, sprintf('Object registrocompra does not exist (%s).', $request->getParameter('idcompra')));
    $this->form = new registrocompraForm($registrocompra);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $registrocompra = registrocompraQuery::create()->findPk($request->getParameter('idcompra'));
    $this->forward404Unless($registrocompra, sprintf('Object registrocompra does not exist (%s).', $request->getParameter('idcompra')));
    $this->form = new registrocompraForm($registrocompra);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $registrocompra = registrocompraQuery::create()->findPk($request->getParameter('idcompra'));
    $this->forward404Unless($registrocompra, sprintf('Object registrocompra does not exist (%s).', $request->getParameter('idcompra')));
    $registrocompra->delete();

    $this->redirect('compra/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $registrocompra = $form->save();

      $this->redirect('compra/edit?idcompra='.$registrocompra->getIdcompra());
    }
  }
}
