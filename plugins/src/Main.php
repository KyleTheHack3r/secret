<?php

namespace Main;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{

	public function onLoad(){
		$this->getLogger()->info(TextFormat::WHITE . "PR Core Loaded.");
                $loaded = 1;
                $status = "mode 1";
                // nothing much yet
	}

	public function onDisable(){
		$this->getLogger()->info(TextFormat::DARK_RED . "PR Core Disabled.");
                // nothing yet
	}

    /**
    * @param PlayerJoinEvent $event
    *
    * @priority HIGHEST
    */
    public function onJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        if ($player->isOp()) {
            $event->setJoinMessage("<PR> [Owner]" . $player->getDisplayName() . " has joined.");
        }else {
            $event->setJoinMessage("<PR> [Player] " . $player->getDisplayName() . " has joined.");
        }
    }
	public function onCommand(CommandSender $sender, Command $command, $label, array $args){
		switch($command->getName()){
			case "pr":
				$sender->sendMessage("<PR> PR Version 1.0.0 by @KyleTheHack3r.");
				return true;
			default:
				return false;
		}
	}

}
