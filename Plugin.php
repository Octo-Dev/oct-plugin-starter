<?php
//uncomment and modify to match your plugin details

namespace ManagedPixels\Pluginstarter ;
/**
 * attach the plugin class
 */
use System\Classes\PluginBase;
use BackendMenu;

class Plugin extends PluginBase {

/**
 * [pluginDetails description]
 */

public function pluginDetails() {

        return [
            'name'        => 'Starter',
            'description' => 'Start your plugin',
            'author'      => 'shwn sandy',
            'icon'        => 'icon-exclamation-triangle'
        ];

}

/**
 * [registerComponents description]
 */
public function registerComponents() {
      return [
        '\ManagedPixels\PluginStarter\Components\Starter' => 'pluginStarter'
      ];
  }

  public function registerNavigation() {
    return [
      'blog' => [
        'label' => 'Starters',
        'icon' => 'icon-exclamation-triangle',
        'url' => Backend::url('managedpixels/pluginstarter/starters'),
        'permission' => ['managedpixels.starters.*'],
        'order' => 500
        ]
      ];
  }

}
