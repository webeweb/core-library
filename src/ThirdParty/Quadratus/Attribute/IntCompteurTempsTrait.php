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
 * Compteur temps trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCompteurTempsTrait {

    /**
     * Compteur temps.
     *
     * @var int
     */
    private $compteurTemps;

    /**
     * Get the compteur temps.
     *
     * @return int Returns the compteur temps.
     */
    public function getCompteurTemps() {
        return $this->compteurTemps;
    }

    /**
     * Set the compteur temps.
     *
     * @param int $compteurTemps The compteur temps.
     */
    public function setCompteurTemps($compteurTemps) {
        $this->compteurTemps = $compteurTemps;
        return $this;
    }
}
