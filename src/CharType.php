<?php


namespace Coolseven\DoctrineDbalCharType;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\StringType;

class CharType extends StringType
{
    public function getName()
    {
        return 'char';
    }

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        $fieldDeclaration['fixed'] = true;
        return parent::getSQLDeclaration($fieldDeclaration, $platform);
    }
}