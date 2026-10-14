<?php

declare(strict_types=1);

require dirname(__DIR__) . "/src/KhoaGamingPro/FrameKeeper/FrameProtectionPolicy.php";

use KhoaGamingPro\FrameKeeper\FrameProtectionPolicy;

$cases = [
	[true, true, true],
	[true, false, false],
	[false, true, false],
	[false, false, false]
];
foreach($cases as [$leftClick, $occupiedFrame, $expected]){
	if(FrameProtectionPolicy::shouldBlockRemoval($leftClick, $occupiedFrame) !== $expected){
		throw new RuntimeException("Unexpected item-frame protection decision.");
	}
}

echo "Item-frame protection policy checks passed.\n";
