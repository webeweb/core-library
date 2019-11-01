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
 * Adresse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdresseTrait {

    /**
     * Adresse.
     *
     * @var string
     */
    private $adresse;

    /**
     * Get the adresse.
     *
     * @return string Returns the adresse.
     */
    public function getAdresse() {
        return $this->adresse;
    }

    /**
     * Set the adresse.
     *
     * @param string $adresse The adresse.
     */
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
        return $this;
    }
}
