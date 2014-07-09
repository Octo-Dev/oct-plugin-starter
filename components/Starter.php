<?php namespace ManagedPixels\PluginStarter\Components;

use Cms\Classes\ComponentBase;

class Starter extends ComponentBase
{
  public function componentDetails() {
    return [
      'name' => "Starter",
      'description' => 'A simple starter component'
    ];
  }
}
