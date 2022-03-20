<?php

declare(strict_types=1);

namespace Abdulhadi5692HDI\SpamOnChat;

use jojoe77777\FormAPI\CustomForm;
use pocketmine\plugin\PluginBase;
use pocketmine\command\{Command, CommandSender};
use pocketmine\utils\Config;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class Main extends PluginBase implements Listener{
    public function onEnable() : void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->notice("Enabled! ::)");
        
        }
        public function onChat() : void {
           $this->getLogger()->notice("Warning: Console is being spammed");
        }
        
        public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
        switch($command->getName()){
        case "require":
             $sender->sendMessage("§aA lot of players!!!!!!");
    }
        }
      
      
    
}