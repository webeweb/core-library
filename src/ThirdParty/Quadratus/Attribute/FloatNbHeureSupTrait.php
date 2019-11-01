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
 * Nb heure sup trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeureSupTrait {

    /**
     * Nb heure sup.
     *
     * @var float
     */
    private $nbHeureSup;

    /**
     * Get the nb heure sup.
     *
     * @return float Returns the nb heure sup.
     */
    public function getNbHeureSup() {
        return $this->nbHeureSup;
    }

    /**
     * Set the nb heure sup.
     *
     * @param float $nbHeureSup The nb heure sup.
     */
    public function setNbHeureSup($nbHeureSup) {
        $this->nbHeureSup = $nbHeureSup;
        return $this;
    }
}
