<?php

declare(strict_types=1);

namespace wavycraft\healthbar;

use pocketmine\event\Listener;

use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityRegainHealthEvent;

use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\player\Player;

class EventListener implements Listener {

    public function onPlayerJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        HealthBar::getInstance()->updateHealthBarTag($player);
    }

    public function onEntityDamage(EntityDamageEvent $event) {
        $entity = $event->getEntity();

        if ($entity instanceof Player) {
            HealthBar::getInstance()->updateHealthBarTag($entity);
        }
    }

    public function onEntityRegainHealth(EntityRegainHealthEvent $event) {
        $entity = $event->getEntity();
        if ($entity instanceof Player) {
            HealthBar::getInstance()->updateHealthBarTag($entity);
        }
    }
}
