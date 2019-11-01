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
 * Longueur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatLongueurTrait {

    /**
     * Longueur.
     *
     * @var float
     */
    private $longueur;

    /**
     * Get the longueur.
     *
     * @return float Returns the longueur.
     */
    public function getLongueur() {
        return $this->longueur;
    }

    /**
     * Set the longueur.
     *
     * @param float $longueur The longueur.
     */
    public function setLongueur($longueur) {
        $this->longueur = $longueur;
        return $this;
    }
}
