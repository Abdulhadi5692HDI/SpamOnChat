<?php

declare(strict_types=1);

namespace Abdulhadi5692HDI\SpamOnChat;


use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;

class Main extends PluginBase implements Listener{
    public function onEnable() : void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->notice("Enabled! ::)");
        
        }
        public function onChat() : void {
           $this->getLogger()->notice("Warning: Console is being spammed");
        }
        
        
      
      
    
}
