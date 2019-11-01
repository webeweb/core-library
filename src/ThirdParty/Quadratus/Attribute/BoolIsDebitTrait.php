<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Is debit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIsDebitTrait {

    /**
     * Is debit.
     *
     * @var bool
     */
    private $isDebit;

    /**
     * Get the is debit.
     *
     * @return bool Returns the is debit.
     */
    public function getIsDebit() {
        return $this->isDebit;
    }

    /**
     * Set the is debit.
     *
     * @param bool $isDebit The is debit.
     */
    public function setIsDebit($isDebit) {
        $this->isDebit = $isDebit;
        return $this;
    }
}
