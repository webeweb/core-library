<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Accounting\Model;

/**
 * VAT rate interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Model
 */
interface VATRateInterface {

    /**
     * Get the label.
     *
     * @return string|null Returns the label.
     */
    public function getLabel(): ?string;

    /**
     * Get the purchases accounting account.
     *
     * @return AccountingAccountInterface|null Returns the purchases accounting account.
     */
    public function getPurchasesAccountingAccount(): ?AccountingAccountInterface;

    /**
     * Get the sales accounting account.
     *
     * @return AccountingAccountInterface|null Returns the sales accounting account.
     */
    public function getSalesAccountingAccount(): ?AccountingAccountInterface;

    /**
     * Set the label.
     *
     * @param string|null $label The label.
     * @return VATRateInterface Returns this VAT rate.
     */
    public function setLabel(?string $label);

    /**
     * Set the purchases accounting account.
     *
     * @param AccountingAccountInterface|null $purchasesAccountingAccount The purchases accounting account.
     * @return VATRateInterface Returns this VAT rate.
     */
    public function setPurchasesAccountingAccount(?AccountingAccountInterface $purchasesAccountingAccount): VATRateInterface;

    /**
     * Set the sales accounting account.
     *
     * @param AccountingAccountInterface|null $salesAccountingAccount The sales accounting account.
     * @return VATRateInterface Returns this VAT rate.
     */
    public function setSalesAccountingAccount(?AccountingAccountInterface $salesAccountingAccount): VATRateInterface;
}