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
 * Duree moy hebdo1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeMoyHebdo1Trait {

    /**
     * Duree moy hebdo1.
     *
     * @var float
     */
    private $dureeMoyHebdo1;

    /**
     * Get the duree moy hebdo1.
     *
     * @return float Returns the duree moy hebdo1.
     */
    public function getDureeMoyHebdo1() {
        return $this->dureeMoyHebdo1;
    }

    /**
     * Set the duree moy hebdo1.
     *
     * @param float $dureeMoyHebdo1 The duree moy hebdo1.
     */
    public function setDureeMoyHebdo1($dureeMoyHebdo1) {
        $this->dureeMoyHebdo1 = $dureeMoyHebdo1;
        return $this;
    }
}
