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
 * Adresse transpac trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdresseTranspacTrait {

    /**
     * Adresse transpac.
     *
     * @var string
     */
    private $adresseTranspac;

    /**
     * Get the adresse transpac.
     *
     * @return string Returns the adresse transpac.
     */
    public function getAdresseTranspac() {
        return $this->adresseTranspac;
    }

    /**
     * Set the adresse transpac.
     *
     * @param string $adresseTranspac The adresse transpac.
     */
    public function setAdresseTranspac($adresseTranspac) {
        $this->adresseTranspac = $adresseTranspac;
        return $this;
    }
}
