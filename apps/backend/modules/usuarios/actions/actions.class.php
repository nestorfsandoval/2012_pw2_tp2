<?php

/**
 * usuarios actions.
 *
 * @package    tp2
 * @subpackage usuarios
 * @author     Your name here
 */
class usuariosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {

    $consulta = empleadoQuery::create();
    
    if($request->getParameter('buscaUser')){
        $palabra=$request->getParameter('buscaUser');
        $consulta->findByNombre('%'.$palabra.'%');
        $consulta->_or();
        $consulta->findByApellido('%'.$palabra.'%');
    }
    $this->empleados=$consulta->find();

  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new empleadoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new empleadoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $empleado = empleadoQuery::create()->findPk($request->getParameter('id_emp'));
    $this->forward404Unless($empleado, sprintf('Object empleado does not exist (%s).', $request->getParameter('id_emp')));
    $this->form = new empleadoForm($empleado);
  }

  public function executeUpdate(sfWebRequest $request)
  {
      
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $empleado = empleadoQuery::create()->findPk($request->getParameter('id_emp'));
    $this->forward404Unless($empleado, sprintf('Object empleado does not exist (%s).', $request->getParameter('id_emp')));
    $this->form = new empleadoForm($empleado);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $empleado = empleadoQuery::create()->findPk($request->getParameter('id_emp'));
    $this->forward404Unless($empleado, sprintf('Object empleado does not exist (%s).', $request->getParameter('id_emp')));
    $empleado->delete();

    $this->redirect('usuarios/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $empleado = $form->save();

      $this->redirect('usuarios/index');
    }
  }
}
