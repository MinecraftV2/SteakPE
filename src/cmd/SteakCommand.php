<?php 
namespace SteakPE\cmd;
use pocketmine\Player;
use pocketmine\utils\TextFormat as C;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\defaults\VanillaCommand;
use SteakPE\Main;
class SteakCommand extends VanillaCommand {
    
  private $plugin;
  public function __construct(Main $plugin){
    $this->plugin = $plugin;
    parent::__construct('steak', 'Gives players a certain amount of Steak', '/steak');
    $this->setPermission('plugins.command');
  }
  public function execute(CommandSender $sender, $alias, array $args) : bool {
  if($sender instanceof Player){
  if($args[0] != null && is_numeric($args[0])){
  $sender->sendMessage(C::RED . 'Correct format is /steak [amount]');
  return true;
  }
   if($args[0] == null){
   $amount = 64;
   }
   else{
   $amount = $args[0];
   }
    $sender->getInventory()->addItem(Item::get(364,0, $args[0]));
	  $sender->sendMessage("You have just recieved". $args[0] . " steak!");
    return true;
  } else {
    $sender->sendMessage(C::RED .'Command must be run in-game!');
    return false;     
   }
  }
}
