<?php

/**
 * catalogo actions.
 *
 * @package    tp2
 * @subpackage catalogo
 * @author     Your name here
 */
class catalogoActions extends sfActions
{
public function executeIndex(sfWebRequest $request)
  {
        
    $consulta = productoQuery::create();
    
    if($request->getParameter('buscaProdu')){
        $palabra=$request->getParameter('buscaProdu');
        $consulta->filterByTitulo('%'.$palabra.'%')
                    ->_or()
                    ->useArtistaQuery()
                    ->filterByNombre('%'.$palabra.'%')
                    ->endUse();
    }
    
    $this->productos=$consulta->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new productoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new productoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $producto = productoQuery::create()->findPk($request->getParameter('idproducto'));
    $this->forward404Unless($producto, sprintf('Object producto does not exist (%s).', $request->getParameter('idproducto')));
    $this->form = new productoForm($producto);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $producto = productoQuery::create()->findPk($request->getParameter('idproducto'));
    $this->forward404Unless($producto, sprintf('Object producto does not exist (%s).', $request->getParameter('idproducto')));
    $this->form = new productoForm($producto);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $producto = productoQuery::create()->findPk($request->getParameter('idproducto'));
    $this->forward404Unless($producto, sprintf('Object producto does not exist (%s).', $request->getParameter('idproducto')));
    $producto->delete();

    $this->redirect('catalogo/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $producto = $form->save();

      $this->redirect('catalogo/edit?idproducto='.$producto->getIdproducto());
    }
  }
}
