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
 * Annulation dossier paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAnnulationDossierPaieTrait {

    /**
     * Annulation dossier paie.
     *
     * @var bool
     */
    private $annulationDossierPaie;

    /**
     * Get the annulation dossier paie.
     *
     * @return bool Returns the annulation dossier paie.
     */
    public function getAnnulationDossierPaie() {
        return $this->annulationDossierPaie;
    }

    /**
     * Set the annulation dossier paie.
     *
     * @param bool $annulationDossierPaie The annulation dossier paie.
     */
    public function setAnnulationDossierPaie($annulationDossierPaie) {
        $this->annulationDossierPaie = $annulationDossierPaie;
        return $this;
    }
}
