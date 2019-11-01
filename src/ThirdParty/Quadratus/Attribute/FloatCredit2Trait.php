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
 * Credit2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCredit2Trait {

    /**
     * Credit2.
     *
     * @var float
     */
    private $credit2;

    /**
     * Get the credit2.
     *
     * @return float Returns the credit2.
     */
    public function getCredit2() {
        return $this->credit2;
    }

    /**
     * Set the credit2.
     *
     * @param float $credit2 The credit2.
     */
    public function setCredit2($credit2) {
        $this->credit2 = $credit2;
        return $this;
    }
}
