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
 * Vitesse reelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatVitesseReelleTrait {

    /**
     * Vitesse reelle.
     *
     * @var float
     */
    private $vitesseReelle;

    /**
     * Get the vitesse reelle.
     *
     * @return float Returns the vitesse reelle.
     */
    public function getVitesseReelle() {
        return $this->vitesseReelle;
    }

    /**
     * Set the vitesse reelle.
     *
     * @param float $vitesseReelle The vitesse reelle.
     */
    public function setVitesseReelle($vitesseReelle) {
        $this->vitesseReelle = $vitesseReelle;
        return $this;
    }
}
