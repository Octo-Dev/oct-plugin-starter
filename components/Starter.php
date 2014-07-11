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

  public function defineProperties(){
    return [
      'yourName' => [
        'title' => 'Your name',
        'description' => 'Lets add your name',
        'placeholder' => 'Enter your name',
        'type' => 'string'
      ]
    ];
  }

  public function yourname(){
    return $this->property('yourName');
  }
}
