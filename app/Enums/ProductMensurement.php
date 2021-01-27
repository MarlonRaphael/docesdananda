<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Unity()
 * @method static static Package()
 * @method static static Kilogram()
 * @method static static Milligram()
 * @method static static Milliliters()
 */
final class ProductMensurement extends Enum
{
  const Unity = 'unit';
  const Package = 'package';
  const Kilogram = 'kilogram';
  const Milligram = 'miligram';
  const Milliliters = 'mililiters';
}
