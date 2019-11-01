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
 * Duree trav prec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeTravPrecTrait {

    /**
     * Duree trav prec.
     *
     * @var float
     */
    private $dureeTravPrec;

    /**
     * Get the duree trav prec.
     *
     * @return float Returns the duree trav prec.
     */
    public function getDureeTravPrec() {
        return $this->dureeTravPrec;
    }

    /**
     * Set the duree trav prec.
     *
     * @param float $dureeTravPrec The duree trav prec.
     */
    public function setDureeTravPrec($dureeTravPrec) {
        $this->dureeTravPrec = $dureeTravPrec;
        return $this;
    }
}
