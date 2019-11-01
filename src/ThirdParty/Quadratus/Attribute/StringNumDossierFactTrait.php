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
 * Num dossier fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumDossierFactTrait {

    /**
     * Num dossier fact.
     *
     * @var string
     */
    private $numDossierFact;

    /**
     * Get the num dossier fact.
     *
     * @return string Returns the num dossier fact.
     */
    public function getNumDossierFact() {
        return $this->numDossierFact;
    }

    /**
     * Set the num dossier fact.
     *
     * @param string $numDossierFact The num dossier fact.
     */
    public function setNumDossierFact($numDossierFact) {
        $this->numDossierFact = $numDossierFact;
        return $this;
    }
}
