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
 * Float VAT amount trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait FloatVatAmountTrait {

    /**
     *  VAT amount.
     *
     * @var float
     */
    protected $vatAmount;

    /**
     * Get the VAT amount.
     *
     * @return float Returns the VAT amount.
     */
    public function getVatAmount() {
        return $this->vatAmount;
    }

    /**
     * Set the VAT amount.
     *
     * @param float $vatAmount The VAT amount.
     */
    public function setVatAmount($vatAmount) {
        $this->vatAmount = $vatAmount;
        return $this;
    }
}
