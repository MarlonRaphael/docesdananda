<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Unprocessed()
 * @method static static Feedstock()
 * @method static static Finished()
 */
final class ProductType extends Enum
{
  /**
   * Material não ou mínimamente processados Ex: Trigo, ovos.
   */
  const Unprocessed = 'unprocessed';

  /**
   * Matéria prima, produtos como Leite condensado, creme de leite, leite...
   */
  const Feedstock = 'feedstock';

  /**
   * Produtos acabados, produtos de venda.
   */
  const Finished = 'finished';

  /**
   * Itens de embalagem dos produtos
   */
  const Packing = 'packing';
}
