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
 * Hauteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHauteurTrait {

    /**
     * Hauteur.
     *
     * @var float
     */
    private $hauteur;

    /**
     * Get the hauteur.
     *
     * @return float Returns the hauteur.
     */
    public function getHauteur() {
        return $this->hauteur;
    }

    /**
     * Set the hauteur.
     *
     * @param float $hauteur The hauteur.
     */
    public function setHauteur($hauteur) {
        $this->hauteur = $hauteur;
        return $this;
    }
}
