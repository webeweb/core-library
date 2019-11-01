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
 * Modif dossier fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModifDossierFactTrait {

    /**
     * Modif dossier fact.
     *
     * @var string
     */
    private $modifDossierFact;

    /**
     * Get the modif dossier fact.
     *
     * @return string Returns the modif dossier fact.
     */
    public function getModifDossierFact() {
        return $this->modifDossierFact;
    }

    /**
     * Set the modif dossier fact.
     *
     * @param string $modifDossierFact The modif dossier fact.
     */
    public function setModifDossierFact($modifDossierFact) {
        $this->modifDossierFact = $modifDossierFact;
        return $this;
    }
}
