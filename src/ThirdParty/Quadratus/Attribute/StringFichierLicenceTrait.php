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
 * Fichier licence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFichierLicenceTrait {

    /**
     * Fichier licence.
     *
     * @var string
     */
    private $fichierLicence;

    /**
     * Get the fichier licence.
     *
     * @return string Returns the fichier licence.
     */
    public function getFichierLicence() {
        return $this->fichierLicence;
    }

    /**
     * Set the fichier licence.
     *
     * @param string $fichierLicence The fichier licence.
     */
    public function setFichierLicence($fichierLicence) {
        $this->fichierLicence = $fichierLicence;
        return $this;
    }
}
