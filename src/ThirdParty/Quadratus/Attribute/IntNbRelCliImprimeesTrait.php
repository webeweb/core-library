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
 * Nb rel cli imprimees trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbRelCliImprimeesTrait {

    /**
     * Nb rel cli imprimees.
     *
     * @var int
     */
    private $nbRelCliImprimees;

    /**
     * Get the nb rel cli imprimees.
     *
     * @return int Returns the nb rel cli imprimees.
     */
    public function getNbRelCliImprimees() {
        return $this->nbRelCliImprimees;
    }

    /**
     * Set the nb rel cli imprimees.
     *
     * @param int $nbRelCliImprimees The nb rel cli imprimees.
     */
    public function setNbRelCliImprimees($nbRelCliImprimees) {
        $this->nbRelCliImprimees = $nbRelCliImprimees;
        return $this;
    }
}
