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
 * Numero licence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroLicenceTrait {

    /**
     * Numero licence.
     *
     * @var string
     */
    private $numeroLicence;

    /**
     * Get the numero licence.
     *
     * @return string Returns the numero licence.
     */
    public function getNumeroLicence() {
        return $this->numeroLicence;
    }

    /**
     * Set the numero licence.
     *
     * @param string $numeroLicence The numero licence.
     */
    public function setNumeroLicence($numeroLicence) {
        $this->numeroLicence = $numeroLicence;
        return $this;
    }
}
