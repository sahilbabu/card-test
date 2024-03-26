<?php
namespace Sahil\CardTest\Models;

use Sahil\CardTest\Contracts\DeckInterface;
use Sahil\CardTest\Factories\CardFactory;
use Sahil\CardTest\Enums\Suit;
use Sahil\CardTest\Enums\Value;

/**
 * Represents a deck of playing cards.
 *
 * @package CardGame\Models
 * @author  Mudassar Ali <sahil.bwp@yahoo.com>
 * @version 1.0
 */
class Deck implements DeckInterface {

    private array $cards = [];


    public function __construct() {
        $this->initialize();
    }

    private function initialize(): void {
        foreach (Suit::cases() as $suit) {
            foreach (Value::cases() as $value) {
                // $this->cards[] = new Card($suit, $value);
                // Use the CardFactory to create card instances
                $this->cards[] = CardFactory::createCard($suit, $value);
            }
        }
    }

    public function shuffleSuit(Suit $targetSuit): void {
        $start = null;
        $end = null;

        // Find the range within the deck where the target suit lies
        foreach ($this->cards as $index => $card) {
         //    var_dump($card->getSuit(), $targetSuit);
            if ($card->getSuit() === $targetSuit) {
               //  print "=============";
                if ($start === null) {
                    $start = $index;
                }
                $end = $index;
               //  var_dump($start, $end);
            }
        }

        // Perform the shuffle only within the range for the specified suit
        if ($start !== null && $end !== null) {
            for ($i = $start; $i <= $end; $i++) {
                $randomPosition = rand($i, $end);
                // Swap the current card with a randomly chosen one within the range
                $temp = $this->cards[$i];
                $this->cards[$i] = $this->cards[$randomPosition];
                $this->cards[$randomPosition] = $temp;
            }
        }
    }


    /**
     * Returns a string representation of the deck, listing all cards.
     *
     * @return string A string representation of the deck.
     */
    public function __toString(): string {
        $deckStr = [];
        foreach ($this->cards as $card) {
            $deckStr[] = (string) $card;
        }
        return implode(', ', $deckStr);
    }

}
