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
 * Nb tds realisees fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbTdsRealiseesFactTrait {

    /**
     * Nb tds realisees fact.
     *
     * @var int
     */
    private $nbTdsRealiseesFact;

    /**
     * Get the nb tds realisees fact.
     *
     * @return int Returns the nb tds realisees fact.
     */
    public function getNbTdsRealiseesFact() {
        return $this->nbTdsRealiseesFact;
    }

    /**
     * Set the nb tds realisees fact.
     *
     * @param int $nbTdsRealiseesFact The nb tds realisees fact.
     */
    public function setNbTdsRealiseesFact($nbTdsRealiseesFact) {
        $this->nbTdsRealiseesFact = $nbTdsRealiseesFact;
        return $this;
    }
}
