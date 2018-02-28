<?php
/**
 * Created by PhpStorm.
 * User: Gudni
 * Date: 28-02-2018
 * Time: 14:00
 */

namespace Album;

use Zend\ModuleManager\Feature\ConfigProviderInterface;


class Module implements ConfigProviderInterface{

    public function getConfig() {

        return include __DIR__ . '/../config/module.config.php';
    }

}