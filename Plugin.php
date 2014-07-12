<?php
/**
 *
 * PluginStarter -- Modify and Reuse
 * Change namespace (line 13) match your plugin directory path
 * Edit the pluginDetails() array (name,description,author,icon)
 * Add / Modify component(s) - registerComponents()
 * Register / Modify Navigation -  registerNavigation()
 * Set /Modify permissions - registerPermissions()
 * @url http://octobercms.com/docs/plugin/registration
 *
 */


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
 * @url http://octobercms.com/docs/plugin/registration#registration-methods
 */

public function pluginDetails() {

        return [
            'name'        => 'Starters',
            'description' => 'Start your plugin',
            'author'      => 'shawn sandy',
            'icon'        => 'icon-exclamation-triangle'
        ];

}

public function boot(){

}

/**
 * [registerComponents description]
 * @url http://octobercms.com/docs/plugin/registration#component-registration
 */
public function registerComponents() {
      return [
        '\ManagedPixels\Pluginstarter\Components\Starter' => 'pluginStarter'
      ];
  }


/**
 * Register navigation
 * Set component permissions
 * @url http://octobercms.com/docs/plugin/registration#navigation-permissions
 */
  public function registerNavigation() {


    return [
      'start' => [
        'label' => 'Start Here',
        'icon' => 'icon-exclamation-triangle',
        'url' => Backend::url('managedpixels/pluginstarter/start'),
        'permission' => ['managedpixels.pluginstarter.*'],
        'order' => 500
        ]
      ];
  }

/**
 * Register permissions
 * @url http://octobercms.com/docs/plugin/registration#navigation-permissions
 * @url http://octobercms.com/docs/backend/users
 */
  public function registerPermissions() {
    return [
      'managedpixels.pluginstarter.access_start' => ['label' => 'Access Start', 'tab' => 'Start']
    ];
  }

}
