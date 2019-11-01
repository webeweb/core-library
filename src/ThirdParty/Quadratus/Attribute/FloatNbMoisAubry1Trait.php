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
 * Nb mois aubry1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbMoisAubry1Trait {

    /**
     * Nb mois aubry1.
     *
     * @var float
     */
    private $nbMoisAubry1;

    /**
     * Get the nb mois aubry1.
     *
     * @return float Returns the nb mois aubry1.
     */
    public function getNbMoisAubry1() {
        return $this->nbMoisAubry1;
    }

    /**
     * Set the nb mois aubry1.
     *
     * @param float $nbMoisAubry1 The nb mois aubry1.
     */
    public function setNbMoisAubry1($nbMoisAubry1) {
        $this->nbMoisAubry1 = $nbMoisAubry1;
        return $this;
    }
}
