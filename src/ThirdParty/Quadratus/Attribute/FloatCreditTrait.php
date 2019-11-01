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
 * Credit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCreditTrait {

    /**
     * Credit.
     *
     * @var float
     */
    private $credit;

    /**
     * Get the credit.
     *
     * @return float Returns the credit.
     */
    public function getCredit() {
        return $this->credit;
    }

    /**
     * Set the credit.
     *
     * @param float $credit The credit.
     */
    public function setCredit($credit) {
        $this->credit = $credit;
        return $this;
    }
}
