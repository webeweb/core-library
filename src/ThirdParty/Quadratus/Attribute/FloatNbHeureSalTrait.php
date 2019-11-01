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
 * Nb heure sal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeureSalTrait {

    /**
     * Nb heure sal.
     *
     * @var float
     */
    private $nbHeureSal;

    /**
     * Get the nb heure sal.
     *
     * @return float Returns the nb heure sal.
     */
    public function getNbHeureSal() {
        return $this->nbHeureSal;
    }

    /**
     * Set the nb heure sal.
     *
     * @param float $nbHeureSal The nb heure sal.
     */
    public function setNbHeureSal($nbHeureSal) {
        $this->nbHeureSal = $nbHeureSal;
        return $this;
    }
}
