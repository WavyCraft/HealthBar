<?php

declare(strict_types=1);

namespace wavycraft\healthbar;

use pocketmine\plugin\PluginBase;

final class Loader extends PluginBase {

    protected function onEnable() : void{
        $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);
        $this->getScheduler()->scheduleRepeatingTask(new HealthCheckTask(), 20);
    }
}
