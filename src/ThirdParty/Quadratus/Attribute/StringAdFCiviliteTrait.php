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
 * Ad f civilite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdFCiviliteTrait {

    /**
     * Ad f civilite.
     *
     * @var string
     */
    private $adFCivilite;

    /**
     * Get the ad f civilite.
     *
     * @return string Returns the ad f civilite.
     */
    public function getAdFCivilite() {
        return $this->adFCivilite;
    }

    /**
     * Set the ad f civilite.
     *
     * @param string $adFCivilite The ad f civilite.
     */
    public function setAdFCivilite($adFCivilite) {
        $this->adFCivilite = $adFCivilite;
        return $this;
    }
}
