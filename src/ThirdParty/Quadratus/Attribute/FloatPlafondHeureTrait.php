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
 * Plafond heure trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPlafondHeureTrait {

    /**
     * Plafond heure.
     *
     * @var float
     */
    private $plafondHeure;

    /**
     * Get the plafond heure.
     *
     * @return float Returns the plafond heure.
     */
    public function getPlafondHeure() {
        return $this->plafondHeure;
    }

    /**
     * Set the plafond heure.
     *
     * @param float $plafondHeure The plafond heure.
     */
    public function setPlafondHeure($plafondHeure) {
        $this->plafondHeure = $plafondHeure;
        return $this;
    }
}
