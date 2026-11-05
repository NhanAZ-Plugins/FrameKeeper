<?php

declare(strict_types=1);

namespace KhoaGamingPro\FrameKeeper;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

final class Main extends PluginBase{
	protected function onEnable() : void{
		$this->getServer()->getPluginManager()->registerEvents(new FrameKeeperListener(), $this);
		$this->getLogger()->info(TextFormat::GREEN . "FrameKeeper enabled.");
	}
}
