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
 * Duree remplacement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeRemplacementTrait {

    /**
     * Duree remplacement.
     *
     * @var float
     */
    private $dureeRemplacement;

    /**
     * Get the duree remplacement.
     *
     * @return float Returns the duree remplacement.
     */
    public function getDureeRemplacement() {
        return $this->dureeRemplacement;
    }

    /**
     * Set the duree remplacement.
     *
     * @param float $dureeRemplacement The duree remplacement.
     */
    public function setDureeRemplacement($dureeRemplacement) {
        $this->dureeRemplacement = $dureeRemplacement;
        return $this;
    }
}
