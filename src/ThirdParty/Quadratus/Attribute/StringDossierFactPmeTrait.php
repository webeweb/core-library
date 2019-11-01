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
 * Dossier fact pme trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDossierFactPmeTrait {

    /**
     * Dossier fact pme.
     *
     * @var string
     */
    private $dossierFactPme;

    /**
     * Get the dossier fact pme.
     *
     * @return string Returns the dossier fact pme.
     */
    public function getDossierFactPme() {
        return $this->dossierFactPme;
    }

    /**
     * Set the dossier fact pme.
     *
     * @param string $dossierFactPme The dossier fact pme.
     */
    public function setDossierFactPme($dossierFactPme) {
        $this->dossierFactPme = $dossierFactPme;
        return $this;
    }
}
