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
 * Nb centr imprimees trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbCentrImprimeesTrait {

    /**
     * Nb centr imprimees.
     *
     * @var int
     */
    private $nbCentrImprimees;

    /**
     * Get the nb centr imprimees.
     *
     * @return int Returns the nb centr imprimees.
     */
    public function getNbCentrImprimees() {
        return $this->nbCentrImprimees;
    }

    /**
     * Set the nb centr imprimees.
     *
     * @param int $nbCentrImprimees The nb centr imprimees.
     */
    public function setNbCentrImprimees($nbCentrImprimees) {
        $this->nbCentrImprimees = $nbCentrImprimees;
        return $this;
    }
}
