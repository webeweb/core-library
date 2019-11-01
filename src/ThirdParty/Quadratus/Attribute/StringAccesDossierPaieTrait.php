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
 * Acces dossier paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAccesDossierPaieTrait {

    /**
     * Acces dossier paie.
     *
     * @var string
     */
    private $accesDossierPaie;

    /**
     * Get the acces dossier paie.
     *
     * @return string Returns the acces dossier paie.
     */
    public function getAccesDossierPaie() {
        return $this->accesDossierPaie;
    }

    /**
     * Set the acces dossier paie.
     *
     * @param string $accesDossierPaie The acces dossier paie.
     */
    public function setAccesDossierPaie($accesDossierPaie) {
        $this->accesDossierPaie = $accesDossierPaie;
        return $this;
    }
}
