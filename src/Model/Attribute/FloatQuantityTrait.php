<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * Float quantity trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait FloatQuantityTrait {

    /**
     * Quantity.
     *
     * @var float|null
     */
    protected $quantity;

    /**
     * Get the quantity.
     *
     * @return float|null Returns the quantity.
     */
    public function getQuantity(): ?float {
        return $this->quantity;
    }

    /**
     * Set the quantity.
     *
     * @param float|null $quantity The quantity.
     */
    public function setQuantity(?float $quantity) {
        $this->quantity = $quantity;
        return $this;
    }
}
