<?php

namespace Mcrafters;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\event\player\PlayerKickEvent;
use pocketmine\utils\Listener;
use pocketmine\Player;
use Pocketmine\Server;

class AntiFly extends PluginBase Implements Listener {

   public function onEnable() {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
     $this->getLogger()->info("Enabled");
   }

   public function PlayerMove(PlayerMoveEvent $event){
       $player = $event->getPlayer();
