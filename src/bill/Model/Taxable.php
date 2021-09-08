<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Bill\Model;

use WBW\Library\Traits\Floats\FloatExcludingVatPriceTrait;
use WBW\Library\Traits\Floats\FloatIncludingVatPriceTrait;
use WBW\Library\Traits\Floats\FloatVatRateTrait;

/**
 * Taxable.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Model
 * @abstract
 */
abstract class Taxable implements TaxableInterface {

    use FloatExcludingVatPriceTrait;
    use FloatIncludingVatPriceTrait;
    use FloatVatRateTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }
}