<?php

namespace CompassMode\Amace;

use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\Item;

class main extends PluginBase implements Listener{

            public function onEnable(){
                    $this->getServer()->getPluginManager()->registerEvents($this, $this);
                }
                
          public function onTap(PlayerInteractEvent $event) {
                $player = $event->getPlayer();
                $item = $player->getInventory()->getItemInHand();
            
      if( $item->getName() == "Compass") {
      
      if(!$player->isOp()) {
           return false;
     }else if($player->getGamemode() === 0) {
            $player->setGamemode(1);
            $player->sendMessage("§l§f[CompassMode] クリエイティブに変更しました。");

            return true;
      }else if($player->getGamemode() === 1) {
             $player->setGamemode(0);
             $player->sendMessage("§l§f[CompassMode] サバイバルに変更しました。");
              
              return true;
       } else {
            return false;
                  }
                }
             }    
             
             
     }
