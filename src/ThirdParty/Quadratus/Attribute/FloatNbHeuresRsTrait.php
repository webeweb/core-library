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
 * Nb heures rs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeuresRsTrait {

    /**
     * Nb heures rs.
     *
     * @var float
     */
    private $nbHeuresRs;

    /**
     * Get the nb heures rs.
     *
     * @return float Returns the nb heures rs.
     */
    public function getNbHeuresRs() {
        return $this->nbHeuresRs;
    }

    /**
     * Set the nb heures rs.
     *
     * @param float $nbHeuresRs The nb heures rs.
     */
    public function setNbHeuresRs($nbHeuresRs) {
        $this->nbHeuresRs = $nbHeuresRs;
        return $this;
    }
}
