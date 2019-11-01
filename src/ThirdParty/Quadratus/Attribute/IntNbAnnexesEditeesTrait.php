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
 * Nb annexes editees trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbAnnexesEditeesTrait {

    /**
     * Nb annexes editees.
     *
     * @var int
     */
    private $nbAnnexesEditees;

    /**
     * Get the nb annexes editees.
     *
     * @return int Returns the nb annexes editees.
     */
    public function getNbAnnexesEditees() {
        return $this->nbAnnexesEditees;
    }

    /**
     * Set the nb annexes editees.
     *
     * @param int $nbAnnexesEditees The nb annexes editees.
     */
    public function setNbAnnexesEditees($nbAnnexesEditees) {
        $this->nbAnnexesEditees = $nbAnnexesEditees;
        return $this;
    }
}
