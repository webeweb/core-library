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
 * Dads1 paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDads1PaieTrait {

    /**
     * Dads1 paie.
     *
     * @var float
     */
    private $dads1Paie;

    /**
     * Get the dads1 paie.
     *
     * @return float Returns the dads1 paie.
     */
    public function getDads1Paie() {
        return $this->dads1Paie;
    }

    /**
     * Set the dads1 paie.
     *
     * @param float $dads1Paie The dads1 paie.
     */
    public function setDads1Paie($dads1Paie) {
        $this->dads1Paie = $dads1Paie;
        return $this;
    }
}
