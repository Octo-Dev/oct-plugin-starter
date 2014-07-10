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

  public $pageTitle="My Starter Plugin";

  public function __construct()
  {
    parent::__construct();
    BackendMenu::setContext('ManagedPixels.Pluginstarter','start');
    $this->addCss('/plugins/managedpixels/pluginstarter/assets/css/starter-style.css');
  }

  public function index() {

     //pass data to view via vars
    $this->vars['hello'] = 'Hello from the Controller...';

  }


}
