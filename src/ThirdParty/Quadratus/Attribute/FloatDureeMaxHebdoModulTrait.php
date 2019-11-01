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
 * Duree max hebdo modul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeMaxHebdoModulTrait {

    /**
     * Duree max hebdo modul.
     *
     * @var float
     */
    private $dureeMaxHebdoModul;

    /**
     * Get the duree max hebdo modul.
     *
     * @return float Returns the duree max hebdo modul.
     */
    public function getDureeMaxHebdoModul() {
        return $this->dureeMaxHebdoModul;
    }

    /**
     * Set the duree max hebdo modul.
     *
     * @param float $dureeMaxHebdoModul The duree max hebdo modul.
     */
    public function setDureeMaxHebdoModul($dureeMaxHebdoModul) {
        $this->dureeMaxHebdoModul = $dureeMaxHebdoModul;
        return $this;
    }
}
