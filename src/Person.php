<?php

declare(strict_types=1);

namespace DouglasGreen\GameEngine;

class Person extends Base
{
    /* Typically male or female */
    public function getGender(): string {}

    /* Human, elf, dwarf, etc. */
    public function getRace(): string {}

    /* Typically 1-100 */
    public function getHealth(): int {}

    /* Typically 1-100 */
    public function getMaxHealth(): int {}

    /* Height/length in feet (can be 0) */
    public function getHeight(): int {}

    /* Typically 1-20 */
    public function getStrength(): int {}

    public function getDexterity(): int {}

    public function getIntelligence(): int {}

    public function getWisdom(): int {}

    /* Typically -10 to 10 */
    public function getAlignment(): int {}

    public function getArmCount(): int {}

    public function getHeadCount(): int {}

    public function getLegCount(): int {}

    public function hasTail(): bool {}

    public function hasWings(): bool {}

    /* Can they fly through the air? */
    public function canFly(): bool {}

    /* How many minutes they can fly (null for indefinite)? */
    public function flyDuration(): ?int {}

    /* Can they walk on the ground? */
    public function canWalk(): bool {}

    /* Can they swim? */
    public function canSwim(): bool {}

    /* How many minutes they can go underwater (human = 5, null for indefinite)? */
    public function diveDuration(): ?int {}
}
