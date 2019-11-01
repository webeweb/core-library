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
 * Numero dossier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroDossierTrait {

    /**
     * Numero dossier.
     *
     * @var string
     */
    private $numeroDossier;

    /**
     * Get the numero dossier.
     *
     * @return string Returns the numero dossier.
     */
    public function getNumeroDossier() {
        return $this->numeroDossier;
    }

    /**
     * Set the numero dossier.
     *
     * @param string $numeroDossier The numero dossier.
     */
    public function setNumeroDossier($numeroDossier) {
        $this->numeroDossier = $numeroDossier;
        return $this;
    }
}
