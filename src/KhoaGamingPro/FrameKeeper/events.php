<?php

namespace KhoaGamingPro\FrameKeeper;

use pocketmine\event\Listener;
use pocketmine\event\block\ItemFrameDropItemEvent;

class events implements Listener {
	public function alah_akbar(ItemFrameDropItemEvent $event) {
		$event->setCancelled();
	}
}
