<?php

require_once 'vendor/autoload.php';

use Sahil\CardTest\Models\Deck;
use Sahil\CardTest\Enums\Suit;

$deck = new Deck();

// Print the deck before shuffling a specific suit
echo "Deck before shuffling Hearts:\n" . $deck . "\n\n";

// Shuffle only the Hearts suit
$deck->shuffleSuit(Suit::Hearts);

// Print the deck after shuffling a specific suit
echo "Deck after shuffling Hearts:\n" . $deck . "\n";

