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
 * Dossier prop trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDossierPropTrait {

    /**
     * Dossier prop.
     *
     * @var string
     */
    private $dossierProp;

    /**
     * Get the dossier prop.
     *
     * @return string Returns the dossier prop.
     */
    public function getDossierProp() {
        return $this->dossierProp;
    }

    /**
     * Set the dossier prop.
     *
     * @param string $dossierProp The dossier prop.
     */
    public function setDossierProp($dossierProp) {
        $this->dossierProp = $dossierProp;
        return $this;
    }
}
