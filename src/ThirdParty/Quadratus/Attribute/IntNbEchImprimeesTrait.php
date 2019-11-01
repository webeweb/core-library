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
 * Nb ech imprimees trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbEchImprimeesTrait {

    /**
     * Nb ech imprimees.
     *
     * @var int
     */
    private $nbEchImprimees;

    /**
     * Get the nb ech imprimees.
     *
     * @return int Returns the nb ech imprimees.
     */
    public function getNbEchImprimees() {
        return $this->nbEchImprimees;
    }

    /**
     * Set the nb ech imprimees.
     *
     * @param int $nbEchImprimees The nb ech imprimees.
     */
    public function setNbEchImprimees($nbEchImprimees) {
        $this->nbEchImprimees = $nbEchImprimees;
        return $this;
    }
}
