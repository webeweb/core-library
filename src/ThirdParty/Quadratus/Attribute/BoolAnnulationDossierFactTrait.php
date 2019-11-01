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
 * Annulation dossier fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAnnulationDossierFactTrait {

    /**
     * Annulation dossier fact.
     *
     * @var bool
     */
    private $annulationDossierFact;

    /**
     * Get the annulation dossier fact.
     *
     * @return bool Returns the annulation dossier fact.
     */
    public function getAnnulationDossierFact() {
        return $this->annulationDossierFact;
    }

    /**
     * Set the annulation dossier fact.
     *
     * @param bool $annulationDossierFact The annulation dossier fact.
     */
    public function setAnnulationDossierFact($annulationDossierFact) {
        $this->annulationDossierFact = $annulationDossierFact;
        return $this;
    }
}
