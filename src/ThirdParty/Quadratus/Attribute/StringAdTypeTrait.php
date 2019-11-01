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
 * Ad type trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdTypeTrait {

    /**
     * Ad type.
     *
     * @var string
     */
    private $adType;

    /**
     * Get the ad type.
     *
     * @return string Returns the ad type.
     */
    public function getAdType() {
        return $this->adType;
    }

    /**
     * Set the ad type.
     *
     * @param string $adType The ad type.
     */
    public function setAdType($adType) {
        $this->adType = $adType;
        return $this;
    }
}
