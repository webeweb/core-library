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
 * Nb h sup bonif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHSupBonifTrait {

    /**
     * Nb h sup bonif.
     *
     * @var float
     */
    private $nbHSupBonif;

    /**
     * Get the nb h sup bonif.
     *
     * @return float Returns the nb h sup bonif.
     */
    public function getNbHSupBonif() {
        return $this->nbHSupBonif;
    }

    /**
     * Set the nb h sup bonif.
     *
     * @param float $nbHSupBonif The nb h sup bonif.
     */
    public function setNbHSupBonif($nbHSupBonif) {
        $this->nbHSupBonif = $nbHSupBonif;
        return $this;
    }
}
