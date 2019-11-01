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
 * Nb heure majoration trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeureMajorationTrait {

    /**
     * Nb heure majoration.
     *
     * @var float
     */
    private $nbHeureMajoration;

    /**
     * Get the nb heure majoration.
     *
     * @return float Returns the nb heure majoration.
     */
    public function getNbHeureMajoration() {
        return $this->nbHeureMajoration;
    }

    /**
     * Set the nb heure majoration.
     *
     * @param float $nbHeureMajoration The nb heure majoration.
     */
    public function setNbHeureMajoration($nbHeureMajoration) {
        $this->nbHeureMajoration = $nbHeureMajoration;
        return $this;
    }
}
