<?php

/*
 * _____           _        _   __  __ _                          _   _
 *  |  __ \         | |      | | |  \/  (_)              /\        | | | |
 *  | |__) |__   ___| | _____| |_| \  / |_ _ __   ___   /  \  _   _| |_| |__
 *  |  ___/ _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \ / /\ \| | | | __| '_ \
 *  | |  | (_) | (__|   <  __/ |_| |  | | | | | |  __// ____ \ |_| | |_| | | |
 *  |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___/_/    \_\__,_|\__|_| |_|
 *
 *
 * License: dog2puppy.mit-license.org
 */

Namespace Dog2puppy\PocketMineAuth;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class Dog2puppy\PocketMineAuth\Main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $config = new Config($this->getDataFolder().'config.yml', Config::YAML);
        $mysql = new mysqli($config->get('mysql')['host'], $config->get('mysql')['name'], $config->get('mysql')['password'], $config->get('mysql')['database']);
        if ($config->get('firstrun') == true) {
            $config->set('firstrun', false);
        }
    }
}
