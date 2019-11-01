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
 * Nb heure paye trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeurePayeTrait {

    /**
     * Nb heure paye.
     *
     * @var float
     */
    private $nbHeurePaye;

    /**
     * Get the nb heure paye.
     *
     * @return float Returns the nb heure paye.
     */
    public function getNbHeurePaye() {
        return $this->nbHeurePaye;
    }

    /**
     * Set the nb heure paye.
     *
     * @param float $nbHeurePaye The nb heure paye.
     */
    public function setNbHeurePaye($nbHeurePaye) {
        $this->nbHeurePaye = $nbHeurePaye;
        return $this;
    }
}
