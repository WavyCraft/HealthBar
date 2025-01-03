<?php

declare(strict_types=1);

namespace wavycraft\healthbar;

use pocketmine\Server;

use pocketmine\scheduler\Task;

class HealthCheckTask extends Task {

    public function onRun() : void{
        foreach (Server::getInstance()->getOnlinePlayers() as $player) {
            HealthBar::getInstance()->updateHealthBarTag($player);
        }
    }
}