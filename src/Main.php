<?php

namespace SteakPE;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener{
public function onLoad()
{
	$this->getLogger()->info ("SteakPE Loading") ;
}
public function onEnable()
{
    $this->getServer()->getPluginManager () ->registerEvents ($this,$this);
	$this->getLogger()->info ("SteakPE Enabled") ;	
}
public function onDisable()
{
	$this->getLogger()->info ("SteakPE Disabled") ;
}
	
}
