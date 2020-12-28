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
 * String accounting code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringAccountingCodeTrait {

    /**
     * Accounting code.
     *
     * @var string|null
     */
    protected $accountingCode;

    /**
     * Get the accounting code.
     *
     * @return string|null Returns the accounting code.
     */
    public function getAccountingCode(): ?string {
        return $this->accountingCode;
    }

    /**
     * Set the accounting code.
     *
     * @param string|null $accountingCode The accounting code.
     */
    public function setAccountingCode(?string $accountingCode) {
        $this->accountingCode = $accountingCode;
        return $this;
    }
}
