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
 * Duree max hebdo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeMaxHebdoTrait {

    /**
     * Duree max hebdo.
     *
     * @var float
     */
    private $dureeMaxHebdo;

    /**
     * Get the duree max hebdo.
     *
     * @return float Returns the duree max hebdo.
     */
    public function getDureeMaxHebdo() {
        return $this->dureeMaxHebdo;
    }

    /**
     * Set the duree max hebdo.
     *
     * @param float $dureeMaxHebdo The duree max hebdo.
     */
    public function setDureeMaxHebdo($dureeMaxHebdo) {
        $this->dureeMaxHebdo = $dureeMaxHebdo;
        return $this;
    }
}
