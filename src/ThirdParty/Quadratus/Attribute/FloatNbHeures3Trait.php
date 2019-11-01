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
 * Nb heures3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeures3Trait {

    /**
     * Nb heures3.
     *
     * @var float
     */
    private $nbHeures3;

    /**
     * Get the nb heures3.
     *
     * @return float Returns the nb heures3.
     */
    public function getNbHeures3() {
        return $this->nbHeures3;
    }

    /**
     * Set the nb heures3.
     *
     * @param float $nbHeures3 The nb heures3.
     */
    public function setNbHeures3($nbHeures3) {
        $this->nbHeures3 = $nbHeures3;
        return $this;
    }
}
