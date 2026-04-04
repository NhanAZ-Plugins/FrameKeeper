<?php

namespace KhoaGamingPro\FrameKeeper;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;

class main extends PluginBase {
	public function onEnable() {
		Server::getInstance()->getPluginManager()->registerEvents(new events($this), $this);
		Server::getInstance()->getLogger()->info("§b[§eFrameKeeper §dv1.1§b]§a Đã kích hoạt thành công!");
	}
}
