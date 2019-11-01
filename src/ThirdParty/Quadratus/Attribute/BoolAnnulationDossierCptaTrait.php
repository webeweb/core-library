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
 * Annulation dossier cpta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAnnulationDossierCptaTrait {

    /**
     * Annulation dossier cpta.
     *
     * @var bool
     */
    private $annulationDossierCpta;

    /**
     * Get the annulation dossier cpta.
     *
     * @return bool Returns the annulation dossier cpta.
     */
    public function getAnnulationDossierCpta() {
        return $this->annulationDossierCpta;
    }

    /**
     * Set the annulation dossier cpta.
     *
     * @param bool $annulationDossierCpta The annulation dossier cpta.
     */
    public function setAnnulationDossierCpta($annulationDossierCpta) {
        $this->annulationDossierCpta = $annulationDossierCpta;
        return $this;
    }
}
