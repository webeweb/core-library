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
 * Nb tds realisees trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbTdsRealiseesTrait {

    /**
     * Nb tds realisees.
     *
     * @var int
     */
    private $nbTdsRealisees;

    /**
     * Get the nb tds realisees.
     *
     * @return int Returns the nb tds realisees.
     */
    public function getNbTdsRealisees() {
        return $this->nbTdsRealisees;
    }

    /**
     * Set the nb tds realisees.
     *
     * @param int $nbTdsRealisees The nb tds realisees.
     */
    public function setNbTdsRealisees($nbTdsRealisees) {
        $this->nbTdsRealisees = $nbTdsRealisees;
        return $this;
    }
}
