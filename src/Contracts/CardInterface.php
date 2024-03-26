<?php

namespace Sahil\CardTest\Contracts;

use Sahil\CardTest\Enums\Suit;
use Sahil\CardTest\Enums\Value;

/**
 * Interface for card behaviors.
 *
 * Defines the essential behaviors that all card types in the game should implement.
 *
 * @package CardGame\Contracts
 * @author  Mudassar Ali <sahil.bwp@yahoo.com>
 * @version 1.0
 */
interface CardInterface {

    public function getSuit(): Suit;

    public function getValue(): Value;

    public function __toString(): string;
}
