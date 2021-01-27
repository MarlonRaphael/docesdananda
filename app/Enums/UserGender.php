<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Male()
 * @method static static Female()
 * @method static static Other()
 */
final class UserGender extends Enum
{
  const Male = 0;
  const Female = 1;
  const Other = 2;

  public static function getDescription($value): string
  {
    if ($value === self::Male) {
      return 'Masculino';
    }

    if ($value === self::Female) {
      return 'Feminino';
    }

    if ($value === self::Other) {
      return 'Outros';
    }

    return parent::getDescription($value);
  }
}
