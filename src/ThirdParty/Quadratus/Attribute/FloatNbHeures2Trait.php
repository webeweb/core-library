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
 * Nb heures2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeures2Trait {

    /**
     * Nb heures2.
     *
     * @var float
     */
    private $nbHeures2;

    /**
     * Get the nb heures2.
     *
     * @return float Returns the nb heures2.
     */
    public function getNbHeures2() {
        return $this->nbHeures2;
    }

    /**
     * Set the nb heures2.
     *
     * @param float $nbHeures2 The nb heures2.
     */
    public function setNbHeures2($nbHeures2) {
        $this->nbHeures2 = $nbHeures2;
        return $this;
    }
}
