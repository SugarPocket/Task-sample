<?php
declare(strict_types=1);

namespace sgpk;

use pocketmine\scheduler\PluginTask;
use sgpk\main;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\Plugin;
use pocketmine\math\Vector3;

class onrun extends PluginTask {
	
  public function __construct(main $plugin){
    $this->plugin = $plugin;
	$this->r = 0;
    parent::__construct($plugin);
  }

  public function onRun(int $currentTick){  
  echo "aaaa";
  }
}