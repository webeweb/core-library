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
 * Nb ana imprimees fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbAnaImprimeesFactTrait {

    /**
     * Nb ana imprimees fact.
     *
     * @var int
     */
    private $nbAnaImprimeesFact;

    /**
     * Get the nb ana imprimees fact.
     *
     * @return int Returns the nb ana imprimees fact.
     */
    public function getNbAnaImprimeesFact() {
        return $this->nbAnaImprimeesFact;
    }

    /**
     * Set the nb ana imprimees fact.
     *
     * @param int $nbAnaImprimeesFact The nb ana imprimees fact.
     */
    public function setNbAnaImprimeesFact($nbAnaImprimeesFact) {
        $this->nbAnaImprimeesFact = $nbAnaImprimeesFact;
        return $this;
    }
}
