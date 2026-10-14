<?php

declare(strict_types=1);

namespace KhoaGamingPro\FrameKeeper;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

final class Main extends PluginBase{
	protected function onEnable() : void{
		$this->getServer()->getPluginManager()->registerEvents(new FrameKeeperListener(), $this);
		$this->getLogger()->info(TextFormat::AQUA . "[" . TextFormat::YELLOW . "FrameKeeper " . TextFormat::LIGHT_PURPLE . "v1.1" . TextFormat::AQUA . "]" . TextFormat::GREEN . " Đã kích hoạt thành công!");
	}
}
