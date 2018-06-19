<?php
declare(strict_types=1);

namespace sgpk;

use pocketmine\Player;
use pocketmine\Server;
use sgpk\onrun;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\plugin\Plugin;
use pocketmine\scheduler\PluginTask;

class main extends PluginBase implements Listener{

  public function onEnable(): void{
  	$this->getLogger()->notice("Message...");
    $this->getServer()->getScheduler()->scheduleRepeatingTask(new onrun($this), 20); //20 = 1 s.
    }
  
  public function onDisable():void{
    $this->getLogger()->alert("Message...");
  }
}
