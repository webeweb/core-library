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
 * Creation dossier paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCreationDossierPaieTrait {

    /**
     * Creation dossier paie.
     *
     * @var bool
     */
    private $creationDossierPaie;

    /**
     * Get the creation dossier paie.
     *
     * @return bool Returns the creation dossier paie.
     */
    public function getCreationDossierPaie() {
        return $this->creationDossierPaie;
    }

    /**
     * Set the creation dossier paie.
     *
     * @param bool $creationDossierPaie The creation dossier paie.
     */
    public function setCreationDossierPaie($creationDossierPaie) {
        $this->creationDossierPaie = $creationDossierPaie;
        return $this;
    }
}
