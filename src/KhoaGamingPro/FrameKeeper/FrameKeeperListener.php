<?php

declare(strict_types=1);

namespace KhoaGamingPro\FrameKeeper;

use pocketmine\block\ItemFrame;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;

final class FrameKeeperListener implements Listener{
	public function onItemFrameRemovalAttempt(PlayerInteractEvent $event) : void{
		$block = $event->getBlock();
		$isOccupiedFrame = $block instanceof ItemFrame && $block->getFramedItem() !== null;
		$isLeftClick = $event->getAction() === PlayerInteractEvent::LEFT_CLICK_BLOCK;
		if(FrameProtectionPolicy::shouldBlockRemoval($isLeftClick, $isOccupiedFrame)){
			$event->cancel();
		}
	}
}
