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
 * Etat couleur1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntEtatCouleur1Trait {

    /**
     * Etat couleur1.
     *
     * @var int
     */
    private $etatCouleur1;

    /**
     * Get the etat couleur1.
     *
     * @return int Returns the etat couleur1.
     */
    public function getEtatCouleur1() {
        return $this->etatCouleur1;
    }

    /**
     * Set the etat couleur1.
     *
     * @param int $etatCouleur1 The etat couleur1.
     */
    public function setEtatCouleur1($etatCouleur1) {
        $this->etatCouleur1 = $etatCouleur1;
        return $this;
    }
}
