<?php
//uncomment and modify to match your plugin details

namespace ManagedPixels\Pluginstarter ;
/**
 * class imports
 */
use System\Classes\PluginBase;
use BackendMenu;
use Backend;

class Plugin extends PluginBase {

/**
 * [pluginDetails description]
 */

public function pluginDetails() {

        return [
            'name'        => 'Starters',
            'description' => 'Start your plugin',
            'author'      => 'shawn sandy',
            'icon'        => 'icon-exclamation-triangle'
        ];

}

/**
 * [registerComponents description]
 */
public function registerComponents() {
      return [
        '\ManagedPixels\Pluginstarter\Components\Starter' => 'pluginStarter'
      ];
  }

  public function registerNavigation() {
    return [
      'start' => [
        'label' => 'Start Here',
        'icon' => 'icon-exclamation-triangle',
        'url' => Backend::url('managedpixels/pluginstarter/start'),
        'permission' => ['start.*'],
        'order' => 500
        ]
      ];
  }

}
