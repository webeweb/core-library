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
 * Billable detail interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Model
 */
interface BillableDetailInterface {

    /**
     * Get the billable.
     *
     * @return BillableInterface|null Returns the billable.
     */
    public function getBillable(): ?BillableInterface;

    /**
     * Get the comment.
     *
     * @return string|null Returns the comment.
     */
    public function getComment(): ?string;

    /**
     * Get the discount rate.
     *
     * @return float|null The discount rate.
     */
    public function getDiscountRate(): ?float;

    /**
     * Get the excluding VAT price.
     *
     * @return float|null The excluding VAT price.
     */
    public function getExcludingVatPrice(): ?float;

    /**
     * Get the excluding VAT total.
     *
     * @return float|null The excluding VAT total.
     */
    public function getExcludingVatTotal(): ?float;

    /**
     * Get the including VAT price.
     *
     * @return float|null The including VAT price.
     */
    public function getIncludingVatPrice(): ?float;

    /**
     * Get the including VAT total.
     *
     * @return float|null The including VAT total.
     */
    public function getIncludingVatTotal(): ?float;

    /**
     * Get the label.
     *
     * @return string|null Returns the label.
     */
    public function getLabel(): ?string;

    /**
     * Get the quantity.
     *
     * @return float|null The quantity.
     */
    public function getQuantity(): ?float;

    /**
     * Get the reference.
     *
     * @return string|null Returns the reference.
     */
    public function getReference(): ?string;

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
     * Get the VAT total.
     *
     * @return float|null Returns the VAT total.
     */
    public function getVatTotal(): ?float;

    /**
     * On submit.
     *
     * @return BillableDetailInterface Returns this billable detail.
     */
    public function onSubmit(): BillableDetailInterface;

    /**
     * Set the billable.
     *
     * @param BillableInterface|null $billable The billable.
     * @return BillableDetailInterface Returns this billable detail.
     */
    public function setBillable(?BillableInterface $billable): BillableDetailInterface;

    /**
     * Set the comment.
     *
     * @param string|null $comment The comment.
     * @return BillableDetailInterface Returns the billable detail.
     */
    public function setComment(?string $comment);

    /**
     * Set the discount rate.
     *
     * @param float|null $discountRate The discount rate.
     * @return BillableDetailInterface Returns this billable detail.
     */
    public function setDiscountRate(?float $discountRate);

    /**
     * Set the excluding VAT price.
     *
     * @param float|null $excludingVatPrice The excluding VAT price.
     * @return BillableDetailInterface Returns this billable detail.
     */
    public function setExcludingVatPrice(?float $excludingVatPrice);

    /**
     * Set the excluding VAT total.
     *
     * @param float|null $excludingVatTotal The excluding VAT total.
     * @return BillableDetailInterface Returns this billable detail.
     */
    public function setExcludingVatTotal(?float $excludingVatTotal);

    /**
     * Set the including VAT price.
     *
     * @param float|null $includingVatPrice The including VAT price.
     * @return BillableDetailInterface Returns this billable detail.
     */
    public function setIncludingVatPrice(?float $includingVatPrice);

    /**
     * Set the including VAT total.
     *
     * @param float|null $includingVatTotal The including VAT total.
     * @return BillableDetailInterface Returns this billable detail.
     */
    public function setIncludingVatTotal(?float $includingVatTotal);

    /**
     * Set the label.
     *
     * @param string|null $label The label.
     * @return BillableDetailInterface Returns this billable detail.
     */
    public function setLabel(?string $label);

    /**
     * Set the quantity.
     *
     * @param float|null $quantity The quantity.
     * @return BillableDetailInterface Returns this billable detail.
     */
    public function setQuantity(?float $quantity);

    /**
     * Set the reference.
     *
     * @param string|null $reference The reference.
     * @return BillableDetailInterface Returns this billable detail.
     */
    public function setReference(?string $reference);

    /**
     * Set the VAT amount.
     *
     * @param float|null $vatAmount The VAT amount.
     * @return BillableDetailInterface Returns this billable detail.
     */
    public function setVatAmount(?float $vatAmount);

    /**
     * Set the VAT rate.
     *
     * @param float|null $vatRate The VAT rate.
     * @return BillableDetailInterface Returns this billable detail.
     */
    public function setVatRate(?float $vatRate);

    /**
     * Set the VAT total.
     *
     * @param float|null $vatTotal The VAT total.
     * @return BillableDetailInterface Returns this billable detail.
     */
    public function setVatTotal(?float $vatTotal);

}