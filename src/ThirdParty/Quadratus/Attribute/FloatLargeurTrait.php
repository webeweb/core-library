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
 * Largeur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatLargeurTrait {

    /**
     * Largeur.
     *
     * @var float
     */
    private $largeur;

    /**
     * Get the largeur.
     *
     * @return float Returns the largeur.
     */
    public function getLargeur() {
        return $this->largeur;
    }

    /**
     * Set the largeur.
     *
     * @param float $largeur The largeur.
     */
    public function setLargeur($largeur) {
        $this->largeur = $largeur;
        return $this;
    }
}
