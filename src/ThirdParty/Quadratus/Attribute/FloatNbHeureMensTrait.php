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
 * Nb heure mens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeureMensTrait {

    /**
     * Nb heure mens.
     *
     * @var float
     */
    private $nbHeureMens;

    /**
     * Get the nb heure mens.
     *
     * @return float Returns the nb heure mens.
     */
    public function getNbHeureMens() {
        return $this->nbHeureMens;
    }

    /**
     * Set the nb heure mens.
     *
     * @param float $nbHeureMens The nb heure mens.
     */
    public function setNbHeureMens($nbHeureMens) {
        $this->nbHeureMens = $nbHeureMens;
        return $this;
    }
}
