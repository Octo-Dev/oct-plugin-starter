<?php
//uncomment and modify to match your plugin details

namespace ManagedPixels\PluginStarter ;
/**
 * attach the plugin class
 */
use System\Classes\PluginBase;

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

public function registerComponents() {
    return [
      '\ManagedPixels\PluginStarter\Components\Starter' => 'pluginStarter'
    ];
}

}
