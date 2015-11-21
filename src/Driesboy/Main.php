<?php
namespace Driesboy;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\network\protocol\AddEntityPacket;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener{
	/** @var AddEntityPacket */
	private $lightning;
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	/**
	 * @param PlayerDeathEvent $e
	 * @ignoreCancelled true
	 * 
	 * @priority MONITOR
	 */
public function onDeath(PlayerDeathEvent $e){
      $p = $event->getEntity();
      $level = $p->getLevel();
      $light = new AddEntityPacket();
      $light->type = 93;
      $light->eid = Entity::$entityCount++;
      $light->metadata = array();
      $light->speedX = 0;
      $light->speedY = 0;
      $light->speedZ = 0;
      $light->yaw = $p->getYaw();
      $light->pitch = $p->getPitch();
      $light->x = $p->x;
      $light->y = $p->y;
      $light->z = $p->z;
    foreach($level->getPlayers() as $pl){
        $pl->dataPacket($light);
                }
                
public function onCommand(CommandSender $sender,Command $cmd,$label,array $args) {
    if((strtolower($cmd->getName()) == "light") && isset($args[0])) {
      if($sender->hasPermission("light.command")){
        $player = $this->getServer()->getPlayer($args[0]);
        $level = $player->getLevel();
        $p = $event->getEntity();
        $level = $p->getLevel();
        $light = new AddEntityPacket();
        $light->type = 93;
        $light->eid = Entity::$entityCount++;
        $light->metadata = array();
        $light->speedX = 0;
        $light->speedY = 0;
        $light->speedZ = 0;
        $light->yaw = $p->getYaw();
        $light->pitch = $p->getPitch();
        $light->x = $p->x;
        $light->y = $p->y;
        $light->z = $p->z;
      foreach($level->getPlayers() as $pl){
        $pl->dataPacket($light);
    }else{
      $sender->sendMessage("You do not have permission to use this command");
    }
  }
                              
public function onRespawn(PlayerRespawnEvent $e){
      $p = $event->getEntity();
      $level = $p->getLevel();
      $light = new AddEntityPacket();
      $light->type = 93;
      $light->eid = Entity::$entityCount++;
      $light->metadata = array();
      $light->speedX = 0;
      $light->speedY = 0;
      $light->speedZ = 0;
      $light->yaw = $p->getYaw();
      $light->pitch = $p->getPitch();
      $light->x = $p->x;
      $light->y = $p->y;
      $light->z = $p->z;
    foreach($level->getPlayers() as $pl){
        $pl->dataPacket($light);
            }  
public function onJoin(PlayerJoinEvent $e){
      $p = $event->getEntity();
      $level = $p->getLevel();
      $light = new AddEntityPacket();
      $light->type = 93;
      $light->eid = Entity::$entityCount++;
      $light->metadata = array();
      $light->speedX = 0;
      $light->speedY = 0;
      $light->speedZ = 0;
      $light->yaw = $p->getYaw();
      $light->pitch = $p->getPitch();
      $light->x = $p->x;
      $light->y = $p->y;
      $light->z = $p->z;
    foreach($level->getPlayers() as $pl){
        $pl->dataPacket($light);
        }
}           
