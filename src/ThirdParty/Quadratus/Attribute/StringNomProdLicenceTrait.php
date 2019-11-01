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
 * Nom prod licence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomProdLicenceTrait {

    /**
     * Nom prod licence.
     *
     * @var string
     */
    private $nomProdLicence;

    /**
     * Get the nom prod licence.
     *
     * @return string Returns the nom prod licence.
     */
    public function getNomProdLicence() {
        return $this->nomProdLicence;
    }

    /**
     * Set the nom prod licence.
     *
     * @param string $nomProdLicence The nom prod licence.
     */
    public function setNomProdLicence($nomProdLicence) {
        $this->nomProdLicence = $nomProdLicence;
        return $this;
    }
}
