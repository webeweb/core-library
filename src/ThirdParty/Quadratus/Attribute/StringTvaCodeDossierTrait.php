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
 * Tva code dossier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCodeDossierTrait {

    /**
     * Tva code dossier.
     *
     * @var string
     */
    private $tvaCodeDossier;

    /**
     * Get the tva code dossier.
     *
     * @return string Returns the tva code dossier.
     */
    public function getTvaCodeDossier() {
        return $this->tvaCodeDossier;
    }

    /**
     * Set the tva code dossier.
     *
     * @param string $tvaCodeDossier The tva code dossier.
     */
    public function setTvaCodeDossier($tvaCodeDossier) {
        $this->tvaCodeDossier = $tvaCodeDossier;
        return $this;
    }
}
