<?php

namespace SteakPE

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class SteakPE extends PluginBase implements Listener{
public function onLoad () {
	$this->getLogger () ->info ("SteakPE Loading") ;
}
public function onEnable () {
    $this->getServer ()  ->getPluginManager () ->registerEvents ($this,$this);
	$this->getLogger () ->info ("SteakPE Enabled") ;	
}
public function onDisable () {
	$this->getLogger () ->info ("SteakPE Disabled") ;
}
public function onCommand(CommandSender $sender,Command $cmd,$label,array $args) {
	if($cmd->getName () == "steak") {
		$sender->sendMessage("Processing Steak!");
		if($cmd->getName() == "steak"){
     $sender->getInventory()->addItem(Item::get(364,0,2));
	 $sender->sendMessage(TextFormat::BOLD."You have just recieved 64 steak!");
     if(!$sender instanceof Player){
          $sender->sendMessage("This Command Only Works for players! Please perform this command IN GAME!");
     }else{
	  if(!isset($args[0]) or (is_int ($args[0]) and $args[0] > 0)) {
                $args[0] = 64;
		}
          $sender->getInventory()->addItem(Item::get(364,0,4));
          $sender->sendMessage("You have just recieved". count($args[0]) . " steak!");
		  }
		  return true}
}
