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
 * Nb heures2 rs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeures2RsTrait {

    /**
     * Nb heures2 rs.
     *
     * @var float
     */
    private $nbHeures2Rs;

    /**
     * Get the nb heures2 rs.
     *
     * @return float Returns the nb heures2 rs.
     */
    public function getNbHeures2Rs() {
        return $this->nbHeures2Rs;
    }

    /**
     * Set the nb heures2 rs.
     *
     * @param float $nbHeures2Rs The nb heures2 rs.
     */
    public function setNbHeures2Rs($nbHeures2Rs) {
        $this->nbHeures2Rs = $nbHeures2Rs;
        return $this;
    }
}
