<?php

namespace SteakPE;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\command\CommandSender;
use SteakPE\cmd\SteakCommand;

class Main extends PluginBase implements Listener{
public function onLoad()
{
	$this->getLogger()->info("SteakPE Loading");
}
public function onEnable()
{
        $this->getServer()->getPluginManager () ->registerEvents ($this,$this);
	$this->getLogger()->info("SteakPE Enabled");
	$this->getServer()->getCommandMap()->register("steak", new SteakCommand($this));
}
public function onDisable()
{
	$this->getLogger()->info ("SteakPE Disabled") ;
}
	
}
