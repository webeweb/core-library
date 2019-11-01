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
 * Creation dossier fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCreationDossierFactTrait {

    /**
     * Creation dossier fact.
     *
     * @var bool
     */
    private $creationDossierFact;

    /**
     * Get the creation dossier fact.
     *
     * @return bool Returns the creation dossier fact.
     */
    public function getCreationDossierFact() {
        return $this->creationDossierFact;
    }

    /**
     * Set the creation dossier fact.
     *
     * @param bool $creationDossierFact The creation dossier fact.
     */
    public function setCreationDossierFact($creationDossierFact) {
        $this->creationDossierFact = $creationDossierFact;
        return $this;
    }
}
