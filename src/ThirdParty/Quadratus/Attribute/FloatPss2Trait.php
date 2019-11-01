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
 * Pss2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPss2Trait {

    /**
     * Pss2.
     *
     * @var float
     */
    private $pss2;

    /**
     * Get the pss2.
     *
     * @return float Returns the pss2.
     */
    public function getPss2() {
        return $this->pss2;
    }

    /**
     * Set the pss2.
     *
     * @param float $pss2 The pss2.
     */
    public function setPss2($pss2) {
        $this->pss2 = $pss2;
        return $this;
    }
}
