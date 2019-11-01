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
 * Nb heure mois trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeureMoisTrait {

    /**
     * Nb heure mois.
     *
     * @var float
     */
    private $nbHeureMois;

    /**
     * Get the nb heure mois.
     *
     * @return float Returns the nb heure mois.
     */
    public function getNbHeureMois() {
        return $this->nbHeureMois;
    }

    /**
     * Set the nb heure mois.
     *
     * @param float $nbHeureMois The nb heure mois.
     */
    public function setNbHeureMois($nbHeureMois) {
        $this->nbHeureMois = $nbHeureMois;
        return $this;
    }
}
