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
 * Adresse rue1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdresseRue1Trait {

    /**
     * Adresse rue1.
     *
     * @var string
     */
    private $adresseRue1;

    /**
     * Get the adresse rue1.
     *
     * @return string Returns the adresse rue1.
     */
    public function getAdresseRue1() {
        return $this->adresseRue1;
    }

    /**
     * Set the adresse rue1.
     *
     * @param string $adresseRue1 The adresse rue1.
     */
    public function setAdresseRue1($adresseRue1) {
        $this->adresseRue1 = $adresseRue1;
        return $this;
    }
}
