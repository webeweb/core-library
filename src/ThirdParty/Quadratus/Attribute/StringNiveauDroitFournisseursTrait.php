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
 * Niveau droit fournisseurs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauDroitFournisseursTrait {

    /**
     * Niveau droit fournisseurs.
     *
     * @var string
     */
    private $niveauDroitFournisseurs;

    /**
     * Get the niveau droit fournisseurs.
     *
     * @return string Returns the niveau droit fournisseurs.
     */
    public function getNiveauDroitFournisseurs() {
        return $this->niveauDroitFournisseurs;
    }

    /**
     * Set the niveau droit fournisseurs.
     *
     * @param string $niveauDroitFournisseurs The niveau droit fournisseurs.
     */
    public function setNiveauDroitFournisseurs($niveauDroitFournisseurs) {
        $this->niveauDroitFournisseurs = $niveauDroitFournisseurs;
        return $this;
    }
}
