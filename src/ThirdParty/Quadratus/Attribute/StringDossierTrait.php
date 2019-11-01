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
 * Dossier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDossierTrait {

    /**
     * Dossier.
     *
     * @var string
     */
    private $dossier;

    /**
     * Get the dossier.
     *
     * @return string Returns the dossier.
     */
    public function getDossier() {
        return $this->dossier;
    }

    /**
     * Set the dossier.
     *
     * @param string $dossier The dossier.
     */
    public function setDossier($dossier) {
        $this->dossier = $dossier;
        return $this;
    }
}
