<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Monday()
 * @method static static Tuesday()
 * @method static static Wednesday()
 * @method static static Thursday()
 * @method static static Friday()
 * @method static static Saturday()
 * @method static static Sunday()
 */
final class Days extends Enum
{
  const Monday = 1;
  const Tuesday = 2;
  const Wednesday = 3;
  const Thursday = 4;
  const Friday = 5;
  const Saturday = 6;
  const Sunday = 7;
}
