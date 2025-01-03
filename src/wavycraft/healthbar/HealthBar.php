<?php

declare(strict_types=1);

namespace wavycraft\healthbar;

use pocketmine\player\Player;

use pocketmine\utils\TextFormat as TextColor;
use pocketmine\utils\SingletonTrait;

use wavycraft\ranks\utils\RanksManager;

final class HealthBar {
    use SingletonTrait;

    public function updateHealthBarTag(Player $player) : void{
        RanksManager::getInstance()->createTag("health_bar", str_repeat(TextColor::GREEN . "|", (int)round($player->getHealth(), 0)) . str_repeat(TextColor::RED . "|", (int)round($player->getMaxHealth() - $player->getHealth(), 0)));
    }
}