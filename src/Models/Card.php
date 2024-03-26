<?php
namespace Sahil\CardTest\Models;
Use Sahil\CardTest\Contracts\CardInterface;
use Sahil\CardTest\Enums\Suit;
use Sahil\CardTest\Enums\Value;
/**
 * Represents a playing card with a suit and value.
 *
 * @package CardGame\Models
 * @author  Mudassar Ali <sahil.bwp@yahoo.com>
 * @version 1.0
 */
class Card implements  CardInterface{

    private Suit $suit;

    private Value $value;

    public function __construct(Suit $suit, Value $value) {
        $this->suit = $suit;
        $this->value = $value;
    }

    public function getSuit(): Suit {
        return $this->suit;
    }

    public function getValue(): Value {
        return $this->value;
    }

    public function __toString(): string {
        return "{$this->value->value} of {$this->suit->value}";
    }
}
