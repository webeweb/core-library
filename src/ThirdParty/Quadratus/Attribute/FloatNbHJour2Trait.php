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
 * Nb h jour2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHJour2Trait {

    /**
     * Nb h jour2.
     *
     * @var float
     */
    private $nbHJour2;

    /**
     * Get the nb h jour2.
     *
     * @return float Returns the nb h jour2.
     */
    public function getNbHJour2() {
        return $this->nbHJour2;
    }

    /**
     * Set the nb h jour2.
     *
     * @param float $nbHJour2 The nb h jour2.
     */
    public function setNbHJour2($nbHJour2) {
        $this->nbHJour2 = $nbHJour2;
        return $this;
    }
}
