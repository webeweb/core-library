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
 * Pss1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPss1Trait {

    /**
     * Pss1.
     *
     * @var float
     */
    private $pss1;

    /**
     * Get the pss1.
     *
     * @return float Returns the pss1.
     */
    public function getPss1() {
        return $this->pss1;
    }

    /**
     * Set the pss1.
     *
     * @param float $pss1 The pss1.
     */
    public function setPss1($pss1) {
        $this->pss1 = $pss1;
        return $this;
    }
}
