<?php

/**
 * stock actions.
 *
 * @package    tp2
 * @subpackage stock
 * @author     Your name here
 */
class stockActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->productos = productoQuery::create()->find();
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

    $this->redirect('stock/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $producto = $form->save();

      $this->redirect('stock/edit?idproducto='.$producto->getIdproducto());
    }
  }
}
