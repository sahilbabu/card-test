<?php

namespace Sahil\CardTest\Factories;

use Sahil\CardTest\Contracts\CardInterface;
use Sahil\CardTest\Enums\Suit;
use Sahil\CardTest\Enums\Value;
use Sahil\CardTest\Models\Card;

class CardFactory
{
    public static function createCard(Suit $suit, Value $value): CardInterface
    {
        return new Card($suit, $value);
    }

}
