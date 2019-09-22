<?php


namespace Coolseven\DoctrineDbalCharType;

use Doctrine\DBAL\Types\StringType;

class CharType extends StringType
{
    public function getName()
    {
        return 'char';
    }
}