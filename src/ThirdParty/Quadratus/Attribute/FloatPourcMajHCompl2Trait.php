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
 * Pourc maj h compl2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPourcMajHCompl2Trait {

    /**
     * Pourc maj h compl2.
     *
     * @var float
     */
    private $pourcMajHCompl2;

    /**
     * Get the pourc maj h compl2.
     *
     * @return float Returns the pourc maj h compl2.
     */
    public function getPourcMajHCompl2() {
        return $this->pourcMajHCompl2;
    }

    /**
     * Set the pourc maj h compl2.
     *
     * @param float $pourcMajHCompl2 The pourc maj h compl2.
     */
    public function setPourcMajHCompl2($pourcMajHCompl2) {
        $this->pourcMajHCompl2 = $pourcMajHCompl2;
        return $this;
    }
}
