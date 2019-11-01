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
 * Adresse rue2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdresseRue2Trait {

    /**
     * Adresse rue2.
     *
     * @var string
     */
    private $adresseRue2;

    /**
     * Get the adresse rue2.
     *
     * @return string Returns the adresse rue2.
     */
    public function getAdresseRue2() {
        return $this->adresseRue2;
    }

    /**
     * Set the adresse rue2.
     *
     * @param string $adresseRue2 The adresse rue2.
     */
    public function setAdresseRue2($adresseRue2) {
        $this->adresseRue2 = $adresseRue2;
        return $this;
    }
}
