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
 * Ad f code postal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdFCodePostalTrait {

    /**
     * Ad f code postal.
     *
     * @var string
     */
    private $adFCodePostal;

    /**
     * Get the ad f code postal.
     *
     * @return string Returns the ad f code postal.
     */
    public function getAdFCodePostal() {
        return $this->adFCodePostal;
    }

    /**
     * Set the ad f code postal.
     *
     * @param string $adFCodePostal The ad f code postal.
     */
    public function setAdFCodePostal($adFCodePostal) {
        $this->adFCodePostal = $adFCodePostal;
        return $this;
    }
}
