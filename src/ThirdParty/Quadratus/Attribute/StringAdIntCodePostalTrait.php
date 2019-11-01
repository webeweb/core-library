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
 * Ad int code postal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdIntCodePostalTrait {

    /**
     * Ad int code postal.
     *
     * @var string
     */
    private $adIntCodePostal;

    /**
     * Get the ad int code postal.
     *
     * @return string Returns the ad int code postal.
     */
    public function getAdIntCodePostal() {
        return $this->adIntCodePostal;
    }

    /**
     * Set the ad int code postal.
     *
     * @param string $adIntCodePostal The ad int code postal.
     */
    public function setAdIntCodePostal($adIntCodePostal) {
        $this->adIntCodePostal = $adIntCodePostal;
        return $this;
    }
}
