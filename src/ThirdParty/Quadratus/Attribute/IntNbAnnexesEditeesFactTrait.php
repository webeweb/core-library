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
 * Nb annexes editees fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbAnnexesEditeesFactTrait {

    /**
     * Nb annexes editees fact.
     *
     * @var int
     */
    private $nbAnnexesEditeesFact;

    /**
     * Get the nb annexes editees fact.
     *
     * @return int Returns the nb annexes editees fact.
     */
    public function getNbAnnexesEditeesFact() {
        return $this->nbAnnexesEditeesFact;
    }

    /**
     * Set the nb annexes editees fact.
     *
     * @param int $nbAnnexesEditeesFact The nb annexes editees fact.
     */
    public function setNbAnnexesEditeesFact($nbAnnexesEditeesFact) {
        $this->nbAnnexesEditeesFact = $nbAnnexesEditeesFact;
        return $this;
    }
}
