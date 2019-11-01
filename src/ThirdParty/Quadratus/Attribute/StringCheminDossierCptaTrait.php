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
 * Chemin dossier cpta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCheminDossierCptaTrait {

    /**
     * Chemin dossier cpta.
     *
     * @var string
     */
    private $cheminDossierCpta;

    /**
     * Get the chemin dossier cpta.
     *
     * @return string Returns the chemin dossier cpta.
     */
    public function getCheminDossierCpta() {
        return $this->cheminDossierCpta;
    }

    /**
     * Set the chemin dossier cpta.
     *
     * @param string $cheminDossierCpta The chemin dossier cpta.
     */
    public function setCheminDossierCpta($cheminDossierCpta) {
        $this->cheminDossierCpta = $cheminDossierCpta;
        return $this;
    }
}
