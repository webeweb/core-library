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
 * Nb heures1 rs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeures1RsTrait {

    /**
     * Nb heures1 rs.
     *
     * @var float
     */
    private $nbHeures1Rs;

    /**
     * Get the nb heures1 rs.
     *
     * @return float Returns the nb heures1 rs.
     */
    public function getNbHeures1Rs() {
        return $this->nbHeures1Rs;
    }

    /**
     * Set the nb heures1 rs.
     *
     * @param float $nbHeures1Rs The nb heures1 rs.
     */
    public function setNbHeures1Rs($nbHeures1Rs) {
        $this->nbHeures1Rs = $nbHeures1Rs;
        return $this;
    }
}
