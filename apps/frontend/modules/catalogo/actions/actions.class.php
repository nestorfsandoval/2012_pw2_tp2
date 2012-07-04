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
    
    if($request->getParameter('compra')){
        $producto=$request->getParameter('compra');
        $cliente=$this->getUser()->getAttribute('codCliente');
        $this->realizarCompra($producto, $cliente);
    }
    
    $consulta = productoQuery::create()
                ->joinWith('Artista')
                ->joinWith('Genero');
    $consultaCantidad=productoQuery::create();
    
    $limit=5;
    if($request->getParameter('pag')&&($request->getParameter('pag')>1)){
        $inicio=$request->getParameter('pag')*5-5;
        $limite=5 * $request->getParameter('pag');
    
        $limit="$inicio,$limite";
    }
    if($request->getParameter('buscaProdu')){
        $palabra=$request->getParameter('buscaProdu');
        $consulta->filterByTitulo('%'.$palabra.'%')
                    ->_or()
                    ->useArtistaQuery()
                    ->filterByNombre('%'.$palabra.'%')
                    ->endUse();
    }
    
    
    $consulta->limit($limit);
    $this->productos=$consulta->find();
    $this->cantidad=$consultaCantidad->count();
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
  
  protected function realizarCompra($producto, $cliente){
      
      $actualizar= ProductoPeer::retrieveByPK($producto);
      
      $stock=$actualizar->getStock()-1;
      $actualizar->setStock($stock);
      $actualizar->save();
                    
      
      
      $fecha=date('Y-m-d');
      $nuevo=new Venta();
      $nuevo->setIdcliente($cliente);
      $nuevo->setIdproducto($producto);
      $nuevo->setFecha($fecha);
      $nuevo->save();
  }
}
