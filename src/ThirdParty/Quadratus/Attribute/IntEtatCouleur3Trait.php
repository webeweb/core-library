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
 * Etat couleur3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntEtatCouleur3Trait {

    /**
     * Etat couleur3.
     *
     * @var int
     */
    private $etatCouleur3;

    /**
     * Get the etat couleur3.
     *
     * @return int Returns the etat couleur3.
     */
    public function getEtatCouleur3() {
        return $this->etatCouleur3;
    }

    /**
     * Set the etat couleur3.
     *
     * @param int $etatCouleur3 The etat couleur3.
     */
    public function setEtatCouleur3($etatCouleur3) {
        $this->etatCouleur3 = $etatCouleur3;
        return $this;
    }
}
