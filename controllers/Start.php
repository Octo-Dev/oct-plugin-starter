<?php namespace ManagedPixels\Pluginstarter\Controllers;

// class imports
use Flash;
use BackendMenu;
use Backend\Classes\Controller;

/**
 *
 */
class Start extends Controller
{

  public function __construct()
  {
    parent::__construct();
    BackendMenu::setContext('ManagedPixels.Pluginstarter','start');
  }

  public function index() {

     //pass data to view via vars
    $this->vars['hello'] = 'Hello from the Controller...';

  }


}
