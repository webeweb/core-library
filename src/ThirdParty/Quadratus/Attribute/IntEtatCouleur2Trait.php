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
 * Etat couleur2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntEtatCouleur2Trait {

    /**
     * Etat couleur2.
     *
     * @var int
     */
    private $etatCouleur2;

    /**
     * Get the etat couleur2.
     *
     * @return int Returns the etat couleur2.
     */
    public function getEtatCouleur2() {
        return $this->etatCouleur2;
    }

    /**
     * Set the etat couleur2.
     *
     * @param int $etatCouleur2 The etat couleur2.
     */
    public function setEtatCouleur2($etatCouleur2) {
        $this->etatCouleur2 = $etatCouleur2;
        return $this;
    }
}
