<?php
namespace Sahil\CardTest\Enums;
/**
 * Enum for card Value in a standard deck.
 *
 * @package CardGame\Enums
 * @author  Mudassar Ali <sahil.bwp@yahoo.com>
 * @version 1.0
 */
enum Value: string {
    case Ace = 'Ace';
    case Two = '2';
    case Three = '3';
    case Four = '4';
    case Five = '5';
    case Six = '6';
    case Seven = '7';
    case Eight = '8';
    case Nine = '9';
    case Ten = '10';
    case Jack = 'Jack';
    case Queen = 'Queen';
    case King = 'King';
}
