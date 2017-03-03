<?php

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\Config;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

Class Main extends PluginBase implements Listener {

  public function onEnable(){
    $config = new Config($this->getDataFolder().'config.yml', Config::YAML);
    $mysql = new mysqli($config->get('mysql')['host'], $config->get('mysql')['name'], $config->get('mysql')['password'], $config->get('mysql')['database']);
    if ($config->get('firstrun') == true) {
      
      $config->set('firstrun', false);
    }
  }

}
