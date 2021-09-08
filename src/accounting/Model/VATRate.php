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

use WBW\Library\Traits\Floats\FloatRateTrait;
use WBW\Library\Traits\Strings\StringLabelTrait;

/**
 * VAT rate.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Model
 */
class VATRate implements VATRateInterface {

    use FloatRateTrait;
    use StringLabelTrait;

    /**
     * Purchases accounting account.
     *
     * @var AccountingAccountInterface|null
     */
    protected $purchasesAccountingAccount;

    /**
     * Sales accounting account.
     *
     * @var AccountingAccountInterface|null
     */
    protected $salesAccountingAccount;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     */
    public function getPurchasesAccountingAccount(): ?AccountingAccountInterface {
        return $this->purchasesAccountingAccount;
    }

    /**
     * {@inheritDoc}
     */
    public function getSalesAccountingAccount(): ?AccountingAccountInterface {
        return $this->salesAccountingAccount;
    }

    /**
     * {@inheritDoc}
     */
    public function setPurchasesAccountingAccount(?AccountingAccountInterface $purchasesAccountingAccount): VATRateInterface {
        $this->purchasesAccountingAccount = $purchasesAccountingAccount;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setSalesAccountingAccount(?AccountingAccountInterface $salesAccountingAccount): VATRateInterface {
        $this->salesAccountingAccount = $salesAccountingAccount;
        return $this;
    }
}