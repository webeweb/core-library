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
 * Ad f type adresse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdFTypeAdresseTrait {

    /**
     * Ad f type adresse.
     *
     * @var string
     */
    private $adFTypeAdresse;

    /**
     * Get the ad f type adresse.
     *
     * @return string Returns the ad f type adresse.
     */
    public function getAdFTypeAdresse() {
        return $this->adFTypeAdresse;
    }

    /**
     * Set the ad f type adresse.
     *
     * @param string $adFTypeAdresse The ad f type adresse.
     */
    public function setAdFTypeAdresse($adFTypeAdresse) {
        $this->adFTypeAdresse = $adFTypeAdresse;
        return $this;
    }
}
