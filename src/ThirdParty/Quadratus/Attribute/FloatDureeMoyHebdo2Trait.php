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
 * Duree moy hebdo2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeMoyHebdo2Trait {

    /**
     * Duree moy hebdo2.
     *
     * @var float
     */
    private $dureeMoyHebdo2;

    /**
     * Get the duree moy hebdo2.
     *
     * @return float Returns the duree moy hebdo2.
     */
    public function getDureeMoyHebdo2() {
        return $this->dureeMoyHebdo2;
    }

    /**
     * Set the duree moy hebdo2.
     *
     * @param float $dureeMoyHebdo2 The duree moy hebdo2.
     */
    public function setDureeMoyHebdo2($dureeMoyHebdo2) {
        $this->dureeMoyHebdo2 = $dureeMoyHebdo2;
        return $this;
    }
}
