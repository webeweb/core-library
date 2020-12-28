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
 * Float VAT total trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait FloatVatTotalTrait {

    /**
     *  VAT total.
     *
     * @var float|null
     */
    protected $vatTotal;

    /**
     * Get the VAT total.
     *
     * @return float|null Returns the VAT total.
     */
    public function getVatTotal(): ?float {
        return $this->vatTotal;
    }

    /**
     * Set the VAT total.
     *
     * @param float|null $vatTotal The VAT total.
     */
    public function setVatTotal(?float $vatTotal) {
        $this->vatTotal = $vatTotal;
        return $this;
    }
}
