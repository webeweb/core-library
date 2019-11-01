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
 * Nb fin contrat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbFinContratTrait {

    /**
     * Nb fin contrat.
     *
     * @var float
     */
    private $nbFinContrat;

    /**
     * Get the nb fin contrat.
     *
     * @return float Returns the nb fin contrat.
     */
    public function getNbFinContrat() {
        return $this->nbFinContrat;
    }

    /**
     * Set the nb fin contrat.
     *
     * @param float $nbFinContrat The nb fin contrat.
     */
    public function setNbFinContrat($nbFinContrat) {
        $this->nbFinContrat = $nbFinContrat;
        return $this;
    }
}
