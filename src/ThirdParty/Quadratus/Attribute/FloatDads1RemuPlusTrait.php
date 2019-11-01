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
 * Dads1 remu plus trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDads1RemuPlusTrait {

    /**
     * Dads1 remu plus.
     *
     * @var float
     */
    private $dads1RemuPlus;

    /**
     * Get the dads1 remu plus.
     *
     * @return float Returns the dads1 remu plus.
     */
    public function getDads1RemuPlus() {
        return $this->dads1RemuPlus;
    }

    /**
     * Set the dads1 remu plus.
     *
     * @param float $dads1RemuPlus The dads1 remu plus.
     */
    public function setDads1RemuPlus($dads1RemuPlus) {
        $this->dads1RemuPlus = $dads1RemuPlus;
        return $this;
    }
}
