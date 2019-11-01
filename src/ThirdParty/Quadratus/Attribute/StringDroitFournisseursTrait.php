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
 * Droit fournisseurs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDroitFournisseursTrait {

    /**
     * Droit fournisseurs.
     *
     * @var string
     */
    private $droitFournisseurs;

    /**
     * Get the droit fournisseurs.
     *
     * @return string Returns the droit fournisseurs.
     */
    public function getDroitFournisseurs() {
        return $this->droitFournisseurs;
    }

    /**
     * Set the droit fournisseurs.
     *
     * @param string $droitFournisseurs The droit fournisseurs.
     */
    public function setDroitFournisseurs($droitFournisseurs) {
        $this->droitFournisseurs = $droitFournisseurs;
        return $this;
    }
}
