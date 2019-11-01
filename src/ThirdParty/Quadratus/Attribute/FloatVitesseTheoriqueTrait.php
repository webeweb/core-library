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
 * Vitesse theorique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatVitesseTheoriqueTrait {

    /**
     * Vitesse theorique.
     *
     * @var float
     */
    private $vitesseTheorique;

    /**
     * Get the vitesse theorique.
     *
     * @return float Returns the vitesse theorique.
     */
    public function getVitesseTheorique() {
        return $this->vitesseTheorique;
    }

    /**
     * Set the vitesse theorique.
     *
     * @param float $vitesseTheorique The vitesse theorique.
     */
    public function setVitesseTheorique($vitesseTheorique) {
        $this->vitesseTheorique = $vitesseTheorique;
        return $this;
    }
}
