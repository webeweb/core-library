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
 * Ad int code pays trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdIntCodePaysTrait {

    /**
     * Ad int code pays.
     *
     * @var string
     */
    private $adIntCodePays;

    /**
     * Get the ad int code pays.
     *
     * @return string Returns the ad int code pays.
     */
    public function getAdIntCodePays() {
        return $this->adIntCodePays;
    }

    /**
     * Set the ad int code pays.
     *
     * @param string $adIntCodePays The ad int code pays.
     */
    public function setAdIntCodePays($adIntCodePays) {
        $this->adIntCodePays = $adIntCodePays;
        return $this;
    }
}
