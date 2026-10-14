<?php

declare(strict_types=1);

namespace KhoaGamingPro\FrameKeeper;

final class FrameProtectionPolicy{
	public static function shouldBlockRemoval(bool $leftClick, bool $occupiedItemFrame) : bool{
		return $leftClick && $occupiedItemFrame;
	}
}
