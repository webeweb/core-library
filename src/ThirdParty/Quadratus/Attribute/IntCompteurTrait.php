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
 * Compteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCompteurTrait {

    /**
     * Compteur.
     *
     * @var int
     */
    private $compteur;

    /**
     * Get the compteur.
     *
     * @return int Returns the compteur.
     */
    public function getCompteur() {
        return $this->compteur;
    }

    /**
     * Set the compteur.
     *
     * @param int $compteur The compteur.
     */
    public function setCompteur($compteur) {
        $this->compteur = $compteur;
        return $this;
    }
}
