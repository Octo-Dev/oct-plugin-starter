<?php
/**
 * declare you namespace
 */
namespace ManagesPixels\StarterPlugin\Starters;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Starter controller
 *
 */
class Starters extends Controller
{

  public function __construct() {
    parent::__construct();
    BackendMenu::setContext('ManagedPixels.Starterplugin', 'starters');
  }

  public function index() {

    $this->var['hello'] = "Hello form a controller";

  }

}
