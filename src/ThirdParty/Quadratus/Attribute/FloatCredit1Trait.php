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
 * Credit1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCredit1Trait {

    /**
     * Credit1.
     *
     * @var float
     */
    private $credit1;

    /**
     * Get the credit1.
     *
     * @return float Returns the credit1.
     */
    public function getCredit1() {
        return $this->credit1;
    }

    /**
     * Set the credit1.
     *
     * @param float $credit1 The credit1.
     */
    public function setCredit1($credit1) {
        $this->credit1 = $credit1;
        return $this;
    }
}
