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
	        if($this->lightning = null){
	        	$this->lightning = new AddEntityPacket();
	        	$this->lightning->type = 93;
	        	$this->lightning->eid = Entity::$entityCount++;
	        	$this->lightning->metadata = [];
	        	$this->lightning->speedX = 0;
	        	$this->lightning->speedY = 0;
	        	$this->lightning->speedZ = 0;
	        }
	        $this->lightning->x = $e->getPlayer()->getX();
	        $this->lightning->y = $e->getPlayer()->getY();
	        $this->lightning->z = $e->getPLayer()->getZ();
	        foreach($e->getPlayer()->getLevel()->getPlayers() as $p);	
                        $p->dataPacket($pk);
                }
   public function onCommand(CommandSender $sender,Command $cmd,$label,array $args) {
    if((strtolower($cmd->getName()) == "light") && isset($args[0])) {
      if($sender->hasPermission("light.command")){
        $player = $this->getServer()->getPlayer($args[0]);
        $level = $player->getLevel();
	        	$this->lightning = new AddEntityPacket();
	        	$this->lightning->type = 93;
	        	$this->lightning->eid = Entity::$entityCount++;
	        	$this->lightning->metadata = [];
	        	$this->lightning->speedX = 0;
	        	$this->lightning->speedY = 0;
	        	$this->lightning->speedZ = 0;
	        }
	        $this->lightning->x = $e->getPlayer()->getX();
	        $this->lightning->y = $e->getPlayer()->getY();
	        $this->lightning->z = $e->getPLayer()->getZ();
	        foreach($e->getPlayer()->getLevel()->getPlayers() as $p);	
                        $p->dataPacket($pk);
    }else{
      $sender->sendMessage("You do not have permission to use this command");
    }
  }
                              
        public function onRespawn(PlayerRespawnEvent $e){
	        if($this->lightning = null){
	        	$this->lightning = new AddEntityPacket();
	        	$this->lightning->type = 93;
	        	$this->lightning->eid = Entity::$entityCount++;
	        	$this->lightning->metadata = [];
	        	$this->lightning->speedX = 0;
	        	$this->lightning->speedY = 0;
	        	$this->lightning->speedZ = 0;
	        }
	        $this->lightning->x = $e->getPlayer()->getX();
	        $this->lightning->y = $e->getPlayer()->getY();
	        $this->lightning->z = $e->getPLayer()->getZ();
	        foreach($e->getPlayer()->getLevel()->getPlayers() as $p);	
                        $p->dataPacket($pk);
            }  
    public function onJoin(PlayerJoinEvent $e){
	    if($this->lightning = null){
	        	$this->lightning = new AddEntityPacket();
	        	$this->lightning->type = 93;
	        	$this->lightning->eid = Entity::$entityCount++;
	        	$this->lightning->metadata = [];
	        	$this->lightning->speedX = 0;
	        	$this->lightning->speedY = 0;
	        	$this->lightning->speedZ = 0;
	        }
	        $this->lightning->x = $e->getPlayer()->getX();
	        $this->lightning->y = $e->getPlayer()->getY();
	        $this->lightning->z = $e->getPLayer()->getZ();
	        foreach($e->getPlayer()->getLevel()->getPlayers() as $p);	
                $p->dataPacket($pk);
            }
        }           
