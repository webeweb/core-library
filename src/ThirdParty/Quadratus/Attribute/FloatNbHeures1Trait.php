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
 * Nb heures1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeures1Trait {

    /**
     * Nb heures1.
     *
     * @var float
     */
    private $nbHeures1;

    /**
     * Get the nb heures1.
     *
     * @return float Returns the nb heures1.
     */
    public function getNbHeures1() {
        return $this->nbHeures1;
    }

    /**
     * Set the nb heures1.
     *
     * @param float $nbHeures1 The nb heures1.
     */
    public function setNbHeures1($nbHeures1) {
        $this->nbHeures1 = $nbHeures1;
        return $this;
    }
}
