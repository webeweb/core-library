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
     * @var float|null
     */
    protected $vatAmount;

    /**
     * Get the VAT amount.
     *
     * @return float|null Returns the VAT amount.
     */
    public function getVatAmount(): ?float {
        return $this->vatAmount;
    }

    /**
     * Set the VAT amount.
     *
     * @param float|null $vatAmount The VAT amount.
     */
    public function setVatAmount(?float $vatAmount): self {
        $this->vatAmount = $vatAmount;
        return $this;
    }
}
