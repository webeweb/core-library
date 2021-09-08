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

/**
 * Taxable interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Model
 */
interface TaxableInterface {

    /**
     * Get the excluding VAT price.
     *
     * @return float|null The excluding VAT price.
     */
    public function getExcludingVatPrice(): ?float;

    /**
     * Get the including VAT price.
     *
     * @return float|null The including VAT price.
     */
    public function getIncludingVatPrice(): ?float;

    /**
     * Get the VAT amount.
     *
     * @return float|null Returns the VAT amount.
     */
    public function getVatAmount(): ?float;

    /**
     * Get the VAT rate.
     *
     * @return float|null Returns the VAT rate.
     */
    public function getVatRate(): ?float;

    /**
     * Set the excluding VAT price.
     *
     * @param float|null $excludingVatPrice The excluding VAT price.
     * @return TaxableInterface Returns this taxable.
     */
    public function setExcludingVatPrice(?float $excludingVatPrice);

    /**
     * Set the including VAT price.
     *
     * @param float|null $includingVatPrice The including VAT price.
     * @return TaxableInterface Returns this taxable.
     */
    public function setIncludingVatPrice(?float $includingVatPrice);

    /**
     * Set the VAT amount.
     *
     * @param float|null $vatAmount The VAT amount.
     * @return TaxableInterface Returns this taxable.
     */
    public function setVatAmount(?float $vatAmount);

    /**
     * Set the VAT rate.
     *
     * @param float|null $vatRate The VAT rate.
     * @return TaxableInterface Returns this taxable.
     */
    public function setVatRate(?float $vatRate);
}