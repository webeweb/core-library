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
 * Nb heure trav mois trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeureTravMoisTrait {

    /**
     * Nb heure trav mois.
     *
     * @var float
     */
    private $nbHeureTravMois;

    /**
     * Get the nb heure trav mois.
     *
     * @return float Returns the nb heure trav mois.
     */
    public function getNbHeureTravMois() {
        return $this->nbHeureTravMois;
    }

    /**
     * Set the nb heure trav mois.
     *
     * @param float $nbHeureTravMois The nb heure trav mois.
     */
    public function setNbHeureTravMois($nbHeureTravMois) {
        $this->nbHeureTravMois = $nbHeureTravMois;
        return $this;
    }
}
